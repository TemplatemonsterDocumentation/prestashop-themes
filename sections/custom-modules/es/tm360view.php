<h3>TM 360 View</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponible en:</p>
        <p style="margin-top: 0;" class="small text-secondary">Un producto</p>
    </div>
<?php } ?>
<p>El módulo muestra imágenes en un efecto 3D y permite a los usuarios girarlos en 360 grados. La rotación puede iniciarse automáticamente al cargar la página, o el cliente puede rotar la 'imagen' manualmente, arrastrando el botón izquierdo del ratón.</p>
<p>Además, el módulo puede utilizarse para añadir vistas panorámicas (o varias vistas panorámicas) a la página principal.</p>
<p>Modo de vista 360 también está disponible en la página del producto.</p>

<h4>Instalación</h4>
<p>Vaya a Módulos y Configuración -> Módulos y Configuración (1) en su panel de Administración y busque el módulo TM 360 view (2). A continuación, haga clic en el botón 'Instalar' (3).</p>
<figure class="img-polaroid">
    <img src="img/360view-1.png" alt=""/>
</figure>
<h4>Configuración del módulo</h4>
<p>Una vez instalado correctamente el módulo, verá la página "Configurar" con la configuración predeterminada del módulo.</p>
<p>Puede encontrar aquí los ajustes para la vista 360 (1) y para la vista panorámica (2).</p>
<figure class="img-polaroid">
    <img src="img/360view-2.png" alt=""/>
</figure>
<h4>vista 360</h4>
<p>Los ajustes se describen debajo de la captura de pantalla. Elija las opciones según sus necesidades y haga clic en el botón "Guardar" (1).</p>
<figure class="img-polaroid">
    <img src="img/360view-3.png" alt=""/>
</figure>
<ul class="marked-list">
    <li><strong>Habilitar en Inicio</strong> - option to show the 360 view of the product on Homepage.</li>
    <li><strong>Seleccione un producto</strong>(aparece si 'Activa en Inicio' está ajustado a 'Si') - elija un producto que se debe mostrar en la vista 360.</li>
    <li><strong>Anime</strong> - opción para mostrar el producto girando automáticamente en la carga de la página.</li>
    <li><strong>Pedazo de tiempo</strong>(Aparece si 'Animate' está establecido en 'Si') - período de tiempo antes de que una imagen en el conjunto cambie a otra; Debe introducirse en milisegundos.</li>
</ul>
<h5>Adición/eliminación de imágenes</h5>
<ul class="index-list">
    <li>
        <p>Vaya a Catálogo -> Productos en su panel de Administración (1), elija el producto y haga clic en el botón 'Editar' (2).</p>
        <figure class="img-polaroid">
            <img src="img/360view-4.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Para agregar imágenes, use la pestaña 'TM Vista a 360' (1) en la configuración del producto y haga clic en el botón 'Añadir archivos'(2).</p>
        <figure class="img-polaroid">
            <img src="img/360view-5.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>A continuación, pulse 'Subir archivos' (1).</p>
        <figure class="img-polaroid">
            <img src="img/360view-6.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Cuando los archivos se cargaron correctamente, haga clic en el botón 'Guardar' (1).</p>
        <figure class="img-polaroid">
            <img src="img/360view-7.png" alt=""/>
        </figure>
        <p class="alert alert-warning">Para hacer la rotación suave, añada más imágenes y haga un cambio muy ligero en la posición al hacer fotos.</p>
    </li>
    <li>
        <p>Después de que haya añadido imágenes, la vista 360 del producto se mostrará en la página principal *. <br>
            *<small>También aparecerá en la página del producto después de la descripción.</small></p>
    </li>
    <li>
        <p>Para desactivar la vista 360 en la página principal, simplemente vaya a la configuración de vistas a 360 y cambie la opción "Activar en home" a "No".</p>
    </li>
    <li>
        <p>Para desactivar la vista a 360 en la página del producto, abra la pestaña 'TM Vista a 360' en la configuración del producto y quite todas las imágenes.</p>
    </li>
</ul>
<h4>Panorama</h4>
<p>El uso de este módulo también se utiliza para agregar vistas panorámicas a la página principal.</p>
<p class="alert alert-warning">Puedes agregar tantos bloques de panorama como necesites.</p>
<h5>Añadir panorama</h5>
<ul class="index-list">
    <li>
        <p>Para añadir un nuevo panorama, abra la página de configuración del módulo y haga clic en el botón '+' ('Agregar nuevo elemento') (1).</p>
        <figure class="img-polaroid">
            <img src="img/360view-8.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Verá las configuraciones panorámicas que se describen a continuación.</p>
        <figure class="img-polaroid">
            <img src="img/360view-9.png" alt=""/>
        </figure>
        <ul class="marked-list">
            <li><strong>Seleccione un archivo</strong> - elegir un campo panorámico; Este campo es obligatorio (al menos para el idioma predeterminado).</li>
            <li><strong>Título</strong> - ingrese un título para el panorama; Este campo es obligatorio (al menos para el idioma predeterminado).</li>
            <li><strong>Anchura</strong> - anchura del bloque de panorama; este campo es requerido.</li>
            <li><strong>Altura</strong> - altura del bloque de panorama; este campo es requerido.</li>
            <li><strong>Estado</strong> - activar/desactivar el elemento panorámico en la página principal.</li>
            <li><strong>Lazo</strong> - comienza a girar la imagen desde el principio después de su fin.</li>
            <li><strong>Animar</strong> - opción para mostrar el panorama girando automáticamente en carga de página.</li>
            <li><strong>Pedazo de tiempo</strong>(aparece si 'Animar' está ajustado a 'Si') - período de tiempo durante el cual la imagen panorámica hace un círculo completo; Debe introducirse en milisegundos; este campo es requerido.</li>
        </ul>
    </li>
    <li>
        <p>Haga clic en el botón "Guardar" y su imagen panorámica aparecerá en la página principal.</p>
    </li>
</ul>
<h5>Eliminar panorama</h5>
<ul class="index-list">
    <li>
        <p>Para eliminar el panorama: elija el elemento, haga clic en el botón de flecha hacia abajo (1) y, a continuación, haga clic en "Eliminar"(2).</p>
        <figure class="img-polaroid">
            <img src="img/360view-10.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>A continuación, confirme la eliminación.</p>
    </li>
</ul>