<h3>TM MotoPress Slider</h3>
<?php if ($project == 'eveprest') { ?>
    <div>
        <p style="margin-bottom: 0;">Disponible en:</p>
        <p style="margin-top: 0;" class="small text-secondary">Fashion, Electronics, Spare Parts, Furniture</p>
    </div>
<?php } ?>

<h4>Instalación del Módulo</h4>
<p>Este módulo proporciona la posibilidad de añadir MotoPress Slider a su página HTML. Se puede instalar como cualquier otro
    módulo de PrestaShop:</p>
<ul class="index-list">
    <li><p>Cargue el módulo en la carpeta /modules.</p></li>
    <li><p>Vaya a Panel de administración -> Módulos y servicios -> Módulos y servicios (1), busque el módulo (2) y haga clic en
             el Botón 'Instalar' (3).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider00_install.png" alt=""/>
        </figure>
    </li>
    <li><p>Cuando el módulo se instala correctamente, puede ver el menú 'MotoPress Slider' aparecido en la parte inferior
         	de su panel de administración (1).<br>
            Haga clic en el botón 'MotoPress Slider' en este menú (2).
        </p>
        <figure class="img-polaroid">
            <img src="img/mpslider01_open.png" alt=""/>
        </figure>
    </li>
</ul>

<h4>Uso del módulo</h4>
<h5>Adición/edición del Slider</h5>
<p>Ahora puede agregar un nuevo control deslizante (1) o editar el existente (2).</p>
<figure class="img-polaroid">
    <img src="img/mpslider02_addedit.png" alt=""/>
</figure>
<h5>Añadir nuevo slider</h5>
<p>Al hacer clic en el botón "Añadir control deslizante", hay una opción para elegir si debe ser "Custom Slider" o 'Product
    Slider'.</p>
<figure class="img-polaroid">
    <img src="img/mpslider03_slider_add.png" alt=""/>
</figure>
<p>La diferencia entre estos dos tipos es la siguiente: Product slider se crea a partir de los productos de su tienda,
      aunque en Custom Slider puede añadir tantas diapositivas como desees, personalizándolas de acuerdo a tus necesidades.</p>
<p>Las configuraciones del Custom y Product slider son ligeramente diferentes. <br>
    Se mencionarán más adelante.</p>

<h4>Configuración del módulo</h4>
<h5>Configuración del slider</h5>
<p>La configuración del slider principal. La descripción detallada de los ajustes está debajo de la captura de pantalla.</p>
<figure class="img-polaroid">
    <img src="img/mpslider04_slider_slider_settings.png" alt=""/>
</figure>
<ul class="marked-list">
    <li><strong>Título del Slider</strong> - El título del slider (ejemplo: Slider1); Es necesario cuando tienes varios
     	sliders y tienes que distinguirlos.
    </li>
    <li><strong>Slider alias</strong> - El alias único que se utilizará en los códigos cortos para incrustar al slider
         (ejemplo: slider1); debe ser único.
    </li>
    <li><strong>Slider shortcode</strong> - copie este código corto y péguelo en su página.</li>
    <li><strong>Forzar el ancho total</strong> - activar esta opción para que este slider se estire a todo el ancho.</li>
    <li><strong>Forzar el alto total</strong> - activar esta opción para que este slider esté de altura completa.</li>
    <li><strong>Forzar la rejilla de tamaño completo</strong> - Hace que la rejilla se estire al contenedor principal (pero todavía necesita establecer 
	     el ancho y la altura de la rejilla).
    </li>
    <li><strong>Tamaño de cuadrícula de capas</strong> - permite establecer el ancho inicial y la altura de las capas.</li>
    <li><strong>Activar presentación de diapositivas</strong> - Activar/desactivar la presentación de diapositivas.</li>
    <li><strong>Retardo de presentación</strong> - el tiempo que una diapositiva permanece en la pantalla; Se mide en milisegundos.</li>
    <li><strong>Animación de diapositivas</strong> - elegir la animación para cambiar diapositivas.</li>
    <li><strong>Duración de la presentación</strong> - duración de la animación en milisegundos.</li>
    <li><strong>Descanso de diapositivas</strong> - relajaciones en el cambio de la diapositivag.</li>
    <li><strong>Comience con la diapositivae</strong> - primer índice de diapositivas.</li>
