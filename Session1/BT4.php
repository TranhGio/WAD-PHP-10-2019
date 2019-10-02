<?php
function checkNumber(){
    for ($i=0; $i < 100; $i++) {
        echo "<br/>";
        if($i%2 == 0){
            if($i%6 == 0){
                echo "So " . $i . " chia het cho 6";
                continue;
            }
            echo "So " . $i . "  chia het cho 2";
            continue;
        }
        if($i%3 == 0){
            if($i%6 == 0){
                echo "So  " . $i . " chia het cho 6";
                continue;
            }
            echo "So  " . $i . "  chia het cho 3";
            continue;
        }
        echo "So  " . $i . "  khong chia het cho ca 2, 3, 6";
    }
}
checkNumber();
?>