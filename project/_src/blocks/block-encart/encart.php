<?php
/** @var Classiq\Models\JsonModels\ListItem $vv */
$cssBg=$vv->getData("color","bg-white");
$style=$vv->getData("style","icones-texte");
$deco=$vv->getData("deco",null)?"deco":"";
?>
<div <?= $vv->wysiwyg()->attr() ?> class="block block-encart">

    <?if($deco):?>
        <div class="deco"></div>
    <?endif?>

    <div class="container">

        <div class="encart <?=$cssBg?> <?=$style?>">
            <?=$vv->wysiwyg()
                ->field("title_lang")
                ->string()
                ->setPlaceholder("Titre ici")
                ->htmlTag("h2")?>

            <?=$vv->wysiwyg()->field("cards")
                ->listJson("blocks/block-encart/encart-item")
                ->horizontal()
                ->contextMenuPosition(POSITION_TOP)
                ->blockPickerEmptyMessage("Ajoutez des éléments")
                ->contextMenuSize(SIZE_SMALL)
                ->htmlTag("div")
                ->addClass("list")
            ?>
        </div>
    </div>


</div>