</ul>
<h5>Controles</h5>
<p>Opciones que se refieren a los controles de conmutación de diapositivas.</p>
<figure class="img-polaroid">
    <img src="img/mpslider05_slider_controls.png" alt=""/>
</figure>
<ul class="marked-list">
    <li><strong>Mostrar flechas</strong> - mostrar/ocultar flechas.</li>
    <li><strong>Mostrar viñetas</strong> - mostrar/ocultar viñetas.</li>
    <li><strong>Mostrar temporizador de presentación de diapositivas</strong> - Mostrar/ocultar temporizador.</li>
    <li><strong>Mostrar el botón de reproducción / pausa del pase de diapositivas</strong> - mostrar u ocultar el botón de reproducción / pausa.</li>
    <li><strong>Ocultar controles cuando el ratón deja el deslizador</strong> - ocultar controles cuando el mouse no está en el área del deslizador.</li>
    <li><strong>Pausa en vuelo fijo</strong> - permite pausar la presentación de diapositivas mientras.</li>
    <li><strong>Orden inverso de las diapositivas</strong> - animar diapositivas en orden inverso.</li>
    <li><strong>Mostrar el contador</strong> - permite mostrar el número de diapositivas.</li>
    <li><strong>Activar swipe</strong> - activar el deslizamiento en el escritorio.</li>
</ul>
<h5>Apariencia</h5>
<p>Opciones referentes a la visualización del slider.</p>
<figure class="img-polaroid">
    <img src="img/mpslider06_slider_appearance.png" alt=""/>
</figure>
<ul class="marked-list">
    <li><strong>Mostrar en</strong> - ganchos donde se debe mostrar el slider.</li>
    <li><strong>Visible</strong> - min. y/o máx. Resoluciones de pantalla cuando el control deslizante está visible (se puede configurar utilizando los ajustes preestablecidos: teléfono/tablet/escritorio).
    </li>
    <li><strong>Retardo de inicialización</strong> - el retardo antes de la inicialización del deslizador (se debe ajustar en milisegundos).
    </li>
    <li><strong>Inicializar el slider en el desplazamiento</strong> - elija si desea que el control deslizante se inicialice en desplazamiento.</li>
    <li><strong>Nombre de clase personalizado de Slider</strong> - nombre de la clase personalizada que se utiliza para el control deslizante.</li>
    <li><strong>Estilos personalizados de Slider</strong> - los estilos de encargo de CSS se pueden agregar directamente en este textarea.</li>
</ul>
<h5>Contenido</h5>
<p>Este menú sólo aparece para el control deslizante del producto. <br>
    Cuando se va a configurar, pulse el botón "Crear" (1).</p>
<figure class="img-polaroid">
    <img src="img/mpslider07_slider_content1.png" alt=""/>
