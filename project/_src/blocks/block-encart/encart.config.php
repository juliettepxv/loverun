<?php
/**
 * Une image avec différents formats
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 *
 *
 */

$ar1=[];
$ar1[trad("Icones texte")]="icones-texte";
$ar1[trad("Icones images")]="icones-image";
$ar1[trad("Colonnes")]="colonnes";

$ar2=[];
$ar2[trad("Blanc")]="bg-white";
$ar2[trad("Couleur")]="bg-gradient";

?>

<label><?=trad("Style")?></label>
<?=$vv->wysiwyg()->field("style")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->setDefaultValue("icones-texte")
    ->select($ar1)
?>
<label><?=trad("Couleur")?></label>
<?=$vv->wysiwyg()->field("color")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->setDefaultValue("bg-white")
    ->select($ar2);
?>
<?=$vv->wysiwyg()->field("deco")
    ->bool()
    ->onSavedRefreshListItem($vv)
    ->checkbox(trad("Afficher le motif"));






