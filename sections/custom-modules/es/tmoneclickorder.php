<h3>TM One Click Order</h3>
<?php if ($project == 'kansysis' ) { ?>
    <div>
        <p class="small text-secondary">Si va a utilizar este módulo, después de la instalación de datos de muestra, encuentre este módulo en la Lista de módulos y haga clic en el botón 'Instalar' (1) y luego en 'Restablecer' (2).</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-20.png" alt="">
        </figure>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-21.png" alt="">
        </figure>
    </div>
    <hr style="margin-top: 30px;">
<?php } ?>

<p>Módulo se utiliza para hacer el proceso de hacer una orden mucho más rápido y más fácil de lo que era antes.<br>
    Simplifica el procedimiento de cinco pasos a uno y lo hace más atractivo para los clientes que quieren ahorrar
    tiempo mientras hacen un pedido.<br>
    Mediante esta función puede obtener más compras espontáneas que tendrán un impacto positivo en su negocio.
</p>
<h4>Instalación</h4>
<p>Vaya a Módulos y Configuración -> Módulos y Ajustes (1) en su panel de administración y encuentre el módulo 
    TM One Click Order (2). A continuación, haga clic en el botón "Instalar" (3).</p>
<figure class="img-polaroid">
    <img src="img/tmoneclick-1.png" alt=""/>
</figure>
<h4>Configuración del módulo</h4>
<p>Una vez que el módulo se haya instalado correctamente, se abrirá la página "Configurar" con la configuración del módulo.<br>
    También verá el nuevo elemento de menú 'Pedidos rápidos' (1) y aparecerá un nuevo icono en el panel de navegación (2).
</p>
<figure class="img-polaroid">
    <img src="img/tmoneclick-2.png" alt=""/>
</figure>
<p>Los ajustes se dividen en tres pestañas: Preordenar plantilla (1), Preordenar mensaje de éxito (2) y Configuraciones (3).</p>
<figure class="img-polaroid">
    <img src="img/tmoneclick-3.png" alt=""/>
</figure>
<h5>Plantilla de pedido previo</h5>
<ul class="index-list-type-2">
    <li><p>Aquí puede añadir un nuevo campo pulsando el botón correspondiente (1):</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-4.png" alt=""/>
        </figure>
        <p>Elija las opciones para el nuevo campo y haga clic en el botón "Guardar" (1):</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-5.png" alt=""/>
        </figure>
        <ul class="marked-list">
            <li><strong>Tipo</strong> - elija el tipo de campo.</li>
            <li><strong>Clase específica</strong> - agregue la clase personalizada para el campo actual.</li>
            <li><strong>Nombre</strong> - nombre del campo.</li>
            <li><strong>Descripción</strong> - descripción del campo; Aparece debajo de la entrada.</li>
        </ul>
    </li>
    <li>
        <p>Editar el campo existente.</p>

        <figure class="img-polaroid">
            <img src="img/tmoneclick-6.png" alt=""/>
        </figure>
        <p>Haga clic en el campo que desea editar. Los ajustes son los mismos que para añadir un nuevo campo.</p>
    </li>
    <li>
        <p>Elimine los campos del formulario.<br>
        Haga clic en el botón 'Eliminar' (1) en la esquina superior derecha del campo.</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-7.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Preorden el mensaje de éxito</h5>
<p>La ficha permite editar el mensaje para la ventana de alerta que aparece después de que el usuario haga clic en el botón 'Enviar' en el formulario de pedido rápido.</p>
<p>Añada el texto/botón que desea mostrar y haga clic en el botón 'Guardar' (1).</p>
<figure class="img-polaroid">
    <img src="img/tmoneclick-8.png" alt=""/>
</figure>
<h5>Ajustes</h5>
<p>La pestaña permite activar y desactivar la opción 'Ajax order'.</p>
<p>Ayuda al administrador a ver los nuevos pedidos rápidos que fueron enviados durante el procesamiento de los pedidos existentes.</p>
<figure class="img-polaroid">
    <img src="img/tmoneclick-9.png" alt=""/>
