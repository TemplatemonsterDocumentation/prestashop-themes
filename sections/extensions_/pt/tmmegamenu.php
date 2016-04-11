<h3>TM Mega Menu</h3>

<p>Este módulo foi desenvolvido para criar menus de navegação complexos. O módulo permite exibir itens (sem sub-menu),
    itens com sub-menu e itens com sub-menu definindo blocos de várias linhas e várias colunas. O módulo pode ser usado
    em diversos lugares do site, mas vai sempre mostrar o mesmo conteúdo. Posições disponíveis: topo do
    site(displayTop), esquerda(displayLeftColumn), direita(displayRightColumn), rodapé(displayFooter). Voce pode incluir
    categorias (com sub-categorias), categorias de CMS (com sub), fabricantes (um ou uma lista), fornecedores (um ou uma
    lista), lojas (se você usar multilojas), links para qualquer produto, bloco de informações sobre o produto, links
    personalizados sem limitação de quantidade, blocos personalizados de HTML em qualquer quantidade e banners. Veja
    abaixo para mais detalhes.</p>

<h4>TM Mega Menu Tabs</h4>

<p>Abas do "TM Mega Menu" são os itens básicos do menu no topo.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs.png" alt="">
</figure>

<p>Para criar uma nova aba, abra o módulo TM Mega Menu e clique no + na tabela que lista as abas.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add.png" alt="">
</figure>

<h6>No formulário que surge, preencha os campos obrigatórios.</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter tab name</dt>
            <dd>o título da aba que é necessário para o idioma principal, se você não preencher os campos de outros
                idioma, a aba receberá o nome do idioma principal. Este campo é obrigatório
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Active</dt>
            <dd>ativa/desativa a aba.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Link</dt>
            <dd>o link para onde esta aba vai levar. Você pode colocar o endereço que desejar, ou escolher umas das
                opções existentes (categorias, categorias do CMS). Se deixar em branco, o link desta aba ficará inativo.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Sort order</dt>
            <dd>a ordem em que essa aba será mostrada.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Specific Class</dt>
            <dd>a classe usada para enfatizar este item (classe de CSS).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enter tab badge</dt>
            <dd>é preenchido dependendo da opção de multi-idiomas.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>It is Mega Menu</dt>
            <dd>o sub-menu desta aba é um Mega Menu.
                <strong>*</strong>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Use simple menu</dt>
            <dd>o sub-menu desta aba é um menu simples.
                <strong>**</strong>
            </dd>
        </dl>
    </li>
</ul>
<p>
    <strong>*</strong>
    É um Mega Menu. Se você escolher esta opção, vai aparecer um formulário para criar um menu complexo (Mega Menu).
</p>

<p>
    <strong>**</strong>
    É um menu simples. Se esta opção estiver selecionada, você verá um formulário para criar um menu simples. Esse é um
    menu que mostra o conteúdo escolhido em uma coluna só. Se o conteúdo adicionado tiver conteúdo interno, a nova
    coluna será incluída.
</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form.png" alt="">
</figure>

<p>Um menu complexo consiste em linhas e colunas em cada linha.</p>

<p>A linha é parte da estrutura do Mega Menu. Isso inclui as colunas do menu. A linha existente pode ser retirada ao
    clicar no botão apropriado. A linha será retirada com todo o conteúdo dela. Não há limite para quantas linhas podem
    ser criadas.</p>

<p>A coluna é parte da estrutura do Mega Menu, que deve ser sempre inserida dentro de linhas. (A classe) A largura da
    coluna não pode ser menor que 2 ou maior do que 12. Para que o menu fique direito, o total de colunas em uma linha
    não pode exceder 12.A largura (class) é uma coluna do Bootstrap, correspondendo aos mesmos valores.</p>

<p>Para criar o menu, clique no botão "Add row" (adicionar linha).</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row.png" alt="">
</figure>

