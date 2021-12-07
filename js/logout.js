$(document).ready(function(){
    $('#logout').on('click', function(e){
        if(confirm("Are you sure you want to logout?"))
            sessionStorage.clear()
            window.location.href = "http://localhost/document_viewer/login.php";
        return false;
    });
});