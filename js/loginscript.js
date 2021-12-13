$(document).ready(function () {


    
    $('#butlogin').on('click', function() {
        
        function login() {
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
                            document.location.href = "home.php";
                        }
                        if(statusCode==201){
                            $("#error").show();
                            $('#error').html('Invalid Email or Password !');
                            setTimeout(fade_out, 3000);
                                function fade_out() {
                                    $("#error").hide().empty();
                                }
                        }					
                    }
                });
            }
            else{
                alert('Please fill all the field !');
            }
        }
        
    });

});