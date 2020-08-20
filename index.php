<?php
require('header.php');
?>



<!-- ------------------------------------------------------------------------------------------------------------------------------
Affiche 16:9 de Louiza
------------------------------------------------------------------------------------------------------------------------------ -->

<div class="row mt-5" >
    <div class="col-12 col-sm-12">
        <img src="assets/img/banniere_pride.png"
            alt="2ème Marche des fiertés ( gaypride ) d'Amiens 19 SEPTEMBRE 2020 - 13H PLACE LÉON GONTIER 80000 AMIENS"
            width="100%" class="shadow mt-3">
        <div class="text-center mt-2 "><a target="_blank" href="assets/img/affiche_pride_2_amiens.pdf"><i class="fas fa-download fa-lg mr-2"></i>Télécharges l'affiche officiel ici</a></div>
    </div>
</div>




<!-- ------------------------------------------------------------------------------------------------------------------------------
    Compte à rebourd RENDEZ VOUS DANS + Details de la journée
------------------------------------------------------------------------------------------------------------------------------ -->

<div class="row py-5">
    <div class="col-12 col-md-6 text-center">
        <h2 class="coral">Début de la marche dans :</h2>
        <ul>
            <li class="count coral"><span id="days"></span>Jours</li>
            <li class="count coral"><span id="hours"></span>Heures</li>
            <li class="count coral"><span id="minutes"></span>Minutes</li>
            <li class="count coral"><span id="seconds"></span>Secondes</li>
        </ul>
    </div>
    <div class="col-12 col-md-6">
        <h2 class="mb-5 coral">
            Déroulement de la journée du 19 septembre 
        </h2>
        <ul>

            <li class="mb-2 thasadith coral"><i class="fas fa-volume-up coral pr-3"></i>13h - prises de paroles</li>
            <li class="mb-2 thasadith coral"><i class="fas fa-hiking coral pr-4"></i>14h  -  départ de la déambulation</li>
            <li class="mb-2 thasadith coral"><i class="fas fa-map-pin coral pr-4"></i>18h -  fin de la déambulation</li>
        </ul>
    </div>
</div>


<!-- ------------------------------------------------------------------------------------------------------------------------------
    Plan de la marche / Parcours
------------------------------------------------------------------------------------------------------------------------------ -->
<div class="col-lg-7 dotted pb-3  m-auto">
        <!-- <hr class="col-lg-6 col-12 "> -->
    </div>
<div class="row block">


    <div class="col-12 col-sm-12 col-md-6">
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1KvQWCV7DtvDxS_uvGcxxPnAvQECRA6lr" width="100%"
            height="520px"></iframe>
    </div>
   
        <div class="col-12 col-sm-12 col-md-6 p-5  text-center">
        
            <h2 class="mb-3 white">Noms des rues</h2>
            <ol>
                <li class="white"><i class="fas fa-map-marker-alt white"></i> Départ Place Léon Gontier</li>
                <li class="white"><i class="fas fa-map-marker-alt white"></i> Rue de la 2eme division Blindée</li>
                <li class="white"><i class="fas fa-map-marker-alt white"></i> Rue de Beauvais</li>
                <li class="white"><i class="fas fa-map-marker-alt white"></i> Rue Dumeril</li>
                <li class="white"><i class="fas fa-map-marker-alt white"></i> Rue des Jacobins</li>
                <li class="white"><i class="fas fa-map-marker-alt white"></i> Rue des Otages</li>
                <li class="white"><i class="fas fa-map-marker-alt white"></i> Boulevard de Belfort</li>
                <li class="white"><i class="fas fa-map-marker-alt white"></i> Place Alphonse Fiquet</li>
                <li class="white"><i class="fas fa-map-marker-alt white"></i> Rue de Noyon</li>
                <li class="white"><i class="fas fa-map-marker-alt white"></i> Place René Goblet</li>
                <li class="white"><i class="fas fa-map-marker-alt white"></i> Rue des Trois Cailloux</li>
                <li class="white"><i class="fas fa-map-marker-alt white"></i> Place Gambetta</li>
                <li class="white"><i class="fas fa-map-marker-alt white"></i> Rue Delambre</li>
                <li class="white"><i class="fas fa-map-marker-alt white"></i> Rue Gresset</li>
                <li class="white"><i class="fas fa-map-marker-alt white"></i> Place Léon Gontier.</li>
            </ol>
        
        </div>

