
<?php 
// Si le formulaire est envoyé
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include('form/controller.php');
  } 

  // Si le champs est remplit et qu'il n'y a pas d'erreurs
  if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
    //déclarer variable $bodyBG et containerBG -->
    $bodyBG = 'colorBGDatas'; 
    $containerBG = 'containerDatas'; 
    // Afficher les données 
    include('structure/header.php');
    
    include('form/datas.php');
    
    //FICHIER HEADER

  } else {
    $bodyBG = 'colorBGForm';
    $containerBG = 'containerForm'; 
    include('structure/header.php');
    // Afficher le formulaire et/ou avec les erreurs  
    include('form/form.php');
  }

    //FICHIER FOOTER -->


include('structure/footer.php'); ?> 