<?php

class DoctorPaperController extends Q {

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($id = '') {
        if ($id) {
            $model = $this->loadModel($id);
        } else {
            $model = new DoctorPaper;
        }
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['DoctorPaper'])) {
            $model->attributes = $_POST['DoctorPaper'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->actionCreate($id);
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $criteria = new CDbCriteria();
        $criteria->order = 'cTime DESC';
        //$criteria->select = 'id,title';
        $model = new DoctorPaper;
        $count = $model->count($criteria);
        $pager = new CPagination($count);
        $pager->pageSize = 100;
        $pager->applyLimit($criteria);
        $posts = $model->findAll($criteria);
        $this->render('index', array(
            'pages' => $pager,
            'posts' => $posts,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return DoctorPaper the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = DoctorPaper::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param DoctorPaper $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'doctor-paper-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
