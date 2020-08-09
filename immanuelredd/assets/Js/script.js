$(document).ready(function () {
    $("input").focusout(function () {
        if ($(this).val() == '') {
            $(this).css('border', 'solid 1px red');
        } else {
            $(this).css('border', 'solid 1px green');
        }
    });

});

var myInput = document.getElementById("pass");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var symbol = document.getElementById("symbol");

// When the user clicks on the password field, show the message box
myInput.onfocus = function () {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function () {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function () {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
    } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
    }

    var symbols = /[!@#$%^&*+]/g;
    if (myInput.value.match(symbols)) {
        symbol.classList.remove("invalid");
        symbol.classList.add("valid");
    } else {
        symbol.classList.remove("valid");
        symbol.classList.add("invalid");
    }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if (myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
    } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }

    // Validate length
    if (myInput.value.length >= 15) {
        length.classList.remove("invalid");
        length.classList.add("valid");
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }
}

function check(j) {
    var total = 0;
    for (var i = 0; i < document.form.gender.length; i++) {
        if (document.form.gender[i].checked) {
            total = total + 1;
        }
        if (total > 1) {
            alert("Must be Male or Female")
            document.form.gender[j].checked = false;
            return false;
        }

    }

}


/*$('.checklist').on('change', function () {
    $('.checklist').not(this).prop('checked', false);
    $("#message").html("");
    alert("Must be Male or Female");
});*/


$('form').submit(function (e) {
    e.preventDefault();

    let error = '';
    let ferror = "";
    let lerror = "";
    let eerror = "";
    let gerror = "";
    let perror = "";
    let derror = "";

    if ($('#fname').val() == "") {
        //error += "<span>* Firstname is required</span><br>";
        $('#fErr').html(ferror += "First Name is required");
    }
    if ($('#lname').val() == "") {
        //error += "<span>* lastname is required</span><br>";
        $('#lErr').html(lerror += "Last Name is required");
    }
    if ($('#email').val() == "") {
        $('#eErr').html(eerror += "email is required");
    }
    /*if ($('#gender').val() == "") {
        $('#gErr').html(gerror += "You must select a Gender: Male or Female");
    }
    
    if ($('#departments').val() == "") {
        error += "okkk good to goo";
    }*/

    if ($('#dob').val() == "") {
        $('#dobErr').html(derror += "Please enter your Date Of Birth!");
    }
    if ($('#pass').val() == "") {
        $('#pErr').html(perror += "Password Cannot be empty");
    }

    if (error != "") {
        $('#error').html(error);
    } else {
        $("form").unbind("submit").submit();
    }


});