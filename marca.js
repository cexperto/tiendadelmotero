
$(document).ready(function(){

    $('#marca').on('change',function(){
    
    var marca = $(this).val();
    
    if(marca){
        
    $.ajax({
        
    type:'POST',
    
    url:'ajaxData.php',
    
    data:'marca='+ marca,
    
    success:function(r){
    
    $('#referencia').html(r);
    
    }
    
    });
    
    }else{
    
    $('#referencia').html('<option value=\"\">Selecciona una referencia primero</option>');
    
    }
    
    });
    
    });
    
    