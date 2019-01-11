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
                <a href="https://www.facebook.com/loverunfestival/?__tn__=kC-R&eid=ARB1KNP77_fBOhFccST6hvK2gQL7sBu3BJ6f3Hzsaf_KC9U7Gw8Im6AjTlZZG4zi-leZB4gPN_1qt9d4&hc_ref=ARTerGpgHdQyQUSrHo1B7jZ0h-53D8FrgM2t_fd837_hcHrz-fvDvQqWL-dxNkKwtiM&fref=nf&__xts__[0]=68.ARAI7yGqsGSlOIYbY3UTI2wkzlcZGSgy4xSKf_JqQwZSPRCBJP71tDY_AEHJQtzIO2pDxmLoXcI1iR6DV79JFuC8VNBxye7J9jV-WedBFTCbgF6Zq2uMX4amqOj8q_MplCCJD3VLSus3IBC8R4kSMQwsM815Ea-t-pOFo-ULCZv7H3TZwHpmz2uRBeBe029Lu_5Y6XunVbwiEJ526Z9ixOKRiZmhiFf0l1AM9HTuJIQ4o6EjNNcH-Z8OUDY8ET1Fj2aeMhijGoxwyD9456poZ5QA2HVmf6VT6BfdEoWaSvNm6B_9Aa7MQEpsY5J8XXfJi5Ikdhe6LIhcgC6TO4NKpa3hoaeVTEaas-7SzA" target="_blank">
                    <?=pov()->svg->use("startup-social-facebook")?>
                </a>
                <a href="https://www.instagram.com/loverunofficial/" target="_blank">
                    <?=pov()->svg->use("startup-social-instagram")?>
                </a>
            </div>

        </div>

    </div>
</nav>