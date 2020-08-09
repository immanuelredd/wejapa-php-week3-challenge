$('form').submit(function (e) {
    e.preventDefault();

    var error = "";

    if ($('#firstname').val() == "") {
        error += "<span>* Firstname is required</span><br>";
    }
    if ($('#lastname').val() == "") {
        error += "<span>* lastname is required</span><br>";
    }
    if ($('#email').val() == "") {
        error += "<span>* email is required</span><br>";
    }
    if ($('#gender').val() == "") {
        ;
        error += "<span>* Gender is required</span><br>";
    }
    if ($('#dob').val() == "") {
        error += "<span>* Date Of Birth is required</span><br>";
    }
    if ($('#departments').val() == "") {
        error += "<span>* departments are required</span><br>";
    }
    if ($('#password').val() == "") {
        error += "<span>* Password is required</span>";
    }
    if (error != "") {
        $('#form-error').html(error);
    } else {
        $("form").unbind("submit").submit();
    }


});