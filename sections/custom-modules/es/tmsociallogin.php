<h3>TM Social Login</h3>
<p>Este módulo permite registrar y firmar con la ayuda de los datos de las páginas de los clientes en
     redes sociales como Facebook y Google.</p>
<h4>Instalación del Módulo</h4>
<p>Este módulo se puede instalar/desinstalar como cualquier otro módulo de PrestaShop.</p>
<h4>Ajustes del módulo</h4>
<p>Después de instalar el módulo, puede configurarlo en la configuración del módulo
    página.</p>
<p>Para obtener los datos necesarios para la configuración del módulo, debe crear
     la aplicación correspondiente en el recurso necesario.</p>
<p>No es necesario utilizar ambas variantes de inicio de sesión (Google, Facebook) 
     simultáneamente, puede utilizar una de ellas.</p>
<h4>Campos de Facebook</h4>
<ul class="marked-list">
    <li>ID de tu aplicación.</li>
    <li>Clave secreta de tu aplicación.</li>
</ul>
<h4>Campos de Google</h4>
<ul class="marked-list">
    <li>ID de tu aplicación.</li>
    <li>Clave secreta de tu aplicación.</li>
    <li>Redirigir ruta después de iniciar sesión <strong>(your shop
            URL+index.php?fc=module&module=tmsociallogin&controller=googlelogin)</strong>. </li>
</ul>
<p class="alert alert-info">Información más detallada que puede obtener siguiendo los enlaces: <a
        href="https://support.google.com/cloud/answer/6158849?hl=en&ref_topic=6262490" target="_blank">Google
        App</a> y <a href="https://developers.facebook.com/docs/apps/register" target="_blank">Facebook
        App</a>.</p>
<p class="alert alert-warning">
    La ruta de redireccionamiento debe coincidir con la que ha indicado al crear la aplicación de Google.
</p>
<figure class="img-polaroid">
    <img src="img/tmsociallogin-1.png" alt=""/>
</figure>