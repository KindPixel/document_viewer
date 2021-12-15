$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "php/listingusers.php",
        dataType: "text",
        success: function (data) {
            $("#tableUsers").append(data);
        },
    });

    $("#tableUsers").on("click", ".btnSelect", function () {
        var currentId = $(this).attr("id");

        var url = new URL("http://localhost/document_viewer/singleuser.php");
        url.searchParams.append("login", currentId);

        window.location.href = url;
    });

    $("#tableUsers").on("click", ".btnDel", function () {
        if (confirm("Voulez-vous vraiment supprimer ce profile")) {
            var currentId = $(this).attr("id");
            console.log(currentId);

            $.ajax({
                type: "POST",
                url: "php/deluser.php",
                data: { login: currentId },
                dataType: "text",
                success: function () {
                    currentId = "." + currentId;
                    $(currentId).hide("slow");
                },
            });
        }
    });
});
