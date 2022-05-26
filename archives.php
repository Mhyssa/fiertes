<?php
$Titre = "index";
require('layout/header.php');
?>

<!-- ------------------------------------------------------------------------------------------------------------------------------
        Retour sur la 1ère "Marche des Fiertés" d'Amiens
------------------------------------------------------------------------------------------------------------------------------ -->
<div class="row blocPurple " id="marche">
    <div class="col-12 col-sm-12">
        <h1 class="text-center pt-5 pb-5 borderWhite ">Retour sur la 1ère "Marche des Fiertés" d'Amiens</h1>
        <!--border-rainbow -->
    </div>
</div>


<!-- ------------------------------------------------------------------------------------------------------------------------------
        Videos
------------------------------------------------------------------------------------------------------------------------------ -->
<div class="row justify-content-center blocPurple pb-4">
    <div class="col-11 col-sm-11 col-md-6 ">
        <h2 class="text-center pt-4 pb-4 ">En videos</h2>
        <iframe title="Vidéo YouTube sur la 1ère marche des fiertés d'Amiens le 22 juin 2019" width="100%" height="350" src="https://www.youtube.com/embed/NtttY9GAaAg" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
</div>

<!-- ------------------------------------------------------------------------------------------------------------------------------
Pride 2021
------------------------------------------------------------------------------------------------------------------------------ -->
<?php
require('pride2021.php');
?>




<!-- ------------------------------------------------------------------------------------------------------------------------------
Pride 2019
------------------------------------------------------------------------------------------------------------------------------ -->
<?php
require('pride2019.php');
?>

<div class="row block-light ">
    <div class="col-12 col-sm-12 text-center border-rainbow pb-4 pt-4">
        <a href="#top">
            <img src="assets/img/picto/drapeau-philadelphia.ico" alt="pied de page avec le drapeau de philadelphia"
                 class="img-fluid h-auto" style="width: 120px;">
        </a>
    </div>
</div>


<?php
require('layout/footer.php');
?>
