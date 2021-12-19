<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>




<div class="p-1">
    <div class="container py-5">
        <div class="row">
            <?php
            $query = "SELECT * FROM share ORDER BY id DESC";
            $query_run = mysqli_query($connection, $query);
            if (mysqli_num_rows($query_run) > 0) {
                while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                    <div class="col-md-4 p-1">
                        <div class="card">
                            <!-- dropup button -->
                            <div class=" d-linline-block ms-4 btn-group">

                                <form action="" method="post" class="d-inline-block mt-2>
                                            <input type=" hidden" name="edit_id" value="">
                                    <button type="submit" name="edit_btn" class="btn btn-success btn-sm ms-1 mb-1">EDIT</button>
                                </form>

                                <form action="" method="post" class="d-inline-block mt-2>

                                <input type=" hidden" name="edit_id" value="">
                                    <button class="btn btn-danger btn-sm ms-1 mb-1" data-mdb-toggle="modal" data-mdb-target="#exampleModal"> DELETE </button>
                                </form>

                            </div>
                            <div class="card-body bg-info text-white bg-opacity-60" ">
                            
                                <div>
                                    <p> Incident Location:<?php echo $row['name']; ?></p>
                                    <br>

                                        <p> Incident Location:<?php echo $row['location']; ?></p>
                                            <br>
                                        <p> Comment: <?php echo $row['message']; ?></p>
                                        <div>
                                            <span>  Date:
                                                <?php
                                                $date = $row['date'];
                                                echo date('d-m-y', strtotime($date));
                                                ?>
                                            </span>
                                            <span class=" p-2"> Time:
                                <?php
                                $time = $row['time'];
                                echo date('H:i', strtotime($time));
                                ?>
                                </span>

                            </div>


                        </div>
                    </div>
        </div>
    </div>

<?php
                }
            } else {
                echo "No Data Found";
            }
?>
</div>
</div>

</div>




</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Do You Want To Delete Node?</h6>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> Your information will be deleted </div>
            <div class="modal-footer">
                <form action="code.php" method="post">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                        Yes
                    </button>
                </form>



                <button type="button" class="btn btn-primary" data-mdb-dismiss="modal" aria-label="Close">No</button>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/script.php');
include('includes/footer.php');
?>