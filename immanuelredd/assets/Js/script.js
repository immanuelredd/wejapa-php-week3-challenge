/*var myInput = document.getElementById("password");
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
}*/


const form = document.getElementById('form');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const dob = document.getElementById('date');
const email = document.getElementById('email');
const pass = document.getElementById('password');

form.addEventListener('submit', e => {
    // trim to remove the whitespaces
    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
    const emailValue = email.value.trim();
    const dobValue = dob.value.trim();
    const passValue = pass.value.trim();
    if (fnameValue === '') {
        setErrorFor(fname, 'First Name cannot be blank');
    } else {
        setSuccessFor(fname);
    }
    if (lnameValue === '') {
        setErrorFor(lname, 'Last Name cannot be blank');
    } else {
        setSuccessFor(lname);
    }
    if (dobValue === '') {
        setErrorFor(dob, 'Date of birth cannot be blank');
    } else {
        setSuccessFor(dob);
    }
    if (emailValue === '') {
        setErrorFor(email, 'Email cannot be blank');
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Not a valid email');
    } else {
        setSuccessFor(email);
    }
    if (passValue === '') {
        setErrorFor(pass, 'Password cannot be blank');
    } else if (!isPass(passValue)) {
        setErrorFor(pass, 'An Uppercase, Lowercase, a symbol and 15 characters Required!');
    } else {
        setSuccessFor(pass);
    }

    if (fnameValue === "" && lnameValue === "" && dobValue === "" && emailValue === "" && passValue === "") {
        e.preventDefault();
    } else {
        e.form.submit();
    }
});





function setErrorFor(input, message) {
    const formgroup = input.parentElement;
    const small = formgroup.querySelector('small');
    small.className = 'error';
    small.innerText = message;
}

function setSuccessFor(input) {
    const formgroup = input.parentElement;
    formgroup.className = 'form-group success';
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

/*function isPass(pass) {
    var strongRegex = new RegExp("^(?=.[a-z])(?=.[A-Z])(?=.[0-9])(?=.[!@#\$%\^&\*])(?=.{8,})");
    return strongRegex.test(pass);
}*/

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