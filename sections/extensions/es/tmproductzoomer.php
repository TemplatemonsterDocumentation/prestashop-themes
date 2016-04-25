<h3>TM Product Zoomer</h3>

<p>Este módulo es una forma alternativa para ampliar la imagen del producto en la página del producto. Es totalmente compatible con el carrusel de las etiquetas del producto y los atributos del producto. Se le permite elegir entre tres opciones (ventana/lente/parte interna) para aumentar imagen con las opciones avanzadas del plug-in. El módulo se basa en el plugin <a href="//igorlino.github.io/elevatezoom-plus/" target="_blank">Elevatezoom Plus</a>.</p>

<h5>Instalación y eliminación</h5>
<p>El módulo puede ser instalado y retirado como cualquier otro módulo de PrestaShop. Una vez que el módulo se ha instalado el efecto de zoom estándar se desactivará automáticamente. Una vez que el módulo se ha eliminado el efecto de zoom estándar debe ser activado manualmente (si es necesario) en la sección <strong>Preferences->Products->Enable JqZoom instead of Fancybox on the product page</strong>.</p>
<h5>Configuracion del módulo</h5>
<p>Una vez que el módulo ha sido instalado, puede configurar la página de configuración del módulo.</p>
<p>De forma predeterminada, la página de configuración muestra todo el conjunto <strong>simplified</strong> de opciones.</p>
<figure class="img-polaroid"><img src="img/tmproductzoomer-1.png" alt="" /></figure>
<ol class="index-list">
    <li><strong>Modo en Vivo (Live mode)</strong> - módulo está en on/off </li>
    <li><strong>Fancybox (Fancybox)</strong> - si desea mostrar la imagen ampliada haga clic en FancyBox.</li>
    <li><strong>Cambiar la imagen al pasar el raton (Change image on hover)</strong> - cambiar la imagen principal al pasar el raton en miniatura (por defecto se puede cambiar al hacer clic)</li>
    <li><strong>Responsive (Responsive)</strong> - permite el uso de la funcionalidad de adaptación para la visualización de plugin en los dispositivos móviles</li>
    <li><strong>Tipo de Zoom (Zoom Type)</strong> - eleje el tipo de modo de visualización de la imagen ampliada
        <ul>
            <li><strong>ventana (window)</strong> - la imagen ampliada aparece junto a la imagen principal en una de las posiciones disponibles (16)</li>
            <li><strong>lentilla (lens)</strong> - la imagen se amplía en el recipiente para las lentes, por encima de este último</li>
            <li><strong>parte interna (inner)</strong> - la imagen se amplía dentro del recipiente principal imagen</li>
        </ul>
        <div class="alert alert-info">Los dispositivos móviles(&lt; 768) tienen modo de  "lentes" activadas instantaneamente</div>
    </li>
    <li><strong>Ajustes ampliados (Extended settings)</strong> - activa la configuración avanzada para los usuarios experimentados. A continuación se puede ver el enlace a <a href="//igorlino.github.io/elevatezoom-plus/api.htm" target="_blank"></a> la documentación oficial con más detalles.</li>
