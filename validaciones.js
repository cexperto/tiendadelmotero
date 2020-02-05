        $(document).on('ready',function(){       
    $('#enviar').click(function(){ 
        var contenedor=document.getElementById("contenedor");
        
        var varmarca = document.getElementById("marca");
        var capam = document.getElementById("mm");
 
        var varreferencia = document.getElementById("referencia");
        var capar = document.getElementById("mr");
        
        var varmodelo = document.getElementById("modelo");
        var capamo = document.getElementById("mo");

        var varsoat = document.getElementById("soat");
        var capas = document.getElementById("ms");

        var varcorreo = document.getElementById("correo");
        var capacor = document.getElementById("mco");
    
        var vartelefono = document.getElementById("telefono");
        var capat = document.getElementById("mt"); 

        var varcheck = document.getElementById("exampleCheck1");
        
       
        if(varmarca.value==0 || varmarca.value == ""){
            capam.style.borderColor="#e4002b";
            varmarca.style.backgroundColor = '#F6A9A7';
            varmarca.style.borderColor = '#F6A9A7';

            document.getElementById('rmarca').innerHTML ="<font size='1' color = '#e4002b'>Elige la marca de tu moto</font>"; 
            document.getElementById('rmarca').style.height='22px';
            document.getElementById('rmarca').style.textAlign = "left";

        }
 
        if(varreferencia.value==0 || varreferencia.value == "")
                {
                    
                    capar.style.borderColor="#e4002b";
                    varreferencia.style.backgroundColor = '#F6A9A7';
                    varreferencia.style.borderColor = '#F6A9A7';
                    
                    document.getElementById('rreferencia').innerHTML = "<font size='1' color = '#e4002b'>Encentra esta información en la licencia de transito o en el manual del vehículo.</font>";
                    document.getElementById('rreferencia').style.height='30px';
                    document.getElementById('rreferencia').style.textAlign = "left";
                    
                    }
                    if(varmodelo.value==0 || varmodelo.value == ""){
                        capamo.style.borderColor="#e4002b";
                        varmodelo.style.backgroundColor="#F6A9A7";
                        varmodelo.style.borderColor="#F6A9A7";

                        document.getElementById('rmodelo').innerHTML = "<font  size='1' color = '#e4002b'>Encentra esta información en la licencia de transito o en el manual del vehículo.</font>";
                        document.getElementById('rmodelo').style.height='30px';
                        document.getElementById('rmodelo').style.textAlign = "left";
                
                    }
                    if(varsoat.value==0 || varsoat.value == ""){
                        var varsoat = document.getElementById("soat");
                        var capas = document.getElementById("ms");

                        capas.style.borderColor="#e4002b";
                        varsoat.style.backgroundColor = '#F6A9A7';
                        varsoat.style.borderColor="#F6A9A7";

                        document.getElementById('rsoat').innerHTML = "<font size='1' color = '#e4002b'>Ingresa la vigencia de tus papeles </font>";
                        document.getElementById('rsoat').style.height='20px';
                        document.getElementById('rsoat').style.textAlign = "left";
                    

                    }
                    if(varcorreo.value==0 || varcorreo.value == ""){
                        var varcorreo = document.getElementById("correo");
                        var capacor = document.getElementById("mco");

                        capacor.style.borderColor="#e4002b";
                        varcorreo.style.backgroundColor = '#F6A9A7';
                        varcorreo.style.borderColor="#F6A9A7";

                        document.getElementById('rcorreo').innerHTML = "<font size='1' color = '#e4002b'>Por favor, vuelva a verificar su dirección de correo electrónico. Solo lo usaremos para enviar información sobre su inspección</font>";
                        document.getElementById('rcorreo').style.height='30px';
                        document.getElementById('rcorreo').style.textAlign = "left";
                    
                    }
                    if(vartelefono.value==0 || vartelefono.value == ""){
                        var vartelefono = document.getElementById("telefono");
                        var capat = document.getElementById("mt"); 

                        capat.style.borderColor="#e4002b";
                        vartelefono.style.backgroundColor = '#F6A9A7';
                        vartelefono.style.borderColor="#F6A9A7";

                        document.getElementById('rtelefono').innerHTML = "<font size='1' color = '#e4002b'>Debe contener 10 dígitos. Solo lo contactaremos para su inspección</font>";
                        document.getElementById('rtelefono').style.height='20px';
                        document.getElementById('rtelefono').style.textAlign = "left";
                        
                    }
                   
                    var isChecked = document.getElementById('exampleCheck1').checked;
                    if(isChecked){
                    
                    }else{
                        document.getElementById('rchek').innerHTML = "<font  size='1' color = '#e4002b'>Por favor, acepta nuestro aviso de privacidad.</font>";
                        document.getElementById('rchek').style.height='22px';
                        document.getElementById('rchek').style.textAlign = "left";
                        document.getElementById('contenedor').style.height='800px';
                       
                      
                    }
                    

        
    });
});


