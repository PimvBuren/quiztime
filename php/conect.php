<?php

$host="	localhost";
$user="root";
$pass='';
$db= 'quizbestanden';
$conn=new mysqli($host,$user, $pass, $db);
if ($conn->connect_error) {
    echo'failed to conneect db'. $conn->connect_error;
}
?>














<!-- 
 //als je bent ingelogd als admin
        //kan je vragen maken zodat andere mensen die kunnen zien
        //kan je vragen verwijderen

//kan je telkens zien wie de meeste punten heeft

//timer maken voor elke vraag
    // een timer instellen per vraag
    // zodat iedereen de timer kan zien
        //als de timer voorbij is komt er staan niks ingvuld
        //dan krijg je geen punten



 //uitloggen ga naar QUIZ.php -->
 
    
