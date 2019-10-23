<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php $isSubmitted = isset($_POST['cashing']);
if ($isSubmitted) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $birthday = $_POST['birthday'];
    $firstday = $_POST['firstday'];
    $numberofelectricinfirstday = $_POST['numberofelectricinfirstday'];
    $lastday = $_POST['lastday'];
    $numberofelectricinlastday = $_POST['numberofelectricinlastday'];
    $count = $numberofelectricinlastday - $numberofelectricinfirstday;
    caculate($count);
}
function caculate($count)
{
    $money = 0;
    if ($count <= 100) {
        $money = $count * 1500;
    } else if ($count <= 200) {
        $money = 100 * 1500  + ($count - 100) * 2100;
    } else {
        $money = 100 * 1500 + 100 * 2100 + ($count - 200) * 3500;
    }
    echo "Tien dien la : $money";
}
?>

<body>
    <form action="Form.php" name="electricityform" method="POST">
        <h2>Record of electricity charge</h2>
        <p>
            Name:
            <input type="text" name="name" value="<?php echo (isset($name) ? $name : "") ?>" />
            <?php
            if ($isSubmitted && !$_POST['name']) {
                echo "This field is required";
            } else {
                "";
            }
            ?>

        </p>
        <p>
            Address:
            <select name="address">
            <option value="pleasechooseyouraddress" selected>Please choose your address</option>
                <option value="quangnam">Quang Nam</option>
                <option value="danang">Da Nang</option>
                <option value="quangngai">Quang Ngai</option>
                <option value="thuathienhue">Thua Thien Hue</option>
            </select>
            <?php
            if ($isSubmitted && !$_POST['address']) {
                echo "This field is required";
            } else {
                "";
            }
            ?>
        </p>
        <!-- <p>
            Gender
            <input type="radio" name="gender" value="male"> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other<br>
            <?php
            if ($isSubmitted && !$_POST['gender']) {
                echo "This field is required";
            } else {
                "";
            }
            ?>

        </p> -->
        <p>
            Birthday:
            <input type="date" name="birthday" value="<?php echo (isset($birthday) ? $birthday : "") ?>" />
            <?php
            if ($isSubmitted && !$_POST['birthday']) {
                echo "This field is required";
            } else {
                "";
            }
            ?>

        </p>
        <p>
            First day:
            <input type="date" name="firstday" value="<?php echo (isset($firstday) ? $firstday : "") ?>" />
            <?php
            if ($isSubmitted && !$_POST['firstday']) {
                echo "This field is required";
            } else {
                "";
            }
            ?>

        </p>
        <p>
            Numbers of Electric in first day:
            <input type="number" name="numberofelectricinfirstday" min="1" value="<?php echo (isset($numberofelectricinfirstday) ? $numberofelectricinfirstday : "") ?>" />
            <?php
            if ($isSubmitted && !$_POST['numberofelectricinfirstday']) {
                echo "This field is required";
            } else {
                "";
            }
            ?>

        </p>
        <p>
            Last day:
            <input type="date" name="lastday" value="<?php echo (isset($lastday) ? $lastday : "") ?>" />
            <?php
            if ($isSubmitted) {
                if (!$_POST['lastday']) {
                    echo "This field is required";
                }
                if ($_POST['firstday'] > $_POST['lastday']) {
                    echo "Number of electric in lastday must better than number of electric in firstday";
                }
            }
            ?>

        </p>
        <p>
            Numbers of Electric in last day:
            <input type="number" name="numberofelectricinlastday" min="1" value="<?php echo (isset($numberofelectricinlastday) ? $numberofelectricinlastday : "") ?>" />
            <?php

            if ($isSubmitted) {
                if (!$_POST['numberofelectricinlastday']) {
                    echo "This field is required";
                }
                if ($_POST['numberofelectricinlastday'] < $_POST['numberofelectricinfirstday']) {
                    echo "Number of electric in lastday must better than number of electric in firstday";
                }
            }
            ?>
        </p>
        <input type="submit" name="cashing" value="Submit" />
    </form>
</body>

</html>