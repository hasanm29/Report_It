<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="style.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
<<<<<<< HEAD
   

   
        <div class="row " >
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3>This  Report tool with details where your details would be saved for future support.</h3>
                    <div class="col-6">
                    <h3> Sexual violence covers a broad range of inappropriate and unwanted sexual behaviours.
                         This includes any type of sexual violence including rape, sexual assault and sexual harassment.
                         Sexual violence can be perpetrated by a stranger, or by someone known. <br>make it make it </h3>
                    </div>
                  
                   
                    <div class="form-group">
                        <label class="control-label"> Full name</label>
                        <input maxlength="100" type="text" class="form-control" placeholder="Enter Full Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input maxlength="100" type="email" class="form-control" placeholder="email@mail.com" />
                    </div>

                    <br>
                    <h3>Please choose The title of Your problem so we can help you better.</h3>
                    <SELECT id="s1" NAME="section" >
                        <Option value="">Select Section</option>
                        <Option value="rape">rape</option>
                        <Option value="sexual assault">sexual assault</option>
                        <Option value="sexual harassment"> sexual harassment</option>
                        <Option value="sexual harassment"> Not Sure</option>
                    </SELECT>

                    <br><br><br>


                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                        <p class="fw-bold">Are you reporting for yourself or someone else? </p>
                                        <div> <input type="radio" name="box" id="one">
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
=======
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Step 3</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p>Step 4</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                <p>Step 5</p>
            </div>
        </div>
    </div>


    <form role="form">
        <div class="row setup-content" id="step-1">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Put Your Question here make it simple<br>make it make it </h3>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                        <label class="form-check-label" for="flexRadioDefault1"> Answer1 </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                        <label class="form-check-label" for="flexRadioDefault1"> Answer2</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                        <label class="form-check-label" for="flexRadioDefault1"> Answer3</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                        <label class="form-check-label" for="flexRadioDefault1"> Answer4 </label>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Enter Somthing</label>
                        <input maxlength="100" type="text" class="form-control" placeholder="Enter First Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Enter SomthingElse</label>
                        <input maxlength="100" type="text" class="form-control" placeholder="Enter Last Name" />
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-2">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 2</h3>
                    <div class="form-group">
                        <label class="control-label">Company Name</label>
                        <input maxlength="200" type="text" class="form-control"
                            placeholder="Enter Company Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Company Address</label>
                        <input maxlength="200" type="text"  class="form-control"
                            placeholder="Enter Company Address" />
                    </div>
                   
                    
                    <div class="form-group">
                        <label>Country *</label>
                        <select name="country2" class="form-control" id="country2">
                            <option value="NG" selected="selected">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="KP">North Korea</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
            </div>
        </div>

        <div class="row setup-content" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 3</h3>
                    <div class="form-group">
                        <label class="control-label">Company Name</label>
                        <input maxlength="200" type="text" class="form-control"
                            placeholder="Enter Company Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Company Address</label>
                        <input maxlength="200" type="text"  class="form-control"
                            placeholder="Enter Company Address" />
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
>>>>>>> main
                </div>
            </div>
        </div>

<<<<<<< HEAD
        
        

        
   
</div>


<script language="javascript">
                    function SelectRedirect(){
                    // ON selection of section this function will work
                    //alert( document.getElementById('s1').value);

                    switch(document.getElementById('s1').value)
                    {
                    case "rape":
                    window.location="rape.php";
                    break;

                    case "sexual assault":
                    window.location="assault.php";
                    break;

                    case "sexual harassment":
                    window.location="harasment.php";
                    break;


                    /// Can be extended to other different selections of SubCategory //////
                    default:
                    //window.location="../"; // if no selection matches then redirected to home page
                        alert("Please choose The title of Your problem ");

                    break;
                    }// end of switch 
                    }
                    ////////////////// 
                    </script>


=======
        <div class="row setup-content" id="step-4">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 4</h3>
                    <div class="form-group">
                        <label class="control-label">Company Name</label>
                        <input maxlength="200" type="text"  class="form-control"
                            placeholder="Enter Company Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Company Address</label>
                        <input maxlength="200" type="text"  class="form-control"
                            placeholder="Enter Company Address" />
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                </div>
            </div>
        </div>

        <div class="row setup-content" id="step-5">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 5</h3>
                    <a href="output.php" class="btn btn-success btn-lg " type="button">Finish!</a>
                </div>
            </div>
        </div>
    </form>
</div>

>>>>>>> main
<script src="script.js"></script>