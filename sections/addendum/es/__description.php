<h2 class="item7">Addendum </h2><h4>where to get help, support and additional information</h4>
<p>Hemos hecho todo lo posible para que esta documentaci&oacute;n sea lo m&aacute;s clara posible. Sin embargo, si usted tiene alguna dificultad con la plantilla de PrestaShop o alguna sugerencia para mejorar la plantilla o la documentaci&oacute;n, no dude en ponerse en contacto con nuestro equipo de asistencia mediante:</p>
<h4>Ayuda y Soporte</h4>
<ul class="marked-list">
    <li>
        <p>
            <a href="http://chat.template-help.com/" target="_blank">Chat en vivo</a>
        </p>
    </li>
    <li>
        <p>
            <a href="http://support.template-help.com/index.php?/Tickets/Submit" target="_blank">Sistema de ayuda</a>
        </p>
    </li>
</ul><h4>Recursos &uacute;tiles</h4>
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
            <a target="_blank" href="http://addons.prestashop.com/en/">Complementos: m&oacute;dulos, temas, etc.</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://doc.prestashop.com/display/PS16/English+documentation">Documentaci&oacute;n en Ingl&eacute;s</a>
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
            <a target="_blank" href="/help/ecommerce/prestashop/prestashop-tutorials/">Manuales de PrestaShop</a>
        </p>
    </li>
</ul><h4>Carga de datos desde los servidores de Google</h4>

    <p>Algunos pa&iacute;ses tienen problemas de conexi&oacute;n a los servidores de Google. Esto puede provocar problemas al cargar las fuentes de Google y las bibliotecas de Java Script desde el CDN de Google. Para solucionar estos problemas por favor haga lo siguiente: </p>

    <h4>No se pueden cargar las fuentes de Google: </h4>

    <ol class="index-list">
        <li><p>Abra el archivo <strong>\themes\theme1330\header.tpl</strong>.</p></li>
        <li><p>Vaya a la linea: </p>
            <pre>&lt;link rel="stylesheet" href="http{if Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=[---your_web_font_name_here---]" type="text/css" media="all" /&gt; </pre>
        </li>
        <li><p>Sustit&uacute;yula por: </p>
            <pre>&lt;link rel="stylesheet" href="http://fonts.useso.com/css?family=[---your_web_font_name_here---]" type="text/css" media="all" /&gt;</pre>
        </li>
    </ol>
</article>