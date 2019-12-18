<div class="box">
    <div class="box-title c"><h1><i class="fa fa-table"></i>订单信息</h1><span class="back"><a class="btn" href="javascript:;" onclick="we.back();"><i class="fa fa-reply"></i>返回</a></span></div><!--box-title end-->
    <div class="box-detail">

    <?php  $form = $this->beginWidget('CActiveForm', get_form_list());?>
        <div class="box-detail-tab">
            <ul class="c">
                <li class="current">订单信息</li>
            </ul>
        </div><!--box-detail-tab end-->
        <div class="box-detail-bd">
            <div style="display:block;" class="box-detail-tab-item">
                <table>
                	<tr class="table-title">
                    	<td colspan="2">编辑信息</td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model, 'id'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'id', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'id', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                	<tr>
                    	<td width="30%"><?php echo $form->labelEx($model, 'product_name'); ?></td>
                       <td width="30%">
                            <?php echo $form->textField($model, 'product_name', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'product_name', $htmlOptions = array()); ?>
                        </td>
                    </tr>

                    <tr>
                         <td><?php echo $form->labelEx($model, 'shop_id'); ?></td>
                         <td>
                            <?php echo $form->textField($model, 'shop_id', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'shop_id', $htmlOptions = array()); ?>
                        </td>
                    </tr>

                    <tr>
                         <td><?php echo $form->labelEx($model, 'product_img_url'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'product_img_url', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'product_img_url', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                     <tr>
                        <td><?php echo $form->labelEx($model, 'product_detail'); ?></td>
                        <td><!--区域选择弹窗未显示-->
                            <?php echo $form->textField($model, 'product_detail', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'product_detail', $htmlOptions = array()); ?>
                        </td>
                    </tr>

                    <tr>
                         <td><?php echo $form->labelEx($model, 'product_count'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'product_count', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'product_count', $htmlOptions = array()); ?>
                        </td>
                    </tr>

                    <tr>
                         <td><?php echo $form->labelEx($model, 'price'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'price', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'price', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    
                     <tr>
                         <td><?php echo $form->labelEx($model, 'product_type'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'product_type', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'product_type', $htmlOptions = array()); ?>
                        </td>
                    </tr>

                </table>
                </div>
              
            </div><!--box-detail-tab-item end   style="display:block;"-->
            
        </div><!--box-detail-bd end-->
        
        <div class="box-detail-submit"><button onclick="submitType='baocun'" class="btn btn-blue" type="submit">保存</button><button class="btn" type="button" onclick="we.back();">取消</button></div>
    <?php $this->endWidget(); ?>
    </div><!--box-detail end-->
</div><!--box end-->
