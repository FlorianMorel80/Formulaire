<?php 
include 'regexp.php';
$error = array();


        // on récupére les values des champs et les nettoies
        $inputGender = trim(filter_input(INPUT_POST, 'inputGender', FILTER_SANITIZE_STRING));
        $inputName = trim(filter_input(INPUT_POST, 'inputName', FILTER_SANITIZE_STRING));
        $inputFirstName = trim(filter_input(INPUT_POST, 'inputFirstName', FILTER_SANITIZE_STRING));
        $inputAge = intval(trim(filter_input(INPUT_POST, 'inputAge', FILTER_SANITIZE_STRING))); // on converti l'age en entier
        $inputSociety = trim(filter_input(INPUT_POST, 'inputSociety', FILTER_SANITIZE_STRING));

    // ***************Gender**********************
 
        if(empty($inputGender)){
            $error = 'Veuillez choisir un sexe';
        } else if ($inputGender != 'Homme' && $inputGender != 'Femme' && $inputGender != 'Autre') {
            $error['inputGender'] = 'Selection non valide';
        }
    // ***************InputName**********************
      // Si le champs existe

        // Si le champs est vide
        if (empty($inputName)) {
            $error['inputName'] = '*Champs requis';
        }
            // Si il n'est pas vide, alors je nettoie la variable 
            // Verifier : Si le champs ne correspond pas à la REGEX
            else if (!preg_match(REGEXP_STR_NO_NUMBER,$inputName)) {
                $error['inputName'] = '*Seuls les lettres et les espaces sont autorisés';
            } 
        

    // ***************FirstName**********************

        // Si le champs est vide
        if (empty($inputFirstName)) {
            $error['inputFirstName'] = '*Champs requis';
        } 
            else if (!preg_match(REGEXP_STR_NO_NUMBER,$inputFirstName)) {
            $error['inputFirstName'] = '*Seuls les lettres et les espaces sont autorisés';
            } 
        
     // ***************Age**********************i
    $inputAge = trim(filter_input(INPUT_POST, 'inputAge', FILTER_SANITIZE_NUMBER_INT));
    // Si le champs est vide
    if (empty($inputAge)) {
        $error['inputAge'] = '*Champs requis';
    } 
        else if (!preg_match(REGEXP_STR_NO_NUMBER,$inputAge)) {
        $error['inputAge'] = '*Seuls les lettres et les espaces sont autorisés';
        } 
  
         // validation du champs société
    if (!preg_match(REGEXP_STR_NO_NUMBER, $inputSociety) && !empty($inputSociety)) {
        // on teste la valeur avec une regex
        $error['inputSociety'] = 'Uniquement des lettres, des espaces, -, & et \'';    
    }
?>