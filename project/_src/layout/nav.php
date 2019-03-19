<?php
/** @var \Classiq\Models\Nav $menu */
$menu=\Classiq\Models\Nav::getByName("menu",true);
?>
<nav id="nav">
    <div id="nav-mask" class="visible-nav-open" data-nav-menu-toggle></div>

    <div id="nav-bar" >

        <a class="logo" href="<?=cq()->homePage()->href()?>">
            <img alt="logo loverun" src="<?=the()->fileSystem->filesystemToHttp("project/svg/logo.svg")?>?v=<?=the()->version()?>">
        </a>

        <button data-nav-menu-toggle class="burger d-flex unstyled">
            <?=pov()->svg->use("startup-burger")->addClass("visible-nav-closed")?>
            <?=pov()->svg->use("startup-close")->addClass("visible-nav-open")?>
        </button>

    </div>

    <div id="nav-content">

        <div class="menu-wrap">


            <a class="logo" href="<?=cq()->homePage()->href()?>">
                <img alt="logo loverun" src="<?=the()->fileSystem->filesystemToHttp("project/svg/logo.svg")?>?v=<?=the()->version()?>">
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

                <?if(site()->facebookUrl):?>
                <a href="<?=site()->facebookUrl?>" target="_blank">
                    <?=pov()->svg->use("startup-social-facebook")?>
                </a>
                <?endif?>

                <?if(site()->instaUrl):?>
                <a href="<?=site()->instaUrl?>" target="_blank">
                    <?=pov()->svg->use("startup-social-instagram")?>
                </a>
                <?endif?>

            </div>

        </div>

    </div>
</nav>