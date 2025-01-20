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


// Start de sessie
session_start();

// Controleer of de score of index moet worden gereset
if (isset($_POST['reset'])) {
    $_SESSION['score'] = 0;
    $_SESSION['index'] = 0;
}

// Initialiseer de score en index als deze niet bestaan
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}
if (!isset($_SESSION['index'])) {
    $_SESSION['index'] = 0;
}

$index = $_SESSION['index']; // Haal de huidige index op uit de sessie

// Controleer of er een POST-verzoek is verzonden met een antwoord
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['answer'])) {
    $correctAnswer = $data[$index]['antwoorden']; // Het juiste antwoord voor de huidige vraag
    $userAnswer = $_POST['answer']; // Het antwoord van de gebruiker

    if ($userAnswer == $correctAnswer) {
        $_SESSION['score']++; // Verhoog de score
        echo "<p class='correct'>Correct! Goed gedaan.</p>";
    } else {
        echo "<p class='incorrect'>Fout. Probeer het opnieuw.</p>";
    }

    // Verhoog de index na de beoordeling van het antwoord
    $_SESSION['index']++;
}

// Controleer of de quiz voorbij is
if ($index >= count($data)) {
    echo "<p>Je hebt de quiz voltooid! Je score is: " . $_SESSION['score'] . "</p>";
    // Reset de quiz of geef de optie om opnieuw te beginnen
    $_SESSION['index'] = 0;
    $_SESSION['score'] = 0;
    exit;
}

// Toon de huidige score
echo "<p>Huidige score: " . $_SESSION['score'] . "</p>";

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