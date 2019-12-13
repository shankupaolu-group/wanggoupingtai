<?php

class SiteController extends BaseController {

    ///列表搜索
     public function actionIndex() {
        $view = isset($_GET['site']) ? $_GET['site'] : 'index';
        $this->render($view);
    }

}