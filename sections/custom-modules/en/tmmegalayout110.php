<h3>TM Mega Layout 1.1.0</h3>

<p>This module is designed to allow creating custom layouts (presets) for hooks and displaying them at site instead of
    the default positions. This module advantage is allowing you to create different hook markups and modify them up to
    your needs.</p>

<h4>Functional characteristics and features of the module</h4>
<ul class="index-list">
    <li>
        <p>Requirements:</p>
        <ul class="marked-list">
            <li><p>PrestaShop 1.6+</p></li>
            <li><p>PHP 5.4+</p></li>
        </ul>
    </li>
    <li>
        <p>Features:</p>
        <ul class="marked-list">
            <li><p>Module includes 5 hooks: 'Header', 'Top Column', 'Home', 'Footer' and 'Product Footer'.</p></li>
            <li><p>In case module is not present in the hook, it can't be added to the preset.</p></li>
            <li><p>Module can be displayed in the preset only once, the same as in a hook.</p></li>
            <li><p>Module position in 'Modules and Services -> Positions' section does not affect the preset.</p></li>
            <li><p>The module does not allow you to configure different modules. You cannot set different modules
                    configuration for various presets.</p></li>
        </ul>
    </li>
</ul>
<h6>Module provides you with an option for changing module position and setting up the grid for 3 hooks:
    displayTopColumn, displayHome, displayFooter. Changing the modules position in 'Modules and Services -> Positions'
    section will not affect the modules position in the preset. In case the module was not added to the hook, it can't
    be added to the preset either.</h6>

