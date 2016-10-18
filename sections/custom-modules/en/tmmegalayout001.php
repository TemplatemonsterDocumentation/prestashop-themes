<h3>TM Mega Layout 0.0.1</h3>
<p>This module is designed to let you create custom layouts (presets) for hooks and display them at site instead of the default positions. This module advantage is allowing you to create different hook markups and modify them up to your needs.</p>

<h4>Functional characteristics and features of the module</h4>
<ul class="index-list">
    <li>
        <p>Requirements:</p>
        <ul class="marked-list">
            <li>Prestashop 1.6+</li>
            <li>PHP 5.4+</li>
        </ul>
    </li>
    <li>
        <p>Features:</p>
        <ul class="marked-list">
            <li>Module includes 3 hooks: displayTopColumn, displayHome, displayFooter, corresponding to the standard ones.</li>
            <li>In case module is not present at the hook, it can't be added to the preset.</li>
            <li>Module can be displayed in the preset only once, same as in a hook.</li>
            <li>Module's position in 'Modules and Services -> Positions' section does not affect the preset.</li>
            <li>The module does not allow you to configure different modules. You can not set different modules configuration for various presets.</li>
        </ul>
    </li>
</ul>
<h6>Module provides you with an option for changing module position and setting up the grid for 3 hooks: displayTopColumn, displayHome, displayFooter. Changing the modules position in 'Modules and Services -> Positions' section will not affect the modules position in the preset. In case module was not added to the hook, it can't be also added to the preset.</h6>

