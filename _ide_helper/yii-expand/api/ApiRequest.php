<?php
namespace yiiexpand\api;

use Yii;
use yii\web\BadRequestHttpException;

class ApiRequest{
	public function checkGet($list){}
	public function checkPost($list){}
	public function getJsonParams(array $requests=[]){}
	public function getGetParams($list, $allowNull = false){}
	public function getPostParams($list, $allowNull = false){}
	public function isHttps(){}
}