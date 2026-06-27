<?php

function menu() {
    Afficher( "\n ==========Menu Principal==========\n");
    Afficher( "1. Créer Wallet \n");
    Afficher( "2. Faire un Dépôt \n");
    Afficher( "3. Faire un Retrait \n");
    Afficher( "4. Lire les Transactions \n");
    Afficher( "0. Quitter  \n");
}

do{
    menu();
    $choix = readline("Entrez votre choix : \n");


}while($choix != 0);

?>