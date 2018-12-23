<?php
/**
 * @var \Classiq\Models\JsonModels\ListItem $vv
 */
$vv->wysiwyg()->openConfigOnCreate();
/** @var \Classiq\Models\Page $page */
$page=$vv->targetUid(true);
$label=$vv->getData("label_lang",$page->name_lang);
$styleButton=$vv->getData("styleButton");
if($styleButton){
    $css="btn";
}else{
    $css ="h5";
}
?>
<?if($page):?>
    <li <?=$vv->wysiwyg()->attr()?> class="<?=$styleButton?"is-btn":""?>">
        <a  data-href-uid="<?=$page->uid()?>" class="<?=$css?>" href="<?=$page->href()?>"><?=$label?></a>
    </li>
<?endif?>