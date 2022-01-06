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
            <!-- <button type="button" class="btn-lg btn-primary px-5" name="report_button">Report Anonymously</button> -->
            <a href="reportana.php" type="button" class="btn btn-lg btn-primary px-5 mid" name="an_button">Anonymous Report</a> 
        </div>
        <div class="col-md-4">
            <!-- <button type="button" class="btn-lg btn-primary px-5 mid">Report With Details</button> -->
            <a href="reportdetails.php" type="button" class="btn btn-lg btn-primary px-5 mid" name="an_button"> Report with details</a>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-lg btn-primary px-5 mid" data-mdb-toggle="modal" data-mdb-target="#shareexperience" data-mdb-whatever="@getbootstrap">
                SHARE YOUR EXPERIENCE
            </button>

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
                    </div>
                    <?php
                    $query = "SELECT * FROM homepagelinks WHERE id BETWEEN 1 AND 3";
                    $query_run = mysqli_query($connection, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>
                            <div>
                               <a href="https://www.rasasc.org.uk/" target="_blank">www.rasasc.org.uk</a><br>
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
                                <a href="https://www.thehavens.org.uk/" target="_blank">www.thehavens.org.uk</a><br>
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
                                <a href="https://www.met.police.uk/advice/advice-and-information/rsa/rape-and-sexual-assault/" target="_blank">www.met.police.uk</a><br>
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
                        <label class="py-2"><strong>Anonymous Name</strong></label>
                        <input type="text" name="name" class="form-control " placeholder="Anonymous Name" />
                    </div>
                    <div class="mb-3 form-group">
                        <label class="py-2"><strong>Incident Location</strong></label>
                        <select type="text" name="location" class="form-control select" placeholder="Incident Location" >
                            <option value="On Campus">On the Campus</option>
                            <option value="Outside Campus">Outside Campus</option>
                            <option value="At Home">At Home</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <!-- Message input -->
                    <div class="mb-3 form-group">
                    <label class="py-2"><strong>Message</strong></label>
                        <textarea type="text" id="message" name="message" class="form-control" placeholder="Type Your experience" onChange="removeChar();" rows="4"></textarea>
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

<script>
    function removeChar() {
        var a = document.getElementById("message").value;
        a = a.trim().replace(/'( )?/g, '');
        document.getElementById("message").value = a;
    }
</script>

<?php
include('includes/footer.php');
?>
