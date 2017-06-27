<h2 class="item7">Addendum</h2>
<h5>Dónde obtener ayuda, soporte e información adicional</h5>
<p>Hicimos todo lo posible para que esta documentación fuera lo más clara posible. Sin embargo, si tiene alguna dificultad con la plantilla de PrestaShop o alguna sugerencia para mejorar la plantilla o la documentación, no dude en ponerse en contacto con nuestro equipo de asistencia a través de:</p>
<h4>Ayuda y Apoyo</h4>
<ul class="marked-list">
    <li>
        <p>
            <a href="http://chat.template-help.com/" target="_blank">Chat en vivo</a>
        </p>
    </li>
    <li>
        <p>
            <a href="http://support.template-help.com/index.php?/Tickets/Submit" target="_blank">Sistema de Tickets de ayuda</a>
        </p>
    </li>
</ul><h4>Recursos útiles</h4>
<ul class="marked-list">
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/">Sitio oficial de PrestaShop</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/en/downloads/">Descargas</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://addons.prestashop.com/en/">Addons: módulos, temas, etc.</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://doc.prestashop.com/display/PS16/English+documentation">Documentación en
                Inglés</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/forums/">Foro</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/wiki/">Wiki</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="/help/ecommerce/prestashop/prestashop-tutorials/">PrestaShop tutoriales</a>
        </p>
    </li>
</ul>
<h4>Carga de datos de los servidores de Google</h4>
<p>Algunos países tienen problemas para conectarse a los servidores de Google. Esto puede causar problemas al cargar fuentes de Google y bibliotecas de Java Script de Google CDN. Para resolver estos problemas, haga lo siguiente: </p>
<h4>No se pueden cargar Fuentes de Google:</h4>
<ol class="index-list">
    <li><p>Abra el archivo <strong>\themes\theme****\header.tpl</strong> .</p></li>
    <li><p>Localice la línea: </p>
        <code>&lt;link rel="stylesheet" href="http{if
            Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=[---your_web_font_name_here---]"
            type="text/css" media="all" /&gt; </code>
    </li>
    <li><p>Sustitúyalo por la siguiente: </p>
        <code>&lt;link rel="stylesheet" href="http://fonts.useso.com/css?family=[---your_web_font_name_here---]"
            type="text/css" media="all" /&gt;</code>
    </li>
</ol>
<h4>Validación del W3C </h4>
<p>Tanto el marcado HTML como los estilos CSS utilizados en nuestras plantillas son semánticamente correctos y válidos. Sin embargo, algunos errores W3C todavía puede tener lugar. Hacer que el código 100% W3C válido elimine el uso de las tecnologías de sitios web modernos como las funciones CSS3 y el marcado HTML5. Nuestro objetivo es ofrecer una experiencia rica de usuario con plantillas de alta calidad y a veces tenemos que romper algunas reglas.</p>
