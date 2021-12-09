$(document).ready(function () {

    $.ajax({
        url: "php/listingfiles.php",
        type: "GET",
        cache: false,
        success: function (dataResult) {
            dataResult = JSON.parse(dataResult);
            dataResult = Object.values(dataResult);

            var urlObj = new URL(window.location.href);
            var login = urlObj.searchParams.get("login");


            $.ajax({
                type: "POST",
                url: "php/checkUserAccess.php",
                data: { login: login },
                success: function (data) {

                
                    response = data;

                    response = response.substring(32);
                    response = response.slice(0, -3);
                    response = response.replaceAll(/\\/g, '');
                    
                    if (response == "" || response == "null") {
                        $.each(dataResult, function (indexInArray, valueOfElement) {
                            markup = '<div class="form-group form-check"><label class="form-check-label"><input id="' + valueOfElement + '" class="form-check-input checkAccess" type="checkbox" name="remember"> ' + valueOfElement + '</label></div>';
                            tableBody = $("#acessdoc");
                            tableBody.append(markup);
                        });
                    }
                    else {
                        response = JSON.parse(response);
                        $.each(dataResult, function (indexInArray, valueOfElement) {

                            if (response.includes(valueOfElement)) {
                                markup = '<div class="form-group form-check"><label class="form-check-label"><input id="' + valueOfElement + '" class="form-check-input checkAccess" type="checkbox" name="remember" checked> ' + valueOfElement + '</label></div>';
                            }
                            else {
                                markup = '<div class="form-group form-check"><label class="form-check-label"><input id="' + valueOfElement + '" class="form-check-input checkAccess" type="checkbox" name="remember"> ' + valueOfElement + '</label></div>';
                            }

                            tableBody = $("#acessdoc");
                            tableBody.append(markup);
                        });
                    }


                }
            });

            $("#btn-change-access").on("click", function () {
                pagesArray = [];
                var urlObj = new URL(window.location.href);
                var username = urlObj.searchParams.get("login");
                $('#acessdoc input:checked').each(function () {
                    pagesArray.push($(this).attr("id"));
                });
                console.log(pagesArray);
                $.ajax({
                    type: "POST",
                    url: "php/updateUserAccess.php",
                    data: {
                        pagesArray: pagesArray,
                        login: username
                    },
                    success: function (response) {
                        statusCode = response.substr(response.length - 3);
                        if (statusCode == 200) {
                            $("#success").show();
                            $('#success').html('Changement validé!');
                            setTimeout(fade_out, 3000);
                            function fade_out() {
                                $("#success").hide().empty();
                            }
                        }
                        else if (statusCode == 201) {
                            $("#error").show();
                            $('#error').html('Quelque chose s\'est mal passé');
                            setTimeout(fade_out, 5000);
                            function fade_out() {
                                $("#error").hide().empty();
                            }
                        }
                        else {
                            console.log("error");
                        }
                    }
                });

            });
        },
    });

});
