<!DOCTYPE html>
<html>

<head>
    <title>Projet :</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css2.css">
    <link rel="stylesheet" type="text/css" href="cssProjet.css">
    <script src="JavaScript.js"></script>


</head>

<body>

    <header class="Header">
        <div class="enTete">

            <a href="index.html"> Présentation</a>
            <!--à rajouter comme sur le screnn les qualification sur la même page-->
            <a href="index.html#competence"> Compétences</a>
            <a href="index2.html"> Projet en Stage</a>
            <a href="index3.html"> Projet en Cours</a>
            <a href="Veille.html"> Veille</a>
            <a href="contact.html"> Contact</a>

        </div>
    </header>






    <div class="content">
        <div class="DivProjet5Entier">
            <h1> Projet : Velib </h1>

            <div class="PresentationProjet5">
                <h1>Présentation</h1>
                <p>Un projet réalisé en JAVAFX en groupe durant la deuxième année de BTS SIO
                    <br>
                    En utilisant les outils : JAVAFX, Postgresql, scanette.</p>
            </div>

            <div class="ContexteProjet5">
                <h1>Contexte</h1>
                <p>Vous devez créer une application web qui permet de présenter des informations
                    <br>
                    disponibles sur les stations Vélib
                </p>



            </div>

            <div class="ConditionProjet5">
                <h1>Conditions</h1>
                <p> Le logiciel doit permettre : </p>
                <p>
                    - Decueillir auprès de l’utilisateur les numéros des stations Vélib'
                    <br>
                    que l’on souhaite suivre. Puis, les informations concernant les stations suivies seront
                    <br>
                    affichées
                </p>


                <p> - Pour chaque station, on devra donc voir :
                    <br>
                    - son numéro.
                    <br>
                    - son adresse.
                    <br>
                    - si elle permet de louer des vélos.
                    <br>
                    - si elle peut recevoir des vélos
                    <br>
                    - le nombre de vélos disponibles (en distinguant vélos mécaniques et vélos
                    électriques)
                    <br>
                    - le nombre de bornettes libres


                </p>

            </div>

            <div class="UtilisationProjet5">
                <h1>Utilisation</h1>
                <p>Ici nous pouvons effectuer plusieurs actions.
                   <br>
                   Les marqueurs sont récupérés avec un curl lors de la connection au site et cela enregistre celles-ci dans la base de donnée.
                   <br>
                   Ainsi l'affichage des marqueurs du plan se font depuis la base.
                </p>
                <div class="ImageVelib">
                    <img src="ImageVelib/Velib.png" style="width:50%">
                </div>

                <br>
                <br>

                <p>En cliquant sur un marqueur un Popeup s'affiche avec des données spécifiques en rapport avec la station. </p>
                <div class="ImageVelib">
                    <img src="ImageVelib/VelibPopPup.png" style="width:50%">
                </div>

                <p>Le bouton favori permet d'ajouter le marqueur au tableau des favoris de l'utilisateur. </p>
                <div class="ImageVelib">
                    <img src="ImageVelib/VelibTableauFavori.png" style="width:50%">
                </div>

                <p>Le bouton favori du tableau permet d'afficher uniquement les favoris de l'utilisateur sur le plan. </p>
                <div class="ImageVelib">
                    <img src="ImageVelib/VelibEntier.png" style="width:50%">
                </div>

                <p>Le bouton map supprime les marqueurs favoris de l'utilisateur sur le plan et affiche tous les marqueurs. </p>
                <div class="ImageVelib">
                    <img src="ImageVelib/VelibPlan.png" style="width:50%">
                </div>


            </div>

            <br>


        </div>


    </div>

    <button class="BoutonRetour" onclick="window.location.href = 'index3.html'">Retour</button>



</body>

<footer class="footer">
    <p>Copyright 2023 © SOARES Thomas</p>
</footer>

</html>