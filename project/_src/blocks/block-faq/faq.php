<?php
/** @var Classiq\Models\JsonModels\ListItem $vv */
?>
<div <?= $vv->wysiwyg()->attr() ?> class="block block-faq">
    <div class="deco"></div>
    <div class="container">
        <div class="encart text-center">
            <?=$vv->wysiwyg()
                ->field("title_lang")
                ->string()
                ->setPlaceholder(trad("Titre ici"))
                ->htmlTag("h2")?>

            <?=$vv->wysiwyg()->field("items")
                ->listJson("blocks/block-faq/faq-item")
                ->contextMenuPosition(POSITION_TOP_RIGHT)
                ->blockPickerEmptyMessage(trad("Ajoutez des questions"))
                ->contextMenuSize(SIZE_SMALL)
                ->htmlTag("div")
                ->addClass("list")
            ?>
        </div>
    </div>


</div>
