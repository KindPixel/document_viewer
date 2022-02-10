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

                    response = response.substring(17);
                    response = response.slice(0, -3);
                    response = response.replaceAll(/\\/g, '');


                    if (response == "" || response == "null") {
                        $.each(dataResult, function (indexInArray, valueOfElement) {
                            $.ajax({
                                url: "pages/" + valueOfElement,
                                success: function (data) {
                                    var title = data.split("<title>")[1].split("</title>")[0];
                                    markup = '<div class="form-group form-check"><label class="form-check-label"><input id="' + valueOfElement + '" class="form-check-input checkAccess" type="checkbox" name="remember"> ' + title + '</label></div>';
                                    tableBody = $("#acessdoc");
                                    tableBody.append(markup);
                                }
                            })
                        });

                    } else {
                        response = JSON.parse(response);
                        $.each(dataResult, function (indexInArray, valueOfElement) {
                            $.ajax({
                                url: "pages/" + valueOfElement,
                                success: function (data) {
                                    var title = data.split("<title>")[1].split("</title>")[0];
                                    if (response.includes(valueOfElement)) {
                                        markup = '<div class="form-group form-check"><label class="form-check-label"><input id="' + valueOfElement + '" class="form-check-input checkAccess" type="checkbox" name="remember" checked> ' + title + '</label></div>';
                                    }
                                    else {
                                        markup = '<div class="form-group form-check"><label class="form-check-label"><input id="' + valueOfElement + '" class="form-check-input checkAccess" type="checkbox" name="remember"> ' + title + '</label></div>';
                                    }
                                    tableBody = $("#acessdoc");
                                    tableBody.append(markup);
                                }
                            })
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
                            $("#error").hide();
                            $("#success").show();
                            $('#success').html('Changement validé!');
                        }
                        else if (statusCode == 201) {
                            $("#success").hide();
                            $("#error").show();
                            $('#error').html('Quelque chose s\'est mal passé');
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
