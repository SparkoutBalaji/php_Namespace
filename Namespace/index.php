<?php 
// namespace laptop;
// namespace computer;


include 'laptop.php';
include 'computer.php';

$obj = new computer\system;
$obj -> operating();
$obj = new laptop\system;
$obj -> operating();



?>