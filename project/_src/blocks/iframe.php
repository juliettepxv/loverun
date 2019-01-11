<?php
/**
 * Un block iframe 16/9
 * Les urls youtube ou vimeo peuvent être inséré directement, sinon il faut mettre le code de l'iframe
 * @var Classiq\Models\JsonModels\ListItem $vv
 */
$iframe=$vv->getData("embed");
$service_id="";
$service="";
$iframeTag="";
if($iframe){
    $serviceUrl=utils()->iFrame->srcFromServiceUrl($iframe);
    if($serviceUrl){
        $serviceUrl=utils()->iFrame->vimeoSrcPlayerParams($serviceUrl,"2AA1DB",0,0,0,0,0);
        $serviceUrl=utils()->iFrame->youtubeSrcPlayerParams($serviceUrl,"2AA1DB",0,0,0,0,0);
    }
    $iframeTag=utils()->iFrame->fromSrc($serviceUrl);

    if(!$iframeTag){
        $iframeTag=pov()->utils->iFrame->fromSrc($iframe);
    }
}
?>
<?if(cq()->wysiwyg() || $iframeTag):?>

    <div <?=$vv->wysiwyg()->openConfigOnCreate()->attr()?> class="block block-iframe py-medium">
        <div class="container">
                <?if($vv->getData("naturalCode")):?>
                <?=$iframe?>
                <?else:?>
                    <?if(!$iframeTag):?>
                        <div id="cq-style" class="gr">
                            <div text-center class="cq-box cq-th-danger">
                                Il faudrait configurer cette iframe
                            </div>
                        </div>
                    <?else:?>
                        <div class="embed-responsive embed-responsive-16by9">
                            <?=$iframeTag?>
                        </div>
                    <?endif?>
                <?endif?>


        </div>
    </div>
<?endif?>

