<h3>Instalación del motor PrestaShop</h3>
<p class="alert alert-warning">Asegúrese de que su versión del motor de PrestaShop coincida con la versión especificada en la pestaña "Detalles técnicos", mencionada como "Motor de PrestaShop: 1.X.X.X".<br/>
    Además, asegúrese de que su prefijo de tablas de base de datos sea <strong>ps_</strong>. Instale los datos de ejemplo sólo si su motor de PrestaShop coincide con la versión especificada.</p>
<p>Cuando haya terminado con la carga de archivos, puede iniciar la instalación del motor PrestaShop. Abra su navegador web y escriba el "nombre de dominio/ruta de acceso a su directorio de PrestaShop" en la barra de direcciones, luego vuelva a cargar la página actual. Debería ver la pantalla de bienvenida. Siga las instrucciones a continuación para instalar PrestaShop.</p>
<h4>Asistente de instalación (Elija su idioma)</h4>
<h6>Seleccione el idioma de instalación.</h6>
<p class="alert alert-warning">Tenga en cuenta que la opción de idioma de instalación no afectará el idioma de su tienda. Por defecto, PrestaShop se ofrece en inglés. Puede instalar paquetes de localización adicionales para cambiar el idioma de la tienda.</p>
<p>Cuando haya terminado, haga clic en el botón <strong>'Siguiente'</strong> .</p>
<figure class="img-polaroid">
    <img src="img/engine-install-01.png" alt="">
</figure>
<h4>Asistente de instalación (Acuerdos de licencia)</h4>
<ol class="index-list">
    <li>Compruebe el contrato de licencia.</li>
    <li>Cuando haya terminado, haga clic en el botón <strong>'Siguiente'</strong>.</li>
</ol>
<figure class="img-polaroid">
    <img src="img/engine-install-02.png" alt="">
</figure>
<h4>Compatibilidad del sistema</h4>
<p>Compruebe la configuración de PHP y los permisos de directorio. En caso de cualquier error, póngase en contacto con su proveedor de alojamiento para obtener más ayuda.</p>
<p>Si todo es correcto, haga clic en el <strong>'Next'</strong> button.</p>
<figure class="img-polaroid">
    <img src="img/engine-install-03.png" alt="">
</figure>
<h4>Configuración de tienda</h4>
<p>Este paso requiere que ingrese los ajustes de tienda como nombre de la tienda, actividad, país, zona horaria, etc..</p>
<p>Todos estos ajustes se pueden cambiar más adelante en el panel de administración de PrestaShop.</p>
<figure class="img-polaroid">
    <img src="img/engine-install-04.png" alt="">
</figure>
<h4>Configuración del sistema</h4>
<p>Si ya tiene una base de datos MySQL, ingrese los detalles de la base de datos en los campos correspondientes a continuación.</p>
<p>De lo contrario, puede obtener los detalles de la base de datos desde su panel de control de alojamiento o poniéndose en contacto con su proveedor de alojamiento.</p>
<p>Cuando haya terminado, haga clic en el botón <strong>'Siguiente'</strong> .</p>
<figure class="img-polaroid">
    <img src="img/engine-install-05.png" alt="">
</figure>
<h4>La instalación está completa</h4>
<p>Este es el paso final de la instalación.</p>
<p class="alert alert-danger">Por razones de seguridad debe eliminar el directorio <strong>/install/</strong> de su servidor de alojamiento.
</p>
<figure class="img-polaroid">
    <img src="img/engine-install-06.png" alt="">
</figure>
<p class="alert alert-info">A partir de la versión 1.5.4, PrestaShop se encarga de cambiar el nombre de la carpeta de administración: se convierte en la palabra "admin" seguida de 4 dígitos aleatorios, es decir, "admin8814". El cambio de nombre ocurre tan pronto como se accede por primera vez a la carpeta "admin": PrestaShop la cambia de nombre y luego accede correctamente a la carpeta renombrada.<br/><br/>
    Inicie sesión en la back office de PrestaShop y vaya a la nueva carpeta "admin" y una experiencia llenar su catálogo con sus datos.
</p>
<h6>Si tiene dificultades, consulte el manual de instalación oficial <a target="_blank" href="http://doc.prestashop.com/display/PS16/Getting+Started"> de PrestaShop</a>.</h6>
