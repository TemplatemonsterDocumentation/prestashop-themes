<h3>TM Product Zoomer</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponible en:</p>
        <p style="margin-top: 0;" class="small text-secondary">Fashion, Electronics, Spare Parts, Furniture, One Product</p>
    </div>
<?php } ?>
<p>Este módulo es una solución alternativa para el zoom de imagen de producto estándar en la página de un solo producto. Es totalmente compatible con los productos adicionales estándar de carrusel en miniatura y cambios en los atributos del producto. Le permite elegir entre las tres opciones disponibles (ventana/lente/interior) para el zoom de imagen con los ajustes avanzadas del plugin. El módulo se basa en el plugin <a href="//igorlino.github.io/elevatezoom-plus/" target="_blank">Elevatezoom Plus</a> .</p>
<h4>Instalación y eliminación</h4>
<p>El módulo se instala y se elimina como cualquier otro módulo de Prestashop. Una vez instalado el módulo, el efecto de zoom estándar del producto se desactivará automáticamente. Después de borrar el módulo, el efecto estándar debe activarse manualmente (si es necesario) en la sección <strong>Preferencias -> Productos -> Activar JqZoom en lugar de Fancybox en la página del producto</strong>.</p>
<h4>Configuración del Módulo</h4>
<p>Una vez instalado el módulo, puede configurarlo en la página de configuración del módulo.</p>
<p>De forma predeterminada, la página de configuración muestra el conjunto de opciones <strong>simplificadas</strong> .</p>
<figure class="img-polaroid">
    <img src="img/tmproductzoomer-1.png" alt=""/>
</figure>
<ul class="index-list">
    <li><strong>Modo en directo</strong> - el módulo está encendido/apagad.</li>
    <li><strong>Fancybox</strong> - si desea mostrar la imagen ampliada en el Fancybox en clic.</li>
    <li><strong>Cambiar la imagen en hover</strong> - cambie la imagen principal en la posición en miniatura (por defecto está configurada para encender en click).</li>
    <li><strong>Responsivo</strong> - permite utilizar la funcionalidad adaptativa para la visualización de complementos en los dispositivos móviles.</li>
    <li><strong>Tipo de zoom</strong> - elija el tipo de modo de visualización de imagen ampliada
        <ul>
            <li><strong>ventana</strong> - la imagen ampliada aparece junto a la imagen principal en una de las posiciones disponibles (16)</li>
            <li><strong>objetivo</strong> - la imagen se amplía en el contenedor del objetivo, encima de él</li>
            <li><strong>interior</strong> - la imagen se amplía dentro del contenedor de imagen principal, cubriéndolo completamente.</li>
        </ul>
        <div class="alert alert-info"><span>Los dispositivos móviles (&lt; 768) tienen modo "lente" activado instantáneamente.</span></div>
    </li>
    <li><strong>Configuración extendida</strong> - Permite la configuración avanzada para los usuarios experimentados. Puedes ver el enlace en la documentación oficial <a href="//igorlino.github.io/elevatezoom-plus/api.htm" target="_blank"> para más detalles</a> junto a él.</li>
