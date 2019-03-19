<?php
the()->fmkHttpRoot="/github/loverun";// /github/classiq-startup
the()->configProjectUrl=new \Pov\Configs\ProjectUrl("localhost/github/loverun/fr"); // localhost/github/classiq-startup/fr
the()->fileSystem=new \Pov\Configs\FileSystem("project");
the()->configProjectUrl->seoActive=true;
the()->boot->loadProject("project");
the()->project->langCode="fr";
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
\Classiq\Wysiwyg\Wysiwyg::$defaultWysiwygLanguage="fr";

//config options

//Google Map etc...
//site()->googleApiKey="xxxxx";

//Google webmaster tools
//site()->googleSiteVerification="xxxxx";

//Google analytics
//site()->googleAnalyticsId="UA-xxxxxx";

site()->facebookUrl="https://www.facebook.com/loverunfestival/?__tn__=kC-R&eid=ARB1KNP77_fBOhFccST6hvK2gQL7sBu3BJ6f3Hzsaf_KC9U7Gw8Im6AjTlZZG4zi-leZB4gPN_1qt9d4&hc_ref=ARTerGpgHdQyQUSrHo1B7jZ0h-53D8FrgM2t_fd837_hcHrz-fvDvQqWL-dxNkKwtiM&fref=nf&__xts__[0]=68.ARAI7yGqsGSlOIYbY3UTI2wkzlcZGSgy4xSKf_JqQwZSPRCBJP71tDY_AEHJQtzIO2pDxmLoXcI1iR6DV79JFuC8VNBxye7J9jV-WedBFTCbgF6Zq2uMX4amqOj8q_MplCCJD3VLSus3IBC8R4kSMQwsM815Ea-t-pOFo-ULCZv7H3TZwHpmz2uRBeBe029Lu_5Y6XunVbwiEJ526Z9ixOKRiZmhiFf0l1AM9HTuJIQ4o6EjNNcH-Z8OUDY8ET1Fj2aeMhijGoxwyD9456poZ5QA2HVmf6VT6BfdEoWaSvNm6B_9Aa7MQEpsY5J8XXfJi5Ikdhe6LIhcgC6TO4NKpa3hoaeVTEaas-7SzA";
site()->instaUrl="https://www.instagram.com/loverunofficial/";