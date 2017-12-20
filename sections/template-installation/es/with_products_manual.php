<h3>Instalaci&oacute;n manual de la plantilla con los datos de muestra</h3>
<p class="alert alert-info custom">Si no quieres pasar el tiempo instalando la plantilla, no dudes en <span
            class="label label-warning opener" onclick="showChat()">solicitar</span> el servicio de instalación
    utilizando nuestro chat en vivo.</p>

<p>Despu&eacute;s de instalar los <strong>datos de demostraci&oacute;n</strong>, tendr&aacute;s
    tu tienda de PrestaShop justo igual que en la plantilla de demostraci&oacute;n en l&iacute;nea.
    Contendr&aacute; todos los productos de demostraci&oacute;n, categor&iacute;as, m&oacute;dulos
    y configuraci&oacute;n de la tienda.</p>

<p class="alert alert-danger">Por favor, no use los de datos de muestra para su sitio web en funcionamiento! Esto
    reemplazar&aacute;
    todos sus productos y ajustes de la tienda.</p>

<p class="alert alert-warning">Por favor, asegúrese que la versión del motor de PrestaShop coincide con la versión
    especificada en la pestaña Technical Details como PrestaShop Engine: 1.X.X.X
    También, asegúrese que el prefijo de la base de datos es <strong>ps _</strong>. Sólo si el motor de PrestaShop
    coincide con la versión especificada, instalar los datos de ejemplo.
</p>

<h4>Cargar los archivos de la plantilla</h4>

<p>Para cargar la plantilla a su servidor:</p>

<ol class="index-list">
    <li>Abra el paquete de la plantilla.</li>
    <li>A continuaci&oacute;n, vaya a la carpeta <strong>/theme/manual_install/</strong>.
    </li>
    <li>Cargue las carpetas <strong>/img/</strong>, <strong>/modules/</strong> y
        <strong>/themes/</strong> al directorio ra&iacute;z de PrestaShop.
    </li>
</ol>
<p class="alert alert-info">Puede revisar el video tutorial detallado sobre <a target="_blank"
                                                                               href="/help/how-upload-files-server-2.html">c&oacute;mo
        subir archivos al servidor mediante el gestor de FTP</a> and <a
            href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html"
            target="_blank">c&oacute;mo subir archivos a un servidor utilizando cPanel
        (WebHost Manager, WHM)</a>.</p>

<h4>Instalar los datos de ejemplo</h4>

<p>Los datos de muestra se proporcionan como un archivo .SQL. Se encuentra en la carpeta
    <strong>theme/manual_install/</strong> del paquete de la plantilla y se llama
    <strong>dump.sql</strong>.</p>

<p>El archivo dump.sql puede ser instalado utilizando la herramienta phpMyAdmin o alguna
    otra herramienta de gesti&oacute;n de base de datos en su panel de control de
    hosting. Este tutorial detallado sobre <a target="_blank"
                                              href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html">c&oacute;mo
        instalar archivos de SQL</a> puede ayudarle.</p>

<p class="alert alert-warning">Antes de continuar, por favor haga una copia de seguridad de su base de datos. Puede
    revisar el video tutorial detallado sobre <a
            target="_blank" href="/help/phpmyadmin-how-to-backup-a-database.html">c&oacute;mo
        hacer copia de una base de datos</a>.</p>


<p class="alert alert-danger">Por favor, aseg&uacute;rese de que su versi&oacute;n del motor de PrestaShop coincide
    con los requisitos de la plantilla. De lo contrario, la base de datos se da&ntilde;ar&aacute;.</p>

<p>Cuando haya terminado con la instalaci&oacute;n del archivo dump.sql, tendr&aacute;
    que activar la plantilla.</p>

<p>Desde el panel de administraci&oacute;n de PrestaShop, vaya a <strong>Preferencias >
        Temas</strong>, seleccione la plantilla en la secci&oacute;n <strong>Temas</strong>
    y haga clic en <strong>Guardar</strong>.</p>

<h4>A&ntilde;adiendo idiomas a la tienda. </h4>

<p>Despu&eacute;s de que la plantilla en varios idiomas haya sido instalada, usted ser&aacute;
    capaz de a&ntilde;adir todos los idiomas disponibles en ella (ingl&eacute;s, franc&eacute;s,
    espa&ntilde;ol, alem&aacute;n, ruso). Puede hacerlo de esta manera: </p>

<p>Vaya a <strong>'Localizaci&oacute;n > Traducciones'</strong> en el panel de
    administraci&oacute;n, encuentre <strong>'A&Ntilde;ADIR/ACTUALIZAR IDIOMA'</strong>
    y agregue idiomas seleccion&aacute;ndolos en el men&uacute; desplegable
    <small>(1)</small>
    y haga clic en el bot&oacute;n <strong>'A&ntilde;adir o actualizar un
        idioma'</strong>
    <small>(2)</small>
    .
</p>
<figure class="img-polaroid">
    <img alt="" src="img/01-language-update.png"/>
</figure>

<p>Si no quiere tener algunos idiomas, puede eliminarlos
    <small>(2)</small>
    o desactivarlos
    <small>(1)</small>
    en el men&uacute; <strong>'Localizaci&oacute;n > Idiomas'</strong>.
</p>
<figure class="img-polaroid">
    <img alt="" src="img/02-language-update.png"/>
</figure>