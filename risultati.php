<?php
    session_start();
    if (!(isset($_SESSION["registrazioni"]))) {
        $_SESSION["registrazioni"] = array(); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>risultati.php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        showData();

        function calculateMedia($a){
            $somma = 0;
            foreach ($a as $key => $value) {
                $somma += $value;
            }
            return $somma / count($a);
        }

        function showData(){
            echo "<div id='divResult'>";
                echo "<h1>REGISTRAZIONI FATTE</h1>";
                echo "<table>";
                    echo "<tr>";
                        echo "<th>Codice fiscale</th>";
                        echo "<th>Età</th>"; 
                    echo "</tr>";
                        $array = $_SESSION["registrazioni"];
                        foreach ($array as $key => $value) {
                            echo "<tr>";
                                echo "<td>$key</td>";
                                echo "<td>$value</td>";
                            echo "</tr>";
                        }
                echo "</table>";
                $media = calculateMedia($array);
                echo "<p><b><i>La media dell'età è</i></b> $media</p>";
                echo "<br>";
                echo "<a class='sendButton' href='./form.html'>HOME</a>";
                
            echo "</div>";
        }
    ?>
</body>
</html>