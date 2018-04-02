<?php
    $riderInfo=array();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $riderInfo["Number of People:"] = $_POST['passNum'];
        $riderInfo["Price per Person:"] = $_POST['price'];
        $riderInfo["To or From UVA:"] = $_POST['ToFro'];
        $riderInfo["City:"] = $_POST['city'];
        $riderInfo["State:"] = $_POST['state'];
        $riderInfo["Notes:"] = $_POST['comments'];
        $riderInfo["Leaving Day:"] = $_POST['date'];
        $riderInfo["Time:"] = $_POST['time'];
        echo "<b>Is this correct?</b> <br>";
        foreach($riderInfo as $key=>$value){
            echo $key . " " . "<b>" . $value . "</b>" . '<br>';
        }
        echo "<input type='button' onclick=\"location.href='home.php';\" value='Yes' />";
        echo "<input type='button' onclick=\"location.href='javascript:history.back()';\" value='No' />";

    }
    
?>