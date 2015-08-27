<h3>TM Mega Menú</h3>

<p>El módulo está diseñado para crear menús complejos. El módulo ofrece la posibilidad de mostrar un solo elemento (sin
    submenú), un elemento de menú con un submenú y un elemento de menú con el submenú por medio de una multi-línea y
    bloque de varias columnas. El módulo se puede utilizar en diferentes posiciones, pero mostrará el mismo contenido.
    Puede agregar categorías (con subcategorías), categorías CMS (con subcategorías), fabricantes (uno o la lista),
    proveedores (uno o la lista), tiendas (si se utiliza multistore), enlaces a cualquier producto, bloque de
    información del producto, enlaces personalizados no están limitados en cantidad, bloques personalizados de HTML no
    están limitados en número, y banners. Ver abajo para más detalles.</p>

<h4>TM Mega Menú Fichas</h4>

<p>Las fichas de TM Mega Menú son los elementos básicos que son la parte superior del menú. </p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs.png" alt="">
</figure>

<p>Para crear una nueva pestaña, abra el módulo TM Mega Menú y haga clic en + en la lista de la tabla de las fichas.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add.png" alt="">
</figure>

<p>En el formulario que aparece, rellene los campos obligatorios.</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Escriba el nombre de la ficha (Enter tab name)</dt>
            <dd>el título de la ficha que es obligatorio de rellenar para el idioma por defecto, si no se rellenan
                campos para idiomas adicionales, la ficha recibe el nombre del idioma por defecto. El campo es
                obligatorio.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Activo (Active)</dt>
            <dd>la ficha activar/inactivar.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enlace (Link)</dt>
            <dd>un enlace que se asigna a esa ficha. Puede introducir un enlace personalizado, o elegir entre las
                opciones existentes (categorías, CMS categorías). Si este campo se deja en blanco, el enlace en esta
                ficha estará inactivo.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Orden (Sort order)</dt>
            <dd>ordenar la visualización de las fichas.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Clase Específica (Specific Class)</dt>
            <dd>clase que se añade al elemento para resaltarlo (CSS class).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Introduzca el distintivo de la ficha (Enter tab badge)</dt>
            <dd>se llena en función de multi-idiomas.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Este es el Mega Menú (It is Mega Menu)</dt>
            <dd>dada la ficha de submenú es el Mega Menú.
                <strong>*</strong>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Utilizando el menú simple (Use simple menu)</dt>
            <dd>dada la ficha de submenú es el menú simpe.
                <strong>**</strong>
            </dd>
        </dl>
    </li>
</ul>
<p>
    <strong>*</strong>
    Este es el Mega Menú. Si se selecciona esta opción, habrá un formulario para crear menú complejo (Mega Menú).
</p>

<p>
    <strong>**</strong>
    Utilizando el menú simple. Si se selecciona esta opción, habrá un formulario para crear un menú simple. Se trata de
    un menú que muestra el contenido seleccionado en una sola columna. Si el artículo tiene el contenido integrado, se
    añade la nueva columna.
</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form.png" alt="">
</figure>

<p>El menú complejo consta de filas y columnas en líneas.</p>

<p>La Línea es una parte de la estructura de Mega Menú. Incluye las columnas del menú. La línea existente se puede
    eliminar haciendo clic en el botón apropiado. La línea se elimina con el contenido que incluye. La cantidad de
    líneas no se limita.</p>

<p>La columna es parte de la estructura del Mega Menú, colocado en el interior de las líneas. (La Clase) La anchura de
    la columna no puede ser inferior a 2 y superior a 12. Para mostrar el menú correctamente, la anchura total de las
    columnas no debe ser superior a 12. La anchura (clase) es un tipo de columna Bootstrap, corresponde a los mismos
    valores.</p>

<p>Para crear el menú, haga clic en Agregar línea (Add row)</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row.png" alt="">
</figure>

<p>Apareció en el formulario, haga clic en la opción Agregar Columna (Add column)</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col.png" alt="">
</figure>

<p>En la ventana pop up que aparece, usted debe especificar la clase de la columna (de 2 a 12). La propia columna
    aparece a continuación aquí usted tiene que fijar los parámetros necesarios,</p>