</figure>
<ul class="marked-list">
    <li><strong>Vincular diapositivas a la página del producto</strong> - activar si desea que la página del producto se abra después de hacer clic
    	en la diapositiva con el producto.
    </li>
    <li><strong>Abrir en nueva ventana</strong> - activar esta opción para abrir la página del producto en una nueva ventana.</li>
    <li><strong>Categories</strong> - Categorías con productos para mostrar en el deslizador (Ctrl + clic para seleccionar varias 
	    categorías).
    </li>
    <li><strong>Etiquetas</strong> - Etiquetas que se incluirán.</li>
    <li><strong>Mostrar sólo productos en stock</strong> - sólo se mostrarán los productos en stock.</li>
    <li><strong>Mostrar sólo productos a la venta</strong> - sólo se mostrarán los productos a la venta.</li>
    <li><strong>Excluir productos</strong> - agregue ID de producto separados por coma.</li>
    <li><strong>Incluir productos</strong> - agregue ID de producto separados por coma.</li>
    <li><strong>Número de productos</strong> - número de productos a mostrar.</li>
    <li><strong>Número de primeros resultados a saltar (offset)</strong> - el número de primeras diapositivas que no se mostrarán.
    </li>
    <li><strong>Ordenar por</strong> - tipo de orden a aplicar.</li>
    <li><strong>Dirección de la orden</strong> - dirección de orden descendente o ascendente.</li>
</ul>
<p>A continuación hay una lista de productos que se mostrarán en el control deslizante. Después de realizar cualquier cambio en la configuración, presione
     el botón "Visualizar productos" (1).</p>
<figure class="img-polaroid">
    <img src="img/mpslider08_slider_content2.png" alt=""/>
</figure>
<p>Una vez configurado el control deslizante, pulse el botón 'Guardar'.</p>
<h5>Agregar/editar diapositivas</h5>
<p>Para añadir una nueva diapositiva presione el botón 'Añadir Diapositiva' (1). Para editar el existente, haga clic en "Editar" (2).</p>
<figure class="img-polaroid">
    <img src="img/mpslider09_slide_edit.png" alt=""/>
</figure>
<h5>Ajustes de diapositivas</h5>
<p>MotoPress Slider contiene el Editor de estilos. Permite personalizar las capas de diapositivas, sus estilos y textos
     utilizando el área de vista previa y evitar cualquier cambio manual de código o reglas CSS.</p>
<p>Seleccione el slider para editar y seleccione la diapositiva real para trabajar con.</p>

<h6>General</h6>
<p>La configuración general de diapositivas incluye el título y el estado.</p>
<figure class="img-polaroid">
    <img src="img/mpslider10_slide_general.png" alt=""/>
</figure>

<h6>Color</h6>
<p>En la pestaña 'Color' hay dos variantes del tipo de color de fondo: color de fondo y degradado. Elija la opción
   y el color preferible.</p>
<figure class="img-polaroid">
    <img src="img/mpslider11_slide_color.png" alt=""/>
</figure>

<p>Si elige gradiente, seleccione gradiente de color 1, degradado de color 2 y el ángulo de degradado.</p>
<figure class="img-polaroid">
    <img src="img/mpslider12_slide_gradient.png" alt=""/>
</figure>

<h6>Imagen</h6>
<p>La imagen de fondo se puede adjuntar desde la biblioteca de medios o desde la URL externa.</p>
<p>La imagen también se puede agregar desde su carpeta local a la Biblioteca de Medios. Para ello, pulse el botón 'Examinar' (1).</p>
<figure class="img-polaroid">
    <img src="img/mpslider13_slide_image.png" alt=""/>
</figure>

<p>A continuación, seleccione la pestaña "Subir nueva" (2) y haga clic en el área seleccionada o simplemente arrástrelas.</p>
<figure class="img-polaroid">
    <img src="img/mpslider14_slide_image_upload.png" alt=""/>
</figure>

<h6>Video</h6>
<p>Puede agregar video a su diapositiva. Para agregar vídeo, elija fuentes para diferentes formatos de video y establezca otros parámetros para
     visualización de vídeo. Tendrás que subir un video en formato MP4, WEBM u OGG y proporcionar la URL del archivo de video en ficha del
     Video.</p>
<p>Los ajustes para la visualización de vídeo también se pueden ajustar.</p>
<figure class="img-polaroid">
    <img src="img/mpslider15_slide_video.png" alt=""/>
</figure>

<h6>Enlace</h6>
<p>La pestaña vincular permite agregar un enlace a su diapositiva, asignar el id, la clase, añadir el título del enlace y la relación:</p>
<figure class="img-polaroid">
    <img src="img/mpslider16_slide_link.png" alt=""/>
