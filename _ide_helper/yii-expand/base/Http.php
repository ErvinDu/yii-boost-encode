<?php
namespace yiiexpand\base;

use yii\base\Exception;

class Http{
	public function __construct($opt_header = false){}
	public function get($url){}
	public function post($url,$data){}
	public function close(){}
	public function getHttpCode(){}
	public function getRequestHeader(){}
	public function getResponseHeader(){}
	public function getResponseCookie(){}
	public function setHeader(array $header){}
	public function setCookie($cookie){}
	public function setCookieFile($cookie_file){}
	public function setContentType($type){}
	public function setUserAgent($value){}
	public function setSetopt($option, $value){}
	public function setSslCert($sslCertPath, $type = 'PEM'){}
	public function setSslKey($sslKeyPath, $type = 'PEM'){}
}