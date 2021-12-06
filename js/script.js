$(document).ready(function () {

            $.ajax({
                url: "php/listingfiles.php",
                type: "POST",
                cache: false,
                success: function(dataResult) {
                    dataResult = JSON.parse(dataResult);
                    dataResult = Object.values(dataResult);
                    $.each(dataResult, function (indexInArray, valueOfElement) { 
                        markup = "<tr><th><a href='../document_viewer/pages/"+ valueOfElement +"'>" + indexInArray + "</th><td> " + valueOfElement + "</a></td></tr>";
                        tableBody = $("table tbody");
                        tableBody.append(markup);
                    });
                }
            });

});