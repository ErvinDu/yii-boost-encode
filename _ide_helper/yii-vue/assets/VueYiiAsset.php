<?php
namespace yiivue\assets;

use Yii;
use \yii\web\View;
use yii\web\AssetBundle;

class VueYiiAsset extends AssetBundle{
	public $sourcePath;
	public $js;
	public $jsOptions;
	public function registerAssetFiles($view){}
	public function registerCsrfAuthentication($view){}
}