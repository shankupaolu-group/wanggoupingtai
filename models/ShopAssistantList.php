<?php

class ShopAssistantList extends BaseModel {
	public $shop_assistant_list_pic='';
    public function tableName() {
        return '{{shop_assistant}}';
    }

    /**
     * 模型验证规则
     */
    public function rules() {
      
        return array(
            //array('product_id', 'required', 'message' => '{attribute} 不能为空'),
			//array('apply_time', 'required', 'message' => '{attribute} 不能为空'),
            //array('store_num', 'required', 'message' => '{attribute} 不能为空'),
			//array('shop_id', 'required', 'message' => '{attribute} 不能为空'),
          //  array('email', 'required', 'message' => '{attribute} 不能为空'),
		    //array('contact_id_card_back', 'required', 'message' => '{attribute} 不能为空'),
			//array('club_address', 'required', 'message' => '{attribute} 不能为空'),
			array('id,password,assistant_name,shop_id','safe',), 
			//array($s1,'safe'),
		);
    }

    /**
     * 模型关联规则
     */
    public function relations() {
        return array(
		 
		);
    }

    /**
     * 属性标签
     */
    public function attributeLabels() {
        return array(
            'assistant_id' => '网店管理员ID',
            'password' => '网店管理员密码',
            'assistant_name' => '网店管理员的昵称',
            'shop_id' => '网店ID',
 );
}

    /**
     * Returns the static model of the specified AR class.
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
	
	

    public function getCode() {
        return $this->findAll('1=1');
    }
}
