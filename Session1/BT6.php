<?php
    function BuyCandy($Money){
        $CandyShell=0;
        $Candy=$Money/200;
        $CandyShell = $Candy;
        while(true){
            if($CandyShell>=2){
                $CandyTemp = $Candy;
                $Candy += $CandyShell/2;
                
                $CandyShell -= $CandyShell;
                $CandyShell += $CandyTemp - $Candy;
            } else{
                break;
            }
        }
        return $Candy;
        
    }
    echo "" . BuyCandy(2000);
?>