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

<?/*
<label>Ou téléchargement...</label>
<?=$vv->wysiwyg()->field("fichier")
    ->file()
    ->onSavedRefreshListItem($vv)
    ->button()
    ->render();
?>
*/?>





