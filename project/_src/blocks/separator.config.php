<?php
/**
 * Un titre
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */

?>

<label>Espace</label>
<?=$vv->wysiwyg()->field("style")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->setDefaultValue("py-big")
    ->select([
            "big"=>"py-big",
            "medium"=>"py-medium",
            "small"=>"py-small"
    ])

?>





