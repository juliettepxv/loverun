<?php
/**
 * Une image avec différents formats
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 *
 *
 */

?>

<label><?=trad("Image")?></label>
<?=$vv->wysiwyg()->field("targetUid")
    ->file()
    ->onSavedRefreshListItem($vv)
    ->button()
    ->render()
?>

<label><?=trad("Choissez une page")?></label>
<?=$vv->wysiwyg()->field("page")
    ->recordPicker("Page")
    ->onSavedRefreshListItem($vv)
    ->buttonRecord()
    ->render()
?>
<label><?=trad("ou une url")?></label>
<?=$vv->wysiwyg()->field("url")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->input()

?>







