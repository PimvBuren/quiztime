<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design met Balenken</title>
    <link rel="stylesheet" href="../css/quizvragen.css">
    <?php include '../php/functions.php';?> 
</head>
<body>
    <div class="container">
        <!-- Vraag -->
        <div class="header"><?php echo $data[0]['opdracht']; ?></div>

        <!-- Formulier voor de antwoorden -->
        <form method="POST">
            <div class="options">
    <button class="option" name="answer" value="1"><?php echo $data[0]['vraag1']; ?></button>
    <button class="option" name="answer" value="2"><?php echo $data[0]['vraag2']; ?></button>
</div>
<div class="options">
    <button class="option" name="answer" value="3"><?php echo $data[0]['vraag3']; ?></button>
    <button class="option" name="answer" value="4"><?php echo $data[0]['vraag4']; ?></button>
</div>
            <script src="../js/script.js">
        </form>
        </body>
</html>