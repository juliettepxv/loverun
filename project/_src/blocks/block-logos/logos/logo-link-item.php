<?php
use Classiq\Models\JsonModels\ListItem;
/** @var ListItem $vv */
$imgTag="";
/** @var \Classiq\Models\Filerecord $img */
$img=$vv->targetUid(true);
if($img && $img->isImage()){
    $imgTag=$img->image() ->sizeMax(150,150)->png()->htmlTag();
}else{
    $imgTag=pov()
        ->img("")
        ->bgColor("EEEEEE")
        ->displayIfEmpty(true)
        ->sizeMax(150,150)
        ->png()->htmlTag();
}

$href=$vv->getData("href");


/** @var \Classiq\Models\Filerecord $fichier */
/*
$fichier=$vv->getDataAsRecord("fichier");
if($fichier){
    $href=$fichier->httpPath();
}
*/

?>
<?if($href):?>
    <a class="item" <?=$vv->wysiwyg()->attr()?> href="<?=$href?>" target="_blank"> <?=$imgTag?> </a>
<?else:?>
    <span class="item" <?=$vv->wysiwyg()->attr()?>> <?=$imgTag?> </span>
<?endif?>

