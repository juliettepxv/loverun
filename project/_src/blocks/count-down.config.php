<?php
/**
 * Un titre
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */
$date=$vv->getData("date","2019-05-12T14:00");
?>
<label><?=trad("Image")?></label>
<?=$vv->wysiwyg()->field("image")
    ->file()
    ->setMimeAcceptImagesOnly()
    ->onSavedRefreshListItem($vv)
    ->button()
    ->render()

?>
<fieldset>
    <label><?=trad("Date")?></label>
    <?=$vv->wysiwyg()->field("date")
        ->string()
        ->onSavedRefreshListItem($vv)
        ->input("datetime-local")

    ?>
    <dfn class="">
        <?=DateTime::createFromFormat("Y-m-d\TH:i",$date)->format("l d F Y H:i")?>
    </dfn>
</fieldset>










