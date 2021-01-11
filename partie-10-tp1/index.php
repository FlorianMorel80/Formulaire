

<?php 
// Si le formulaire est envoyé
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include('controllers/user_controller.php');
  } 

  // Si le champs est remplit et qu'il n'y a pas d'erreurs
  if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
    //déclarer variable $bodyBG et containerBG -->
    $bodyBG = 'colorBGDatas'; 
    $containerBG = 'containerDatas'; 
    // Afficher les données 
    include('views/templates/header.php');
    
    include('views/templates/user_datas.php');
    
    //FICHIER HEADER

  } else {
    $bodyBG = 'colorBGForm';
    $containerBG = 'containerForm'; 
    include('views/templates/header.php');
    // Afficher le formulaire et/ou avec les erreurs  
    include('views/templates/user_form.php');
  }

    //FICHIER FOOTER -->


include('views/templates/footer.php'); ?> 