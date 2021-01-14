<?php
    $portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'description' => 'Victor Hugo est un poète, dramaturge, écrivain, romancier et dessinateur romantique français, né le 7 ventôse an X à Besançon et mort le 22 mai 1885 à Paris. Il est considéré comme l\'un des plus importants écrivains de langue française.', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');

    $portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'description' => 'Jean de La Fontaine, né le 8 juillet 1621 à Château-Thierry et mort le 13 avril 1695 à Paris, est un poète français de grande renommée, principalement pour ses Fables et dans une moindre mesure pour ses contes.', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');

    $portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'description' => 'Pierre Corneille, aussi appelé « le Grand Corneille » ou « Corneille l\'aîné », né le 6 juin 1606 à Rouen et mort le 1ᵉʳ octobre 1684 à Paris, est un dramaturge et poète français du XVIIᵉ siècle.', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');

    $portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'description' => 'Jean Racine est un dramaturge et poète français. Issu d\'une famille de petits notables de la Ferté-Milon et tôt orphelin, Racine reçoit auprès des « Solitaires » de Port-Royal une éducation littéraire et religieuse rare.', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
    

    function historicWriter($array) {
        $writer = '<div class="card" style="width: 26rem;">
                    <img src="'.$array['portrait'].'" class="card-img-top" alt="Portrait de '.$array['name'].' '.$array['firstname'].'">
                        <div class="card-body">
                        <h5 class="card-title">'.$array['name'].' '.$array['firstname'].'</h5>
                            <p>' . $array['description'] . '</p>
                        </div>
                    </div>';
        return $writer;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PHP - TP 10 - 3 eme exercice</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="size col-6">
            <?= historicWriter($portrait1) ?>
            </div>
        <div class="size col-6">
            <?= historicWriter($portrait2) ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="size col-6">
            <?= historicWriter($portrait3) ?>
            </div>
        <div class="size col-6">
            <?= historicWriter($portrait4) ?>
        </div>
        </div>
    </div>


</body>
</html>