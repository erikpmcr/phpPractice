<?php
    session_start();
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
                $errorMessage = isset($_SESSION['error-message'])?$_SESSION['error-message']:'';
                if(!empty($errorMessage))
                {
                    echo $errorMessage;
                }

                $successmessage = isset($_SESSION['success-message'])?$_SESSION['success-message']:'';
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