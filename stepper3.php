<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="style.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
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
                        <input maxlength="200" type="text" required="required" class="form-control"
                            placeholder="Enter Company Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Company Address</label>
                        <input maxlength="200" type="text" required="required" class="form-control"
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
                        <input maxlength="200" type="text" required="required" class="form-control"
                            placeholder="Enter Company Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Company Address</label>
                        <input maxlength="200" type="text" required="required" class="form-control"
                            placeholder="Enter Company Address" />
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                </div>
            </div>
        </div>

        <div class="row setup-content" id="step-4">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 4</h3>
                    <div class="form-group">
                        <label class="control-label">Company Name</label>
                        <input maxlength="200" type="text" required="required" class="form-control"
                            placeholder="Enter Company Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Company Address</label>
                        <input maxlength="200" type="text" required="required" class="form-control"
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

<script src="script.js"></script>