<?php 
// Le fichier regexp est composé de constante 
include('views/form/regexp.php');
$error = array(); 

// ***************InputName**********************
      // Si le champs existe
       // Si il n'est pas vide, alors je nettoie la variable 
       $inputName = trim(filter_input(INPUT_POST, 'inputName' , FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

      // Si le champs est vide
      if (empty($inputName)) {
          $error['inputName'] = '*Champs requis';
      } else if (!preg_match(REGEXP_STR_NO_NUMBER,$inputName)){
        // Verifier : Si le champs ne correspond pas à la REGEX
        $error['inputName'] = '*Seuls les lettres et les espaces sont autorisés';
      } 
     

// ***************FirstName**********************
      // Si il n'est pas vide, alors je nettoie la variable 
      $inputFirstName = trim(filter_input(INPUT_POST, 'inputFirstName', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
      if (empty($inputFirstName)) {
        $error['inputFirstName'] = '*Champs requis';
        // Verifier : Si le champs ne correspond pas à la REGEX
      } else if (!preg_match(REGEXP_STR_NO_NUMBER,$inputFirstName)) {
        $error['inputFirstName'] = '*Seuls les lettres et les espaces sont autorisés';
        } 


      //***************date of birth********************** 
      $inputDateOfBirth = trim(filter_input(INPUT_POST, 'inputDateOfBirth', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES)); 
        if (empty($inputDateOfBirth)) {
          $error['inputDateOfBirth'] = '*Champs requis';
        } else {
          $timestamp = strtotime($inputDateOfBirth);
          $inputDateOfBirth = date('d-m-Y', $timestamp);
        }


      //***************Country of birth********************** 
      $inputState = trim(filter_input(INPUT_POST, 'inputState', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
        if (empty($inputState)) {
          $error['inputState'] = "*Champs requis";
        } 


      //***************Nationality********************** 
      $inputNationality = trim(filter_input(INPUT_POST,'inputNationality', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
        if (empty($inputNationality)) {
          $error['inputNationality'] = "*Champs requis";
        } else if (!preg_match(REGEXP_STR_NO_NUMBER , $inputNationality)) { 
          $error ['inputNationality'] = "*Seules les lettres sont autorisées";
        }

      // ***************Adresse************************
      $inputAddress = trim(filter_input(INPUT_POST, 'inputAddress', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES)); 
        if (empty($inputAddress)) {
          $error['inputAddress'] = "*Champs requis";
        } else if (!preg_match(REGEXP_STR_NUMBER_ADDRESS, $inputAddress)) { 
          $error['inputAddress'] = "*Seuls les lettres, les chiffres et les espaces sont autorisés";
        }

    //****************Code postal*****************
      $inputZip = trim(filter_input(INPUT_POST, 'inputZip', FILTER_SANITIZE_NUMBER_INT)); 
        if (empty($inputZip)) {
          $error['inputZip'] = "*Champs requis";
        } else if (!preg_match(REGEXP_ZIP, $inputZip)){ 
          $error['inputZip'] = "Seuls les chiffres sont autorisés";
        }


    //**************Ville*******************
      $inputCity = trim(filter_input(INPUT_POST, 'inputCity', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
        if (empty($inputCity)) {
          $error['inputCity'] = "*Champs requis";
        } else if (!preg_match(REGEXP_STR_NO_NUMBER, $inputCity)) { 
          $error['inputCity'] = "*Seules les lettres sont autorisées";
        }

      
    //*************Email**********************
      $inputEmail = trim(filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_EMAIL));
      if (empty($inputEmail)) {
        $error['inputEmail'] = "*Champs requis";
      } else if (!filter_var($inputEmail, FILTER_VALIDATE_EMAIL)) {
        $error['inputEmail'] = "*Email non valide";
      }
    
    //*****************Téléphone*******************
      $inputPhone = trim(filter_input(INPUT_POST, 'inputPhone', FILTER_SANITIZE_STRING , FILTER_FLAG_NO_ENCODE_QUOTES));
      if (empty($inputPhone)) {
        $error['inputPhone'] = "*Champs requis";
      } else if(!preg_match(REGEXP_PHONE_NUMBER, $inputPhone)) { 
        $error['inputPhone'] = "*Format du téléphone invalide";
      }
      
      //*************Pole Emploi****************
      $inputIDPoleEmploi = trim(filter_input(INPUT_POST, 'inputIDPoleEmploi', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
        if (empty($inputIDPoleEmploi)) {
          $error['inputIDPoleEmploi'] = "*Champs requis";
        } else if (!preg_match(REGEXP_ID_POLE_EMPLOI, $inputIDPoleEmploi)){ 
          $error['inputIDPoleEmploi'] = "Doit contenir 7 chiffres et 1 lettre majuscule";
        }

    //*****************Diplome*************************
      $inputDiplome = trim(filter_input(INPUT_POST, 'inputDiplome', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
        if (empty($inputDiplome)) {
          $error['inputDiplome'] = "*Champs requis";
        }

    //****************Badge****************************
      $inputBadge = trim(filter_input(INPUT_POST, 'inputBadge', FILTER_SANITIZE_NUMBER_INT));
        if (empty($inputBadge)) {
          $inputBadge = 0;
          $error['inputBadge'] = "*Champs requis";
        } else if (!preg_match(REGEXP_NUMBER_BADGE ,$inputBadge)){ 
          $error['inputBadge'] = "Seuls les chiffres sont autorisées";
        } else {
            $inputBadge = filter_var($inputBadge, FILTER_VALIDATE_INT);
        }

      //****************URL****************************
      $inputURL = trim(filter_input(INPUT_POST,'inputURL', FILTER_SANITIZE_URL));
        if (empty( $inputURL)) {
          $error['inputURL'] = "*Champs requis";
        } else if (!filter_var($inputURL, FILTER_VALIDATE_URL)) { 
          $error['inputURL'] = "URL invalide (http://xxxxx ou https://xxxxx)";
        }
      
    //*****************SuperHero****************
      $inputSuperHero = trim(filter_input(INPUT_POST, 'inputSuperHero', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
        if (empty($inputSuperHero)) {
          $error['inputSuperHero'] = "*Champs requis";
        } 

    //******************Hacks********************
      $inputHack = trim(filter_input(INPUT_POST, 'inputHack', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
        if (empty($inputHack)) {
          $error['inputHack'] = "*Champs requis";
        }
      
    //****************Expérience*******************
      $inputXP = trim(filter_input(INPUT_POST, 'inputXP', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
        if (empty($inputXP)) {
          $error['inputXP'] = "*Champs requis";
        }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>