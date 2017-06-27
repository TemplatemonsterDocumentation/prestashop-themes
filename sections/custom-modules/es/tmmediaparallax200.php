<h3>TM Media Parallax 2.0.0</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponible en:</p>
        <p style="margin-top: 0;" class="small text-secondary">Fashion, Electronics, Spare Parts, Furniture, One Product</p>
    </div>
<?php } ?>
<p class="alert alert-warning">
    Si tiene la versión 1.n de este módulo instalado en su motor prestashop, no se recomienda actualizarla con la actual. Primero debe quitar la versión anterior del módulo para que se ejecute sin errores.
</p>
<p>Este módulo está diseñado para permitirle añadir efecto de paralaje a los elementos DOM de la página. Le permite crear paralaje de múltiples capas. También proporciona la posibilidad de agregar un video de fondo personalizado (puedes cargarlo desde tu computadora al servidor) o agregar un video de YouTube.</p>
<h4>Panel Principal de TM Media Parallax</h4>
<p>Panel principal del módulo que le permite agregar, editar o eliminar elementos de paralaje. </p>
<figure class="img-polaroid">
    <img src="img/main-panel.jpg" alt="" />
</figure>
<h4>Crear un nuevo elemento de paralaje</h4>
<p>Para crear un nuevo elemento de paralaje, pulse el icono "más" (1), en la esquina superior derecha del panel principal.</p>
<figure class="img-polaroid">
    <img src="img/main-panel-add-item.jpg" alt="" />
</figure>
<p>A continuación, verá el siguiente formulario.</p>
<figure class="img-polaroid">
    <img src="img/add-item.jpg" alt="" />
</figure>
<h4>Opciones de formulario para agregar elementos de paralaje</h4>
<ul class="index-list">
    <li>Selector - Selector CSS del elemento con efecto de paralaje aplicado. Por ejemplo, '#header .nav'</li>
    <li>Estado del artículo - estado del artículo (el paralaje no se mostrará si está inhabilitado)</li>
    <li>Valor de dígito de velocidad de 0 a 2, que define la velocidad del bloque de paralaje principal</li>
    <li>Offset - sangría de la capa principal en el eje Y</li>
    <li>Inverso - dirección de paralaje</li>
    <li>Apagarse - esta opción permite configurar el bloqueo principal de fade-out en la página de desplazamiento</li>
    <li>Ancho total forzado - ancho total forzado del bloque de paralaje</li>
</ul>
<p>Pulse 'Guardar' después de rellenar todos los campos obligatorios.</p>
<h4>Lista de capas de Parallax</h4>
<p>Para ver la lista de capas de paralaje, debe presionar 'Ver' (1) cerca del elemento de paralaje principal.</p>
<figure class="img-polaroid">
    <img src="img/main-panel-view.jpg" alt="" />
</figure>
<p>A continuación, verá una tabla, en la que las capas se muestran después de que se agregan.</p>
<figure class="img-polaroid">
    <img src="img/layouts-panel.jpg" alt="" />
</figure>
<h4>Adición de una nueva capa</h4>
<p>Para crear una nueva capa de paralaje, pulse el icono 'más' (1) en la esquina superior derecha del panel de capas.</p>
<figure class="img-polaroid">
    <img src="img/layouts-panel-add.jpg" alt="" />
</figure>
<p>A continuación, verá el siguiente formulario.</p>
<figure class="img-polaroid">
    <img src="img/add-layout.jpg" alt="" />
