<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">

    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Share Experience</h6>
        </div>
        <div class="card-body">
            <?php
            // providing connection
            // $connection = mysqli_connect("localhost", "root", "", "adminpanel");
            // Retrieving of data
            if (isset($_POST['edit_btn'])) {
                $id = $_POST['edit_id'];
                $query = "select * from share where id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach ($query_run as $row) {
            ?>

                    <form action="code.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                        <div class="form-group">
                            <label> Anonymous Name </label>
                            <input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label> Location </label>
                            <input type="text" name="edit_location" value="<?php echo $row['location'] ?>" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label> Message </label>
                            <input type="text" name="edit_message" value="<?php echo $row['message'] ?>" class="form-control" placeholder="Enter Password">
                        </div>
                        <a href="shareexperience.php" class="btn btn-danger">CANCEL</a>
                        <button type="submit" name="shareupdatebtn" class="btn btn-primary">Update</button>
                    </form>
            <?php
                }
            }
            ?>

        </div>
    </div>
</div>


<?php
include('includes/script.php');
include('includes/footer.php');
?>