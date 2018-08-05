<?php
/** @var Classiq\Models\JsonModels\ListItem $vv */
/** @var \Classiq\Models\Filerecord $file */
$file = $vv->getDataAsRecord("targetUid_lang");
$src="";
if($file){
    $src=$file->httpPath();
}

?>
<? if (cq()->wysiwyg() || $src): ?>
<div <?= $vv->wysiwyg()->openConfigOnCreate()->attr() ?> class="block block-video py-medium">
<div class="container">
    <? if ($src): ?>
        <div class="cadre">
            <div class="embed-responsive embed-responsive-16by9">
                <video controls src="<?=$src?>"></video>
            </div>
        </div>
    <? else: ?>
        <div id="cq-style">
            <div class="machin">
                <div text-center class="cq-box cq-th-danger">
                    Il faut choisir une vidéo
                </div>
            </div>
        </div>
    <? endif ?>
</div>
</div>
<? endif ?>