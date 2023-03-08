
<?php

    $host = "localhost";
    $user = "Kacper";
    $pass = "";
    $nazwa = "testy";

    $laczenie = mysqli_connect($host, $user, $pass, $nazwa); 

    $sql = "SELECT * FROM arkusze";
    $result = mysqli_query($laczenie, $sql);
?>
