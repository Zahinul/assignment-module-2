<?php
//Looping with Increment using a Function
function evenForLoop($start,$end,$step){
    if($start%2!=0){
        $start+=1;
    }
    if($end%2!=0){
        $end-=1;
    }
    
    for($start;$start<=$end;$start+=$step){
        if($start!=$end){
            echo $start.", ";
        }else{
            echo $end.".";
        }
    }
    echo PHP_EOL;

}
function evenWhileLoop($start,$end,$step){
    if($start%2!=0){
        $start+=1;
    }
    if($end%2!=0){
        $end-=1;
    }
    
    while($start<=$end){
        if($start!=$end){
            echo $start.", ";
        }else{
            echo $end.".";
        }
        $start+=$step;
    }
    echo PHP_EOL;

}

function evenDoWhileLoop($start,$end,$step){
    if($start%2!=0){
        $start+=1;
    }
    if($end%2!=0){
        $end-=1;
    }
    
    do{
        if($start!=$end){
            echo $start.", ";
        }else{
            echo $end.".";
        }
        $start+=$step;
    }while($start<=$end);
    echo PHP_EOL;

}

evenForLoop(1,20,2);
evenWhileLoop(1,20,2);
evenDoWhileLoop(1,20,2);
