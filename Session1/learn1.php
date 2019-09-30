<?php
 echo "Hello world"
?>
<?php
    //Bien trong PHP
    $myClass = "WAD_PHP\n";
    echo $myClass;

    $lopToi = "WAD_PHP2\n";
    echo $lopToi;

    $so1 = 5;
    $so2 = 10;
    echo "<br/>";
    echo $so1 + $so2;
    //Ham trong php
    function myFunction(){
        echo "Test function";
    }
    echo "</br>";
    myFunction();

    function myFunction1(){
        $a = 10;
        $b = 8;
        return $a + $b;
    }
    echo myFunction1();
    echo "<br/>";
    function myFunction2($a = 5, $b =12){
        return $a + $b;
    }
    echo "<br/>";
    echo myFunction2(10,57);
?>