<?php
use admin\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>

<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php echo Yii::$app->charset; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo Html::encode($this->title); ?>-<?php echo Html::encode(Yii::$app->id);?></title>
    <?php $this->head(); ?>
</head>
<body>
<?php $this->beginBody(); ?>

<div id="wrapper">

<!--top nav--->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <?php echo $this->render('/layouts/_top_nav'); ?>
</nav>
<!--top nav EOF -->

<!--left nav-->
<nav class="navbar-default navbar-static-side" role="navigation">
    <?php echo $this->render('/layouts/_left_menus'); ?>
</nav>
<!--left nav EOF-->

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <?php echo Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []
                ]); ?>
        </div>
    </div>

    <div class="row">
        <?php echo $content ?>
    </div>
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->endBody(); ?>
</body>

</html>
<?php $this->endPage(); ?>
