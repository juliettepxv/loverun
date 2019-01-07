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
<label>Activer le zoom?</label>
<?=$vv->wysiwyg()
    ->field("zoom")
    ->bool()
    ->onSavedRefreshListItem($vv)
    ->checkbox("Activer le zoom")
?>

