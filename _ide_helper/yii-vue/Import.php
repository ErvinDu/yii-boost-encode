<?php
namespace yiivue;

use yii\web\View;
use yii\helpers\ArrayHelper;
use yii\data\ActiveDataProvider;
use yiivue\core\VueComponent;

class Import{
	public function value(View $view, $data, $name){}
	public function dataProvider(View $view, ActiveDataProvider $dataProvider, $name){}
	public function component(View $view, $paths, array $params = []){}
	public function componentByContent(View $view, $content){}
	public function componentByHtml(View $view, $html, $name){}
}