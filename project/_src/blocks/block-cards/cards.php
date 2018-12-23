<?php
/** @var Classiq\Models\JsonModels\ListItem $vv */

?>
<div <?= $vv->wysiwyg()->attr() ?> class="block block-cards">
    <div class="container">
        <?=$vv->wysiwyg()->field("cards")
            ->listJson("blocks/block-cards/card-item")
            ->horizontal()
            ->contextMenuPosition(POSITION_TOP)
            ->blockPickerEmptyMessage("Ajoutez des éléments")
            ->contextMenuSize(SIZE_SMALL)
            ->onlyImages()
            ->htmlTag("div")
            ->addClass("row")
        ?>
    </div>
</div>
