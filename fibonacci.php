<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 - Suite de Fibonacci</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-left: 4px solid #2196F3;
        }
        .result h2 {
            margin-top: 0;
            color: #333;
        }
        pre {
            background-color: #f0f0f0;
            padding: 15px;
            border-radius: 4px;
            overflow-x: auto;
            font-size: 14px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Exercice 4 - Suite de Fibonacci</h1>
        <p>Calcul et affichage des 100 premiers termes de la suite de Fibonacci</p>

        <?php
        echo '<div class="result">';
        echo '<h2>Les 100 premiers termes de la suite de Fibonacci :</h2>';
        echo '<pre>';

        $F = array();
        $F[0] = 0;
        $F[1] = 1;

        for ($n = 2; $n < 100; $n++) {
            $F[$n] = $F[$n - 2] + $F[$n - 1];
        }

        for ($i = 0; $i < 100; $i++) {
            echo 'F' . $i . ' = ' . $F[$i] . '<br>';
        }

        echo '</pre>';
        echo '</div>';

        echo '<div class="result">';
        echo '<h2>Statistiques :</h2>';
        echo '<pre>';
        echo 'Premier terme (F0) : ' . $F[0] . '<br>';
        echo 'Deuxième terme (F1) : ' . $F[1] . '<br>';
        echo 'Centième terme (F99) : ' . $F[99] . '<br>';
        echo 'Nombre total de termes générés : 100<br>';
        echo '</pre>';
        echo '</div>';
        ?>
    </div>
</body>
</html>