</figure>
<p>Pulse 'Guardar' después de rellenar todos los campos obligatorios.</p>
<h4>Tipos de capas de Parallax y sus campos</h4>
<ul class="index-list">
    <li><p>Imagen de fondo - imagen utilizada como fondo de paralaje</p>
        <ul class="marked-list">
            <li>Estado del artículo - estado del artículo (el paralaje no se mostrará si está inhabilitado)</li>
            <li>Velocidad de diseño: valor de 0 a 2, que define la velocidad del bloque de paralaje principal</li>
            <li>Offset - capa principal en el eje Y</li>
            <li>Inverso - dirección de paralaje</li>
            <li>Ocultar - esta opción permite configurar el bloqueo principal de ocultación en la página de desplazamiento</li>
            <li>Imagen - enlace a una imagen a la que se aplicará el efecto de paralaje</li>
            <li>Orden de clasificación - posición de disposición, con relación al resto de elementos</li>
        </ul>
    </li>
    <li><p>Video-fondo - video utilizado como fondo de paralaje</p>
        <ul class="marked-list">
            <li>Estado del artículo - estado del artículo (el paralaje no se mostrará si está inhabilitado)</li>
            <li>Velocidad de diseño: valor de 0 a 2, que define la velocidad del bloque de paralaje principal.</li>
            <li>Offset - sangría de la capa principal en el eje Y</li>
            <li>Inversa - dirección de paralaje</li>
            <li>Ocultar - esta opción permite configurar el bloqueo principal de ocultar en la página de desplazamiento</li>
            <li>Imagen - enlace a una imagen adicional</li>
            <li>Vídeo paralaje mp4 - video en formato mp4</li>
            <li>Vídeo paralaje webm - video en formato webm</li>
            <li>Orden de clasificación - posición de disposición, con relación al resto de elementos</li>
        </ul>
    </li>
    <li><p>Orden de clasificación - posición de disposición, con relación al resto de elementos.</p>
        <ul class="marked-list">
            <li>Estado del artículo - estado del artículo (el paralaje no se mostrará si está inhabilitado)</li>
            <li>Velocidad de diseño: valor de 0 a 2, que define la velocidad del bloque de paralaje principal</li>
            <li>Offset - capa principal indent en el eje Y</li>
            <li>Inverso - dirección de paralaje</li>
            <li>Ocultar - esta opción permite configurar el bloqueo principal de fade-out en la página de desplazamiento</li>
            <li>Contenido - contenido de capa</li>
            <li>Clase específica: clase CSS personalizada para esta capa</li>
            <li>Orden de clasificación - posición de disposición, con relación al resto de elementos</li>
        </ul>
    </li>
    <li><p>Fondo-Youtube - YouTube video utilizado como fondo de paralaje</p>
        <ul class="marked-list">
            <li>Estado del artículo - estado del artículo (la paralaje no se mostrará si está deshabilitada)</li>
            <li>Velocidad de diseño: valor de 0 a 2, que define la velocidad del bloque de paralaje principal</li>
            <li>Offset - capa principal indent en el eje Y</li>
            <li>Inverso - Dirección de paralaje</li>
            <li>Ocultar - esta opción permite configurar el bloqueo principal de ocultar en la página de desplazamiento</li>
            <li>Video id - ID de vídeo de YouTube</li>
            <li>Orden de clasificación - posición de disposición, con respecto al resto de elementos</li>
        </ul>
    </li>
    <li><p>Imagen - capa de imagen que se puede definir con CSS</p>
        <ul class="marked-list">
            <li>Estado del artículo - estado del artículo (el paralaje no se mostrará si está inhabilitado)</li>
            <li>Velocidad de diseño - de 0 a 2, que define la velocidad del bloque de paralaje principal</li>
            <li>Offset - capa principal en el eje Y</li>
            <li>Inverso - dirección de paralaje</li>
            <li>Ocultar - esta opción permite configurar el bloqueo principal de fade-out en la página de desplazamiento</li>
            <li>Imagen - enlace a una imagen a la que se aplicará el efecto de paralaje</li>
            <li>Clase específica - clase CSS personalizada para esta capa</li>
            <li>Orden de clasificación - posición de disposición, con respecto al resto de elementos</li>
        </ul>
    </li>
</ul>
<h4>Subir vídeo e imágenes al servidor</h4>
<p>Para cargar vídeo o una imagen en el servidor a través de File Manager, primero debe presionar el icono 'file' (1) junto al campo necesario.</p>
<figure class="img-polaroid">
    <img src="img/upload-file.jpg" alt="" />
</figure>
<p>En la siguiente ventana, en la línea 'acciones', elija 'subir' (2).</p>
<figure class="img-polaroid">
    <img src="img/upload-file-2.jpg" alt="" />
</figure>
<p>A continuación, verá una ventana más pop-up, para cargar la imagen o archivo de vídeo aquí.</p>
<h4>Advertencias y recomendaciones</h4>
<ul class="index-list">
    <li>Los dispositivos móviles (smartphones, tabletas) tienen el efecto de paralaje desactivado de forma predeterminada, la capa de imagen de bloque superior se utiliza como fondo en su lugar</li>
    <li>El ancho total forzado del bloque de paralaje afecta la velocidad de carga de la página más críticamente que una carga regular de bloqueo de ancho completo</li>
    <li>Cuanto menor sea el tamaño del video subido, mejor.</li>
</ul>