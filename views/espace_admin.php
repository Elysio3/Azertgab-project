
<div class="" style="margin-top: 10px">

    <div class="columns">

        <div class="cell small-8 large-offset-2 text-center">
            <!-- titre -->
            <h3><b><u>Espace Administration</u></b></h3>
        </div>

        <div class="column row">
            <!-- boutons de navigation entre les différents panneaux -->
            <ul class="tabs" data-tabs="5pplmh-tabs" id="example-tabs">
                <li class="tabs-title is-active" role="presentation">
                    <a href="#panel1" aria-selected="true" role="tab" aria-controls="panel1" id="panel1-label">Modifier une série</a>
                </li>
                <li class="tabs-title" role="presentation">
                    <a href="#panel2" role="tab" aria-controls="panel2" aria-selected="false" id="panel2-label">Ajouter une nouvelle série</a>
                </li>
            </ul>

            <div class="medium-12 column text-center">
                <div class="grid-container">
                    <div class="tabs-content" data-tabs-content="example-tabs">


                        <!-- contenu du panneau 1 -->
                        <div class="tabs-panel is-active" id="panel1" aria-hidden="false">

                            <!-- Titre série -->
                            <div class="grid-x">

                                <div class="cell small-3">
                                    <br>
                                    <div class="cell small-6">
                                        <?php
                                        //affichage du titre de la série depuis une variable à initialiser (requête sql ?)
                                        $NomSerie = "Nom Série";
                                        echo '<input type="text" name="nom_serie" id="nom_serie" value="'.$NomSerie.'" readonly/></input>';
                                        ?>
                                    </div>
                                    <div class="cell small-6">
                                        <?php
                                        //affichage du titre de la série depuis une variable à initialiser (requête sql ?)
                                        $NbSaisons = "Nombre de saisons";
                                        echo '<input type="text" name="nb_saisons" id="nb_saisons" value="'.$NbSaisons.'" readonly/></input>';
                                        ?>
                                    </div>
                                    <div class="cell small-6">
                                        <?php
                                        //affichage du titre de la série depuis une variable à initialiser (requête sql ?)
                                        $NbEpisodes = "Nombre d'épisodes";
                                        echo '<input type="text" name="nb_episodes" id="nb_episodes" value="'.$NbEpisodes.'" readonly/></input>';
                                        ?>
                                    </div>


                                </div>

                                <div class="cell small-9" style="padding-right: 5px; padding-left: 5px;">
                                    <!-- search bar -->
                                    <div class="grid-x">
                                        <div class="cell small-5">
                                            <input type="search" name="search" id="search" placeholder="Search"/>
                                        </div>
                                    </div>

                                    <!-- résultat de la recherche ? -->
                                    <div class="grid-x" style="border: solid black 1px">
                                        <div class="grid-container">


                                            <!-- Titre série -->
                                            <div class="grid-x">
                                                <div class="cell small-6 small-offset-4">
                                                    <?php
                                                        //affichage du titre de la série depuis une variable à initialiser (requête sql ?)
                                                        $listSaisons = array("saison 1","saison 2","saison 3","saison 4","saison 5");
                                                        echo "<select name='saisons' id='saisons'>";
                                                        echo "<option value=''>--Please choose an option--</option>";
                                                        foreach ($listSaisons as $uneSaison) {
                                                            echo "<option value='$uneSaison'>$uneSaison</option>";
                                                        }
                                                        echo "</select>";
                                                    ?>

                                                    <a class="warning" href="">Ajouter une saison</a>
                                                </div>
                                            </div>


                                            <br><br>


                                            <!-- Répertoire des épisodes -->
                                            <div class="grid-x">
                                                <div class="cell small-8 large-offset-2">
                                                    <?php
                                                    //affichage du "Répertoire des épisodes"
                                                    //si ce n'est pas une valeur dynamique, retirer le php et afficher un titre <h3>Répertoire des épisodes</h3> classique à la place
                                                    $titre = "Répertoire des épisodes";
                                                    echo '<input type="text" name="titre_serie" id="titre_serie" value="'.$titre.'" readonly/></input>';
                                                    ?>
                                                </div>
                                            </div>

                                            <!-- Titre série -->
                                            <div class="grid-x">


                                                <div class="cell small-10" style="padding-right: 10px; padding-left: 10px;">
                                                    <button class="button secondary hollow" onclick="">Charger</button>
                                                    <?php
                                                    //affichage du tableau des épisodes avec le nom du fichier et son titre depuis un table (à définir par une requête)

                                                    //exemple d'un tableau d'une liste d'épisodes d'une série avec le nom et le titre de l'épisode
                                                    $episodes = [
                                                        ["fichier"=>"Serie1_S01_Ep1.vlc", "titre"=>"Episode 1 Série"],
                                                        ["fichier"=>"Serie1_S01_Ep2.vlc", "titre"=>"Episode 2 Série"],
                                                        ["fichier"=>"Serie1_S01_Ep3.vlc", "titre"=>"Episode 3 Série"],
                                                        ["fichier"=>"Serie1_S01_Ep4.vlc", "titre"=>"Episode 4 Série"]
                                                    ];

                                                    echo "<table>";
                                                    //insertion de l'entête du tableau (clés du tableau $episodes)
                                                    echo "<thead>";
                                                    echo "<tr>";
                                                    //pour chaque clé du premier élément de la liste des épisodes
                                                    foreach($episodes[0] as $key=>$value) {
                                                        echo "<td>" . $key . "</td>";
                                                    }
                                                    echo "</tr>";
                                                    echo "</thead>";

                                                    //insertion des données du tableau
                                                    echo "<tbody>";
                                                    //pour chaque épisode dans la liste des épisodes
                                                    foreach ($episodes as $unEpisode) {
                                                        echo "<tr>";
                                                        //pour chaque valeur d'un épisode (fichier, titre, ...)
                                                        foreach ($unEpisode as $key=>$value) {
                                                            echo "<td>" . $value . "</td>";
                                                        }
                                                        echo "</tr>";
                                                    }
                                                    echo "</tbody>";
                                                    echo "</table>";


                                                    ?>
                                                </div>

                                                <div class="cell small-2 text-center">
                                                    <br><br><br>
                                                    <button class="button secondary hollow" onclick="">Ajouter les épisodes</button>
                                                    <br>
                                                    <button class="button secondary hollow" onclick="">Annuler</button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>

                        </div>

                        <!-- ---------------------------------------------------------------------------------------------------------------------------- -->

                        <!-- contenu du panneau 2 -->
                        <div class="tabs-panel" id="panel2" aria-hidden="true">

                            <!-- Titre série -->
                            <div class="grid-x">
                                <div class="cell small-4 large-offset-4">
                                    <?php
                                    //affichage du titre de la série depuis une variable à initialiser (requête sql ?)
                                    $titre = "Titre";
                                    echo '<input type="text" name="titre_serie" id="titre_serie" style="height: 50px" value="'.$titre.'" readonly/></input>';
                                    ?>
                                </div>
                            </div>

                            <!-- Répertoire des épisodes -->
                            <div class="grid-x">
                                <div class="cell small-4 large-offset-4">
                                    <?php
                                    //affichage du "Répertoire des épisodes"
                                    //si ce n'est pas une valeur dynamique, retirer le php et afficher un titre <h3>Répertoire des épisodes</h3> classique à la place
                                    $titre = "Répertoire des épisodes";
                                    echo '<input type="text" name="titre_serie" id="titre_serie" style="height: 50px" value="'.$titre.'" readonly/></input>';
                                    ?>
                                </div>
                            </div>
                            <br><br>

                            <!-- Titre série -->
                            <div class="grid-x">

                                <div class="cell small-3">
                                    <br><br><br>
                                    Saison :
                                    <?php
                                    //affichage du numéro de la saison depuis une variable php à définir
                                    $NoSaison = "123";
                                    echo $NoSaison;
                                    ?>
                                </div>

                                <div class="cell small-6" style="padding-right: 10px; padding-left: 10px;">
                                    <button class="button secondary hollow" onclick="">Charger</button>
                                    <?php
                                    //affichage du tableau des épisodes avec le nom du fichier et son titre depuis un table (à définir par une requête)

                                    //exemple d'un tableau d'une liste d'épisodes d'une série avec le nom et le titre de l'épisode
                                    $episodes = [
                                        ["fichier"=>"Serie1_S01_Ep1.vlc", "titre"=>"Episode 1 Série"],
                                        ["fichier"=>"Serie1_S01_Ep2.vlc", "titre"=>"Episode 2 Série"],
                                        ["fichier"=>"Serie1_S01_Ep3.vlc", "titre"=>"Episode 3 Série"],
                                        ["fichier"=>"Serie1_S01_Ep4.vlc", "titre"=>"Episode 4 Série"],
                                    ];

                                    echo "<table>";
                                    //insertion de l'entête du tableau (clés du tableau $episodes)
                                    echo "<thead>";
                                    echo "<tr>";
                                    //pour chaque clé du premier élément de la liste des épisodes
                                    foreach($episodes[0] as $key=>$value) {
                                        echo "<td>" . $key . "</td>";
                                    }
                                    echo "</tr>";
                                    echo "</thead>";

                                    //insertion des données du tableau
                                    echo "<tbody>";
                                    //pour chaque épisode dans la liste des épisodes
                                    foreach ($episodes as $unEpisode) {
                                        echo "<tr>";
                                        //pour chaque valeur d'un épisode (fichier, titre, ...)
                                        foreach ($unEpisode as $key=>$value) {
                                            echo "<td>" . $value . "</td>";
                                        }
                                        echo "</tr>";
                                    }
                                    echo "</tbody>";
                                    echo "</table>";


                                    ?>
                                </div>

                                <div class="cell small-3 text-left">
                                    <br><br><br>
                                    <button class="button secondary hollow" onclick="">Ajouter les épisodes</button>
                                    <br>
                                    <button class="button secondary hollow" onclick="">Annuler</button>

                                </div>

                            </div>


                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>


</div>
