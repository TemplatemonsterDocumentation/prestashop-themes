<h3>TM Media Parallax 2.0</h3>
<p>Este módulo foi desenvolvido para permitir a adição do efeito parallax aos elementos do DOM da página. Isso permite que você crie um parallax multi-camadas. Também permite criar um fundo de vídeo (você pode enviar do seu computador para o server) ou incluir um vídeo do YouTube.</p>
<h4 id="tmmediaparallax-mainpanel">Painel principal do TM Media Parallax</h4>
<p>Painel principal do módulo que permite que você inlcua, altere ou apague itens do parallax. </p>
<figure class="img-polaroid"><img class="presta_scr2" src="img/main-panel.jpg" alt="" /></figure>
<h4 id="tmmediaparallax-add">Criando um novo item de parallax</h4>
<p>Para criar um novo item de parallax, clique no ícone de 'mais'(1), no canto superior direito do painel principal.</p>
<figure class="img-polaroid"><img class="presta_scr2" src="img/main-panel-add-item.jpg" alt="" /></figure>
<p>Então você verá o seguinte formulário.</p>
<figure class="img-polaroid"><img class="presta_scr2" src="img/add-item.jpg" alt="" /></figure>
<h4>Opções do formulário para incluir itens no parallax</h4>
<ul class="index-list">
    <li>Selector - seletor CSS do item com efeito parallax. Por exemplo, '#header .nav'</li>
    <li>Item status - situação do item (o parallax não será exibido se estiver inativo)</li>
    <li>Speed - valor entre 0 e 2, que define a velocidade principal do bloco de parallax</li>
    <li>Offset - camada principal no eixo Y</li>
    <li>Inverse - direção do parallax</li>
    <li>Fade - esta opção permite configurar o efeito de fade-out ao rolar a página</li>
    <li>Forced full width - largura a ser forçada no bloco de parallax</li>
