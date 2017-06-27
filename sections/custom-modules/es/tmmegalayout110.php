<h3>TM Mega Layout 1.1.0</h3>

<p>Este módulo está diseñado para permitir la creación de diseños personalizados (presets) para ganchos y mostrarlos en el sitio en lugar de
     las posiciones predeterminadas. Esta ventaja del módulo le permite crear diferentes marcas de gancho y modificarlas hasta
     tus necesidades.</p>

<h4>Características funcionales y características del módulo</h4>
<ul class="index-list">
    <li>
        <p>Requisitos:</p>
        <ul class="marked-list">
            <li><p>PrestaShop 1.6+</p></li>
            <li><p>PHP 5.4+</p></li>
        </ul>
    </li>
    <li>
        <p>Caracteristicas:</p>
        <ul class="marked-list">
            <li><p>El módulo incluye 5 ganchos: 'Header', 'Top Column', 'Home', 'Footer' y 'Product Footer'.</p></li>
            <li><p>En caso de que el módulo no esté presente en el gancho, no podrá añadirse al preset.</p></li>
            <li><p>El módulo se puede visualizar en el preset solo una vez, igual que en un gancho.</p></li>
            <li><p>La posición del módulo en la sección 'Módulos y servicios -> Posiciones' no afecta al valor preestablecido.</p></li>
            <li><p>El módulo no le permite configurar diferentes módulos. No se pueden configurar diferentes módulos
                     configuración para varios presets.</p></li>
        </ul>
    </li>
</ul>
<h6>Módulo le ofrece una opción para cambiar la posición del módulo y configurar la cuadrícula para 3 ganchos:
    displayTopColumn, displayHome, displayFooter. Cambiar la posición de los módulos en la sección 'Módulos y servicios -> Posiciones' 
	no afectará la posición de los módulos en el preset. En caso
	de que el módulo no se haya añadido al gancho, no se puede añadir al preset ni.</h6>

