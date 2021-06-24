<?php
namespace yiiexpand\backend\filters;

use Yii;
use yii\filters\AccessControl;

class RbacFilters extends AccessControl{
	public $extra_actions;
	public $extra_users;
	public function __construct(array $config = []){}
	public function init_rbac_rules(array &$config = []){}
	public function init_extra_rules(array &$config = []){}
}