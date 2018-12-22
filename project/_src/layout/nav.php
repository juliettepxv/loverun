<?php
/** @var \Classiq\Models\Nav $menu */
$menu=\Classiq\Models\Nav::getByName("menu",true);
?>
<nav id="nav" class="shadow-medium">
    <div id="nav-mask" data-nav-menu-toggle></div>

    <div id="nav-bar" >

        <a class="logo bgimg-cover"
           style="background-image: url('<?=the()->fileSystem->filesystemToHttp("project/logo.png")?>')"
           href="<?=cq()->homePage()->href()?>"></a>

        <button data-nav-menu-toggle class="burger d-flex d-xl-none unstyled">
            <?=pov()->svg->use("startup-burger")?>
            <?=pov()->svg->use("startup-close")?>
        </button>

    </div>

    <div id="nav-content">

        <?=$menu->wysiwyg()->field("items")
            ->listJson(["layout/item"])
            ->horizontal()
            ->contextMenuSize(SIZE_SMALL)
            ->contextMenuPosition(POSITION_TOP)
            ->onlyRecords("page")
            ->htmlTag("ul")
            ->addClass("menu")
        ?>

        <ul class="right">
            <?=$view->render("./menu-languages")?>

        </ul>

    </div>
</nav>