<?php
/**
 *
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */
?>
<label>Activer le zoom?</label>
<?=$vv->wysiwyg()
    ->field("zoom")
    ->bool()
    ->onSavedRefreshListItem($vv)
    ->checkbox("Activer le zoom")
?>

