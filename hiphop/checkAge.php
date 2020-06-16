<?php
    try{
        if (isset($_POST['age']))
        setcookie("ageCheck", "true", time()+3600, '/');
        else throw new Exception('zdarov, oshibka cookie');
}
catch (Exception $e){
        echo $e -> getMessage();
}


if(!$_COOKIE["ageCheck"])
    header("location: home/index.html");
    else header("location: welcome.php");
?>
