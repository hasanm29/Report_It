<?php
include('database/dbconfig.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="container py-5">
    Hit Counter
</div>
<?php
session_start();
if(isset($_SESSION['visitCount'])){
    $_SESSION['visitCount']++;
}
else $_SESSION['visitCount']=1;

echo "<p style='color=Red; font-size=4;'> <b> The Hit Counter is : " .$_SESSION['visitCount'];

?>



<?php
include('includes/footer.php');
?>