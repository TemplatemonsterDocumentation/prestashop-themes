<h3>TM Mega Menu</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Available in:</p>
        <p style="margin-top: 0;" class="small text-secondary">Fashion, Electronics, Spare Parts, Furniture</p>
    </div>
<?php } ?>
<p>El módulo está diseñado para crear menús complejos. El módulo permite mostrar un elemento (sin submenú),
   un elemento de menú con un submenú y un elemento de menú con submenú mediante un bloque de varias filas y varias columnas. El módulo se puede utilizar
   en diferentes posiciones, pero mostrará el mismo contenido. Posiciones disponibles: top (displayTop), left (displayLeftColumn), right (displayRightColumn),
   footer (displayFooter). Puede agregar categorías (con subcategorías), categorías de CMS (con subcategorías), fabricantes (uno o una lista), proveedores
   (uno o una lista), almacenes (si se utilizan varias tiendas), enlaces a cualquier producto, bloque de información sobre el producto , Enlaces personalizados
   (no limitados en cantidad), bloques HTML personalizados (no limitados en número) y banners. Vea más abajo para más detalles.</p>
<h4>TM Mega Menu Tabs</h4>
<p>Las pestañas de TM Mega Menu son los elementos básicos que son la parte del menú superior.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs.png" alt=""/>
</figure>
<p>Para crear una nueva pestaña, abra el módulo TM Mega Menu y haga clic en '+' en la Lista de pestañas de tabla.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add.png" alt=""/>
</figure>
<h6>En el formulario que aparece, rellene los campos obligatorios.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Introducir nombre de pestaña</dt>
            <dd>El título de la pestaña que es obligatorio rellenar para el idioma predeterminado, si los campos de
     			idiomas adicionales no se rellenan, la pestaña toma su nombre del idioma predeterminado.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Activo</dt>
            <dd>Ficha activa/inactiva.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enlace</dt>
            <dd>Un enlace que está asignado a esta pestaña. Puede ingresar un vínculo personalizado o elegir entre las opciones existentes 
			   (categorías, categorías de CMS). Si deja el campo en blanco, el enlace de esta pestaña está inactivo.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Orden de clasificación</dt>
            <dd>el orden de las pestañas que se mostrarán.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Clase específica</dt>
            <dd>la clase que se añade para enfatizar el elemento (clase CSS).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Insertar pestaña</dt>
            <dd>se rellena dependiendo de multi-idiomas.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Es Mega Menu</dt>
            <dd>el submenú secundario es un Menú Mega.
                <strong>*</strong>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Utilice un menú sencillo</dt>
            <dd>el submenú de la pestañaes un menú simple.
                <strong>**</strong>
            </dd>
        </dl>
    </li>
</ul>
<p>
    <strong>*</strong>
    Es menú Mega. Si esta opción está seleccionada, habrá un formulario para crear un menú complejo (Menú Mega).
</p>
<p>
    <strong>**</strong>
   Utilice el menú simple. Si esta opción está seleccionada, habrá un formulario para crear un menú simple. Este es un menú que muestra
   el contenido seleccionado en una sola columna. Si el menú tiene contenido incrustado, se agrega la nueva columna.
</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form.png" alt=""/>
</figure>
<p>El menú complejo consta de filas y columnas en filas.</p>
<p><strong>Row es una parte de la estructura Mega Menu.</strong> Incluye las columnas del menú. La fila existente
    se puede quitar 
	haciendo clic en el botón correspondiente. La fila se eliminará con el contenido
	que incluye. La cantidad de filas no está
	limitada.</p>
<p><strong>La Columna es parte de la estructura Mega Menu,</strong> Que se coloca dentro de las filas. (La clase) El ancho
    de la columna 
	no puede ser inferior a 2 y superior a 12. 
	Para que el menú se muestre correctamente, el ancho total de la columna no puede exceder de 12. El ancho (clase) 
	es un tipo de columna Bootstrap, Mismos valores.</p>
