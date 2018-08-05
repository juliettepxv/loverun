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
$img=$vv->getDataAsRecord("img");

$imgZoom="";
if($img && $img->isImage() && $zoom){
    $imgZoom=$img->image()->sizeMax(1600,1600)->jpg()->href();
}
?>
<div <?=$vv->wysiwyg()->attr()?> class="block block-img py-medium">
    <div class="container">
        <div class="cadre">
            <div class="img-wrap"  <?if($imgZoom):?>data-zoom-img="<?=$imgZoom?>"<?endif;?>  >
                <?=$vv->wysiwyg()
                    ->field("img")
                    ->image()
                    ->format()
                    ->width(1200)
                    ->jpg()
                    ->htmlTag()
                    ->addClass("img-responsive")
                ?>
                <?if($zoom):?>
                    <?=pov()->svg->use("startup-zoom")?>
                <?endif?>
            </div>

        </div>
    </div>
</div>

