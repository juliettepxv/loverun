<?php
use Classiq\Classiq;
use Classiq\Models\User;
use Classiq\Wysiwyg\Wysiwyg;
use Localization\Lang;

//----------bdd-------------------
include_once __DIR__ . "/db.php";
include_once __DIR__ . "/events.php";
include_once __DIR__ . "/gump.php";
include_once __DIR__ . "/mail-config.php";

Classiq::install();

//loged in?
if(User::connected()){
    the()->human->isAdmin = Wysiwyg::$enabled = User::connected()->isAdmin();
}
/**
 * Pour avoir des textes d'interface
 * @param string $term
 * @return string
 */
function trad($term){
    return the()->project->translation($term);
}
/**
 * Accès rapide vers les utilitaires
 * @return \Pov\Utils\Utils
 */
function utils(){
    return pov()->utils;
}

Lang::$flagsUrlBasePath="vendor/davidmars/localization/flags/";

