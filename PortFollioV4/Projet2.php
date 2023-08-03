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
        <div class="DivProjet2Entier">
            <h1> Projet : Hôtel </h1>

            <div class="PresentationProjet2">
                <h1>Présentation</h1>
                <p>Un projet réalisé en PHP en solo : le but est d'avoir une interface qui représente tout l'hôtel où
                    l'ont
                    peut voir tous les étages
                    et de pouvoir effectuer différentes actions qui permet le bon fonctionnement d'un hôtel </p>
                <p>Outils utilisés : PHP, Postgresql, HTML, CSS, JavaScript, Ajax, Pixi.js</p>
            </div>

            <div class="ContexteProjet2">
                <h1>Contexte</h1>
                <p>L’hôtel Roosevelt propose des chambres à ses clients. Vous pouvez voir l’agencement
                    approximatif de l’hôtel </p>
                <!-- à rajouter le dia  -->

                <p> Le directeur de l’hôtel souhaite disposer d’une application web qui permettra aux
                    réceptionnistes de gérer la location des chambres. Les chambres ont trois tailles :
                    chambre normale, grande chambre et suite </p>
            </div>

            <div class="ConditionProjet2">
                <h1>Conditions</h1>
                <p> Le logiciel doit permettre : </p>

                <p> - De visualiser les chambres sous la forme d’un plan qui
                    contiendra les différents éléments de l’hôtel </p>

                <p> - Les chambres louées pourront être
                    représentées en rouge et les chambres libres en vert </p>

                <p> - L’application doit permettre aux réceptionnistes d’enregistrer et de connaître les locations
                    de l’hôtel à une date donnée </p>

                <p> - ils doivent être
                    en mesure de les renseigner précisément et rapidement sur la nature des chambres :
                    taille de la chambre, étage, vue sur les châtaigniers, vue sur la piscine, vue sur le parc,
                    exposition à la rue (problème de bruits) </p>

            </div>

            <div class="UtilisationProjet2">
                <h1>Utilisation</h1>
                <p>Ici une image du projet, en haut nous avons la possibilités de choisir la date pour ainsi afficher les chambres disponibles dans l'hôtel
                   <br>
                   En bas les différents étages que l'ont peut afficher
                   <br>  
                </p>
                <div class="ImageHotel">
                    <img src="ImagesProjetHotel/ScreenProjetHotel.png">
                </div>

                <div class="ImageHotelEtage">
                    <p>Nous pouvons afficher les différents étages de l'hôtel.</p>
                    <img src="ImagesProjetHotel/HotelEtage.png" style="width:50%">
                    <br>
                    <br>
                    <img src="ImagesProjetHotel/HotelEtage2.png" style="width:50%" >
                </div>

                <br>
                <br>

                <div class="ImageHotel">
                    <img src="ImagesProjetHotel/ScreenProjetHotel.png" style="width:50%">
                </div>

                <br>
                <br>

                <div class="ImageHotelReservation">
                    <p>La possibilitée de faire une réservation</p>
                    <img src="ImagesProjetHotel/HotelReservation.png" style="width:50%">
                </div>

                <br>
                <br>

                <div class="ImageHotelSuppression">
                    <p>La possibilitée de faire une supression</p>
                    <img src="ImagesProjetHotel/HotelSuppression.png" style="width:50%">
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