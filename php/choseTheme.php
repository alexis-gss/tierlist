<?php
    if(isset($_POST['theme']) && $_POST['theme'] === "mcu") {
        $path = 'img/mcu/';
        $title = 'Marvel Cinematic Universe';
    }
    else if(isset($_POST['theme']) && $_POST['theme'] === "dcu") {
        $path = 'img/dcu/';
        $title = 'DC Universe';
    }
    else if(isset($_POST['theme']) && $_POST['theme'] === "oparcs") {
        $path = 'img/oparcs/';
        $title = 'One Piece Arcs';
    }
    else if(isset($_POST['theme']) && $_POST['theme'] === "pkm") {
        $path = 'img/pkm/';
        $title = 'Pokémon games';
    }
    else {
        $path = 'img/mcu/';
        $title = 'Marvel Cinematic Universe';
    }
?>