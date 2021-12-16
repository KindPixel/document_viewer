$(document).ready(function(){
    $('#logout').on('click', function(e){
        if(confirm("Êtes vous sur de vouloir vous déconnecter ?")) {
            $.ajax({
                url: "php/logout.php",
                success: function (response) {
                    window.location.href = "http://thomissantos.com/document_viewer/login.php";
                }
            });
        }
    });
});
