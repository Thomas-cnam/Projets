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
        <div class="DivProjet6Entier">
            <h1> Projet : Crédit </h1>

            <div class="PresentationProjet6">
                <h1>Présentation</h1>
                <p>Un projet réalisé en PHP en groupe durant la première année de BTS SIO
                    <br>
                    En utilisant les outils : PHP, Postgresql, HTML, CSS, JavaScript, Ajax.

                </p>
            </div>

            <div class="ContexteProjet6">
                <h1>Contexte</h1>
                <p>Nous avons besoin de créer une application qui permettra de faire un tableau d'amortissement. </p>

            </div>

            <div class="ConditionProjet6">
                <h1>Conditions</h1>
                <p> Le logiciel doit permettre : </p>


                <p> - De calculer le capital restant dû avant l'échéance.
                    <br>
                    - De calculer l'intérêt.
                    <br>
                    - De calculer l'amortissement.
                    <br>
                    - De calculer le montant de la mensualité. 
                    <br>
                    - Permettre de choisir un montant, une durée, et un taux d'intérêt.


                <p> 



            </div>

            <div class="UtilisationProjet6">
                <h1>Utilisation</h1>
                <p>Ici nous pouvons choisir les montants que nous souhaitons </p>
                <div class="ImageTpCredit">
                    <img src="ImageTPCredit/Exemple.PNG">
                </div>

                <br>
                <br>

                <div class="ImageDia">
                    <p>Cela permet ainsi de créer un tableau d'amortissement</p>
                    <img src="ImageTPCredit/TableauAmortissage.PNG">
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