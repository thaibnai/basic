<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Issue */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="issue-form">

    <?php $form = ActiveForm::begin(); ?>
<?php /*
    <?= $form->field($model, 'issue_title')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'issue_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date')->textInput() ?> */?>

    <?= $form->field($model, 'status')->dropDownList([ 'RECIVED' => 'RECIVED', 'SEEN' => 'SEEN', 'PENDING' => 'PENDING', 'RESOLVED' => 'RESOLVED', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>