<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 - Boucles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        form {
            margin-bottom: 20px;
        }
        input[type="number"] {
            padding: 8px;
            font-size: 16px;
        }
        button {
            padding: 8px 15px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-left: 4px solid #4CAF50;
        }
        .result h3 {
            margin-top: 0;
            color: #333;
        }
        pre {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 4px;
            overflow-x: auto;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Exercice 3 - Boucles et Itérations</h1>
        
        <form method="POST">
            <label for="nombre">Entrez un nombre entier (n) :</label><br><br>
            <input type="number" id="nombre" name="nombre" required>
            <button type="submit">Calculer</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['nombre'])) {
            $n = intval($_POST['nombre']);
            
            if ($n <= 0) {
                echo '<div class="result"><p style="color: red;">Erreur : Veuillez entrer un nombre positif.</p></div>';
            } else {
                echo '<div class="result">';
                echo '<h3>1. Table de Multiplication du ' . $n . ' (de 1 à 10) :</h3>';
                echo '<pre>';
                for ($i = 1; $i <= 10; $i++) {
                    echo $n . ' x ' . $i . ' = ' . ($n * $i) . '<br>';
                }
                echo '</pre>';
                echo '</div>';

                echo '<div class="result">';
                echo '<h3>2. Triangle d\'étoiles centré (hauteur ' . $n . ') :</h3>';
                echo '<pre class="text-center">';
                for ($i = 1; $i <= $n; $i++) {
                    for ($j = 0; $j < $n - $i; $j++) {
                        echo '&nbsp;';
                    }
                    for ($j = 0; $j < $i; $j++) {
                        echo '*';
                    }
                    echo '<br>';
                }
                echo '</pre>';
                echo '</div>';

                echo '<div class="result">';
                echo '<h3>3. Carré d\'étoiles (taille ' . $n . 'x' . $n . ') :</h3>';
                echo '<pre class="text-center">';
                for ($i = 1; $i <= $n; $i++) {
                    if ($i == 1 || $i == $n) {
                        for ($j = 1; $j <= $n; $j++) {
                            echo '*';
                        }
                    } else {
                        echo '*';
                        for ($j = 2; $j < $n; $j++) {
                            echo ' ';
                        }
                        echo '*';
                    }
                    echo '<br>';
                }
                echo '</pre>';
                echo '</div>';

                echo '<div class="result">';
                echo '<h3>4. Nombres pairs entre 1 et ' . $n . ' :</h3>';
                echo '<pre>';
                $pairs = array();
                for ($i = 1; $i <= $n; $i++) {
                    if ($i % 2 == 0) {
                        $pairs[] = $i;
                    }
                }
                if (count($pairs) > 0) {
                    echo implode(', ', $pairs);
                } else {
                    echo 'Aucun nombre pair trouvé.';
                }
                echo '</pre>';
                echo '</div>';

                echo '<div class="result">';
                echo '<h3>5. Somme des entiers de 1 à ' . $n . ' :</h3>';
                echo '<pre>';
                $somme = 0;
                for ($i = 1; $i <= $n; $i++) {
                    $somme += $i;
                }
                echo 'La somme est : ' . $somme;
                echo '</pre>';
                echo '</div>';

                echo '<div class="result">';
                echo '<h3>6. Parité du nombre ' . $n . ' :</h3>';
                echo '<pre>';
                if ($n % 2 == 0) {
                    echo $n . ' est un nombre PAIR.';
                } else {
                    echo $n . ' est un nombre IMPAIR.';
                }
                echo '</pre>';
                echo '</div>';
            }
        }
        ?>
    </div>
</body>
</html>
