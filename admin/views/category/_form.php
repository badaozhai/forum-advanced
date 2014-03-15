<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var common\models\Category $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="category-form">

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo Html::encode($this->title); ?>
        </div>
        <div class="panel-body">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => 255]); ?>

            <?= $form->field($model, 'desc')->textarea(['maxlength' => 255]); ?>

            <?= $form->field($model, 'root')->textInput(['maxlength' => 10]) ?>

            <?= $form->field($model, 'lft')->textInput(['maxlength' => 10]) ?>

            <?= $form->field($model, 'rgt')->textInput(['maxlength' => 10]) ?>

            <?= $form->field($model, 'level')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>



</div>
