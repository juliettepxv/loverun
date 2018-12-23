<?php
/** @var Page $vv */
use Classiq\Models\Page;
$view->inside("layout/layout",$vv);
?>
<div class="pb-big">

        <?=$vv->wysiwyg()->field("blocks")
            ->listJson(site()->blocksList)
            ->contextMenuSize(SIZE_SMALL)
            ->htmlTag()
            ->addClass("blocks");
        ?>

</div>
