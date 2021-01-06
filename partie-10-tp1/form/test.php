<?php 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

 if (isset($_POST['inputFirstName'])) {
    $inputFirstName = $_POST['inputFirstName'];
      if (empty($inputFirstName)) {
        $error['inputFirstName'] = '*Champs requis';
      } else {
        // Si il n'est pas vide, alors je nettoie la variable 
        $inputFirstName = test_input($_POST["inputFirstName"]);
        $inputFirstName = filter_var($inputFirstName, FILTER_SANITIZE_STRING);
        // Verifier : Si le champs ne correspond pas à la REGEX
        if (!preg_match("$regexpFirstName",$inputFirstName)) {
            $error['inputFirstName'] = '*Seuls les lettres et les espaces sont autorisés';
        } 
    }
  } else {
      $error['inputFirstName'] = '*Problème lors de l\'envoi du formulaire';  
  }
}
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" metho="POST">
<div class="form-inline col-md-6">
        <label for="inputFirstName">Prénom</label>
        <input type="text" class="form-control" name="inputFirstName" pattern="[A-Za-z-éèêëàâäôöûüùç'. ]*" title ="Le champs ne doit comporter que des lettres et des espaces" placeholder="Votre prénom">
        <p class="text-danger"><?= $error['inputFirstName'] ?? ''; ?></p>
      </div>

      <button type="submit" class="btn btn-primary ">Envoyer</button>

      <?= $inputFirstName;  ?>
  </form>
      </body>
</html>