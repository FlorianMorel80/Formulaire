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

      //***************date of birth********************** 
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
      } else {
        $error['inputDateOfBirth'] = '*Problème lors de l\'envoi du formulaire';  
      }

      //***************Country of birth********************** 
      // if (isset($_POST["inputState"])) {
      //   $inputState = $_POST['inputState'];
      //     if (empty($_POST["inputState"])) {
      //     $error['inputState'] = "*Champs requis";
      //   } else { 
      //     $inputState = test_input($_POST["inputState"]);
      //     $inputState = filter_var($inputState, FILTER_SANITIZE_STRING); 
      //       if (!preg_match("/^([A-Z][a-z.,'-])+$/",$inputState)) {
      //         $error ['inputState'] = "*Seules les lettres sont autorisées";
      //       }
      //     } 
      //   } else {
      //     $error['inputState'] = '*Problème lors de l\'envoi du formulaire';  
      //   }
     //***************Nationality********************** 
      if (isset($_POST["inputNationality"])) {
      $inputNationality = $_POST['inputNationality'];
        if (empty($_POST["inputNationality"])) {
        $error['inputNationality'] = "*Champs requis";
        } else { 
          $inputNationality = test_input($_POST["inputNationality"]);
          $inputNationality = filter_var($inputNationality, FILTER_SANITIZE_STRING); 
            if (!preg_match("/^([A-Za-z éèêëàâäôöûüç .-])+$/",$inputNationality)) {
            $error ['inputNationality'] = "*Seules les lettres sont autorisées";
            }
        } 
      } else {
        $error['inputNationality'] = '*Problème lors de l\'envoi du formulaire';  
      }

      // ***************Adresse************************
      if (isset($_POST["inputAddress"])) {
      $inputAddress = $_POST['inputAddress'];
        if (empty($_POST["inputAddress"])) {
        $error['inputAddress'] = "*Champs requis";
        } else { 
          $inputAddress = test_input($_POST["inputAddress"]);
          $inputAddress = filter_var($inputAddress, FILTER_SANITIZE_STRING); 
            if (!preg_match("/^[0-9]{1,6}[A-Za-z .,-]+$/",$inputAddress)) {
            $error['inputAddress'] = "*Seuls les lettres, les chiffres et les espaces sont autorisés";
            }
        }
      } else {
        $error['inputAddress'] = '*Problème lors de l\'envoi du formulaire';  
      }

    //****************Code postal*****************
      if (isset($_POST["inputZip"])) {
      $inputZip = $_POST['inputZip'];
        if (empty($_POST["inputZip"])) {
        $error['inputZip'] = "*Champs requis";
          } else { 
          $inputZip = test_input($_POST["inputZip"]);
          $inputZip = filter_var($inputZip, FILTER_SANITIZE_NUMBER_FLOAT); 
            if (!preg_match("/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/",$inputZip)) {
            $error['inputZip'] = "Seuls les chiffres sont autorisés";
            }
          }
      } else {
        $error['inputZip'] = '*Problème lors de l\'envoi du formulaire';  
      }

    //**************Ville*******************
    if (isset($_POST["inputCity"])) {
    $inputCity = $_POST['inputCity'];
      if (empty($_POST["inputCity"])) {
        $error['inputCity'] = "*Champs requis";
        } else { 
          $inputCity = test_input($_POST["inputCity"]);
          $inputCity = filter_var($inputCity, FILTER_SANITIZE_STRING);
            if (!preg_match("/^([A-Za-z éèêëàâäôöûüç .-])+$/",$inputCity)) {
            $error['inputCity'] = "*Seules les lettres sont autorisées";
          }
        }
    } else {
      $error['inputCity'] = '*Problème lors de l\'envoi du formulaire';  
    }
      
    //*************Email**********************
    if (isset($_POST["inputEmail"])) {
    $inputEmail = $_POST['inputEmail'];
      if (empty($_POST["inputEmail"])) {
        $error['inputEmail'] = "*Champs requis";
        } else {
        $inputEmail = test_input($_POST["inputEmail"]);
        $inputEmail = filter_var($inputEmail, FILTER_VALIDATE_EMAIL); 
          if (!preg_match("/^([a-z0-9.@_-])+@[a-z0-9-_]+\.[a-z]{2,6}$/", $inputEmail)) {
          $error['inputEmail'] = "Format de l'email invalide";
          }
        }
    } else {
      $error['inputCity'] = '*Problème lors de l\'envoi du formulaire';  
    }
    
    //*****************Téléphone*******************
    if (isset($_POST["inputPhone"])) {
    $inputPhone = $_POST['inputPhone'];
      if (empty($_POST["inputPhone"])) {
      $error['inputPhone'] = "*Champs requis";
        } else { 
          $inputPhone = test_input($_POST["inputPhone"]);
          $inputPhone = filter_var($inputPhone, FILTER_SANITIZE_NUMBER_FLOAT);
            if (!preg_match("/^[0-9]{10}$/",$inputPhone)) {
            $error['inputPhone'] = "*Format du téléphone invalide";
            }
          }
      } else {
        $error['inputPhone'] = '*Problème lors de l\'envoi du formulaire';  
      }
      
      //*************Pole Emploi****************
      if (isset($_POST["inputIDPoleEmploi"])) {
      $inputIDPoleEmploi = $_POST['inputIDPoleEmploi'];
        if (empty($_POST["inputIDPoleEmploi"])) {
        $error['inputIDPoleEmploi'] = "*Champs requis";
          } else { 
          $inputIDPoleEmploi = test_input($_POST["inputIDPoleEmploi"]);
          $inputIDPoleEmploi = filter_var($inputIDPoleEmploi, FILTER_SANITIZE_STRING);
            if (!preg_match("/^[0-9]{8,12}[A-Z]{2}$/",$inputIDPoleEmploi)) {
            $error['inputIDPoleEmploi'] = "Seuls les lettres et les chiffres sontautorisés";
            }
          } 
      } else {
        $error['inputIDPoleEmploi'] = '*Problème lors de l\'envoi du formulaire';  
      }
      
    //   // Diplome
    //   if (empty($_POST["inputDiplome"])) {
    //     $inputDiplomeErr = "*Champs requis";
    //   } else { 
    //     $inputDiplome = test_input($_POST["inputDiplome"]);
    //       if (!preg_match("/^[A-Za-z]+$/",$inputDiplome)) {
    //         $inputDiplomeErr = "Seuls les lettres et les chiffres sont autorisées";
    //       }
    //     } 

    //****************Badge****************************
      if (isset($_POST["inputBadge"])) {
      $inputBadge = $_POST['inputBadge'];
        if (empty($_POST["inputBadge"])) {
        $error['inputBadge'] = "*Champs requis";
          } else { 
          $inputBadge = test_input($_POST["inputBadge"]);
          $inputBadge = filter_var($inputBadge, FILTER_SANITIZE_NUMBER_FLOAT);
            if (!preg_match("/^[0-9]{0,2}|[1]?[0-9]{2}$/",$inputBadge)) {
            $error['inputBadge'] = "Seuls les chiffres sont autorisées";
            }
          } 
      } else {
        $error['inputBadge'] = '*Problème lors de l\'envoi du formulaire';  
      }
      
    //   //SuperHero
    //   if (empty($_POST["inputSuperHero"])) {
    //     $inputSuperHeroErr = "*Champs requis";
    //   } else { 
    //     $inputSuperHero = test_input($_POST["inputSuperHero"]);
    //       if (!preg_match("/^([A-Za-z.- ])+$/",$inputSuperHero)) {
    //         $inputSuperHeroErr = "*Seules les lettres sont autorisées";
    //       }
    //     } 
      
    //   //Hacks
    //   if (empty($_POST["inputHack"])) {
    //     $inputHackErr = "*Champs requis";
    //   } else { 
    //     $inputHack = test_input($_POST["inputHack"]);
    //       if (!preg_match("/^([A-Za-z.- ])+$/",$inputHack)) {
    //         $inputHackErr = "*Seules les lettres sont autorisées";
    //       }
    //     }
      
    //   //Expérience
    //   if (empty($_POST["inputXP"])) {
    //     $inputXPErr = "*Champs requis";
    //   } else { 
    //     $inputXP = test_input($_POST["inputXP"]);
    //       if (!preg_match("/^([A-Za-z.- ])+$/",$inputXP)) {
    //         $inputXPErr = "*Seules les lettres sont autorisées";
    //       }
    //     }

    } else {

      


    
    }
 // Si le champs est remplit et qu'il n'y a pas d'erreurs
 if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
  // Afficher les données 
  echo $inputName . '<br/>';
  echo $inputFirstName . '<br/>';
  echo $inputDateOfBirth . '<br/>';
  echo $inputState . '<br/>';
  echo $inputNationality . '<br/>';
  echo $inputAddress . ', ';
  echo $inputZip . ', ';
  echo $inputCity . '<br />';
  echo $inputPhone . '<br />';
  echo $inputEmail . '<br />';
  echo $inputIDPoleEmploi . '<br />';
  echo $inputBadge . '<br />';
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