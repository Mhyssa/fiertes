<!-- ------------------------------------------------------------------------------------------------------------------------------
    Mentions légales --- CGU/Cookies --- ResO SociO Facebook https://fr-fr.facebook.com/festivalidahot/ --- Contact fiertes.amiens.plaidoyer@gmail.com
------------------------------------------------------------------------------------------------------------------------------ -->

<footer class="block-light pt-4">

  <div class="row footer  block-light ">
    <div class="col-lg-4 col-sm-12 ">
      <p class="text-center"><a href="https://fr-fr.facebook.com/festivalidahot/" target="_blank"><i class="fab fa-facebook fa-2x mr-2"></i></a>Collectif Idahot Amiens</p>
      <p class="text-center"><i class="fas fa-envelope fa-2x mr-2"></i><a href="mailto:fiertes.amiens@gmail.com" class="link" target="_blank">contact@fiertesamiens.fr</p></a>
    </div>
    <div class="col-lg-8 col-sm-12">
      <a target="_blank" href="https://www.aides.org/">
        <img src="assets\img\logo\Logo_AIDES.png" height="80" alt="logo AIDES">
      </a>
      <a target="_blank" href="">
        <img src="assets\img\logo\Logo_Divergenre.png" height="100" alt="logo Divergenre">
      </a>
      <a target="_blank" href="https://flash-our-true-colors.fr/">
        <img src="assets\img\logo\Logo_Flash_Our_True_Colors.png" height="80" alt="logo Flash True Colors">
      </a>
      <a target="_blank" href="https://www.gas-asso.org/">
        <img src="assets\img\logo\Logo_GAS.png" height="80" alt="logo GAS">
      </a>
      <a target="_blank" href="https://lesbavardes.org/">
        <img src="assets\img\logo\Logo_Les_Bavardes.png" height="80" alt="logo Les Bavardes">
      </a>
      <a target="_blank" href="">
        <img src="assets\img\logo\SQ-logo.png" height="80" alt="logo Simili Queer">
      </a>
      <a target="_blank" href="https://www.sos-homophobie.org/delegation/picardie">
        <img src="assets\img\logo\Logo_SOS_homophobie.png" height="80" alt="logo Sos Homophobie Délégation Picardie">
      </a>
      <a target="_blank" href="https://www.sexosafe.fr/">
        <img src="assets\img\logo\Logo_Sexo.PNG" height="80" alt="logo Sexo Safe">
      </a>
      <a target="_blank" href="https://www.amiens.fr/">
        <img src="assets\img\logo\Logo_Amiens.png" height="80" alt="logo Amiens Metropole">
      </a>

    </div>


    <div class="col-lg-12 col-md-12 pt-2 m-auto">
      <div class="col-lg-5 col-md-12 m-auto"></div>

      <div class=" pt-4 pb-3 m-auto d-flex justify-content-around">
        <p class=""><a href="mention.php" class="">Mentions légales </a></p>
        <p class="">I</p>
        <p class="">©2020 Fiertes Amiens. All rights reserved.</p>
        <p class="">I</p>
        <p class=""><a href="politique.php" class="">Politique de confidentialité </a></p>
      </div>
    </div>

  </div>
</footer>
</div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
  integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 <!-- Ekko -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

<script>

    $(document).on('click', '[data-toggle="lightbox"]', function(event){
        event.preventDefault();
        $(this).ekkoLightbox();
    })
    let check = 0;
    $( "#visual" ).click(function() { 
      console.log(check)
      if (check==0){
        $("#VisualTarget").removeClass( "lireTout" );
        
        check = 1;
      }else{
        $( "#VisualTarget" ).addClass( "lireTout" );
        check = 0;
      }
      
     
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#aa0000",
        "text": "#ffdddd"
      },
      "button": {
        "background": "#ff0000"
      }
    },
    "theme": "edgeless",
    "content": {
      "message": "Ce site utilise des cookies pour vous garantir la meilleure expérience sur notre site.",
      "dismiss": "J'accepte",
      "link": "En savoir plus",
      "href": "politique.php"
    }
  });
  
</script>

</body>

</html>