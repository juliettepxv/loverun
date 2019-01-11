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
<label>Modifier le code</label>
<?=$vv->wysiwyg()
    ->field("naturalCode")
    ->bool()
    ->onSavedRefreshListItem($vv)
    ->checkbox("Ne pas modifier")
?>

