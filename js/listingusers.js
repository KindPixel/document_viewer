$(document).ready(function () {

    $.ajax({
        type: "GET",
        url: "php/listingusers.php",
        dataType: "text",
        success: function (data) {
            data = JSON.parse(data);

            $.each(data, function (index, valueOfElement) {
                if (data[index]['login'] == "Sunitech") {
                    var access = "Administrateur";
                    var btnSelect = "<td><button type='button' id=" + data[index]["login"] + " class='btnSelect btn btn-danger'>Selectioner</button></td>";
                    var btnUpd = "<td colspan='2' ><button type='button' id=" + data[index]["id"] + " class='btnUpd btn btn-danger'>Modifier</button></td>";
                    var markup = "<tr class=" + data[index]['login'] + "><td>" + data[index]['namecomp'] + "</td><td>" + data[index]['login'] + "</td><td>" + data[index]['mail'] + "</td><td>" + access + "</td>" + btnSelect + btnUpd + "</tr>";
                    $("#tableUser").append(markup);
                } else {
                    if (data[index]["access"] == 999) {
                        var access = "Administrateur";
                    } else {
                        var access = "User";
                    }
                    var btnSelect = "<td><button type='button' id=" + data[index]["login"] + " class='btnSelect btn btn-danger'>Selectioner</button></td>";
                    var btnUpd = "<td><button type='button' id=" + data[index]["id"] + " class='btnUpd btn btn-danger'>Modifier</button></td>";
                    var btnDel = "<td><button type='button' id=" + data[index]["login"] + " class='btnDel btn btn-danger'>Supprimer</button></td>";
                    var markup = "<tr class=" + data[index]['login'] + "><td>" + data[index]['namecomp'] + "</td><td>" + data[index]['login'] + "</td><td>" + data[index]['mail'] + "</td><td>" + access + "</td>" + btnSelect + btnUpd + btnDel + "</tr>";
                    $("#tableUser").append(markup);
                }
            });
        },
    });

    $("#tableUser").on("click", ".btnSelect", function () {
        var currentId = $(this).attr("id");
        var url = new URL("http://thomissantos.com/document_viewer/singleuser.php");
        url.searchParams.append("login", currentId);
        window.location.href = url;
    });

    $("#tableUser").on("click", ".btnDel", function () {
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

    $("#tableUser").on("click", ".btnUpd", function () {
        var currentId = $(this).attr("id");
        var url = new URL("http://thomissantos.com/document_viewer/update.php");
        url.searchParams.append("id", currentId);
        window.location.href = url;
    });

});
