<?php
/**
 *
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */
?>
<div <?=$vv->wysiwyg()->attr()?> class="block block-img py-medium">
    <div class="container">
        <div class="cadre">
            <?=$vv->wysiwyg()
                ->field("img")
                ->image()
                ->format()
                ->width(1200)
                ->jpg()
                ->htmlTag()
                ->addClass("img-responsive")
                ?>
        </div>
    </div>
</div>

