<?php

/**
 * 内容接口类
 */
class PostController extends AppApi {

    /**
     * 列表
     */
    public function actionIndex() {
        $data = array();
        $this->jsonOutPut(1, $data);
    }

}
