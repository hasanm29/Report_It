<?php
include('database/dbconfig.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<?php
session_start();
if (isset($_SESSION['visitCount'])) {
    $_SESSION['visitCount']++;
} else $_SESSION['visitCount'] = 1;
?>


<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        /* background-color: #f5f7f9; */
        font-family: Open Sans, sans-serif;
    }

    .box {
        width: 30%;
        float: left;
        margin: 15px 15px;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.15);

    }

    .box h4 {
        margin-bottom: 10px;

    }

    .box p {
        font-size: 15px;
        line-height: 28px;
        height: 90px;
        overflow: hidden;
    }

    /* .box a {
        display: inline-block;
        color: #fff;
        background-color: #2196f3;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 8px;
        margin-top: 15px;
    } */

    .box a:hover {
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
    }

    .box.showContent p {
        height: auto;
    }

    .box.showContent a.readmore-btn {

        text-decoration: none;

    }
</style>



<div class="container py-5">
    <div class="row">
        <div class="py-3">
            <div class="card m-3">
                <div class="row g-0">
                    <div class="col-md-9">
                        <img src="images\share.png" class="img-fluid" style="height:500px;" alt="...">
                    </div>
                    <div class="col-md-3 d-flex align-items-center justify-content-center bg-success bg-gradient">
                        <div class="">
                            <div class="card-body">
                                <p class="fs-5 fw-4 text-light"><b>What is Share Experience </b></p>
                                <p class="fs-6 text-light"> Sharing your experience will help others to know where the incident happened and it will help them to be extra causious in those area. Moreover, it will provide them more information about what to do when someone face the similar situation.
                                </p>
                            </div>
                            <div class="px-4">
                                <button type="button" class="btn btn-primary px-5 mid" data-mdb-toggle="modal" data-mdb-target="#shareexperience" data-mdb-whatever="@getbootstrap">
                                    Share Your Experience
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="">
            <img src="images\share.png" class="img-fluid w-100 hover-shadow" alt="..." />

        </div>
        <div class="px-4 py-4 d-flex align-items-center justify-content-center">
            <button type="button" class="btn-lg btn-primary px-5 mid" data-mdb-toggle="modal" data-mdb-target="#shareexperience" data-mdb-whatever="@getbootstrap">
                Share Your Experience
            </button>

        </div> -->
        <!-- <div class="container py-5">
        <div class="row ">
            <div class="col-md-12">
                <div class="card m-3" style="max-width: 1100px;">
                    <div class="row g-0">
                        
                        <div style="background-image:img src='images/9_MCCAED_Paitents_Hugging_RGB_Purple.png' "
                         class="col-md-5 d-flex align-items-center justify-content-center" 
                         >
                            <button type="button" class="btn-lg btn-primary px-5 mid " data-mdb-toggle="modal" data-mdb-target="#shareexperience" data-mdb-whatever="@getbootstrap">
                                Share Your Experience
                            </button>
                        </div>
                        <div class="col-md-7 ">
                            <div class="px-5 d-flex justify-content-center fs-2 fw-2"><strong>What is Share Experience</strong></div>
                            <div class="mx-2 my-4 d-flex justify-content-center fs-5 fw-5">
                            Sharing your experience will help others to know where the incident happened and it will help them to be extra causious in those area.
                            Moreover, it will provide them more information about what to do when someone face the similar situation.
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div> -->
        <?php
        $query = "SELECT * FROM share ORDER BY id DESC";
        $query_run = mysqli_query($connection, $query);
        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
        ?>

                <div class="box mp-2" style=" background-color:#88df7c">

                    <div class="card-footer text-start bg-light"><strong>Anonymous Name: </strong><?php echo $row['name']; ?></div>
                    <div class="card-footer text-start bg-light"><strong>Incident Location: </strong><?php echo $row['location']; ?></div>
                    <p class="card-text ms-3 d-flex justify-content-evenly text-start"> <strong>Comment: </strong><?php echo $row['message']; ?></p>
                    <a href="javascript:void();" class="readmore-btn ms-3">Read More</a>
                    <div class="card-footer text-muted justify-content-between">
                        <span class="pe-5 text-dark"> <strong>Date:</strong>
                            <?php
                            $date = $row['date'];
                            echo date('d-m-y', strtotime($date));
                            ?>
                        </span>
                        <span class="p-2 text-dark"> <strong>Time:</strong>
                            <?php
                            $time = $row['time'];
                            echo date('H:i', strtotime($time));
                            ?>
                        </span>
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
                        <select type="text" name="location" class="form-control select" placeholder="Incident Location">
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








<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(".readmore-btn").on('click', function() {
        $(this).parent().toggleClass("showContent");
        var replaceText = $(this).parent().hasClass("showContent") ? "Read Less" : "Read More";
        $(this).text(replaceText);

    });
</script>





<?php
include('includes/footer.php');
?>