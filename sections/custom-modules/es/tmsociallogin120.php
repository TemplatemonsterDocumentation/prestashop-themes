<h3>TM Social Login 1.2.0</h3>
<p>Este módulo permite registrar y firmar con la ayuda de los datos de las páginas de los clientes en
     redes sociales como Facebook, Google y VK.</p>
<h4>Instalación del modulo</h4>
<p>Este módulo se puede instalar/desinstalar como cualquier otro módulo de PrestaShop.</p>
<h4>Ajustes del módulo</h4>
<p>Después de instalar el módulo, puede configurarlo en la página de configuración del 
     módulo.</p>
<p>Con el fin de obtener los datos necesarios para la configuración del módulo que necesita para crear 
   la aplicación correspondiente en el recurso necesario.</p>
<p>No es necesario utilizar ambas variantes de inicio de sesión (Google, Facebook) simultáneamente,
   puede utilizar una de ellas sólo.</p>
<h4>Campos de Facebook</h4>
<ul class="marked-list">
    <li>ID de tu aplicación</li>
    <li>Clave secreta de tu Aplicación</li>
</ul>
<h4>Campos de Google</h4>
<ul class="marked-list">
    <li>ID de tu Aplicación</li>
    <li>Clave secreta de tu aplicación</li>
    <li>Redireccionar ruta después de iniciar sesión <strong>(your shop
            URL+index.php?fc=module&module=tmsociallogin&controller=googlelogin)</strong></li>
</ul>
<h4>Campos de VK</h4>
<ul class="marked-list">
    <li>ID de tu aplicación</li>
    <li>Clave secreta de tu aplicación</li>
    <li>Redirigir ruta después de iniciar sesión <strong>(your shop
            URL+index.php?fc=module&module=tmsociallogin&controller=vklogin)</strong></li>
</ul>
<p class="alert alert-info">Información más detallada puede obtener siguiendo los enlaces: <a href="https://developers.facebook.com/docs/apps/register" target="_blank">Facebook App</a>, <a href="https://support.google.com/cloud/answer/6158849?hl=en&ref_topic=6262490" target="_blank">Google App</a> y <a href="https://vk.com/dev/web_how_to_start">VK App</a>.</p>
<p class="alert alert-warning">
    La ruta de redireccionamiento debe ser la misma que se ha indicado durante la creación de Google App o VK App.
</p>
<figure class="img-polaroid">
    <img src="img/tmsociallogin120-1.png" alt=""/>
</figure>