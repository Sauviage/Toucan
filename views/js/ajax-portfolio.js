var file = "";


$(".delete").click(function(element){
    element.preventDefault();
    var id = element["currentTarget"]["id"];
    console.log($("#" + id).parent().parent().parent());
    $.ajax({
        url : 'views/controller/delete-portfolio.php',
        type : 'POST',
        data : 'id= ' + $(this).attr("id"),
        dataType : 'html',
        success : function(code_html, statut){
            console.log(code_html, statut);
            $("#" + id).parent().parent().fadeOut("slow");
        }
    });
});


$(':file').on('change', function() {
    file = this.files[0];
    // Also see .name, .type
});


$(".modification").click(function(element){
    element.preventDefault();

    var formData = new FormData();
    var id = element["currentTarget"]["id"];

    formData.append("id", element["currentTarget"]["id"]);
    formData.append("lien", $("#" + id).parent().parent().children('#lien').children('input').val());
    formData.append("icon", $("#" + id).parent().parent().children('#icon').children('input').val());
    formData.append("titre", $("#" + id).parent().parent().children('#titre').children('input').val());
    formData.append("soustitre", $("#" + id).parent().parent().children('#soustitre').children('input').val());
    if(file != ""){
        formData.append("adresse_img", file);
    }else{
        formData.append("adresse_img", $("#" + id).parent().parent().children('#adresse_img').children('input').attr('value'));
    }

    /*var id = element["currentTarget"]["id"];
    var lien = $("#" + id).parent().parent().children('#lien').children('input').attr('value');
    var icon = $("#" + id).parent().parent().children('#icon').children('input').attr('value');
    var titre = $("#" + id).parent().parent().children('#titre').children('input').attr('value');
    var soustitre = $("#" + id).parent().parent().children('#soustitre').children('input').attr('value');
    var adresse_img = $("#" + id).parent().parent().children('#adresse_img').children('input').attr('value');*/
    console.log($("#" + id).parent().parent().children('#lien').children('input').val());
    //console.log($("#" + id).parent().parent().children('#lien').children('input').attr('value'));
    /*$.ajax({
        url : 'views/controller/update-portfolio.php',
        type : 'POST',
        data :
        'id= ' + $(this).attr("id") + '&lien= ' + lien + '&icon= ' + icon + '&titre= ' + titre + '&soustitre= ' + soustitre + '&adresse_img= ' + adresse_img,
        dataType : 'html',
        success : function(code_html, statut){
            console.log(code_html, statut);
        }
    });*/
    $.ajax({
        url : 'views/controller/update-portfolio.php',
        type : 'POST',
        data : formData,
        processData: false,
        contentType: false,
        success : function(code_html, statut){
            console.log(code_html, statut);
        }
    });
});