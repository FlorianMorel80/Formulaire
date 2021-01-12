<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>PHP - Partie 10 - TP 2</title>
</head>
<body>

<?php 
        include ('views/form.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include ('controllers/user_controller.php');
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
        include ('views/datas.php');
    } 
?>
    
</body>
</html>