</figure>

<h6>Visibilidad</h6>
<p>Las opciones de visibilidad de diapositiva se pueden gestionar desde la pestaña Visibilidad:</p>
<figure class="img-polaroid">
    <img src="img/mpslider17_slide_visibility.png" alt=""/>
</figure>

<h6>Misc</h6>
<p>La sección Misc permite asignar una clase css o id a la diapositiva.</p>
<figure class="img-polaroid">
    <img src="img/mpslider18_slide_misc.png" alt=""/>
</figure>

<p>Haga clic en el botón "Guardar diapositiva" cuando haya terminado de realizar cambios.</p>


<h4>Contenido de la diapositiva</h4>
<p>Aquí puedes añadir textos, imágenes, botones y video a cada diapositiva. <br>
    Se divide en dos secciones principales: 'Configuración de capas' (1) y 'Capas de clasificación' (2).
    Por encima del área "Configuración de capa" hay cuatro pestañas para agregar el contenido necesario (3). Después de haber elegido qué
    elemento que desea agregar, puede ir más lejos con la personalización detallada. <br>
    a gran característica es que estos contenidos se agregan como capas individuales, por lo que puede arrastrarlas hacia arriba y hacia abajo para establecer
    su orden en la sección 'Capas de clasificación' (2).</p>
<p>Las capas se pueden eliminar por separado (4) o todas a la vez (5). </p>
<figure class="img-polaroid">
    <img src="img/mpslider19_slide_add_text.png" alt=""/>
</figure>
<h5>Configuración de la capa</h5>
<h6>Añadir texto</h6>
<p>Esta pestaña se crea para agregar, editar y localizar textos en la diapositiva.</p>
<figure class="img-polaroid">
    <img src="img/mpslider19_slide_add_text_2.png" alt=""/>
</figure>
<ul class="marked-list">
    <li>Usando cuadrados grises puedes configurar rápidamente la posición del texto (1).</li>
    <li>Para ajustarlo, añada el valor 'X' y 'Y' en píxeles y establezca el ancho de este elemento (2).</li>
    <li>Si 'Whitespace' se establece en 'Normal', el texto se envolverá normalmente. Si se selecciona 'No-wrap', la envoltura 
	    será ignorada (3).
    </li>
    <li>En la segunda columna se puede controlar la animación del elemento - cómo, cuánto tiempo y cuándo debe comenzar y terminar (4) 
	    dentro de la duración de la diapositiva (que se muestra a continuación para su conveniencia (5) -> Retardo de presentación).
		También puede previsualizar la animación en la ventana que aparece después de hacer clic en el botón "Editar". Elige la duración, la función de facilidad, el efecto de 
		animación y presiona 'Reproducir' para ver la vista previa. A continuación, haga clic en 
	    "Aplicar" cuando cumpla con sus expectativas.
    </li>
</ul>
<p>Los ajustes descritos anteriormente son similares para cada elemento, por eso sólo se mencionan las
   opciones de la tercera columna.</p>
<figure class="img-polaroid">
    <img src="img/mpslider19_slide_add_text_3.png" alt=""/>
</figure>
<ul class="marked-list">
    <li>El texto en sí puede añadirse en la zona de texto que viene a continuación (6).</li>
    <li>El estilo de texto se puede elegir entre los presets de la lista desplegable (7), editado después de presionar el botón 'Editar' (8),
    	y deshabilitado haciendo clic en el botón 'Eliminar' (9). Una vez editado el estilo de texto, pulse el botón 'Aplicar estilo'. Si desea editar y guardar
		el estilo existente, pulse el botón "Duplicar", edítelo y guárdelo. Para crear a partir de scrach el estilo que se aplicará a menudo, haga clic en el
		"Crear nuevo preset" y editarlo.
    </li>
    <li>También es posible agregar una clase personalizada a cada elemento. (10).</li>
