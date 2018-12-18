<?php
use Classiq\Models\JsonModels\ListItem;
/** @var ListItem $vv */

/** @var \Classiq\Models\Filerecord $img */
$img=$vv->targetUid(true);
$sizeCss=$vv->getData("size","col-6 col-md-3");

$imgSrc=pov()
    ->img("")
    ->bgColor("EEEEEE")
    ->displayIfEmpty(true)
    ->sizeMax(1200,1200)
    ->png()->href();

if($img && $img->isImage()){
    $imgSrc=$img->image()
        ->sizeMax(1200,1200)
        ->jpg()
        ->href();
}
?>
<div <?=$vv->wysiwyg()->attr()?> data-zoom-img="<?=$imgSrc?>" class="photo-item <?=$sizeCss?>">
    <div class="img" style="background-image: url('<?=$imgSrc?>')"></div>
</div>
