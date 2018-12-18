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
<label>Format</label>
<?=$vv->wysiwyg()->field("size")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->setDefaultValue("col-6 col-md-3")
    ->select([
            "petit"=>"col-6 col-md-3",
            "moyen"=>"col-6 col-md-6",
            "grand"=>"col-6 col-md-9",
    ])

?>






