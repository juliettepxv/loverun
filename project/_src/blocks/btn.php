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
    $url_file = \Pov\Defaults\C_default::dwd_url($file);
    $href="href='$url_file' target='_self'";
}
if($page && $page->modelType()=="page"){
    $url_page=$page->href();
    $href="href='$url_page' target='_self'";
}
if($url){
    $href="href='$url' target='_blank'";
}
?>


<? if (cq()->wysiwyg() || $href): ?>
    <div <?= $vv->wysiwyg()->openConfigOnCreate()->attr() ?> class="block block-btn">
        <div class="container <?= $vv->getData("style", "normal") ?>">
            <? if ($href): ?>

                <a <?= $href ?> class="btn">
                    <div>
                        <?= $label ?>
                        <?= pov()->svg->use("startup-arrow-right") ?>
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