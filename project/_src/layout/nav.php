<?php
/** @var \Classiq\Models\Nav $menu */
$menu=\Classiq\Models\Nav::getByName("menu",true);
?>
<nav id="nav">
    <div id="nav-mask" class="visible-nav-open" data-nav-menu-toggle></div>

    <div id="nav-bar" >

        <a class="logo" href="<?=cq()->homePage()->href()?>">
            <img alt="logo loverun" src="<?=the()->fileSystem->filesystemToHttp("project/svg/logo.svg")?>">
        </a>

        <button data-nav-menu-toggle class="burger d-flex unstyled">
            <?=pov()->svg->use("startup-burger")->addClass("visible-nav-closed")?>
            <?=pov()->svg->use("startup-close")->addClass("visible-nav-open")?>
        </button>

    </div>

    <div id="nav-content">

        <div class="menu-wrap">


            <a class="logo" href="<?=cq()->homePage()->href()?>">
                <img alt="logo loverun" src="<?=the()->fileSystem->filesystemToHttp("project/svg/logo.svg")?>">
            </a>

            <?=$menu->wysiwyg()->field("items")
                ->listJson(["layout/item"])
                ->contextMenuSize(SIZE_SMALL)
                ->contextMenuPosition(POSITION_TOP_RIGHT)
                ->onlyRecords("page")
                ->htmlTag("ul")
                ->addClass("menu")
            ?>

            <div class="social">
                <a href="https://www.facebook.com/loverun.official/" target="_blank">
                    <?=pov()->svg->use("startup-social-facebook")?>
                </a>
                <a href="https://www.instagram.com/loverunofficial/" target="_blank">
                    <?=pov()->svg->use("startup-social-instagram")?>
                </a>
            </div>

        </div>

    </div>
</nav>