</div>

<!-- ------------------------------------------------------------------------------------------------------------------------------
    Qui sommes Nous 
------------------------------------------------------------------------------------------------------------------------------ -->
<hr class="col-lg-6 col-12">
<div class="row justify-content-center" id="about">

    <div class="col-9 col-sm-9 col-lg-6 p-4">
        <h2 class="text-center mb-4 orange">Qui sommes nous ?</h2>
        <p class="thasadith orange">Le collectif inter-associatif LGBTQI+ d'Amiens initialement collectif IDAHOT (International Day Against
            Homophobia and Transphobia) rassemble les 7 associations amiénoises de lutte contre toutes les formes de
            discriminations et pour la défense des droits des femmes et des personnes Lesbiennes, Gays, Bisexuel.les,
            Transidentitaires, Queer, Inteersexes et plus (LGBTQI+). <br>
            Ces 6 associations sont : Flash Our True Colors, Les Bavardes, GAS Solidarité, Divergenre, Simili Queer, Sos
            homophobie et Aides.
            Le collectif IDAHOT organise chaque année depuis 2018 le festival IDAHOT, festival de lutte contre les
            LGBTQI+ phobies et depuis 2019, la marche des fiertés à Amiens. <br>
            Pour en savoir plus sur les associations membres du collectif :  <a target="_blank" href="https://fr-fr.facebook.com/festivalidahot/"><i class="fas fa-plus-square ml-2"></i></a>
                
            </p>
        </div>
            <div class="col-9 col-sm-9 col-lg-3">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/akLfSOXkd1Y" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
</div>


<!-- ------------------------------------------------------------------------------------------------------------------------------
    Découvrir nos revendications / plaidoyer 
