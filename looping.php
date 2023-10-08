<?php
    for($i=0; $i < 10; $i++) {
        echo $i . ". Saya Belajar Perulangan <br>";
    }

    for($i=0; $i < 10; $i++) {
        for($j=0; $j < 10; $j++) {
            echo "Ini perulangan yang ke ($i, $j)<br>";
        }
    }

    $i = 0;
    while ($i < 10) {
        echo $i.". Hai <br>";
        $i++;
    }
?>