<?php
    echo "Bai 5 <br/>";
    function transBooks(){
        $triple = 3;
        $BinhBooksNumber = 27;
        $MinhBookNumber = $BinhBooksNumber / $triple;
        $i=0;
        while($BinhBooksNumber / $MinhBookNumber != 2){
            $BinhBooksNumber--;
            $MinhBookNumber++;
            $i++;
        }
        return $i;
    }
    echo "So sach da chuyen la " . transBooks();
?>