$(document).ready(function () {

    $.ajax({
        type: "GET",
        url: "php/listingusers.php",
        success: function (dataResult) {
            console.log(dataResult);
            dataResult = Object.values(dataResult);
            dataResult = JSON.parse(dataResult);
            

            var login = data.login;
            var namecomp = data.namecomp;
            var mail = data.mail;
            var access = data.access;
            
            
            
            
            
            // $(".example").html(response);
            
            // console.log(typeof(response));
            // var responsejson = JSON.parse(response);
            // console.log(typeof(responsejson));
        }
    });

});

