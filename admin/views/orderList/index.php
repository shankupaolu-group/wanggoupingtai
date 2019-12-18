<div class="box">
      <div class="box-content">
    	<div class="box-header">
            <a class="btn" href="<?php echo $this->createUrl('create');?>"><i class="fa fa-plus"></i>添加商品</a>
            <a class="btn" href="javascript:;" onclick="we.reload();"><i class="fa fa-refresh"></i>刷新</a>
            <a style="display:none;" id="j-delete" class="btn" href="javascript:;" onclick="we.dele(we.checkval('.check-item input:checked'), deleteUrl);"><i class="fa fa-trash-o"></i>删除</a>
        </div><!--box-header end-->
        <div class="box-search">
            <form action="<?php echo Yii::app()->request->url;?>" method="get">
                <input type="hidden" name="r" value="<?php echo Yii::app()->request->getParam('r');?>">
                <label style="margin-right:10px;">
                    <span>关键字</span>

                    <input style="width:200px;" class="input-text" type="text" name="keywords" value="<?php echo Yii::app()->request->getParam('keywords');?>">
                    <span>订单id：</span>
                    <input style="width:200px;" class="input-text" type="text" name="myid" value="<?php echo Yii::app()->request->getParam('myid');?>">
                </label>
                <button class="btn btn-blue" type="submit">查询</button>
            </form>
        </div><!--box-search end-->
        <div class="box-table">
            <table class="list">
                <thead>
                    <tr>
                        <th class="check"><input id="j-checkall" class="input-check" type="checkbox"></th>
                        <th><?php echo $model->getAttributeLabel('id');?></th>
                        <th><?php echo $model->getAttributeLabel('shop_id');?></th>
                        <th><?php echo $model->getAttributeLabel('user_id');?></th>
                        <th><?php echo $model->getAttributeLabel('price');?></th>
                        <th><?php echo $model->getAttributeLabel('send_addr');?></th>
                        <th><?php echo $model->getAttributeLabel('recv_addr');?></th>
                        <th><?php echo $model->getAttributeLabel('order_state');?></th>
                        <th><?php echo $model->getAttributeLabel('timestamp');?></th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                  	<?php foreach($arclist as $v){ ?>
                    <tr> 	
                        <td class="check check-item"><input class="input-check" type="checkbox" value="<?php echo CHtml::encode($v->id); ?>"></td>           
                        <td><?php echo $v->id; ?></td>
                        <td><?php echo $v->shop_id; ?></td>
                        <td><?php echo $v->user_id; ?></td>
                        <td><?php echo $v->price;?></td>
                        <td><?php echo $v->send_addr; ?></td>
                        <td><?php echo $v->recv_addr; ?></td>
                        <td><?php echo $v->order_state;?></td>
                        <td><?php echo $v->timestamp; ?></td>
                        <td>
                            <a class="btn" href="<?php echo $this->createUrl('update', array('id'=>$v->id));?>" title="编辑"><i class="fa fa-edit"></i></a>
                            <a class="btn" href="javascript:;" onclick="we.dele('<?php echo $v->id;?>', deleteUrl);" title="删除"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
					<?php } ?>
                </tbody>
            </table>
        </div><!--box-table end-->
        <div class="box-page c"><?php $this->page($pages); ?></div>
    </div><!--box-content end-->
</div><!--box end-->
<script>
var deleteUrl = '<?php echo $this->createUrl('delete', array('id'=>'ID')); ?>';
</script>
