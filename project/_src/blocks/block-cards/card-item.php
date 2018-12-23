<?php
use Classiq\Models\JsonModels\ListItem;
/** @var ListItem $vv */

/** @var \Classiq\Models\Filerecord $img */
$img=$vv->targetUid(true);
$imgSrc=pov()
    ->img("")
    ->bgColor("EEEEEE")
    ->displayIfEmpty(true)
    ->sizeCover(400,400)
    ->jpg()->href();

if($img && $img->isImage()){
    $imgSrc=$img->image()
        ->sizeCover(400,400)
        ->jpg()
        ->href();
}

$tag="div";
$href="";

$url=$vv->getData("url");
if($url){
    $tag="a";
    $href="href='$url' target='_blank'";
}

?>
<div <?=$vv->wysiwyg()->attr()?> class="card-item col-12 col-md-4">
    <<?=$tag?> class="card" <?=$href?>>
        <img class="img" width="300" height="300" src="<?=$imgSrc?>" alt="LoveRun">
        <div class="txt">
            <?=$vv->wysiwyg()
                ->field("txt_lang")
                ->string(\Pov\Utils\StringUtils::FORMAT_HTML)
                ->setMediumButtons(["h2","h3","removeFormat"])
                ->htmlTag("div")
                ->addClass("")
            ?>
        </div>

    </<?=$tag?>>

</div>
