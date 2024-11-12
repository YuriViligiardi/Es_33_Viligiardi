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
    <title>script.php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $cf = $_GET['cf'];
        $age = $_GET['age'];
        saveRegistration($cf, $age);
        //var_dump($_SESSION["registrazioni"]);
        showData($cf, $age);

        function saveRegistration($cf, $a){
            $array = $_SESSION["registrazioni"];
            $array[$cf] = $a;
            $_SESSION["registrazioni"] = $array;
        }

        function showData($cf, $a){
            echo "<div id='divScript'>";
                echo "<h1>DATI INSERITI</h1>";
                echo "<h5>Codice fiscale inserito: </h5>" . $cf;
                echo "<br>";
                echo "<h5>Età inserita: </h5>" . $a;
                echo "<br>";
                echo "<br>";
                echo "<a class='sendButton' href='./form.html'>HOME</a>";
                echo "<br>";
                echo "<br>";
                echo "<a class='sendButton' href='./risultati.php'>MOSTRA REGISTRAZIONI</a>";
            echo "</div>";
        }
    ?>
</body>
</html>