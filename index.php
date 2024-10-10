<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $domanda = "Qual è il pianeta più vicino al sole?";
        $risposte = ["Venere","Terra","Marte","Mercurio","Giove"];
        echo "<p style='font-style: italic'><b>$domanda</b></p>";
        foreach ($risposte as $risposta) {
            echo "<input type='radio' name='risposta'>$risposta</input><br>";
        }
    ?>
</body>
</html>