<?php
/**
 * Un fichier à télécharger
 * @var Classiq\Models\JsonModels\ListItem $vv
 */
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

<label>Choissez une page</label>
<?=$vv->wysiwyg()->field("page")
    ->recordPicker("Page")
    ->onSavedRefreshListItem($vv)
    ->buttonRecord()
    ->render()
?>

<label>Choissez un fichier</label>
<?=$vv->wysiwyg()->field("file")
    ->file()
    ->onSavedRefreshListItem($vv)
    ->button()
    ->render();
?>

<label>Url</label>
<?=$vv->wysiwyg()->field("url")
        ->string()
        ->onSavedRefreshListItem($vv)
        ->isTranslated($lang)
        ->input("url","http://")
    ?>


