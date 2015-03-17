<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IssueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
echo "<h4> Welcome to </h4>";
$this->title = 'Report Issues';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="issue-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

 <br /> <br />
  <p>
      <?= Html::a('NEW Issue', ['create'], ['class' => 'btn btn-success']) ?> 

  <h5 style="color:blue">Press NEW ISSUE Button to Report a new issue </h5>
         <br /> <br />
      
    <?= Html::a('Current Issues', ['views'], ['class' => 'btn btn-success']) ?>
     <h5 style="color:blue"> Pess CURRENT ISSUES to view the current reports </h5>
    </p> </center>

    <?php  /*= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'issue_id',
            'issue_title',
            'issue_description:ntext',
            'issue_image',
            'date',
            'status',
             'email:email',
             'your_department',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); */?>

</div>
