<?php
namespace yiivue\core;

use yii\web\View;

class VueComponent{
	public function __construct($content){}
	public function export(View $view){}
	public function begin(){}
	public function end(View $view){}
}