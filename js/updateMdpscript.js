$(document).ready(function () {
    const regexPassword =
        /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    var urlObj = new URL(window.location.href);
    var username = urlObj.searchParams.get("login");

    $("#butUpdmDP").on("click", function () {
        var oldPass = $("#old-password").val();

        $.ajax({
            type: "POST",
            url: "php/updateMdp.php",
            data: {
                type: "testMdp",
                login: username,
                password: oldPass,
            },
            cache: false,
            success: function (response) {
                var data = JSON.parse(response);
                if (data == 200) {
                    var newPass = $("#newPass").val();
                    var newPassConf = $("#newPassConf").val();

                    if (regexPassword.test(newPass)) {
                        if (newPass == newPassConf) {
                            $.ajax({
                                type: "POST",
                                url: "php/updateMdp.php",
                                data: {
                                    type: "updPass",
                                    login: username,
                                    newPass: newPass,
                                    newPassConf: newPassConf,
                                },
                                success: function (response) {
                                    var data = JSON.parse(response);
                                    console.log(data);
                                    if (data == 200) {
                                        $("#error").hide();
                                        $("#success").show();
                                        $("#success").html("Le changement de mot de passe a été effectué avec suces");
                                    } else if (data == 201) {
                                        $("#success").hide();
                                        $("#error").show();
                                        $("#error").html("Les deux nouveaux mots de passe ne sont pas identiques");
                                    } else {
                                        $("#success").hide();
                                        $("#error").show();
                                        $("#error").html("Une erreur c'est produite");
                                    }
                                },
                            });
                        } else {
                            $("#success").hide();
                            $("#error").show();
                            $("#error").html("Les deux nouveaux mots de passe ne sont pas identiques");
                        }
                    } else {
                        $("#success").hide();
                        $("#error").show();
                        $("#error").html("Le nouveau mot de passe n'est pas conforme");
                    }
                } else if (data == 201) {
                    $("#success").hide();
                    $("#error").show();
                    $("#error").html("Le mot de passe actuel est erroné");
                } else {
                    $("#success").hide();
                    $("#error").show();
                    $("#error").html("Une erreur est survenue");
                }
            },
        });
    });

    // PASSWORD VALIDATION
    $("#newPass").on("keyup", ValidatePassword);

    $(".toggle-password").click(function () {
        $(this).children().toggleClass("mdi-eye-outline mdi-eye-off-outline");
        let input = $(this).prev();
        input.attr("type", input.attr("type") === "password" ? "text" : "password");
    });

    // while ($( "#password" ).focus()) {
    //     $(".password-helper").show();
    // }

    $("#newPass").focus(function (e) {
        e.preventDefault();
        $(".password-helper").show();
    });

    $("#newPass").focusout(function (e) {
        e.preventDefault();
        $(".password-helper").hide();
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
});
