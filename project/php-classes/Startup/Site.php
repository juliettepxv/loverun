<?php

namespace Startup;


use Pov\System\AbstractSingleton;

/**
 * Cette classe contient des méthodes et des propriétés propre au projet
 * @package Startup
 */
class Site extends AbstractSingleton
{
    /**
     * @var string clé publique à configurer pour les APIs Google ajavascript (google map par exemple)
     */
    public $googleApiKey="";
    /**
     * @var string clé utilisée par google webmater tools pour vérifier que le site vous appartient
     */
    public $googleSiteVerification;
    /**
     * @var string identifiant Gogle analytics
     */
    public $googleAnalyticsId;
    /**
     * @var string[] liste des blocks possibles
     */
    public $blocksList=[
        "blocks/texte",
        "blocks/titre",
        "blocks/img",
        //"blocks/img-text",
        "blocks/block-photos/photos",
        "blocks/block-logos/block-logos",
        "blocks/iframe",
        "blocks/block-cards/cards",
        "blocks/block-encart/encart",
        "blocks/block-carousel/carousel",
        "blocks/block-faq/faq",
        //"blocks/video",
        "blocks/btn",
        "blocks/separator",
        "blocks/count-down"
    ];

    /**
     * Renvoie la home page
     * @return \Classiq\Models\Page|null
     * @throws \Pov\PovException
     */
    public function homePage(){
        return cq()->homePage();
    }

    public $facebookUrl="";
    public $instaUrl="";
}