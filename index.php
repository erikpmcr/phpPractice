<?php
    session_start();
    include "services/validationService.php";
    include "services/sessionMessanges.php";
    include "services/categoryChecker.php";
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>
            Inscription sheet
        </title>
        <meta name ="author" content="">
        <meta name = "description" content="">
        <meta name = "viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <p>Sheet for subscription of competitors</p>
        <form action="script.php" method="POST">
            <?php
                $errorMessage = getErrorMessage();
                if(!empty($errorMessage))
                {
                    echo $errorMessage;
                }

                $successmessage = getSuccessMessage();
                if(!empty($successmessage))
                {
                    echo $successmessage;
                }
            ?>
            <p>Your name: <input type="text" name="name" /></p>
            <p>Your age: <input type="text" name="age"/></p>
            <p><input type="submit" value="Send competitor's data"/></p>
        </form>
    </body>

</html>