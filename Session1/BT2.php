<?php
    function checkWeekdays($weekDay){
        switch ($weekDay){
            case 2:
                echo "Thu 2";
            break;
            case 3:
                echo "Thu 3";
            break;
            case 4:
                echo "Thu 4";
            break;
            case 5:
                echo "Thu 5";
            break;
            case 6:
                echo "Thu 6";
            break;
            case 7:
                echo "Thu 7";
            break;
            case 8:
                echo "Chu nhat";
            break;
            default:
                echo "Khong phai la ngay trong tuan";
                break;
    }
}
    checkWeekdays(4);
?>