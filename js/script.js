$(document).ready(function () {

    function goto(href) {
        window.location(href);
    }

            $.ajax({
                url: "php/listingfiles.php",
                type: "GET",
                cache: false,
                success: function(dataResult) {
                    dataResult = JSON.parse(dataResult);
                    dataResult = Object.values(dataResult);
                    $.each(dataResult, function (indexInArray, valueOfElement) { 
                        //markup = "<tr><th><a href='../document_viewer/pages/"+ valueOfElement +"'>" + indexInArray + "</th><td> " + valueOfElement + "</a></td></tr>";
                        href = "../document_viewer/pages/"+ valueOfElement;
                        
                        markup = "<tr style='cursor: pointer;' onclick="+goto(href)+"><th>" + indexInArray + "</th><td> " + valueOfElement + "</td></tr>";
                        tableBody = $("table tbody");
                        tableBody.append(markup);
                        
                    });
                }
            });

});