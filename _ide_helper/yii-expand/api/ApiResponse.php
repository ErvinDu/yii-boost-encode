<?php
namespace yiiexpand\api;

use Yii;
use yii\web\Response;
use yii\data\ActiveDataProvider;

class ApiResponse extends Response{
	public $responseFormat;
	public $enableErrorData;
	public $enableStatusCode;
	public function init(){}
	public function setCode($value){}
	public function setMessage($value){}
	public function addResultItem($name, $data){}
	public function removeResultItem($name){}
	public function addPagination($page, $pageSize, $totalCount){}
	public function addPaginationByDataProvider(ActiveDataProvider &$dataProvider){}
	public function send(){}
}