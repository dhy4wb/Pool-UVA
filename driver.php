<?php
    $driverInfo=array();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $driverInfo["Number of People:"] = $_POST['passNum'];
        $driverInfo["Price per Person:"] = $_POST['price'];
        $driverInfo["To or From UVA:"] = $_POST['ToFro'];
        $driverInfo["City:"] = $_POST['city'];
        $driverInfo["State:"] = $_POST['state'];
        $driverInfo["Notes:"] = $_POST['comments'];
        $driverInfo["Leaving Day:"] = $_POST['date'];
        $driverInfo["Time:"] = $_POST['time'];
        echo "<b>Is this correct?</b> <br>";
        foreach($driverInfo as $key=>$value){
            echo $key . " " . "<b>" . $value . "</b>" . '<br>';
        }
        echo "<input type='button' onclick=\"location.href='home.php';\" value='Yes' />";
        echo "<input type='button' onclick=\"location.href='javascript:history.back()';\" value='No' />";

    }
    
?>