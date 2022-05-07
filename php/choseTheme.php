<?php
    if(isset($_POST['theme']) && $_POST['theme'] === "mcu") {
        $path = 'img/mcu/';
        $title = 'Marvel Cinematic Universe';
        $logo = 'img/others/mcu.png';
    }
    else if(isset($_POST['theme']) && $_POST['theme'] === "dcu") {
        $path = 'img/dcu/';
        $title = 'DC Universe';
        $logo = 'img/others/dcu.png';
    }
    else if(isset($_POST['theme']) && $_POST['theme'] === "oparcs") {
        $path = 'img/oparcs/';
        $title = 'One Piece Arcs';
        $logo = 'img/others/oparcs.png';
    }
    else if(isset($_POST['theme']) && $_POST['theme'] === "pkm") {
        $path = 'img/pkm/';
        $title = 'Pokémon games';
        $logo = 'img/others/pkm.png';
    }
    else {
        $path = 'img/mcu/';
        $title = 'Marvel Cinematic Universe';
        $logo = 'img/others/mcu.png';
    }
?>