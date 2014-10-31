@extends('layout')

@section('carrusel')

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
@endsection