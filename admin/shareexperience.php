<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #f5f7f9;
        font-family: Open Sans, sans-serif;
    }

    .box {
        width: 30%;
        float: left;
        margin: 15px 15px;
        background-color: #fff;
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

    .box a {
        display: inline-block;
        color: #fff;
        background-color: #2196f3;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 8px;
        margin-top: 15px;
    }

    .box a:hover {
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
    }

    .box.showContent p {
        height: auto;
    }

    .box.showContent a.readmore-btn {
        background-color: red;

    }
</style>


<div class="container py-5">
    <!-- <div>
        <img src="images\share.png" class="img-fluid" alt="..." />

    </div> -->
    <?php
    $query = "SELECT * FROM share ORDER BY id DESC";
    $query_run = mysqli_query($connection, $query);
    if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_assoc($query_run)) {
    ?>

            <div class="box mp-2">

                <div class=" d-linline-block  btn-group">
                    <form action="shareexperience_edit.php" method="post" >
                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="edit_btn" class="btn btn-success btn-sm ms-1 mb-1">EDIT</button>
                    </form>

                    <form action="code.php" method="post" >
                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="delete_btn" class="btn btn-danger btn-sm ms-1 mb-1" data-mdb-toggle="modal" data-mdb-target="#exampleModal"> DELETE </button>
                    </form>
                </div>
                <br>
                <span> Anonymous Name:<?php echo $row['name']; ?></span>
                <br>

                <span> Incident Location:<?php echo $row['location']; ?></span>
                <br>
                <p> Comment: <?php echo $row['message']; ?></p>
                <a href="javascript:void();" class="readmore-btn">Read More</a>
                <div>
                    <span> Date:
                        <?php
                        $date = $row['date'];
                        echo date('d-m-y', strtotime($date));
                        ?>
                    </span>
                    <span class="p-2"> Time:
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




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(".readmore-btn").on('click', function() {
        $(this).parent().toggleClass("showContent");
        var replaceText = $(this).parent().hasClass("showContent") ? "Read Less" : "Read More";
        $(this).text(replaceText);

    });
</script>

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