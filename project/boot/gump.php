<?php
//exemples pour modifier le comportement de GUMP (qui permet de gérer les messages d'erreur backoffice);
GUMP::add_validator("is_valid_geoloc", function($field, $input, $param = NULL) {
    return preg_match("/^[-0-9\.]+;[-0-9\.]+$/",$input[$field],$m)===1;
});
GUMP::set_error_message("is_valid_geoloc","Mauvaise géolocalisation");

GUMP::set_field_name("poster", "photo paysage");
GUMP::set_field_name("elevesmax", "élèves max par moniteur");
GUMP::set_field_name("thumbnail", "image de prévisualisation");
GUMP::set_field_name("region", "région");