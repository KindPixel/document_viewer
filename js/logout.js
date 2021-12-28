$(document).ready(function(){
    $('#logout').on('click', function(e){
        if(confirm("Êtes vous sur de vouloir vous déconnecter ?")) {
            $.ajax({
                url: "php/logout.php",
                complete: function (response) {
                    window.location.href = "login.php";
                    console.log(response);
                }
            });
        }
    });
});

$(window).on('mousemove', function () {
    if (typeof timeOutObj != "undefined") {
        clearTimeout(timeOutObj);
    }

    timeOutObj = setTimeout(function () {
        $.ajax({
            type: "GET",
            url: "php/logout.php",
            complete: function () {
                window.location.href = "login.php";
            }
        });
    }, 900000);
});

// 15min = 900000