<h4>Módulo de integración al tema</h4>
<p class="alert alert-warning"><span>Sin este paso sus presets no se mostrarán en la interfaz.</span></p>
<ul class="index-list">
    <li><p>Columna superior. Para agregar presets personalizados al gancho topColumn, debe realizar los siguientes pasos:</p>
        <ul class="marked-list">
            <li>Abra el archivo <strong>/themes/your_theme/header.tpl</strong> para editar.</li>
            <li>Busque el código siguiente:
                <pre class="codebox">{hook h="displayTopColumn"}</pre>
            </li>
            <li>Y reemplácelo por:
                <pre class="codebox">
{assign var='displayMegaTopColumn' value={hook h='tmMegaLayoutTopColumn'}}
{if $displayMegaTopColumn}
    {hook h='tmMegaLayoutTopColumn'}
{else}
    {capture name='displayTopColumn'}{hook h='displayTopColumn'}{/capture}
    {if $smarty.capture.displayTopColumn}
        &lt;div id="slider_row" class="row"&gt;
            &lt;div id="top_column" class="center_column col-xs-12 col-sm-12">{$smarty.capture.displayTopColumn}&lt;/div&gt;
        &lt;/div&gt;
    {/if}
{/if}</pre>

            </li>
        </ul>
    </li>
    <li><p>Inicio. Para agregar preset personalizado al gancho de inicio, debe realizar los siguientes pasos:</p>
        <ul class="marked-list">
            <li>Abra el archivo <strong>/themes/your_theme/index.tpl</strong> para editar.</li>
            <li>Busque el código siguiente:
                <pre class="codebox">
{if isset($HOOK_HOME_TAB_CONTENT) && $HOOK_HOME_TAB_CONTENT|trim}
  {if isset($HOOK_HOME_TAB) && $HOOK_HOME_TAB|trim}
    &lt;ul id="home-page-tabs" class="nav nav-tabs clearfix"&gt;
      {$HOOK_HOME_TAB}
    &lt;/ul&gt;
  {/if}
  &lt;div class="tab-content"&gt;{$HOOK_HOME_TAB_CONTENT}&lt;/div&gt;
{/if}
{if isset($HOOK_HOME) && $HOOK_HOME|trim}
  &lt;div class="clearfix"&gt;{$HOOK_HOME}&lt;/div&gt;
{/if}</pre>
            </li>
            <li>Y reemplácelo por:
                <pre class="codebox">
{assign var='displayMegaHome' value={hook h='tmMegaLayoutHome'}}
{if $displayMegaHome}
  {hook h='tmMegaLayoutHome'}
{else}
  {if isset($HOOK_HOME_TAB_CONTENT) && $HOOK_HOME_TAB_CONTENT|trim}
    {if isset($HOOK_HOME_TAB) && $HOOK_HOME_TAB|trim}
      &lt;ul id="home-page-tabs" class="nav nav-tabs clearfix"&gt;
        {$HOOK_HOME_TAB}
      &lt;/ul&gt;
    {/if}
    &lt;div class="tab-content"&gt;{$HOOK_HOME_TAB_CONTENT}&lt;/div&gt;
  {/if}
  {if isset($HOOK_HOME) && $HOOK_HOME|trim}
    &lt;div class="clearfix"&gt;{$HOOK_HOME}&lt;/div&gt;
  {/if}
{/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Pie de página. Para agregar presets personalizados al gancho de pie de página, debe realizar los siguientes pasos:</p>
        <ul class="marked-list">
            <li>Abra el archivo <strong>/themes/your_theme/footer.tpl</strong> para editar.</li>
            <li>Busque el código siguiente:
                <pre class="codebox">
{if isset($HOOK_FOOTER)}
    &lt;div class="footer-container"&gt;
        &lt;footer id="footer"  class="container"&gt;
            &lt;div class="row"&gt;
                {$HOOK_FOOTER}
            &lt;/div&gt;
        &lt;/footer&gt;
    &lt;/div&gt;
{/if}</pre>
            </li>
            <li>Y reemplácelo por:
                <pre class="codebox">
{assign var='displayMegaFooter' value={hook h='tmMegaLayoutFooter'}}
{if isset($HOOK_FOOTER) || $displayMegaFooter}
    &lt;div class="footer-container"&gt;
    {if $displayMegaFooter}
         &lt;div id="footer"&gt;
              {$displayMegaFooter}
         &lt;/div&gt;
    {else}
        &lt;div id="footer" class="container"&gt;
            &lt;div class="row"&gt;{$HOOK_FOOTER}&lt;/div&gt;
        &lt;/div&gt;
    {/if}
    &lt;/div&gt;
{/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Encabezamiento. Para agregar presets personalizados al gancho de encabezado, debe realizar los siguientes pasos:</p>
        <ul class="marked-list">
            <li>Abra el archivo <strong>/themes/your_theme/header.tpl</strong> para editar.</li>
            <li>Busque el código siguiente:
                <pre class="codebox">
{capture name='displayNav'}{hook h='displayNav'}{/capture}
{if $smarty.capture.displayNav}
&lt;div class="nav"&gt;
  &lt;div class="container"&gt;
    &lt;div class="row"&gt;
      &lt;nav>{$smarty.capture.displayNav}&lt;/nav&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
{/if}
&lt;div&gt;
  &lt;div class="container"&gt;
   &lt;div class="row"&gt;
    &lt;div id="header_logo"&gt;
      &lt;a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}"&gt;
        &lt;img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/&gt;
      &lt;/a&gt;
    &lt;/div&gt;
    {if isset($HOOK_TOP)}{$HOOK_TOP}{/if}
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</pre>
            </li>
            <li>Y reemplácelo por:
                <pre class="codebox">
{assign var='displayMegaHeader' value={hook h='tmMegaLayoutHeader'}}
{if isset($HOOK_TOP) || $displayMegaHeader}
  {if $displayMegaHeader}
    {$displayMegaHeader}
  {else}
    {capture name='displayNav'}{hook h='displayNav'}{/capture}
    {if $smarty.capture.displayNav}
    &lt;div class="nav"&gt;
      &lt;div class="container"&gt;
        &lt;div class="row"&gt;
          &lt;nav>{$smarty.capture.displayNav}&lt;/nav&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    {/if}
    &lt;div&gt;
      &lt;div class="container"&gt;
       &lt;div class="row"&gt;
        &lt;div id="header_logo"&gt;
          &lt;a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}"&gt;
            &lt;img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/&gt;
          &lt;/a&gt;
        &lt;/div&gt;
        {$HOOK_TOP}
       &lt;/div&gt;
     &lt;/div&gt;
    &lt;/div&gt;
  {/if}
{/if}</pre>
            </li>
        </ul>
    </li>

    <li><p>Pie de producto. Para agregar presets personalizados al gancho del pie de producto, debe realizar los siguientes 
	       pasos:</p>
        <ul class="marked-list">
            <li>Abra el archivo <strong>/themes/your_theme/product.tpl</strong> para editar.</li>
            <li>Busque el código siguiente:
                <pre class="codebox">
{if isset($HOOK_PRODUCT_FOOTER) && $HOOK_PRODUCT_FOOTER}{$HOOK_PRODUCT_FOOTER}{/if}                                   </pre>
            </li>
            <li>Y reemplácelo por:
                <pre class="codebox">
{assign var='displayMegaProductFooter' value={hook h='tmMegaLayoutProductFooter'}}
  {if isset($HOOK_PRODUCT_FOOTER) || $displayMegaFooter}
    {if $displayMegaProductFooter}
      {$displayMegaProductFooter product=$product category=$category}
    {else}
      {$HOOK_PRODUCT_FOOTER}
    {/if}
  {/if}</pre>
            </li>
        </ul>
    </li>
