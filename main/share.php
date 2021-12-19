<?php
include('database/dbconfig.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="p-1">
    <!-- <img src="images/image1.jfif" class="img-fluid" alt="..." /> -->

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
                                    <span class="p-2">  Time: 
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





<?php
include('includes/footer.php');
?>