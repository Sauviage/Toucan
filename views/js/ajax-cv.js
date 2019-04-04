$(".update").click(function(element){
    element.preventDefault();
    var id = element["currentTarget"]["id"];

    var categorie = $(this).parent().parent().parent().parent().parent().find("h3")[0]["innerText"];


    if (categorie == "Experience"){

        var formData = new FormData();
        var id = element["currentTarget"]["id"];


        formData.append("categorie", categorie);
        formData.append("id", id);
        formData.append("entreprise", $(this).parent().parent().children('#entreprise').children('input').val());
        formData.append("lien", $(this).parent().parent().children('#lien').children('input').val());
        formData.append("date", $(this).parent().parent().children('#date').children('input').val());

        $.ajax({
            url : 'views/controller/update-cv.php',
            type : 'POST',
            data : formData,
            processData: false,
            contentType: false,
            success : function(code_html, statut){
            }
        });
    }
    else if (categorie == "Diplomes"){

        var formData = new FormData();
        var id = element["currentTarget"]["id"];

        formData.append("categorie", categorie);
        formData.append("id", id);
        formData.append("diplome", $(this).parent().parent().children('#diplome').children('input').val());
        formData.append("lien", $(this).parent().parent().children('#lien').children('input').val());
        formData.append("date", $(this).parent().parent().children('#date').children('input').val());

        $.ajax({
            url : 'views/controller/update-cv.php',
            type : 'POST',
            data : formData,
            processData: false,
            contentType: false,
            success : function(code_html, statut){
                //$("#" + id).parent().parent().fadeOut("slow");
            }
        });
    }
    else if (categorie == "Connaissances"){

        var formData = new FormData();
        var id = element["currentTarget"]["id"];


        //formData.append

        formData.append("categorie", categorie);
        formData.append("id", id);
        formData.append("label", $(this).parent().parent().children('#label').children('input').val());
        formData.append("competence", $(this).parent().parent().children('#competence').children('input').val());
        formData.append("description", $(this).parent().parent().children('#description').children('input').val());
        formData.append("couleur", $(this).parent().parent().children('#couleur').children('input').val());

        $.ajax({
            url : 'views/controller/update-cv.php',
            type : 'POST',
            data : formData,
            processData: false,
            contentType: false,
            success : function(code_html, statut){
            }
        });
    }


});

$(".delete").click(function(element){
    console.log("clic");
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
                $("#" + id).parent().parent().fadeOut("slow");
            }
        });
    }
    else if (categorie == "Connaissances"){
        $.ajax({
            url : 'views/controller/delete-cv.php',
            type : 'POST',
            data : 'id= ' + $(this).attr("id") + '&categorie=' + categorie,
            dataType : 'html',
            success : function(code_html, statut){
                $("#" + id).parent().parent().fadeOut("slow");
            }
        });
    }


});