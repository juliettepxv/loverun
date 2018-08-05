<?php
/** @var Classiq\Models\JsonModels\ListItem $vv */
/** @var \Classiq\Models\Filerecord $file */
$file = $vv->targetUid(true);
$url="";
$label="";
$details="";
if($file){
    $details=$file->humanFileSize()." | ".$file->mime;
    $file=$file->localPath();
    $label=$vv->getData("label_lang", basename($file));
    $url=\Pov\Defaults\C_default::dwd_url($file);

}

?>
<? if (cq()->wysiwyg() || $url): ?>
<div <?= $vv->wysiwyg()->openConfigOnCreate()->attr() ?> class="block block-dwd py-medium">
<div class="container">
    <? if ($url): ?>
        <label class="mb-small">
            <?= trad("télécharger") ?>
        </label>
        <a href="<?= $url ?>" target="_blank" class="row">
                <?=pov()->svg->use("startup-arrow-down")?>
            <div>
                <?= $label ?>
                <br><small><?=$details?></small>
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