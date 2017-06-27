<h3>TM Look Book</h3>
<?php if ($project == 'eveprest') { ?>
    <div>
        <p style="margin-bottom: 0;">Disponible en:</p>
        <p style="margin-top: 0;" class="small text-secondary">Fashion, Furniture</p>
    </div>
<?php } ?>
<h5>Requerimientos:</h5>
<p>Este módulo permite crear lookbooks y combinarlos con colecciones. A su vez, los lookbooks permiten ver los 
     productos directamente en el modulo. Además, si un producto está marcado en el lookbook, el módulo muestra el enlace lookbook
     en la página del producto.</p>
<ul class="marked-list">
    <li>PHP 5.4+</li>
    <li>PrestaShop 1.6</li>
</ul>
<h5>TM Look Book Main panel</h5>
<p>En la página principal del módulo, puede eliminar y editar las colecciones del módulo.</p>
<figure class="img-polaroid">
    <img src="img/tmlookbook-main-panel.png" alt=""/>
</figure>
<h5>Agregar y editar la colección</h5>
<p>Las colecciones permiten combinar varios lookbooks en una sola página. Para agregar una colección, siga los siguientes pasos.</p>
<ul class="index-list">
    <li>
        <p>En la tabla de colecciones (el panel del módulo principal) haga clic en el signo más (1).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-collection.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Verá un formulario con los campos siguientes:</p>
        <ul class="marked-list">
            <li><strong>Estado</strong> - Esta opción permite inhabilitar o activar la visualización de la colección 
                 en la página de colecciones.
            </li>
            <li><strong>Nombre</strong> - el nombre de la colección que se mostrará en la página de colecciones.</li>
            <li><strong>Descripción</strong> - la descripción de la colección.</li>
            <li><strong>Imagen</strong> - la imagen principal de la colección.</li>
            <li><strong>Plantilla</strong> - La plantilla para los lookbooks de esta colección. Cuando selecciona una plantilla, selecciona 
			la forma en que los lookbooks de esta colección se mostrarán en la pagina.
            </li>
        </ul>
    </li>
    <li>
        <p>Después de llenar todos los campos, presione el botón 'Guardar' (2).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-collection-2.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Se ha creado la colección. Puede editarlo presionando el botón "Editar" (3), o puede pasar
              al siguiente paso y crear lookbooks para la colección.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-collection-3.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Creación y edición de lookbooks</h5>
<ul class="index-list">
    <li>
        <p>Después de crear un lookbook, presione el botón "Ver" (1) junto a la colección necesaria.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-lookbook.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>En el bloque aparecido presione el botón '+' (2). </p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-lookbook-2.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Verá un formulario con las siguientes opciones:</p>
        <ul class="marked-list">
            <li><strong>Estado</strong> - El estado del lookbook, la opción define si el lookbook se
			mostrará.
            </li>
            <li><strong>Nombre</strong> - el nombre del look.</li>
            <li><strong>Descripción</strong> - La descripción del look.</li>
            <li><strong>Imagen</strong> - La imagen principal de la mirada, aquí puedes marcar los productos y las descripciones.
            </li>
        </ul>
    </li>
    <li>
        <p>Después de rellenar todos los campos, presione el botón "Guardar y quedarse" (3) para continuar creando hotspots.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-lookbook-3.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Adición y edición de Hotspots</h5>
<p>Después de haber guardado el lookbook, puede agregar los hotspots.</p>
<ul class="index-list">
    <li>
        <p>Presione la imagen (en el punto necesario) (1) en el formulario lookbook.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-hotspot.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Verá un formulario con las siguientes configuraciones:</p>
        <ul class="marked-list">
            <li><strong>Tipo</strong> - Este es el tipo de punto, tiene dos valores 'Producto' y 'Contenido'. El tipo de producto 
			    permite seleccionar un producto que se adjuntará al punto y el tipo de contenido permite añadir 
				contenido (nombre, descripción, html) al punto.
            </li>
            <li><strong>Producto</strong> - Seleccionar un producto para el punto. Aparece, si el tipo seleccionado es 
			    'Producto'.
            </li>
            <li><strong>Nombre</strong> - El nombre adjunto al punto. Este campo está disponible, sólo si el tipo
     			'Contenido' está seleccionado.
            </li>
            <li><strong>Descripción</strong> - La descripción del punto o la codificación. Disponible sólo si el tipo 'Contenido' está 
			     seleccionado.
            </li>
        </ul>
    </li>
    <li>
        <p>Después de haber seleccionado las opciones necesarias, presione el botón 'Guardar' (2), se creará hotspot y se mostrará 
		   en la página.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-hotspot-2.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Eliminación de un hotspot</h5>
<ul class="index-list">
    <li>
        <p>Para borrar un punto, colóquelo sobre él (1).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-delete-hotspot.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Verás un botón con una cruz, presiona (2).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-delete-hotspot-2.png" alt=""/>
        </figure>
    </li>
    <li><p>Se elimina el punto.</p></li>
</ul>
<h5>Cambiar la posición del hotspot</h5>
<p>Para cambiar la posición del punto, arrástrelo y colóquelo en la posición deseada.</p>
<h5>Cómo navegar a la página de colecciones?</h5>
<p>Navegue hasta la página del módulo principal y presione el botón (1), verá una página con todas las colecciones. Puede agregar 
   los vínculos a los lookbooks a cualquier módulo que admita contenido personalizado.</p>
<figure class="img-polaroid">
    <img src="img/tmlookbook-view-collections.png" alt=""/>
</figure>