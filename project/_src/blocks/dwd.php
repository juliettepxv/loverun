<?php
/** @var Classiq\Models\JsonModels\ListItem $vv */
/** @var \Classiq\Models\Filerecord $file */
$file = $vv->targetUid(true);
$url = "";
$label = "";
$details = "";
if ($file) {
    $details = $file->humanFileSize() . " | " . $file->mime;
    $file = $file->localPath();
    $label = $vv->getData("label_lang", basename($file));
    $url = \Pov\Defaults\C_default::dwd_url($file);

}

?>


<? if (cq()->wysiwyg() || $url): ?>
    <div <?= $vv->wysiwyg()->openConfigOnCreate()->attr() ?> class="block block-dwd">
        <div class="container <?= $vv->getData("style", "normal") ?>">
            <? if ($url): ?>

                <a href="<?= $url ?>" target="_blank" class="btn">
                    <div>
                        <?= $label ?>
                        <?= file_get_contents("project/svg/arrow-right.svg") ?>
                    </div>
                </a>
            <? else: ?>
                <div id="cq-style">
                    <div class="machin">
                        <div text-center class="cq-box cq-th-danger">
                            Il faut configurer ce téléchargement
                        </div>
                    </div>
                </div>
            <? endif ?>
        </div>
    </div>
<? endif ?>