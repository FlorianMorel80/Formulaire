<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
  <link rel="stylesheet" href="style.css">
  
  <title>PHP - Partie 10 - TP 1 </title>
  
</head>
<body>
<div class="container">
<?php 
// Si le formulaire est envoyé
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include('form/controller.php');
  } 
var_dump($error);
 // Si le champs est remplit et qu'il n'y a pas d'erreurs
  if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
  // Afficher les données 
  echo 'coucou';
    include('form/datas.php');

  } else {
  // Afficher le formulaire et/ou avec les erreurs  
    include('form/form.php');
  }

  // include('form/datas.php');
?>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
  </script>

</body>
</html>