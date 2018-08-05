<?php
/**
 * Un fichier à télécharger
 * @var Classiq\Models\JsonModels\ListItem $vv
 */
?>
<?foreach (the()->project->languages as $lang):?>
<label>Vidéo <?=\Localization\Lang::getByCode($lang)->name?></label>
<?=$vv->wysiwyg()->field("targetUid_$lang")
    ->file()
        ->setMimeAcceptVideoOnly()
    ->onSavedRefreshListItem($vv)
    ->button()
    ->render();
?>
<?endforeach;?>

