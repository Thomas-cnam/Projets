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
            <h1> Projet : Caisse </h1>

            <div class="PresentationProjet5">
                <h1>Présentation</h1>
                <p>Un projet réalisé en JAVAFX en groupe durant la deuxième année de BTS SIO
                    <br>
                    En utilisant les outils : JAVAFX, Postgresql, scanette.</p>
            </div>

            <div class="ContexteProjet5">
                <h1>Contexte</h1>
                <p>M. LEDUC vous demande d’écrire un logiciel permettant de gérer les deux caisses
                    <br>
                    enregistreuses du magasin qui sont en réalité des PC tournant sous Linux Mint 21.1
                    <br>
                    équipés chacun d’une imprimante et d’un lecteur de code barre.</p>

            </div>

            <div class="ConditionProjet5">
                <h1>Conditions</h1>
                <p> Le logiciel doit permettre : </p>


                <p> - créer un « passage en caisse » qui va regrouper les articles achetés par le client
                    <br>
                    les articles sont ajoutés les uns à la suite des autres, la saisie des articles se fait

                    grâce un lecteur de code barre, cependant il est possible de rentrer les codes en
                    <br>
                    tapant leur numéro un code barre pouvant être illisible. </p>


                <p> - mettre en attente et reprendre un passage en caisse. </p>


                <p> - saisir le moyen de paiement (CB, chèque, espèce (dans ce cas, il faut préciser la
                    monnaie à rendre si le client ne donne pas la somme exacte)). </p>


                <p> - permettre de faire une remise sur le total de la facture (en pourcentage ou en
                    euros). </p>

                <p> - imprimer le ticket de caisse. </p>

                <p> - annuler un passage en caisse.</p>

                <p> - être affiché en plein écran (full screen). </p>

                <p> - pouvoir fonctionner indifféremment sur Windows ou Linux, vous utiliserez donc
                    Java. </p>

                <p> - être utilisable sans clavier physique (donc il faut un clavier virtuel pour saisir les
                    chiffres) car il doit être possible d’utiliser un écran tactile. </p>

                <p> - La base de données doit être adaptée, car il faut pouvoir garder une trace des achats faits
                    <br>
                    en caisses. Pour un passage en caisse, il faut mémoriser les articles achetés et leur
                    <br>
                    quantité, le moyen de paiement, la remise éventuelle, la date et l’heure </p>


            </div>

            <div class="UtilisationProjet5">
                <h1>Utilisation</h1>
                <p>Ici nous pouvons faire plusieurs actions sur l'application. </p>
                <div class="ImageCaisse">
                    <img src="ImageCaisse/Caisse.png" style="width:50%">
                </div>

                <br>
                <br>

                <div class="ImageClavier">
                    <h2>Ici nous pouvons entrer des numéros qui correspondent à un produit spécifique avec le clavier virtuel ou une scannette.</h2>
                    <img src="ImageCaisse/ClavierCaisse.png">
                </div>

                <div class="ImageChoix">
                    <h2>Ici nous pouvons choisir avec quel moyen de paiement nous souhaitons régler.</h2>
                    <img src="ImageCaisse/ChoixCaisse.png" style="width:50%">
                </div>

                <div class="ImageChoix">
                    <h2>Ici nous pouvons choisir avec quel moyen de paiement nous souhaitons régler.</h2>
                    <img src="ImageCaisse/ChoixCaisse.png" style="width:50%">
                    <br>
                    <h2>Ainsi que la remise que l'ont veut mettre.</h2>
                    <img src="ImageCaisse/RemiseCaisse.png" style="width:50%">
                </div>

                <div class="ImageChoix">
                    <h2>Voici le ticket de caisse qui est en pdf.</h2>
                    <img src="ImageCaisse/PdfTicketCaisse.png" style="width:50%">
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