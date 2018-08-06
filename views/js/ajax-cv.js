$(".delete").click(function(element){
    element.preventDefault();
    var id = element["currentTarget"]["id"];
    var categorie = $("#" + id).parent().parent().parent().parent().parent().find("h3")[0]["innerText"];

    if (categorie == "Experience"){
    $.ajax({
        url : 'views/controller/delete-cv.php',
        type : 'POST',
        data : 'id= ' + $(this).attr("id") + '&categorie=' + categorie,
        dataType : 'html',
        success : function(code_html, statut){
            console.log(code_html, statut);
            $("#" + id).parent().parent().fadeOut("slow");
        }
    });
    }
    else if (categorie == "Diplomes"){
        $.ajax({
            url : 'views/controller/delete-cv.php',
            type : 'POST',
            data : 'id= ' + $(this).attr("id") + '&categorie=' + categorie,
            dataType : 'html',
            success : function(code_html, statut){
                console.log(code_html, statut);
                $("#" + id).parent().parent().fadeOut("slow");
            }
        });
    }


});