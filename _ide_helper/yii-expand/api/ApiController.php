<?php
namespace yiiexpand\api;

use Yii;
use yii\rest\ActiveController;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;

class ApiController extends ActiveController{
	public $modelClass;
	public $enableDefaultCURD;
	public $enableAuthenticator;
	public function init(){}
	public function verbs(){}
	public function actions(){}
	public function behaviors(){}
	public function authenticator(){}
}