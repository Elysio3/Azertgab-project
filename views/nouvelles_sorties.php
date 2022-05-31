<br>
<div class="grid-x">
    <div class="cell small-12 text-center">
        <!-- titre -->
        <h3><b>Nouvelles sorties</b></h3>
    </div>
</div>


<!-- slider généré en PHP depuis tableau -->
<div class="grid-x">
    <div class="cell small-12">



        <div class="orbit text-center" role="region" aria-label="Favorite Space Pictures" data-orbit>
            <div class="orbit-wrapper">
                <!-- boutons de contrôle du slider -->
                <div class="orbit-controls">
                    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                </div>
                <ul class="orbit-container" style="height: 500px">

                    <?php

                    //tableau de la liste des miniatures (exemple) avec un titre et un lien vers l'image à afficher (peut être locale ou url internet)
                    $listMiniaturesNouvellesSorties = [
                        ["titre"=>"miniature 1", "path"=>"images/miniatures/miniature1.png"],
                        ["titre"=>"miniature 2", "path"=>"images/miniatures/miniature2.png"],
                        ["titre"=>"miniature 3", "path"=>"images/miniatures/miniature3.png"],
                        ["titre"=>"miniature 4", "path"=>"images/miniatures/miniature4.png"]
                    ];

                    //on crée la liste des images
                    $listButtons = array();
                    $i=0;
                    foreach ($listMiniaturesNouvellesSorties as $uneMiniature) {

                        if($i == 0) {
                            echo '<li class="is-active orbit-slide">
                                <figure class="orbit-figure">
                                    <img class="orbit-image" src="'.$uneMiniature['path'].'" alt="'.$uneMiniature['titre'].'" style="height: 200; width: auto">
                                    <figcaption class="orbit-caption">"'.$uneMiniature['titre'].'"</figcaption>
                                </figure>
                            </li>
                        ';
                            $listButtons[$i] = '<button class="is-active" data-slide="'.$i.'">
                                                    <span class="show-for-sr">"'.$uneMiniature['titre'].'"</span>
                                                    <span class="show-for-sr" data-slide-active-label>Current Slide</span>
                                                </button>
                                                ';
                        } else {
                            echo '<li class="orbit-slide">
                                <figure class="orbit-figure">
                                    <img class="orbit-image" src="'.$uneMiniature['path'].'" alt="'.$uneMiniature['titre'].'" style="height: 200; width: auto">
                                    <figcaption class="orbit-caption">"'.$uneMiniature['titre'].'"</figcaption>
                                </figure>
                            </li>
                        ';

                            $listButtons[$i] = '<button data-slide="'.$i.'"><span class="show-for-sr">"'.$uneMiniature['titre'].'"</span></button>';
                        }
                        $i++;
                    }
                    ?>
                </ul>

                <?php
                    //boutons de navigation sur le slider
                    echo '<nav class="orbit-bullets">';
                    foreach ($listButtons as $button) {
                    echo $button;
                    }
                    echo '</nav>';
                ?>
            </div>

        </div>



    </div>

</div>

<br><br><br>

<div class="grid-x">
    <div class="cell small-12 text-left">
        <!-- titre -->
        <h3><b>Propositions basées sur vos recherches</b></h3>
    </div>
</div>

<div class="grid-x">
    <div class="cell small-12">
        <div class="orbit text-center" role="region" aria-label="Favorite Space Pictures" data-orbit>
            <div class="orbit-wrapper">
                <!-- boutons de contrôle du slider -->
                <div class="orbit-controls">
                    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                </div>
                <ul class="orbit-container" style="height: 500px">

                    <?php

                    //tableau de la liste des miniatures (exemple) avec un titre et un lien vers l'image à afficher (peut être locale ou url internet)
                    $listMiniaturesNouvellesSorties = [
                        ["titre"=>"miniature 1", "path"=>"images/miniatures/miniature1.png"],
                        ["titre"=>"miniature 2", "path"=>"images/miniatures/miniature2.png"],
                        ["titre"=>"miniature 3", "path"=>"images/miniatures/miniature3.png"],
                        ["titre"=>"miniature 4", "path"=>"images/miniatures/miniature4.png"]
                    ];

                    //on crée la liste des images
                    $listButtons = array();
                    $i=0;
                    foreach ($listMiniaturesNouvellesSorties as $uneMiniature) {

                        if($i == 0) {
                            echo '<li class="is-active orbit-slide">
                                <figure class="orbit-figure">
                                    <img class="orbit-image" src="'.$uneMiniature['path'].'" alt="'.$uneMiniature['titre'].'" style="height: 200; width: auto">
                                    <figcaption class="orbit-caption">"'.$uneMiniature['titre'].'"</figcaption>
                                </figure>
                            </li>
                        ';
                            $listButtons[$i] = '<button class="is-active" data-slide="'.$i.'">
                                                    <span class="show-for-sr">"'.$uneMiniature['titre'].'"</span>
                                                    <span class="show-for-sr" data-slide-active-label>Current Slide</span>
                                                </button>
                                                ';
                        } else {
                            echo '<li class="orbit-slide">
                                <figure class="orbit-figure">
                                    <img class="orbit-image" src="'.$uneMiniature['path'].'" alt="'.$uneMiniature['titre'].'" style="height: 200; width: auto">
                                    <figcaption class="orbit-caption">"'.$uneMiniature['titre'].'"</figcaption>
                                </figure>
                            </li>
                        ';

                            $listButtons[$i] = '<button data-slide="'.$i.'"><span class="show-for-sr">"'.$uneMiniature['titre'].'"</span></button>';
                        }
                        $i++;
                    }
                    ?>
                </ul>

                <?php
                //boutons de navigation sur le slider
                echo '<nav class="orbit-bullets">';
                foreach ($listButtons as $button) {
                    echo $button;
                }
                echo '</nav>';
                ?>
            </div>

        </div>
    </div>
</div>

