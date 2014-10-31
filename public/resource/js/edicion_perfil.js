
function editarPerfil(){
	 $('#div_cuerpo_edicion').load('paginas/edicion_perfil/Editar_Perfil.php');
	 $('#bttn_perfil').css('background', '#7A2806');
	 $('#bttn_personal').css('background', '#B00');
	 $('#bttn_academica').css('background', '#B00');
	 $('#bttn_laboral').css('background', '#B00');
}

function editarTrabajo(){
	 $('#div_cuerpo_edicion').load('paginas/edicion_perfil/Editar_Trabajo.php');
	 $('#bttn_perfil').css('background', '#B00');
	 $('#bttn_personal').css('background', '#B00');
	 $('#bttn_academica').css('background', '#B00');
	 $('#bttn_laboral').css('background', '#7A2806');
}

function editarEscuela(){
	 $('#div_cuerpo_edicion').load('paginas/edicion_perfil/Editar_Academica.php');
	 $('#bttn_perfil').css('background', '#B00');
	 $('#bttn_personal').css('background', '#B00');
	 $('#bttn_academica').css('background', '#7A2806');
	 $('#bttn_laboral').css('background', '#B00');
}

function editarPersonal(){
	 $('#div_cuerpo_edicion').load('paginas/edicion_perfil/Editar_Personal.php');
	 $('#bttn_perfil').css('background', '#B00');
	 $('#bttn_personal').css('background', '#7A2806');
	 $('#bttn_academica').css('background', '#B00');
	 $('#bttn_laboral').css('background', '#B00');
}

function mostrarEdicionPerfil(){
	$('#div_main_edicion_perfil').css('display','inherit');
}

function cerrarEdicionPerfil(){
	$('#div_main_edicion_perfil').css('display','none');
}