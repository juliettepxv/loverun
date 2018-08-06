<?php
/** @var Page $vv */
use Classiq\Models\Page;
$view->inside("layout/layout", $vv);
?>

<div class="container mt-big">
    <div class="text-center">
        <?=trad("404 Cette page n'existe pas")?>
    </div>
    <div class="text-center">
        <?=trad("404 Vous allez être redirigé")?>
    </div>
</div>
<script>
    setTimeout(function(){
        document.location="<?=\Classiq\C_classiq::index_url()?>";
    },2000)
</script>
