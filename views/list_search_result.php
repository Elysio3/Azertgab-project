<?php

//tableau d'exemple
$listRecherche = [
    ["titre"=>"serie 1", "path"=>"images/miniatures/miniature1.png", "nbSaisons" => 1],
    ["titre"=>"serie 2", "path"=>"images/miniatures/miniature2.png", "nbSaisons" => 2],
    ["titre"=>"serie 3", "path"=>"images/miniatures/miniature3.png", "nbSaisons" => 3],
    ["titre"=>"serie 1", "path"=>"images/miniatures/miniature1.png", "nbSaisons" => 1],
    ["titre"=>"serie 2", "path"=>"images/miniatures/miniature2.png", "nbSaisons" => 2],
    ["titre"=>"serie 3", "path"=>"images/miniatures/miniature3.png", "nbSaisons" => 3],
    ["titre"=>"serie 1", "path"=>"images/miniatures/miniature1.png", "nbSaisons" => 1],
    ["titre"=>"serie 2", "path"=>"images/miniatures/miniature2.png", "nbSaisons" => 2],
    ["titre"=>"serie 3", "path"=>"images/miniatures/miniature3.png", "nbSaisons" => 3],
    ["titre"=>"serie 1", "path"=>"images/miniatures/miniature1.png", "nbSaisons" => 1],
    ["titre"=>"serie 2", "path"=>"images/miniatures/miniature2.png", "nbSaisons" => 2],
    ["titre"=>"serie 3", "path"=>"images/miniatures/miniature3.png", "nbSaisons" => 3],
    ["titre"=>"serie 4", "path"=>"images/miniatures/miniature4.png", "nbSaisons" => 4]
];



echo "<table>";
foreach ($listRecherche as $uneSerie) {
    echo "<tr>";
    echo '<td> <img class="orbit-image" src="/Azertgab-project/'.$uneSerie['path'].'" alt="'.$uneSerie['titre'].'" style="width: 100px"> </td>';
    echo "<td><u>" . $uneSerie["titre"] . "<br>" . $uneSerie["titre"] . " saisons</u></td>";
    echo "</tr>";
}
