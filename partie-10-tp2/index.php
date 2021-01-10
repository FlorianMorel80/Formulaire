<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Partie 10 - TP 2</title>
</head>
<body>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'controller.php';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
        include 'form.php';
        include 'datas.php';
    } else {
        include 'form.php';
    }
?>
    
</body>
</html>