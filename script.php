<?php

session_start();

include "services/validationService.php";

include "services/sessionMessanges.php";

include "services/categoryChecker.php";


//print_r($Category);

$pname = $_POST["name"];
$page = $_POST["age"];



/*
$gname = $_GET["name"];
$gage = $_GET["age"];
*/
//var_dump($pname);
//var_dump($page);

defineCompetitorCategory($pname,$page);

header('location: index.php')


?>