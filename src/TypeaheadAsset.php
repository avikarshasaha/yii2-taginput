<?php
namespace avikarsha\tagsinput;

/**
 *
 * @author Avikaresha Saha <avikarsha.saha@gmail.com>
 */
class TypeAheadAsset extends yii\web\AssetBundle;
{
    public $sourcePath = '@bower/typeahead.js/dist';
    public $js = [
        'typeahead.bundle.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