</ul>
<h6><strong>Extendida</strong> configuración del módulo</h6>
<ul class="index-list">
    <li><strong>Scroll Zoom</strong> - Cambio de la relación de zoom en el desplazamiento del ratón
	  disponible para todos los tipos).</li>
    <li><strong>Cursor</strong> - tipo de cursor en el desplazamiento de la imagen ampliada. Están disponibles las siguientes opciones: default, cursor, crosshair (disponible para todos los tipos).</li>
    <li><strong>Ajustes de zoom</strong> - disponible para todos los tipos, el 'Scroll Zoom' está activado.
        <figure class="img-polaroid"><img src="img/tmproductzoomer-2.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Nivel de Zppm</strong> - el nivel de zoom en el plano inicial</li>
            <li><strong>Nivel de Zoom Mínimo</strong> - un nivel de zoom mínimo</li>
            <li><strong>Nivel de Zoom Máximo</strong> - un nivel de zoom máximo</li>
            <li><strong>Incremento de Zoom de Desplazamiento</strong> - aumento de incremento de desplazamiento</li>
        </ul>
    </li>
    <li><strong>Facilitar</strong> - el efecto de apariencia de imagen ampliada (disponible para todos los tipos).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-3.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Facilitar Zoom</strong> - efecto activado/desactivado</li>
            <li><strong>Cantidad de Alivio</strong> - valor de retardo de efecto</li>
        </ul>
    </li>
    <li><strong>Fundido cruzado de imagen</strong> - desenfoque de imagen principal fuera del área al pasar el ratón (la lente) - disponible para ventana, lente.</li>
    <li><strong>Configuración de ventana de imagen ampliada</strong> - disponible para ventana.
        <figure class="img-polaroid"><img src="img/tmproductzoomer-4.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Ancho de Ventana de Zoom</strong> - ancho de ventana en px</li>
            <li><strong>Altura de la Ventana de Zoom</strong> - window height in px</li>
            <li><strong>Desplazamiento de la ventana de zoom X</strong> - window offset on the X axis</li>
            <li><strong>Desplazamiento de la ventana de zoom Y</strong> - window offset on the Y axis</li>
            <li><strong>Posición de la Ventana de zoom</strong> - posición de la ventana en relación con la imagen principal (las posiciones disponibles se presentan en la imagen debajo de este campo)</li>
            <li><strong>Zoom de imagen de fondo de la ventana</strong> - imagen de fondo de la ventana (sólo para imágenes transparentes))</li>
            <li><strong>Ventana de Zoom se funde</strong> - el efecto de disminuir la apariencia</li>
            <li><strong>Ventana de Zoom desaparece</strong> - el efecto de retardar la desaparición de la ventana</li>
            <li><strong>Tamaño del borde</strong> - anchura del borde de la ventana en px</li>
            <li><strong>Color del borde</strong> - color del borde de la ventana</li>
        </ul>
    </li>
    <li><strong>Lentes de Aumento</strong> - lente de zoom (disponible para ventana, lente).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-5.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Lentes de aumento</strong> - encendido/apagado</li>
            <li><strong>Forma de la lente</strong> - tipo de lente. Puede tomar los siguientes valores: circular/redondeado o cuadrado/rectangular</li>
            <li><strong>Color de la lente</strong> - color de fondo interior de la lente</li>
            <li><strong>Opacidad de la lente</strong> - opacidad de fondo interior de la lente</li>
            <li><strong>Tamaño de la lente</strong> - tamaño del objetivo en px</li>
            <li><strong>Lente se funde</strong> - la velocidad de efecto de la apariencia de la lente</li>
            <li><strong>Lente Desaparece</strong> - la velocidad del efecto desaparición lente</li>
            <li><strong>Borde de la lente</strong> - anchura del borde de la lente</li>
            <li><strong>Color del Borde de la Lente</strong> - color del borde de la lente</li>
            <li><strong>Lente Contiene Zoom</strong> - la restricción de la lente desborda hacia fuera el contenedor de imagen principal</li>
        </ul>
    </li>
    <li><strong>Tinte</strong> - el efecto de sombra en el área fuera de la lente (disponible para ventana).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-6.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Tinte</strong> - efecto activado/desactivado</li>
            <li><strong>Color del tinte</strong> - el fondo del área externa de la lente</li>
            <li><strong>Tinte Opacidad</strong> - la opacidad del área externa de la lente</li>
            <li><strong>Tinte se Funde</strong> - la apariencia afecta la velocidad</li>
            <li><strong>Tinte Desaparece</strong> - la velocidad del efecto de desaparición</li>
        </ul>
    </li>
</ul>
<div class="alert alert-info">Si cambia el tipo de zoom, el conjunto de opciones avanzadas se cambia en consecuencia para mostrar sólo los parámetros disponibles para el tipo seleccionado.</div>
<div class="alert alert-warning">Tenga cuidado al editar los ajustes extendidos. Si los ajustes se establecen incorrectamente, el efecto puede ser feo.</div>