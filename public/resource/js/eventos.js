/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function verificarNavegador(){
    if(window.XMLHttpRequest) {  // Navegadores que siguen los estándares
      peticion_http = new XMLHttpRequest();
    }
    else if(window.ActiveXObject) {  // Navegadores obsoletos
      peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return peticion_http;
}

function crearEvent(nombre, paterno, materno, fecha_nac, correo, telefono, matricula, carrera, campus, fecha){
    //alert(nombre+" "+paterno+" "+materno+" "+fecha+" "+fecha_nac+" "+correo+" "+telefono+" "+matricula+" "+carrera+" "+campus);
    var sesion = verificarNavegador();
    sesion.onreadystatechange=function(){
        if (sesion.readyState==4 && sesion.status==200){
            //document.getElementById("myDiv").innerHTML=sesion.responseText;
            //document.getElementById('nombre_rg').value = '';
            //alert(sesion.responseText+"dfsdf");
            alert(sesion.responseText);
            document.getElementById('nombre_rg').value = "";
            document.getElementById('apellidoP_rg').value = "";
            document.getElementById('apellidoM_rg').value = "";
            document.getElementById('fecha_nac').value = "";
            document.getElementById('correo_rg').value = "";
            document.getElementById('telefono_rg').value = "";
            document.getElementById('matricula').value = "";
            document.getElementById('fecha_egreso').value = "";
            document.getElementById('captcha').value = "";
        }
    }
    sesion.open("GET", "database/Usuario.php?nombre_rg="+nombre+
            "&apellidoP_rg="+paterno+"&apellidoM_rg="+materno+"&fecha_nac="+fecha_nac
            +"&email="+correo+"&telefono_rg="+telefono+"&matricula="+matricula
            +"&carrera="+carrera+"&campus="+campus+"&fecha_egreso="+fecha, true);
    sesion.send();
}

function validarUsuario(nomUsuario, password){
    $('#login_frm_sc').load('paginas/OpcionesUsuario.php');
    /*var sesion = verificarNavegador();
    sesion.onreadystatechange=function(){
        if (sesion.readyState==4 && sesion.status==200){
            alert(sesion.responseText);
        }
    }
    sesion.open("GET", "database/Usuario.php?nomUser="+nomUsuario+"&pass="+password, true);
    sesion.send();*/
}


