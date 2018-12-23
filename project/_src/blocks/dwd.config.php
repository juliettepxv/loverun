<?php
/**
 * Un fichier à télécharger
 * @var Classiq\Models\JsonModels\ListItem $vv
 */
?>
<label>Choissez un fichier</label>
<?=$vv->wysiwyg()->field("targetUid")
    ->file()
    ->onSavedRefreshListItem($vv)
    ->button()
    ->render();
?>

<label>Style de titre</label>
<?=$vv->wysiwyg()->field("style")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->setDefaultValue("normal")
    ->select([
        "normal"=>"normal",
        "gradient"=>"bg-gradient",
        "big"=>"big"
    ])

?>

<label>Texte affiché</label>
<?foreach (the()->project->languages as $lang):?>
<?=$vv->wysiwyg()->field("label_$lang")
        ->string()
        ->onSavedRefreshListItem($vv)
        ->isTranslated($lang)
        ->input("text","Texte du lien")
?>
<?endforeach;?>


