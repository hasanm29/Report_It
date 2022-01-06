

<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="style.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container py-5">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body bg-info">
            <h4>We now need to take some more information regarding the incident, 
                we understand that these questions may be difficult to answer so if you are not comfortable
             answering these then please skip to
                 the next question or skip all questions and we will redirect you to our advice page.  </h4>
                 </div>
                 </div>
        </div>
    </div>
</div>
<!------ Did the incident happen on campus? ---------->
<div class="container py-5">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                  <p class="fw-bold">Did the incident happen on campus? </p>
                        <div> <input type="radio" name="box" id="one_1">
                            <label for="one" class="box first">
                               <div class="course"> 
                                    <span class="circle"></span> 
                                    <span class="subject"> Yes in a social environment  </span> 
                                </div>
                            </label><br>
                        </div>

                        <div> <input type="radio" name="box" id="one_2">
                            <label for="one" class="box first">
                               <div class="course"> 
                                    <span class="circle"></span> 
                                    <span class="subject"> Yes in an educational environment  </span> 
                                </div>
                            </label><br>
                        </div>

                        <div> <input type="radio" name="box" id="one_3">
                            <label for="one" class="box first">
                               <div class="course"> 
                                    <span class="circle"></span> 
                                    <span class="subject"> No  </span> 
                                </div>
                            </label><br>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Please Specify if No</label>
                            <input maxlength="200" type="text"  class="form-control"
                            placeholder="If No, Enter Some more Details" />
                         </div>
                                        
            </div>
        </div>
    </div>
</div>

<!------ Do you want to tell us about the person/people involved? ---------->
<div class="container py-5 px-0">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <p class="fw-bold">Do you want to tell us about the person/people involved? </p>
                        <div> <input type="radio" name="box2" id="two">
                            <label for="one" class="box first">
                               <div class="course"> 
                                    <span class="circle"></span> 
                                    <span class="subject"> No </span> 
                                </div>
                            </label><br>
                        </div>
                        <div> <input type="radio" name="box2" id="two_1">
                            <label for="one" class="box first">
                               <div class="course"> 
                                    <span class="circle"></span> 
                                    <span class="subject"> Yes </span> 
                                </div>
                            </label>
                            <input maxlength="200" type="text"  class="form-control"
                            placeholder="If Yes, Enter Some more Details" />
                            </label><br>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container py-3 px-0">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <p class="fw-bold">We’re you touched in a sexual manner without consent?</p>
                        <div> <input type="radio" name="box3" id="tree">
                            <label for="one" class="box first">
                               <div class="course"> 
                                    <span class="circle"></span> 
                                    <span class="subject"> No </span> 
                                </div>
                            </label><br>
                        </div>
                        <div> <input type="radio" name="box3" id="three_1">
                            <label for="one" class="box first">
                               <div class="course"> 
                                    <span class="circle"></span> 
                                    <span class="subject"> Yes </span> 
                                </div>
                            </label>
                            <input maxlength="200" type="text"  class="form-control"
                            placeholder="If Yes, Enter Some more Details" />
                            </label><br>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container py-3 px-0">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <p class="fw-bold">Did you have non-consensual sex? This includes changing your mind<br> a condom removal without your agreement, forced etc.</p>
                        <div> <input type="radio" name="box4" id="four">
                            <label for="one" class="box first">
                               <div class="course"> 
                                    <span class="circle"></span> 
                                    <span class="subject"> No </span> 
                                </div>
                            </label><br>
                        </div>
                        <div> <input type="radio" name="box4" id="four_1">
                            <label for="one" class="box first">
                               <div class="course"> 
                                    <span class="circle"></span> 
                                    <span class="subject"> Yes </span> 
                                </div>
                            </label>
                            <input maxlength="200" type="text"  class="form-control"
                            placeholder="If Yes, Enter Some more Details" />
                            </label><br>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a class="btn btn-primary nextBtn btn-lg pull-left" href="harasmentres.php" type="button">Submit</a>

