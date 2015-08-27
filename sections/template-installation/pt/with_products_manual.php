<h3>Instalação manual com dados de amostra</h3>

<p>Depois de instalar os <strong>dados de amostra,</strong> você terá uma loja
    PrestaShop igual à demonstração do seu template. Ela terá os mesmos produtos de
    amostra, configurações de loja e módulos, etc.</p>

<p class="alert alert-danger">Não use dados de amostra em sites que estão no ar! Isso vai apagar todos os produtos e
    configurações da sua loja.</p>

<p class="alert alert-warning">Cartifique-se que sua versão da engine do PrestaShop é compatível com a especificada
    na aba de detalhes técnicos (Technical Details), mencionada como PrestaShop Engine: 1.X.X.X.
    <br/>Também certifique-se que o prefixo do seu banco de dados é <strong>ps_</strong>. Apenas instale os dados de
    amostra se sua loja da Prestashop é a mesma especificada.</p>

<h4>Enviar arquivos do tema</h4>

<p>Para enviar o tema para o seu servidor:</p>
<ol class="index-list">
    <li>Em primeiro lugar, abra o pacote do template.</li>
    <li>Vá para a pasta <strong>/theme/manual_install/</strong>.</li>
    <li>Envie as pastas <strong>/img/</strong>, <strong>/modules/</strong> e <strong>/themes/</strong>
        para dentro do diretório raiz do PrestaShop.
    </li>
</ol>
<p class="alert alert-info">Você pode ver um tutorial em vídeo com mais detalhes em <a target="_blank"
                                                              href="/help/how-upload-files-server-2.html">how
        to upload files to server using FTP manager</a> e em <a
        href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html"
        target="_blank">how to upload files to a server using cPanel (WebHost Manager,
        WHM)</a>.</p>

<h4>Instalar dados de amostra</h4>

<p> Os dados de amostra vêm na forma de um arquivo SQL. Está em <strong>theme/manual_install/</strong>
    e se chama <strong>dump.sql</strong>.</p>

<p>Esse arquivo de dump pode ser instalado através da ferramenta phpMyAdmin ou alguma
    outra ferramenta de gerenciamento de banco de dados no seu painel de controle de
    hospedagem. Esse tutorial detalhado pode te ajudar: <a target="_blank"
                                                           href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html">how
        to install SQL files</a>.</p>

<p class="alert alert-warning">Antes de prosseguir, faça um backup do seu banco de dados. Aqui tem um tutorial de
    como fazer isso: <a
        target="_blank" href="/help/phpmyadmin-how-to-backup-a-database.html">how to
        back up a database</a>.</p>


<p class="alert alert-danger">Certifique-se de que sua versão do PrestaShop é igual aos requisitos de template. Do
    contrário, o banco de dados será comprometido.</p>

<p>Quando terminar de instalar o arquivo dump.sql, você vai precisar ativar o tema.</p>

<p>Do painel administrativo do PrestaShop, vá para <strong>Preferências (Preferences) >
        Temas (Themes)</strong>, escolha seu tema na seção <strong>Temas (Themes)</strong> e
    clique em <strong>Salvar (Save)</strong>.</p>

<h4>Adicionar idioma à loja online. </h4>

<p>Depois de instalar o tema com suporte à vários idiomas, você poderá adicionar todos
    os idiomas que vieram junto. (Inglês, Francês, Espanhol, Alemão, Russo) à
    plataforma. It can be done this way: </p>

<p>Vá para <strong>'Localização (Localization) > Tradução (Translations)'</strong> no
    painel administrativo, encontre <strong>'ADICIONAR/ATUALIZAR IDIOMA (ADD/UPDATE A
        LANGUAGE)'</strong> e adicione idiomas escolhendo no menu de escolha
    <small>(1)</small>
    e clicando no botão <strong>'Adicionar ou atualizar um idioma (Add or update a
        language)'</strong> button
    <small>(2)</small>
    .
</p>
<figure class="img-polaroid">
    <img alt="" src="img/01-language-update.png"/>
</figure>

<p>Se não quiser ter algum idioma, você pode apagá-los
    <small>(2)</small>
    ou desativá-los
    <small>(1)</small>
    no menu <strong>'Localização (Localization) > Tradução (Translations)'</strong>
    menu.
</p>
<figure class="img-polaroid">
    <img alt="" src="img/02-language-update.png"/>
</figure>