</ul>
Clique em 'Save' após preencher os campos obrigatórios.
<h4 id="layouts-list">Lista de camadas de parallax.</h4>
<p>Para ver a lista de camadas de parallax, clique em 'View'(1) próximo ao item do parallax principal.</p>
<figure class="img-polaroid"><img class="presta_scr2" src="img/main-panel-view.jpg" alt="" /></figure>
<p>Você então verá uma tabela, na qual as camadas são exibidas ao ser incluídas.</p>
<figure class="img-polaroid"><img class="presta_scr2" src="img/layouts-panel.jpg" alt="" /></figure>
<h4 id="layout-list">Parallax layers list.</h4>
<p>Para criar uma nova camada de parallax, clique no ícone de 'mais'(1) no canto superior direito do painel de camadas.</p>
<figure class="img-polaroid"><img class="presta_scr2" src="img/layouts-panel-add.jpg" alt="" /></figure>
<p>Então você verá o seguinte formulário.</p>
<figure class="img-polaroid"><img class="presta_scr2" src="img/add-layout.jpg" alt="" /></figure>
Clique em 'Save' após preencher os campos obrigatórios.
<h4 id="layouts-type">Tipos de camadas do parallax e seus campos</h4>
<ul class="index-list">
    <li>Image-background - imagem usada como fundo do parallax
        <ul class="marked-list">
            <li>Item status - situação do item (o parallax não será exibido se estiver inativo)</li>
            <li>Layout speed - digito entre 0 e 2, que define a velocidade do bloco</li>
            <li>Offset - identação da camada principal no eixo Y</li>
            <li>Inverse - direção do parallax</li>
            <li>Fade - esta opção permite controlar o efeito de fade-out no bloco ao rolar a página</li>
            <li>Image - link to an image, to which parallax effect will be applied</li>
            <li>Sort order - posição do layout, relativo ao resto dos itens</li>
        </ul>
    </li>
    <li>Video-background - vídeo usado como fundo do parallax
        <ul class="marked-list">
            <li>Item status - situação do item (o parallax não será exibido se estiver inativo)</li>
            <li>Layout speed - digito entre 0 e 2, que define a velocidade do bloco</li>
            <li>Offset - identação da camada principal no eixo Y</li>
            <li>Inverse - direção do parallax</li>
            <li>Fade - esta opção permite controlar o efeito de fade-out no bloco ao rolar a página</li>
            <li>Image - link para uma imagem adicional</li>
            <li>Video parallax mp4 - vídeo em formato mp4</li>
            <li>Video parallax webm - vídeo em formato webm</li>
            <li>Sort order - posição do layout, relativo ao resto dos itens</li>
        </ul>
    </li>
    <li>Text - camada de texto com a posição definida por CSS
        <ul class="marked-list">
            <li>Item status - situação do item (o parallax não será exibido se estiver inativo)</li>
            <li>Layout speed - digito entre 0 e 2, que define a velocidade do bloco</li>
            <li>Offset - identação da camada principal no eixo Y</li>
            <li>Inverse - direção do parallax</li>
            <li>Fade - esta opção permite controlar o efeito de fade-out no bloco ao rolar a página</li>
            <li>Content - conteúdo da camada</li>
            <li>Specific class - classe personalizada de CSS para esta camada</li>
            <li>Sort order - posição do layout, relativo ao resto dos itens</li>
        </ul>
    </li>
    <li>Youtube-background - Vídeo do YouTube usado como fundo do parallax
        <ul class="marked-list">
            <li>Item status - situação do item (o parallax não será exibido se estiver inativo)</li>
            <li>Layout speed - digito entre 0 e 2, que define a velocidade do bloco</li>
            <li>Offset - identação da camada principal no eixo Y</li>
            <li>Inverse - direção do parallax</li>
            <li>Fade - esta opção permite controlar o efeito de fade-out no bloco ao rolar a página</li>
            <li>Video id - o identificador do vídeo no YouTube</li>
            <li>Sort order - posição do layout, relativo ao resto dos itens</li>
        </ul>
    </li>
    <li>Image - imagem da camada com posição definida por CSS
        <ul class="marked-list">
            <li>Item status - situação do item (o parallax não será exibido se estiver inativo)</li>
            <li>Layout speed - digito entre 0 e 2, que define a velocidade do bloco</li>
            <li>Offset - identação da camada principal no eixo Y</li>
            <li>Inverse - direção do parallax</li>
            <li>Fade - esta opção permite controlar o efeito de fade-out no bloco ao rolar a página</li>
            <li>Image - link para uma imagem que terá o efeito parallax aplicado nela</li>
            <li>Specific class - classe personalizada de CSS para esta camada</li>
            <li>Sort order - posição do layout, relativo ao resto dos itens</li>
        </ul>
    </li>
</ul>
<h4 id="file-manager">Enviando vídeos e imagens para o servidor</h4>
<p>Para enviar um vídeo ou uma imagem para o servidor através do Gerenciador de Arquivos (File Manager), primeiro você precisa clicar no ícone de 'arquivo'(1) próximo ao campo.</p>
<figure class="img-polaroid"><img class="presta_scr2" src="img/upload-file.jpg" alt="" /></figure>
<p>Na janela seguinte, na linha 'actions' - ou ações, escolha 'upload'(2)</p>
<figure class="img-polaroid"><img class="presta_scr2" src="img/upload-file-2.jpg" alt="" /></figure>
<p>Então você verá mais uma janela pop-up, para enviar uma imagem ou vídeo.</p>
<h4 id="layout-info">Cuidados e recomendações</h4>
<ul class="index-list">
    <li>Dispositivos móveis(smartphones, tablets) têm o efeito parallax desativado por padrão, a imagem de fundo do bloco mais ao topo é usada como fundo da página.</li>
    <li>Forçar a largura dos blocos de parallax afeta o carregamento da página mais do que manter o bloco em largura completa</li>
    <li>Quanto menor o tamanho do vídeo enviado, melhor.</li>
</ul>