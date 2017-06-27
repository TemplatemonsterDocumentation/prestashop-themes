<h3>TM Header Account 2.0</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponible en:</p>
        <p style="margin-top: 0;" class="small text-secondary">Fashion, Electronics, Spare Parts, Furniture, One Product</p>
    </div>
<?php } ?>
<p class="alert alert-warning">
    Si tiene la versión 1.n de este módulo instalada en su motor prestashop, no se recomienda actualizarla con la actual. Primero debe quitar la versión anterior del módulo para que se ejecute sin errores.
</p>
<p>Este módulo muestra los formularios de registro y registro en el sitio web. Puede tomar las posiciones siguientes: encabezado del sitio web, columna izquierda y derecha. El módulo permite iniciar sesión y registrarse utilizando redes sociales como Facebook, Google+ y VK, que es conveniente para los usuarios del sitio web. Registro o registro de ingresos sin recargar la página.</p>
<h4>TM Header Account Main Panel</h4>
<p>El panel principal. Aquí puede configurar el módulo.</p>
<figure class="img-polaroid">
    <img src="img/tmheaderaccount200-1.png" alt=""/>
</figure>
<h4>Ajustes</h4>
<p>Hay los siguientes ajustes en el módulo:</p>
<ul class="index-list">
    <li><p>Tipo de pantalla - este ajuste permite seleccionar la forma de mostrar el formulario de registro. Puede tomar los siguientes valores:</p>
        <ul class="marked-list">
            <li><strong>Desplegable</strong> - el formulario se mostrará como un desplegable debajo del botón que lo abre.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-2.png" alt=""/>
                </figure>
            </li>
            <li><strong>Popup</strong> - el formulario aparecerá en una ventana emergente.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-3.png" alt=""/>
                </figure>
            </li>
            <li><strong>Lado izquierdo</strong> - el formulario aparecerá desde la izquierda como una barra lateral.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-4.png" alt=""/>
                </figure>
            </li>
            <li><strong>Lado derecho</strong> - el formulario aparecerá desde la derecha como una barra lateral.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-5.png" alt=""/>
                </figure>
            </li>
        </ul>
    </li>
    <li><p>Estilo de visualización después del inicio de sesión - este ajuste permite cambiar la vista de formulario después del inicio de sesión/registro. Puede utilizar los siguientes valores:</p>
        <ul class="marked-list">
            <li><strong>Dos columnas</strong> - la lista se divide en dos columnas.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-6.png" alt=""/>
                </figure>
            </li>
            <li><strong>Una Columna</strong> - La lista de enlaces se muestra como una columna.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-7.png" alt=""/>
                </figure>
            </li>
        </ul>
    </li>
    <li>Avatar predeterminado: este campo sólo aparece si la opción 'Mostrar avatar' está activada. Aquí puede seleccionar el avatar de usuario predeterminado.</li>
    <li>Mostrar avatar: esta opción permite activar o desactivar el avatar de usuario. Si el usuario accede a la cuenta en el sitio web con la ayuda de una de las redes sociales, el avatar será tomado de la cuenta en esta red social, de lo contrario, el avatar, cargado por el administrador del sitio web, se mostrará.</li>
    <li>Utilizar redireccionamiento: si esta opción está activada, el registro de usuario y la recuperación de contraseñas se realizarán en la página de recuperación predeterminada de registro/contraseña de PrestaShop.</li>
    <li><p>Utilizar Facebook Login - esta configuración permite habilitar el registro de usuario y de inicio de sesión con la ayuda de la red social de Facebook. Cuando habilite esta opción, verá las siguientes configuraciones:</p>
        <ul class="marked-list">
            <li><strong>App ID</strong> - tu ID de la cuenta de la cuenta de desarrollador de Facebook.</li>
            <li><strong>App Secret</strong> - el secreto de tu aplicación de la cuenta de desarrollador de Facebook.</li>
        </ul>
    </li>
    <li><p>Utilizar inicio de sesión de Google: esta configuración permite habilitar el inicio de sesión de usuario y el registro con la ayuda de la red social de Google+. Si habilita esta opción, verá la siguiente configuración:</p>
        <ul class="marked-list">
            <li><strong>App ID</strong> - tu ID de la aplicación de la cuenta de desarrollador de Google.</li>
            <li><strong>App Secret</strong> - el secreto de tu aplicación en la cuenta de desarrollador de Google.</li>
            <li><strong>Redirect URIs</strong> - tu url de la tienda en línea + index.php?fc=module&module=tmheaderaccount&controller=googlelogin</li>
        </ul>
    </li>
    <li><p>Utilizar VK Login - este ajuste permite activar el registro de usuario y el inicio de sesión con la ayuda de la red social VK. Si activa esta opción, verá la siguiente configuración:</p>
        <ul class="marked-list">
            <li><strong>App ID</strong> - tu ID de aplicación de tu cuenta de desarrollador de VK.</li>
            <li><strong>App Secret</strong> - secreto de la aplicación de tu cuenta de desarrollador de VK.</li>
            <li><strong>Redirect URIs</strong> - tu url de la tienda en línea + index.php?fc=module&module=tmheaderaccount&controller=vk</li>
        </ul>
    </li>
</ul>
<h5>Registro de aplicaciones en redes sociales:</h5>
<ul class="marked-list">
    <li><strong>Facebook</strong> - para obtener el ID de la aplicación y el secreto de la aplicación, registra tu aplicación en <a target="_blank" href="https://developers.facebook.com/apps">https://developers.facebook.com/apps</a>.</li>
    <li><strong>Google+</strong> - para obtener el ID de la aplicación y el secreto de la aplicación, registra tu aplicación en <a target="_blank" href="https://developers.google.com/accounts/docs/OAuth2/">https://developers.google.com/accounts/docs/OAuth2/</a>.</li>
    <li><strong>VK</strong> - para obtener la identificación de la aplicación y el secreto de la aplicación registrar tu aplicación en <a target="_blank" href="https://vk.com/dev">https://vk.com/dev</a>.</li>
</ul>