<p>usted puede cambiar la clase de columna, añadir clase CSS, y también el contenido requerido de la lista
    proporcionada. Usted puede añadir / eliminar contenido haciendo doble clic sobre el elemento deseado, o resaltando
    los elementos necesarios y haciendo clic en el botón correspondiente.</p>

<p>El bloque se puede eliminar haciendo clic en el botón Eliminar el bloque de pie de página del bloque.</p>

<p>Mediante la eliminación de la línea, también se eliminan las columnas incluidas.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col-content.png" alt=""/>
</figure>

<p>Para mover el contenido disponible al menú seleccionado, haga doble clic o resalte el contenido deseado y pulse el
    botón correspondiente.</p>


<p>La información del menú inactivo se guarda al cambiar entre los tipos de menú y siempre se puede cambiar el tipo de
    menú.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-simple.png" alt="">
</figure>

<h4>TM Mega Menú HTML</h4>

<p>En esta sección, vamos a explicar cómo crear un bloque personalizado HTML en el Mega Menú.</p>

<p>El módulo tiene una tabla de todos los bloques disponibles a la que puede añadir un nuevo bloque haciendo clic en el
    botón + en la parte superior derecha de la tabla.</p>

<h6>En el formulario que aparece, rellene los campos obligatorios.</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Introduzca el nombre del elemento HTML (Enter HTML item name)</dt>
            <dd>el nombre del bloque HTML, es obligatorio rellenar para el idioma por defecto.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Clase espacífica (Specific class)</dt>
            <dd>la clase CSS del bloque.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Contenido HTML (HTML content)</dt>
            <dd>contenido HTML.</dd>
        </dl>
    </li>
</ul>
<p>Bloque añadido aparecerá en la lista de bloques, igual que en la lista de contenido disponible durante la creación de
    los bloques de menú.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-html.png" alt="">
</figure>

<h4>TM Mega Menú Enlaces</h4>

<p>En esta sección, vamos a explicar cómo crear enlaces personalizados en el Mega Menú.</p>

<p>El módulo tiene una tabla de todos los enlaces disponibles a la que puede añadir un nuevo enlace haciendo clic en el
    botón + en la parte superior derecha de la tabla.</p>

<h6>En el formulario que aparece, rellene los campos obligatorios.</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Introduzca el nombre del enlace (Enter Link name)</dt>
            <dd>el nombre del enlace, es obligatorio rellenar para el idioma por defecto.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Introduzca URL de Enlace (Enter Link URL)</dt>
            <dd>URL de enlace, es obligatorio rellenar para el idioma por defecto.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Clase espacífica (Specific class)</dt>
            <dd>la clase CSS del bloque.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Abrir en una nueva ventana (Open in new window)</dt>
            <dd>abrir el enlace en una nueva ventana.</dd>
        </dl>
    </li>
</ul>
<p>Enlace agregado aparece en la lista de enlaces, igual que la lista de contenidos es disponible durante la creación de
    los bloques de menú.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-links.png" alt="">
</figure>

<h4>TM Mega Menú Banners</h4>

<p>En esta sección, vamos a explicar cómo crear banners en el Mega Menú.</p>

<p>El módulo tiene una tabla de todos los banners disponibles a la que puede añadir un nuevo banner haciendo clic en el
    botón + en la parte superior derecha de la tabla.</p>

<h6>En el formulario que aparece, rellene los campos obligatorios.</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Seleccione el archivo (Select a file)</dt>
            <dd>seleccione el archivo, es obligatorio rellenar para el idioma por defecto.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Introduzca el nombre de Banner (Enter Banner name)</dt>
            <dd>título del banner, es obligatorio rellenar para el idioma por defecto.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Introduzca URL de Enlace (Enter Link URL)</dt>
            <dd>URL de enlace, es obligatorio rellenar para el idioma por defecto.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Clase específica (Specific class)</dt>
            <dd>la clase CSS del bloque.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Abrir en una nueva ventana (Open in new window)</dt>
            <dd>abrir el enlace en una nueva ventana.</dd>
        </dl>
    </li>
</ul>
<p>Banner añadido aparecerá en la lista de banners, igual que la lista de contenidos es disponible durante la creación
    de los bloques de menú.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-banners.png" alt="">
</figure>