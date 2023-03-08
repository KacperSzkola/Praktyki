<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $host = "localhost";
        $user = "Kacper";
        $pass = "";
        $nazwa = "testy";
    
        $laczenie = mysqli_connect($host, $user, $pass, $nazwa); 
    
        $sql = "SELECT * FROM arkusze";
        $result = mysqli_query($laczenie, $sql);

        while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    ?>
</body>
</html>