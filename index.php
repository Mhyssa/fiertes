<?php
$Titre = "index";
require('layout/header.php');
?>

<!-- ------------------------------------------------------------------------------------------------------------------------------
    Compte à rebours RENDEZ VOUS DANS + Details de la journée
------------------------------------------------------------------------------------------------------------------------------ -->

<div class="row block shadow py-5 mt-5">
    <div class="col-12 col-md-6 text-center">
        <h2 class="text-white mb-4">Début de la marche dans :</h2>
        <ul style="font-family:'Fredericka the Great'">
            <li class="count whiteOnRed"><span id="days"></span>Jours</li>
            <li class="count blueOnSaffron"><span id="hours"></span>Heures</li>
            <li class="count blueOnYellow"><span id="minutes"></span>Minutes</li>
            <li class="count whiteOnGreen"><span id="seconds"></span>Secondes</li>
        </ul>
    </div>
    <div class="col-12 col-md-6">
        <h2 class="text-white mb-4 text-center">
            Déroulement de la journée du 02 juillet
        </h2>
        <ul>
            <li class="mb-2 thasadith text-white"><i class="fas fa-unlock text-white pr-3"></i>10h - Ouverture du village associatif</li>
            <li class="mb-2 thasadith text-white"><i class="fas fa-hiking text-white pr-4"></i>13h - Début des prises de paroles puis départ de la déambulation</li>
            <li class="mb-2 thasadith text-white"><i class="fas fa-microphone text-white pr-4"></i>17h - Retour de la déambulation puis concert de Lirose</li>
            <li class="mb-2 thasadith text-white"><i class="fas fa-moon text-white pr-4"></i>18h - Fin des festivités</li>
            <br><br>
            <li class="mb-2 thasadith text-white"><i class="fas fa-scroll text-white pr-4"></i>
            <a href="assets/docs/brochure_finalise.pdf" id="brochure">Guide complet de la marche disponible ici</a>
            </li>
        
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 p-0">
        <img src="assets\img\idahot2022\test.jpg" alt="Festival IDAHOT 2022 lutte contre les discrimination à Amiens" class="img-fluid w-100">
    </div>
</div>

<!-- ------------------------------------------------------------------------------------------------------------------------------
    Plan de la marche / Parcours
------------------------------------------------------------------------------------------------------------------------------ -->

<div class="row p-5">
    <div class="col-12 col-sm-12 col-md-8">
        <iframe src="https://www.google.com/maps/embed?pb=!1m76!1m12!1m3!1d2570.2734179772724!2d2.2952202015299337!3d49.89366993510547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m61!3e2!4m5!1s0x47e7843ffa7aa67b%3A0x7c5413872f67d8a1!2sPlace%20L%C3%A9on%20Gontier%2C%2080000%20Amiens!3m2!1d49.8940713!2d2.2930696999999998!4m5!1s0x47e7844004671233%3A0xef487e8aa9c75268!2sRue%20de%20la%202%C3%A8me%20Division%20Blind%C3%A9e%2C%2080000%20Amiens!3m2!1d49.8930687!2d2.2927302!4m5!1s0x47e784471a0dcde1%3A0x845396dbb2291164!2sRue%20des%20Jacobins%2C%2080000%20Amiens!3m2!1d49.891557!2d2.299673!4m5!1s0x47e78447ae59b6e9%3A0x86c5fcc9df2cb0c5!2sRue%20Allart%2C%2080000%20Amiens!3m2!1d49.891287!2d2.301234!4m5!1s0x47e78447ed670add%3A0xfa4dcd9e951ec57d!2sRue%20Victor%20Hugo%2C%2080000%20Amiens!3m2!1d49.892731399999995!2d2.3023314!4m5!1s0x47e78438b109ea4f%3A0x9337ceeb6229aa24!2sRue%20des%20Sergents%2C%2080000%20Amiens!3m2!1d49.894278799999995!2d2.2987523999999997!4m5!1s0x47e78438cc794701%3A0xaadf1c5a3ddc6785!2sRue%20Saint-Martin%20aux%20Waides%2C%2080000%20Amiens!3m2!1d49.8950576!2d2.2985523!4m5!1s0x47e7843fab93ee8d%3A0x169f27f307e5ffd8!2sRue%20au%20Lin%2C%2080000%20Amiens!3m2!1d49.8958455!2d2.2951435!4m5!1s0x47e7843fb354cf45%3A0xef9b6016aa14016b!2sRue%20du%20G%C3%A9n%C3%A9ral%20Leclerc%2C%2080000%20Amiens!3m2!1d49.896173999999995!2d2.294059!4m5!1s0x47e7843ffa7aa67b%3A0x7c5413872f67d8a1!2sPlace%20L%C3%A9on%20Gontier%2C%2080000%20Amiens!3m2!1d49.8940713!2d2.2930696999999998!5e0!3m2!1sfr!2sfr!4v1623684209454!5m2!1sfr!2sfr" width="100%" height="520px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="col-12 col-sm-12 col-md-4 d-flex flex-column justify-content-center">
        <h2 class="orange text-center mb-5">Itinéraire</h2>
        <ol>
            <li class="orange mb-2"><i class="fas fa-map-marker-alt orange"></i> Départ Place Léon Gontier</li>
            <li class="orange mb-2"><i class="fas fa-map-marker-alt orange"></i> Rue de la 2eme division Blindée</li>
            <li class="orange mb-2"><i class="fas fa-map-marker-alt orange"></i> Rue des Jacobinsv</li>
            <li class="orange mb-2"><i class="fas fa-map-marker-alt orange"></i> Rue Allart</li>
            <li class="orange mb-2"><i class="fas fa-map-marker-alt orange"></i> Rue Victor Hugo</li>
            <li class="orange mb-2"><i class="fas fa-map-marker-alt orange"></i> Rue des sergents</li>
            <li class="orange mb-2"><i class="fas fa-map-marker-alt orange"></i> Rue Saint-Martin aux Waides</li>
            <li class="orange mb-2"><i class="fas fa-map-marker-alt orange"></i> Rue au Lin</li>
            <li class="orange mb-2"><i class="fas fa-map-marker-alt orange"></i> Rue du Général Leclerc</li>
            <li class="orange mb-2"><i class="fas fa-map-marker-alt orange"></i> Place Léon Gontier</li>
        </ol>
    </div>
