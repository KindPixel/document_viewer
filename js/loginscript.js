$(document).ready(function () {
    
    $('#butlogin').on('click', function() {
        
        var login = $('#login').val();
        var password = $('#password').val();

        if(login!="" && password!="" ){
            $.ajax({
                url: "php/loginscript.php",
                type: "POST",
                data: {
                    login: login,
                    password: password						
                },
                cache: false,
                success: function(dataResult) {
                    statusCode = dataResult.substr(dataResult.length - 3);
                    if(statusCode==200){
                        console.log("sucess");  
                        document.location.href = "home.php";
                    }
                    if(statusCode==201){
                        $("#error").show();
                        $('#error').html('Invalid Email or Password !');
                    }					
                }
            });
        }
        else{
            alert('Please fill all the field !');
        }
        
    });

});