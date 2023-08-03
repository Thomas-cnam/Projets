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
        <div class="DivProjet4Entier">
            <h1> Projet : Planing </h1>

            <div class="PresentationProjet4">
                <h1>Présentation</h1>
                <p>Un projet réalisé en PHP en groupe durant la première année de BTS SIO
                    En utilisant les outils : PHP, Postgresql, HTML, CSS, JavaScript, Ajax.</p>
            </div>

            <div class="ContexteProjet4">
                <h1>Contexte</h1>
                <p>Un cabinet médical veut disposer d’une application qui lui permet de visualiser des
                    rendez-vous pris par ses patients.</p>
                <!-- à rajouter le dia  -->

            </div>

            <div class="ConditionProjet4">
                <h1>Conditions</h1>
                <p> Le logiciel doit : </p>

                <p> - L’application doit être une application web. Pour obtenir le planning des rendez-vous,
                    l’utilisateur doit saisir une date de début et une date de fin. </p>

                <p> - Les informations seront affichées sous la forme d’un tableau avec en ligne les créneaux
                    horaires et en colonnes les dates. </p>

                <p> - Les rendez-vous sont pris à n’importe quelle date sans se préoccuper des week-ends et
                    des jours fériés. Les rendez-vous durent une heure. Le cabinet ouvre à 9h et ferme à 18h. </p>

                <p> - Les informations mémorisées sur les patients sont : leur nom, leur prénom, leur date de
                    naissance, leur numéro de téléphone, leur adresse, leur ville. </p>

                <p> - La technologie utilisée doit être AJAX et les informations échangées entre le serveur et le
                    client doivent être au format JSON. </p>


            </div>

            <div class="UtilisationProjet4">
                <h1>Utilisation</h1>
                <p>Ici nous pouvons selectionner une date pour afficher le planning de la semaine, pour voir si les
                    créneaux sont libres ou non. </p>
                <div class="ImagePlanning">
                    <img src="ImageProjetPlanning/Planning.PNG">
                </div>

                <br>
                <br>

                <div class="ImageDia">
                    <img src="ImageProjetPlanning/Dia.PNG">
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