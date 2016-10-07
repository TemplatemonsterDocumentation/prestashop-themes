<h3>TM Product List Images</h3>
<p>The module displays a gallery of all available product images on the products list
    pages.</p>
<h5>Installation and Deleting</h5>
<p>The module can be installed and deleted like any other PrestaShop module.</p>
<h5>Module configuration</h5>
<p>The module does not have any additional settings.</p>
<h5>Additional actions</h5>
<p>To enable the module functionality you should add the following line of the code:</p>
<p><code>{hook h='displayProductListGallery' product=$product}</code></p>
<p>to the <strong>product-list.tpl</strong> file in the root folder of your theme after
    the closing tag <code>&lt;/a&gt;</code> with the <code>.product_img_link</code>
    class.</p>
