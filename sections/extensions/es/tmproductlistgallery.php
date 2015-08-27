<h3>TM Galer&iacute;a de la Lista de Productos</h3>

<p>El m&oacute;dulo muestra una galer&iacute;a de todas las im&aacute;genes de los
    productos disponibles en las p&aacute;ginas de la lista de productos.</p>
<h5>Instalaci&oacute;n y Eliminaci&oacute;n</h5>

<p>El m&oacute;dulo puede ser instalado y eliminado como cualquier otro m&oacute;dulo de
    PrestaShop.</p>
<h5>Configuraci&oacute;n del M&oacute;dulo</h5>

<p>El m&oacute;dulo no tiene ninguna configuraci&oacute;n adicional.</p>
<h5>Acciones Adicional</h5>

<p>Para habilitar la funcionalidad del m&oacute;dulo debe a&ntilde;adir la siguiente l&iacute;nea
    del c&oacute;digo:</p>

<p><code>{hook h='displayProductListGallery' product=$product}</code></p>

<p>a el archivo <strong>product-list.tpl</strong> que se encuentra en la carpeta ra&iacute;z
    del tema despu&eacute;s de cerrar la etiqueta <code>&lt;/a&gt;</code> con la clase
    <code>.product_img_link</code>.</p>