------------------------------------------------------------------------------------------------------------------------------ -->
<div class="row justify-content-center blockOrange " id="plaid">
    <div class="col-9 col-sm-9 p-5">
        <h2 class="text-center mb-4">Découvrir nos revendications</h2>
        <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
        <p class="thasadith"> Nous, lesbiennes, gays, bis, trans', queers et intersexes, multiples dans nos identités. nous dont le genre
            et les sexualités ne rentrent pas dans le cadre étroit de l’hétérosexualité, et de la cis-normativité. nous
            qui sommes aussi des personnes en situation irrégulière, sans revenus, aux situations précaires, situation
            de handicape ; des personnes séropositives au VIH, au VHC, sujettes à des addictions, en difficulté avec
            leur santé mentale et physique. Nous marchons aujourd'hui pour revendiquer notre place dans la société et
            pour que nos voix soient entendues.
            <br> <br>
            La crise sanitaire que nous vivons révèle les violences, les discriminations sociales d’accès à la santé, et
            à des conditions dignes d’existence. Dès les premiers jours du confinement, nos communautés se sont
            mobilisées pour prévenir et dénoncer les violences auxquelles nous nous trouvons exposéEs et que la
            situation venait aggraver.
            <br> <br>
            Les lieux dans lesquels nous avons dû nous confiner, nos foyers, nos familles, sont aussi des lieux où nous
            vivons le sexisme et les oppressions liés à nos identités. Cette épreuve nous a contraint à faire face à
            cette violence quotidienne sans échappatoire mettant la vies de beaucoup de nous en danger.
            <br> <br>
            Nous saluons l'investissement des associations dans ce contexte exceptionnel de crise sanitaire. En effet
            les associations ont mis à profit leurs expériences et leur savoirs en santé, en écoute et en
            accompagnement, acquissent lors de précédente crises tel que celle du VIH-Sida, afin de réduire les risques
            lié au COVID-19 et apporter un soutien aux communautés oppressées. Leur travail a permis de pallier aux
            manquement de l'Etat connue et dénoncé depuis des années.
            <br> <br>
            Depuis plus de 20 ans, les dépenses de santé et d'éducation sont comprimées par une volonté politique de
            réduction de place de l'état dans l'économie au bénéfice des plus riches. Ainsi les baisses de dépenses de
            santé opérées ont particulièrement touché les personnes LGBTQI + qui ont besoin d'un accompagnement médical
            complet notamment pour le suivi des personnes porteuses du VIH ou des personnes trans’ s'engager dans un
            parcours de transition médicale. Les personnes LGBTQI+ doivent être mieux reçues, mieux orientées et moins
            discriminées par les institutions médicales et/ou sociales. Le rôle social de l'état ne doit pas se borner
            aux dépenses de santé. L'éducation nationale doit s'investir pour remplacer auprès des enfants la culture du
            viol par la culture du consentement afin de construire une société plus juste et inclusive. Nous voulons
            notamment rappeler que le comportement observé ces derniers mois à présumer l'état de santé des personnes
            est validiste et raciste.
            <br> <br>
            Cette crise nous rappelle la nécessité d’une convergence de nos luttes, contre le racisme, la xénophobie, le
            sexisme, les lgbtqi-phobies, le classisme, le validisme, la sérophobie, l'âgisme, et la montée de toutes les
            représentations du monde simplistes, stigmatisantes et oppressantes. Cette crise est aussi la conséquence du
            désengagement de l’Etat et des services publics à l'égard de la diversité de sa population.
            <br> <br>
            Nous n’oublions pas non plus, la crise écologique : l’alerte donnée par les scientifiques du monde entier
            sur la mise en péril de nos écosystèmes. Nous dénonçons la passivité coupable des pouvoirs publics
            internationaux et leur incapacité à inventer et proposer d’autres manières d’être au monde que leurs modèles
            actuels, obsolètes et déshumanisants. Nous dénonçons l’acharnement à maintenir ce système de privilèges, au
            détriment des personnes minorisées et oppressées, et de la survie de l’humanité par l’épuisement et
            l'accaparement des ressources naturelles.
            <br> <br>
            Bien que différentes, nous partageons ensemble l’expérience de la marginalité, de l’oppression normative,
            des préjugés, des agressions et des exclusions. Nous nous efforçons aussi de prendre conscience des
            privilèges que nos inscriptions sociales peuvent conférer. Nous apprenons à ne plus en reproduire les
            oppressions, et à trouver les ressources pour lutter, nous soutenir, et nous émanciper.
            <br> <br>
            Ici, à Amiens, nos associations militent depuis des années à la création d’espaces de solidarités,
            d’inspirations, et d’émancipation. La marche des fiertés LGBTQI + en est un. Notre présence militante,
            flamboyante et festive, nous permet de rejeter la honte et la culpabilité dans lesquelles certaines
            personnes préfèreraient nous voir.
            <br> <br>
            Nous manifestons aussi pour celles et ceux d’entre nous qui ne pourront pas nous rejoindre, en raison de
            leur état de santé, de leurs précarités, ou des difficultés qu’ilLEs éprouvent à se visibiliser dans
            l’espace public, pour montrer la merveilleuse diversité de nos visages, et de nos vies ; et rappeler les
            pouvoirs publics à leurs responsabilités. Nous sommes également présents pour les personnes disparues
            victimes de ce système oppressants.
        </p>
        </div>
    </div>
</div>




<!-- ------------------------------------------------------------------------------------------------------------------------------
    Partenaires 
            AIDES Divergenre Flash Our True Colors Le Groupe d'Appui et de Solidarité 
            Les Bavardes SOS homophobie Picardie Simili Queer Translucide Sexosafe Amiens Métropole
------------------------------------------------------------------------------------------------------------------------------ -->


    <div class="row "> <!--block-light -->
        <div class="col-12 col-sm-12 p-4">
            <h2 class="text-center m-4" id="part">Merci à nos partenaires !</h2>
        </div>
    </div>

