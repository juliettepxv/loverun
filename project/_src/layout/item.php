<?php
/**
 * @var \Classiq\Models\JsonModels\ListItem $vv
 */
$vv->wysiwyg()->openConfigOnCreate();
/** @var \Classiq\Models\Page $page */
$page=$vv->targetUid(true);
$label=$vv->getData("label_lang",$page->name_lang);
?>
<?if($page):?>
    <li <?=$vv->wysiwyg()->attr()?>>
        <a  data-href-uid="<?=$page->uid()?>" class="" href="<?=$page->href()?>"><?=$label?></a>
    </li>
<?endif?>