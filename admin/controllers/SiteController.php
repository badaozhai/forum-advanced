<?php

namespace admin\controllers;

class SiteController extends AdminController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
} 