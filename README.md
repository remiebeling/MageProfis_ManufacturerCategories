# ManufacturerCategories

###Pflege Hersteller
<p>Die Hersteller werden über versteckte Kategorien verwaltet.</p>

####Logo und Beschreibung

<p>Es muss eine Hauptkategore "Hersteller" angelegt werden.
Die Id dieser Kategorie muss unter system->konfiguration->Mageprofis->Manufacturers hitnerlegt werden.
</p>

<p>Um einen neuen Hersteller anzulegen muss eine neue Kategorie unterhalb der Kategorie “Hersteller” angelegt werden. Das Herstellerlogo wird im Attribut “Bild” hinterlegt. 
Im Feld “Beschreibung” kann der Text hinterlegt werden der auf der Herstellerseite und der Produktseite für den Hersteller angezeigt wird.<br />
Der Kategoriename entspricht dem Herstellernamen.<br />
Wenn das Herstellerlogo auf der Startseite angezeigt werden soll dann muss das Attribut “Hersteller auf Startseite anzeigen” auf “ja” gesetzt werden.
</p>

-- catalog/category/view.phtml

<pre>
<?php if (Mage::helper('manufacturercategories')->isAllManufacturersCategory($_category->getId())): ?>
    <?php echo $this->getChildHtml('all.brands'); ?>
<?php elseif ($_category->getIsBrand()): ?>
    <?php echo $this->getChildHtml('brand.details'); ?>
    <?php echo $this->getCmsBlockHtml() ?>
    <?php echo $this->getProductListHtml() ?>
    <?php echo $this->getChildHtml('brands.bar'); ?>
<?php else: ?>

/*Here is the usual category view logic*/
<?php endif; ?>
</pre>

###Mit Firegento dynamic Cateogries (empfohlen)

https://github.com/firegento/firegento-dynamiccategory 

<ol>
<li>dynamic categories modul installieren </li>
<li>den gewünschten Hersteller in der linken Spalte anklicken</li>
das Tab “Artikel dieser Kategorie” wählen</li>
<li>unter der Liste mit den Artikeln befindet sich das Feld “Dynamische Kategorie-Produkt Zuordnung”
auf das Grüne kreuz klicken und aus dem Dropdown das Attribut “Hersteller” wählen</li>
<li>Auf “...” klicken und aus dem Dropdown den Gewünschten Hersteller auswählen</li>
<li>Nachdem die Kategorie gespeichert wurde werden nun Alle Artikel des gewählten Herstellers automatisch dieser Kategorie zugeordnet.</li>
</ol>
<strong>ACHTUNG: Das Artikelattribut “Hersteller” muss wie immer gepflegt werden damit diese Zuordnung korrekt funktionieren kann.</strong>

