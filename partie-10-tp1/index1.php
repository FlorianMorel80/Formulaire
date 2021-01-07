
<?php 
// Si le formulaire est envoyé
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include('form/controller.php');
  } 

    // Si le champs est remplit et qu'il n'y a pas d'erreurs
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
  // Afficher les données 

    include('structure/header.php');
?>
  
  <body class="colorBGDatas">
    <div class="containerDatas">
      <?= include('form/datas.php'); ?>
    </div>

    <!-- FICHIER HEADER -->
<?php
  } else {
  
    include('structure/header.php');
?>

  <body class="colorBGForm">
    <div class="containerForm">

<?=
    // Afficher le formulaire et/ou avec les erreurs  
    include('form/form.php');
  }
?>

    </div>

    <!-- FICHIER FOOTER -->
<?= include('structure/footer.php'); ?> 