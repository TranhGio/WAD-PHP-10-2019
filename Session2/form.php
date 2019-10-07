<?php
    if(isset($_POST['register'])){
        if($_POST['username']!="" && $_POST['useremail']!="" && $_POST['userpassword']!=""){
            echo $_POST['username'];
            echo "</br>";
            echo $_POST['useremail'];
            echo "</br>";
            echo $_POST['userpassword'];
        }
        
    }
?>

<h1> Form Example </h1>

<form name="registerForm" action="form.php" method="POST">
    <p> Name:
        <input type="text" name="username">
        <?php
        if(isset($_POST['register'])){
            if($_POST['username']==""){
                echo "<span style='color:red'>User Name require!!!</span>";
            }
        }
        ?>
    </p>
    <p> Email:
        <input type="text" name="useremail">
        <?php
        if(isset($_POST['register'])){
            if(strlen($_POST['useremail'])==0){
                echo "<span style='color:red'>Email require!!!</span>";
            }
        }
        ?>
    </p>
    <p> Password:
        <input type="password" name="userpassword">
        <?php
        if(isset($_POST['register'])){
            if($_POST['userpassword']==""){
                echo "<span style='color:red'>Password require!!!</span>";
            }
        }
        ?>
    </p>
    
    <p>
        <input type="submit" name="register" value="Register">
    </p>
</form>