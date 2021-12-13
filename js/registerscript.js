$(document).ready(function () {
    $("#butsave").on("click", function () {
        var login = $("#login").val();
        var namecomp = $("#name-company").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var password_conf = $("#password-confirmation").val();
        var access = $("#access-level").val();

        if (password == password_conf && validateEmail(email)) {
                $.ajax({
                    url: "php/registerscript.php",
                    type: "POST",
                    data: {
                        login: login,
                        namecomp: namecomp,
                        email: email,
                        password: password,
                        password_conf: password_conf,
                        access: access,
                    },
                    cache: false,
                    success: function (dataResult) {
                        statusCode = dataResult.substr(dataResult.length - 3);
                        if (statusCode == 200) {
                            $("#success").show();
                            $("#success").html("Registration successful !");
                            setTimeout(fade_out, 5000);
                            function fade_out() {
                                $("#success").hide().empty();
                            }
                            $(input).empty();
                        } else if (statusCode == 201) {
                            $("#error").show();
                            $("#error").html("This login name is already registered :/");
                            setTimeout(fade_out, 5000);
                            function fade_out() {
                                $("#error").hide().empty();
                            }
                        } else if (statusCode == 202) {
                            $("#error").show();
                            $("#error").html("This  email is already registered :/");
                            setTimeout(fade_out, 5000);
                            function fade_out() {
                                $("#error").hide().empty();
                            }
                        } else if (statusCode == 203) {
                            $("#error").show();
                            $("#error").html("A netwo");
                            setTimeout(fade_out, 5000);
                            function fade_out() {
                                $("#error").hide().empty();
                            }
                        }
                    },
                });
        } else {
            $("#error").show();
            $("#error").html("the two password are not identical");
            setTimeout(fade_out, 5000);
            function fade_out() {
                $("#error").hide().empty();
            }
        }
    });
});

function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}