<div class="row justify-content-center">
    <div class="col-lg-11 m-auto"><!--block-1 -->
        <div class="card mb-3 float-left" style="max-width: 540px; min-height: 210px;">
        <div class="row no-gutters">
            <div class="col-md-4 p-3">
            <a target="_blank" href="https://www.aides.org/">
                            <img src="assets\img\logo\Logo_AIDES.png" height="100" alt="Logo Aides">
                        </a>
            </div>
            <div class="col-md-8">
            <div class="card-body">
                
                <p class="card-text">Association de lutte contre le VIH/Sida et les Hépatites, qui agit depuis 30 ans avec et
                            auprès des populations les plus vulnérables pour réduire les nouvelles contaminations et accompagner
                            les personnes touchées vers le soin et dans la défense de leurs droits.</p>
            </div>
            </div>
        </div>
        </div>
        <div class="card mb-3  float-left" style="max-width: 540px; min-height: 210px;">
        <div class="row no-gutters">
            <div class="col-md-4 p-3">
            <a target="_blank" href="#">
                            <img src="assets\img\logo\Logo_Divergenre.png" height="100" alt="Logo Divergenre">
                        </a>
            </div>
            <div class="col-md-8">
            <div class="card-body">
                
                <p class="card-text">Association fonctionnant en autosupport, d'accueil, d'information, de soutien,
                    d'accompagnement, pour les personnes trans ou en questionnement, ainsi que leurs proches</p>
            </div>
            </div>
        </div>
        </div>
        <div class="card mb-3  float-left" style="max-width: 540px; min-height: 210px;">
        <div class="row no-gutters">
            <div class="col-md-4 p-3">
            <a target="_blank" href="https://www.gas-asso.org/">
                            <img src="assets\img\logo\Logo_Flash_Our_True_Colors.png" height="100" alt="Logo Groupe d’Appui et de Solidarité">
                        </a>
            </div>
            <div class="col-md-8">
            <div class="card-body">
                
                <p class="card-text">
                    Groupe d’Appui et de Solidarité : association d’éducation populaire de lutte contre les inégalités
                    et les discriminations pour l'inclusion sociale et l'émancipation des personnes vulnérables.
                </p>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-11 m-auto"><!--block-2 -->
        <div class="card mb-3 float-left" style="max-width: 540px; min-height: 210px;">
        <div class="row no-gutters">
            <div class="col-md-4 p-3">
            <a target="_blank" href="https://flash-our-true-colors.fr/">
                            <img src="assets\img\logo\Logo_GAS.png" height="100" alt="Logo Flash Our True Colors">
                        </a>
            </div>
            <div class="col-md-8">
            <div class="card-body">
                
                <p class="card-text">Association qui agit depuis 2011 pour faire reconnaître la dignité des
                    personnes LGBTQI+, dans un cadre de convivialité, d'échange et de non jugement.
                </p>
            </div>
            </div>
        </div>
        </div>
        <div class="card mb-3  float-left" style="max-width: 540px; min-height: 210px;">
        <div class="row no-gutters">
            <div class="col-md-4 p-3">
            <a target="_blank" href="https://lesbavardes.org/">
                            <img src="assets\img\logo\Logo_Les_Bavardes.png" height="100" alt="Logo Les Bavardes">
                        </a>
            </div>
            <div class="col-md-8">
            <div class="card-body">
                
                <p class="card-text">
                    Les Bavardes : collectif féministe et lesbien engagé depuis 2017 pour la visibilité de toutes les
                    femmes, au travers d’espaces et d’actions culturelles et artistiques, visant à encourager les débats
                    et les échanges.
                </p>
            </div>
            </div>
        </div>
        </div>
        <div class="card mb-3  float-left" style="max-width: 540px; min-height: 210px;">
        <div class="row no-gutters">
            <div class="col-md-4 p-3">
            <a target="_blank" href="#">
                            <img src="assets\img\logo\SQ-logo.png" height="100" alt="Logo Simili Queer">
                        </a>
            </div>
            <div class="col-md-8">
            <div class="card-body">
                
                <p class="card-text">
                    Simili Queer : Regroupement collectif à Amiens, se retrouvant dans les valeurs, les idées, les
                    luttes du mouvement et des identités queer, et proposant de les transfigurer
                    culturellement / artistiquement mais aussi de pouvoir respirer un peu face à la norme.
                </p>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-11 m-auto"><!--block-3 -->
        <div class="card mb-3 float-left" style="max-width: 540px; min-height: 210px;">
        <div class="row no-gutters">
            <div class="col-md-4 p-3">
            <a target="_blank" href="https://www.sos-homophobie.org/delegation/picardie">
                            <img src="assets\img\logo\Logo_SOS_homophobie.png" height="80" alt="Logo Sos Homophobie">
                        </a>
            </div>
            <div class="col-md-8">
            <div class="card-body">
                
                <p class="card-text">
                    Association de lutte contre les discriminations et les agressions à caractère
                    homophobe et transphobe, en vue d’une meilleure acceptation de la diversité des orientations
                    sexuelles et pour lutter pour la visibilité et l’égalité des droits des personnes LGBT.
                </p>
            </div>
            </div>
        </div>
        </div>
        <div class="card mb-3  float-left" style="max-width: 540px; min-height: 210px;">
        <div class="row no-gutters">
            <div class="col-md-4 p-3">
            <a target="_blank" href="https://www.sexosafe.fr/">
                            <img src="assets\img\logo\Logo_Sexo.png" height="100" alt="Logo Sexo Safe">
                        </a>
            </div>
            <div class="col-md-8">
            <div class="card-body">
                
                <p class="card-text">
                    Sexosafe.fr est un site présentant tous les modes de protection: Préservatifs, Dépistages, PrEP,
                    TasP, TPE pour les hommes qui aiment les hommes.
                    Services: Conseils Sexualité, Adresses & Numéros Utiles, Informations Médicales.
                </p>
            </div>
            </div>
        </div>
        </div>
        <div class="card mb-3  float-left" style="max-width: 540px; min-height: 210px;">
        <div class="row no-gutters">
            <div class="col-md-4 p-3">
            <a target="_blank" href="https://www.amiens.fr/">
                            <img src="assets\img\logo\Logo_Amiens.png" height="100" alt="Logo d'Amiens Métropole">
                        </a>
            </div>
            <div class="col-md-8">
            <div class="card-body">
                
                <p class="card-text">
                    Amiens Métropole : La communauté d’agglomération Amiens Métropole est une communauté d'agglomération
                    française, située dans le département de la Somme et la région Hauts-de-France.</p>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

            
        </div>
    </div>

    <div class="row" id="marche" >
    <div class="col-12 col-sm-12">
        <h1 class="text-center pt-5 pb-5 border-rainbow">Retour sur la 1ère "Marche des Fiertés" d'Amiens</h1>
    </div>




