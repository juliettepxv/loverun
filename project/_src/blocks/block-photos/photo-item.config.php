<?php
/**
 * Une image avec différents formats
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 *
 *
 */
$ar=[];
$ar[trad("petit")]="col-6 col-md-3";
$ar[trad("moyen")]="col-6 col-md-6";
$ar[trad("grand")]="col-6 col-md-9";
?>

<label><?=trad("Image")?></label>
<?=$vv->wysiwyg()->field("targetUid")
    ->file()
    ->onSavedRefreshListItem($vv)
    ->button()
    ->render()
?>
<label><?=trad("Format")?></label>
<?=$vv->wysiwyg()->field("size")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->setDefaultValue("col-6 col-md-3")
    ->select($ar)

?>






