<?php
$Titre = "Page 404";
require("layout/header.php");
?>

<div class="container">
    <div class="row my-3">
        <div class="col-12 col-sm-12 text-center shadow bg-danger text-light rounded mt-5">
            <h1 class="mt-3">Oups ! tu as trouvé la page 404</h1>
            <p>
                Click sur l'image de ton choix pour revenir à l'accueil  <i class="fas fa-arrow-circle-down"></i>
            </p>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6 col-12 p-0">
            <a href="index.php"><img src="assets\img\jf\2019-Gaypride-AmiensCity-15.jpg" alt="La page 404 de fiertesamiens.fr" class="img-fluid rounded"></a>
        </div>
        <div class="col-md-6 col-12 p-0">
            <a href="index.php"><img src="assets\img\jf\2019-Gaypride-AmiensCity-16.jpg" alt="La page 404 de fiertesamiens.fr" class="img-fluid rounded"></a>
        </div>
        <div class="col-md-6 col-12 p-0">
            <a href="index.php"><img src="assets\img\jf\2019-Gaypride-AmiensCity-17.jpg" alt="La page 404 de fiertesamiens.fr" class="img-fluid rounded"></a>
        </div>
        <div class="col-md-6 col-12 p-0">
            <a href="index.php"><img src="assets\img\jf\2019-Gaypride-AmiensCity-14.jpg" alt="La page 404 de fiertesamiens.fr" class="img-fluid rounded"></a>
        </div>
    </div>
</div>

<?php  
require("layout/footer.php")
?>