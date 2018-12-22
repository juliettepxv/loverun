<?php
    /** @var \Classiq\Models\Nav $menu */
    $menu=\Classiq\Models\Nav::getByName("footer",true);
?>
<footer id="footer">
    <div class="container py-big">
        <?=$menu->wysiwyg()->field("items")
            ->listJson(["layout/item"])
            ->horizontal()
            ->contextMenuSize(SIZE_SMALL)
            ->contextMenuPosition(POSITION_BOTTOM)
            ->contextMenuPosition(POSITION_BOTTOM)
            ->onlyRecords("page")
            ->htmlTag("ul")
            ->addClass("")
        ?>
    </div>
</footer>