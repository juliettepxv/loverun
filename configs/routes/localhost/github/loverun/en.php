<?php
the()->fmkHttpRoot="/github/loverun";// /github/classiq-startup
the()->configProjectUrl=new \Pov\Configs\ProjectUrl("localhost/github/loverun/en"); // localhost/github/classiq-startup/fr
the()->fileSystem=new \Pov\Configs\FileSystem("project");
the()->configProjectUrl->seoActive=true;
the()->boot->loadProject("project");
the()->project->langCode="en";
the()->project->languages=["fr","en","es"];
the()->project->languagesUrls=[
    "fr"=>"http://localhost/github/loverun/fr",
    "en"=>"http://localhost/github/loverun/en",
    "es"=>"http://localhost/github/loverun/es"
];
//force https?
the()->configProjectUrl->forceHttps=false;
// Traductions ui loverun only
the()->project->config_translations_csv_url="https://docs.google.com/spreadsheets/d/1B4faD-ETiL5KLturBE7MSn6MAPYk8yfOcPTROXJG_4w/export?gid=0&format=csv";
the()->project->config_translations_debug=true; //quand true recharge à chaque fois le CSV

//config options

//Google Map etc...
//site()->googleApiKey="xxxxx";

//Google webmaster tools
//site()->googleSiteVerification="xxxxx";

//Google analytics
//site()->googleAnalyticsId="UA-xxxxxx";