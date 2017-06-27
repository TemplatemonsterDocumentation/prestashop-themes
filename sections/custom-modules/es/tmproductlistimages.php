<h3>TM Product List Images</h3>
<p>El módulo muestra una galería de todas las imágenes de producto disponibles en las páginas de la lista de
    productos.</p>
<h5>Instalación y Eliminación</h5>
<p>El módulo se puede instalar y eliminar como cualquier otro módulo de PrestaShop.</p>
<h5>Configuración del módulo</h5>
<p>El módulo no tiene ninguna configuración adicional.</p>
<h5>Acciones adicionales</h5>
<p>Para activar la funcionalidad del módulo debe agregar la siguiente línea del código:</p>
<p><code>{hook h='displayProductListGallery' product=$product}</code></p>
<p>en el archivo <strong>product-list.tpl</strong> En la carpeta raíz del tema despues de
   la etiqueta de cierre <code>&lt;/a&gt;</code> con la clase <code>.product_img_link</code>
  .</p>
