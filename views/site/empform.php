 <?php 
 use yii\helpers\Html;
 use yii\widgets\ActiveForm;
 ?>
<?php
if(yii::$app->session->hasFlash('success'))
{
	echo "<div class='alert alert-success'><h2>" .yii::$app->session->getFlash('success') ."</h2></div>"  ;
}

?>
 <?php $form = Activeform::begin(); ?> 
 <?=$form->field($model,'name');?>
 <?=$form->field($model,'email');?>
 <?= html::submitButton('submit',['class'=>'btn btn-success']); ?>