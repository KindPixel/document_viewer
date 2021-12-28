$(document).ready(function () {

    $.ajax({
        type: "GET",
        url: "php/listingusersfiles.php",
        success: function (response) {
            response = response.substring(17);
            response = response.slice(0, -3);
            response = response.replaceAll(/\\/g, '');

            if (response != "") {
                response = JSON.parse(response);
                $.each(response, function (indexInArray, valueOfElement) {
                    href = "../document_viewer/pages/" + this;
                    var btn = "<button class='btnSelect'>Visualiser</button>";
                    $.ajax({
                        url: "pages/" + valueOfElement,
                        success: function (data) {
                            var title = data.split("<title>")[1].split("</title>")[0];
                            markup = "<tr style='cursor: pointer;'><td id='" + valueOfElement + "'>" + title + "</td><td style='text-align: right;'>" + btn + "</td></tr>";
                            tableBody = $("#myTable");
                            tableBody.append(markup);
                        }
                    })
                })
            } else {
                markup = "<tr style='cursor: pointer;'><td>" + "Vous n'avez aucun document alouer à votre espace" + "</td></tr>";
                tableBody = $("#myTable");
                tableBody.append(markup);
            }
        },
    });

    $("#myTable").on('click', '.btnSelect', function () {
        var currentRow = $(this).closest("tr");
        var id = currentRow.find("td");
        id = id.attr("id");
        console.log(id);
        var url = "../document_viewer/pages/" + id;
        var param = 'width=550,height=800,scrollbars=no,status=no,location=no,toolbar=no,menubar=no';
        window.open(url, 'popup', param);
    })

});
