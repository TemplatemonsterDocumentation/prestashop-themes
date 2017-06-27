<h3>TM Mega Layout 0.0.1</h3>
<p>Mit diesem Modul können Sie benutzerdefinierte Layouts (Voreinstellungen) für Hooks erstellen und sie anstatt der Positionen auf der Website darstellen. Dadurch können Sie verschiedene Layouts erstellen und sie nach Ihren Bedürfnissen bearbeiten.</p>

<h4> Charakteristiken und Eigenschaften des Moduls</h4>
<ul class="index-list">
    <li>
        <p>Anforderungen:</p>
        <ul class="marked-list">
            <li>Prestashop 1.6+</li>
            <li>PHP 5.4+</li>
        </ul>
    </li>
    <li>
        <p>Eigenschaften:</p>
        <ul class="marked-list">
            <li>Dieses Modul enthält 3 Hooks: displayTopColumn, displayHome, displayFooter, die dem Standard entsprechen.</li>
            <li> Wenn dieses Modul in Hook fehlt, kann es nicht zur Voreinstellung hinzugefügt werden.</li>
            <li> Das Modul kann in der Voreinstellung und in Hook nur einmal dargestellt werden.</li>
            <li>Die Position des Moduls im Bereich 'Module und Services -> Positionen' wirkt nicht auf die Voreinstellung.</li>
            <li> Das Modul ermöglicht es Ihnen nicht, verschiedene Modul einzustellen. Sie können nicht verschiedene Modul-Einstellungen für verschiedene Voreinstellungen festlegen.</li>
        </ul>
    </li>
</ul>
<h6> Dieses Modul ermöglicht es Ihnen, die Position des Moduls zu ändern und das Grid für 3 Hooks einzustellen: displayTopColumn, displayHome, displayFooter. Wenn Sie Positionen der Module in dem Bereich 'Module und Services -> Positionen' ändern, werden die Positionen der Module in der Voreinstellung nicht geändert. Wenn das Modul zum Hook nicht hinzugefügt ist, kann es nicht zur Voreinstellung hinzugefügt werden.</h6>

<h4>Wie man das Modul in die Vorlage integriert</h4>
<p class="alert alert-warning">Wenn Sie diese Aktion nicht durchführen, werden Voreinstellungen auf Ihrer Website nicht dargestellt.</p>
<ul class="index-list">
    <li><p>Die obere Spalte. Um eine benutzerdefinierte Voreinstellung zum Hook topColumn hinzuzufügen, führen Sie die folgende Aktion durch:</p>
        <ul class="marked-list">
            <li>Öffnen Sie die Datei <strong>/themes/your_theme/header.tpl</strong> zur Bearbeitung.</li>
            <li>Finden Sie die folgende Codezeile: <pre class="codebox">{hook h="displayTopColumn"}</pre></li>
            <li>Ersetzen Sie sie durch:
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
    <li><p>Home. Um eine benutzerdefinierte Voreinstellung zum Hook "Home" hinzuzufügen, nehmen Sie die folgenden Änderungen vor:</p>
        <ul class="marked-list">
            <li>Öffnen Sie die Datei <strong>/themes/your_theme/footer.tpl</strong> zur Bearbeitung.</li>
            <li>Finden Sie die folgende Codezeile:
                <pre class="codebox">
{if isset($HOOK_HOME) && $HOOK_HOME|trim}
    &lt;div class="home-column"&gt;
        &lt;div class="container"&gt;
            {$HOOK_HOME}
        &lt;/div&gt;
    &lt;/div&gt;
{/if}</pre>
            </li>
            <li>Ersetzen Sie sie durch:
                <pre class="codebox">
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
    <li><p>Footer. Um eine benutzerdefinierte Voreinstellung zum Hook "Footer" hinzuzufügen, nehmen Sie die folgenden Änderungen vor:</p>
        <ul class="marked-list">
            <li>Öffnen Sie die Datei <strong>/themes/your_theme/footer.tpl</strong> zur Bearbeitung.</li>
            <li>Finden Sie die folgende Codezeile:
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
            <li>Ersetzen Sie sie durch:
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
{/if}
                </pre>
            </li>
        </ul>
    </li>
