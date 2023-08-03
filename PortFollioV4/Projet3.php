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
        <div class="DivProjet3Entier">
            <h1> Projet : Générateur </h1>

            <div class="PresentationProjet3">
                <h1>Présentation</h1>
                <p>Un projet réalisé en JAVAFX en groupe durant la deuxième année de BTS SIO
                    <br>
                    En utilisant les outils : JAVAFX, Postgresql.</p>
            </div>

            <div class="ContexteProjet3">
                <h1>Contexte</h1>
                <p>M. PETIT, le directeur technique de Reims Outillage, souhaite disposer d’un jeu d’essai
                    <br>
                    réaliste pour la base de données pour pouvoir tester les applications dans des conditions
                    <br>
                    proches du réel.</p>


            </div>

            <div class="ConditionProjet3">
                <h1>Conditions</h1>
                <p> Le logiciel doit permettre de spéficifier :
                    <br>
                    - le nombre maximal de commandes par client.
                    <br>
                    - le nombre de clients.
                    <br>
                    - la date de début.
                    <br>
                    - la date de fin.
                    <br>
                    - le nombre maximal de produits par commande.
                    <br>
                    - le nombre de produits.
                    <br>
                    - le taux de parrainage.
                    <br>
                    - le nombre maximal d’adresses par client.
                    <br>
                </p>
            </div>

            <div class="UtilisationProjet3">
                <h1>Utilisation</h1>
                <p>Nous pouvons insérer les données que nous souhaitons pour qu'elles soit insérées dans la base de
                    donnée.
                    <br>
                    Ici les données seront insérées dans la base de données pour créer un jeux d'essai. </p>
                <div class="ImageGenerateur">
                    <img src="ImageProjetGenerateur/generateur.png">
                </div>
            </div>


        </div>


    </div>

    <button class="BoutonRetour" onclick="window.location.href = 'index3.html'">Retour</button>



</body>

<footer class="footer">
    <p>Copyright 2023 © SOARES Thomas</p>
</footer>

</html>