</ul>
<h6>Añadir imagen</h6>
<figure class="img-polaroid">
    <img src="img/mpslider21_slide_add_image.png" alt=""/>
</figure>
<ul class="marked-list">
    <li>Para elegir la imagen, pulse el botón "Seleccionar imagen" (1).</li>
    <li>Si desea agregar el enlace a la imagen, añada la URL de la página de destino en el campo "Vincular" (2).</li>
    <li>Este enlace se puede abrir en una ventana nueva ('On') o en el mismo ('Off') (3).</li>
    <li>Algunos estilos también se pueden aplicar a las imágenes (por ejemplo, estilos de borde) (4).</li>
    <li>También es posible añadir clases personalizadas al elemento (5).</li>
</ul>
<h6>Añadir botón</h6>
<p>Los estilos de botones son casi los mismos que los estilos de imagen.</p>
<figure class="img-polaroid">
    <img src="img/mpslider22_slide_add_button.png" alt=""/>
</figure>
<ul class="marked-list">
    <li>Agregue el texto del botón en el campo correspondiente (1).</li>
    <li>Add the URL of the target page in the 'Link' field (2).</li>
    <li>Elija el estilo para su botón o cree su propio (3).</li>
</ul>
<h6>Adñadir Video</h6>
<figure class="img-polaroid">
    <img src="img/mpslider23_slide_add_video.png" alt=""/>
</figure>
<ul class="marked-list">
    <li>El video se puede agregar como un enlace a Youtube o Vimeo, o se puede elegir entre Media Library (1).</li>
    <li>Agregar la URL del video (2).</li>
    <li>Agregue la URL de la imagen de vista previa (3).</li>
    <li>Elija las opciones de visualización de vídeo (4) y agregue estilos a ella (5).</li>
</ul>
<p>Después de haber realizado cambios en la diapositiva, no olvide hacer clic en el botón 'Guardar diapositiva' (1), luego presionar 'Cerrar' (2) o
   navegar entre otras diapositivas (3).</p>
<figure class="img-polaroid">
    <img src="img/mpslider24_slide_save.png" alt=""/>
</figure>

<h4>Importar y Exportar Slider</h4>
<h6>Import & Export Slider es muy útil si necesitas transferir cualquier Slider a diferentes sitios web. No es necesario 
    gastar mucho tiempo para volver a crear controles deslizantes desde cero. Si es un desarrollador, puede crear 
	slider en su sitio web, mostrarlos a sus clientes e importar controles deslizantes a los sitios web de los clientes.</h6>
<h5>Exportar slider</h5>
<h6>Siga estos sencillos pasos para aprender a exportar Motopress Slider.</h6>
<ul class="index-list">
    <li>
        <p>Vaya a su panel de administración de Motopress Slider (1, 2).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider01_open.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Haga clic en el botón 'Exportar' (3).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider25_export1.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Seleccione los sliders que desea exportar (4) y haga clic en el botón 'Exportar sliders' (5).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider26_export2.png" alt=""/>
        </figure>
    </li>
    <li>Se le pedirá que guarde el archivo .json exportado en la PC.</li>
</ul>
<h5>Importación de Slider</h5>
<h6>Para importar Motopress Slider haga lo siguiente:</h6>
<ul class="index-list">
    <li>
        <p>Vaya a su panel de administración de Motopress Slider (1, 2).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider01_open.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Haga clic en el botón "Importar" (3).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider27_import1.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Seleccione el archivo .json exportado de su PC haciendo clic en el botón 'Examinar' (4) y presione 'Importar' (5).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider28_import2.png" alt=""/>
        </figure>
    </li>
    <li>Los ajustes del deslizador, las imágenes y el contenido de otros controles deslizantes deben exportarse correctamente a su sitio web.</li>
</ul>