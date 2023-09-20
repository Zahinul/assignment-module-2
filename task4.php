<?php
    function fibonacci($limit){
        $fibo=array();
        for($i=0;$i<$limit;$i++){
            if($i<2){
                array_push($fibo,$i);
            }else{
                array_push($fibo,($fibo[$i-2]+$fibo[$i-1]));
            }
        }
        for($j=0;$j<$limit;$j++){
                echo $fibo[$j]." ";
            }
    }
    fibonacci(15);
?>