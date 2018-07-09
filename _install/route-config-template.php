<?php
the()->fmkHttpRoot="zzz-fmkHttpRoot-zzz";// /github/classiq-startup
the()->configProjectUrl=new \Pov\Configs\ProjectUrl("zzz-configProjectUrl-zzz"); // localhost/github/classiq-startup/fr
the()->fileSystem=new \Pov\Configs\FileSystem("project");
the()->configProjectUrl->seoActive=true;
the()->boot->loadProject("project");
the()->project->langCode="zzz-langCode-zzz";
the()->project->languages=["fr","en"];

//traductions ui
the()->project->config_translations_csv_url="https://docs.google.com/spreadsheets/d/1kefhXt0Z7g0P2cGItQK4k_hqhSoFTMaJyvzNYjKeqw8/export?gid=0&format=csv";
the()->project->config_translations_debug=true; //quand true recharge à chaque fois le CSV