</ul>

<h4>Das Hauptpanel TM Mega Layout</h4>
<p>Das Hauptpanel der Modul-Einstellungen TM Mega Layout ermöglicht es Ihnen, eine Voreinstellung zum notwendigen Hook hinzuzufügen und sie einzustellen.</p>
<figure class="img-polaroid">
    <img src="img/tmmegalayout-main-panel.png" alt="" />
</figure>

<h4>Wie man eine Voreinstellung hinzufügt</h4>
<ul class="index-list">
    <li>
        <p>Drücken Sie '+ Voreinstellung hinzufügen' (1) in dem notwendigen Tab.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-1.png" alt="" /></figure>
    </li>
    <li>
        <p>Danach füllen Sie das Feld 'Namen des Layouts eingeben' in dem DropDown Fenster aus, indem Sie einen neuen Namen der Voreinstellung (2) eingeben und drücken Sie auf den Button 'Speichern' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-2.png" alt="" /></figure>
    </li>
    <li>
        <p>Die Voreinstellung wurde erfolgreich erstellt, jetzt wird sie in der Liste der verfügbaren Voreinstellungen (4) dargestellt. Die erstellte Voreinstellung kann bearbeitet werden (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-3.png" alt="" /></figure>
    </li>
</ul>

<h4>Wie man eine Voreinstellung aktiviert</h4>
<ul class="index-list">
    <li>
        <p>Wählen Sie vor allem eine verfügbare Voreinstellung in der Liste (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-1.png" alt="" /></figure>
    </li>
    <li>
        <p>Drücken Sie auf den Button 'Als Standard verwenden' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-2.png" alt="" /></figure>
    </li>
    <li>
        <p>Die Voreinstellung ist aktiv und sie wird in Hook dargestellt und mit einem Häkchen (3) in der Liste der Voreinstellungen markiert.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-3.png" alt="" /></figure>
    </li>
</ul>

<h4>Wie man eine Voreinstellung löscht</h4>
<p class="alert alert-warning">Wenn Sie eine Voreinstellung löschen, können Sie sie nicht wiederherstellen.</p>
<ul class="index-list">
    <li>
        <p>Um eine Voreinstellung zu löschen, wählen Sie eine notwendige Voreinstellung in der Liste aus (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Danach drücken Sie auf das Zeichen "Warenkorb" (2) neben dem Name der Voreinstellung. </p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Sie haben die Voreinstellung erfolgreich gelöscht.</p>
    </li>
</ul>

<h4>Wie man eine Voreinstellung umbenennt</h4>
<ul class="index-list">
    <li>
        <p>Um eine Voreinstellung umzubennen, wählen Sie eine notwendige Voreinstellung in der Liste aus (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Danach drücken Sie auf das Zeichen "Bleistift" (2) neben dem Namen der Voreinstellung.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Geben Sie einen neuen Namen der Voreinstellung (3) in dem DropDown Fenster ein und drücken Sie auf den Button 'Layout umbenennen' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Die Voreinstellung wurde erfolgreich umbenannt.</p>
    </li>
</ul>

<h4>Verpackung</h4>
<p>Standardmäßig hat die Verpackung keine Klasse, da es kein Pflichtelement ist.</p>

<h4>Wie man die Verpackung hinzufügt</h4>
<ul class="index-list">
    <li>
        <p>Um die Verpackung zu erstellen, drücken Sie '+ Verpackung hinzufügen' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Die Verpackung wurde hinzugefügt (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-wrapper-2.png" alt=""></figure>
    </li>
</ul>

<h4>Wie man eine benutzerdefinierte CSS Klasse zur Verpackung hinzufügt </h4>
<p>Indem Sie ine benutzerdefinierte CSS Klasse hinzufügen, können Sie bestimmte Stile für Ihre Verpackung mit Hilfe von CSS Regeln erstellen.</p>
<ul class="index-list">
    <li>
        <p>Um die benutzerdefinierte Klasse zur Verpackung hinzuzufügen, drücken Sie auf den Button (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Sie sehen das DropDown Fenster, füllen Sie das Feld 'Klasse der Verpackung eingeben' (2) aus und drücken Sie auf den Button 'Bestätigen' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Die benutzerdefinierte Klasse wurde hinzugefügt.</p>
    </li>
</ul>

<h4>Wie man die Verpackung löscht</h4>
<p class="alert alert-warning">Wenn Sie die Verpackung der Vereinstellung löschen, werden alle untergeordneten Elemente und Stile gelöscht.</p>
<ul class="index-list">
    <li>
        <p>Um die Verpackung zu löschen, drücken Sie auf den Button "Warenkorb" (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Die Verpackung wurde erfolgreich gelöscht.</p>
    </li>
</ul>

<h4>Wie man Stile zur Verpackung hinzufügt</h4>
<ul class="index-list">
    <li>
        <p>Um benutzerdefinierte Stile zur Verpackung hinzuzufügen, drücken Sie auf das Zeichen "Bleistift" (1) in dem Verpackungsblock.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>In dem DropDown Fenster füllen Sie alle notwendigen Felder (machen Sie sich mit dem Bereich 'Stile' bekantt) aus und drücken Sie auf den Button 'Speichern' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Wenn Sie alle Felder richtig ausgefüllt haben, werden Stile gespeichert.</p>
    </li>
</ul>

<h4>Reihe</h4>
<p>Das Element "Reihe" des Grid Bootstrap. Es ist ein Pflichtelement.</p>
<h4>Wie man eine Reihe hinzufügt</h4>
<ul class="index-list">
    <li>
        <p>Um einen neuen Block einzufügen, drücken Sie '+ Reihe hinzufügen' (1) in dem Verpackungsblock oder '+ Reihe hinzufügen' (2) in dem Hauptblock der Voreinstellung oder '+ Reihe hinzufügen' (3) in der DropDown Liste der Spalten.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-row-1.png" alt=""></>
    </li>
    <li>
        <p>Die Reihe wurde erfolgreich hinzugefügt.</p>
    </li>
</ul>

<h4>Wie man eine benutzerdefinierte Klasse zur Reihe hinzufügt </h4>
<p>Wenn Sie eine benutzerdefinierte Klasse hinzufügen, können Sie benutzerdefinierte Stile der Reihe mit Hilfe von CSS Regeln erstellen.</p>
<ul class="index-list">
    <li>
        <p>Um eine Klasse zur Reihe hinzuzufügen, drücken Sie auf den Button (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wählen Sie 'Reihe bearbeiten' (2) in der DropDwon Liste.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>Füllen Sie das Feld 'Klassen der Reihe eingeben' (3) in dem DropDown Fenster aus und drücken Sie auf den Button 'Bestätigen' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-3.png" alt=""></figure>
    </li>
    <li>
        <p>Die benutzerdefinierte Klasse wurde erfolgreich hinzugefügt.</p>
    </li>
</ul>

<h4>Wie man eine Reihe löscht</h4>
<p class="alert alert-warning">Wenn Sie eine Reihe löschen, werden alle untergeordneten Elemente und Stile gelöscht.</p>
<ul class="index-list">
    <li>
        <p>Um eine Reihe zu löschen, öffnen Sie das Menü (Zeichen 'drei Punkte') (1) in dem Block Reihe.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wählen Sie 'Löschen' (2) in der DropDown Liste.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>Die Reihe wurde erfolgreich gelöscht.</p>
    </li>
</ul>

<h4>Wie man Stile zur Reihe hinzufügt</h4>
<ul class="index-list">
    <li>
        <p>Um Stile zur Reihe hinzuzufügen, öffnen Sie das Menü (das Zeichen 'drei Punkte') (1) in dem Block Reihe.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Drücken Sie 'Stile hinzufügen' (2) in der DropDown Liste.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Sie sehen das DropDown Fenster, füllen Sie alle notwendigen Felder in diesem Fenster (machen Sie sich mit dem Bereich 'Stile' bekannt) aus und drücken Sie auf den Button 'Speichern' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Wenn Sie alle Felder richtig ausgefüllt haben, werden Stile gespeichert.</p>
    </li>
</ul>

<h4>Spalte</h4>
<p>Es ist ein Element mit der eingestellten Breite des Blocks für verschiedene Bildschirmgrößen basierend auf dem Grid Bootstrap.</p>
<h4>Wie man eine Spalte hinzufügt</h4>
<ul class="index-list">
    <li>
        <p>Um eine Spalte zur notwendigen 'Reihe' hinzuzufügen, öffnen Sie das Menü (das Zeichen 'drei Pinkte') (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wählen Sie '+ Spalte hinzufügen' (2) in der Liste.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Füllen Sie Felder (Klassen Bootstrap col-xs*, col-sm*, col-md*, col-lg) in dem DropDown Fenster aus und drücken Sie auf den Button 'Bestätigen' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>Die Spalte wurde erfolgreich hinzugefügt.</p>
    </li>
</ul>

<h4>Wie man eine Spalte löscht</h4>
<p class="alert alert-warning"> Wenn Sie das Element der Voreinstellung löschen, werden alle untergeordneten Elemente und Stile gelöscht.</p>
<ul class="index-list">
    <li>
        <p>Um ein Element zu löschen, öffnen Sie das Menü (das Zeichen 'drei Punkte') (1) in dem Block Spalten</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-detele-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Drücken Sie auf den Button 'Löschen' (2) in der Liste.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-detele-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Die Spalte und ihre untergeordneten Elemente wurden gelöscht.</p>
    </li>
</ul>

<h4>Wie man eine Spalte bearbeitet</h4>
<ul class="index-list">
    <li>
        <p>Um eine Spalte zu bearbeiten, öffnen Sie das Menü (das Zeichen 'drei Punkte') (1) in dem Block Spalten.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Drücken Sie auf den Button 'Spalte bearbeiten' (2) in der Liste.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Füllen Sie Felder (col-xs*, col-sm*, col-md*, col-lg – Klassen bootstrap) in dem DropDown Fenster aus und drücken Sie auf den Button 'Bestätigen' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>Die Spalte wurde erfolgreich geändert.</p>
    </li>
</ul>

<h4>Wie man Stile zur Spalte hinzufügt</h4>
<ul class="index-list">
    <li>
        <p>Um Stile zur Spalte hinzuzufügen, öffnen Sie das Menü (das Zeichen 'drei Punkte') (1) in dem Block Spalten.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Drücken Sie auf den Button 'Stile hinzufügen' (2) in der Liste der Einstellungen.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p> Sie sehen das DropDown Fenster füllen alle notwendigen Felder in diesem Fenster (machen Sie sich mit dem Bereich 'Stile' bekannt) aus und drücken Sie auf den Button 'Speichern' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Wenn Sie alle Felder richtig ausgefüllt haben, werden Stile gespeichert.</p>
    </li>
</ul>

<h4>Module</h4>
<p>Module, die zu Hooks hinzugefügt sind.</p>
<h4>Wie man ein Modul hinzufügt</h4>
<p class="box-notification"><span> Seien Sie vorsichtig, wenn Sie Module zu Voreinstellungen hinzufügen. Einige von ihnen lohnt es sich zu verwenden, wenn sie das sichtbare Layout (zum Beispiel, das Modul für die Statistik 'Data mining for statistics') nicht ändern.</span></p>
<ul class="index-list">
    <li>
        <p>Um ein Modul zur Voreinstellung in dem Block Spalten hinzuzufügen, öffnen Sie das Menü (das Zeichen 'drei Pinkte') (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>Drücken Sie '+ Modul hinzufügen' (2) in der Liste der verfügbaren Einstellungen.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>Wenn es nötig ist, geben Sie eine benutzerdefinierte Klasse (3) in dem DropDown Fenster ein und wählen Sie das Modul (4), danach drücken Sie auf den Button 'Bestätigen' (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-3.png" alt=""></figure>
    </li>
    <li>
        <p>Das Modul wurde erfolgreich hinzugefügt.</p>
    </li>
</ul>

<h4>Wie man ein Modul löscht</h4>
<p class="alert alert-warning">Wenn Sie das Element der Voreinstellung löschen, werden alle untergeordneten Elemente und Stile gelöscht.</p>
<ul class="index-list">
    <li>
        <p>Um ein Modul zu löschen, öffnen Sie das Menü (das Zeichen 'drei Punkte') (1) in dem Block Modul.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>Drücken Sie auf den Button 'Löschen' (2) in der Liste der verfügbaren Einstellungen.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>Das Modul wurde gelöscht.</p>
    </li>
</ul>

<h4>Wie man eine benutzerdefinierte Klasse zum Modul hinzufügt</h4>
<p>Indem Sie eine benutzerdefinierte Klasse hinzufügen, können Sie Stile des Moduls mit Hilfe von den CSS Regeln erstellen.</p>
<ul class="index-list">
    <li>
        <p>Um eine benutzerdefinierte Klasse für das Modul festzulegen, öffnen Sie das Menü im Block Modul (das Zeichen 'drei Punkte') (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Drücken Sie 'Einstellungen ändern' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Legen Sie eine benutzerdefinierte Klasse (3) in dem DropDown Fenster fest und drücken Sie auf den Button 'Bestätigen' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-3.png" alt=""></figure>
    </li>
    <li>
        <p>Die benutzerdefinierte Klasse wurde hinzugefügt.</p>
    </li>
</ul>

<h4>Wie man Voreinstellungen exportiert</h4>
<p> Hier können Sie Voreinstellungen exportieren und sie danach in verschiedene Shop importieren.</p>
<ul class="index-list">
    <li>
        <p>Finden Sie den Tab 'Werkzeuge' (1) in dem Hauptpanel der Einstellungen.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wählen Sie 'Export' (2) in dem Formular.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Sie sehen die Liste der bestehenden Voreinstellungen in Hooks der Website.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Um die Voreinstellung anzusehen, drücken Sie auf den Button 'Vorschau des Layouts' (3) neben dem notwendigen Layout. Um es zu exportieren, drücken Sie auf den Button 'Layout exportieren' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-4.png" alt=""></figure>
    </li>
    <li>
        <p>Danach können Sie die Voreinstellung als zip Archiv herunterladen.</p>
    </li>
</ul>

<h4>Wie man Voreinstellungen importiert</h4>
<p class="alert alert-warning">Sie können nur *.zip Dateien der Voreinstellungen importieren, die vorher mit Hilfe von dem Export-Werkzeug erstellt wurden.</p>
<ul class="index-list">
    <li>
        <p>Um eine Voreinstellung zu importieren, öffnen Sie den Tab <strong>Werkzeuge (1)</strong> und wählen Sie <strong>'Import' (2)</strong>.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-1.png" alt="" /></figure>
    </li>
    <li>
        <p>Danach drücken Sie auf den Button <strong>Datei hinzufügen (3)</strong> und wählen Sie die zip Dateien Ihrer exportierten Voreinstellung. Wenn die Archivdatei die exportierte Voreinstellung ist, können Sie diese Voreinstellung ansehen.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-2.png" alt="" /></figure>
    </li>
    <li>
        <p>Wenn die Voreinstellung Ihren Bedürfnissen entspricht, drücken Sie auf den Button <strong>'Import' (4)</strong> (Import). Die Voreinstellung wird importiert und zur Liste der verfügbaren Voreinstellungen hinzugefügt.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-3.png" alt="" /></figure>
    </li>
</ul>

<h4>Zurücksetzen </h4>
<p>Alle Voreinstellungen werden auf den Anfangszustand (wie sie am Anfang mit der Vorlage zur Verfügung gestellt wurden) zurückgesetzt. Alle Voreinstellungen, die der Nutzer erstellt hat, werden gelöscht.</p>
<p class="alert alert-warning">Achtung! Wenn Sie Standardvoreinstellungen wiederherstellen, werden alle benutzerdefinierten Voreinstellungen gelöscht!</p>
<ul class="index-list">
    <li>
        <p>Um Voreinstellungen zurückzusetzen, finden Sie den Tab 'Werkzeuge' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Öffnen Sie den Tab 'Zurücksetzen' (2) in dem Block.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Und drücken Sie 'Auf den Anfangszustand zurücksetzen'.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Fertig.</p>
    </li>
</ul>

<h4>Stile</h4>
<ul class="index-list">
    <li>
        <p>Stile des Hintergrundes. Feldbeschreibungen:</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-1.png" alt="" /></figure>
        <ul class="marked-list">
            <li>background-image (Hintergrundbild) – der Wert ist der Link zum Bild. Es wird das Bild aus dem Ordner ~/images/cms/ verwendet.</li>
            <li>background-color (Hintergrundfarbe) – der Wert kann in jedem Farbformat (rgb, hex usw.) festgelegt werden. Sie können eine Farbe mit Hilfe von dem Werkzeug Farbwähler wählen.</li>
            <li>background-repeat (Hintergrund wiederholen) – alle verfügbaren Einstellungen sind als Radiobutton vorgestellt.</li>
            <li>background-position (Hintergrundposition) - alle verfügbaren Einstellungen sind als DropDown Liste vorgestellt.</li>
            <li>background-size (Hintergrundgröße) - alle verfügbaren Einstellungen sind als DropDown Liste vorgestellt.</li>
            <li>background-origin (der Platzierungsbereich eines benutzerdefinierten Bildes) - alle verfügbaren Einstellungen sind als DropDown Liste vorgestellt.</li>
        </ul>
    </li>
    <li><p>Stile der Grenze.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-2.png" alt="" /></figure>
        <ul class="marked-list">
            <li>Typ: border-top-style, border-right-style, border-left-style, border-bottom-style - alle verfügbaren Einstellungen sind als DropDown Liste vorgestellt.</li>
            <li>Breite: border-top-width, border-right-width, border-left-width, border-bottom-width – legen Sie den Wert in Pixel fest.</li>
            <li>Radius: border-top-right-radius, border-top-left-radius, border-bottom-right-radius, border-bottom-left-radius - legen Sie den Wert in Pixel fest.</li>
            <li>ЦВЕТ: border-top-сolor, border-right-color, border-left-color, border-bottom-color – der Wert kann in jedem Farbformat (rgb, hex usw.) festgelegt werden. Sie können eine Farbe mit Hilfe von dem Werkzeug Farbwähler wählen.</li>
        </ul>
    </li>
    <li><p>Andere Stile.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-3.png" alt="" /></figure>
        <ul class="marked-list">
            <li>box-shadow - zum Beispiel: 0px 0px 0px 0px rgba(0,0,0,0.75).</li>
        </ul>
    </li>
</ul>

<h4>Wie man Stile des Elementes löscht</h4>
<ul class="index-list">
    <li>
        <p>Um Stile des Elementes zu löschen, öffnen Sie den Bereich Stile und drücken Sie auf den Button 'Stile löschen' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-clear-styles-1.png" alt="" /></figure>
    </li>
</ul>

<h4>Warnungen</h4>
<p> Wenn Sie in dem Block Modulelementes die folgende Benachrichtigung sehen, aktivieren Sie dieses Modul.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout-module-warning-1.png" alt=""></figure>
<p> Wenn Sie in dem Block Modulelementes die folgende Benachrichtigung sehen, sollen Sie dieses Modul installieren.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout-module-warning-2.png" alt=""></figure>
<p class="alert alert-warning">Wenn Sie das Modul Если Вы 'TM Mega Layout' löschen oder deaktivieren, werden alle verfügbaren voreinstellungen deaktiviert. Sie sehen die Positionen (Hooks) wie am Anfang.</p>
