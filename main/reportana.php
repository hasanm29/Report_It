<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="style.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    body {
        background:  !important;
    }

    /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>
<div class="container">



    <div class="row ">
        <div class="col-xs-12" style=" background-color:#faba9b   ">
            <div class="col-md-12">
                <h3>This is an anonymous Report page</h3>
                <div class="col-6">
                    <h3> Sexual violence covers a broad range of inappropriate and unwanted sexual behaviours.
                        This includes any type of sexual violence including rape, sexual assault and sexual harassment.
                        Sexual violence can be perpetrated by a stranger, or by someone known. <br>make it make it </h3>
                </div>
                <br>
                <h3>Please choose The title of Your problem so we can help you better.</h3>




                <SELECT id="s1" NAME="section">
                    <Option value="">Select Section</option>
                    <Option value="rape">rape</option>
                    <Option value="sexual assault">sexual assault</option>
                    <Option value="sexual harassment"> sexual harassment</option>

                </SELECT>

                <br><br><br>


                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="fw-bold">Are you reporting for yourself or someone else? </p>
                            <div>
                                <input type="radio" name="box" id="one">
                                <label for="one" class="box first">
                                    <div class="course"> <span class="circle"></span> <span class="subject"> My self </span> </div>
                                </label><br>

                                <input type="radio" name="box" id="two">
                                <label for="two" class="box second">
                                    <div class="course"> <span class="circle"></span> <span class="subject"> Someone Else </span> </div>
                                </label><br>



                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="fw-bold">What outcome do you wish from this report? (You can choose more than one option) </p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Report my experience
                                </label>

                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Speak to someone for advice
                                </label>

                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Make a formal complaint to the university
                                </label>

                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Find a support group
                                </label>

                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Be advised on whether to go to the police
                                </label>

                            </div>
                        </div>
                    </div>
                </div>


                <button class="btn btn-primary nextBtn btn-lg pull-right" onclick="SelectRedirect()" type="button">Next</button>
            </div>
        </div>
    </div>






</div>


<script language="javascript">
    function SelectRedirect() {
        // ON selection of section this function will work
        //alert( document.getElementById('s1').value);

        switch (document.getElementById('s1').value) {
            case "rape":
                window.location = "rape.php";
                break;

            case "sexual assault":
                window.location = "assault.php";
                break;

            case "sexual harassment":
                window.location = "harasment.php";
                break;


                /// Can be extended to other different selections of SubCategory //////
            default:
                //window.location="../"; // if no selection matches then redirected to home page
                alert("Please choose The title of Your problem ");

                break;
        } // end of switch 
    }
    ////////////////// 
</script>


<script src="script.js"></script>