<h3>TM Advanced Filter</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponible en:</p>
        <p style="margin-top: 0;" class="small text-secondary">Piezas de repuesto</p>
    </div>
<?php } ?>
<h4>Introducción</h4>
<p>El módulo de filtro avanzado de TM ofrece la oportunidad de implementar una búsqueda rápida del producto necesario
 en función de las características clave. Permite crear filtros con el número ilimitado de criterios de búsqueda,
 que están disponibles en la tienda por defecto o que se crean, al agregar los productos. 
 Los criterios de filtro pueden ser los siguientes: niveles de categorías (anidando), fabricantes, proveedores, atributos, características y más. 
 Además, el módulo tiene las siguientes características: crear filtros conectados, en los que los criterios necesarios sólo están disponibles
 después de seleccionar el parámetro principal (el nivel de anidamiento es ilimitado); Seleccionando la cuadrícula de criterios
 de filtro para el filtro de página superior. Puede seleccionar el tipo de campo de filtro de la disponible, especificar el filtro principal, 
 añadir su nombre, etiqueta y descripción. Todo es fácil de configurar y editar en el panel de administración fácil de usar. 
 Para una mejor velocidad, el módulo utiliza el algoritmo de indexación de productos según los criterios establecidos. 
Se puede insertar fácil y rápidamente en una tienda Prestashop de cualquier tipo.</p>
<h4>Instalación y eliminación del módulo</h4>
<h6>El módulo se instala y suprime como cualquier otro módulo de PrestaShop.</h6>
<p class="alert alert-info"><span>Después de eliminar o reinstalar el módulo, todos los ajustes y filtros del módulo se descartarán.</span></p>
<h4>Configuración/edición del filtro</h4>
<p>Después de instalar el módulo, puede configurarlo en la página de configuración del módulo. 
De forma predeterminada, verá las pestañas con los tipos de filtro disponibles. 
Para empezar a crear un filtro, seleccione una pestaña (1) y pulse el botón 'Crear filtro' (2).</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-1.png" alt=""/></figure>
<p>En la ventana de filtro aparecido, rellene todos los campos necesarios.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-2.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Nombre</strong> - el nombre del filtro. Se mostrará en el frontend como el título del bloque de filtros;
    </li>
    <li><strong>Descripción</strong> - La descripción del filtro. Se mostrará en el frontend junto al título del 
	    bloque de filtros;
    </li>
    <li><strong>Mostrar el contador</strong> - Permite mostrar el número de productos que estarán disponibles después de seleccionar
        parámetro actual. El número se mostrará junto al criterio de búsqueda (entre paréntesis);
    </li>
    <li><strong>Mostrar filtros seleccionados</strong> - Permite visualizar la lista de los criterios de búsqueda seleccionados con
        capacidad de desmarcar cualquiera de ellos;
    </li>
    <li><strong>Mostrar el tipo de Diseño del Filtro</strong> - Seleccionar la rejilla del filtro (disponible sólo para el Filtro
	    Superior);
    </li>
</ul>
<p class="alert alert-info"><span>Tenga en cuenta que no hay campos obligatorios. Si deja todos los campos vacíos, se creará un filtro de una columna sin descripción y título.</span></p>
<h5>Edición del filtro</h5>
<p>Para cambiar la descripción y la configuración del filtro, presione el botón 'Cogwheel' en el menú del filtro.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-3.png" alt=""/></figure>
<p>En el modo de edición, el formulario se ve y funciona como en el modo de configuración.</p>
<p class="alert alert-info"><span>La selección de la cuadrícula del filtro está disponible sólo para 'Filtro superior'.</span></p>
<p class="alert alert-info"><span>Al cambiar la cuadrícula del filtro, todos los elementos se transferirán automáticamente a la primera columna, manteniendo el orden de anidamiento y de visualización (basado en el principio: todos los elementos de la columna anterior con el orden de visualización guardado en el interior).</span></p>
<h5>Eliminación del filtro</h5>
<p>Para cambiar la descripción del filtro o la configuración del filtro, pulse el botón 'Cross' en el menú del filtro</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-31.png" alt=""/></figure>
<p>Y confirmar la eliminación del filtro.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-4.png" alt=""/></figure>
<div class="box-notification">
    <span>Después de eliminar un filtro, todos los datos se perderán permanentemente.</span>
