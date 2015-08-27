<h3>TM Social Login</h3>

<p>Este módulo lhe permite entrar e registrar usuários com a ajuda de redes sociais como
    Facebook e informações cadastradas no Google.</p>
<h5>Instalar/desinstalar módulo</h5>

<p>Este módulo pode ser instalado/desinstalado como qualquer outro módulo do
    PrestaShop.</p>
<h5>Configurações</h5>

<p>Após instalado, o módulo pode ser configurado na página de configurações do
    módulo.</p>

<p>Para obter os dados necessários para configuração do módulo, você precisa criar
    aplicações correspodentes nos recursos necessários.</p>

<p>Você não precisa usar ambos serviços de login (Google, Facebook) simultâneamente,
    você pode usar apenas um deles.</p>
<h4>Campos do Facebook</h4>
<ol class="index-list">
    <li>ID do seu App.</li>
    <li>Chave secreta (Secret key) do seu App.</li>
</ol>
<h4>Campos do Google</h4>
<ol class="index-list">
    <li>ID do seu App.</li>
    <li>Chave secreta (Secret key) do seu App.</li>
    <li>Caminho de redirecionamento após entrar <strong>(URL da sua
            loja+index.php?fc=module&module=tmsociallogin&controller=googlelogin)</strong>.

    </li>
</ol>

<p class="alert alert-info">Para mais detalhes, siga os links para: <a
        href="https://developers.google.com/console/help/" target="_blank">Google
        App</a> e <a href="https://developers.facebook.com/apps/" target="_blank">Facebook
        App</a>.</p>

<p class="alert alert-warning">
    O caminho de redirecionamento deve coinscindir com o caminho que você indicou na criação do Google App.</p>

<figure class="img-polaroid">
    <img src="img/tmsociallogin-1.png" alt="">
</figure>