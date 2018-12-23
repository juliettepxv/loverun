<?php
use Classiq\Models\JsonModels\ListItem;
/** @var ListItem $vv */
?>
<div <?=$vv->wysiwyg()->attr()?> class="faq-item">
    <div class="title js-faq-toggle open">
        <?=$vv->wysiwyg()
            ->field("title_lang")
            ->string(\Pov\Utils\StringUtils::FORMAT_NO_HTML_SINGLE_LINE)
            ->setPlaceholder("Question ici")
            ->htmlTag("div")
            ->addClass("h5")
        ?>
        <?=pov()->svg->use("startup-arrow-down")?>
    </div>
    <div class="txt">
        <?=$vv->wysiwyg()
            ->field("txt_lang")
            ->string(\Pov\Utils\StringUtils::FORMAT_HTML)
            ->setPlaceholder("Réponse là...")
            ->htmlTag("div")
            ->addClass("")
        ?>
    </div>
</div>
