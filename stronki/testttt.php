<!DOCTYPE html>
<html>
<head>
<title>Egzami.pl</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<style>
h1 {
  color: blue;
  font-family: verdana;
  font-size: 300%;
}
p {
  color: blue;
  font-family: courier;
  font-size: 100%;
}
</style>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="main.html">Egzami.pl</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="https://arkusze.pl/technik-informatyk-egzamin-zawodowy/">Arkusze</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="testttt.php">Wyniki</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<center>
<h1>WYNIKI EGZAMINÓW: </h1>
<?php
$servername = "localhost";
$username = "Kacper";
$password = "";
$dbname = "testy";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Połączenie się wyjebało, nara." . mysqli_connect_error());
}

$sql = "SELECT * FROM arkusze";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "Seria: " . $row["seria"]. " - Nazwa: " . $row["nazwa"]. " - Czy pan zdał?: " . $row["zdane"]. "<br>";
    }
} else {
    echo "Zdaj swój pierwszy egzamin!";
}

mysqli_close($conn);
?>
<p><a href="https://arkusze.pl/technik-informatyk-egzamin-zawodowy/" target="_blank">Kliknij aby przejść do egzaminu!</a></p>

<footer>
  <p>Twórca: Kacper Piotrowski</p>
  <p><a href="https://www.facebook.com/profile.php?id=100007271173610" target="_blank">Egzami.pl</a></p>
</footer>
</body>
</html>