</div>

<!-- ------------------------------------------------------------------------------------------------------------------------------
    Articles
------------------------------------------------------------------------------------------------------------------------------ -->
<div class="row justify-content-center blockBlue ">
    <div class="col-10 col-sm-10">
        <h2 class="text-center pt-5 pb-5">Dans la presse</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">
            <div class="col mb-4">
                <div class="card">
                    <img src="assets/img/articles/1.png" class="card-img-top" alt="Les bénévoles du Collectif organisateur de la première Marche des fiertés à Amiens, qui aura lieu le samedi 22 juin à partir de 14 heures - Philippe Peyre / Komitid">
                    <div class="card-body">
                        <h5 class="card-title blue">
                            KOMITID - "NOUS VIVONS UN MOMENT HISTORIQUE"
                        </h5>
                        <p class="card-text blue">Les personnes LGBT+ amiénoises s'apprêtent à défiler pour la première
                            fois dans leur ville, samedi 22 juin.
                            Harmonisation des prises de parole, flocage de t-shirts, écriture des pancartes… on a
                            assisté à l'atelier de préparation de la Marche avec les bénévoles du
                            collectif organisateur. Reportage. [...]</p>
                        <button class="btn border-rainbow">
                            <a target="_BLANK" href="https://www.komitid.fr/2019/06/21/nous-vivons-un-moment-historique-on-a-assiste-a-la-preparation-de-la-toute-premiere-marche-des-fiertes-a-amiens/">
                                Lire la suite
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="assets/img/articles/2.png" class="card-img-top" alt="Catherine, Timothée Kunde et Alexandra Carpentier font partie du collectif d'associations qui organisent cette première Marche des Fiertés amiénoise.">
                    <div class="card-body">
                        <h5 class="card-title blue">
                            FRANCE BLEU - PREMIÈRE MARCHE DES FIERTÉS À AMIENS : UNE "SENSIBILISATION NÉCESSAIRE"
                        </h5>
                        <p class="card-text blue">La première Marche des Fiertés d'Amiens aura lieu le 22 juin 2019.
                            Organisée par un collectif de six associations, elle promet un moment fort pour les
                            personnes homosexuelles et transidentitaires. [...]
                        </p>
                        <button class="btn border-rainbow">
                            <a target="_BLANK" href="https://www.francebleu.fr/infos/societe/premiere-marche-des-fiertes-a-amiens-une-sensibilisation-necessaire-1557077042">
                                Lire la suite
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="assets/img/articles/3.png" class="card-img-top" alt="SOS Homophobie a recensé plus de 1900 actes LGBTphobes en 2018. © MAXPPP">
                    <div class="card-body">
                        <h5 class="card-title blue">
                            FRANCE 3 HDF - EN PICARDIE, LA LUTTE CONTRE L'HOMOPHOBIE AVANCE
                        </h5>
                        <p class="card-text blue">SOS Homophobie a sorti son rapport annuel sur les actes LGBTphobes, et
                            les chiffres sont alarmants. En Picardie, les associations tentent de faire avancer la lutte
                            avec l'accompagnement au quotidien, mais aussi à travers des actions plus visibles.
                            [...]
                        </p>
                        <button class="btn border-rainbow">
                            <a target="_BLANK" href="https://france3-regions.francetvinfo.fr/hauts-de-france/somme/embargo-au-14-mai-7h-picardie-lutte-contre-homophobie-avance-1668769.html">
                                Lire la suite
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="assets/img/articles/5.png" class="card-img-top" alt="duplex d'Amiens avec Timothée Kunde membre de ce collectif et de l'association Flash Our True Colors.">
                    <div class="card-body">
                        <h5 class="card-title blue">
                            ORANGE WEO - PREMIÈRE MARCHE DES FIERTÉS LE 22 JUIN
                        </h5>
                        <p class="card-text blue">Amiens va avoir droit à sa première Marche des Fiertés. Le rendez-vous
                            pris le 22 juin 2019, date anniversaire de l'insurrection des personnes homosexuelles
                            et transidentitaires contre les violences qu'elles subissent à New-York. Un défilé est prévu
                            entre la place de la gare et la maison de la culture d'Amiens [...]</p>
                        <button class="btn border-rainbow">
                            <a target="_BLANK" href="https://actu.orange.fr/societe/videos/amiens-80-premiere-marche-des-fiertes-le-22-juin-CNT000001fzkM0.html">
                                Lire la suite
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">
            <div class="col mb-4">
                <div class="card">
                    <img src="assets/img/articles/4.png" class="card-img-top" alt="Première Pride d'Amiens.">
                    <div class="card-body">
                        <h5 class="card-title blue">
                            COURRIER PICARD - À AMIENS, ILS SE DONNENT LA MAIN SANS CRAINDRE LES QUOLIBETS
                        </h5>
                        <p class="card-text blue">Lesbiennes, homos, transgenres… ils veulent vivre sans crainte des
                            insultes ou pire des coups. Le message était porté par un millier de personne pour la
                            première marche des fiertés picarde...</p>
                        <button class="btn border-rainbow">
                            <a target="_BLANK" href="https://abonne.lunion.fr/id74647/article/2019-06-22/amiens-ils-se-donnent-la-main-sans-craindre-les-quolibets">
                                Lire la suite
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="assets/img/articles/6.png" class="card-img-top" alt="Le cortège a traversé le centre-ville en musique. © Radio France - Hélène Fromenty">
                    <div class="card-body">
                        <h5 class="card-title blue">
                            BELLE AFFLUENCE POUR LA PREMIÈRE MARCHE DES FIERTÉS D'AMIENS
                        </h5>
                        <p class="card-text blue">La toute première marche des fiertés, ou gray pride, s'est déroulée ce
                            samedi 22 juin à Amiens (Somme).
                            Environ 2.000 personnes ont défilé dans les rues du centre-ville pour défendre la cause et
                            les droits des LGBTQI+ [...]</p>
                        <button class="btn border-rainbow">
                            <a target="_BLANK" href="https://www.francebleu.fr/infos/societe/en-images-belle-affluence-pour-la-premiere-marche-des-fiertes-d-amiens-1561218833">
                                Lire la suite
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="assets/img/articles/7.png" class="card-img-top" alt="Première Pride d'Amiens le 22 juin 2019. Photo : Alexane Feck - CPI">
                    <div class="card-body">
                        <h5 class="card-title blue">
                            FRANC SUCCÈS POUR LA MARCHE DES FIERTÉS D’AMIENS
                        </h5>
                        <p class="card-text blue">Un beau succès au vu du nombre de manifestants et de l’ambiance
                            joyeuse de l’événement, une première en Picardie.
                            Des personnalités politiques ont rejoint la marche. Et même la statue de l’homme sur sa
                            bouée de Saint-Leu s’est mise aux couleurs de l’arc-en-ciel !</p>
                        <button class="btn border-rainbow">
                            <a target="_BLANK" href="https://www.courrier-picard.fr/id20345/article/2019-06-22/franc-succes-pour-la-marche-des-fiertes-damiens">
                                Lire la suite
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="assets/img/articles/8.png" class="card-img-top" alt="Le cortège de la marche des fiertés dans les rues d'Amiens le samedi 22 juin 2019 • © Madison Mouquet / France 3 Picardie">
                    <div class="card-body">
                        <h5 class="card-title blue">
                            PRÈS DE 2000 PERSONNES RASSEMBLÉES POUR LA 1E MARCHE DES FIERTÉS D'AMIENS
                        </h5>
                        <p class="card-text blue">C'est une première en Picardie. La marche des fiertés avait lieu ce
                            samedi après-midi dans le centre-ville d'Amiens.
                            Près de 2000 personnes se sont rassemblées en faveur des droits des personnes LGBTQI+
                            [...]</p>
                        <button class="btn border-rainbow">
                            <a target="_BLANK" href="https://france3-regions.francetvinfo.fr/hauts-de-france/somme/amiens/pres-2000-personnes-rassemblees-1e-marche-fiertes-amiens-1689316.html">
                                Lire la suite
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row block-light ">
    <div class="col-12 col-sm-12 text-center border-rainbow pb-4 pt-4">
        <img src="assets/img/picto/drapeau-philadelphia.ico" alt="pied de page avec le drapeau de philadelphia" class="img-fluid h-auto" style="width: 120px;">
    </div>
</div>

<script type="text/javascript" src="assets/js/script.js"></script>

<?php
require('layout/footer.php');
?>