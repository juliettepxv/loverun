<?php
/**
 * Un titre H2
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */
/** @var \Classiq\Models\Filerecord $image */
$image=$vv->getDataAsRecord("image");

?>
<div <?=$vv->wysiwyg()->attr()?> class="block block-count-down">
    <?if($image):?>
    <div class="poster-image" style="background-image: url('<?=$image->image()->sizeMax(1600,1600)->jpg()->href()?>')"></div>
    <?endif?>
    <div class="container">

            <?=$vv->wysiwyg()
                ->field("texte_lang")
                ->string(\Pov\Utils\StringUtils::FORMAT_NO_HTML_SINGLE_LINE)
                ->setPlaceholder("Saisissez votre titre")
                ->htmlTag($vv->getData("balise","h1"))
            ?>

            <div class="h5">DANS : </div>

            <div class="compteur"
                 data-count-down data-date-start="<?=pov()->utils->date->timestamp()?>"
                 data-date-end="<?=DateTime::createFromFormat("Y-m-d H:i:s","2019-05-12 14:00:00")->getTimestamp()?>">
                <div>
                    <span class="days">00</span>
                    <i>Jours</i>
                </div>
                <div>
                    <span class="hours">00</span>
                    <i>Heures</i>
                </div>
                <div>
                    <span class="minutes">00</span>
                    <i>Minutes</i>
                </div>
                <div>
                    <span class="seconds">00</span>
                    <i>Secondes</i>
                </div>
            </div>
    </div>
    <div class="deco"></div>
</div>

