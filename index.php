<?php
echo '<table style="border: 1px solid #000;">';
for ($i = 0; $i < 8; $i++) { //boucle pour chaque ligne
    echo '<tr>';
    for ($j = 0; $j < 8; $j++) { //boucle pour chaque colonne
        $color = ($i + $j) % 2 == 0 ? 'white' : 'black'; //déterminer la couleur de la case

        echo '<td style="background-color: ' . $color . '; height: 75px; width: 75px;">'; //affiche de la case avec la hauteur/largeur de 75px
        if ($i == 0 || $i == 7) {
            $pion = ($i == 0) ? 'white' : 'black'; //pion blanc ou noir
            $textColor = ($color == 'black') ? 'white' : 'black'; //couleur des textes par rapport a la case
            $zone = ($pion == 'white') ? 'NOIR' : 'BLANC'; //zone du joueur

            $nom = ["tour", "cavalier", "fou", "reine", "roi", "fou", "cavalier", "tour"][$j]; //nom des pions

            echo '<div style="color:' . $textColor . '; text-align: center;">' . $nom . ' ' . $zone . '</div>';
        } elseif ($i == 1 || $i == 6) {
            $pion = ($i == 1) ? 'white' : 'black'; //pion blanc ou noir
            $textColor = ($color == 'black') ? 'white' : 'black'; //couleur des textes par rapport à la case
            $zone = ($pion == 'white') ? 'NOIR' : 'BLANC'; //zone du joueur

            echo '<div style="color: ' . $textColor . '; text-align: center;">pion ' . $zone . '</div>';
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
