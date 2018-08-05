<?php
/**
 * Un lien vers une page dans la nav
 * @var Classiq\Models\JsonModels\ListItem $vv
 */
?>
<div id="wysiwyg" <?=$view->attrRefresh($vv->uid())?>>
    <fieldset>
        <label>Texte du lien</label>
        <?foreach (the()->project->languages as $lang):?>
            <?=$vv->wysiwyg()->field("label_$lang")
                ->string()
                ->isTranslated($lang)
                ->onSavedRefreshListItem($vv)
                ->input("text","Texte du lien")
            ?>
        <?endforeach;?>
        <dfn>Si vous souhaitez afficher un texte différent sur le lien</dfn>
    </fieldset>
</div>