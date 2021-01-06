<?php 
$error = array(); 

// Si le formulaire est envoyé
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    
    // Si le champs existe
    if (isset($_POST['inputName'])) {
        $inputName = $_POST['inputName'];
        
        // Si le champs est vide
        if (empty($inputName)) {
            $error['inputName'] = 'Champs requis';
        } else {

            // Si il n'est pas vide, alors je nettoie la variable 
            $inputName = filter_var($inputName, FILTER_SANITIZE_STRING);

            // Verifier : Si le champs ne correspond pas à la REGEX
            if (!preg_match("/^[a-zA-Z-' ]*$/",$inputName)) {
                $error['inputName'] = 'Seuls les lettres et les espaces sont autorisés';
            } 
        }
    } else {
        $error['inputName'] = 'Problème lors de l\'envoi du formulaire';  
    }

    //chp 2
// ***************FirstName**********************
if (isset($_POST['inputFirstName'])) {
    $inputFirstName = $_POST['inputFirstName'];
      if (empty($inputFirstName)) {
        $error['inputFirstName'] = '*Champs requis';
      } else {
        // Si il n'est pas vide, alors je nettoie la variable 
        $inputFirstName = filter_var($inputFirstName, FILTER_SANITIZE_STRING);
        // Verifier : Si le champs ne correspond pas à la REGEX
        if (!preg_match("/^[A-Za-z-' ]*$/",$inputFirstName)) {
            $error['inputFirstName'] = '*Seuls les lettres et les espaces sont autorisés';
        } 
    }
  } else {
      $error['inputFirstName'] = '*Problème lors de l\'envoi du formulaire';  
  }

}

 // Si le champs est remplit et qu'il n'y a pas d'erreurs
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
    // Afficher les données 
    echo $inputName . '<br/>';
    echo $inputFirstName;
    
} else {
    // Afficher le formulaire et/ou avec les erreurs 
    include 'form.php';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>PHP - Partie 10 - TP 1 </title>
  
</head>
<body>


</body>
</html>