</ul>

<h4>Ganchos</h4>
<p>El módulo dispone de 5 ganchos disponibles de forma predeterminada:</p>
<ul class="index-list">
    <li>'Header' es un gancho que combina 2 ganchos estándar: displayNav y displayTop. Este gancho corresponde al
     	encabezado del sitio web.
    </li>
    <li>'Top Column' corresponde al gancho original de displayTopColumn. Este gancho viene justo después de que el gancho de cabecera.
    </li>
    <li>'Home' corresponde al gancho displayHome original. Este gancho está presente sólo en la página principal.</li>
    <li>'Footer' corresponde al gancho original del displayFooter.</li>
    <li>'Product Footer' Corresponde al gancho original de displayFooterProduct, que se muestra en el pie de la página
       	del producto.
    </li>
</ul>

<h4>Panel Principal de TM Mega Layout</h4>
<h4 class="text-secondary">Disposiciones principales</h4>
<p>El panel principal de configuración del módulo TM Mega Layout que le permite agregar un preset al gancho requerido y configurar
   el preset.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-main-panel.png" alt=""/></figure>

<h5>Cómo añadir el preset</h5>
<ul class="index-list">
    <li>
        <p>Pulse '+ Añadir Preset' (1) en la pestaña necesaria.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>A continuación, rellene el campo 'Introduzca el nombre del diseño' en la ventana emergente escribiendo el nuevo título preestablecido (2) allí y presione
    	  'Guardar' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>El preset se creó correctamente, ya está listado entre los presets disponibles (4). Se ha seleccionado el ajuste preestablecido
    	   recientemente para su edición (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-preset-3.png" alt=""/></figure>
    </li>
</ul>

<h5>Activación predefinida</h5>
<ul class="index-list">
    <li>
        <p>En primer lugar, seleccione el preset necesario de la lista (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>Pulse el conmutador "Usar como predeterminado" (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>El preset se ha activado. Si necesita mostrar este preset solamente en algunas páginas, abra el menú desplegable (3) y 
		   seleccione las páginas que necesita. Para aplicar los cambios, haga clic fuera del área de la lista. Un preset que se muestra en todas
		   las páginas se marcará con una estrella llena en la lista de preajustes, y el que se muestra sólo en algunas
		   páginas se marcará con una estrella parcialmente llena.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-3.png" alt=""/></figure>
    </li>
</ul>

<h5>Eliminación del preset</h5>
<p class="alert alert-warning"><span>No hay ninguna opción para restaurar el preset después de eliminar.</span></p>
<ul class="index-list">
    <li>
        <p>Para quitar el preset, elija el preset requerido entre la lista (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>A continuación, presione un carro (2) cerca del título preestablecido. </p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Se ha eliminado correctamente el preajuste.</p>
    </li>
</ul>

<h5>Cambiar el nombre del preset</h5>
<ul class="index-list">
    <li>
        <p>Para cambiar el nombre del preset, seleccione el preset requerido entre la lista (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-rename-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>A continuación, pulse un icono de lápiz (2) junto al título preestablecido.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-rename-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Especifique el nuevo título preestablecido (3) en una ventana emergente y presione 'Cambiar el nombre del diseño' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-rename-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Se ha cambiado el nombre del preset.</p>
    </li>
</ul>

<h4>Wrapper</h4>
<p>Wrapper no tiene clase por defecto, no es un elemento obligatorio</p>
<h5>Adición del contenedor</h5>
<ul class="index-list">
    <li>
        <p>Para crear un wrapper, pulse '+ Añadir wrapper' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Se añadió el wrapper (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-wrapper-2.png" alt=""></figure>
    </li>
</ul>

<h5>Agregar la clase CSS personalizada al contenedor</h5>
<p>Agregar la clase personalizada le permitirá crear un estilo específico para su contenedor mediante reglas CSS.</p>
<ul class="index-list">
    <li>
        <p>Para agregar la clase de contenedor, presione el botón (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Aparecerá una ventana emergente, rellene el campo 'Enter wrapper classes' (2) y pulse el
    		botón 'Confirmar' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Clase personalizada se agregó correctamente.</p>
    </li>
</ul>

<h5>Eliminación del contenedor</h5>
<p class="alert alert-warning"><span>Al eliminar el elemento preestablecido también se eliminarán todos los elementos secundarios y sus estilos.</span>
</p>
<ul class="index-list">
    <li>
        <p>Para quitar el envoltorio, presione el botón del carrito (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Se eliminó correctamente el wrapper.</p>
    </li>
</ul>

<h5>Estilizar wrapper</h5>
<ul class="index-list">
    <li>
        <p>Para agregar estilos personalizados al contenedor, presione el icono 'lápiz' (1) en el bloque de contenedor.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>En la ventana emergente siguiente rellene todos los campos necesarios (consulte la sección 'Styling' de la documentación) y pulse el botón 'Guardar' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Si todos los campos se rellenan correctamente, los estilos se guardarán.</p>
    </li>
</ul>

<h4>Row</h4>
<p>Row de la cuadrícula Bootstrap. Es un elemento requerido.</p>
<h5>Añadiendo row</h5>
<ul class="index-list">
    <li>
        <p>Para insertar una nueva fila, pulse '+ Añadir fila' (1) en el bloque de contenedor o '+ Añadir fila' (2) en el bloque de preselección principal o
 		'+ Añadir fila' (3) en la lista desplegable de columna lista.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>La fila se agregó correctamente.</p>
    </li>
</ul>

<h5>Adición de una clase CSS personalizada al row</h5>
<p>La adición de clases personalizadas le permite crear estilos de filas personalizados utilizando reglas CSS.</p>
<ul class="index-list">
    <li>
        <p>Para añadir la clase al row, debe presionar el botón de "elipsis" (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Seleccione la opción 'Editar fila' (2) en una lista desplegable.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>Rellene el campo 'Enter row classes' (3) en la ventana emergente y pulse el botón 'Confirmar' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-row-3.png" alt=""></figure>
    </li>
    <li>
        <p>Clase personalizada se agregó correctamente.</p>
    </li>
</ul>

<h5>Eliminación de la fila</h5>
<p class="alert alert-warning">
    <span>La eliminación del elemento preestablecido también provocará la eliminación de sus elementos secundarios y sus estilos.</span></p>
<ul class="index-list">
    <li>
        <p>Para eliminar la fila, abra el menú (el icono de puntos suspensivos) en el bloque de filas.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Elija la opción "Eliminar" (2) en el menú desplegable.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>La fila se eliminó correctamente.</p>
    </li>
</ul>

<h5>Añadir estilos a la fila</h5>
<ul class="index-list">
    <li>
        <p>Para añadir estilos de fila, abra el menú (el icono de puntos suspensivos) (1) en un bloque de filas.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-row-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Presiona 'Styling' (2) en el menú desplegable.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-row-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Verá la ventana emergente, rellene todos los campos necesarios (puede consultar la sección 
		'Styling' de la documentación) y presione el botón 'Guardar' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-row-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Si todos los campos se rellenan correctamente, los estilos se guardarán.</p>
    </li>
</ul>

<h4>Columna</h4>
<p>Se trata de un elemento con ancho de bloque configurable para diferentes dimensiones, basado en la cuadrícula Bootstrap.</p>
<h5>Agregar la columna</h5>
<ul class="index-list">
    <li>
        <p>Para insertar una columna en una "fila" necesaria, abra el menú (el icono de puntos suspensivos) (1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Elija '+ Añadir Col' (2) entre la lista.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Rellene los campos (col-xs *, col-sm *, col-md *, col-lg-bootstrap) en la ventana emergente y pulse
    	   el botón 'Confirmar' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>La columna se agregó con éxito.</p>
    </li>
</ul>

<h5>Eliminación de la columna</h5>
<p class="alert alert-warning">
    <span>La eliminación de elementos predefinidos también hará que sus elementos secundarios y sus estilos eliminen.</span></p>
<ul class="index-list">
    <li>
        <p>Para quitar la columna, abra el menú (el icono de puntos suspensivos) en un bloque de columnas (1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-detele-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Pulse 'Eliminar' (2) en la lista.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-detele-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Se eliminó la columna y todos sus elementos secundarios.</p>
    </li>
</ul>

<h5>Edición de la columna</h5>
<ul class="index-list">
    <li>
        <p>Para editar la columna, abra el menú (el icono de puntos suspensivos) (1) en el bloque de columnas.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Pulse 'Editar columna' (2) en la lista.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Rellena los campos (col-xs *, col-sm *, col-md *, col-lg-bootstrap) en la ventana emergente y presiona
   		'Confirmar'.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>La columna se ha editado correctamente.</p>
    </li>
</ul>

<h5>Añadir estilos a la columna</h5>
<ul class="index-list">
    <li>
        <p>Para añadir estilos de columnas, abra el menú (el icono de puntos suspensivos) (1) en un bloque de columnas.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-col-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Presione 'Estilizar' (2) en la lista de opciones.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-col-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Verá la ventana emergente, rellene todos los campos necesarios allí (puede consultar la sección
		'Estilizar' de la documentación) y pulse el botón 'Guardar' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-col-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Si todos los campos se rellenan correctamente, los estilos se guardarán.</p>
    </li>
</ul>

<h4>Módulo</h4>
<p>Módulo asignado a este gancho.</p>
<h5>Adición del módulo</h5>
<p class="alert alert-warning"><span>Tenga cuidado al agregar módulos al preset, algunos de los módulos son deseables de usar si no cambian el diseño visible, por ejemplo, el módulo 'Data mining for statistics'.</span>
</p>
<ul class="index-list">
    <li>
        <p>Para añadir el módulo al preset en un bloque de columnas, abra el menú (el icono 'puntos suspensivos') (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>Pulse el '+ Añadir Módulo' (2) en la lista de opciones disponibles.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>Si es necesario, puede ingresar la clase personalizada (3) en la ventana emergente y seleccionar el módulo (4), luego presione
             'Confirmar' (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-module-3.png" alt=""></figure>
    </li>
    <li>
        <p>El módulo se agregó correctamente.</p>
    </li>
    <li>
        <p>En esta versión de TM Mega Layout puede agregar el módulo 'Home Page' en Home hook.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout110-add-module-tabs.png" alt=""></figure>
        <p>También se puede personalizar como todos los demás módulos en Mega Layout.</p>
    </li>
</ul>

<h5>Eliminación del módulo</h5>
<p class="alert alert-warning">
    <span>La eliminación del elemento preestablecido también provocará la eliminación de sus elementos secundarios y sus estilos.</span></p>
<ul class="index-list">
    <li>
        <p>Para quitar el módulo, abra el menú (el icono de puntos suspensivos) (1) en el bloque del módulo.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>Pulse 'Eliminar' (2) en la lista de opciones disponibles.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>El módulo se quita.</p>
    </li>
</ul>

<h5>Adición de clase personalizada al módulo</h5>
<p>La adición de clases personalizadas permite crear estilos de módulos utilizando reglas CSS.</p>
<ul class="index-list">
    <li>
        <p>Para especificar una clase personalizada para el módulo, abra el menú en el bloque de módulos (el icono de 'puntos suspensivos')
            (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-module-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Pulse 'Editar configuración' (2) y luego.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-module-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Especifique la clase personalizada (3) en la ventana emergente y pulse el botón 'Confirmar' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-module-add-class-3.png" alt=""></figure>
    </li>
    <li>
        <p>Se agregó una clase personalizada.</p>
    </li>
</ul>

<h5>Logotipo, Derechos de autor</h5>
<p>Los bloques de Logo y de Copyright se editan de la misma manera que los módulos, excepto por el hecho de que el logotipo sólo se puede colocar en la posición
   de Header o Footer y el bloque de Derechos de autor sólo se puede colocar en la posición Footer. </p>

<h4 class="text-secondary">Página del producto</h4>
<h5>Pestaña de Información del producto</h5>
<h6>Mediante esta pestaña puede cambiar los diseños de la página del producto. Aparecerá en el panel de administración después de realizar algunas acciones sencillas descritas a continuación.</h6>
<h5>Creación del diseño</h5>
<h6>Los diseños se crean y se editan manualmente.</h6>
<ul class="index-list">
    <li><p>Crear carpeta 'product_pages' en su carpeta de temas.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout110-product-info-3.png" alt=""></figure>
    </li>
    <li>En la carpeta del tema, busque el archivo 'product.tpl', cópielo en la carpeta creada 'product_pages' y cambie el nombre a 'default.tpl'. Para crear varios diseños - duplique este archivo, cambie su nombre (por ejemplo, 'layout_1.tpl', 'layout_2.tpl') y cambie la estructura según sus necesidades.</li>
    <li>Crear archivo 'config.json' en esta carpeta. Copie el código siguiente en él:
        <pre class="codebox">
{
  "default": {
    "name": "Default",
    "preview": "default.jpg",
    "default": 1
  }
}</pre>
        <ul class="marked-list">
            <li><strong>"default"</strong> - nombre del archivo .tpl que contiene la estructura de la página del producto.</li>
            <li>"name": <strong>"Default"</strong> - título del diseño de la página del producto en la configuración del módulo.
            </li>
            <li>"preview": <strong>"default.jpg"</strong> - vista previa del diseño de la página del producto en la configuración del módulo; La imagen debe ubicarse en la carpeta 'product_pages'.
            </li>
            <li><p>"default": <strong>1</strong> - establecida en '1' si el diseño debe configurarse como predeterminado</p><br>
                <p class="alert small alert-warning">Uno de los diseños debe contener el valor '1' que se debe establecer como valor predeterminado.</p>
            </li>
        </ul>
        <p>Este código debe duplicarse para cada diseño creado y contener los valores correspondientes. Por ejemplo:</p>
        <pre class="codebox">
{
  "default": {
    "name": "Default",
    "preview": "default.jpg",
    "default": 0
  },
  "layout_1": {
    "name": "Layout 1",
    "preview": "layout_1.jpg",
    "default": 0
  },
  "layout_2": {
    "name": "Layout 2",
    "preview": "layout_2.jpg",
    "default": 1
  }
}</pre>
    </li>
    <li>Abra el archivo 'product.tpl' en la carpeta de temas. Elimine todo y pegue el código siguiente:
        <pre class="codebox">
{include file="$tpl_dir./errors.tpl"}
{if $errors|@count == 0}
  {if isset($megalayoutProductInfoPage) && $megalayoutProductInfoPage}
    {assign var='path' value="./product_pages/`$megalayoutProductInfoPage`"}
    {include file=$path}
  {else}
    {include file='./product_pages/default.tpl'}
  {/if}
{/if}</pre>
    </li>
    <li>Para añadir/editar estilos de cualquier diseño de página de producto, vaya a your_theme_folder/css/ y agregue una nueva carpeta 'product_pages'. En esta carpeta, cree un archivo con el nombre de diseño y la extensión .css (por ejemplo, 'default.css', 'layout_1.css', 'layout_2.css'). Estos archivos deben contener estilos del diseño de la página del producto correspondiente.</li>
    <li>Para agregar scripts a cualquier diseño de página de producto, vaya a your_theme_folder/js/ y añada una nueva carpeta 'product_pages'. En esta carpeta, cree un archivo con el nombre de diseño y la extensión .js (por ejemplo, 'default.js', 'layout_1.js', 'layout_2.js'). Estos archivos deben contener scripts del diseño de la página del producto correspondiente.</li>
</ul>
<h5>Cambiar diseños</h5>
<p>Seleccione 'Product Page' en la lista desplegable (1) y haga clic en la pestaña 'Información del producto'(2).</p>
<figure class="img-polaroid"><img src="img/tmmegalayout110-product-info-1.png" alt=""></figure>
<p>En esta pestaña puede cambiar los diseños de la página del producto. La imagen de diseño con el borde gris se establece como predeterminado.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout110-product-info-2.png" alt=""></figure>

<h5>Exportación de Preset</h5>
<p>La herramienta de exportación le permite exportar presets para la importación adicional en diferentes tiendas.</p>
<ul class="index-list">
    <li>
        <p>Vaya a la pestaña 'Herramientas' (1) en el panel de configuraciones principal.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Seleccione 'Exportar' (2) en el formulario.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Verá la lista de los preajustes existentes en los ganchos de sitio.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Para previsualizar el preset, presione el botón 'Layout preview' (3) al lado del preset que usted necesita, para
     		exportar, presione el botón 'Export layout' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-4.png" alt=""></figure>
    </li>
    <li>
        <p>A continuación, podrá descargar este preset como un archivo zip.</p>
    </li>
</ul>

<h5>Importación de Preset</h5>
<p class="alert alert-warning"><span>Herramienta de importación sólo acepta los archivos predefinidos * .zip que se generaron previamente con el mismo módulo Herramienta de exportación.</span>
</p>
<ul class="index-list">
    <li>
        <p>Para importar su preset, debe abrir la pestaña <strong>Herramientas (1)</strong> y elija <strong>'Importar'
                (2)</strong>.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-import-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>A continuación, presione el botón <strong>Agregar archivo (3)</strong> Y seleccione el archivo zip de su preset exportado. En caso
             de que este archivo sea el preset exportado, verá esta vista preliminar preestablecida.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-import-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>Si este preset satisface sus necesidades, presione el botón <strong>'Importar' (4)</strong>. El preset se importará y se agregará 
		     a la lista de presets disponibles.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-import-preset-3.png" alt=""/></figure>
    </li>
</ul>

<h5>Reiniciar</h5>
<p>'Restablecer' vuelve todos los presets al estado inicial (a la manera en que vinieron con la plantilla), y descarta todos los presets creados.</p>
<p class="alert alert-warning"><span>¡Atención! Después de revertir los preajustes al estado predeterminado, todos los presets personalizados se descartarán!</span>
</p>
<ul class="index-list">
    <li>
        <p>Para restablecer los presets, vaya a la pestaña 'Herramientas' (1). En el bloque aparecido, abra la pestaña 'Opciones' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-reset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Pulse el botón 'Reset'.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-reset-2.png" alt=""></figure>
    </li>
    <li>
        <p>¡Eso es! Todos los presets se restablecen al estado inicial.</p>
    </li>
</ul>

<!--optimization-->
<h5>Optimización de estilos y secuencias de comandos</h5>
<p>La optimización de estilos y secuencias agrega exclusiones para los módulos en la sección Encabezado, en función de su uso en preajustes. Esto
     permite acelerar la velocidad de carga de la página. La optimización funciona en modo de prueba.</p>
<p>Activar de la optimización:</p>
<ul class="index-list">
    <li>
        <p>Para habilitar la optimización, abra la pestaña 'Herramientas' (1) y seleccione la pestaña 'Opciones' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-1.png" alt=""></figure>
    </li>
    <li>
        <p>En la ventana que aparece, puede activar la optimización (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-2.png" alt=""></figure>
    </li>
</ul>
<p>Si la optimización está habilitada al editar y habilitar presets, la optimización se descarta, pero verá una ventana 
    que ofrece ejecutar la optimización. No hay necesidad de optimizar los scripts y los estilos cada vez que cambie presets. 
	Es mejor optimizarlos cuando termines de editar.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-3.png" alt=""></figure>

<h5>Estilización</h5>
<ul class="index-list">
    <li>
        <p>Estilos de fondo. Descripción de los campos:</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-styles-1.png" alt=""/></figure>
        <ul class="marked-list">
            <li>background-image (imagen de fondo) - la URL de la imagen o el valor "ninguno". La imagen se escoge de
    			la carpeta ~/images/cms/
            </li>
            <li>background-color (color de fondo) - el valor se puede establecer en cualquier formato de color (rgb, hex, etc.). Usted puede
                 elijir el color con la herramienta colorpicker.
            </li>
            <li>background-repeat (repetición de fondo) - todas las opciones disponibles se enumeran en los botones de radio.
            </li>
            <li>background-position (posición de fondo) - todas las opciones disponibles se muestran en la lista desplegable.
            </li>
            <li>background-size (tamaño de fondo) - todas las opciones disponibles se muestran en la lista desplegable.</li>
            <li>background-origin (región de posicionamiento de imagen de fondo) - Todas las opciones disponibles se muestran en 
			     la lista desplegable.
            </li>
        </ul>
    </li>
    <li><p>Estilos de borde.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-styles-2.png" alt=""/></figure>
        <ul class="marked-list">
            <li>border-top-style, border-right-style, border-left-style, border-bottom-style (border styles) - todas las
			    opciones disponibles se muestran en la lista desplegable.
            </li>
            <li>border-top-width, border-right-width, border-left-width, border-bottom-width (borders width) - debe establecerse 
                en píxeles.
            </li>
            <li>border-top-сolor, border-right-color, border-left-color, border-bottom-color (borders color) - el valor
     			se puede establecer en cualquier formato de color (rgb, hex, etc.). Puede elegir el color con la herramienta colorpicker.
            </li>
            <li>border-top-right-radius, border-top-left-radius, border-bottom-right-radius, border-bottom-left-radius
                (border radius) - debe establecerse en píxeles.
            </li>
        </ul>
    </li>
    <li><p>Otros estilos.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-styles-3.png" alt=""/></figure>
        <ul class="marked-list">
            <li>box-shadow (box shadow) - por ejemplo:0px 0px 0px 0px rgba(0,0,0,0.75).</li>
        </ul>
    </li>
</ul>

<h5>Eliminación de estilos de elementos</h5>
<ul class="index-list">
    <li>
        <p>Para quitar estilos de artículos, abra la sección de estilos de artículos y presione "Borrar estilos" (1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-clear-styles-1.png" alt=""/></figure>
    </li>
</ul>

<h5>Advertencias</h5>
<p>Si aparece el siguiente mensaje en el bloque de elementos del módulo, debe habilitar el módulo mencionado.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-module-warning-1.png" alt=""></figure>
<p>Si aparece el siguiente mensaje en el bloque de elementos del módulo, debe instalar el módulo mencionado.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-module-warning-2.png" alt=""></figure>
<p>En caso de eliminar o desactivat el módulo "TM Mega Layout", todos los presets activos se desactivarán y
    verá las posiciones (ganchos) en su aspecto original.</p>