<h3>TM Product List Gallery 2.0.0</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponible en:</p>
        <p style="margin-top: 0;" class="small text-secondary">Fashion, Electronics, Spare Parts, Furniture, One Product</p>
    </div>
<?php } ?>
<p>Este módulo muestra todas las imágenes de producto disponibles en forma de una galería en las páginas de la lista de productos. Dependiendo de la configuración que elija, el módulo puede mostrar imágenes en forma de rollover o presentación de diapositivas.</p>
<h5>Instalación y eliminación de módulos </h5>
<p>Este módulo se puede instalar y eliminar como cualquier otro módulo de PrestaShop.</p>
<h5>Configuración del módulo</h5>
<p>Una vez instalado el módulo, abra el archivo product-list.tpl en su carpeta raíz de plantilla, busque el código siguiente:<br/></p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-1.png" alt="" /></figure>
<p>y reemplácelo por:</p>
<pre class="codebox">
    {capture name='displayProductListGallery'}{hook h='displayProductListGallery' product=$product}{/capture}
    {if $smarty.capture.displayProductListGallery}
    &nbsp;&nbsp;{hook h='displayProductListGallery' product=$product}
    {else}
    &nbsp;&nbsp;&lt;a class="product_img_link" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url"&gt;
    &nbsp;&nbsp;&lt;img class="replace-2x img-responsive" src="{$link-&gt;getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} itemprop="image" /&gt;
    &nbsp;&nbsp;&lt;/a&gt;
    {/if}
</pre>
<p>Después de instalar y conectar el módulo, puede configurarlo en la página de configuración del módulo.</p>
<h5>El módulo tiene los siguientes ajustes principales:</h5>
<ul class="marked-list">
    <li><strong>Tipo</strong> - seleccione el tipo de visualización: rollover o presentación de diapositivas.</li>
</ul>
<p>Si usted elige<strong>dar la vuelta</strong>, puede elegir el efecto de animación:</p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-2.png" alt="" /></figure>
<strong>Tipo de animación:</strong>
<ul class="marked-list">
    <li><strong>Opacidad de la diapositiva</strong> - cambios de opacidad;</li>
    <li><strong>Diapositiva horizontal</strong> - horizontal;</li>
    <li><strong>Diapositiva vertical</strong> - vertical.</li>
</ul>
<p>Si tu eliges <strong>slideshow</strong>, encontrará las siguientes configuraciones disponibles</p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-3.png" alt="" /></figure>
<ul class="marked-list">
    <li><strong>Mostrar elementos</strong> - el número de elementos mostrados;</li>
    <li><strong>Infinito</strong> - ciclo sin fin de diapositivas;</li>
    <li><strong>Paginador</strong> - visualización de paginación en presentación de diapositivas;</li>
    <li><strong>Controls</strong> - muestra los controles en la presentación de diapositivas;</li>
    <li><strong>Usar miniaturas</strong> - slideshow thumbnails display;</li>
    <li><strong>Paginador</strong> - pager mostrar en miniatura carrusel;</li>
    <li><strong>Controls</strong> - controles de visualización en miniaturas carrusel;</li>
    <li><strong>Posición</strong> - modo carrusel vertical u horizontal;</li>
    <li><strong>Modo central</strong> - centrando la vista de carrusel de miniaturas;</li>
    <li><strong>Elementos visibles</strong> - el número de elementos en una fila;</li>
    <li><strong>Elementos para desplazarse</strong> - el número de elementos desplazados en miniaturas carrusel.</li>
</ul>