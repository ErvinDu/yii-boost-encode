<?php
namespace yiilte\lib;

use yii\base\Model;
use yii\helpers\Html;

class ModelFields{
	public function __construct($model){}
	public function getName($attribute){}
	public function getLabel($attribute){}
	public function getError($attribute){}
}