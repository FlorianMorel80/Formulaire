<?php 
$error = array(); 

    
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

// ***************InputName**********************
      // Si le champs existe
    if (isset($_POST['inputName'])) {
      $inputName = $_POST['inputName'];
      
      // Si le champs est vide
      if (empty($inputName)) {
          $error['inputName'] = '*Champs requis';
      } else {

          // Si il n'est pas vide, alors je nettoie la variable 
          $inputName = test_input($_POST["inputName"]);
          $inputName = filter_var($inputName, FILTER_SANITIZE_STRING);

          // Verifier : Si le champs ne correspond pas à la REGEX
          if (!preg_match("/^[A-Za-z-éèêëàâäôöûüç'. ]*$/",$inputName)) {
              $error['inputName'] = '*Seuls les lettres et les espaces sont autorisés';
          } 
      }
    } else {
      $error['inputName'] = '*Problème lors de l\'envoi du formulaire';  
  }

// ***************FirstName**********************
    if (isset($_POST['inputFirstName'])) {
    $inputFirstName = $_POST['inputFirstName'];
      if (empty($inputFirstName)) {
        $error['inputFirstName'] = '*Champs requis';
      } else {
        // Si il n'est pas vide, alors je nettoie la variable 
        $inputFirstName = test_input($_POST["inputFirstName"]);
        $inputFirstName = filter_var($inputFirstName, FILTER_SANITIZE_STRING);
        // Verifier : Si le champs ne correspond pas à la REGEX
        if (!preg_match("/^[A-Za-z-éèêëàâäôöûüç'. ]*$/",$inputFirstName)) {
            $error['inputFirstName'] = '*Seuls les lettres et les espaces sont autorisés';
        } 
    }
  } else {
      $error['inputFirstName'] = '*Problème lors de l\'envoi du formulaire';  
  }

      // Date de naissance
      if (isset($_POST["inputDateOfBirth"])) {
      $inputDateOfBirth = $_POST['inputDateOfBirth'];
        if (empty($inputDateOfBirth)) {
          $error['inputDateOfBirth'] = '*Champs requis';
      } else {
        $inputDateOfBirth = test_input($_POST["inputDateOfBirth"]);
        $inputDateOfBirth = filter_var($inputDateOfBirth, FILTER_SANITIZE_STRING); 
          if (!preg_match("/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/",$inputDateOfBirth)) {
            $error['inputDateOfBirth'] = "*Seuls les chiffres sont autorisés";
          }
        }
      }

    //   // Nationalité
    //   if (empty($_POST["inputNationality"])) {
    //     $inputNationalityErr = "Champs requis";
    //   } else { 
    //     $inputNationality = test_input($_POST["inputNationality"]);
    //       if (!preg_match("/^([A-Z][a-z.-])+$/",$inputNationality)) {
    //         $inputNationalityErr = "Seules les lettres et les chiffres sont autorisés";
    //       }
    //     }

    //   // Adresse
    //   if (empty($_POST["inputAdress"])) {
    //     $inputAdressErr = "Champs requis";
    //   } else { 
    //     $inputAdress = test_input($_POST["inputAdress"]);
    //       if (!preg_match("/^([0-9]{1,6}([A-Z][a-z.-])+$/",$inputAdress)) {
    //         $inputAdressErr = "Seules les lettres et les chiffres sont autorisés";
    //       }
    //     }

    //   // Code postal
    //   if (empty($_POST["inputZip"])) {
    //     $inputZipErr = "Champs requis";
    //   } else { 
    //     $inputZip = test_input($_POST["inputZip"]);
    //       if (!preg_match("/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/",$inputZip)) {
    //         $inputZipErr = "Seuls les chiffres sont autorisés";
    //       }
    //     }

    //   // Ville
    //   if (empty($_POST["inputCity"])) {
    //     $inputCityErr = "Champs requis";
    //   } else { 
    //     $inputCity = test_input($_POST["inputCity"]);
    //       if (!preg_match("/^([A-Z][a-z.-])+$/",$inputCity)) {
    //         $inputCityErr = "Seules les lettres sont autorisées";
    //       }
    //     }
      
    //   // Email
    //   if (empty($_POST["inputEmail"])) {
    //   $email = test_input($_POST["inputEmail"]);
    //     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //       $emailErr = "Format de l'email invalide";
    //     }
    //   }
    
    //   // Téléphone
    //   if (empty($_POST["inputPhone"])) {
    //     $inputPhoneErr = "Champs requis";
    //   } else { 
    //     $inputPhone = test_input($_POST["inputPhone"]);
    //       if (!preg_match("/^[0-9]{10}$/",$inputPhone)) {
    //         $inputPhoneErr = "Seules les lettres sont autorisées";
    //       }
    //     }
      
    //   //Pole Emploi
    //   if (empty($_POST["inputIDPoleEmploi"])) {
    //     $inputIDPoleEmploiErr = "Champs requis";
    //   } else { 
    //     $inputIDPoleEmploi = test_input($_POST["inputIDPoleEmploi"]);
    //       if (!preg_match("/^[0-9]{8,12}[A-Z]{2}$/",$inputIDPoleEmploi)) {
    //         $inputIDPoleEmploiErr = "Seuls les lettres et les chiffres sont autorisées";
    //       }
    //     } 
      
    //   // Diplome
    //   if (empty($_POST["inputDiplome"])) {
    //     $inputDiplomeErr = "Champs requis";
    //   } else { 
    //     $inputDiplome = test_input($_POST["inputDiplome"]);
    //       if (!preg_match("/^[A-Za-z]+$/",$inputDiplome)) {
    //         $inputDiplomeErr = "Seuls les lettres et les chiffres sont autorisées";
    //       }
    //     } 

    //   //Badge
    //   if (empty($_POST["inputBadge"])) {
    //     $inputBadgeErr = "Champs requis";
    //   } else { 
    //     $inputBadge = test_input($_POST["inputBadge"]);
    //       if (!preg_match("/^[0-9]{0,3}$/",$inputBadge)) {
    //         $inputBadgeErr = "Seuls les chiffres sont autorisées";
    //       }
    //     } 
      
    //   //SuperHero
    //   if (empty($_POST["inputSuperHero"])) {
    //     $inputSuperHeroErr = "Champs requis";
    //   } else { 
    //     $inputSuperHero = test_input($_POST["inputSuperHero"]);
    //       if (!preg_match("/^([A-Za-z.- ])+$/",$inputSuperHero)) {
    //         $inputSuperHeroErr = "Seules les lettres sont autorisées";
    //       }
    //     } 
      
    //   //Hacks
    //   if (empty($_POST["inputHack"])) {
    //     $inputHackErr = "Champs requis";
    //   } else { 
    //     $inputHack = test_input($_POST["inputHack"]);
    //       if (!preg_match("/^([A-Za-z.- ])+$/",$inputHack)) {
    //         $inputHackErr = "Seules les lettres sont autorisées";
    //       }
    //     }
      
    //   //Expérience
    //   if (empty($_POST["inputXP"])) {
    //     $inputXPErr = "Champs requis";
    //   } else { 
    //     $inputXP = test_input($_POST["inputXP"]);
    //       if (!preg_match("/^([A-Za-z.- ])+$/",$inputXP)) {
    //         $inputXPErr = "Seules les lettres sont autorisées";
    //       }
    //     }

    } else {

      


    
    }
 // Si le champs est remplit et qu'il n'y a pas d'erreurs
 if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
  // Afficher les données 
  echo $inputName . '<br/>';
  echo $inputFirstName . '<br/>';
  echo $inputDateOfBirth;
} else {
  // Afficher le formulaire et/ou avec les erreurs 
  include ('form.php');
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

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


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
  </script>

</body>
</html>