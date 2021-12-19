<?php
// session_start();
include('security.php');


// Logout button

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');

}

?>
