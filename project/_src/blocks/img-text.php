<?php
/**
 *
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 *
 */
/** @var \Classiq\Models\Filerecord $img */
$img = $vv->targetUid(true);
$invert=$vv->getData("invert")?"invert":"";
?>
<div <?= $vv->wysiwyg()->openConfigOnCreate()->attr() ?> class="block block-img-text <?=$invert?>">
    <div class="container">
    <div class="row">

        <div class="col-6">
            <? if ($img && $img->isImage()): ?>
            <div class="block-img py-medium">
                <div class="img-wrap" data-zoom-img="<?= $img->image()->sizeMax(1600, 1600)->jpg()->href() ?>">
                    <?= $img->image()
                        ->width(800)
                        ->jpg()
                        ->htmlTag()
                        ->addClass("img-responsive")
                    ?>
                </div>
            </div>
            <? elseif (\Classiq\Wysiwyg\Wysiwyg::$enabled): ?>
                <div id="cq-style">
                        <div text-center class="cq-box cq-th-danger">
                            Il faut choisir une image
                        </div>
                </div>
            <? endif ?>
        </div>

        <div class="col-6">
            <div class="block-texte py-medium">
                <?= $vv->wysiwyg()
                    ->field("texte_lang")
                    ->string(\Pov\Utils\StringUtils::FORMAT_HTML)
                    ->setPlaceholder("Saisissez votre texte")
                    //->setMediumButtons(["bold", "italic","select-record","removeFormat"])
                    ->htmlTag("div")
                    ->addClass("txt")
                ?>
            </div>
        </div>
    </div>
    </div>
</div>






