<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design met Balenken</title>
    <link rel="stylesheet" href="../css/quizvragen.css">
    <?php include '../php/functions.php'; ?> 
</head>
<body>
    <div class="container">
        <!-- Vraag -->
        <div class="header"><?php echo htmlspecialchars($data[$index]['opdracht']); ?></div>

        <!-- Formulier voor de antwoorden -->
        <form method="POST">
            <div class="options">
                <button class="option" name="answer" value="1"><?php echo htmlspecialchars($data[$index]['vraag1']); ?></button>
                <button class="option" name="answer" value="2"><?php echo htmlspecialchars($data[$index]['vraag2']); ?></button>
            </div>
            <div class="options">
                <button class="option" name="answer" value="3"><?php echo htmlspecialchars($data[$index]['vraag3']); ?></button>
                <button class="option" name="answer" value="4"><?php echo htmlspecialchars($data[$index]['vraag4']); ?></button>
            </div>
            <div>
                <button type="submit" name="reset">Reset Score</button>
            </div>
        </form>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>