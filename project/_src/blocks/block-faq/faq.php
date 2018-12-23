<?php
/** @var Classiq\Models\JsonModels\ListItem $vv */
$cssBg=$vv->getData("color","bg-white");
$style=$vv->getData("style","icones-texte");
$deco=$vv->getData("deco",null)?"deco":"";
?>
<div <?= $vv->wysiwyg()->attr() ?> class="block block-faq">
    <div class="deco"></div>
    <div class="container">
        <div class="encart text-center">
            <?=$vv->wysiwyg()
                ->field("title_lang")
                ->string()
                ->setPlaceholder("Titre ici")
                ->htmlTag("h2")?>

            <?=$vv->wysiwyg()->field("items")
                ->listJson("blocks/block-faq/faq-item")
                ->contextMenuPosition(POSITION_TOP_RIGHT)
                ->blockPickerEmptyMessage("Ajoutez des questions")
                ->contextMenuSize(SIZE_SMALL)
                ->htmlTag("div")
                ->addClass("list")
            ?>
        </div>
    </div>


</div>
