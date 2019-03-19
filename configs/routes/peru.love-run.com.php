<?php
/*
header('Location: https://love-run.com');
die();
*/
?>

<?php


the()->fmkHttpRoot="";// /github/classiq-startup
the()->configProjectUrl=new \Pov\Configs\ProjectUrl("peru.love-run.com"); // localhost/github/classiq-startup/fr
the()->fileSystem=new \Pov\Configs\FileSystem("peru");
the()->configProjectUrl->seoActive=true;
the()->boot->loadProject("project");

the()->project->langCode="es";
the()->project->languages=["es","fr"];
the()->project->languagesUrls=[
    "es"=>"peru.love-run.com",
    "fr"=>"love-run.com",
];
//force https?
the()->configProjectUrl->forceHttps=true;
// Traductions ui.
// https://docs.google.com/spreadsheets/d/1kefhXt0Z7g0P2cGItQK4k_hqhSoFTMaJyvzNYjKeqw8
// Copiez-collez ce google Sheet pour pouvoir le modifier puis modifiez l'url. Vous pouvez bien entendu utiliser un csv en local mais c'est moins pratique :)
the()->project->config_translations_csv_url="https://docs.google.com/spreadsheets/d/1B4faD-ETiL5KLturBE7MSn6MAPYk8yfOcPTROXJG_4w/export?gid=0&format=csv";
the()->project->config_translations_debug=true; //quand true recharge à chaque fois le CSV
\Classiq\Wysiwyg\Wysiwyg::$defaultWysiwygLanguage="es";

//config options

//Google Map etc...
//site()->googleApiKey="xxxxx";

//Google webmaster tools
//site()->googleSiteVerification="xxxxx";

//Google analytics
site()->googleAnalyticsId="UA-131797640-1";
site()->googleAnalyticsId="UA-45070402-20";

