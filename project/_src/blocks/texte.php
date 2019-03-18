<?php
/**
 * Un block avec un texte paragraphe formaté
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */
?>
<div <?=$vv->wysiwyg()->attr()?> class="block block-texte py-medium">
    <div class="container">
            <?=$vv->wysiwyg()
                ->field("texte_lang")
                ->string(\Pov\Utils\StringUtils::FORMAT_HTML)
                ->setPlaceholder(trad("Saisissez votre texte"))
                ->setMediumButtons([
                    "h2","h3",
                    "bold","italic","underline","strikethrough",
                    "orderedlist","unorderedlist",
                    "anchor","select-record",
                    "removeFormat"]
                )
                ->htmlTag("div")
                ->addClass("txt")
            ?>
    </div>
</div>

