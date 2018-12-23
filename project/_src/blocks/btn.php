<?php
/** @var Classiq\Models\JsonModels\ListItem $vv */

use Classiq\Models\Page;

/** @var \Classiq\Models\Filerecord $file */
$file = $vv->getDataAsRecord("file");
/** @var Page $page */
$page = $vv->getDataAsRecord("page");
$url = $vv->getData("url");
$href = "";
$label = $vv->getData("label_lang");
$details = "";

if ($file) {
    $file = $file->localPath();
    $href = \Pov\Defaults\C_default::dwd_url($file);
}
if($page && $page->modelType()=="page"){
    $href=$page->href();
}
if($url){
    $href=$url;
}
?>


<? if (cq()->wysiwyg() || $href): ?>
    <div <?= $vv->wysiwyg()->openConfigOnCreate()->attr() ?> class="block block-btn">
        <div class="container <?= $vv->getData("style", "normal") ?>">
            <? if ($href): ?>

                <a href="<?= $href ?>" target="_blank" class="btn">
                    <div>
                        <?= $label ?>
                        <?= file_get_contents("project/svg/arrow-right.svg") ?>
                    </div>
                </a>
            <? else: ?>
                <div id="cq-style">
                    <div class="machin">
                        <div text-center class="cq-box cq-th-danger">
                            Il faut configurer un lien (<?=$href?>)
                        </div>
                    </div>
                </div>
            <? endif ?>
        </div>
    </div>
<? endif ?>