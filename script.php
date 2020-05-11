<?php

session_start();

$Category =[];
$Category[] = 'child';
$Category[] = 'teenager';
$Category[] = 'adult';
$Category[] = 'senior';

//print_r($Category);

$pname = $_POST["name"];
$page = $_POST["age"];

if(empty($pname))
{
    $_SESSION['error-message'] = "name can't be empty, please input a value";
    header('location: index.php');
    return;
}
else if(strlen($pname)>30){
    $_SESSION['error-message'] = "name is too long, please input a new value";
    header('location: index.php');
    return;
}
else if($page<=5 || $page>150 || !is_numeric($page))
{
    $_SESSION['error-message'] = "invalid age";
    header('location: index.php');
    return;
}


/*
$gname = $_GET["name"];
$gage = $_GET["age"];
*/
//var_dump($pname);
//var_dump($page);


if($page >= 6 && $page <= 12)
{
    echo 'child';
    for($i = 0; $i<count($Category); $i++)
    {
        if($Category[$i] == 'child')
        {
            $_SESSION['success-message'] = " the swimmer " . $pname . " competes in the " . $Category[$i] . " category";
            header("location: index.php");
            return;
        }
            //echo " the swimmer ",$pname," competes in the ",$Category[$i]," category";
    }
}
else if($page >=13 && $page <=18)
{
    echo 'teenager';
    for($i = 0; $i<count($Category); $i++)
    {
        if($Category[$i] == 'teenager')
        {
            $_SESSION['success-message'] = " the swimmer " . $pname . " competes in the " . $Category[$i] . " category";
            header("location: index.php");
            return;
        }
            //echo " the swimmer ",$pname," competes in the ",$Category[$i]," category";
    }
}
else
{
    echo 'adult';
    for($i = 0; $i<count($Category); $i++)
    {
        if($Category[$i] == 'adult')
        {
            $_SESSION['success-message'] = " the swimmer " . $pname . " competes in the " . $Category[$i] . " category";
            header("location: index.php");
            return;
        }
            //echo " the swimmer ",$pname," competes in the ",$Category[$i]," category";
    }
}

?>