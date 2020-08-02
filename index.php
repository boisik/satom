<?php
/**
 * Created by PhpStorm.
 * User: alink
 * Date: 31.07.2020
 * Time: 2:38
 */
include('model/bootstrap/autoloader.php');


$rule = 'Model\\Conditions\\Email';
$data = 'frfr';
$obj = new $rule();
var_dump($obj->isOk($data));