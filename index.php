<?php

$Category =[];
$Category[] = 'child';
$Category[] = 'teenager';
$Category[] = 'adult';
$Category[] = 'senior';

print_r($Category);

$name = 'Ed';
$age = 19;

var_dump($name);
var_dump($age);

if($age >= 6 && $age <= 12)
{
    echo 'child';
    for($i = 0; $i<count($Category); $i++)
    {
        if($Category[$i] == 'child')
            echo "the swimmer ",$name," competes in the ",$Category[$i]," category";
    }
}
else if($age >=13 && $age <=18)
{
    echo 'teenager';
    for($i = 0; $i<count($Category); $i++)
    {
        if($Category[$i] == 'teenager')
            echo "the swimmer ",$name," competes in the ",$Category[$i]," category";
    }
}
else
{
    echo 'adult';
    for($i = 0; $i<count($Category); $i++)
    {
        if($Category[$i] == 'adult')
            echo "the swimmer ",$name," competes in the ",$Category[$i]," category";
    }
}
?>