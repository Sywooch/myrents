<?php $viewdescription = (isset($rent->descriptions[0]))?$rent->descriptions[0]:RentDescription::model()->findByPk(array('rent'=>$rent->id,'language'=>1)); 
$this->pageTitle=$viewdescription->name;
?>

<script type="text/javascript">
$(function() {$(".flash-alert-success, .flash-alert-error").fadeOut(10000);});
$(function() {
    $('#close').click(function(){
        $('.no_full_rent').css({'display':'none'});
    });
});</script>

<script>
mr_dialog_edit_rent('<?php echo Yii::t('default','dialog.editrent.title')?>', '<?php echo Yii::t('default','dialog.yes')?>', '<?php echo Yii::t('default','dialog.no')?>', '<?php echo Yii::t('default','dialog.cancel')?>');
</script>

<div id="dialog"></div>
<div class="main one">
    <div class="mainhead">
      <div>
        <div>
          <div></div>
          <table border="0" cellpadding="0" cellspacing="0" width="99%"><tr><td valign="middle"><?php echo preg_replace('/([\,\.])(?!\s)/ui', '$1 ', $viewdescription->name)?></td><td><a href="/search/" class="search_btn flt_r popEdge" title="<?php echo Yii::t('default','search.button');?>"></a></td></tr></table>
        </div>
      </div>
    </div>
    <div class="content">
<?php if(!$rent->isFull) {?>
<div class="no_full_rent">
    <span style="float:left"><?php echo Yii::t('default','no full rent')?></span>
    <a id="close" href="javascript:void(0)" class="close flt_r"></a>
     <div class="clr"></div>
</div>
<?php }?>
      <div class="tab_content">
        <table style="width:100%" cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td class="controller_left_side" valign="top">
<?php $this->widget('ext.widgets.editRentMenuWidget.editRentMenuWidget',array('rentid' => $rent->id,'active' => 'price','in_show' => $rent->in_show));?>
            </td>
            <td class="controller_right_side" valign="top">

		
		

		
		
		
            <div class="controller_edit" id="returnform">
                 <?php if(Yii::app()->user->hasFlash('error')):?>
<div class="flash-alert-error">
<?php echo Yii::app()->user->getFlash('error')?>
</div>
                    <script type="text/javascript">hasChange = true;</script>
<?php endif?>
<?php if(Yii::app()->user->hasFlash('success')):?>
<div class="flash-alert-success">
<?php echo Yii::app()->user->getFlash('success')?>
</div>
                    <script type="text/javascript">hasChange = false;</script>
<?php endif?>
              <div class="controller_pdd">
                <b class="stl_2"><?php echo Yii::t('default','bill sell price') ?>:</b>
                <div class="example"><?php echo Yii::t('default','sell price context') ?></div><br />
           <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'editrent',
	'clientOptions'=>array(
	'validateOnSubmit'=>true
	),
        'htmlOptions'=>array('name'=>'editrent')
)); ?>


             <input type="hidden" value="" name="newdoc" id="newdoc">
              <table border="0" width="100%" cellpadding="6" cellspacing="0">
<tr>
    <td width="30%">
         <?php echo $form->error($rent,'price_day', array('style'=>'left:605px')); ?>
        <?php echo $form->textField($rent,'price_day',array('maxlength'=>9));?> 
    </td>
        <td width="50%" align="left">
<?php echo $form->dropDownList($rent,'currency_id',CHtml::listData($currency, 'id', 'full_name'),array('id'=>'select_currency'))?>
    </td>
</tr>
</table>  
<div class="pdd_10"></div>
                   <?php $this->endWidget(); ?>
                <script type="text/javascript">
                hasChange = false;    
            </script>
              </div>
            
<?php 
    echo CHtml::link('<span><b><i>'. Yii::t('default','save bill button') . '</i></b></span>','javascript:void(0)',array('onclick'=>'document.editrent.submit();','class'=>'btn_marg abutton blue'));
?>  
            
            </div></td>
          </tr>
        </table>
      </div>
    </div>
  </div>

<script type="text/javascript">

jQuery(function($){
	$.imageTick.logging = true;
	$(".terms").imageTick({
		image_tick_class: "terms",

		custom_button: function($label){
		    $label.hide();
		    return '<div><span>' + $label.text() + '</span></div>';
		}
        });

});
</script>
<script type="text/javascript">
<!--
jQuery(document).ready(function(){

    var params = {
            changedEl: "#select_currency",
            visRows: 5,
            scrollArrows: true

    }
    cuSel(params);

});
-->
</script>
