<?php
/**
 * Une image avec différents formats
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 *
 *
 */

?>

<label><?=trad("Image")?></label>
<?=$vv->wysiwyg()->field("targetUid")
    ->file()
    ->onSavedRefreshListItem($vv)
    ->button()
    ->render()
?>

<label><?=trad("Choissez une page")?></label>
<?=$vv->wysiwyg()->field("page")
    ->recordPicker("Page")
    ->onSavedRefreshListItem($vv)
    ->buttonRecord()
    ->render()
?>
<label><?=trad("ou une url")?></label>
<?=$vv->wysiwyg()->field("url")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->input()

?>

<label><?=trad("Texte du bouton")?></label>
<?foreach (the()->project->languages as $lang):?>
    <?=$vv->wysiwyg()->field("label_$lang")
        ->string()
        ->onSavedRefreshListItem($vv)
        ->isTranslated($lang)
        ->input("text",trad("Texte du bouton"))
    ?>
<?endforeach;?>







