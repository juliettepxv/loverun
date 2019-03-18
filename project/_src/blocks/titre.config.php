<?php
/**
 * Un titre
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */

?>

<label><?=trad("Style de titre")?></label>
<?=$vv->wysiwyg()->field("style")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->setDefaultValue("normal")
    ->select([
            "normal"=>"normal",
            "pill"=>"pill"
    ])

?>
<?if($vv->getData("style")=="pill"):?>
    <label><?=trad("Vous souhaitez intégrer une image de fond?")?></label>
    <?=$vv->wysiwyg()->field("image")
        ->file()
        ->setMimeAcceptImagesOnly()
        ->onSavedRefreshListItem($vv)
        ->button()
        ->render()

    ?>
<?endif?>



<label>SEO</label>
<?=$vv->wysiwyg()->field("balise")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->setDefaultValue("h2")
    ->select([
        "h1","h2","h3","h4"
    ])

?>







