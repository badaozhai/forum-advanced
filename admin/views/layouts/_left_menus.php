<?php
    use yii\helpers\Html;
?>
<div class="sidebar-collapse">
    <ul class="nav" id="side-menu">

        <li class="sidebar-search">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                     <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                </span>
            </div>
            <!-- /input-group -->
        </li>

        <li>
            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>首 页</a>
        </li>

        <li class="<?php if ($this->context->id == 'category'): ?> active <?php endif; ?>">
            <a href="#"><i class="fa fa-wrench fa-fw"></i>栏目管理<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <?= Html::a('栏目列表', ['category/index']); ?>
                </li>
                <li>
                    <?= Html::a('创建栏目', ['category/create']); ?>
                </li>
            </ul>
        </li>

    </ul>
    <!-- /#side-menu -->
</div>
<!-- /.sidebar-collapse -->