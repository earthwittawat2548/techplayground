<?php
    include_once('functions.php');

    $user = new DB_con();

    $vote = $_POST['vote'];


    if($vote == 1){
        $user->getscoreone();
    }
    if($vote == 2){
        $user->getscoretwo();
    }
    if($vote == 3){
        $user->getscorethree();
    }

?>