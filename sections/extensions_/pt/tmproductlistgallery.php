<h3>TM Galeria Lista de Produtos (Product List Gallery)</h3>

<p>O módulo mostra uma galeria de todas as imagens de produtos na página de listagem de
    produtos.</p>
<h5>Instalação e Remoção</h5>

<p>O módulo pode ser instalado e apagado como qualquer outro módulo do PrestaShop</p>
<h5>Configuração do módulo</h5>

<p>O módulo não tem outras configurações.</p>
<h5>Ações adicionais</h5>

<p>Para habilitar a funcionalidade do módulo, inclua a seguinte linha de código:</p>

<p><code>{hook h='displayProductListGallery' product=$product}</code></p>

<p>ao arquivo <strong>product-list.tpl</strong> no diretório raíz do seu tema, após
    fechar a tag <code>&lt;/a&gt;</code> com a classe <code>.product_img_link</code>.
</p>
