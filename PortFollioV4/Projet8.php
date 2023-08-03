<!DOCTYPE html>
<html>

<head>
    <title>Projet : QCM</title>
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
        <div class="DivProjet8Entier">
            <h1> Projet : QCM </h1>

            <div class="PresentationProjet8">
                <h1>Présentation</h1>
                <p>Un projet réalisé en PHP en groupe durant la première année de BTS SIO
                    <br>
                    En utilisant les outils : PHP, Postgresql, HTML, CSS, JavaScript.
                </p>
            </div>

            <div class="ContexteProjet8">
                <h1>Contexte</h1>
                <p>La société CAP Formation propose des formations informatiques à d'autres entreprises
                    <br>
                    clientes. Les formations sont réalisées soient dans les locaux de CAP Formation ou bien
                    <br>
                    dans les locaux des entreprises clientes.
                    <br>
                    <br>
                    CAP Formation souhaite disposer d’une application web qui lui permet de créer des QCM
                    <br>
                    (Questions à Choix Multiples). Ces QCM sont destinés à évaluer et à faire progresser les stagiaires.


                </p>



            </div>

            <div class="ConditionProjet8">
                <h1>Conditions</h1>
                <p> Le logiciel doit permettre : </p>
                <p>
                    Que le formateur puisse :
                    <br>
                    - créer des comptes pour les stagiaires.
                    <br>
                    - gérer (consulter, ajouter, modifier, supprimer) des QCM.
                    <br>
                    - visualiser les résultats des stagiaires aux QCM.
                </p>


                <p> Un QCM est constitué :
                    <br>
                    - D’un titre.
                    <br>
                    - D’une date.
                    <br>
                    - D’un ensemble de questions.
                    <br>

                </p>
                <p> Les questions sont caractérisées par :
                    <br>
                    - D'un numéro.
                    <br>
                    - D’un libellé.
                    <br>
                    - D’éventuellement une image servant à illustrer la question.
                    <br>
                    - D’un ensemble de réponses (avec au moins une bonne réponse possible).
                    <br>
                    - D’un nombre de points.
                    <br>
                </p>

            </div>

            <div class="UtilisationProjet8">
                <h1>Utilisation</h1>
                <p>Ici nous pouvons effectuer plusieurs actions en rapport avec les QCM.
                    <br>
                    Les QCM sont stockés dans la base de donnée.
                </p>
                <div class="ImageQCM">
                    <img src="ImageQCM/GestionQCM.png" style="width:50%">
                </div>

                <br>

                <p>Nous pouvons consulter les QCM créé.
                </p>
                <div class="ImageQCM">
                    <img src="ImageQCM/ConsultationQCM.png" style="width:50%">
                </div>

                <p>Nous pouvons aussi ajouter des QCM, les modifier et les supprimer.
                </p>
                <div class="ImageQCM">
                    <img src="ImageQCM/AjoutQCM.png" style="width:50%">
                    <br>
                    <br>
                    <img src="ImageQCM/AjoutQCM2.png" style="width:50%">
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