$(".delete").click(function(element){

    element.preventDefault();



    // console.log(e);
    var id = e["currentTarget"]["id"];
    $.ajax({

        url : 'views/controller/delete.php', // Le nom du script a changé, c'est send_mail.php maintenant !

        type : 'POST', // Le type de la requête HTTP, ici devenu POST
        data : 'id= ' + $(this).attr("id"),
        dataType : 'html',

        success : function(code_html, statut){ // code_html contient le HTML renvoyé

            console.log(code_html, statut);

            $("#" + id).parent().fadeOut("slow");

        }
    });
});