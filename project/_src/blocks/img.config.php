<?php
/**
 *
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */
?>
<label><?=trad("Choisir une image")?></label>
<?= $vv->wysiwyg()->field("targetUid")
    ->file()
    ->setMimeAcceptImagesOnly()
    ->onSavedRefreshListItem($vv)
    ->button()
    ->render();
?>
<label><?=trad("zoom")?></label>
<?=$vv->wysiwyg()
    ->field("zoom")
    ->bool()
    ->onSavedRefreshListItem($vv)
    ->checkbox(trad("Activer le zoom"))
?>

