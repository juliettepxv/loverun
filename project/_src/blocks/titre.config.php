<?php
/**
 * Un titre
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */

?>

<label>Style de titre</label>
<?=$vv->wysiwyg()->field("style")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->setDefaultValue("normal")
    ->select([
            "normal"=>"normal",
            "pill"=>"pill"
    ])

?>
<label>SEO</label>
<?=$vv->wysiwyg()->field("balise")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->setDefaultValue("h2")
    ->select([
        "h1","h2","h3","h4"
    ])

?>






