<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ECO2</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
        <link href="https://fonts.googleapis.com/css2?family=Marvel&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, maximum-scale=1">
    </head>
    <body>

        <!-- header -->

        <header>
            <p id="title">ECO2</p>
        </header>

        <!-- Main -->

        <main>

            <!-- Les textes -->

                <h1>Pour quand la fin du monde ?</h1>

                <p id="le_texte_informatif">
                    D'après une grande étude australienne, la fin du monde est prévue en <span id="mini_date">2050</span>
                    si rien est fait pour stopper le réchauffement de la Terre. Si on réagit maintenant, 
                    peut on stopper le réchauffement ? Nous vous proposons 3 solutions pour freiner ce qui à été 
                    initié. (<img src="img/LOGO_LEGUMES.svg" class="petits_logo"> passer à un régime végétarien, 
                    <img src="img/LOGO_POP_BAS.svg" class="petits_logo"> faire un contrôle des naissances, 
                    <img src="img/flash1.svg" class="petits_logo"> utiliser les énérgies renouvelables.)
                </p>

                <h2>Combien d'années pensez-vous gagner ?</h2>

            <div class="structure_colonne">

                <div class="espacement_colonnes">

                <!-- Colonne gauche -->


                    <!--Colonne droite-->

                    <section class="colonne_droite">
                        <div class="div_texte_consigne">
                            <p class="texte_consigne_curseurs">Faites bouger les curseurs et voyez votre <strong>impact</strong></p>
                        </div>

                        <!--Les sliders-->

                        <div class="emplacement_sliders">
                            <div id="les_sliders_verticaux">

                                <!--Methane-->
            
                                <div class="viande_ou_vege">
                                    <p class="texte_jauge_haut"><img src="img/LOGO_VIANDE.svg"></p>
                                    <input type="range" orient="vertical" min="0" max="100" step="10" class="slide_container_verticlal_1">
                                    <p class="texte_jauge_bas"><img src="img/LOGO_LEGUMES.svg"></p>
                                </div>
            
                                <!--Population-->
            
                                <div class="naissance_ou_deces">
                                    <p class="texte_jauge_haut"><img src="img/LOGO_POP_HAUT.svg"></p>
                                    <div class="input_valeur_content">
                                        <input type="range" orient="vertical" min="0" max="4" step="1" list="valeur_jauge" class="slide_container_verticlal_2">
                                        <datalist id="valeur_jauge">
                                            <option value="0">N
                                            <option value="1">3
                                            <option value="1">2
                                            <option value="2">1
                                            <option value="3">0
                                        </datalist>
                                    </div>
                                    <p class="texte_jauge_bas"><img src="img/LOGO_POP_BAS.svg"></p>
                                </div>
            
                                <!--CO2-->
            
                                <div class="e_fossile_ou_e_electrique">
                                    <p class="texte_jauge_haut"><img src="img/LOGO_ENERGIE_FOSSILE.svg"></p>
                                    <input type="range" orient="vertical" min="0" max="100" step="10" class="slide_container_verticlal_3">
                                    <p class="texte_jauge_bas"><img src="img/flash1.svg"></p>
                                </div>
                            </div>
                        </div>

                        <!-- date fin du monde -->

                        <div class="emplacement_fin_du_monde">
                            <div id="date_fin_du_monde">
                                <p class="fin_du_monde_av_date"> Fin du monde : </p>
                                <div class="texte_date_fin_du_monde">2064</div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            

            <!-- LA TERRE -->
            <div class="terre_3d">
                <svg viewbox="0 0 1000 500"></svg>
                <script src="https://d3js.org/d3.v4.min.js"></script>
                <script src="https://d3js.org/topojson.v1.min.js"></script>
                <script src="js/globe.js"></script>
            </div>
            
            <!-- POPULATION MONDIALE -->
            <div id="lien_article_div">
                <p class="texte_nombre_population">Population mondiale: <span id="worldpop"></span></p>
            </div>

            <!-- Pays -->
            <div id="lien_article_div">
                <p class="texte_nombre_population"><span id="texte_pays"><em>Cliquez sur un pays et voyez ce qui se passe</em></span></p>
            </div>
        </main>
        
        <!-- SCRIPT JS -->     
        <script src="js/popcounter.js"></script>
        <script src="js/jQuery.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>