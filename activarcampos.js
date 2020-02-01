$(document).on('ready',function(){       
    $('#marca').click(function(){
        var marca = $(this).val();
        console.log(marca); 
        if(marca){
            document.getElementById("referencia").removeAttribute("disabled");
        }else{
            document.getElementById("referencia").setAttribute("disabled","");
        }
        
    });
});
//
$(document).on('ready',function(){       
    $('#referencia').click(function(){
        var referencia = $(this).val();
        console.log(referencia); 
        if(referencia){
            document.getElementById("modelo").removeAttribute("disabled");
        }else{
            document.getElementById("modelo").setAttribute("disabled","");
        }
        
    });
});
//
$(document).on('ready',function(){       
    $('#modelo').click(function(){
        var modelo = $(this).val();
        console.log(modelo); 
        if(modelo){
            document.getElementById("soat").removeAttribute("disabled");
        }else{
            document.getElementById("soat").setAttribute("disabled","");
        }
        
    });
});

  $(document).on('ready',function(){       
    $('#soat').click(function(){
        var soat = $(this).val();
        console.log(modelo); 
        if(soat){
            document.getElementById("correo").removeAttribute("disabled");
	    document.getElementById("telefono").removeAttribute("disabled");
	    document.getElementById("exampleCheck1").removeAttribute("disabled");
        }else{
            document.getElementById("correo").setAttribute("disabled","");
	    document.getElementById("telefono").setAttribute("disabled","");
	    document.getElementById("exampleCheck1").setAttribute("disabled","");
        }
        
    });
});
