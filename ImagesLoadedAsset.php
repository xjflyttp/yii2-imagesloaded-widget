<?php

/**
 * ImagesLoaded Asset
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\imagesloaded;

use yii\web\AssetBundle;

class ImagesLoadedAsset extends AssetBundle {

    public $sourcePath = '@bower/imagesloaded';
    public $css = [];
    public $js = ['imagesloaded.pkgd.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
