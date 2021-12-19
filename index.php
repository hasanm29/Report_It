<?php
include('database/dbconfig.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/slider.php');
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
                                                            
                </summary>
                <hr>
                <p class=" w3-sans-serif"><?php echo $row['description']; ?> </p>
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
            </summary>
            <hr>
            <p class=" w3-sans-serif"><?php echo $row['description']; ?> </p>
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
                                                            
        </summary>
        <hr>
        <p class=" w3-sans-serif"><?php echo $row['description']; ?> </p>
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
<div class="container py-5">
    <div class="row">
        <div class="col-md-4">
            <button type="button" class="btn-lg btn-primary px-5" name="report_button" style="sty.css">Report
                Anonymously</button>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn-lg btn-primary px-5 mid">Report With Details</button>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn-lg btn-primary px-5 mid" data-mdb-toggle="modal" data-mdb-target="#shareexperience" data-mdb-whatever="@getbootstrap">
                Share Your Experience
            </button>

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

<!-- Share your experiance Model -->
<div class="modal fade" id="shareexperience" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
               
            </div>

            <form action="code.php" method="POST">
                <div class="modal-body">

                    <div class="mb-3 form-group">
                        <label>Anonymous Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Anonymous Name" />
                    </div>
                    <div class="mb-3 form-group">
                        <label>Incident Location</label>
                        <input type="text" name="location" class="form-control" placeholder="Incident Location" />
                    </div>
                    <div class="mb-3 form-group">
                        <label>Message</label>
                        <input type="text" name="message" class="form-control" placeholder="Type Your experience" />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="sharebtn" class="btn btn-primary">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
include('includes/footer.php');
?>