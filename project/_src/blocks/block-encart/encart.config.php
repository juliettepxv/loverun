<?php
/**
 * Une image avec différents formats
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 *
 *
 */

?>

<label>Style</label>
<?=$vv->wysiwyg()->field("style")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->setDefaultValue("icones-texte")
    ->select([
            "Icones texte"=>"icones-texte",
            "Icones images"=>"icones-image",
            "Colonnes"=>"colonnes"
    ])
?>
<label>Couleur</label>
<?=$vv->wysiwyg()->field("color")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->setDefaultValue("bg-white")
    ->select([
        "Blanc"=>"bg-white",
        "Couleur"=>"bg-gradient"
    ]);
?>
<?=$vv->wysiwyg()->field("deco")
    ->bool()
    ->onSavedRefreshListItem($vv)
    ->checkbox("Afficher le motif");






