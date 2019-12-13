<?php

class IndexController extends BaseController
{
    public $layout = "//layouts/mylayout"; //设置自定义布局

    public function actionIndex()
    {
        $view = isset($_GET['site']) ? $_GET['site'] : 'index';
        $this->render($view);

        // $this->render('index');
    }

    public function actionLogin()
    {
        $this->login_form();
    }

    public function actionLogout()
    {
        $this->login_form();
    }

    function login_form()
    {
        Yii::app()->session['uid'] = null;
        $model = User::model();
        $data = [];
        $data['model'] = $model;
        if (Yii::app()->request->isPostRequest) {
            if (isset($_POST['User[username]']) && isset($_POST['User[password]'])) {
                $username = $_POST['User[username]'];
                $password = $_POST['User[password]'];
                $result = $model->find('username=?,password=?',[$username,$password]);
                if (isset($result)){
                    Yii::app()->session['uid']=$result->username;
                    $this->render('index');
                } 
             }
        } else
        $this->render('login', $data);
    }

  
    public function actionRegister()
    {
        $this->render("register");
    }
}
