<?php
/**
 * Une image avec eventuellement un lien
 * @var Classiq\Models\JsonModels\ListItem $vv
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

<label>Lien</label>
<?=$vv->wysiwyg()->field("href")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->input("url")
?>


<label>Taille</label>
<?=$vv->wysiwyg()->field("size")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->setDefaultValue("small")
    ->select([
        "Petit"=>"small",
        "Grand"=>"big"
    ]);
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





