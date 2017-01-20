<h3>TM Search 1.1.0</h3>
<?php if ($project == 'eveprest' ) { ?>
  <div>
    <p style="margin-bottom: 0;">Available in:</p>
    <p style="margin-top: 0;" class="small text-secondary">Fashion, Electronics, Spare Parts, Furniture</p>
  </div>
<?php } ?>
<p>This module is an extended search version that allows you to select a specific category for searching  within its content. You can also change the category after defining the query.  It also provides a possibility to set the additional product information display (description/price/manufacturer, etc.), and define the search results container layout, e.g., you can divide the results into a few sections with the controls (pagination, next/previous/show all). All the module settings are available in main admin panel.</p>
<h4>Installation and Deleting</h4>
<p class="alert alert-warning">
    If you have the 1.0.5 version of this module installed in your prestashop engine, you are not suggested to update it with the current one. First you need to remove the old version of the module to run without errors.
</p>
<p>The module is installed and deleted like any other Prestashop module.</p>
<h4>Module configuration</h4>
<p>After module has been installed you can set it up on the module configuration page.</p>
<figure class="img-polaroid"><img src="img/tmsearch110-1.png" alt="" /></figure>
<ul class="marked-list">
  <li><strong>Enable Ajax Search</strong> - enables live search in a dropdown.</li>
  <li><strong>Enable Instant Search</strong> - enables instant search.</li>
  <li><strong>Minimum query length</strong> - number of symbols to start the result display.</li>
  <li><strong>Number of shown results</strong> - number of products that shows up in the results section (number of products per page for the "pager" or "navigation" mode).</li>
  <li><strong>Display "Show All" button </strong> - displays the 'Show all' button below the results section,
    the click on it displays all found results.</li>
  <li><strong>Display pager</strong> - divides results into pages (depends on the 'Number of shown results' field value) and displays links to them.</li>
  <li><strong>Display navigation</strong> - shows the Previous/Next buttons.</li>
  <li><strong>Position of navigation</strong> - hook(s), to show the navigation (top/both/bottom options are available).</li>
  <li><strong>Highlight query result</strong> - highlights the text that matches search query.</li>
  <li><strong>Display image in Ajax search</strong> - shows product images in the results section.</li>
  <li><strong>Display description in Ajax search</strong> - shows product description in the results section.</li>
  <li><strong>Display prices in Ajax search</strong> - shows product price in the results section.</li>
  <li><strong>Display reference in Ajax search</strong> - shows product reference in the results section.</li>
  <li><strong>Display manufacturer in Ajax search</strong> - shows product manufacturer in the results section.</li>
  <li><strong>Display suppliers in Ajax search</strong> - shows product suppliers in the results section.</li>
</ul>
<p class="alert alert-warning"><span>Some parameters might differ depending on the combination used.</span></p>