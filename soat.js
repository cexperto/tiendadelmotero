$(document).ready(function(){

    $('#modelo').on('change',function(){
    
    var modelo = $(this).val();
    //document.write(modelo);
    if(modelo){
        
    $.ajax({
        
    type:'POST',
    
    url:'ajaxDataSoat.php',
    
    data:'modelo='+ modelo,
    
    success:function(r){
    
    $('#soat').html(r);
    
    }
    
    });
    
    }else{
    
    $('#resultado').html('<option value=\"\">Selecciona un modelo</option>');
    
    }
    
    });
    
    });
    
    