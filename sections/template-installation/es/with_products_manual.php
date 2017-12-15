<h3>Instalación manual de plantilla con Datos de muestra</h3>
<p class="alert alert-info custom">Si no quieres pasar el tiempo instalando la plantilla, no dudes en <span
            class="label label-warning opener" onclick="showChat()">solicitar</span> el servicio de instalación
    utilizando nuestro chat en vivo.</p>
<p>Para que su tienda PrestaShop aparezca igual que en la página demo en vivo de plantilla, debe instalar <strong>sample
        data</strong>. Contendrá todos los productos de demostración, categorías, módulos y configuraciones de tienda.
</p>
<p class="alert alert-danger">Por favor, no utilice los datos de muestra para su sitio web en ejecución! Esto
    reemplazará todos los productos de su tienda y los ajustes de la tienda.</p>
<p class="alert alert-warning">Asegúrese de que su versión del motor de PrestaShop coincida con la versión especificada
    en la pestaña "Detalles técnicos", mencionada como "PrestaShop Engine: 1.X.X.X". <br/>
    Además, asegúrese de que su prefijo de tablas de base de datos sea <strong>ps_</strong>. Instale los datos de
    ejemplo sólo si su motor de PrestaShop coincide con la versión especificada. </p>
<h4>Cargar archivos de plantilla</h4>
<p>Para cargar la plantilla a su servidor:</p>
<ol class="index-list">
    <li>Abra el paquete de plantilla.</li>
    <li>Luego vaya a la carpeta <strong>/theme/manual_install/</strong>.</li>
    <li>Suba carpetas <strong>/img/</strong>, <strong>/modules/</strong> y <strong>/themes/</strong> al directorio raíz
        de PrestaShop.
    </li>
</ol>
<p class="alert alert-info">You can check the detailed video tutorial on <a target="_blank"
                                                                            href="/help/how-upload-files-server-2.html">how
        to upload files to server using FTP manager</a> and <a
            href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html" target="_blank">how to
        upload files to a server using cPanel (WebHost Manager, WHM)</a>.</p>
<h4>Instalación de Datos de Muestra</h4>
<p>Los datos de ejemplo se proporcionan como un archivo .SQL. Se encuentra en esta ruta del paquete de plantilla
    <strong>theme/manual_install/</strong> y se llama <strong>dump.sql</strong>.</p>
<p>El archivo dump.sql se puede instalar utilizando la herramienta phpMyAdmin o alguna otra herramienta de gestión de
    Bases de Datos en el panel de control de Alojamiento. Este tutorial detallado sobre <a target="_blank"
                                                                                           href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html">cómo
        instalar archivos SQL</a> puede ayudarle.</p>
<p class="alert alert-warning">Antes de continuar, haga una copia de seguridad de su Base de Datos. Puede consultar el
    tutorial de vídeo detallado <a target="_blank" href="/help/phpmyadmin-how-to-backup-a-database.html">Cómo hacer una
        copia de seguridad de una base de datos</a>.</p>
<p class="alert alert-danger">Asegúrese de que la versión del motor de PrestaShop coincida con los requisitos de la
    plantilla. De lo contrario, la Base de Datos se dañará.</p>
<p>Cuando haya terminado de instalar el archivo dump.sql, tendrá que activar la plantilla.</p>
<p>Desde el Panel de Administración de PrestaShop, vaya a <strong>Preferencias > Temas</strong>, elige tu plantilla en
    la sección <strong>Temas</strong> y haga click en el botón <strong>Guardar</strong>.</p>