<h4>Module integration to the theme</h4>
<p class="alert alert-warning">Without this step done your presets will not be displayed on the frontend.</p>
<ul class="index-list">
    <li><p>Top column. In order to add custom preset to the topColumn hook you need to perform the following:</p>
        <ul class="marked-list">
            <li>Open the <strong>/themes/your_theme/header.tpl</strong> file for editing.</li>
            <li>Locate the following code <pre class="prettyprint">{hook h="displayTopColumn"}</pre></li>
            <li>And replace it with:
                <pre class="prettyprint">
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
    <li><p>Home. In order to add custom preset to the Home hook you need to perform the following:</p>
        <ul class="marked-list">
            <li>Open the <strong>/themes/your_theme/footer.tpl</strong> file for editing.</li>
            <li>Locate the following code:
                <pre class="prettyprint">
{if isset($HOOK_HOME) && $HOOK_HOME|trim}
    &lt;div class="home-column"&gt;
        &lt;div class="container"&gt;
            {$HOOK_HOME}
        &lt;/div&gt;
    &lt;/div&gt;
{/if}</pre>
            </li>
            <li>And replace it with:
                <pre class="prettyprint">
{assign var='displayMegaHome' value={hook h='tmMegaLayoutHome'}}
{if $displayMegaHome}
    {hook h='tmMegaLayoutHome'}
{else}
    {if isset($HOOK_HOME) && $HOOK_HOME|trim}
        {$HOOK_HOME}
    {/if}
{/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Footer. In order to add custom preset to the Footer hook you need to perform the following:</p>
        <ul class="marked-list">
            <li>Open the <strong>/themes/your_theme/footer.tpl</strong> file for editing.</li>
            <li>Locate the following code:
                <pre class="prettyprint">
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
                <pre class="prettyprint">
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
{/if}
                </pre>
            </li>
        </ul>
    </li>
</ul>

<h4>TM Mega Layout Main Panel</h4>
<p>Main TM Mega Layout module configuration panel allows you to add a preset to the required hook and configure the preset.</p>
<figure class="img-polaroid">
    <img src="img/tmmegalayout-main-panel.png" alt="" />
</figure>

<h4>Adding the preset</h4>
<ul class="index-list">
    <li>
        <p>Press on '+ Add Preset' (1) in the needed tab.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-1.png" alt="" /></figure>
    </li>
    <li>
        <p>Next fill in the 'Enter layout name' field in the popup typing the new preset title there (2) and press 'Save' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-2.png" alt="" /></figure>
    </li>
    <li>
        <p>Preset was successfully created, it's listed among the available  presets (4) now. Newly created preset is selected for editing(5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-3.png" alt="" /></figure>
    </li>
</ul>

<h4>Preset activation</h4>
<ul class="index-list">
    <li>
        <p>First, please choose the required preset among the list (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-1.png" alt="" /></figure>
    </li>
    <li>
        <p>Press on 'Use as default' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-2.png" alt="" /></figure>
    </li>
    <li>
        <p>Preset is active, it will be displayed in a hook, and marked with a checkmark (3) in a list of presets.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-3.png" alt="" /></figure>
    </li>
</ul>

<h4>Removing the preset</h4>
<p class="alert alert-warning">There is no option to restore the preset after removing.</p>
<ul class="index-list">
    <li>
        <p>In order to remove the preset, choose the required preset among the list (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Next press on a cart (2) near the preset title. </p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Preset was successfully removed.</p>
    </li>
</ul>

<h4>Renaming the preset</h4>
<ul class="index-list">
    <li>
        <p>In order to rename the preset, choose the required preset among the list (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Next press on a pencil icon (2) next to the preset title.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Specify the new preset title (3) in a popup and press on 'Rename layout' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Preset was successfully renamed.</p>
    </li>
</ul>

<h4>Wrapper</h4>
<p>Wrapper has no class by default, it's not a mandatory item.</p>

<h4>Adding the wrapper</h4>
<ul class="index-list">
    <li>
        <p>In order to create a wrapper, press on '+ Add wrapper' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wrapper was added (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-wrapper-2.png" alt=""></figure>
    </li>
</ul>

<h4>Adding the custom css class to the wrapper</h4>
<p>Adding the custom class will let you create a specific styling for your wrapper by using css rules.</p>
<ul class="index-list">
    <li>
        <p>In order to add wrapper class press on the button (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>You'll see a pop-up window, fill in the 'Enter wrapper classes' (2) field there and press on a 'Confirm' (3) button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Custom class was added successfully.</p>
    </li>
</ul>

<h4>Deleting the wrapper</h4>
<p class="alert alert-warning">Deleting the preset item will also cause all of its child items and their styles
    removing.</p>
<ul class="index-list">
    <li>
        <p>In order to remove the wrapper, press on the cart button (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wrapper was removed successfully.</p>
    </li>
</ul>

<h4>Styling the wrapper</h4>
<ul class="index-list">
    <li>
        <p>In order to add custom styles to the wrapper, press on the 'pencil' (1) icon in the wrapper block.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>In the following pop-up window fill in all the needed fields (you may refer to the documentation 'Styling' section), and press on 'Save' (2) button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>If all of the fields are filled in correctly, styles will be saved.</p>
    </li>
</ul>

<h4>Row</h4>
<p>Row item from the Bootstrap grid. It's a required item.</p>
<h4>Adding the row</h4>
<ul class="index-list">
    <li>
        <p>In order to insert a new row press on '+ Add row' (1) into the wrapper block, or '+ Add row' (2) in the main preset block, or '+ Add row' (3) in the column dropdown list.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-row-1.png" alt=""></>
    </li>
    <li>
        <p>The row was added successfully.</p>
    </li>
</ul>

<h4>Adding custom css class to the row</h4>
<p>Custom class adding allows you to create custom row styling using css rules.</p>
<ul class="index-list">
    <li>
        <p>In order to add the class to the row you should press on the button (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Choose the 'Edit row' (2) in a dropdown list.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>Fill in the 'Enter row classes' (3) field in the pop-up window and press on 'Confirm' (4) button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-3.png" alt=""></figure>
    </li>
    <li>
        <p>Custom class was added successfully.</p>
    </li>
</ul>

<h4>Deleting the row</h4>
<p class="alert alert-warning">Preset item removing will also cause its child items and their styles deleting.</p>
<ul class="index-list">
    <li>
        <p>In order to remove the row, open the menu (the 'ellipsis' icon) (1) in the row block.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Choose 'Delete' (2) option in the dropdown.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>The row was successfully removed.</p>
    </li>
</ul>

<h4>Adding styles to the row</h4>
<ul class="index-list">
    <li>
        <p>In order to add row styles, open the menu (the 'ellipsis' icon) (1) in a row block.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Press on 'Stylize' (2) in the dropdown.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>You will see the pop-up window, fill in all the needed fields there (you may refer to the documentation 'Styling' section) and press on 'Save' (3) button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>If all of the fields are filled in correctly, styles will be saved.</p>
    </li>
</ul>

<h4>Column</h4>
<p>It is an item with configurable block width for different dimensions, based on Bootstrap grid.</p>

<h4>Adding the column</h4>
<ul class="index-list">
    <li>
        <p>In order to insert a column into a needed 'row', open the menu (the 'ellipsis' icon) (1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Choose the '+ Add Col' (2) among the list.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Fill in the fields (col-xs*, col-sm*, col-md*, col-lg - bootstrap classes) in the pop-up window and press on 'Confirm' (3) button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>The column was added successfully.</p>
    </li>
</ul>

<h4>Removing the column</h4>
<p class="alert alert-warning">Preset item removing will also cause its child items and their styles deleting.</p>
<ul class="index-list">
    <li>
        <p>In order to remove the column, open the menu (the 'ellipsis' icon) (1) in a column block</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-detele-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Press on 'Delete' (2) in the list.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-detele-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>The column and all of its child items were removed.</p>
    </li>
</ul>

<h4>Editing the column</h4>
<ul class="index-list">
    <li>
        <p>In order to edit the column, open the menu (the 'ellipsis' icon) (1) in a column block.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Press on 'Edit column' (2) in the list.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Fill in the fields (col-xs*, col-sm*, col-md*, col-lg - bootstrap classes)  in the pop-up window and press on 'Confirm' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>The column was successfully edited.</p>
    </li>
</ul>

<h4>Adding styles to the column</h4>
<ul class="index-list">
    <li>
        <p>In order to add column styles, open the menu (the 'ellipsis' icon) (1) in a column block.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Press on 'Stylize' (2) in the list of options.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>You will see the pop-up window, fill in all the needed fields there (you may refer to the documentation 'Styling' section) and press on 'Save' (3) button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>If all of the fields are filled in correctly, styles will be saved.</p>
    </li>
</ul>

<h4>Module</h4>
<p>Module, assigned to this hook.</p>

<h4>Adding the module</h4>
<p class="box-notification"><span>Be careful when adding modules to the preset, some of the modules are desirable to use if if they do not change the visible layout, e.g., 'Data mining for statistics' statistics module.</span></p>
<ul class="index-list">
    <li>
        <p>In order to add the module to the preset in a column block, open the menu  (the 'ellipsis' icon) (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>Press on the '+ Add Module' (2) in the list of options available.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>If needed, you can enter the custom class (3) in the pop-up window and select the module (4), next press on 'Confirm' (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-3.png" alt=""></figure>
    </li>
    <li>
        <p>The module was successfully added.</p>
    </li>
</ul>

<h4>Deleting the module</h4>
<p class="alert alert-warning">Preset item removing will also cause its child items and their styles deleting.</p>
<ul class="index-list">
    <li>
        <p>In order to remove the module, open the menu (the 'ellipsis' icon) (1) in the module block.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>Press on 'Delete' (2) in the list of options available.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>The module is removed.</p>
    </li>
</ul>

<h4>Adding custom class to the module</h4>
<p>Custom class adding allows to create module styling using css rules.</p>
<ul class="index-list">
    <li>
        <p>In order to specify custom class for the module, open the menu in the module block (the 'ellipsis' icon) (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Press on 'Edit Settings' (2) then.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Specify custom class (3) in the pop-up window and press on 'Confirm' (4) button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-3.png" alt=""></figure>
    </li>
    <li>
        <p>Custom class was added.</p>
    </li>
</ul>

<h4>Presets export</h4>
<p>Export tool allows you to export presets for the further import into different shops.</p>
<ul class="index-list">
    <li>
        <p>Navigate to the 'Tools' (1) tab in the main configurations panel.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Choose 'Export' (2) in the form.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>You'll see the list of the existing presets in site hooks.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>In order to preview the preset press on 'Layout preview' (3) button near to the preset you need, in order to export, please press on 'Export layout' (4) button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-4.png" alt=""></figure>
    </li>
    <li>
        <p>Then you'll be able to download this preset as a zip archive.</p>
    </li>
</ul>

<h4>Preset import</h4>
<p class="alert alert-warning">Import tool accepts only the presets *.zip files, that were previously generated with the same module Export tool.</p>
<ul class="index-list">
    <li>
        <p>In order to import your preset, you should open the <strong>Tools (1)</strong> tab and choose <strong>'Import' (2)</strong>.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-1.png" alt="" /></figure>
    </li>
    <li>
        <p>Next press on the <strong>Add file (3)</strong> button and select the zip file of your exported preset. In case this archive is the exported preset, you will see this preset preview.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-2.png" alt="" /></figure>
    </li>
    <li>
        <p>If this preset meets your needs, press on <strong>'Import' (4)</strong>. The preset will be imported and added to the list of available presets.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-3.png" alt="" /></figure>
    </li>
</ul>

<h4>Reset</h4>
<p>Reset - resets all the presets to their initial state (as they were supplied with the theme), all of the custom presets, created by user will be removed.</p>
<p class="alert alert-warning">Attention! After restoring the default presets, all of the custom presets will be removed!</p>
<ul class="index-list">
    <li>
        <p>In order to reset presets, navigate to the 'Tools' (1) tab.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Open the 'Reset' (2) tab in the block.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-2.png" alt=""></figure>
    </li>
    <li>
        <p>And press on 'Reset to default'.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-3.png" alt=""></figure>
    </li>
    <li>
        <p>That's all.</p>
    </li>
</ul>

<h4>Styling</h4>
<ul class="index-list">
    <li>
        <p>Background styles. Fields description:</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-1.png" alt="" /></figure>
        <ul class="marked-list">
            <li>background-image (background image) - the argument is a link to the image. The image is picked from the ~/images/cms/ folder.</li>
            <li>background-color (background color) - the value can be set in any color format (rgb, hex, etc.). You can choose the color using the colorpicker tool.</li>
            <li>background-repeat (background repeat) - all of the available options are listed in the radio buttons.</li>
            <li>background-position (background position) - all of the available options are listed in the dropdown.</li>
            <li>background-size (background size) - all of the available options are listed in the dropdown.</li>
            <li>background-origin (background image positioning region) - all of the available options are listed in the dropdown.</li>
        </ul>
    </li>
    <li><p>Border styles.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-2.png" alt="" /></figure>
        <ul class="marked-list">
            <li>TYPE: border-top-style, border-right-style, border-left-style, border-bottom-style - all of the available options are listed in the dropdown.</li>
            <li>WIDTH: border-top-width, border-right-width, border-left-width, border-bottom-width - should be set in pixels.</li>
            <li>RADIUS: border-top-right-radius, border-top-left-radius, border-bottom-right-radius, border-bottom-left-radius - should be set in pixels.</li>
            <li>COLOR: border-top-сolor, border-right-color, border-left-color, border-bottom-color - the value can be set in any color format (rgb, hex, etc.). You can choose the color using the colorpicker tool.</li>
        </ul>
    </li>
    <li><p>Other styles.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-3.png" alt="" /></figure>
        <ul class="marked-list">
            <li>box-shadow - example: 0px 0px 0px 0px rgba(0,0,0,0.75).</li>
        </ul>
    </li>
</ul>

<h4>Item styles removing</h4>
<ul class="index-list">
    <li>
        <p>In order to remove item styles open the item styling section and press the 'Clear styles' (1) button.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-clear-styles-1.png" alt="" /></figure>
    </li>
</ul>

<h4>Warnings</h4>
<p>If the following message appears in the module item block, you should enable the mentioned module.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout-module-warning-1.png" alt=""></figure>
<p>If the following message appears in the module item block, you should install the mentioned module.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout-module-warning-2.png" alt=""></figure>
<p class="alert alert-warning">In case you remove or deactivate the 'TM Mega Layout' module, all of the active  presets will be disabled and you will see the positions (hooks) in their original appearance.</p>