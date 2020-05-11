<?php

$Category =[];
$Category[] = 'child';
$Category[] = 'teenager';
$Category[] = 'adult';
$Category[] = 'senior';

print_r($Category);

$pname = $_POST["name"];
$page = $_POST["age"];

/*
$gname = $_GET["name"];
$gage = $_GET["age"];
*/
var_dump($pname);
var_dump($page);


if($page >= 6 && $page <= 12)
{
    echo 'child';
    for($i = 0; $i<count($Category); $i++)
    {
        if($Category[$i] == 'child')
            echo "the swimmer ",$pname," competes in the ",$Category[$i]," category";
    }
}
else if($page >=13 && $page <=18)
{
    echo 'teenager';
    for($i = 0; $i<count($Category); $i++)
    {
        if($Category[$i] == 'teenager')
            echo "the swimmer ",$pname," competes in the ",$Category[$i]," category";
    }
}
else
{
    echo 'adult';
    for($i = 0; $i<count($Category); $i++)
    {
        if($Category[$i] == 'adult')
            echo "the swimmer ",$pname," competes in the ",$Category[$i]," category";
    }
}

?>