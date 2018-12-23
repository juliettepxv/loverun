<?php
/**
 * Une image avec différents formats
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 *
 *
 */

?>

<label>Image</label>
<?=$vv->wysiwyg()->field("targetUid")
    ->file()
    ->onSavedRefreshListItem($vv)
    ->button()
    ->render()
?>
<label>Lien</label>
<?=$vv->wysiwyg()->field("url")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->input()

?>






