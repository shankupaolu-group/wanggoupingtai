<?php
 
class ClubListController extends BaseController {

    protected $model = '';

    public function init() {
        $this->model = substr(__CLASS__, 0, -10);//定义模型名，类名去掉Controller的名字是模型的类名
        parent::init();
        //dump(Yii::app()->request->isPostRequest);
    }

    public function actionDelete($id) {//数据表的删除操作
        parent::_clear($id);
    }
    

    public function actionCreate() {   
        $modelName = $this->model;
        $model = new $modelName('create');//创建模型实例
        $data = array();
        if (!Yii::app()->request->isPostRequest) {
            $data['model'] = $model;//模型实例传给$data['model']
            $this->render('update', $data);//渲染update页面时把$data传进去
        }else{
            $this-> saveData($model,$_POST[$modelName]);
        }
    }

    public function actionUpdate($id) {
        $modelName = $this->model;
        $model = $this->loadModel($id, $modelName);//默认通过主键加载模型
        if (!Yii::app()->request->isPostRequest) {
           $data = array();
           $data['model'] = $model;
           $this->render('update', $data);
        } else {
           $this-> saveData($model,$_POST[$modelName]);//收到的表单有名为$modelName的字典，键名与模型的属性名对应，验证通过就传入数据库
        }
    }
  
 function saveData($model,$post) {
       $model->attributes =$post;//批量赋值
       show_status($model->save(),'保存成功', get_cookie('_currentUrl_'),'保存失败');  
 }

    ///列表搜索
     public function actionIndex( $keywords = '') {
        set_cookie('_currentUrl_', Yii::app()->request->url);
        $modelName = $this->model;
        $model = $modelName::model();
        $criteria = new CDbCriteria;//传入一个查询字典
        $criteria->order = 'club_code';
        $data = array();
        parent::_list($model, $criteria, 'index', $data);
    }

}
