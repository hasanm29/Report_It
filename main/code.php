<?php 
include('security.php');

// share experience
if(isset($_POST['sharebtn']))
{
    $name = $_POST['name'];
    $location = $_POST['location'];
    $message = $_POST['message'];
    $date = date("Y-m-d");
    $time = date("H:i");

        $query = "INSERT INTO share (name,location,message,date,time) VALUES ('$name','$location','$message','$date','$time')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            // echo "Saved"
            $_SESSION['success'] = "Data Inserted";
            header('Location: share.php');
        }
        else
        {
            // echo "Not Saved";
            // $_SESSION['status'] = "Admin Profile Not Added";
            // header('Location: register.php');
        }
}

?>
