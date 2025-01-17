<?php
// maak conectie data base
$servername = "localhost";
$username = "root";
$password = "";

// regel 8 tot en met 46 haal ik data uit de database en zet ik het onder elkaar in het scherm 
class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }
// dit maakt de tabel 
  function beginChildren() {
    echo "<tr>";
  }
// dit sluit de tabel
  function endChildren() {
    echo "</tr>" . "\n";
  }
}


try {
  $conn = new PDO("mysql:host=$servername;dbname=quizBestanden", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully <br>";
  
  // hier kan je kiezen wat je wil pakken uit de database
  $stmt = $conn->prepare(" SELECT * FROM `vragen`");
  $stmt->execute();
 // set the resulting array to associative
 
 $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $data = $stmt->fetchAll();
 $elements = [];

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;
echo "</table>";



// Initialiseer de score en index
if (!isset($_SESSION['score'])) {
  $_SESSION['score'] = 0;
}

if (!isset($_SESSION['index'])) {
  $_SESSION['index'] = 0; // Initialiseer de index bij de eerste keer
}

// Controleer of er een POST-verzoek is
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $index = $_SESSION['index']; // Haal de huidige index op
  $correctAnswer = $data[$index]['antwoorden']; // Stel het juiste antwoord in
  $userAnswer = $_POST['answer']; // Ontvang de gekozen waarde

  if ($userAnswer == $correctAnswer) {
      $_SESSION['score']++; // Verhoog de score met 1
      echo "<p class='correct'>Correct! Goed gedaan.</p>";
  } else {
      echo "<p class='incorrect'>Fout. Probeer het opnieuw.</p>";
  }

  // Verhoog de index met 1 voor de volgende vraag
  $_SESSION['index']++;
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