</figure>
<p>Si la opción está habilitada, aparece la opción adicional 'Ajax order timeout'. <br>
    El valor se establece en milisegundos y significa el período de tiempo entre cada comprobación para nuevos pedidos rápidos.
</p>
<figure class="img-polaroid">
    <img src="img/tmoneclick-10.png" alt=""/>
</figure>
<p>Esta opción ayuda a abrir nuevos preordenadores sin recargar la página. Para verlos en la lista de pedidos rápidos, haga clic en el enlace "Cargar nuevos pedidos" (1) en el menú Pedidos -> Pedidos rápidos.</p>
<figure class="img-polaroid">
    <img src="img/tmoneclick-11.png" alt=""/>
</figure>
<h4>Procesando pedido</h4>
<p>Vaya a Pedidos -> Pedidos rápidos (1) en su panel de Administración.</p>
<figure class="img-polaroid">
    <img src="img/tmoneclick-12.png" alt=""/>
</figure>
<p>Tiene cuatro pestañas: Nuevo, Creado, Eliminado y Buscar.</p>
<ul class="marked-list">
    <li>
        <p><strong>Nuevo</strong> - nuevos preordenes que han sido presentados por los clientes.</p>
        <p>En la parte izquierda hay un botón para crear un nuevo preorden (1) y una lista de preorder (2).</p>
        <p>En el lado derecho se pueden ver los detalles de la pre-pedido (3) divididos en pestañas (Información de pre-pedido, Cliente, Idiomas y monedas, Carrito, Vales, Direcciones, Envío, Resumen).</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-13.png" alt=""/>
        </figure>
        <p>Si el pedido acaba de ser creada, verá sólo tres de ellos: Información de pre-pedido, Cliente, Idiomas y monedas.</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-14.png" alt=""/>
        </figure>
        <p>Cuando rellene la información sobre el cliente, aparecerán tres pestañas más: Carrito, Vales y Dirección. Cuando se agregue la información de la dirección, se mostrarán las pestañas Envío y Resumen. Las pestañas donde se ha agregado correctamente toda la información requerida, se colorean con verde. Las pestañas de color amarillo requieren algunos detalles más de la orden. Los azules son informativos, se generan automáticamente.<br>
            Cuando aparezca la pestaña Resumen, hay un botón 'Crear el pedido' en la pestaña Resumen (1).</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-15.png" alt=""/>
        </figure>
        <p>Después de hacer clic en él, la orden previa se transferirá de 'Nuevo' a la lista de 'pre-creados' (1).</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-16.png" alt=""/>
        </figure>
        <p>Si necesita eliminar el pedido, hay un letrero de basura en la esquina superior derecha (1).</p>
        <p>Presione y la pre-orden se transferirá a la pestaña "Eliminados".</p>
    </li>
    <li>
        <p><strong>Creado</strong> - preorders que ya han sido procesados por el administrador.</p>
        <p>Elija el orden en el lado izquierdo y haga clic en él para ver la información detallada en el lado derecho.</p>
        <p>También puede hacer clic en el enlace 'Mostrar' para ver la información completa sobre el cliente (1), sobre el pedido (2) y el empleado (3).</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-17.png" alt=""/>
        </figure>
    </li>
    <li>
        <p><strong>Eliminado</strong> - preorders que han sido cancelados.</p>
        <p>El preorden en esta pestaña se puede recuperar haciendo clic en el botón '+' (1). A continuación, se transferirá de nuevo a la pestaña "Nueva".</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-18.png" alt=""/>
        </figure>
    </li>

    <li>
        <p><strong>Buscar</strong> - busqueda de pre-pedidos. Ingrese la búsqueda (por información del cliente, información del empleado, identificador del pedido, identificador de pedido previo); También puede introducir el período de fecha / fecha específico en el que se crearon las preinscripciones.</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-19.png" alt=""/>
        </figure>
    </li>
</ul>
