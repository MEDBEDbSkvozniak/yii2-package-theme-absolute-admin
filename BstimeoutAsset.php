<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class BstimeoutAsset extends AssetBundle
{
    public $js = [
        'bs-timeout.min.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/bstimeout';
        parent::init();
        $type = YII_ENV_DEV ? '' : '.min';
        $this->js = ['bs-timeout' . $type . '.js',];
    }
}