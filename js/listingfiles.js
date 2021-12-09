$(document).ready(function () {

    $.ajax({
        type: "GET",
        url: "php/listingusersfiles.php",
        success: function (response) {
            response = response.substring(32);
            response = response.slice(0, -3);
            response = response.replaceAll(/\\/g, '');

            if (response == "") {
                $.each(response, function (indexInArray, valueOfElement) {
                    href = "../document_viewer/pages/" + this;
    
                    var btn = "<button class='btnSelect'>Select</button>";
    
                    var index = indexInArray+1;
    
                    markup = "<tr style='cursor: pointer;'><td>" + index + "</td><td>" + valueOfElement + "</td><td>" + btn + "</td></tr>";
    
                    tableBody = $("#myTable");
                    tableBody.append(markup);
                });
            }
            else {
                response = JSON.parse(response);
                $.each(response, function (indexInArray, valueOfElement) {
                    href = "../document_viewer/pages/" + this;
    
                    var btn = "<button class='btnSelect'>Select</button>";
    
                    var index = indexInArray+1;
    
                    markup = "<tr style='cursor: pointer;'><td>" + index + "</td><td>" + valueOfElement + "</td><td>" + btn + "</td></tr>";
    
                    tableBody = $("#myTable");
                    tableBody.append(markup);
                });
            }

            
        },
    });

    $("#myTable").on('click', '.btnSelect', function() {
        var currentRow = $(this).closest("tr");
    
        var col1 = currentRow.find("td:eq(0)").html();
        var col2 = currentRow.find("td:eq(1)").html();
    
        var url = "../document_viewer/pages/"+col2;

        window.open(url,'popup','width=550,height=800');
    });

});
