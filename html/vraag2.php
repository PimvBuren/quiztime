<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design met Balenken</title>
    <link rel="stylesheet" href="../css/quizvragen1.css"> <!-- Koppeling naar het CSS-bestand -->
    <?php include '../php/functions.php';?>
</head>
<body>
    <div class="container">
        <div class="header"><?php echo $data[1]['opdracht'];?></div>
        <div class="options">
            <div class="option"><?php echo $data[1]['vraag1'];?></div>
            <div class="option"><?php echo $data[1]['vraag2'];?></div>
        </div>
        <div class="options">
            <div class="option"><?php echo $data[1]['vraag3'];?></div>
            <div class="option"><?php echo $data[1]['vraag4'];?></div>
        </div>
    </div>
</body>
</html>