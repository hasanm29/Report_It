<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body ">
                    <?php
                    $query = "SELECT * FROM homepage WHERE id=1";
                    $query_run = mysqli_query($connection, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>

                            <details>
                                <summary>
                                    <h6 class="d-inline-block ms-2""><?php echo $row['heading']; ?></h6>
                                                            
                            <!-- Default dropup button -->
                                                            
                            <div class=" d-linline-block ms-4 btn-group dropup">
                                        <button type="button" class="hover-zoom" data-mdb-toggle="dropdown" aria-expanded="false"> +

                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="d-inline-block mt-2">
                                                <form action="home_edit.php" method="post">
                                                    <input type="hidden" name="edit_id" value="">
                                                    <button type="submit" name="edit_btn" class="btn btn-success btn-sm ms-1 mb-1">EDIT</button>
                                                </form>
                                            </li>



                                            <li class="d-inline-block mt-2">
                                                <form action="" method="post">
                                                    <input type="hidden" name="delete_id" value="">
                                                    <button type="submit" name="edit_btn" class="btn btn-danger btn-sm ms-1 mb-1">DELETE</button>
                                                </form>
                                            </li>
                                        </ul>
                </div>
                </summary>
                <hr>
                <p class="w3-sans-serif"><?php echo $row['description']; ?> </p>
                </details>
        <?php

                        }
                    } else {
                        echo "No Data Found";
                    }


        ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body ">
                <?php
                $query = "SELECT * FROM homepage WHERE id=2";
                $query_run = mysqli_query($connection, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                ?>

                        <details>
                            <summary>
                                <h6 class="d-inline-block ms-2""><?php echo $row['heading']; ?></h6>
                                                            
                            <!-- dropup button -->
                                                            
                                <div class=" d-linline-block ms-4 btn-group dropup">
                                        <button type="button" class="hover-zoom" data-mdb-toggle="dropdown" aria-expanded="false"> +

                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="d-inline-block mt-2">
                                                <form action="home_edit.php" method="post">
                                                    <input type="hidden" name="edit_id" value="">
                                                    <button type="submit" name="edit_btn" class="btn btn-success btn-sm ms-1 mb-1">EDIT</button>
                                                </form>
                                            </li>



                                            <li class="d-inline-block mt-2">
                                                <form action="" method="post">
                                                    <input type="hidden" name="delete_id" value="">
                                                    <button type="submit" name="edit_btn" class="btn btn-danger btn-sm ms-1 mb-1">DELETE</button>
                                                </form>
                                            </li>
                                        </ul>
                                </div>
                            </summary>
            <hr>
            <p class="w3-sans-serif"><?php echo $row['description']; ?> </p>
            </details>
    <?php

                    }
                } else {
                    echo "No Data Found";
                }


    ?>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card">
        <div class="card-body ">
            <?php
            $query = "SELECT * FROM homepage WHERE id=3";
            $query_run = mysqli_query($connection, $query);
            if (mysqli_num_rows($query_run) > 0) {
                while ($row = mysqli_fetch_assoc($query_run)) {
            ?>

                    <details>
                        <summary>
                            <h6 class="d-inline-block ms-2""><?php echo $row['heading']; ?></h6>
                                                            
                            <!-- Default dropup button -->
                                                            
                            <div class=" d-linline-block ms-4 btn-group dropup">
                                <button type="button" class="hover-zoom" data-mdb-toggle="dropdown" aria-expanded="false"> +

                                </button>
                                <ul class="dropdown-menu">
                                    <li class="d-inline-block mt-2">
                                        <form action="home_edit.php" method="post">
                                            <input type="hidden" name="edit_id" value="">
                                            <button type="submit" name="edit_btn" class="btn btn-success btn-sm ms-1 mb-1">EDIT</button>
                                        </form>
                                    </li>



                                    <li class="d-inline-block mt-2">
                                        <form action="" method="post">
                                            <input type="hidden" name="delete_id" value="">
                                            <button type="submit" name="edit_btn" class="btn btn-danger btn-sm ms-1 mb-1">DELETE</button>
                                        </form>
                                    </li>
                                </ul>
        </div>
        </summary>
        <hr>
        <p class="w3-sans-serif"><?php echo $row['description']; ?> </p>
        </details>
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
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">


                    <div>
                        <h3 class="d-inline-block ms-2">Info</h3>
                        <div class="d-linline-block ms-5 btn-group dropup">
                            <button type="button" class="hover-zoom" data-mdb-toggle="dropdown" aria-expanded="false"> +

                            </button>
                            <ul class="dropdown-menu">
                                <li class="d-inline-block mt-2">
                                    <form action="home_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="">
                                        <button type="submit" name="edit_btn" class="btn btn-success btn-sm ms-1 mb-1">EDIT</button>
                                    </form>
                                </li>



                                <li class="d-inline-block mt-2">
                                    <form action="" method="post">
                                        <input type="hidden" name="delete_id" value="">
                                        <button type="submit" name="edit_btn" class="btn btn-danger btn-sm ms-1 mb-1">DELETE</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    $query = "SELECT * FROM homepagelinks WHERE id BETWEEN 1 AND 3";
                    $query_run = mysqli_query($connection, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>
                            <div>
                                <a href="First link"><?php echo $row['link']; ?></a><br>
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

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">


                    <div>
                        <h3 class="d-inline-block ms-2">Info</h3>
                        <div class="d-linline-block ms-5 btn-group dropup">
                            <button type="button" class="hover-zoom" data-mdb-toggle="dropdown" aria-expanded="false"> +

                            </button>
                            <ul class="dropdown-menu">
                                <li class="d-inline-block mt-2">
                                    <form action="home_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="">
                                        <button type="submit" name="edit_btn" class="btn btn-success btn-sm ms-1 mb-1">EDIT</button>
                                    </form>
                                </li>



                                <li class="d-inline-block mt-2">
                                    <form action="" method="post">
                                        <input type="hidden" name="delete_id" value="">
                                        <button type="submit" name="edit_btn" class="btn btn-danger btn-sm ms-1 mb-1">DELETE</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    $query = "SELECT * FROM homepagelinks WHERE id BETWEEN 4 AND 6";
                    $query_run = mysqli_query($connection, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>
                            <div>
                                <a href="First link"><?php echo $row['link']; ?></a><br>
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

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">


                    <div>
                        <h3 class="d-inline-block ms-2">Info</h3>
                        <div class="d-linline-block ms-5 btn-group dropup">
                            <button type="button" class="hover-zoom" data-mdb-toggle="dropdown" aria-expanded="false"> +

                            </button>
                            <ul class="dropdown-menu">
                                <li class="d-inline-block mt-2">
                                    <form action="home_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="">
                                        <button type="submit" name="edit_btn" class="btn btn-success btn-sm ms-1 mb-1">EDIT</button>
                                    </form>
                                </li>



                                <li class="d-inline-block mt-2">
                                    <form action="" method="post">
                                        <input type="hidden" name="delete_id" value="">
                                        <button type="submit" name="edit_btn" class="btn btn-danger btn-sm ms-1 mb-1">DELETE</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    $query = "SELECT * FROM homepagelinks WHERE id BETWEEN 7 AND 9";
                    $query_run = mysqli_query($connection, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>
                            <div>
                                <a href="First link"><?php echo $row['link']; ?></a><br>
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

</div>




</div>
<!-- End of Main Content -->

<?php
include('includes/script.php');
include('includes/footer.php');
?>