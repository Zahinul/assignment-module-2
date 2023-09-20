<?php
    //Loop to print 1 to 50 without multiples of 5
    for($i=1;$i<=50;$i++){
        if($i%5!=0){
            echo $i." ";
        }else{
            continue;
        }
    }

?>