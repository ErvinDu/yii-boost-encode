<?php
namespace yiiexpand\utils;

class RSAUtil{
	public function readPublicKey($content){}
	public function readPrivateKey($content){}
	public function readPublicKeyByFile($path){}
	public function readPrivateKeyByFile($path){}
	public function readPkcs12($path, $password=null){}
	public function setSignatureAlg($value){}
	public function setPadding($value){}
	public function freeKey(){}
	public function sign($string){}
	public function check($string, $sign){}
	public function privateEncrypt($string){}
	public function privateDecrypt($string){}
	public function publicEncrypt($string){}
	public function publicDecrypt($string){}
}