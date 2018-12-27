<?php
/** @var Classiq\Models\JsonModels\ListItem $vv */

?>
<div <?= $vv->wysiwyg()->attr() ?> class="block block-carousel">
    <div class="container">
        <?=$vv->wysiwyg()->field("cards")
            ->listJson("blocks/block-carousel/carousel-item")
            //->horizontal()
            ->contextMenuPosition(POSITION_TOP)
            ->blockPickerEmptyMessage("Ajoutez des éléments")
            ->contextMenuSize(SIZE_SMALL)
            ->onlyImages()
            ->htmlTag("div")
            ->addClass("carousel")
        ?>
    </div>
</div>
