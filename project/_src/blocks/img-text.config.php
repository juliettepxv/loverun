<?php
/**
 *
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */

?>
<label>Choisir une image</label>
<?= $vv->wysiwyg()->field("targetUid")
    ->file()
    ->setMimeAcceptImagesOnly()
    ->onSavedRefreshListItem($vv)
    ->button()
    ->render();
?>
<label>Disposition</label>
<?= $vv->wysiwyg()->field("invert")
    ->bool()
    ->onSavedRefreshListItem($vv)
    ->checkbox("Image à droite")

?>
