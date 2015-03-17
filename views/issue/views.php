<?php

use yii\helpers\Html;
use yii\grid\GridView;
?>
<h1>Current Issues </h1>
 <p style="text-align: right;"> <?= Html::a('BACK', ['index'], ['class' => 'btn btn-success']) ?> </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'issue_id',
            'status',
            'issue_title',
            'issue_description:ntext',
            'issue_image',
            'date',
            
             'email:email',
             'your_department',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <center><br /><br /><br /><h4  style="color:blue">  Thank You For Your Cooperation... We Are Working On Fixing These Issues </h4></center>