<?php
/**
 * EOS eCommerce System
 * @author Simon <Simon@authbuy.org>
 * @filename SiteController.php
 * @copyright Copyright (c) 2012-2013 EOS team (http://www.authbuy.org)
 * @license http://www.authbuy.org/license.txt
 * @license 此项目为商业项目，严禁外泄以及带出公司。适用于项目中任何文件。
 * @contact <fastcgi@outlook.com>
 * @version $Id$
 * @created 14-3-12 下午1:25
 */

namespace admin\controllers;

class SiteController extends AdminController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
} 