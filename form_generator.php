<?php
    $nb = $_POST["number"];
    $question = $_POST["question"];

    for ($i = 0; $i < $nb; $i++){
        echo $question;
    }
?>