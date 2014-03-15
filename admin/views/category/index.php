<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var common\models\searchs\CategorySearch $searchModel
 */

$this->title = '栏目管理';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="category-index">

    <div class="panel panel-default">
        <div class="panel-heading">
            <?= Html::encode($this->title) ?>
        </div>
        <div class="panel-body">

            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <p>
                <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    //'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'id',
                        'name',
                        'desc',
                        'root',
                        'lft',
                        'rgt',
                        'level',
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'header' => 'Options',
                        ],
                    ],
                ]); ?>
        </div>
    </div>





</div>