</ol>
<p><strong>configuración extendida</strong> del módulo</p>
<ol class="index-list">
    <li><strong>Desplazamiento de zoom (Scroll Zoom)</strong> - cambiar el zoom con el desplazamiento del ratón.
        (para todos los tipos)</li>
    <li><strong>Cursor (Cursor)</strong> - tipo de cursor para pasar a la imagen ampliada. Existen las siguientes opciones: por defecto, el cursor, retículo. (para todos los tipos)</li>
    <li><strong>ajustes de zoom (zoom settings)</strong> - (disponible para todos los tipos, si el 'Desplazamiento de Zoom' ('Scroll Zoom') está activado)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-2.png" alt="" /></figure>
        <ul>
            <li>Nivel de Zoom (Zoom Level) - el nivel de zoom en hover inicial</li>
            <li>Min Nivel de Zoom (Min Zoom Level) - un nivel mínimo de zoom</li>
            <li>Max Nivel de Zoom (Max Zoom Level) - un nivel de zoom máximo</li>
            <li>Incremento de Desplazamiento de zoom (Scroll Zoom Increment) - incrementado durante el desplazamiento</li>
        </ul>
    </li>
    <li><strong>Flexibilidad (Easing)</strong> - el efecto de la aparición de la imagen ampliada (para todos los tipos)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-3.png" alt="" /></figure>
        <ul>
            <li>Flexibilidad de Zommer (Zoom Easing) - efecto on/off</li>
            <li>Flexibilidad (Easing Amount) - efecto de retardo</li>
        </ul>
    </li>
    <li><strong>Imagen de Fundido (Image Crossfade)</strong> - desenfoca de la imagen principal y flota fuera del área (lente).
        (available for window, lens)</li>
    <li><strong>Parámetros de la ventana de la imagen ampliada (magnified image window settings)</strong> - (disponible para ventana)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-4.png" alt="" /></figure>
        <ul>
            <li>Anchura de la ventana de zoom (Zoom Window Width) - anchura de la ventana en px</li>
            <li>Altura de la ventana de zoom (Zoom Window Height) - altura de la ventana en píxeles</li>
            <li>Zoom Ventana Offset X (Zoom Window Offset X) - ventana de desplazamiento en el eje X</li>
            <li>Zoom Ventana Offset Y (Zoom Window Offset Y) - ventana de desplazamiento en el eje Y ventana</li>
            <li>Zoom Ventana Posicion (Zoom Window Position) - elección de la posición de la ventana con relación a la imagen principal (las posiciones disponibles se muestran en la imagen debajo de este campo)</li>
            <li>Zoom Ventana Color de Bg (Zoom Window Bg Color) - imagen de fondo de la ventana (para imágenes transparentes solamente)</li>
            <li>Zoom Ventana Fundida (Zoom Window Fade In) - el efecto de ralentización de la aparición de la ventana</li>
            <li>Zoom Ventana Desaparecida (Zoom Window Fade Out) - la ventana desaparecida con efecto de ralentización</li>
            <li>Tamaño del borde (Border Size) - ancho del borde de la ventana en píxeles</li>
            <li>Color del borde (Border Color) - color del borde de la ventana</li>
        </ul>
    </li>
    <li><strong>Zoom Lente (Zoom Lens)</strong> - zoom de lente (disponible para la ventana, la lente)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-5.png" alt="" /></figure>
        <ul>
            <li>Zoom de Lente (Zoom Lens) - on/off</li>
            <li>Forma de Lente (Lens Shape) - tipo de lente. Puede tomar los siguientes valores: circular / redondo o cuadrado / rectangular</li>
            <li>Color de Lente (Lens Color) - color de fondo de la lente</li>
            <li>Opacidad de Lente(Lens Opacity) - opacidad de fondo de la lente</li>
            <li>Tamaño de Lente (Lens Size) - tamaño de la lente en px</li>
            <li>Lente de Fundido (Lens Fade In) - la velocidad del efecto de la apariencia de la lente</li>
            <li>Lente de Desaparecida (Lens Fade Out) - la velocidad del efecto de lente de desaparecida</li>
            <li>Borde de Lente(Lens Border) - anchura del borde de la lente</li>
            <li>Color del borde de la lente (Lens Border Color) - color de borde de la lente</li>
            <li>Contiene Lente Zoom (Contain Lens Zoom) - restricción del desbordamiento de la lente fuera del recipiente principal de la imagen</li>
        </ul>
    </li>
    <li><strong>Tinte (Tint)</strong> - el efecto de sombra en la zona exterior de la lente (disponible para ventana)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-6.png" alt="" /></figure>
        <ul>
            <li>Tinte (Tint) - efecto on/off</li>
            <li>Color de Tinte (Tint Color) - fondo de la zona exterior de la lente</li>
            <li>Opacidad de Tinte (Tint Opacity) - zona exterior de la lente</li>
            <li>Tinte de Fundido (Tint Fade In) - la velocidad del efecto apariencia</li>
            <li>Tinte de Desaparecida (Tint Fade Out) - la velocidad del efecto de desaparición</li>
        </ul>
    </li>
</ol>
<div class="alert alert-info">Si cambia el tipo de zoom, las opciones avanzadas mostrarán sólo los ajustes disponibles para el tipo seleccionado.</div>
<div class="alert alert-warning">Tenga cuidado al cambiar los parámetros extendidos. Si los parámetros no están colocados correctamente, el efecto no podrá cumplir con sus expectativas.</div>