</div>
<h5>Filtrar la indexación</h5>
<p><strong>Indexación</strong> - El proceso de creación de tablas únicas con los datos necesarios para el filtro,
    que se crea para los criterios específicos del filtro. Permiten acelerar drásticamente el trabajo
 	del filtro en el frontend.</p>
<p>El botón correspondiente del menú del filtro se resalta en rojo. Si el botón no está resaltado, 
    el filtro no necesita indexación.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-5.png" alt=""/></figure>
<p class="alert alert-info"><span>El proceso de re-indexación puede tomar algún tiempo, dependiendo del número de productos en la tienda y los criterios de filtro seleccionados.</span></p>
<p class="alert alert-info"><span>Si el filtro requiere re-indexación, no se mostrará en la interfaz.</span></p>
<h5>Creación/edición de elementos de filtro (criterios)</h5>
<p>Para añadir un elemento al filtro, selecciónelo en el panel de elementos disponibles (a la izquierda) y arrástrelo al
    área de la rejilla del filtro (se encenderá después de ser seleccionada.En el ejemplo, la cuadrícula
    tiene 2 columnas)
     .</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-6.png" alt=""/></figure>
<p>En el área resaltada, seleccione la columna y la posición del nuevo elemento y suelte el elemento.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-7.png" alt=""/></figure>
<p>En la ventana de creación de elemento aparecida, suministre todos los datos necesarios:</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-8.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Nombre</strong> - el nombre del elemento de filtro en el frontend. No se mostrará, si deja el
         campo vacío.
    </li>
    <li><strong>Etiqueta</strong> - La etiqueta del elemento de filtro en el frontend. No se mostrará,
         si deja el campo vacío.
    </li>
    <li><strong>Descripción</strong> - La descripción del elemento de filtro en el frontend. No se mostrará
	     si deja el campo vacío.
    </li>
    <li><strong>Filtro principal</strong> - El elemento padre del filtro, después de seleccionar cuál será este elemento
         disponible. El elemento estará siempre disponible si el campo se deja vacío.
    </li>
    <li><strong>Tipo de campo del Filtro</strong> - La forma en que se mostrará el elemento en el frontend. Los siguientes tipos
         están disponibles:
        <ul class="marked-list">
            <li>radio</li>
            <li>seleccionar</li>
            <li>caja</li>
            <li>range-select (sólo para el tipo de campo 'precio')</li>
            <li>range-input (sólo para el tipo de campo 'precio')</li>
        </ul>
    </li>
</ul>
<p class="alert alert-info"><span>Puede cambiar todos los datos y el elemento primario en el modo de edición del filtro.</span></p>
<p class="alert alert-info"><span>Después de editar el elemento, el filtro debe ser re-indexado, que se muestra mediante el botón en el menú del filtro. No vaya para reindexar el filtro después de editar cada elemento, puede hacerlo después de aplicar los cambios a todos los elementos necesarios - al hacerlo, ahorrará su tiempo.</span></p>
<p>Si hay un árbol de filtros conectados, puede agregar el nuevo elemento como un relacionado con este árbol.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-10.png" alt=""/></figure>
<h5>Edición del elemento de filtro</h5>
<p>Para editar un elemento de filtro, presione el botón 'Cogwheel' (1) en la esquina superior derecha del filtro.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-9.png" alt=""/></figure>
<h5>Clasificación (orden de visualización de los elementos del filtro)</h5>
<p>De forma predeterminada, los elementos nuevos se muestran después del elemento en el orden en que los ha agregado. Si el filtro se agrega
    al árbol, se mostrará después de los elementos existentes en el árbol.</p>
<p>Para mover los elementos dentro del filtro, seleccione el elemento necesario y arrástrelo a la posición deseada. Puede arrastrar elementos en una columna,
    así como a otras columnas de cuadrícula. También puede cambiar la clasificación dentro
    del árbol o mover todo el árbol a la vez.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-11.png" alt=""/></figure>
<p>Después de mover el elemento de una columna a otra, el orden de visualización cambiará automáticamente en todas las columnas.</p>
<h5>Eliminación del elemento de filtro</h5>
<p>Puede eliminar un elemento de filtro de dos maneras:</p>
<ul class="index-list">
    <li><p>arrastrar el elemento de nuevo a la columna de elementos disponibles;</p>
        <figure class="img-polaroid"><img src="img/tmadvancedfilter-12.png" alt=""/></figure>
    </li>
    <li><p>o pulse la tecla de 'Cruz' en la esquina superior derecha del elemento necesario.</p>
        <figure class="img-polaroid"><img src="img/tmadvancedfilter-9.png" alt=""/></figure>
    </li>
