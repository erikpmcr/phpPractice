<?php



function defineCompetitorCategory(string $name, string $age): ?string
{
    $Category =[];
    $Category[] = 'child';
    $Category[] = 'teenager';
    $Category[] = 'adult';
    $Category[] = 'senior';

    if(validateName($name) && validateAge($age)) 
    {
        if($age >= 6 && $age <= 12)
        {
            //echo 'child';
            for($i = 0; $i<count($Category); $i++)
            {
                if($Category[$i] == 'child')
                {
                    setSuccessMessage(" the swimmer " . $name . " competes in the " . $Category[$i] . " category");
                    removeErrorMessage();
                    //header("location: index.php");
                    return null;
                }
                    //echo " the swimmer ",$pname," competes in the ",$Category[$i]," category";
            }
        }
        else if($age >=13 && $age <=18)
        {
            //echo 'teenager';
            for($i = 0; $i<count($Category); $i++)
            {
                if($Category[$i] == 'teenager')
                {
                    setSuccessMessage(" the swimmer " . $name . " competes in the " . $Category[$i] . " category");
                    removeErrorMessage();
                    //header("location: index.php");
                    return null;
                }
                    //echo " the swimmer ",$pname," competes in the ",$Category[$i]," category";
            }
        }
        else
        {
            //echo 'adult';
            for($i = 0; $i<count($Category); $i++)
            {
                if($Category[$i] == 'adult')
                {
                    setSuccessMessage(" the swimmer " . $name . " competes in the " . $Category[$i] . " category");
                    removeErrorMessage();
                    //header("location: index.php");
                    return null;
                }
                    //echo " the swimmer ",$pname," competes in the ",$Category[$i]," category";
            }
        }
    }
    else
    {
        removeSuccessMessage();
        return getErrorMessage();
    }
}
?>