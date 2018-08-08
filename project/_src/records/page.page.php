<?php
/** @var Page $vv */
use Classiq\Models\Page;
$view->inside("layout/layout",$vv);
?>
<div class="py-big">

        <div class="container">
            <?=$vv->wysiwyg()
                ->field("name_lang")
                ->string(\Pov\Utils\StringUtils::FORMAT_NO_HTML_SINGLE_LINE)
                ->setDefaultValue($vv->name)
                ->htmlTag("h1")
                ->addClass("mb-big")
            ?>
        </div>

        <?=$vv->wysiwyg()->field("blocks")
            ->listJson(site()->blocksList)
            ->htmlTag()
            ->addClass("blocks");
        ?>





</div>
