<?php
/** @var Classiq\Models\JsonModels\ListItem $vv */

?>
<div <?=$vv->wysiwyg()->attr()?> class="block block-logos py-medium">
    <div class="container">
            <?=$vv->wysiwyg()->field("logos")
                ->listJson("blocks/block-logos/logos/logo-link-item")
                ->horizontal()
                ->contextMenuPosition(POSITION_BOTTOM)
                ->blockPickerEmptyMessage("Insérez des logos dans cette liste")
                ->contextMenuSize(SIZE_SMALL)
                ->onlyImages()
                ->htmlTag("div")
                ->addClass("wrap")
                //->addClass("d-flex align-items-center justify-content-center logos-list flex-wrap")
            ?>
    </div>
</div>

