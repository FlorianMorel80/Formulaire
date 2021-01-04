<?php 
$error = array(); 


if (isset($_POST['inputName'])){
    // Tester si le champ existe
}

    if (empty($_POST["inputName"])) {
        array_push($error, 'Champs requis');
    } else {
        if (!preg_match("/^[a-zA-Z-' ]*$/",$inputName)) 
            array_push($error, 'Seuls les lettres et les espaces sont autorisés');
    }   

    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
        // Afficher les données 
        
        echo $inputName;
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