<p>Para crear el menú, haga clic en el botón <strong>'Añadir fila'</strong>. </p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row.png" alt=""/>
</figure>
<p>En el formulario aparecido, haga clic en el botón <strong>'Añadir columna'</strong>.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col.png" alt=""/>
</figure>
<p>En la ventana emergente es necesario especificar la clase de columna (de 2 a 12). Aparecerá la siguiente columna donde 
     necesitará establecer la configuración necesaria.</p>
<p>Aquí puede cambiar la clase de columna, la clase CSS y el contenido de la lista proporcionada. Puede
   agregar/eliminar contenido haciendo doble clic en el elemento o resaltando los elementos y haciendo clic en 
   el botón correspondiente.</p>
<p>El bloque se puede quitar haciendo clic <strong>'Eliminar bloque'</strong> botón en el pie del bloque.</p>
<p>Al eliminar la fila, las columnas incluidas también se eliminan.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col-content.png" alt=""/>
</figure>
<p>Para mover el contenido disponible en el menú seleccionado, haga doble clic o resalte el contenido deseado y
     presione el botón correspondiente.</p>
<p>La información del menú inactivo se guarda al cambiar entre los tipos de menú y siempre se puede cambiar el tipo de
     menú.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-simple.png" alt=""/>
</figure>
<h4>TM Mega Menu HTML</h4>
<p>En esta sección explicaremos cómo crear un bloque HTML personalizado en el menú Mega.</p>
<p>El módulo tiene una tabla con todos los bloques disponibles. También puede añadir un bloque nuevo haciendo clic en el botón '+'
     en la parte superior derecha de la tabla.</p>
<h6>En el formulario que aparece, rellene los campos obligatorios.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Introduzca el nombre del elemento HTML</dt>
            <dd>Nombre del bloque HTML, es obligatorio rellenar el idioma predeterminado.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Clase específica</dt>
            <dd>Clase CSS del bloque.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Contenido HTML</dt>
            <dd>Contenido HTML.</dd>
        </dl>
    </li>
</ul>
<p>El bloque añadido aparecerá en la lista de bloques, así como en la lista de contenido disponible al crear bloques
   de menú.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-html.png" alt=""/>
</figure>
<h4>Enlaces de TM Mega Menu</h4>
<p>En esta sección mostraremos cómo crear enlaces personalizados en el menú Mega.</p>
<p>El módulo tiene una tabla con todos los enlaces disponibles. También puede agregar un nuevo vínculo haciendo clic en el botón '+'
   en la parte superior derecha de la tabla.</p>
<h6>En el formulario que aparece, rellene los campos obligatorios.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Introduzca el nombre del enlace</dt>
            <dd>nombre del enlace, es obligatorio rellenar el idioma predeterminado.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Introduce la URL del enlace</dt>
            <dd>URL del enlace, es obligatorio rellenar el idioma predeterminado.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Clase específica</dt>
            <dd>clase CSS del bloque.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Abrir en Nueva ventana</dt>
            <dd>abrir enlace en una nueva ventana.</dd>
        </dl>
    </li>
</ul>
<p>El enlace agregado aparecerá en la lista de enlaces, así como en la lista de contenido disponible al crear bloques
   de menú.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-links.png" alt=""/>
</figure>
<h4>TM Mega Menu Banners</h4>
<p>En esta sección explicaremos cómo crear banners en el menú Mega.</p>
<p>El módulo tiene una tabla con todos los banners disponibles. También puede agregar un nuevo banner haciendo clic en el botón '+' 
   en la parte superior derecha de la tabla.</p>
<h6>En el formulario que aparece, rellene los campos obligatorios.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Seleccione un archivo</dt>
            <dd>seleccionar un archivo, es obligatorio rellenar el idioma predeterminado.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Introduzca el nombre de la bandera</dt>
            <dd>título del banner, es obligatorio rellenar el idioma por defecto.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Introduce la URL del enlace</dt>
            <dd>URL del enlace, es obligatorio rellenar el idioma predeterminado.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Clase específica</dt>
            <dd>clase CSS del bloque.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Abrir en Nueva ventana</dt>
            <dd>abrir enlace en una nueva ventana.</dd>
        </dl>
    </li>
</ul>
<p>El banner añadido aparecerá en la lista de banners, así como en la lista de contenido disponible mientras se crean bloques
   de menú.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-banners.png" alt=""/>
</figure>