<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" charset="UTF-8">
        <title>UVM-Campus Cumbres</title>
        <link rel="stylesheet" href="resource/css/index.css">
        <link rel="stylesheet" href="resource/css/noticias.css">
        <link rel="stylesheet" href="resource/css/convocatoria.css">
        <link rel="stylesheet" href="resource/css/gresado.css">
        <link rel="stylesheet" href="resource/css/slidorion.css" />
        <link rel="stylesheet" href="resource/css/index_media_screen960.css">
        <link rel="stylesheet" href="resource/css/eventos.css">
        <link rel="stylesheet" href="resource/css/OpcionesUsuario.css">
        <link rel="stylesheet" href="resource/css/perfil.css">

        <script src="resource/js/jquery-1.9.0.min.js"></script>
        <script src="resource/js/calendar/jquery.func.js"></script>
        <script src="resource/js/jquery.slidorion.min.js"></script>
        <script src="resource/js/jquery.easing.js"></script>
	    <script src="resource/js/index.js"></script>
        <script src="resource/js/eventos_opciones.js"></script>
        <script src="resource/js/eventos.js"></script>
        <script>
            $(function() {
                $('#slidorion').slidorion({
                        interval: 5000,
                        effect: 'slideRandom'
                });
            });
        </script>
        <meta name="viewport" content="initial-scale=1.0" />
    </head>
    <body onload="show()">
<?php
// put your code here
?>
<div id="contenedor" class="contenedor">
            <div>
            <div id="img_cabecera" class="img_cabecera">
                <img src="resource/imagenes/img_cabecera.jpg" title="img_cabecera.jpg">
            </div>
            <div id="social_btns" class="social_btns">
                <div id="face_div" class="sc_btn">
                    <a href="">
                        <img src="resource/iconos/facebook.png">
                    </a>
                </div>
                <div id="twit_div" class="sc_btn">
                    <a href="">
                        <img src="resource/iconos/twitter.png">
                    </a>
                </div>
                <div id="yout_div" class="sc_btn">
                    <a href="">
                        <img src="resource/iconos/youtube.png">
                    </a>
                </div>
                <div id="lin_div" class="sc_btn">
                    <a href="">
                          <img src="resource/iconos/linkedin.png">
                    </a>
                </div>
                <div id="rss_div" class="sc_btn">
                    <a href="">
                        <img src="resource/iconos/rss.png">
                    </a>
                </div>
            </div>
            <div class="clear"></div>
            </div>
            <nav>
                <div id="menuizquierdo">
                    <ul class="div_ul" id="main_menu">
                        <li class="div_li" id="index"><a href="index.php">Inicio</a></li>
                        <li class="div_li" id="nosotros"><a href="#">Nosotros</a>
                            <ul class="div_ul" id="sub_menu">
                                <li class="div_li" id="mision_li"><a id="mision" href="">Mision</a>
                                    <ul class="div_ul" id="menu_mision">
                                        <li class="div_li"><a id="a_menu_mision">La Universidad del Valle de México es una Institución que, de manera integral, educa con un equilibrio entre los enfoques científico-tecnológico y ético-cultural, acordes con las necesidades sociales, la búsqueda de la verdad y el bien común; fundamentándose en su Filosofía Institucional y su Modelo Educativo.</a></li>
                                    </ul>
                                </li>
                                <li class="div_li" id="vision_li"><a id="vision" href="">Vision</a>
                                    <ul class="div_ul" id="menu_vision">
                                        <li class="div_li"><a id="a_menu_vision">La Universidad del Valle de México se proyecta como una Institución educativa de prestigio nacional, con nexos internacionales. Competitiva por su Modelo Educativo, sus acreditados programas académicos y su carácter proactivo, prospectivo, flexible e innovador.

Garantiza para sus egresados una congruencia social por su formación como individuos de calidad, íntegros y competitivos, proveedores de conocimientos y habilidades, con decidida actitud de liderazgo y comprometidos con su actualización permanente y la búsqueda de la verdad y el bien común.</a></li>
                                    </ul>
                                </li>
                                <li class="div_li"><a id="valores" href="">Valores</a></li>
                                <li class="div_li"><a id="historia" href="">Historia</a></li>
                                <li class="div_li"><a id="lema" href="">Lema</a></li>
                            </ul>
                        </li>
                        <li class="div_li"><a href="http://www.cumbres.uvmnet.edu/posgrado/" target="_BLANK">Posgrados</a></li>
                        <li class="div_li"><a href="http://www.cumbres.uvmnet.edu/ejecutivas/" target="_BLANK">Licenciaturas Ejecutivas</a></li>
                        <li class="div_li"><a href="http://lince.uvmnet.edu/gcc2/sp/index.asp" target="_BLANK">Bolsa de Trabajo</a></li>
                        <li class="div_li"><a href="http://www.cumbres.uvmnet.edu/alumnos/" target="_BLANK">Servicios Escolares</a></li>
                        <li class="div_li"><a onClick="contacto()">Contacto UVM</a></li>
                    </ul>
                </div>
            </nav>
            <div id="centro" class="centro">
                <div id="div_izquierdo" class="div_izquierdo">

                    <!--Diseño del login-->
                    <section id="login_frm_sc" class="login_frm_sc">
                        <!-- Posicion elementos menú -->
                        @yield('login')

                     </section>
                    <div id="calendario_div" class="calendario_div">
                      <div id="cal_div" class="cal_div">
                            <div id="espacio_div">
                                <img src="resource/iconos/calendar.png">
                            </div>
                            <div id="dato_fecha_div" align="center">
                            <label id="num_dia_lbl">