</ul>
<p>Independientemente del método elegido, verá una ventana de eliminación de la confirmación.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-13.png" alt=""/></figure></li>
<p class="alert alert-info"><span>Después de eliminar un filtro con elementos anidados, todos los elementos anidados se eliminarán.</span></p>
<p class="alert alert-info"><span>Después de eliminar un elemento, el filtro necesita ser re-indexado, lo que es indicado por el botón en el menú del filtro. No vaya para reindexar el filtro después de editar cada elemento, puede hacerlo después de aplicar los cambios a todos los elementos necesarios - al hacerlo, ahorrará su tiempo.</span></p>
<h5>Reindexación "Smart"</h5>
<p>El módulo proporciona la reindexación automática (inteligente) después de realizar cambios en los productos o después de otros cambios cruciales (fabricante, atributo, etc.). Los campos de tabla se reindexarán, si estos cambios afectan el funcionamiento del filtro.</p>
<p class="alert alert-info"><span>Si, después de hacer cambios, el filtro no los tomó automáticamente, ingrese a la página de ajustes del filtro y reindexelo manualmente.</span></p>
<p class="alert alert-info"><span>El filtro no se reindexará automáticamente después de agregar la moneda, por eso debe ser reindexado manualmente.</span></p>
<h4>FAQ</h4>
<div class="responsive-tabs" data-type="accordion">
    <ul class="resp-tabs-list">
        <li>He creado un filtro, pero no lo veo en el frontend.</li>
        <li>He añadido el nombre y la descripción del filtro, pero no se muestran en el frontend.</li>
        <li>He añadido elementos al filtro, pero dejó de mostrar en el frontend.</li>
        <li>Quiero que el elemento esté disponible sólo después de seleccionar otro elemento.</li>
        <li>Quiero intercambiar elementos.</li>
        <li>Quiero eliminar un elemento padre, pero quiero mantener todos los elementos anidados.
 		  ¿Cómo lograrlo?
        </li>
        <li>Quiero cambiar la cuadrícula del filtro, pero no quiero crear el filtro de nuevo. ¿Que puedo hacer?</li>
        <li>¿Cómo crear un filtro completamente nuevo, si ya hay un filtro para esta posición?</li>
        <li>The filter stopped displaying on the frontend.</li>
        <li>¿Por qué no todos los elementos están activos en el frontend?</li>
    </ul>
    <div class="resp-tabs-container">
        <div>El filtro no se mostrará, si no hay elementos en él, o si no se reindexó. <br>
            Asegúrese de que hay elementos en el filtro y que se ha reindexado.
        </div>
        <div>Tal vez, ha añadido datos no para todos los idiomas. No olvide que el módulo
		     es multilingüe y rellene los datos de cada idioma por separado.
        </div>
        <div>Asegúrese de reindexar el filtro después de hacer cambios.</div>
        <div>Seleccione el elemento, después de seleccionar qué elemento deseado debe estar disponible,
		      y establézcalo como elemento principal.
        </div>
        <div>Simplemente arrastre el elemento hasta el lugar, donde desea localizarlo, 
		     automáticamente tomará la nueva posición y esto no afectará la funcionalidad del filtro.
        </div>
        <div>En el menú para editar el primer elemento anidado, descarte la conexión con el elemento primario que
    	     desea eliminar y, a continuación, elimine el elemento primario. En este caso, no se eliminarán todos los elementos anidados.
        </div>
        <div>Introduzca el menú de edición y seleccione una nueva cuadrícula para el filtro, luego, guardar los cambios.
             Todos los elementos del filtro se mostrarán en la primera columna de la nueva cuadrícula, entonces, usted puede
             moverlos a las posiciones necesarias.
        </div>
        <div>Para crear un nuevo filtro, elimine el existente.</div>
        <div>Asegúrese de que el filtro no necesita indexación.</div>
        <div>Compruebe si el elemento no es un elemento secundario del elemento que actualmente no está activo. Asegúrese de que hay
        	 productos que cumplen los criterios especificados.
        </div>
    </div>
</div>