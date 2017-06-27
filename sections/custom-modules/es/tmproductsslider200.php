<h3>TM Products Slider 2.0.0</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponible en:</p>
        <p style="margin-top: 0;" class="small text-secondary">Electronics, Furniture</p>
    </div>
<?php } ?>
<h4>Introducción</h4>
<p>Este módulo sirve para crear galerías, basadas en los datos del producto y mostrarlas en forma de diapositivas en la 
   interfaz del sitio web. El módulo proporciona 4 métodos para mostrar la galería con ajustes y apariencia individuales. Cada método 
   tiene una funcionalidad predefinida. Configuración avanzada también está disponible. El módulo puede mostrar 
   una cantidad ilimitada de productos con información diversa..</p>
<h4>Instalación y extracción del módulo</h4>
<p class="alert alert-warning">
    Si tiene la versión 1.n de este módulo instalado en su motor prestashop, no se recomienda actualizarla con la actual. Primero debe quitar la versión anterior del módulo para que se ejecute sin errores.
</p>
<p>El módulo se instala y se elimina como cualquier módulo predeterminado de Prestashop.</p>
<p class="alert alert-info">
    <span>Después de la eliminación o reinstalación del módulo, todos los ajustes y filtros se descartan.</span>
</p>
<h4>Adición/eliminación/edición de una diapositiva</h4>
<h5>Agregar una diapositiva</h5>
<p>Para agregar un producto a la galería, vaya al producto necesario en la sección <strong>Catálogo
        -> Productos</strong>. A continuación, pulse el botón <strong>'Editar'</strong> (1) junto al producto necesario.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-1.png" alt=""/></figure>
<p>En la ventana mostrada para editar información sobre el producto, vaya a la pestaña <strong>TM Products Slider</strong>
    (2) y marque (3) que desea que el producto se muestre en el slider.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-2.png" alt=""/></figure>
<p>Guarde cambios presionando el botón <strong>'Guardar y quedarse'</strong> (4) o <strong>'Guardar'</strong> (5).</p>
<h5>Remoción de diapositivas</h5>
<p>Hay dos maneras de eliminar una diapositiva.</p>
<ul class="index-list">
    <li>
        <p>Para excluir un producto de la galería, navegue hasta la sección de producto <strong>Catálogo -> Productos</strong>
           . A continuación, pulse el botón <strong>'Editar'</strong> (1) junto al producto necesario.</p>
        <figure class="img-polaroid"><img src="img/tmproductsslider2-1.png" alt=""/></figure>
        <p>En la ventana mostrada para editar información sobre el producto, vaya a la pestaña <strong>TM Products
                Slider</strong> (2) y quite la marca de verificación (3), lo que significa que no desea que el producto se
             muestre en el slider:</p>
        <figure class="img-polaroid"><img src="img/tmproductsslider2-3.png" alt=""/></figure>
        <p>Guarde cambios presionando el botón <strong>'Guardar y quedarse'</strong> (4) o <strong>'Guardar'</strong> (5).
        </p>
    </li>
    <li>
        <p>La segunda forma es navegar hasta la página de configuración del módulo, encontrar el producto <strong>Lista de
               diapositivas</strong> y pulse el botón <strong>Eliminar</strong> (1) junto a él.</p>
        <figure class="img-polaroid"><img src="img/tmproductsslider2-4.png" alt=""/></figure>
        <p>A continuación, confirme la eliminación.</p>
    </li>
</ul>
<h5>SOrden de visualización de diapositivas</h5>
<p>De forma predeterminada, las diapositivas se muestran en el orden en que se agregaron. Para cambiar el orden de visualización, vaya a la página de configuración del 
   módulo y arrastre la diapositiva al lugar necesario en la tabla <strong>Lista de diapositivas</strong>.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-5.png" alt=""/></figure>
<h5>Desactivación de diapositivas</h5>
<p>Además, puede deshabilitar temporalmente una diapositiva (para el período de tiempo que un producto no está disponible o por cualquier
   otra razón) sin quitarlo por completo. Para ello, vaya a la página de configuración del módulo y haga clic en una marca junto al producto necesario (si está activo ahora) o haga clic en
   cruces (si está inactivo) en la tabla: <strong>Lista de diapositivas</strong>
</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-6.png" alt=""/></figure>
<h4>Tipos de galería y configuración recomendada</h4>
<p>Hay cuatro tipos de visualización de galería (estándar, lista, cuadrícula, ancho completo). Cada uno de ellos se puede configurar de forma independiente y se puede
   cambiar entre ellos si es necesario.</p>