<?php
function hora_local($zona_horaria = 0) {
	if ($zona_horaria > -12.1 and $zona_horaria < 12.1) {
		$hora_local = time()+($zona_horaria * 3600);
		return $hora_local;
	}
	return 'error';
}

echo gmdate('d', hora_local(-5));
?>
</label>
                                </div>
                              <div id="efecto_sombra"></div>
                            </div>
                            <div id="fechaletra_div" class="fechaletra_div">
                            <label>
<?php

$arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
	'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

$dia = gmdate('l', hora_local(-5));

switch ($dia) {
	case 'Sunday':
		$dia = 'Domingo';
		break;
	case 'Monday':
		$dia = 'Lunes';
		break;
	case 'Tuesday':
		$dia = 'Martes';
		break;
	case 'Wednesday':
		$dia = 'Miercoles';
		break;
	case 'Thursday':
		$dia = 'Jueves';
		break;
	case 'Friday':
		$dia = 'Viernes';
		break;
	case 'Saturday':
		$dia = 'Sabado';
		break;
}

echo $dia . ' ' . gmdate('d', hora_local(-5)) . ' de ' . $arrayMeses[gmdate('m') - 1];
?>
</label>
                            <br>
                            <img src="resource/iconos/Reloj.png" id="reloj_img" title="Reloj.png"/>
                                <form name="Tick" id="hora_lbl">
                                     <input type="text" size="9" name="Clock" id="reloj_dig" readonly/>
                                </form>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div id="div_derecho" class="div_derecho">
                    <div id="div_derecho_top" class="div_derecho_top">
                        <h1 id="noticias_h1">Noticias</h1>
                        <h1 id="contacto_h1">Contacto</h1>
                        <h1 id="registro_h1">Registro de usuarios</h1>
                        <h1 id="perfil_h1">Mi Perfil</h1>
                        <h1 id="convocatoria_h1">Convocatoria</h1>
                        <h1 id="egresado_h1">Egresados-online</h1>
                        <h1 id="evento_h1">Eventos</h1>
                        <h1 id="admonEventos_h1">Administrando Eventos</h1>
                        <h1 id="admonConvocatorias_h1">Administrando Convocatorias</h1>
                        <h1 id="admonNoticias_h1">Administrando Noticias</h1>
                    </div>
                    <div id="div_derecho_bottom" class="div_derecho_bottom">
                       <!--Diseño div slidershow-->

                        <div id="slidorion" class="slidorion">
                                <div class="slider">
                                        <div class="slide"><img src="resource/img/1.jpg" /></div>
                                        <div class="slide"><img src="resource/img/2.jpg" /></div>
                                        <div class="slide"><img src="resource/img/3.jpg" /></div>
                                </div>

                                <div class="accordion">
                                        <div class="header">UVM-Cumbres</div>
                                        <div class="content">
                                                <p>
                                                    Muhammad Ali (born Cassius Marcellus Clay, Jr.) is an American former professional boxer, philanthropist and social activist.
                                                    Nicknamed "The Greatest", and widely considered the best heavyweight of all-time, Ali was involved in several historic boxing matches.
                                                </p>
                                                <p>
                                                    Ali become the first and only three-time lineal World Heavyweight Champion.
                                                </p>
                                        </div>
                                        <div class="header">Deportes</div>
                                        <div class="content">
                                                <p>
                                                    Usain Bolt is a Jamaican sprinter widely regarded as the fastest person ever. He is the first man to hold both the 100 and 200 metres world
                                                    records since automatic time measurements became mandatory in 1977.
                                                </p>
                                                <p>
                                                    His achievements have earned him the media nickname "Lightning Bolt", and awards including the IAAF
                                                    World Athlete of the Year and Track &amp; Field Athlete of the Year
                                                </p>
                                        </div>
                                        <div class="header">Conferencias</div>
                                        <div class="content">
                                                <p>Michael Jeffrey Jordan (MJ), is an American former professional basketball player, entrepreneur, and majority owner and chairman of the Charlotte Bobcats.</p>
                                                <p>MJ's individual accolades and accomplishments include five MVP awards, fourteen NBA All-Star Game appearances and many more. He was inducted into the Basketball Hall of Fame in 2009.</p>
                                        </div>
                                </div>
                        </div>
                       <p id="inicio_p">
                           Bienvenidos a la página de enlace de ex-alumnos de UVM-Cumbres, aquí encontraras noticias, eventos etc. o con solo ingresar ponerte en contacto con otras personas.
                           Bienvenidos a la página de enlace de ex-alumnos de UVM-Cumbres, aquí encontraras noticias, eventos etc. o con solo ingresar ponerte en contacto con otras personas.
                           Bienvenidos a la página de enlace de ex-alumnos de UVM-Cumbres, aquí encontraras noticias, eventos etc. o con solo ingresar ponerte en contacto con otras personas.
                       </p>
                    </div>
                </div>
                <div clas="clear"></div>
            </div>
    <footer>
            <div id="pie" class="pie">
                <label id="label_pie" class="label_pie">
                    LOGIMaDE © Derechos Reservados 2014
                </label>
            </div>
    </footer>
        </div>
    </body>
</html>