<p>No formulário que aparece, clique no botão "Add column" (adicionar coluna)</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col.png" alt="">
</figure>

<p>A janela de pop up abre, você precisa especificar a classe da coluna (de 2 a 12). A coluna em si aparece próxima a
    onde você define as configurações necessárias,</p>


<p>aqui você pode mudar a classe da coluna, incluir classes CSS, e também o conteúdo necessário da lista. Você pode
    incluir/retirar conteúdo ao clicar duas vezes no item desejado, ou selecionando o item e clicando no botão
    correspondente.</p>

<p>O bloco pode ser removido clicando no botão "Remove block" no rodapé do bloco.</p>

<p>Ao retirar a linha, as colunas incluídas também são retiradas.</p>


<p>Para mover o conteúdo no menu selecionado, dê duplo-clique ou marque o conteúdo desejado e aperte o botão
    correspondente.</p>


<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col-content.png" alt=""/>
</figure>
<p>Informações do menu inativo são salvas ao trocar entre os tipos de menu e você pode sempre mudar o tipo de menu.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-simple.png" alt="">
</figure>
<h4>TM Mega Menu HTML</h4>

<p>Nesta seção, vamos explicar como criar um bloco personalizado de HTML no Mega Menu.</p>

<p>O módulo tem uma tabela listando todos os blocos disponíveis em que você pode adicionar um novo bloco clicando no
    botão + no topo direito da tabela.</p>

<h6>No formulário que aparecer, preencha os campos obrigatórios.</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter HTML item name</dt>
            <dd>O nome do bloco HTML, é obrigatório para o idioma padrão.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Specific class</dt>
            <dd>classe CSS do bloco.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>HTML content</dt>
            <dd>conteúdo HTML.</dd>
        </dl>
    </li>
</ul>
<p>O bloco adicionado vai aparecer na lista de blocos, assim como na lista de conteúdo disponível ao criar blocos de
    menu.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-html.png" alt="">
</figure>
<h4>TM Mega Menu Links</h4>

<p>Nesta seção vamos te mostrar como criar links personalizados no Mega Menu.</p>

<p>O módulo que tem a tabela listando todos os links disponíveis nos quais você pode incluir um novo link clicando no
    botão + no topo direito da tabela.</p>

<h6>In the form that appears, fill in the required fields.</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter Link name</dt>
            <dd>O nome do link, é obrigatório para o idioma padrão.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Enter Link URL</dt>
            <dd>O endereço do link, é obrigatório para o idioma padrão.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Specific class</dt>
            <dd>classe CSS do bloco.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Open in new window</dt>
            <dd>abre o link em uma nova janela.</dd>
        </dl>
    </li>
</ul>
<p>O link adicionado vai aparecer na lista de links, assim como na lista de conteúdo disponível ao criar blocos de
    menu.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-links.png" alt="">
</figure>
<h4>TM Mega Menu Banners</h4>

<p>Nesta seção vamos te mostrar como criar banners no Mega Menu.</p>

<p>O módulo que tem a tabela listando todos os banners disponíveis nos quais você pode incluir um novo banner clicando
    no botão + no topo direito da tabela.</p>

<h6>No formulário que aparecer, preencha os campos obrigatórios.</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Select a file</dt>
            <dd>escolha um arquivo, é obrigatório ser preenchido para o idioma padrão.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Enter Banner name</dt>
            <dd>título do banner, é obrigatório ser preenchido para o idioma padrão.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Enter Link URL</dt>
            <dd>endereço do link, é obrigatório ser preenchido para o idioma padrão.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Specific class</dt>
            <dd>classe CSS do bloco.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Open in new window</dt>
            <dd>abre o link em uma nova janela.</dd>
        </dl>
    </li>
</ul>
<p>O banner adicionado vai aparecer na lista de banners, assim como na lista de conteúdo disponível ao criar blocos de
    menu.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-banners.png" alt="">
</figure>