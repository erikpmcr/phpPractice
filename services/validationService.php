<?php

function validateName(string $name) : bool
{
    if(empty($name))
    {
        setErrorMessage("name can't be empty, please input a value");
        //header('location: index.php');
        return false;
    }
    else if(strlen($name)>30){
        setErrorMessage("name is too long, please input a new value");
        //header('location: index.php');
        return false;
    }else if(strlen($name)<2){
        setErrorMessage("name is too short, please input a new value");
        //header('location: index.php');
        return false;
    }
    return true;
}

function validateAge(string $age) : bool
{
    if($age<=5 || $age>150 || !is_numeric($age) || empty($age))
    {
        setErrorMessage("invalid age");
        //header('location: index.php');
        return false;
    }
    return true;
}

?>