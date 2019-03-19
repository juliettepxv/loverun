<?php
/**
 * Un titre H2
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */
/** @var \Classiq\Models\Filerecord $image */
$image=$vv->getDataAsRecord("image");
$date=$vv->getData("date","2019-05-12T14:00");
?>
<div <?=$vv->wysiwyg()->attr()?> <?=$view->attrRefresh($vv->uid())?> class="block block-count-down">
    <?if($image):?>
    <div class="poster-image" style="background-image: url('<?=$image->image()->sizeMax(1600,1600)->jpg()->href()?>')"></div>
    <?endif?>
    <div class="container">

            <?=$vv->wysiwyg()
                ->field("texte_lang")
                ->string(\Pov\Utils\StringUtils::FORMAT_NO_HTML_SINGLE_LINE)
                ->setPlaceholder(trad("Saisissez votre titre"))
                ->htmlTag($vv->getData("balise","h1"))
            ?>

            <div class="h5"><?=trad("DANS")?> : </div>

            <div class="compteur"
                 data-count-down data-date-start="<?=pov()->utils->date->timestamp()?>"
                 data-date-end="<?=DateTime::createFromFormat("Y-m-d\TH:i",$date)->getTimestamp()?>">
                <div>
                    <span class="days">00</span>
                    <p><?=trad("Jours")?></p>
                </div>
                <div>
                    <span class="hours">00</span>
                    <p><?=trad("Heures")?></p>
                </div>
                <div>
                    <span class="minutes">00</span>
                    <p><?=trad("Minutes")?></p>
                </div>
                <div>
                    <span class="seconds">00</span>
                    <p><?=trad("Secondes")?></p>
                </div>
            </div>
        <div class="scroll-txt">
            <div class="p">Scroll</div>
            <?=pov()->svg->use("startup-arrow-down")?>
        </div>
    </div>
    <div class="deco"></div>
</div>

