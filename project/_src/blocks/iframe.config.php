<?php
/**
 *
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */
?>
<?=$vv->wysiwyg()
    ->field("embed")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->textarea("Collez votre code ici")
?>

