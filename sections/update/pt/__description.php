<h2 class="item7">Addendum </h2><h4>onde encontrar ajuda, suporte e informações adicionais</h4>
<p>Nos esforçamos para que esta documentação estivesse o mais clara possível. No entanto, se você tiver qualquer dificuldade com o template do PrestaShop ou quaisquer sugestões para melhorar o tema ou a documentação, sinta-se à vontade para entrar com contato com nossa equipe de suporte em:</p>
<h4>Ajuda e suporte</h4>
<ul class="marked-list">
    <li>
        <p>
            <a href="http://chat.template-help.com/" target="_blank">Chat ao vivo</a>
        </p>
    </li>
    <li>
        <p>
            <a href="http://support.template-help.com/index.php?/Tickets/Submit" target="_blank">Sistema de pedidos de suporte</a>
        </p>
    </li>
</ul><h4>Recursos úteis</h4>
<ul class="marked-list">
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/">PrestaShop official site</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/en/downloads/">Downloads</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://addons.prestashop.com/en/">Addons: módulos, temas, etc.</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://doc.prestashop.com/display/PS16/English+documentation">Documentação em Inglês</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/forums/">Fórum</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/wiki/">Wiki</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="/help/ecommerce/prestashop/prestashop-tutorials/">Tutoriais de PrestaShop</a>
        </p>
    </li>
</ul><h4>Carregando dados de servidores do Google</h4>

    <p>Alguns países tem problemas em se conectar aos servidores da Google. Isso pode causar problemas em carregar fontes e bibliotecas Javascript através do Google CDN. Para resolver esses problemas, siga esses passos:</p>

    <h4>Não consigo carregar fontes do Google Fonts: </h4>

    <ol class="index-list">
        <li><p>Abra o arquivo <strong>\themes\theme****\header.tpl</strong>.</p></li>
        <li><p>Ache a linha: </p>
            <pre>&lt;link rel="stylesheet" href="http{if Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=[---nome_da_fonte_aqui---]" type="text/css" media="all" /&gt; </pre>
        </li>
        <li><p>Substitua por: </p>
            <pre>&lt;link rel="stylesheet" href="http://fonts.useso.com/css?family=[---nome_da_fonte_aqui---]" type="text/css" media="all" /&gt;</pre>
        </li>
    </ol>
</article>