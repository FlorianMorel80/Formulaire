<?php 

$error = array(); 
include('form/regexp.php');
// ***************InputName**********************
      // Si le champs existe
    if (isset($_POST['inputName'])) {
      $inputName = $_POST['inputName'];
      
      // Si le champs est vide
      if (empty($inputName)) {
          $error['inputName'] = '*Champs requis';
      } else {

          // Si il n'est pas vide, alors je nettoie la variable 
          $inputName = trim(filter_var($inputName, FILTER_SANITIZE_STRING));

          // Verifier : Si le champs ne correspond pas à la REGEX
          if (!preg_match($regexpName,$inputName)) {
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
        $inputFirstName = trim(filter_var($inputFirstName, FILTER_SANITIZE_STRING));
        // Verifier : Si le champs ne correspond pas à la REGEX
        if (!preg_match($regexpFirstName,$inputFirstName)) {
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
          $inputDateOfBirth = trim(filter_var($inputDateOfBirth, FILTER_SANITIZE_STRING)); 
          $timestamp = strtotime($inputDateOfBirth);
          $inputDateOfBirth = date('d-m-Y', $timestamp);
        }
      } else {
        $error['inputDateOfBirth'] = '*Problème lors de l\'envoi du formulaire';  
      }

      //***************Country of birth********************** 
      if (isset($_POST["inputState"])) {
        $inputState = $_POST['inputState'];
          if (empty($inputState)) {
          $error['inputState'] = "*Champs requis";
        } else { 
          $inputState = trim(filter_var($inputState, FILTER_SANITIZE_STRING)); 
            // if (!preg_match($regexpState,$inputState)) {
            //   $error['inputState'] = "*Seules les lettres sont autorisées";
            // }
          } 
        } else {
          $error['inputState'] = '*Problème lors de l\'envoi du formulaire';  
        }

     //***************Nationality********************** 
      if (isset($_POST["inputNationality"])) {
      $inputNationality = $_POST['inputNationality'];
        if (empty($inputNationality)) {
        $error['inputNationality'] = "*Champs requis";
        } else { 
          $inputNationality = trim(filter_var($inputNationality, FILTER_SANITIZE_STRING)); 
            if (!preg_match($regexpNationality, $inputNationality)) {
            $error ['inputNationality'] = "*Seules les lettres sont autorisées";
            }
        } 
      } else {
        $error['inputNationality'] = '*Problème lors de l\'envoi du formulaire';  
      }

      // ***************Adresse************************
      if (isset($_POST["inputAddress"])) {
      $inputAddress = $_POST['inputAddress'];
        if (empty($inputAddress)) {
        $error['inputAddress'] = "*Champs requis";
        } else { 
          $inputAddress = trim(filter_var($inputAddress, FILTER_SANITIZE_STRING)); 
            if (!preg_match($regexpAddress, $inputAddress)) {
            $error['inputAddress'] = "*Seuls les lettres, les chiffres et les espaces sont autorisés";
            }
        }
      } else {
        $error['inputAddress'] = '*Problème lors de l\'envoi du formulaire';  
      }

    //****************Code postal*****************
      if (isset($_POST["inputZip"])) {
      $inputZip = $_POST['inputZip'];
        if (empty($inputZip)) {
        $error['inputZip'] = "*Champs requis";
          } else { 
          $inputZip = trim(filter_var($inputZip, FILTER_SANITIZE_NUMBER_INT)); 
          
            if (!preg_match($regexpZIP, $inputZip)) {
            $error['inputZip'] = "Seuls les chiffres sont autorisés";
            }
          }
      } else {
        $error['inputZip'] = '*Problème lors de l\'envoi du formulaire';  
      }

    //**************Ville*******************
    if (isset($_POST["inputCity"])) {
    $inputCity = $_POST['inputCity'];
      if (empty($inputCity)) {
        $error['inputCity'] = "*Champs requis";
        } else { 
          $inputCity = trim(filter_var($inputCity, FILTER_SANITIZE_STRING));
            if (!preg_match($regexpCity, $inputCity)) {
            $error['inputCity'] = "*Seules les lettres sont autorisées";
          }
        }
    } else {
      $error['inputCity'] = '*Problème lors de l\'envoi du formulaire';  
    }
      
    //*************Email**********************
    if (isset($_POST["inputEmail"])) {
    $inputEmail = $_POST['inputEmail'];
      if (empty($inputEmail)) {
        $error['inputEmail'] = "*Champs requis";
        } else {
        $inputEmail = trim(filter_var($inputEmail, FILTER_SANITIZE_EMAIL));

          if(!filter_var($inputEmail, FILTER_VALIDATE_EMAIL)) {
          $error['inputEmail'] = "*Email non valide";
          }
        
        }
    } else {
      $error['inputCity'] = '*Problème lors de l\'envoi du formulaire';  
    }
    
    //*****************Téléphone*******************
    if (isset($_POST["inputPhone"])) {
    $inputPhone = $_POST['inputPhone'];
      if (empty($inputPhone)) {
      $error['inputPhone'] = "*Champs requis";
        } else { 
          $inputPhone = trim(filter_var($inputPhone, FILTER_SANITIZE_NUMBER_INT));
            if (!preg_match($regexpPhone,$inputPhone)) {
            $error['inputPhone'] = "*Format du téléphone invalide";
            }
          }
      } else {
        $error['inputPhone'] = '*Problème lors de l\'envoi du formulaire';  
      }
      
      //*************Pole Emploi****************
      if (isset($_POST["inputIDPoleEmploi"])) {
      $inputIDPoleEmploi = $_POST['inputIDPoleEmploi'];
        if (empty($inputIDPoleEmploi)) {
        $error['inputIDPoleEmploi'] = "*Champs requis";
          } else { 
          $inputIDPoleEmploi = trim(filter_var($inputIDPoleEmploi, FILTER_SANITIZE_STRING));
            if (!preg_match($regexpIDPoleEmploi, $inputIDPoleEmploi)) {
            $error['inputIDPoleEmploi'] = "Doit contenir 7 chiffres et 1 lettre";
            }
          } 
      } else {
        $error['inputIDPoleEmploi'] = '*Problème lors de l\'envoi du formulaire';  
      }
      
    //*****************Diplome*************************
      if (isset($_POST["inputDiplome"])) {
        $inputDiplome = $_POST['inputDiplome'];
        if (empty($inputDiplome)) {
        $error['inputDiplome'] = "*Champs requis";
          } else { 
          $inputDiplome = trim(filter_var($inputDiplome, FILTER_SANITIZE_STRING));
            // if (!preg_match($regexpDiplome, $inputDiplome)) {
            // $error['inputDiplome'] = "Seuls les lettres et les chiffres sont autorisées";
            // }
          } 
      } else {
        $error['inputDiplome'] = '*Problème lors de l\'envoi du formulaire';  
      }

    //****************Badge****************************
      if (isset($_POST["inputBadge"])) {
      $inputBadge = $_POST['inputBadge'];
        if (empty($inputBadge)) {
          $inputBadge = 0;
        $error['inputBadge'] = "*Champs requis";
          } else { 
          $inputBadge = trim(filter_var($inputBadge, FILTER_VALIDATE_INT));
            if (!preg_match($regexpBadge,$inputBadge)) {
            $error['inputBadge'] = "Seuls les chiffres sont autorisées";
            }
          } 
      } else {
        $error['inputBadge'] = '*Problème lors de l\'envoi du formulaire';  
      }

      //****************URL****************************
      if (isset($_POST["inputURL"])) {
        $inputURL = $_POST['inputURL'];
          if (empty( $inputURL)) {
          $error['inputURL'] = "*Champs requis";
            } else { 

            $inputURL = trim(filter_var($inputURL, FILTER_SANITIZE_URL));
              
              if (!filter_var($inputURL, FILTER_VALIDATE_URL)){
                $error['inputURL'] = "URL invalide";
              };
              
            } 
        } else {
          $error['inputURL'] = '*Problème lors de l\'envoi du formulaire';  
        }
      
    //*****************SuperHero****************
      if (isset($_POST["inputSuperHero"])) {
      $inputSuperHero = $_POST['inputSuperHero'];
        if (empty($inputSuperHero)) {
        $error['inputSuperHero'] = "*Champs requis";
          } else { 
            $inputSuperHero = trim(filter_var($inputSuperHero, FILTER_SANITIZE_STRING));
          }
      } else {
        $error['inputSuperHero'] = '*Problème lors de l\'envoi du formulaire';  
      }
      
    //******************Hacks********************
      if (isset($_POST['inputHack'])) {
        $inputHack = $_POST['inputHack'];
        if (empty($inputHack)) {
          $error['inputHack'] = "*Champs requis";
            } else { 
              $inputHack = trim(filter_var($inputHack, FILTER_SANITIZE_STRING));
          }
      } else {
        $error['inputHack'] = '*Problème lors de l\'envoi du formulaire';  
      }
      
    //****************Expérience*******************
    if (isset($_POST['inputXP'])) {
      $inputXP = $_POST['inputXP'];
        if (empty($inputXP)) {
          $error['inputXP'] = "*Champs requis";
        } else { 
          $inputXP = trim(filter_var($inputXP, FILTER_SANITIZE_STRING));
        }
      } else {
        $error['inputXP'] = '*Problème lors de l\'envoi du formulaire';
      }
      
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>