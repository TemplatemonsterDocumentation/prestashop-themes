<h3>TM Product Zoomer</h3>

<p>Este módulo é uma solução alternativa para o zoom padrão de produto na página de produto. Ele é completamente compatível com o carrosel de miniaturas padrão adicional e mudanças nos atributos dos produtos. Permite escolher entre três opções disponíveis (janela/lente/interna) para o zoom da imagem com as configurações avançadas do plugin. O módulo é baseado no plugin <a href="//igorlino.github.io/elevatezoom-plus/" target="_blank">Elevatezoom Plus</a>.</p>

<h5>Instalação e remoção</h5>
<p>O módulo pode ser instalado e apagado como qualquer outro módulo do Prestashop. Após instalado, o efeito padrão de zoom do produto será desativado automáticamente. Após apagar o módulo, você precisa reverter o efeito padrão manualmente (se desejar) em <strong>Preferences->Products->Ativar JqZoom ao invés de Fancybox na página de produto</strong>.</p>
<h5>Configurações do módulo</h5>
<p>Após o módulo ser instalado você pode configurá-lo na página de configuração de módulos.</p>
<p>Por padrão a página de configuração exibe o grupo de opções <strong>simplificado</strong>.</p>
<figure class="img-polaroid">
    <img src="img/tmproductzoomer-1.png" alt=""/>
</figure>
<ol class="index-list">
    <li><strong>Live mode</strong> - módulo está ativo/inativo </li>
    <li><strong>Fancybox</strong> - se deve exibir a imagem maior em uma Fancybox ao clicar.</li>
    <li><strong>Change image on hover</strong> - define se deve trocar a imagem ao passar o mouse em cima (por padrão, isso ocorre ao clicar)</li>
    <li><strong>Responsive</strong> - permite que o uso de funcionalidade adaptative para exibição em dispositivos móveis</li>
    <li><strong>Zoom Type</strong> - escolha o tipo de imagem maior para se exibir no zoom
        <ul>
            <li><strong>window</strong> - a imagem maior aparece ao lado da imagem principal em uma das posições disponíveis(16)</li>
            <li><strong>lens</strong> - a imagem aparece em uma área redonda, como uma lente de aumento, no sobre da imagem</li>
            <li><strong>inner</strong> - a imagem maior é exibida dentro do do local da imagem principal do produto.</li>
        </ul>
        <div class="alert alert-info">Os dispositivos móveis(&lt; 768) tem o modo "lente" ativado instantâneamente.</div>
    </li>
    <li><strong>Configurações estendidas</strong> - ativa configurações avançadas para usuários mais experientes. Você pode ver o link para a documentação oficial <a href="//igorlino.github.io/elevatezoom-plus/api.htm" target="_blank"> para mais detalhes</a> ao lado da opção.</li>
</ol>
<p>Configuração <strong>extendida</strong> de módulo</p>
<ol class="index-list">
    <li><strong>Scroll Zoom</strong> - altera a quantidade de feito com a roda do mouse.
        (disponível para todos os tipos de zoom)</li>
    <li><strong>Cursor</strong> - o tipo de cursor usado ao passar o mouse em cima da imagem. As seguintes opções estão disponíveis: default, cursor, crosshair. (disponível para todos os tipos de zoom)</li>
    <li><strong>zoom settings</strong> - (disponível para todos os tipo, se 'Scroll Zoom' estiver ativado)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-2.png" alt="" /></figure>
        <ul>
            <li>Zoom Level - a quantidade de zoom inicial</li>
            <li>Min Zoom Level - a quantidade mínima de zoom</li>
            <li>Max Zoom Level - a quantidade máxima de zoom</li>
            <li>Scroll Zoom Increment - quantidade de incremento ao usar a roda do mouse</li>
        </ul>
    </li>
    <li><strong>Easing</strong> - efeito de exibição da imagem com zoom (disponível para todos os tipos de zoom)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-3.png" alt="" /></figure>
        <ul>
            <li>Zoom Easing - efeito ativo/inativo</li>
            <li>Easing Amount - valor de intervalo do efeito</li>
        </ul>
    </li>
    <li><strong>Image Crossfade</strong> - desfoque da imagem principal fora da área de zoom (a lente).
        (disponível para window, lens)</li>
    <li><strong>magnified image window settings</strong> - (disponível para window)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-4.png" alt="" /></figure>
        <ul>
            <li>Zoom Window Width - largura da janela em px</li>
            <li>Zoom Window Height - altura da janela em px</li>
            <li>Zoom Window Offset X - margem da janela no eixo X</li>
            <li>Zoom Window Offset Y - margem da janela no eixo Y</li>
            <li>Zoom Window Position - posição da janela relativa a imagem principal (as posições disponíveis são apresentadas na imagem abaixo deste campo)</li>
            <li>Zoom Window Bg Color - cor de fundo da janela(apenas para imagens transparentes)</li>
            <li>Zoom Window Fade In - efeito de fade ao mostrar a janela</li>
            <li>Zoom Window Fade Out - efeito de fade ao esconder a janela</li>
            <li>Border Size - largura da borda da janela em px</li>
            <li>Border Color - cor da borda da janela</li>
        </ul>
    </li>
    <li><strong>Zoom Lens</strong> - lente de zoom (disponível para window, lens)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-5.png" alt="" /></figure>
        <ul>
            <li>Zoom Lens - ativo/inativo</li>
            <li>Lens Shape - tipo de lente. Pode ter os seguintes valores:: circular/rounded ou squared/rectangular</li>
            <li>Lens Color - cor de fundo da lente</li>
            <li>Lens Opacity - transparência do fundo no interior da lente</li>
            <li>Lens Size - tamanho da lente em px</li>
            <li>Lens Fade In - a velocidade do efeito de aparecimento da lente</li>
            <li>Lens Fade Out - a velocidade do efeito de desaparecimento da lente</li>
            <li>Lens Border - largura da borda da lente</li>
            <li>Lens Border Color - cor da borda da lente</li>
            <li>Contain Lens Zoom - a restrição de corte da lente em relação à caixa da imagem principal</li>
        </ul>
    </li>
    <li><strong>Tint</strong> - efeito na área fora da lente (disponível para window)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-6.png" alt="" /></figure>
        <ul>
            <li>Tint - ativa/desativa efeito</li>
            <li>Tint Color - cor de fundo da área externa da lente</li>
            <li>Tint Opacity - transparência da área externa da lente</li>
            <li>Tint Fade In - velocidade do efeito de aparecimento</li>
            <li>Tint Fade Out - velocidade do efeito de desaparecimento</li>
        </ul>
    </li>
</ol>

<div class="alert alert-info">Se você mudar o tipo de zoom, opções avançadas muda de acordo para mostrar apenas os parâmetros referentes ao tipo escolhido.</div>
<div class="alert alert-warning">Cuidado ao alterar as configurações estendidas. Se definidas incorretamente, o efeito ficará feito.</div>