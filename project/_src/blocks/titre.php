<?php
/**
 * Un titre H2
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */
?>
<div <?=$vv->wysiwyg()->attr()?> class="block block-titre py-medium">
    <div class="container">
            <?=$vv->wysiwyg()
                ->field("texte_lang")
                ->string(\Pov\Utils\StringUtils::FORMAT_NO_HTML_SINGLE_LINE)
                ->setPlaceholder("Saisissez votre titre")
                ->htmlTag("h2")
                ->addClass("tt-sous-titre")
            ?>
    </div>
</div>

