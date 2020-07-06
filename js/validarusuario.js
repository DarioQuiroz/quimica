
function validar_usuario() {



    var imail;
    var inputPassword2;

 

    imail=document.getElementById("inputEmail").value;
    inputPassword2=document.getElementById("inputPassword").value;
    
    
    
     if(inputPassword2===""||imail===""){
        alert("todos los campos son obligatorios");
        return false;
        }

        else if ((inputPassword2!=""||imail!="")&& (inputPassword2==="facturapiq@piq.com.mx" && imail==="clave1"))
    
        {   
        window.location.href='php/captura_producto.php"';
    }
/*
        if((inputPassword2 != inputPassword || rfc != rfc2) ){
            alert("los campos de contraseña o de RFC no coinciden");
            return false;
            }

            if((rfc.length<11) ){
                alert("El campo del RFC debe contener como minimo once carcteres y máximo trece.");
                return false;
                }*/
   
    }
