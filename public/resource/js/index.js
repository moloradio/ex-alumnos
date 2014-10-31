function contacto(){
	 $('#div_derecho_bottom').load('paginas/contacto.php');
         $('#contacto_h1').show();
	 $('#noticias_h1').hide();
         $('#registro_h1').hide();
     $('#perfil_h1').hide();
} 
 
function registro(){
	 $('#div_derecho_bottom').load('paginas/registro_usr.php');
         $('#registro_h1').show();
	 $('#noticias_h1').hide();
         $('#contacto_h1').hide();
     $('perfil_h1').hide();
} 

 function show(){
        var Digital=new Date();
        var hours=Digital.getHours();
        var minutes=Digital.getMinutes();
        var seconds=Digital.getSeconds();
        var dn="AM";
            if (hours>12)
            {
                dn="PM";
                hours=hours-12;
            }
            if (hours==0)
            {
                hours=12;
            }
            if (minutes<=9)
            {
                    minutes="0"+minutes;
            }
            if (seconds<=9)
            {
            seconds="0"+seconds;
            }
        document.Tick.Clock.value=hours+":"+minutes+":"+seconds+" "+dn;
        setTimeout("show()",1000);
}
/*Funcion para abrir un popup de restaurar contraseña*/
function abrirPopUp(){
        document.getElementById('shadow').style.display='block';
        $('#restaurar_contraseña').fadeIn('normal');
        $('#correo_txt_rc').focus();
};

function cerrarPopup()
{
    $('#shadow').fadeOut();
    $('#restaurar_contraseña').fadeOut();
}