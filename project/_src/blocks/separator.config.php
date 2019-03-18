<?php
/**
 * Un titre
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */
$ar=[];
$ar[trad("big")]="py-big";
$ar[trad("medium")]="py-medium";
$ar[trad("small")]="py-small";
?>

<label><?=trad("Style")?></label>
<?=$vv->wysiwyg()->field("style")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->setDefaultValue("py-big")
    ->select($ar)

?>





