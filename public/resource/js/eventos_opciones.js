 

 $(document).ready(function () {
 	var r = document.getElementsByClassName("label_contenido_noticia");
 	var i = 0;
 	while(i<r.length){
 		createEllipsis(r[i].id);
 		i++;
 	}
 });

 function createEllipsis(containerId){
 	try{
	    $container = $("#" + containerId);
	    var containerHeight = $container.height();
	    var $text = $container.find("p");
	    while ( $text.outerHeight() > containerHeight ) {
	    	//console.log("funciona");
	        $text.text(function (index, text) {
	            return text.replace(/\W*\s(\S)*$/, '...');
	        });
	    }
	}catch(error){
		console.log(error);
	}
}

function mostrarEventos(){
    document.getElementById('div_rows_info_events').innerHTML = "<div class='div_info_eventos'>"+
    "<div class='nombre_info_evt'><label class='titulo_columna_info'>Reunion</label></div>"+
    "<div class='descripcion_info_evt'><label class='titulo_columna_info'>Reunion estudiantes uvm</label></div>"+
    "<div class='fecha_info_evt'><label class='titulo_columna_info'>21/04/2015</label></div>"+
    "</div>"+
    "<div class='div_info_eventos'>"+
    "<div class='nombre_info_evt'><label class='titulo_columna_info'>Conferencia magistral</label></div>"+
    "<div class='descripcion_info_evt'><label class='titulo_columna_info'>Reunion estudiantes uvm</label></div>"+
    "<div class='fecha_info_evt'><label class='titulo_columna_info'>21/04/2015</label></div>"+
    "</div>"+
    "<div class='div_info_eventos'>"+
    "<div class='nombre_info_evt'><label class='titulo_columna_info'>Reunion exa-uvm 2012 reencuentro</label></div>"+
    "<div class='descripcion_info_evt'><label class='titulo_columna_info'>Reunion estudiantes uvm</label></div>"+
    "<div class='fecha_info_evt'><label class='titulo_columna_info'>21/04/2015</label></div>"+
    "</div>"+
     "<div class='div_info_eventos'>"+
    "<div class='nombre_info_evt'><label class='titulo_columna_info'>Conferencia magistral</label></div>"+
    "<div class='descripcion_info_evt'><label class='titulo_columna_info'>Reunion estudiantes uvm</label></div>"+
    "<div class='fecha_info_evt'><label class='titulo_columna_info'>21/04/2015</label></div>"+
    "</div>"+
    "<div class='div_info_eventos'>"+
    "<div class='nombre_info_evt'><label class='titulo_columna_info'>Reunion exa-uvm 2012 reencuentro</label></div>"+
    "<div class='descripcion_info_evt'><label class='titulo_columna_info'>Reunion estudiantes uvm</label></div>"+
    "<div class='fecha_info_evt'><label class='titulo_columna_info'>21/04/2015</label></div>"+
    "</div>"+
     "<div class='div_info_eventos'>"+
    "<div class='nombre_info_evt'><label class='titulo_columna_info'>Conferencia magistral</label></div>"+
    "<div class='descripcion_info_evt'><label class='titulo_columna_info'>Reunion estudiantes uvm</label></div>"+
    "<div class='fecha_info_evt'><label class='titulo_columna_info'>21/04/2015</label></div>"+
    "</div>"+
    "<div class='div_info_eventos'>"+
    "<div class='nombre_info_evt'><label class='titulo_columna_info'>Reunion exa-uvm 2012 reencuentro</label></div>"+
    "<div class='descripcion_info_evt'><label class='titulo_columna_info'>Reunion estudiantes uvm</label></div>"+
    "<div class='fecha_info_evt'><label class='titulo_columna_info'>21/04/2015</label></div>"+
    "</div>";
}