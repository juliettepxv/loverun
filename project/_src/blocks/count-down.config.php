<?php
/**
 * Un titre
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */

?>
<label>Image</label>
<?=$vv->wysiwyg()->field("image")
    ->file()
    ->setMimeAcceptImagesOnly()
    ->onSavedRefreshListItem($vv)
    ->button()
    ->render()

?>