<!-- ------------------------------------------------------------------------------------------------------------------------------
        Videos
    ------------------------------------------------------------------------------------------------------------------------------ -->
    <div class="row justify-content-center">
            <div class="col-11 col-sm-11 col-md-6 ">
                <h2 class="text-center pt-4 pb-5 ">En videos</h2>
                <iframe width="100%" height="350" src="https://www.youtube.com/embed/NtttY9GAaAg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="col-11 col-sm-11">
                <section id="galerie">
<!-- ------------------------------------------------------------------------------------------------------------------------------
    Photos Juliette Fabijan
------------------------------------------------------------------------------------------------------------------------------ -->
                <h2 class="text-center mb-2 pt-5 ">En images</h2>
                <p class="text-center mb-4 pt-2 thasadith"> 178 photos exclusives par <a href="https://www.juliettefabijan.fr/">Juliette Fabijan</a> en cliquant sur une des images <i class="fas fa-angle-double-down fa-lg orange"></i></p>
                <div class="row">
                    <a href="assets/img/jf/2019-Gaypride-AmiensCity.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery" class="col-md-3">
                        <img src="assets/img/jf/2019-Gaypride-AmiensCity-5.jpg" alt="Image de la gaypride d'Amiens par Juliette Fabijan" class="img-fluid">
                    </a>
                    <a href="assets/img/jf/2019-Gaypride-AmiensCity-10.jpg" data-toggle="lightbox"
                    data-gallery="example-gallery" class="col-md-3">
                        <img src="assets/img/jf/2019-Gaypride-AmiensCity-10.jpg" alt="Image de la gaypride d'Amiens par Juliette Fabijan" class="img-fluid">
                    </a>
                    <a href="assets/img/jf/2019-Gaypride-AmiensCity-7.jpg" data-toggle="lightbox"
                    data-gallery="example-gallery" class="col-md-3">
                    <img src="assets/img/jf/2019-Gaypride-AmiensCity-7.jpg" alt="Image de la gaypride d'Amiens par Juliette Fabijan" class="img-fluid">
                </a>
                <a href="assets/img/jf/2019-Gaypride-AmiensCity-8.jpg" data-toggle="lightbox"
                data-gallery="example-gallery" class="col-md-3">
                        <img src="assets/img/jf/2019-Gaypride-AmiensCity-8.jpg" alt="Image de la gaypride d'Amiens par Juliette Fabijan" class="img-fluid">
                    </a>
                </div>
                <div class="row mb-4">
                    <a href="assets/img/jf/2019-Gaypride-AmiensCity-5.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery" class="col-md-3">
                        <img src="assets/img/jf/2019-Gaypride-AmiensCity.jpg" alt="Image de la gaypride d'Amiens par Juliette Fabijan" class="img-fluid">
                    </a>
                    <a href="assets/img/jf/2019-Gaypride-AmiensCity-9.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery" class="col-md-3">
                        <img src="assets/img/jf/2019-Gaypride-AmiensCity-9.jpg" alt="Image de la gaypride d'Amiens par Juliette Fabijan" class="img-fluid">
                    </a>
                    <a href="assets/img/jf/2019-Gaypride-AmiensCity-3.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery" class="col-md-3">
                        <img src="assets/img/jf/2019-Gaypride-AmiensCity-3.jpg" alt="Image de la gaypride d'Amiens par Juliette Fabijan" class="img-fluid">
                    </a>
                    <a href="assets/img/jf/2019-Gaypride-AmiensCity-4.jpg" data-toggle="lightbox"
                        data-gallery="example-gallery" class="col-md-3">
                        <img src="assets/img/jf/2019-Gaypride-AmiensCity-4.jpg" alt="Image de la gaypride d'Amiens par Juliette Fabijan" class="img-fluid">
                    </a>
                </div>
                    
                    <!-- elements not showing, use data-remote -->
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-11.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-12.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-13.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-14.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-2.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-6.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-15.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-16.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-17.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-18.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-19.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-20.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-21.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-22.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-23.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-24.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-25.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-26.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-27.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-28.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-29.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-30.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-31.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-32.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-33.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-34.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-35.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-36.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-37.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-38.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-39.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-40.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-41.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-42.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-43.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-44.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-45.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-46.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-47.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-48.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-49.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-50.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-51.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-52.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-53.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-54.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-55.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-56.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-57.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-58.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-59.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-60.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-61.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-62.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-63.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-64.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-65.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-66.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-67.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-68.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-69.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-70.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-71.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-72.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-73.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-74.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-75.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-76.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-77.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-78.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-79.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-80.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-81.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-82.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-83.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-84.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-85.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-86.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-87.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-88.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-89.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-90.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-91.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-92.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-93.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-94.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-95.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-96.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-97.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-98.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-99.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-100.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-101.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-102.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-103.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-104.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-105.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-106.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-107.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-108.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-109.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-110.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-111.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-112.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-113.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-114.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-115.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-116.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-117.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-118.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-119.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-120.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-121.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-122.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-123.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-124.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-125.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-126.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-127.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-128.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-129.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-130.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-131.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-132.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-133.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-134.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-135.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-136.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-137.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-138.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-139.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-140.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-141.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-142.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-143.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-144.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-145.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-146.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-147.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-148.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-150.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-151.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-152.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-153.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-154.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-155.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-156.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-157.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-158.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-159.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-160.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-161.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-162.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-163.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-164.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-165.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-166.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-167.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-168.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-169.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-170.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-171.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-172.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-173.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-174.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-175.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-176.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-177.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-178.jpg"></div>
                    <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="assets/img/jf/2019-Gaypride-AmiensCity-179.jpg"></div>
            </section>
        </div>
    </div>



