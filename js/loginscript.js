$(document).ready(function () {

    $('#butlogin').on('click', function() {
            var login = $('#login').val();
            var password = $('#password').val();

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
                        }					
                    }
                });
    });

    $('.toggle-password').click(function(){
        $(this).children().toggleClass('mdi-eye-outline mdi-eye-off-outline');
        let input = $(this).prev();
        input.attr('type', input.attr('type') === 'password' ? 'text' : 'password');
    });

});