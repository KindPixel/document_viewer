$(document).ready(function () {

    var urlObj = new URL(window.location.href);
    var username = urlObj.searchParams.get("login");

    $.ajax({
        type: "POST",
        url: "php/singleuser.php",
        data: {login : username},
        dataType: "text",
        success: function (response) {
            $("#singleuser").append(response);
        }
    });

});
