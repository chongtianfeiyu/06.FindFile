<?php
require('FindFile.class.php');
require('UnsetBom.class.php');

$folder = dirname(__FILE__);

$obj = new UnsetBom(array('php','css','js'));
$obj->process($folder);

print_r($obj->files);
?>