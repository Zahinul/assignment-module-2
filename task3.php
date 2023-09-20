<?php
    $n1=0;
    $n2=1;
    $sum=0;
    for($i=0;$i<10;$i++){
        if($i<2){
            echo $i." ";
        }else{
            $sum=$n1+ $n2;
            $n1=$n2;
            $n2=$sum;
            if($sum<=100){
                echo $sum." ";
            }else{
                break;
            }
        }
    }

?>
