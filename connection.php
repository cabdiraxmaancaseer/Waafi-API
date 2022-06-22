<?php

//ini_set('display_errors','1');
$host='localhost';
$username='root';
$password='';
$database='paymentsDb';

$connection=mysqli_connect($host,$username,$password,$database);

if(!$connection){
	die('isku xirkaagii wuu shaqeyn waayay sababtoo ah: '.mysqli_connect_error());
}else{
	
}
