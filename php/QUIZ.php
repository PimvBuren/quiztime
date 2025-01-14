<?php
echo "hi";
// maak conectie data base
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=quizBestanden", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
// lees inloggegens en kijk of ze overeen komen 
// kijk of de vraag klopt
// geef op het scherm weer of de vraag klopt
// ga naar de volgende vraag
// geef punten voor goede antwoord
// zet ze op volgworden van meeste punten
// geef de 3 hoogste een plek

?>

