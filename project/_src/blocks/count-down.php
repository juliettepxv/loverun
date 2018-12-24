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

            <div class="compteur">
                <div>
                    <span>150</span>
                    <i>Jours</i>
                </div>
                <div>
                    <span>12</span>
                    <i>Heures</i>
                </div>
                <div>
                    <span>30</span>
                    <i>Minutes</i>
                </div>
                <div>
                    <span>22</span>
                    <i>Secondes</i>
                </div>
            </div>
    </div>
    <div class="deco"></div>
</div>

