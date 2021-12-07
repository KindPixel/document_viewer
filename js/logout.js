$(document).ready(function(){
    $('#logout').on('click', function(e){
        if(confirm("Are you sure you want to leave ?")) {
            $.ajax({
                url: "php/logout.php",
                success: function (response) {
                    window.location.href = "http://localhost/document_viewer/login.php";
                }
            });
        }
    });
});