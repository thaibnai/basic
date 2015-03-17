<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Issue */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="issue-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'issue_title')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'issue_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'issue_image')->fileInput();
    //textInput(['maxlength' => 200]) ?>

    <?php /*= $form->field($model, 'date')->textInput() */?>

    <?php /*= $form->field($model, 'status')->dropDownList([ 'RECIVED' => 'RECIVED', 'SEEN' => 'SEEN', 'PENDING' => 'PENDING', 'DONE' => 'DONE', ], ['prompt' => '']) */?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'your_department')->dropDownList([ 'DEPT1' => 'DEPT1', 'DEPT2' => 'DEPT2', 'DEPT3' => 'DEPT3', 'DEPT4' => 'DEPT4', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
