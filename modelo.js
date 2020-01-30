
$(document).ready(function(){

    $('#modelo').on('change',function(){
    
    var modelo = $(this).val();
    
    if(modelo){
        
    $.ajax({
        
    type:'POST',
    
    url:'ajaxData3.php',
    
    data:'soat='+ modelo,
    
    success:function(r){
    
    $('#soat').html(r);
    
    }
    
    });
    
    }else{
    
    $('#resultado').html('<option value=\"\">Selecciona una referencia primero</option>');
    
    }
    
    });
    
    });
    
    