<!-- ------------------------------------------------------------------------------------------------------------------------------
    Articles
------------------------------------------------------------------------------------------------------------------------------ -->
<div class="row justify-content-center block-light">
    <div class="col-10 col-sm-10">

        <h2 class="text-center pt-5 pb-5">Dans la presse</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">
    <div class="col mb-4">
        <div class="card">
            <img src="assets/img/a1.PNG" class="card-img-top" alt="Les bénévoles du Collectif organisateur de la première Marche des fiertés à Amiens, qui aura lieu le samedi 22 juin à partir de 14 heures - Philippe Peyre / Komitid">
            <div class="card-body">
                <h5 class="card-title">
                    KOMITID - "NOUS VIVONS UN MOMENT HISTORIQUE"
                </h5>
                <p class="card-text">Les personnes LGBT+ amiénoises s'apprêtent à défiler pour la première fois dans leur ville, samedi 22 juin. 
                Harmonisation des prises de parole, flocage de t-shirts, écriture des pancartes… on a assisté à l'atelier de préparation de la Marche avec les bénévoles du 
                collectif organisateur. Reportage. [...]</p>
                <button class="btn border-rainbow"><a  target="_BLANK" href="
                https://www.komitid.fr/2019/06/21/nous-vivons-un-moment-historique-on-a-assiste-a-la-preparation-de-la-toute-premiere-marche-des-fiertes-a-amiens/
        
        ">Lire la suite</a></button>
            </div>
        </div>
    </div>
    <div class="col mb-4">
        <div class="card">
            <img src="assets/img/a2.PNG" class="card-img-top" alt="Catherine, Timothée Kunde et Alexandra Carpentier font partie du collectif d'associations qui organisent cette première Marche des Fiertés amiénoise.">
            <div class="card-body">
                <h5 class="card-title">
                    FRANCE BLEU - PREMIÈRE MARCHE DES FIERTÉS À AMIENS : UNE "SENSIBILISATION NÉCESSAIRE"

                </h5>
                <p class="card-text">La première Marche des Fiertés d'Amiens aura lieu le 22 juin 2019. 
                Organisée par un collectif de six associations, elle promet un moment fort pour les personnes homosexuelles et transidentitaires. [...]

