<?php
namespace avikarsha\tagsinput;

/**
 * Asset bundle for tagsinput Widget
 *
 */
class TagsinputAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/bootstrap-tagsinput/dist';

    public $css = [
        'bootstrap-tagsinput.css',
    ];

    public $js = [
        'bootstrap-tagsinput.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'avikarsha\tagsinput\TypeaheadAsset'
    ];
}
