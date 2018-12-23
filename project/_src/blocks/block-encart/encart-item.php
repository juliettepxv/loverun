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

?>
<div <?=$vv->wysiwyg()->attr()?> class="encart-item">
    <img class="img" width="300" height="300" src="<?=$imgSrc?>" alt="LoveRun">
    <div class="title">
        <?=$vv->wysiwyg()
            ->field("title_lang")
            ->string(\Pov\Utils\StringUtils::FORMAT_NO_HTML_SINGLE_LINE)
            ->setPlaceholder("00")
            ->htmlTag("div")
            ->addClass("")
        ?>
    </div>
    <?=pov()->svg->use("startup-slash")->addClass("slash");?>
    <div class="txt">
        <?=$vv->wysiwyg()
            ->field("txt_lang")
            ->string(\Pov\Utils\StringUtils::FORMAT_NO_HTML_MULTI_LINE)
            ->setPlaceholder("texte")
            ->htmlTag("div")
            ->addClass("")
        ?>
    </div>
</div>
