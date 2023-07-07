<?php
    $marks=array(
        array(10,20,30,40,50,60),
        array(98,90,59,48,36,89)
    );

    for($i=0;$i<2;$i++){
        for($j=0;$j<6;$j++){
            echo $marks[$i][$j]."<br>";
        }
    }

    
?>