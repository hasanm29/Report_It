<?php 
include('security.php');


// Add Admin Profile
if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];

    if($password === $cpassword)
    {
        $query = "INSERT INTO register (username, email, password,usertype) VALUES ('$username','$email','$password','$usertype')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            // echo "Saved"
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: register.php');
        }
        else
        {
            // echo "Not Saved";
            $_SESSION['status'] = "Admin Profile Not Added";
            header('Location: register.php');
        }
    }
    else
    {
        $_SESSION['status'] = "Password and Confirm Password Does Not Match";
        header('Location: register.php');
    }
}


// Update admin information

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $usertype = $_POST['edit_usertype'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password', usertype='$usertype' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data Is Updated";
        header('Location: register.php');

    }
    else
    {
        $_SESSION['status'] = "Your Data Is Not Updated";
        header('Location: register.php');

    }
}

// delete button
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run =  mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Not Deleted";
        header('Location: register.php');
    }
}





// Update Share Experience

if(isset($_POST['shareupdatebtn']))
{
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $location = $_POST['edit_location'];
    $message = $_POST['edit_message'];

    $query = "UPDATE share SET name='$name', location='$location', message='$message' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data Is Updated";
        header('Location: shareexperience.php');

    }
    else
    {
        $_SESSION['status'] = "Your Data Is Not Updated";
        header('Location: shareexperience.php');

    }
}


// delete ShareExperience button
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM share WHERE id='$id' ";
    $query_run =  mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        header('Location: shareexperience.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Not Deleted";
        header('Location: shareexperience.php');
    }
}





// Log in

// if(isset($_POST['login_btn']))
// {
//     $email_login = $_POST['email'];
//     $password_login = $_POST['password'];
//     $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' ";
//     $query_run = mysqli_query($connection, $query);


//     if(mysqli_fetch_array($query_run))
//     {
//         $_SESSION['username'] = $email_login;
//         header('Location: index.php');
//     }
//     else
//     {
//         $_SESSION['status'] = "Email or Password is Invalid";
//         header('Location: login.php');
//     }

// }
if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email']; 
    $password_login = $_POST['password']; 

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login'";
    $query_run = mysqli_query($connection, $query);
    $usertypes = mysqli_fetch_array($query_run);

    if($usertypes['usertype'] == "Admin")
    {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
    }
    else if($usertypes['usertype'] == "User")
    {
        $_SESSION['username'] = $email_login;
        header('Location: ../main/index.php');
    }
    else
    {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: login.php');
    }
}





// Delete Share Experience
// delete button
if(isset($_POST['delete_share_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM share WHERE id='$id' ";
    $query_run =  mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        // header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Not Deleted";
        // header('Location: register.php');
    }
}



















?>
