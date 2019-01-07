<?php
/**
 *
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 *
 */
/** @var bool $zoom */
$zoom=$vv->getData("zoom");
/** @var \Classiq\Models\Filerecord $img */
$img = $vv->targetUid(true);

$imgZoom="";
if($img && $img->isImage() && $zoom){
    $imgZoom=$img->image()->sizeMax(1600,1600)->jpg()->href();
}
?>
<div <?=$vv->wysiwyg()->openConfigOnCreate()->attr()?> class="block block-img py-medium">
    <div class="container">
        <?if($img && $img->isImage()) :?>
            <div class="img-wrap"  <?if($imgZoom):?>data-zoom-img="<?=$imgZoom?>"<?endif;?>  >

                <?= $img->image()
                    ->width(1200)
                    ->jpg()
                    ->htmlTag()
                    ->addClass("img-responsive")
                ?>
                <?if($zoom):?>
                    <?=pov()->svg->use("startup-zoom")?>
                <?endif?>

            </div>
        <?endif?>
    </div>
</div>

