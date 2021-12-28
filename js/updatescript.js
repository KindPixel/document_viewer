$(document).ready(function () {

    var urlObj = new URL(window.location.href);
    var id = urlObj.searchParams.get("id");
    var id;

    

    $.ajax({
        type: "POST",
        url: "php/userinfo.php",
        data: {login : id},
        dataType: "text",
        cache: false,
        success: function (response) {
            data = JSON.parse(response);

            $("#name-company").val(data['namecomp']);
            $("#login").val(data['login']);
            $("#AllName").val(data['allName']);
            $("#email").val(data['mail']);
            id = data['id'];
            $("#currentUser").append(data['login']);
        }
    });

    $("#butUpd").on("click", function () {

        var login = $("#login").val();
        var namecomp = $("#name-company").val();
        var allName = $("#AllName").val();
        var email = $("#email").val();

        const regexPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        const regexEmail = /\S+@\S+\.\S+/;
        const regexLogin = /^[a-zA-Z0-9_.-]*$/;

        if (regexLogin.test(login)) {

            if (regexEmail.test(email)) {

                        $.ajax({
                            url: "php/updatescript.php",
                            type: "POST",
                            data: {
                                id: id,
                                login: login,
                                namecomp: namecomp,
                                email: email,
                                allName: allName
                            },
                            cache: false,
                            success: function (dataResult) {
                                statusCode = dataResult.substr(dataResult.length - 3);
                                if (statusCode == 200) {
                                    $("#error").hide();
                                    $("#success").show();
                                    $("#success").html("Modification effectuée !");
                                } else if (statusCode == 203) {
                                    $("#success").hide();
                                    $("#error").show();
                                    $("#error").html("Une erreur est survenue");
                                } else if (statusCode == 201) {
                                    $("#success").hide();
                                    $("#error").show();
                                    $("#error").html("Ce nom d'utilisateur est deja pris");
                                } else if (statusCode == 202) {
                                    $("#success").hide();
                                    $("#error").show();
                                    $("#error").html("Ce mail est deja pris");
                                }
                            },
                        });

            } else {
                $("#success").hide();
                $("#error").show();
                $("#error").html("L'adresse Mail n'est pas conforme");
            }
        } else {
            $("#success").hide();
            $("#error").show();
            $("#error").html("Le login ne doit pas contenir d'espace ou de caractère spécial");
        }

    });

    $("#aUpdateMdp").on("click", function () {
        var url = new URL("http://thomissantos.com/document_viewer/updateMdp.php");
        url.searchParams.append("login", username);
        window.location.href = url;
    });

});

