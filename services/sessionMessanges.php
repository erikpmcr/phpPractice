<?php
//session_start();
function setErrorMessage(string $message) : void
{
    $_SESSION['error-message'] = $message;
}

function getErrorMessage() : ?string
{
    if(isset($_SESSION['error-message']))
    {
        return $_SESSION['error-message'];
    }
    return null;
}

function removeErrorMessage(): void
{
    if(isset($_SESSION['error-message']))
        unset($_SESSION['error-message']);
}
function setSuccessMessage(string $message) : void
{
    $_SESSION['success-message'] = $message;
}

function getSuccessMessage(): ?string
{
    if(isset($_SESSION['success-message']))
    {
        return $_SESSION['success-message'];
    }
    return null;
}

function removeSuccessMessage(): void
{
    if(isset($_SESSION['success-message']))
        unset($_SESSION['success-message']);
}

?>