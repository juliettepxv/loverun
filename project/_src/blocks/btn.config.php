<?php
/**
 * Un fichier à télécharger
 * @var Classiq\Models\JsonModels\ListItem $vv
 */
$ar=[];
$ar["normal"]="normal";
$ar["gradient"]="bg-gradient";
$ar["big"]="big";
?>


<label><?=trad("Style de titre")?>Style de titre</label>
<?=$vv->wysiwyg()->field("style")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->setDefaultValue("normal")
    ->select($ar)

?>

<label><?=trad("Style de titre")?></label>
<?foreach (the()->project->languages as $lang):?>
<?=$vv->wysiwyg()->field("label_$lang")
        ->string()
        ->onSavedRefreshListItem($vv)
        ->isTranslated($lang)
        ->input("text",trad("Texte du lien"))
?>
<?endforeach;?>

<label><?=trad("Choissez une page")?></label>
<?=$vv->wysiwyg()->field("page")
    ->recordPicker("Page")
    ->onSavedRefreshListItem($vv)
    ->buttonRecord()
    ->render()
?>

<label><?=trad("Choissez un fichier")?></label>
<?=$vv->wysiwyg()->field("file")
    ->file()
    ->onSavedRefreshListItem($vv)
    ->button()
    ->render();
?>

<label><?=trad("Url")?>Url</label>
<?=$vv->wysiwyg()->field("url")
        ->string()
        ->onSavedRefreshListItem($vv)
        ->isTranslated($lang)
        ->input("url","http://")
    ?>


