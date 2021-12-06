$('#butlogin').on('click', function() {
    var email = $('#email_log').val();
    var password = $('#password_log').val();
    if(email!="" && password!="" ){
        $.ajax({
            url: "../phpScripts/loginsave.php",
            type: "POST",
            data: {
                type:2,
                email: email,
                password: password						
            },
            cache: false,
            success: function(dataResult){
                statusCode = dataResult.substr(dataResult.length - 3);
                if(statusCode==200){
                    console.log("sucess");  
                    document.location.href = "../htmldisplay/index.php";                 					
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