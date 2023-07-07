<?php
    $marks=array(
        array(10,20,30,40,50,60),
        array(98,90,59,48,36),
        array(98,90,59,48,36)
    );




    for($i=0;$i<count($marks);$i++){
        for($j=0;$j<count($marks[$i]);$j++){
            echo $marks[$i][$j]."<br>";
        }
    }

    
?>