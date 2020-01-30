$(document).ready(function(){

    $('#referencia').on('change',function(){
    
    var referencia = $(this).val();
    //document.write(referencia);    
    if(referencia){
        
    $.ajax({
        
    type:'POST',
    
    url:'ajaxData2.php',
    
    data:'referencia='+ referencia,
    
    success:function(r){
    
    $('#modelo').html(r);
    
    }
    
    });
    
    }else{
    
    $('#modelo').html('<option value=\"\">Selecciona una referencia primero</option>');
    
    }
    
    });
    
    });
    
    