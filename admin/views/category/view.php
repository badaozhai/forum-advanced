<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var common\models\Category $model
 */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '栏目管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-view">

    <div class="panel-default">
        <div class="panel-heading"><?= Html::encode($this->title); ?></div>
        <div class="panel-body">
            <p>
                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => Yii::t('app', 'Are you sure to delete this item?'),
                            'method' => 'post',
                        ],
                    ]) ?>
            </p>

            <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'name',
                        'desc',
                        'root',
                        'lft',
                        'rgt',
                        'level',
                    ],
                ]) ?>
        </div>
    </div>



</div>