<p>De forma predeterminada, la galería utiliza los siguientes tipos de imagen del producto: large_default - para la imagen principal; Medium_default - 
   para las miniaturas.</p>
<h5>Standard</h5>
<p>Configuraciones recomendadas:</p>
<ul class="marked-list">
    <li>tamaño de la imagen (px) - 435*435</li>
    <li>Ancho de la Galería - 1170px</li>
    <li>Altura de la Galería - 580px</li>
    <li>Configuración Extendida - off</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-7.png" alt=""/></figure>
<h5>List</h5>
<p>Configuraciones recomendadas:</p>
<ul class="marked-list">
    <li>tamaño de la imagen (px) - 435*520</li>
    <li>Ancho de la Galería - 1170px</li>
    <li>Altura de la Galería - 520px</li>
    <li>Configuración Extendida - off</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-8.png" alt=""/></figure>
<h5>Grid</h5>
<p>Configuraciones recomendadas:</p>
<ul class="marked-list">
    <li>tamaño de la imagen (px) - 585*750</li>
    <li>Ancho de la Galería - 1170px</li>
    <li>Altura de la Galería - 750px</li>
    <li>Configuración Extendida - off</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-9.png" alt=""/></figure>
<h5>Ancho total</h5>
<p>Configuraciones recomendadas:</p>
<ul class="marked-list">
    <li>tamaño de la imagen (px) - 435*435</li>
    <li>Ancho de la Galería - 1920px</li>
    <li>Altura de la Galeríaht - 450px</li>
    <li>Configuración Extendida - off</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-10.png" alt=""/></figure>
<h4>Ajustes avanzados</h4>
<p>Para acceder a la configuración ampliada, <strong>Configuración
     Extendida</strong> del slider ponga en Si posición.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-11.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Tipo de Galería</strong> - tipo de galería activa</li>
    <li><strong>Ancho de la Galería</strong> - ancho de la galería activa</li>
    <li><strong>Altura de la Galería</strong> - altura activa de la galería</li>
    <li><strong>Extended Settings</strong> - ajustes avanzados; Si la opción se mueve a la posición "No", se guardarán 
	 todos los ajustes avanzados y podrá restaurarlos en cualquier momento. Al mismo tiempo, en el frontend se mostrará como predeterminado.
    </li>
    <li><strong>Duración del Slider</strong> - la velocidad de cambio de diapositivas</li>
    <li><strong>Usar navegación</strong> - la visualización de los botones Prev/Next para la conmutación de diapositivas</li>
    <li><strong>Utilizar miniaturas</strong> - Utilizando miniaturas con información adicional sobre diapositivas como elemento para
         cambiar el deslizado actual
    </li>
    <li><strong>Usar paginación</strong> - utilizando la paginación como elemento para conmutar la diapositiva actual</li>
    <li><strong>Use Image Gallery</strong> - utilizando imágenes de producto adicionales dentro de las diapositivas</li>
    <li><strong>Allow autoplay</strong> - permitir la conmutación automática</li>
    <li><strong>Slider Interval</strong> - el tiempo, después de lo cual la diapositiva cambiará a otra (disponible sólo
         si 'Permitir reproducción automática' está activo)
    </li>
    <li><strong>Permitir Bucle</strong> - permite repetir las diapositivas desde el principio después de mostrar todas las diapositivas</li>
</ul>
<p class="alert alert-info">
    <span>Después de cambiar la galería, se guarda toda la configuración de la galería utilizada anteriormente.</span>
</p>
<p class="alert alert-info">
    <span>Después de desactivar´/activar la configuración avanzada, los ajustes se guardan y puede volver a ellos en cualquier momento.</span>
</p>
<h4>Preguntas Más Frecuentes</h4>

<div class="responsive-tabs" data-type="accordion">
    <ul class="resp-tabs-list">
        <li>¿Por qué la galería no se muestra en la interfaz?</li>
        <li>Cambie la configuración avanzada de la galería, pero no veo cambios en el frontend. ¿Qué se puede hacer?</li>
    </ul>
    <div class="resp-tabs-container">
        <div>Asegúrese de que la galería tenga diapositivas y al menos una de ellas esté activa.</div>
        <div>Asegúrese de cambiar la configuración de la galería activa.</div>
    </div>
</div>