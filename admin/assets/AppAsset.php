<?php
/**
 * EOS eCommerce System
 * @author Simon <Simon@authbuy.org>
 * @filename AppAsset.php
 * @copyright Copyright (c) 2012-2013 EOS team (http://www.authbuy.org)
 * @license http://www.authbuy.org/license.txt
 * @license 此项目为商业项目，严禁外泄以及带出公司。适用于项目中任何文件。
 * @contact <fastcgi@outlook.com>
 * @version $Id$
 * @created 14-3-3 下午6:02
 */

namespace adminpanel\assets;


use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [];
    public $js = [];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
} 