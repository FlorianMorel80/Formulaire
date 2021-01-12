<?php 

include ('regexp.php');
$error = array();


    // ***************Gender**********************
    // filter input va fitrer un champs particulier
    $inputGender = trim(filter_input(INPUT_POST, 'inputGender' , FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
        if(empty($inputGender)){
            $error['inputGender'] = 'Veuillez choisir un sexe';
        } else { 
            if ($inputGender != 'Homme' && $inputGender != 'Femme' && $inputGender != 'Autre') {
            $error['inputGender'] = 'Selection non valide';
            }
        }
    // ***************InputName**********************
      // Si le champs existe
       // Si il n'est pas vide, alors je nettoie la variable 
    $inputName = trim(filter_input(INPUT_POST, 'inputName' , FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
      // Si le champs est vide
        if (empty($inputName)) {
            $error['inputName'] = '*Champs requis';
        } else {
            if (!preg_match(REGEXP_STR_NO_NUMBER,$inputName)){
        // Verifier : Si le champs ne correspond pas à la REGEX
        $error['inputName'] = '*Seuls les lettres et les espaces sont autorisés';
        } 
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

        
     // ***************Age**********************
    $inputAge = trim(filter_input(INPUT_POST, 'inputAge', FILTER_SANITIZE_NUMBER_INT));
    // Si le champs est vide
        if (empty($inputAge)) {
            $error['inputAge'] = '*Champs requis';
        } else {
            if (!preg_match(REGAGE,$inputAge) || ($inputAge < 18 || $inputAge > 120)) {
                $error['inputAge'] = '*Seuls les chiffres sont autorisés ';
            } 
        }

         // validation du champs société
    $inputCompany = trim(filter_input(INPUT_POST, 'inputCompany', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
        if (!preg_match(REGEXP_STR_NO_NUMBER, $inputCompany) && !empty($inputCompany)) {
        // on teste la valeur avec une regex
            $error['inputCompany'] = 'Uniquement des lettres, des espaces, -, & et \'';    
        }

        
?>