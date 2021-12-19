<?php
session_start();
include('database/dbconfig.php');

if($dbconfig)
{
    // echo 'i am coming from security.php';
    // echo 'Database Connected';
}
else
{
    // header('Location: database/dbconfig.php');
}


// if(!$_SESSION['username'])
// {
//     // header('Location: login.php');
//     header('Location: index.php');
// }



?>