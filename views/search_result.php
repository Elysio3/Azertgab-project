<?php
//à enlever

$search = "mot clé"
?>

<div class="" style="margin-top: 10px">

    <div class="columns">

        <div class="medium-12 column text-center">
            <div class="grid-container">
                <div class="grid-x">
                    <div class="cell small-8 large-offset-2 text-center">
                        <!-- titre -->
                        <h3><b>Voir les séries avec "<?= $search ?>"</b></h3>
                    </div>
                </div>



                    <div class="grid-x">
                        <div class="cell small-4 large-offset-4">
                            <iframe id="search_result_iframe"
                                    title="resultat de la recherche"
                                    width="500"
                                    height="800"
                                    src="views/list_search_result.php"> <!-- passer les paramètres de recherche ici ? -->
                            </iframe>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
