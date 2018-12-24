<?php
/**
 * Un lien vers une page dans la nav
 * @var Classiq\Models\JsonModels\ListItem $vv
 */
?>
<div id="wysiwyg" <?=$view->attrRefresh($vv->uid())?>>

    <fieldset>
        <label>Page</label>
        <?=$vv->wysiwyg()->field("targetUid")
            ->recordPicker("page",false)
            ->onSavedRefreshListItem($vv)
            ->buttonRecord()
            ->render()
        ?>
    </fieldset>

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

    <fieldset>
        <?=$vv->wysiwyg()->field("styleButton")
        ->bool()
            ->onSavedRefreshListItem($vv)
            ->checkbox("Afficher sous forme de bouton")
        ?>
    </fieldset>

    <fieldset>
        <label>Sous rubriques</label>
        <?=$vv->wysiwyg()->field("children")
            ->recordPicker("page",true)
            ->onSavedRefreshListItem($vv)
            ->buttonRecord()
            ->render()
        ?>
    </fieldset>

</div>