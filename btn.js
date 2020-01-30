jQuery(document.body).ready(function()
{
    jQuery('#enviar').click(function(){
        var url = "Resultado-precio.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: $("#precio").serialize(), 
           success: function(data)             
           {
             $('#res').html(data);               
           }
       });
    });
});     
    
jQuery(document).on("submit","#precio",function(e){
    e.preventDefault();
    
    $.post("Plugin-cotizador/Resultado-precio.php",$("#precio").serialize(),function(res){
        $("#cargapost").html(res);
    });
})
//jQuery("#myModal").modal();