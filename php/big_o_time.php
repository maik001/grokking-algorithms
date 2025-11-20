<?php

// O(n)
// function drawGrid() {
//     for($i = 1; $i <= 16; $i++) {
//         echo "Drawing grid ". $i . "... \n";
//     }
// }

// O(log n)
function drawGrid() {
    for($i = 1; $i <= 16; $i > 1 ? $i*=$i : $i++) {
        echo "Drawing grid ". $i . "... \n";
    }
}

drawGrid();

?>