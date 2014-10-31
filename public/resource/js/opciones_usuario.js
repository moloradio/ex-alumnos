function miPerfil(){
	$('#div_derecho_bottom').load('paginas/OpcionesUsuario/Perfil.php');
         $('#contacto_h1').hide();
	 $('#noticias_h1').hide();
         $('#registro_h1').hide();
     $('#perfil_h1').show();
     	$('#convocatoria_h1').hide();
     $('#egresado_h1').hide();
        $('#evento_h1').hide();
    $('#admonEventos_h1').hide();
        $('#admonConvocatorias_h1').hide();
    $('#admonNoticias_h1').hide();
}

function miNoticias(){
	$('#div_derecho_bottom').load('paginas/OpcionesUsuario/Noticias.php');
         $('#contacto_h1').hide();
	 $('#noticias_h1').show();
         $('#registro_h1').hide();
     $('#perfil_h1').hide();
     	$('#convocatoria_h1').hide();
     $('#egresado_h1').hide();
        $('#evento_h1').hide();
    $('#admonEventos_h1').hide();
        $('#admonConvocatorias_h1').hide();
    $('#admonNoticias_h1').hide();
}

function miConvocatoria(){
	$('#div_derecho_bottom').load('paginas/OpcionesUsuario/Convocatorias.php');
         $('#contacto_h1').hide();
	 $('#noticias_h1').hide();
         $('#registro_h1').hide();
     $('#perfil_h1').hide();
     	$('#convocatoria_h1').show();
     $('#egresado_h1').hide();
        $('#evento_h1').hide();
    $('#admonEventos_h1').hide();
        $('#admonConvocatorias_h1').hide();
    $('#admonNoticias_h1').hide();
}

function miEgresados(){
	$('#div_derecho_bottom').load('paginas/OpcionesUsuario/Egresado.php');
         $('#contacto_h1').hide();
	 $('#noticias_h1').hide();
         $('#registro_h1').hide();
     $('#perfil_h1').hide();
     	$('#convocatoria_h1').hide();
     $('#egresado_h1').show();
        $('#evento_h1').hide();
    $('#admonEventos_h1').hide();
        $('#admonConvocatorias_h1').hide();
    $('#admonNoticias_h1').hide();
}

function miEvento(){
    $('#div_derecho_bottom').load('paginas/OpcionesUsuario/Eventos.php');
         $('#contacto_h1').hide();
     $('#noticias_h1').hide();
         $('#registro_h1').hide();
     $('#perfil_h1').hide();
        $('#convocatoria_h1').hide();
     $('#egresado_h1').hide();
        $('#evento_h1').show();
    $('#admonEventos_h1').hide();
        $('#admonConvocatorias_h1').hide();
    $('#admonNoticias_h1').hide();
}

function admonEvento(){
    $('#div_derecho_bottom').load('paginas/administracion/eventos.php');
         $('#contacto_h1').hide();
     $('#noticias_h1').hide();
         $('#registro_h1').hide();
     $('#perfil_h1').hide();
        $('#convocatoria_h1').hide();
     $('#egresado_h1').hide();
        $('#evento_h1').hide();
    $('#admonEventos_h1').show();
        $('#admonConvocatorias_h1').hide();
    $('#admonNoticias_h1').hide();
}

function admonConvocatorias(){
    $('#div_derecho_bottom').load('paginas/administracion/convocatorias.php');
         $('#contacto_h1').hide();
     $('#noticias_h1').hide();
         $('#registro_h1').hide();
     $('#perfil_h1').hide();
        $('#convocatoria_h1').hide();
     $('#egresado_h1').hide();
        $('#evento_h1').hide();
    $('#admonEventos_h1').hide();
        $('#admonConvocatorias_h1').show();
    $('#admonNoticias_h1').hide();
}

function admonNoticias(){
    $('#div_derecho_bottom').load('paginas/administracion/noticias.php');
         $('#contacto_h1').hide();
     $('#noticias_h1').hide();
         $('#registro_h1').hide();
     $('#perfil_h1').hide();
        $('#convocatoria_h1').hide();
     $('#egresado_h1').hide();
        $('#evento_h1').hide();
    $('#admonEventos_h1').hide();
        $('#admonConvocatorias_h1').hide();
    $('#admonNoticias_h1').show();
}

