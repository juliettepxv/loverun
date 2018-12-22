<?php
/** @var Page $vv */

use Classiq\Models\Page;

$view->inside("layout/layout", $vv);
?>

<div class="container py-big">

    <div class="bg-gradient-light pxy-big">
        <h1 class="py-small h1">h1 rentrez dans le mouvement !</h1>
        <h2 class="py-small h2">h2 rentrez dans le mouvement !</h2>
        <h3 class="py-small h3">h3 Actualitédifficillime reperiuntur in iis</h3>
        <h4 class="py-small h4">h4 Nouveautés en 2019 !difficillime reperiuntur in iis</h4>
        <h5 class="py-small h5">h5 Bouton / texte</h5>
        <p>p Itaque verae amicitiae difficillime reperiuntur in iis qui in honoribus reque publica versantur; ubi enim
            istum invenias qui honorem amici anteponat suo? Quid? Haec ut omittam, quam graves, quam difficiles
            plerisque videntur calamitatum societates! Ad quas non est facile inventu qui descendant. Quamquam Ennius
            recte.

            Postremo ad id indignitatis est ventum, ut cum peregrini ob formidatam haut ita dudum alimentorum inopiam
            pellerentur ab urbe praecipites, sectatoribus disciplinarum liberalium inpendio paucis sine respiratione
            ulla extrusis, tenerentur minimarum adseclae veri, quique id simularunt ad tempus, et tria milia saltatricum
            ne interpellata quidem cum choris totidemque remanerent magistris.

            Sed laeditur hic coetuum magnificus splendor levitate paucorum incondita, ubi nati sunt non reputantium, sed
            tamquam indulta licentia vitiis ad errores lapsorum ac lasciviam. ut enim Simonides lyricus docet, beate
            perfecta ratione vieturo ante alia patriam esse convenit gloriosam.</p>
    </div>


    <div class="bg-gradient-light pxy-big my-small">

        <h5 class="py-small h5">.bg-gradient-light</h5>
        <div class="bg-white pxy-big my-small">
            <h5 class="py-small h5">.bg-white</h5>
        </div>

    </div>

    <div class="bg-gradient pxy-big my-small">
        <h5 class="py-small h5">.bg-gradient</h5>

    </div>

    <div class="bg-blue pxy-big my-small">
        <h5 class="py-small h5">.bg-blue</h5>
    </div>

    <div class="bg-gradient-light pb-big px-big my-small">

        <div class="my-big" style="position:relative; top:-100px;">
            <?= file_get_contents("project/svg/gros-trait.svg") ?>
        </div>


        <div class="bg-white pxy-big my-small">
            <h5 class="py-small h4 pink">.h4.pink</h5>
                <a class="btn" href="#">
                .btn en savoir +
                </a>
        </div>

        <a class="btn mr-small" href="#">
            .btn en savoir +
        </a>
        <a class="btn-big" href="#">
            .btn-big en savoir +
        </a>
        <div class=" py-big">
            <span class="my-big">
            <?= file_get_contents("project/svg/double-trait.svg") ?>
            </span>

            <span class="my-big"">
            <?= file_get_contents("project/svg/petit-trait.svg") ?>
            </span>
            <span class="mxy-big"">
            <?= file_get_contents("project/svg/arc.svg") ?>
            </span>
        </div>


    </div>

    <div class="bg-gradient pxy-big my-small">

        <a class="btn" href="#">
            .btn en savoir +
        </a>

        <div class="my-big">
            <?= file_get_contents("project/svg/slash.svg") ?>
        </div>

    </div>


    <div class="my-big" style="width: 300px;">
        <?= file_get_contents("project/svg/logo.svg") ?>
    </div>


</div>


