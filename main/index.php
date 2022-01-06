<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
// include('includes/slider.php');
?>

<!-- <div class="container py-5">
    <div class="row">
        <div class="">
            <img src="images/1_MCCAED_Professionals_Sitting_RGB_Blue.png" class="img-fluid" alt="...">
        </div>
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
</div> -->

<div class="container py-5">
    <div class="row">
        <div class="py-2">
            <img src="images/1_MCCAED_Professionals_Sitting_RGB_Blue.png" class="img-fluid" alt="...">
        </div>
        <div class="col-md-12 py-1" style="background-color:#536d7a;">
            <div class="card">
                <div class="card-header fw-bold fs-2" style="background-color: #94c4e1;">Sexual Harassment</div>
                <div class="card-body">
                    <h5 class="card-title">What is Sexual Harassment?</h5>
                    <p class="card-text">
                        Sexual harassment is any kind of unwanted behaviour of a
                        sexual nature that makes you feel humiliated or intimidated, violates your dignity or creates a hostile environment. 
                    </p>
                    <p class="card-text">
                        You don’t need to have previously objected to someone's behaviour for it to be considered unwanted. 
                    </p>
                    <p class="card-text">Sexual harassment can include:
                    <ul>
                        <li>sexual comments or jokes</li>
                        <li>physical behaviour, including unwelcome sexual advances, touching and various forms of sexual assault</li>
                        <li>displaying pictures, photos, or drawings of a sexual nature</li>
                        <li>sending emails or texts with a sexual content</li> 
                    </ul>
                    </p>
                </div>
                
            </div>
        </div>
        <div class="col-md-12 py-1" style="background-color:#536d7a;">
            <div class="card">
                <div class="card-header fw-bold fs-2" style="background-color: #94c4e1;">Sexual Assault</div>
                <div class="card-body">
                    <h5 class="card-title">What is Sexual Assault?</h5>
                    <p class="card-text">
                        If someone intentionally grabs or touch you in a sexual manner which you do not like,
                        or you are forced to kiss someone or do something sexual against your will, this is sexual assault. 
                    </p>
                    <p class="card-text">
                        Sexual assault includes touching of any part of someone’s body, regardless of clothes. 
                    </p>
                    <p class="card-text">
                        If you have been sexually assaulted by penetration with part of the body excluding the penis, or another object, this is assault by penetration. It is different to rape but would be treated similarly if taken to court.  
                    </p>
                </div>
                
            </div>
        </div>
        <div class="col-md-12 py-1" style="background-color:#536d7a;">
            <div class="card hover-zoom">
                <div class="card-header fw-bold fs-2" style="background-color: #94c4e1;">Rape</div>
                <div class="card-body">
                    <h5 class="card-title"> What is Rape?</h5>
                    <p class="card-text">
                        Due to rape being penetrative sex with the penis, only men can commit rape.
                        If a man forces you to have penetrative sex, or has sex with you without consent,
                        this is rape. Rape can be the non-consenting penetration with his penis of the vagina, anus, or mouth.

                    </p>
                    <p class="card-text">
                        No matter the situation, nobody has the right to force you to have sex or have sex with you without your consent. It is not your fault. 
                    </p>
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
<<<<<<< HEAD
<div class="container">
    <div class="row">
    <div class="px-4 py-4 d-flex align-items-center justify-content-center">
            <h2 class="py-2 "><b>Some Important Links</b></h2>
        </div>
        <hr>
    </div>
=======


>>>>>>> main
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card pb-2" >
                <div class="card-body" style="background-color: #94c4e1 ;">


                    <div>
                        <h3 class="d-inline-block ms-2"><a href="https://www.womensaid.org.uk/domestic-abuse-directory/" target="_blank">Womens Aid</a></h3>
                        
                        <p>Women's Aid Helpline - <b>0808 2000 247</b></p>
                    </div>
<<<<<<< HEAD
=======
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
>>>>>>> main

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card pb-2" >
                <div class="card-body" style="background-color: #94c4e1 ;">


                <div>
                        <h3 class="d-inline-block ms-2"><a href="https://rapecrisis.org.uk/" target="_blank">Rape Crisis UK</a></h3>
                        
                        <p>Rape Crisis Helpline - <b> 0808 802 9999</b></p>
                    </div>
<<<<<<< HEAD
=======
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
>>>>>>> main

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card pb-2" >
                <div class="card-body" style="background-color: #94c4e1 ;">


                <div >
                        <h3 class="d-inline-block ms-2"><a href="https://www.victimsupport.org.uk/" target="_blank">Victim Support</a></h3>
                        
                        <p>Victim Support Helpline - <b>0845 30 30 900 </b></p>
                    </div>
<<<<<<< HEAD
=======
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
>>>>>>> main

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
<<<<<<< HEAD


=======
>>>>>>> main

<?php
include('includes/footer.php');
?>
