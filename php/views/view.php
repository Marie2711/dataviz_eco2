<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf_8">
        <title>ECO</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
        <link href="https://fonts.googleapis.com/css2?family=Marvel&display=swap" rel="stylesheet">
    </head>
    <body>

        <!-- header -->

        <header>
            <h1>ECO</h1>
        </header>

        <!-- Main -->

        <main>
            <div class="structure_colonne">

                <div class="espacement_colonnes">

                <!-- Colonne gauche -->

                    <section class="colonne_gauche">

                        <!-- LA TERRE -->
                        <div class="terre_cercle_blanc">
                            <div class="terre_3d">
                                <svg></svg>
                                <script src="https://d3js.org/d3.v4.min.js"></script>
                                <script src="https://d3js.org/topojson.v1.min.js"></script>
                                <script src="js/globe.js"></script>
                            </div>

                            <div class="terre_content"></div>
                        </div>
                    </section>

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
                                    <p class="texte_jauge_haut"><img src="img/LOGO VIANDE.svg"></p>
                                    <input type="range" orient="vertical" min="0" max="100" step="10" class="slide_container_verticlal_1">
                                    <p class="texte_jauge_bas"><img src="img/LOGO LEGUMES.svg"></p>
                                </div>
            
                                <!--Population-->
            
                                <div class="naissance_ou_deces">
                                    <p class="texte_jauge_haut"><img src="img/LOGO POP HAUT.svg"></p>
                                    <div class="input_valeur_content">
                                        <input type="range" orient="vertical" min="0" max="4" step="1" list="valeur_jauge" class="slide_container_verticlal_2">
                                        <datalist id="valeur_jauge">
                                            <option value="0" label="N">
                                            <option value="1" label="3">
                                            <option value="1" label="2">
                                            <option value="2" label="1">
                                            <option value="3" label="0">
                                        </datalist>
                                    </div>
                                    <p class="texte_jauge_bas"><img src="img/LOGO POP BAS.svg"></p>
                                </div>
            
                                <!--CO2-->
            
                                <div class="e_fossile_ou_e_electrique">
                                    <p class="texte_jauge_haut"><img src="img/LOGO ENERGIE FOSSILE.svg"></p>
                                    <input type="range" orient="vertical" min="0" max="100" step="10" class="slide_container_verticlal_3">
                                    <p class="texte_jauge_bas"><img src="img/flash 1.svg"></p>
                                </div>
                            </div>
                        </div>

                        <!-- date fin du monde -->

                        <div class="emplacement_fin_du_monde">
                            <div id="date_fin_du_monde">
                                <h1 class="fin_du_monde_av_date"> Fin du monde : </h1>
                                <div class="texte_date_fin_du_monde"></div>
                            </div>
                        </div>

                        <!-- populations -->
                        
                        <div id="nombre_population">
                            <p class="texte_nombre_population">Population : <span id="worldpop"></span></p>
                        </div>

                        <!-- lien sur l'article -->

                        <div id="lien_article_div">
                            <a href="https://www.francetvinfo.fr/meteo/climat/dereglement-climatique-la-fin-du-monde-est-elle-vraiment-prevue-pour-2050_3488261.html" target="_blank" class="le_a">
                                <p class="lien_article">En savoir plus</p>
                            </a>
                        </div>
                    </section>
                </div>
            </div>
        </main>
        
        <!-- SCRIPT JS -->     
        <script src="js/popcounter.js"></script>
        <script src="js/jQuery.js"></script>
        <script src="js/main.js"></script>
    </body>