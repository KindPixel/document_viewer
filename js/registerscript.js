$(document).ready(function () {

    $('#butsave').on('click', function() {
        var login = $('#login').val();
        var namecomp = $('#name-company').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var password_conf = $('#password-confirmation').val();
        var access = $('#access-level').val();

        if (password == password_conf && validateEmail(email)) {
            if(login!="" && namecomp!="" && email!="" && password!="" && password_conf!="" && access!=""){
                $.ajax({
                    url: "php/registerscript.php",
                    type: "POST",
                    data: {
                        login: login,
                        namecomp: namecomp,
                        email: email,
                        password: password,
                        password_conf: password_conf,
                        access: access						
                    },
                    cache: false,
                    success: function(dataResult){
                        statusCode = dataResult.substr(dataResult.length - 3);
                        if(statusCode==200) {
                            $("#success").show();
                            $('#success').html('Registration successful !'); 						
                        }
                        else if(statusCode==201) {
                            $("#error").show();
                            $('#error').html('This email is already registered :/');
                        }
                        else {
                            alert("error");
                        }
                    }
                });
            }
            else {
                alert('Please fill all the field !');
            }
        }
        else {
            $("#error").show();
            $('#error').html('the two password are not identical or the mail is not valid');
        }
    });
    
});


function validateEmail(email) 
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

