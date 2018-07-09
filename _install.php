<?php
$httpDir=dirname("$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
$routeDir="configs/routes/$httpDir";
//crée le répertoire
if(!is_dir($routeDir)){
    mkdir($routeDir,null,true);
}
//crée les fichiers de config pour chaque langue
foreach(["fr","en"] as $lang){
    $configFile="$routeDir/$lang.php";
    if(!is_file($configFile)){
        $content=file_get_contents("_install/route-config-template.php");
        $content=str_replace("zzz-fmkHttpRoot-zzz",dirname($_SERVER["REQUEST_URI"]),$content);
        $content=str_replace("zzz-configProjectUrl-zzz","$httpDir/$lang",$content);
        $content=str_replace("zzz-langCode-zzz","$lang",$content);
        file_put_contents("$routeDir/$lang.php",$content);
    }
}
?>

