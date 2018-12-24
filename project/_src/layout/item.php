<?php
/**
 * @var \Classiq\Models\JsonModels\ListItem $vv
 */

use Classiq\Models\Page;

$vv->wysiwyg()->openConfigOnCreate();

$href="";
$uid="";
$label=$vv->getData("label_lang");
/** @var \Classiq\Models\Page $page */
$page=$vv->targetUid(true);
if($page){
    $uid=$page->uid();
    $href=$page->href();
    if(!$label){
        $label=$page->name_lang;
    }
}

$styleButton=$vv->getData("styleButton");
if($styleButton){
    $css="btn";
}else{
    $css ="h5";
}

if(!$label){
    $label="Définir un label";
}
if(!$href){
    $href="#";
}



/** @var Page[] $children */
$children=$vv->getDataAsRecords("children");



?>
<li <?=$vv->wysiwyg()->attr()?> class="<?=$styleButton?"is-btn":""?>">
    <a  data-href-uid="<?=$uid?>" class="<?=$css?>" href="<?=$href?>"><?=$label?></a>
    <?if($children):?>
        <ul class="children">
            <?foreach ($children as $child):?>
            <li>
                <a  data-href-uid="<?=$child->uid()?>" class="h5" href="<?=$child->href()?>"><?=$child->name_lang?></a>
            </li>
            <?endforeach;?>
        </ul>
    <?endif;?>
</li>
