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
// wachtwoord aanmaken en mail krijgen

// select data in data base
    // vragen uit de datatbase halen
    // vragen maken

    // lees inloggegens en kijk of ze overeen komen 
  //als het wel zo is komt er te staan ingelod
  // als het niet goed is komt er te staan niet geldig wachtwoord of username 

// als je bent ingelogd als admin ga naar admin.php


  // kijk of het antwoord goed is 
    // als het goed is ga naar de volgende vraag 
    // laat het op het scherm zien dat het goed is
      // geef punten als het goed is
        // tel de punten bij elkaar op
        // toon hoeveel punten je hebt
        // ga dan naar de volgende vraag
    // als het fout is komt er te staan fout en ga dan door naar volgende vraag
    // laat het op het scherm zien dat het fout is
      // en geef geen punten
      // tel de punten bij elkaar op
        // toon hoeveel punten je hebt
          // ga dan naar de volgende vraag
?>

