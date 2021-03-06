$(document).ready(function () {

    $("#butsave").on("click", function () {
        var login = $("#login").val();
        var namecomp = $("#name-company").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var password_conf = $("#password-confirmation").val();
        var access = $("#access-level").val();
        var allName = $("#AllName").val();

        const regexPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        const regexEmail = /\S+@\S+\.\S+/;
        const regexLogin = /^[a-zA-Z0-9_.-]*$/;


        if (login != "" && namecomp != "" && email != "" && password != "" && password_conf != "" && access != "" && allName != "") {

            if (regexLogin.test(login)) {

                if (regexEmail.test(email)) {

                    if (regexPassword.test(password)) {
    
                        if (password == password_conf) {
    
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
                                    allName: allName
                                },
                                cache: false,
                                success: function (dataResult) {
                                    statusCode = dataResult.substr(dataResult.length - 3);
                                    if (statusCode == 200) {
                                        $("#error").hide();
                                        $("#success").show();
                                        $("#success").html("Création de compte réussi !");
                                        $('#register_form').find('#access-level').prop('selectedIndex',0);
                                        $('#register_form').find("input, textarea").val("");
                                    } else if (statusCode == 201) {
                                        $("#error").show();
                                        $("#error").html("Ce nom d'utilisateur est déjà enregistrer :/"); 
                                    } else if (statusCode == 202) {
                                        $("#error").show();
                                        $("#error").html("Cette adresse email est déjà enregistrer :/");
                                    } else if (statusCode == 203) {
                                        $("#error").show();
                                        $("#error").html("Une erreur est survenue");
                                    }
                                },
                            });
    
                        } else {
                            $("#error").show();
                            $("#error").html("Les deux mots de passe ne sont pas identique");
                        }
    
                    } else {
                        $("#error").show();
                        $("#error").html("Le mots de passe n'est pas conforme");
                    }
    
                } else {
                    $("#error").show();
                    $("#error").html("L'adresse Mail n'est pas conforme");
                }
            } else {
                $("#error").show();
                $("#error").html("Le login ne doit pas contenir d'espace ou de caractère spécial");
            }

        } else {
            $("#error").show();
            $("#error").html("Veuillez remplir tout les champs");
        }

    });

    $("#password").on("keyup", ValidatePassword);

    $('.toggle-password').click(function () {
        $(this).children().toggleClass('mdi-eye-outline mdi-eye-off-outline');
        let input = $(this).prev();
        input.attr('type', input.attr('type') === 'password' ? 'text' : 'password');
    });


    // while ($( "#password" ).focus()) {
    //     $(".password-helper").show();
    // }

    $("#password").focus(function (e) { 
        e.preventDefault();
        $(".password-helper").show();
    });

    $("#password").focusout(function (e) { 
        e.preventDefault();
        $(".password-helper").hide();
    });

});


/*Actual validation function*/
function ValidatePassword() {
    /*Array of rules and the information target*/
    var rules = [
        {
            Pattern: "[A-Z]",
            Target: "UpperCase",
        },
        {
            Pattern: "[a-z]",
            Target: "LowerCase",
        },
        {
            Pattern: "[0-9]",
            Target: "Numbers",
        },
        {
            Pattern: "[!@@#$%^&*]",
            Target: "Symbols",
        },
    ];

    //Just grab the password once
    var password = $(this).val();

    /*Length Check, add and remove class could be chained*/
    /*I've left them seperate here so you can see what is going on */
    /*Note the Ternary operators ? : to select the classes*/
    $("#Length").removeClass(
        password.length > 6 ? "glyphicon-remove" : "glyphicon-ok"
    );
    $("#Length").addClass(
        password.length > 6 ? "glyphicon-ok" : "glyphicon-remove"
    );

    /*Iterate our remaining rules. The logic is the same as for Length*/
    for (var i = 0; i < rules.length; i++) {
        $("#" + rules[i].Target).removeClass(
            new RegExp(rules[i].Pattern).test(password)
                ? "glyphicon-remove"
                : "glyphicon-ok"
        );
        $("#" + rules[i].Target).addClass(
            new RegExp(rules[i].Pattern).test(password)
                ? "glyphicon-ok"
                : "glyphicon-remove"
        );
    }
}
