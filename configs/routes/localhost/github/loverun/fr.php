<?php
the()->fmkHttpRoot="/github/loverun";// /github/classiq-startup
the()->configProjectUrl=new \Pov\Configs\ProjectUrl("localhost/github/loverun/fr"); // localhost/github/classiq-startup/fr
the()->fileSystem=new \Pov\Configs\FileSystem("project");
the()->configProjectUrl->seoActive=true;
the()->boot->loadProject("project");
the()->project->langCode="fr";
the()->project->languages=["fr","en"];
the()->project->languagesUrls=[
    "fr"=>"http://localhost/github/loverun/fr",
    "en"=>"http://localhost/github/loverun/en"
];
//force https?
the()->configProjectUrl->forceHttps=false;
// Traductions ui.
// https://docs.google.com/spreadsheets/d/1kefhXt0Z7g0P2cGItQK4k_hqhSoFTMaJyvzNYjKeqw8
// Copiez-collez ce google Sheet pour pouvoir le modifier puis modifiez l'url. Vous pouvez bien entendu utiliser un csv en local mais c'est moins pratique :)
the()->project->config_translations_csv_url="https://docs.google.com/spreadsheets/d/1kefhXt0Z7g0P2cGItQK4k_hqhSoFTMaJyvzNYjKeqw8/export?gid=0&format=csv";
the()->project->config_translations_debug=true; //quand true recharge à chaque fois le CSV
\Classiq\Wysiwyg\Wysiwyg::$defaultWysiwygLanguage="es";

//config options

//Google Map etc...
//site()->googleApiKey="xxxxx";

//Google webmaster tools
//site()->googleSiteVerification="xxxxx";

//Google analytics
//site()->googleAnalyticsId="UA-xxxxxx";