<?php
    $tab = $_POST["cxtb1"];
    $n1 = 0;

    while($n1<= 10){
        echo $tab."*".$n1."=".$n1*$tab."<br>";
        $n1++;
    }
?>