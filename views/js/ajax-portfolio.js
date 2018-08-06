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