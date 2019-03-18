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
    ->textarea(trad("Collez votre code ici"))
?>
<label><?=trad("Modifier le code")?></label>
<?=$vv->wysiwyg()
    ->field("naturalCode")
    ->bool()
    ->onSavedRefreshListItem($vv)
    ->checkbox(trad("Ne pas modifier"))
?>