<h4>Integrating module to the theme</h4>
<p class="alert alert-warning"><span>Without this step your presets will not be displayed at the frontend.</span></p>
<ul class="index-list">
    <li><p>Top column. In order to add custom preset to the topColumn hook, you need to perform the following steps:</p>
        <ul class="marked-list">
            <li>Open the <strong>/themes/your_theme/header.tpl</strong> file for editing.</li>
            <li>Locate the following code
                <pre class="codebox">{hook h="displayTopColumn"}</pre>
            </li>
            <li>And replace it with:
                <pre class="codebox">
{assign var='displayMegaTopColumn' value={hook h='tmMegaLayoutTopColumn'}}
{if $displayMegaTopColumn}
    {hook h='tmMegaLayoutTopColumn'}
{else}
    {capture name='displayTopColumn'}{hook h='displayTopColumn'}{/capture}
    {if $smarty.capture.displayTopColumn}
        &lt;div id="slider_row" class="row"&gt;
            &lt;div id="top_column" class="center_column col-xs-12 col-sm-12">{$smarty.capture.displayTopColumn}&lt;/div&gt;
        &lt;/div&gt;
    {/if}
{/if}</pre>

            </li>
        </ul>
    </li>
    <li><p>Home. In order to add custom preset to the Home hook, you need to perform the following steps:</p>
        <ul class="marked-list">
            <li>Open the <strong>/themes/your_theme/index.tpl</strong> file for editing.</li>
            <li>Locate the following code:
                <pre class="codebox">
{if isset($HOOK_HOME_TAB_CONTENT) && $HOOK_HOME_TAB_CONTENT|trim}
  {if isset($HOOK_HOME_TAB) && $HOOK_HOME_TAB|trim}
    &lt;ul id="home-page-tabs" class="nav nav-tabs clearfix"&gt;
      {$HOOK_HOME_TAB}
    &lt;/ul&gt;
  {/if}
  &lt;div class="tab-content"&gt;{$HOOK_HOME_TAB_CONTENT}&lt;/div&gt;
{/if}
{if isset($HOOK_HOME) && $HOOK_HOME|trim}
  &lt;div class="clearfix"&gt;{$HOOK_HOME}&lt;/div&gt;
{/if}</pre>
            </li>
            <li>And replace it with:
                <pre class="codebox">
{assign var='displayMegaHome' value={hook h='tmMegaLayoutHome'}}
{if $displayMegaHome}
  {hook h='tmMegaLayoutHome'}
{else}
  {if isset($HOOK_HOME_TAB_CONTENT) && $HOOK_HOME_TAB_CONTENT|trim}
    {if isset($HOOK_HOME_TAB) && $HOOK_HOME_TAB|trim}
      &lt;ul id="home-page-tabs" class="nav nav-tabs clearfix"&gt;
        {$HOOK_HOME_TAB}
      &lt;/ul&gt;
    {/if}
    &lt;div class="tab-content"&gt;{$HOOK_HOME_TAB_CONTENT}&lt;/div&gt;
  {/if}
  {if isset($HOOK_HOME) && $HOOK_HOME|trim}
    &lt;div class="clearfix"&gt;{$HOOK_HOME}&lt;/div&gt;
  {/if}
{/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Footer. In order to add custom preset to the Footer hook, you need to perform the following steps:</p>
        <ul class="marked-list">
            <li>Open the <strong>/themes/your_theme/footer.tpl</strong> file for editing.</li>
            <li>Locate the following code:
                <pre class="codebox">
{if isset($HOOK_FOOTER)}
    &lt;div class="footer-container"&gt;
        &lt;footer id="footer"  class="container"&gt;
            &lt;div class="row"&gt;
                {$HOOK_FOOTER}
            &lt;/div&gt;
        &lt;/footer&gt;
    &lt;/div&gt;
{/if}</pre>
            </li>
            <li>And replace it with:
                <pre class="codebox">
{assign var='displayMegaFooter' value={hook h='tmMegaLayoutFooter'}}
{if isset($HOOK_FOOTER) || $displayMegaFooter}
    &lt;div class="footer-container"&gt;
    {if $displayMegaFooter}
         &lt;div id="footer"&gt;
              {$displayMegaFooter}
         &lt;/div&gt;
    {else}
        &lt;div id="footer" class="container"&gt;
            &lt;div class="row"&gt;{$HOOK_FOOTER}&lt;/div&gt;
        &lt;/div&gt;
    {/if}
    &lt;/div&gt;
{/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Header. In order to add custom preset to the Header hook, you need to perform the following steps:</p>
        <ul class="marked-list">
            <li>Open the <strong>/themes/your_theme/header.tpl</strong> file for editing.</li>
            <li>Locate the following code:
                <pre class="codebox">
{capture name='displayNav'}{hook h='displayNav'}{/capture}
{if $smarty.capture.displayNav}
&lt;div class="nav"&gt;
  &lt;div class="container"&gt;
    &lt;div class="row"&gt;
      &lt;nav>{$smarty.capture.displayNav}&lt;/nav&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
{/if}
&lt;div&gt;
  &lt;div class="container"&gt;
   &lt;div class="row"&gt;
    &lt;div id="header_logo"&gt;
      &lt;a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}"&gt;
        &lt;img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/&gt;
      &lt;/a&gt;
    &lt;/div&gt;
    {if isset($HOOK_TOP)}{$HOOK_TOP}{/if}
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</pre>
            </li>
            <li>And replace it with:
                <pre class="codebox">
{assign var='displayMegaHeader' value={hook h='tmMegaLayoutHeader'}}
{if isset($HOOK_TOP) || $displayMegaHeader}
  {if $displayMegaHeader}
    {$displayMegaHeader}
  {else}
    {capture name='displayNav'}{hook h='displayNav'}{/capture}
    {if $smarty.capture.displayNav}
    &lt;div class="nav"&gt;
      &lt;div class="container"&gt;
        &lt;div class="row"&gt;
          &lt;nav>{$smarty.capture.displayNav}&lt;/nav&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    {/if}
    &lt;div&gt;
      &lt;div class="container"&gt;
       &lt;div class="row"&gt;
        &lt;div id="header_logo"&gt;
          &lt;a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}"&gt;
            &lt;img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/&gt;
          &lt;/a&gt;
        &lt;/div&gt;
        {$HOOK_TOP}
       &lt;/div&gt;
     &lt;/div&gt;
    &lt;/div&gt;
  {/if}
{/if}</pre>
            </li>
        </ul>
    </li>

    <li><p>Product footer. In order to add custom preset to the Product footer hook, you need to perform the following
            steps:</p>
        <ul class="marked-list">
            <li>Open the <strong>/themes/your_theme/product.tpl</strong> file for editing.</li>
            <li>Locate the following code:
                <pre class="codebox">
{if isset($HOOK_PRODUCT_FOOTER) && $HOOK_PRODUCT_FOOTER}{$HOOK_PRODUCT_FOOTER}{/if}                                   </pre>
            </li>
            <li>And replace it with:
                <pre class="codebox">
{assign var='displayMegaProductFooter' value={hook h='tmMegaLayoutProductFooter'}}
  {if isset($HOOK_PRODUCT_FOOTER) || $displayMegaFooter}
    {if $displayMegaProductFooter}
      {$displayMegaProductFooter product=$product category=$category}
    {else}
      {$HOOK_PRODUCT_FOOTER}
    {/if}
  {/if}</pre>
            </li>
        </ul>
    </li>
