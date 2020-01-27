<?php
require "environment.php";

$config = array();
if(ENVIRONMENT == 'development'){
	define("BASE_URL", "http://localhost/php/super/mvc/");
	$config['dbname'] = 'estrutura_mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';

}else{

	$config['dbname'] = 'estrutura_mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';



}
global $pdo;
try{

	$pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);



}catch(PDOException $e){
	echo "ERRO: ".$e->getMessage();


}
