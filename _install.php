<?php
$httpDir=dirname("$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
$routeDir="configs/routes/$httpDir";
//crée le répertoire
if(!is_dir($routeDir)){
    mkdir($routeDir,null,true);
}
//crée les fichiers de config pour chaque langue
$outputs=[];
foreach(["fr","en"] as $lang){
    $configFile="$routeDir/$lang.php";
    if(!is_file($configFile)){
        $content=file_get_contents("_install/route-config-template.php");
        $content=str_replace("zzz-fmkHttpRoot-zzz",dirname($_SERVER["REQUEST_URI"]),$content);
        $content=str_replace("zzz-configProjectUrl-zzz","$httpDir/$lang",$content);
        $content=str_replace("zzz-langCode-zzz","$lang",$content);
        $content=str_replace("zzz-httpHost-zzz","http://".$_SERVER["HTTP_HOST"],$content);
        file_put_contents($configFile,$content);
        $outputs[$configFile]=$content;
    }else{
        $outputs[$configFile]="Le fichier existait déjà, on ne l'a pas écrasé";
    }
}
?>
<style>
    pre{
        background-color: #f0f0f0;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #999999;
    }
</style>
<?foreach ($outputs as $file=>$content):?>
<h3><?=$file?></h3>
<pre><?=$content?></pre>
<?endforeach?>

