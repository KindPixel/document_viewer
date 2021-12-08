$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "php/listingusers.php",
        success: function (data) {
            tableBody = $("#tableUsers");
            tableBody.append(data);
        },
    });

    $("#tableUsers").on('click', '.btnSelect', function() {
        var currentId = $(this).attr('id');

        var url = new URL("http://localhost/document_viewer/singleuser.php");
        url.searchParams.append('login', currentId);
        
        window.location.href = url;
    });
});
