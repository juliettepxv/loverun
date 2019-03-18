<?php
/**
 * Une image avec eventuellement un lien
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 *
 */
$ar=[];
$ar[trad("Petit")]="small";
$ar[trad("Grand")]="bg-big";
?>

<label><?=trad("Image")?></label>
<?=$vv->wysiwyg()->field("targetUid")
    ->file()
    ->onSavedRefreshListItem($vv)
    ->button()
    ->render()
?>

<label><?=trad("Lien")?></label>
<?=$vv->wysiwyg()->field("href")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->input("url")
?>


<label><?=trad("Size")?></label>
<?=$vv->wysiwyg()->field("size")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->setDefaultValue("small")
    ->select($ar);
?>

<?/*
<label>Ou téléchargement...</label>
<?=$vv->wysiwyg()->field("fichier")
    ->file()
    ->onSavedRefreshListItem($vv)
    ->button()
    ->render();
?>
*/?>





