<?php

?>
<footer id="footer">
    <div class="container py-big">
        <div class="row">
            <?foreach (["footer1", "footer2", "footer3","footer4"] as $name):?>
            <div class="col-md-3">
                <hr>
                <?=site()->homePage()->wysiwyg()
                    ->field("vars.$name")
                    ->listJson(["layout/item"])
                    ->contextMenuSize(SIZE_SMALL)
                ->onlyRecords("page")
                ->htmlTag("ul")?>
            </div>
            <?endforeach;?>
        </div>

    </div>

</footer>