<?php
/**
 * Un titre H2
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */
$style=$vv->getData("style","normal");
$image=null;
if($style=="pill"){
    /** @var \Classiq\Models\Filerecord $image */
    $image=$vv->getDataAsRecord("image");
}
?>
<div <?=$vv->wysiwyg()->attr()?> class="block block-titre py-medium">
    <?if($image):?>
    <div class="img" style="background-image: url('<?=$image->image()->sizeMax(1600,1600)->jpg()->href()?>')"></div>
    <?endif?>
    <div class="container <?=$vv->getData("style","normal")?>">

            <?=$vv->wysiwyg()
                ->field("texte_lang")
                ->string(\Pov\Utils\StringUtils::FORMAT_NO_HTML_SINGLE_LINE)
                ->setPlaceholder("Saisissez votre titre")
                ->htmlTag($vv->getData("balise","h2"))
            ?>
    </div>
</div>

