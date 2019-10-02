<?php
function CaculateMoney($candyNumbers){
    $Keo = 0;
    $EURO = 0;
    $USD = 0;
    while($Keo<=$candyNumbers){
        if($EURO>=2){
            $EURO+=2;
            $USD-=3;
        } else {
            $USD+=5;
            $EURO-=3;
        }
        $Keo++;
    }
    return $USD;
}
echo CaculateMoney(50);
?>