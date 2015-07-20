<?php

class HospitalController extends Q {
    
    public function actionIndex() {
        $criteria = new CDbCriteria();
        $criteria->order = 'score DESC';
        //$criteria->select = 'id,title';
        $model = new Hospital;
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
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }
    

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Hospital the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Hospital::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Hospital $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'hospital-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
