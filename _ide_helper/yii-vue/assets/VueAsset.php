<?php
namespace yiivue\assets;

use Yii;
use yii\web\View;
use yii\web\AssetBundle;

class VueAsset extends AssetBundle{
	public $sourcePath;
	public $css;
	public $js;
	public $jsOptions;
	public $cssOptions;
	public $depends;
}