<?php 
include 'regexp.php';
$error = array();

    // Name
    if (isset($_POST['name'])){
        $name = $_POST['name'];
        if(empty($name)){
            $error = 'Champs requis'
        } else {
            // sanitize
            // validate
            // regex
        }
    } else {
        $error = 'Problème lors de l\'envoi du formulaire.'
    }
?>