<?php
    function BuyCandy($Money){
        $candy = $Money/200;
        $candyShell = $candy;
        while(true){
            if($candyShell%2==0){
                $candy+=$candyShell/2;
                $candyShell = $candyShell/2;
            } else{
                $candy+=($candyShell-1)/2;
                $candyShell = ($candyShell-1)/2 +1;
            }
            if($candyShell<=1){
                break;
            }
        }
        return $candy;
    }
    echo "" . BuyCandy(2000);
?>