</ul>

<h4>Hooks</h4>
<p>The module has 5 hooks available by default:</p>
<ul class="index-list">
    <li>'Header' is a hook that combines 2 standard hooks: displayNav and displayTop. This hook corresponds to the
        website header.
    </li>
    <li>'Top Column' corresponds to the original displayTopColumn hook. This hook comes right after the Header hook.
    </li>
    <li>'Home' corresponds to the original displayHome hook. This hook is present only on the main page.</li>
    <li>'Footer' corresponds to the original displayFooter hook.</li>
    <li>'Product Footer' corresponds to the original displayFooterProduct hook, which is displayed in product page
        footer.
    </li>
</ul>

<h4>TM Mega Layout Main Panel</h4>
<h4 class="text-secondary">Main Layouts</h4>
<p>The main TM Mega Layout module configuration panel that allows you to add a preset to the required hook and configure
    the preset.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-main-panel.png" alt=""/></figure>

<h5>Adding the preset</h5>
<ul class="index-list">
    <li>
        <p>Press '+ Add Preset' (1) in the needed tab.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>Next, fill in the 'Enter layout name' field in the popup typing the new preset (2) title there and press
            'Save' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>Preset was successfully created, it's listed among the available presets (4) now. Newly created preset is
            selected for editing (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-preset-3.png" alt=""/></figure>
    </li>
</ul>

<h5>Preset activation</h5>
<ul class="index-list">
    <li>
        <p>First of all, select the needed preset from the list (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>Press the 'Use as default' (2) switcher.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>The preset was activated. If you need to display this preset only on some pages, open the dropdown (3) and
            select the pages you need. To apply changes, click outside the list area. A preset that is displayed on all
            pages will be marked with a filled star in the presets list, and the one that is displayed only on some
            pages will be marked with a partially filled star.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-3.png" alt=""/></figure>
    </li>
</ul>

<h5>Removing the preset</h5>
<p class="alert alert-warning"><span>There is no option to restore the preset after removing.</span></p>
<ul class="index-list">
    <li>
        <p>In order to remove the preset, choose the required preset among the list (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Next, press a cart (2) near the preset title. </p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Preset was successfully removed.</p>
    </li>
</ul>

<h5>Renaming the preset</h5>
<ul class="index-list">
    <li>
        <p>In order to rename the preset, choose the required preset among the list (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-rename-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Next, press a pencil icon (2) next to the preset title.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-rename-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Specify the new preset title (3) in a popup and press 'Rename layout' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-rename-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Preset was successfully renamed.</p>
    </li>
</ul>

<h4>Wrapper</h4>
<p>Wrapper has no class by default, it's not a mandatory item.</p>
<h5>Adding the wrapper</h5>
<ul class="index-list">
    <li>
        <p>In order to create a wrapper, press '+ Add wrapper' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wrapper was added (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-wrapper-2.png" alt=""></figure>
    </li>
</ul>

<h5>Adding the custom CSS class to the wrapper</h5>
<p>Adding the custom class will let you create a specific styling for your wrapper by using CSS rules.</p>
<ul class="index-list">
    <li>
        <p>In order to add wrapper class, press the button (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>You'll see a pop-up window, fill in the 'Enter wrapper classes' (2) field there and press a 'Confirm' (3)
            button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Custom class was added successfully.</p>
    </li>
</ul>

<h5>Deleting the wrapper</h5>
<p class="alert alert-warning"><span>Deleting the preset item will also cause all of its child items and their styles removing.</span>
</p>
<ul class="index-list">
    <li>
        <p>In order to remove the wrapper, press the cart button (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wrapper was removed successfully.</p>
    </li>
</ul>

<h5>Styling the wrapper</h5>
<ul class="index-list">
    <li>
        <p>In order to add custom styles to the wrapper, press the 'pencil' (1) icon in the wrapper block.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>In the following pop-up window fill in all the needed fields (you may refer to the documentation 'Styling'
            section), and press 'Save' (2) button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>If all of the fields are filled in correctly, styles will be saved.</p>
    </li>
</ul>

<h4>Row</h4>
<p>Row item from the Bootstrap grid. It's a required item.</p>
<h5>Adding the row</h5>
<ul class="index-list">
    <li>
        <p>In order to insert a new row, press '+ Add row' (1) into the wrapper block, or '+ Add row' (2) in the main
            preset block, or '+ Add row' (3) in the column dropdown list.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>The row was added successfully.</p>
    </li>
</ul>

<h5>Adding custom CSS class to the row</h5>
<p>Custom class adding allows you to create custom row styling using CSS rules.</p>
<ul class="index-list">
    <li>
        <p>In order to add the class to the row, you should press the 'ellipsis' button (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Choose the 'Edit row' (2) in a dropdown list.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>Fill in the 'Enter row classes' (3) field in the pop-up window and press 'Confirm' (4) button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-row-3.png" alt=""></figure>
    </li>
    <li>
        <p>Custom class was added successfully.</p>
    </li>
</ul>

<h5>Deleting the row</h5>
<p class="alert alert-warning">
    <span>Removal of preset item will also cause removal of its child items and their styles.</span></p>
<ul class="index-list">
    <li>
        <p>In order to remove the row, open the menu (the 'ellipsis' icon) in the row block.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Choose 'Delete' (2) option in the dropdown.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>The row was successfully removed.</p>
    </li>
</ul>

<h5>Adding styles to the row</h5>
<ul class="index-list">
    <li>
        <p>In order to add row styles, open the menu (the 'ellipsis' icon) (1) in a row block.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-row-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Press 'Stylize' (2) in the dropdown.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-row-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>You will see the pop-up window, fill in all the needed fields there (you may refer to the documentation
            'Styling' section) and press 'Save' (3) button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-row-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>If all of the fields are filled in correctly, styles will be saved.</p>
    </li>
</ul>

<h4>Column</h4>
<p>It is an item with configurable block width for different dimensions, based on Bootstrap grid.</p>
<h5>Adding the column</h5>
<ul class="index-list">
    <li>
        <p>In order to insert a column into a needed 'row', open the menu (the 'ellipsis' icon) (1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Choose the '+ Add Col' (2) among the list.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Fill in the fields (col-xs*, col-sm*, col-md*, col-lg - bootstrap classes) in the pop-up window and press
            'Confirm' (3) button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>The column was added successfully.</p>
    </li>
</ul>

<h5>Removing the column</h5>
<p class="alert alert-warning">
    <span>Preset item removing will also cause its child items and their styles deleting.</span></p>
<ul class="index-list">
    <li>
        <p>In order to remove the column, open the menu (the 'ellipsis' icon) in a column block (1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-detele-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Press 'Delete' (2) in the list.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-detele-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>The column and all of its child items were removed.</p>
    </li>
</ul>

<h5>Editing the column</h5>
<ul class="index-list">
    <li>
        <p>In order to edit the column, open the menu (the 'ellipsis' icon) (1) in the column block.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Press 'Edit column' (2) in the list.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Fill in the fields (col-xs*, col-sm*, col-md*, col-lg - bootstrap classes) in the pop-up window and press
            'Confirm'.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>The column was successfully edited.</p>
    </li>
</ul>

<h5>Adding styles to the column</h5>
<ul class="index-list">
    <li>
        <p>In order to add column styles, open the menu (the 'ellipsis' icon) (1) in a column block.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-col-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Press 'Stylize' (2) in the list of options.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-col-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>You will see the pop-up window, fill in all the needed fields there (you may refer to the documentation
            'Styling' section) and press 'Save' (3) button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-col-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>If all of the fields are filled in correctly, styles will be saved.</p>
    </li>
</ul>

<h4>Module</h4>
<p>Module assigned to this hook.</p>
<h5>Adding the module</h5>
<p class="alert alert-warning"><span>Be careful when adding modules to the preset, some of the modules are desirable to use if they do not change the visible layout, e.g., 'Data mining for statistics' module.</span>
</p>
<ul class="index-list">
    <li>
        <p>In order to add the module to the preset in a column block, open the menu (the 'ellipsis' icon) (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>Press the '+ Add Module' (2) in the list of options available.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>If needed, you can enter the custom class (3) in the pop-up window and select the module (4), next press
            'Confirm' (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-module-3.png" alt=""></figure>
    </li>
    <li>
        <p>The module was successfully added.</p>
    </li>
    <li>
        <p>In this version of TM Mega Layout you can add 'Homepage tabs' module in Home hook.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout110-add-module-tabs.png" alt=""></figure>
        <p>It can also be customized like all other modules in Mega Layout.</p>
    </li>
</ul>

<h5>Deleting the module</h5>
<p class="alert alert-warning">
    <span>Removal of preset item will also cause removal of its child items and their styles.</span></p>
<ul class="index-list">
    <li>
        <p>In order to remove the module, open the menu (the 'ellipsis' icon) (1) in the module block.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>Press 'Delete' (2) in the list of options available.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>The module is removed.</p>
    </li>
</ul>

<h5>Adding custom class to the module</h5>
<p>Custom class adding allows to create module styling using CSS rules.</p>
<ul class="index-list">
    <li>
        <p>In order to specify custom class for the module, open the menu in the module block (the 'ellipsis' icon)
            (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-module-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Press 'Edit Settings' (2) then.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-module-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Specify custom class (3) in the pop-up window and press 'Confirm' (4) button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-module-add-class-3.png" alt=""></figure>
    </li>
    <li>
        <p>Custom class was added.</p>
    </li>
</ul>

<h5>Logo, Copyright</h5>
<p>Logo and Copyright blocks are edited the same way as modules, except for the fact that Logo can be placed only in
    Header or Footer position, and the Copyright block can be placed only in Footer position.</p>

<h4 class="text-secondary">Product Page</h4>
<h5>Product Info tab</h5>
<h6>By means of this tab you can switch the layouts of product page. It will appear in the admin panel after making some simple actions described below.</h6>
<h5>Creating layout</h5>
<h6>Layouts are created and edited manually.</h6>
<ul class="index-list">
    <li><p>Create folder 'product_pages' in your theme folder.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout110-product-info-3.png" alt=""></figure>
    </li>
    <li>In theme folder find the file 'product.tpl', copy it to the created folder 'product_pages' and rename to 'default.tpl'. To create several layouts -  duplicate this file, rename it (e.g. 'layout_1.tpl', 'layout_2.tpl') and change the structure according to your needs.</li>
    <li>Create file 'config.json' in this folder. Copy the following code into it:
        <pre class="codebox">
{
  "default": {
    "name": "Default",
    "preview": "default.jpg",
    "default": 1
  }
}</pre>
        <ul class="marked-list">
            <li><strong>"default"</strong> - name of .tpl file containing the product page structure.</li>
            <li>"name": <strong>"Default"</strong> - title of product page layout in module settings.
            </li>
            <li>"preview": <strong>"default.jpg"</strong> - preview picture of product page layout in module settings; image should be located in 'product_pages' folder.
            </li>
            <li><p>"default": <strong>1</strong> - set to '1' if the layout should be set as default</p><br>
                <p class="alert small alert-warning">One of the layouts should contain '1' value to be set as default.</p>
            </li>
        </ul>
        <p>This code should be duplicated for each created layout, and contain corresponding values. For example:</p>
        <pre class="codebox">
{
  "default": {
    "name": "Default",
    "preview": "default.jpg",
    "default": 0
  },
  "layout_1": {
    "name": "Layout 1",
    "preview": "layout_1.jpg",
    "default": 0
  },
  "layout_2": {
    "name": "Layout 2",
    "preview": "layout_2.jpg",
    "default": 1
  }
}</pre>
    </li>
    <li>Open the 'product.tpl' file in the theme folder. Delete everything and paste the following code:
        <pre class="codebox">
{include file="$tpl_dir./errors.tpl"}
{if $errors|@count == 0}
  {if isset($megalayoutProductInfoPage) && $megalayoutProductInfoPage}
    {assign var='path' value="./product_pages/`$megalayoutProductInfoPage`"}
    {include file=$path}
  {else}
    {include file='./product_pages/default.tpl'}
  {/if}
{/if}</pre>
    </li>
    <li>To add/edit styles of any product page layout, go to your_theme_folder/css/ and add new folder 'product_pages'. In this folder create file with the layout name and .css extension (e.g. 'default.css', 'layout_1.css', 'layout_2.css'). These files should contain styles of the corresponding product page layout.</li>
    <li>To add scripts to any product page layout, go to your_theme_folder/js/ and add new folder 'product_pages'. In this folder create file with the layout name and .js extension (e.g. 'default.js', 'layout_1.js', 'layout_2.js'). These files should contain scripts of the corresponding product page layout.</li>
</ul>
<h5>Switching layouts</h5>
<p>Select 'Product Page' from the dropdown list (1) and click the 'Product Info' tab (2).</p>
<figure class="img-polaroid"><img src="img/tmmegalayout110-product-info-1.png" alt=""></figure>
<p>In this tab you can switch the layouts of product page. The layout image with the gray border is set as default.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout110-product-info-2.png" alt=""></figure>

<h5>Presets export</h5>
<p>Export tool allows you to export presets for the further import into different shops.</p>
<ul class="index-list">
    <li>
        <p>Navigate to the 'Tools' (1) tab in the main configurations panel.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Choose 'Export' (2) in the form.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>You'll see the list of the existing presets in site hooks.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>In order to preview the preset, press 'Layout preview' (3) button next to the preset you need, in order to
            export, please press 'Export layout' (4) button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-4.png" alt=""></figure>
    </li>
    <li>
        <p>Then you'll be able to download this preset as a zip archive.</p>
    </li>
</ul>

<h5>Preset import</h5>
<p class="alert alert-warning"><span>Import tool accepts only the presets *.zip files that were previously generated with the same module Export tool.</span>
</p>
<ul class="index-list">
    <li>
        <p>In order to import your preset, you should open the <strong>Tools (1)</strong> tab and choose <strong>'Import'
                (2)</strong>.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-import-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>Next, press the <strong>Add file (3)</strong> button and select the zip file of your exported preset. In case
            this archive is the exported preset, you will see this preset preview.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-import-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>If this preset meets your needs, press <strong>'Import' (4)</strong>. The preset will be imported and added
            to the list of available presets.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-import-preset-3.png" alt=""/></figure>
    </li>
</ul>

<h5>Reset</h5>
<p>'Reset' reverts all the presets to initial state (to the way they came with the template), and discards all the
    created presets.</p>
<p class="alert alert-warning"><span>Attention! After reverting presets to default state, all the custom presets will be discarded!</span>
</p>
<ul class="index-list">
    <li>
        <p>To reset presets, navigate to the 'Tools' (1) tab. In the appeared block open the 'Options' (2) tab.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-reset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Press the 'Reset' button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-reset-2.png" alt=""></figure>
    </li>
    <li>
        <p>That's it! All presets are reset to initial state.</p>
    </li>
</ul>

<!--optimization-->
<h5>Styles and Scripts Optimization</h5>
<p>Styles and scripts optimization adds exclusions for modules in Header section, based on their use in presets. This
    allows speeding up the page loading speed. Optimization works in test mode.</p>
<p>Enabling optimization:</p>
<ul class="index-list">
    <li>
        <p>To enable optimization, open the 'Tools' (1) tab and select the 'Options' (2) tab.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-1.png" alt=""></figure>
    </li>
    <li>
        <p>In the appeared window, you can enable optimization (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-2.png" alt=""></figure>
    </li>
</ul>
<p>If optimization is enabled when editing and enabling presets, optimization gets discarded, but you'll see a window
    offering to run optimization. There is no need to optimize scripts and styles every time you change presets. It's
    better to optimize them when you're done editing.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-3.png" alt=""></figure>

<h5>Styling</h5>
<ul class="index-list">
    <li>
        <p>Background styles. Fields description:</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-styles-1.png" alt=""/></figure>
        <ul class="marked-list">
            <li>background-image (background image) - the image URL or 'none' value. The image is picked from the
                ~/images/cms/ folder.
            </li>
            <li>background-color (background color) - the value can be set in any color format (rgb, hex, etc.). You can
                choose the color using the colorpicker tool.
            </li>
            <li>background-repeat (background repeat) - all of the available options are listed in the radio buttons.
            </li>
            <li>background-position (background position) - all of the available options are listed in the dropdown.
            </li>
            <li>background-size (background size) - all of the available options are listed in the dropdown.</li>
            <li>background-origin (background image positioning region) - all of the available options are listed in the
                dropdown.
            </li>
        </ul>
    </li>
    <li><p>Border styles.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-styles-2.png" alt=""/></figure>
        <ul class="marked-list">
            <li>border-top-style, border-right-style, border-left-style, border-bottom-style (border styles) - all of
                the available options are listed in the dropdown.
            </li>
            <li>border-top-width, border-right-width, border-left-width, border-bottom-width (borders width) - should be
                set in pixels.
            </li>
            <li>border-top-сolor, border-right-color, border-left-color, border-bottom-color (borders color) - the value
                can be set in any color format (rgb, hex, etc.). You can choose the color using the colorpicker tool.
            </li>
            <li>border-top-right-radius, border-top-left-radius, border-bottom-right-radius, border-bottom-left-radius
                (border radius) - should be set in pixels.
            </li>
        </ul>
    </li>
    <li><p>Other styles.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-styles-3.png" alt=""/></figure>
        <ul class="marked-list">
            <li>box-shadow (box shadow) - example:0px 0px 0px 0px rgba(0,0,0,0.75).</li>
        </ul>
    </li>
</ul>

<h5>Items styles removing</h5>
<ul class="index-list">
    <li>
        <p>In order to remove items styles, open the items styling section and press 'Clear styles' (1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-clear-styles-1.png" alt=""/></figure>
    </li>
</ul>

<h5>Warnings</h5>
<p>If the following message appears in the module item block, you should enable the mentioned module.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-module-warning-1.png" alt=""></figure>
<p>If the following message appears in the module item block, you should install the mentioned module.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-module-warning-2.png" alt=""></figure>
<p>In case you remove or deactivate the 'TM Mega Layout' module, all of the active presets will be disabled and you will
    see the positions (hooks) in their original appearance.</p>