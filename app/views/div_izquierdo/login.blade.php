@extends('layout')

@section('login')
<h3>Identificarse</h3>
    <form action="" method="post" enctype="multipart/form-data" name="log_form" id="login_frm">
    <fieldset id="fls_frm">
        <p>
           <label for="user_lbl">Usuario o Correo </label><br>
           <input type="text" name="usuario" id="user_txt" placeholder="usuario o correo@mail.com" required="required" />
        </p>
        <p>
            <label for="passw_lbl">Contraseña </label><br>
            <input type="password" name="password" id="password_txt" placeholder="tu contraseña" required="required"/>
        </p>
        <p>
            <input type="button" value="Entrar" onclick="validarUsuario(getElementById('user_txt'),getElementById('password_txt'))" id="entrar_btn" class="entrar_btn"/>
        </p>
    </fieldset>
    <fieldset id="fls_frm">
            <a href="#" id="link_otc" onclick="abrirPopUp();">Olvidaste tu contraseña?</a>|<a href="#" id="link_rgs" onclick="registro();">Aún no te registras?</a>
    </fieldset>
    </form>
    <!--Diseño popup para restaurar contraseña-->
        <div id="restaurar_contraseña">
            <div id="titulo_rc">
                <h4>RESTAURAR CONTRASEÑA</h4>
            </div>
            <div id="estado_evio_rc"></div>
            <div class="clear"></div>
            <form action="" id="frm_rc" method="post" enctype="multipart/form-data">
                <div id="border_rc">
                <p>
                    <label>Correo</label><br>
                    <input type="email" id="correo_txt_rc" name="correo_txt_rc" placeholder="correo@mail.com" required="required"/>
                </p>
                <p>
                    <label>Usuario</label><br>
                    <input type="text" id="user_txt_rc" name="user_txt_rc" placeholder="usuario" required="required"/>
                </p>
                <p>
                            <label></label>
                </p>
                <p>
                    <input type="submit" id="enviar_rc" value="Enviar" class="btn_rc"/>
                    <input type="button" id="cancel_hide" value="Cancelar" class="btn_rc" onclick="cerrarPopup();"/>
                </p>
                </div>
             </form>
            <div class="err" id="add_err"></div>
        </div>
        <div id="shadow" class="popup" onclick="cerrarPopup();"></div>
      <!--**********************************-->
    @endsection