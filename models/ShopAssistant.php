<?php
class ShopAssistant extends BaseModel
{
    public function tableName()
    {
        return "{{shop_assistant}}";
    }
    public function attributeLabels()
    {
        return array(
            "id" => "网店管理员ID",
            "password" => "密码",
            "assistant_name" => "网店管理员昵称",
            "shop_id" => "店铺ID"
        );
    }
    public function rules()
    {
        return array(
            array('password,assistant_name,shop_id', 'required','message' => '{attribute}不能为空')
            //array('id,password,assistant_name,shop_id','safe',),
        
        );
    }
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