</p>
                <button class="btn border-rainbow"><a  target="_BLANK" href="
                https://www.francebleu.fr/infos/societe/premiere-marche-des-fiertes-a-amiens-une-sensibilisation-necessaire-1557077042
        ">Lire la suite</a></button>
            </div>
        </div>
    </div>
    <div class="col mb-4">
        <div class="card">
            <img src="assets/img/a3.PNG" class="card-img-top" alt="SOS Homophobie a recensé plus de 1900 actes LGBTphobes en 2018. © MAXPPP">
            <div class="card-body">
                <h5 class="card-title">
                    FRANCE 3 HDF - EN PICARDIE, LA LUTTE CONTRE L'HOMOPHOBIE AVANCE

                </h5>
                <p class="card-text">SOS Homophobie a sorti son rapport annuel sur les actes LGBTphobes, et les chiffres sont alarmants. En Picardie, les associations tentent de faire avancer la lutte avec l'accompagnement au quotidien, mais aussi à travers des actions plus visibles. 
                    [...]
                </p>
                <button class="btn border-rainbow"><a  target="_BLANK" href="
        
                https://france3-regions.francetvinfo.fr/hauts-de-france/somme/embargo-au-14-mai-7h-picardie-lutte-contre-homophobie-avance-1668769.html
        ">Lire la suite</a></button>
            </div>
        </div>
    </div>
    <div class="col mb-4">
        <div class="card">
            <img src="assets/img/a5.PNG" class="card-img-top" alt="duplex d'Amiens avec Timothée Kunde membre de ce collectif et de l'association Flash Our True Colors.">
            <div class="card-body">
                <h5 class="card-title">

                    ORANGE WEO - PREMIÈRE MARCHE DES FIERTÉS LE 22 JUIN
                </h5>
                <p class="card-text">Amiens va avoir droit à sa première Marche des Fiertés. Le rendez-vous pris le 22 juin 2019, date anniversaire de l'insurrection des personnes homosexuelles 
                    et transidentitaires contre les violences qu'elles subissent à New-York. Un défilé est prévu entre la place de la gare et la maison de la culture d'Amiens [...]</p>
                <button class="btn border-rainbow"><a  target="_BLANK" href="
                https://actu.orange.fr/societe/videos/amiens-80-premiere-marche-des-fiertes-le-22-juin-CNT000001fzkM0.html
        
        ">Lire la suite</a></button>

            </div>
        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">
    <div class="col mb-4">
        <div class="card">
            <img src="assets/img/a4.PNG" class="card-img-top" alt="Première Pride d'Amiens.">
            <div class="card-body">
                <h5 class="card-title">

                    COURRIER PICARD - À AMIENS, ILS SE DONNENT LA MAIN SANS CRAINDRE LES QUOLIBETS
                </h5>
                <p class="card-text">Lesbiennes, homos, transgenres… ils veulent vivre sans crainte des insultes ou pire des coups. Le message était porté par un millier de personne pour la première marche des fiertés picarde...</p>
                <button class="btn border-rainbow"><a  target="_BLANK" href="
                https://abonne.lunion.fr/id74647/article/2019-06-22/amiens-ils-se-donnent-la-main-sans-craindre-les-quolibets
        
        ">Lire la suite</a></button>
            </div>
        </div>
    </div>
    <div class="col mb-4">
        <div class="card">
            <img src="assets/img/a6.PNG" class="card-img-top" alt="Le cortège a traversé le centre-ville en musique. © Radio France - Hélène Fromenty">
            <div class="card-body">
                <h5 class="card-title">
                    BELLE AFFLUENCE POUR LA PREMIÈRE MARCHE DES FIERTÉS D'AMIENS

                </h5>
                <p class="card-text">La toute première marche des fiertés, ou gray pride, s'est déroulée ce samedi 22 juin à Amiens (Somme). 
                    Environ 2.000 personnes ont défilé dans les rues du centre-ville pour défendre la cause et les droits des LGBTQI+ [...]</p>
                <button class="btn border-rainbow"><a  target="_BLANK" href="
                https://www.francebleu.fr/infos/societe/en-images-belle-affluence-pour-la-premiere-marche-des-fiertes-d-amiens-1561218833
        ">Lire la suite</a></button>
            </div>
        </div>
    </div>
    <div class="col mb-4">
        <div class="card">
            <img src="assets/img/a7.PNG" class="card-img-top" alt="Première Pride d'Amiens le 22 juin 2019. Photo : Alexane Feck - CPI">
            <div class="card-body">
                <h5 class="card-title">
                    FRANC SUCCÈS POUR LA MARCHE DES FIERTÉS D’AMIENS
                </h5>
                <p class="card-text">Un beau succès au vu du nombre de manifestants et de l’ambiance joyeuse de l’événement, une première en Picardie. 
                    Des personnalités politiques ont rejoint la marche. Et même la statue de l’homme sur sa bouée de Saint-Leu s’est mise aux couleurs de l’arc-en-ciel !</p>
                <button class="btn border-rainbow"><a  target="_BLANK" href="
                https://www.courrier-picard.fr/id20345/article/2019-06-22/franc-succes-pour-la-marche-des-fiertes-damiens
        ">Lire la suite</a></button>
            </div>
        </div>
    </div>
    <div class="col mb-4">
        <div class="card">
            <img src="assets/img/a8.PNG" class="card-img-top" alt="Le cortège de la marche des fiertés dans les rues d'Amiens le samedi 22 juin 2019 • © Madison Mouquet / France 3 Picardie">
            <div class="card-body">
                <h5 class="card-title">
                    PRÈS DE 2000 PERSONNES RASSEMBLÉES POUR LA 1E MARCHE DES FIERTÉS D'AMIENS

                </h5>
                <p class="card-text">C'est une première en Picardie. La marche des fiertés avait lieu ce samedi après-midi dans le centre-ville d'Amiens. 
                    Près de 2000 personnes se sont rassemblées en faveur des droits des personnes LGBTQI+ [...]</p>
                <button class="btn border-rainbow"><a  target="_BLANK" href="
                https://france3-regions.francetvinfo.fr/hauts-de-france/somme/amiens/pres-2000-personnes-rassemblees-1e-marche-fiertes-amiens-1689316.html
        ">Lire la suite</a></button>
                    </div>
                </div>
        
        </div>
    </div>
</div>
</div>


<div class="row block-light ">
    <div class="col-12 col-sm-12 text-center border-rainbow pb-4">
    </div>
</div>

<?php
require('footer.php');
?>