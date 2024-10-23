<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>risultati</title>
</head>
<body>
    <?php
        $nome = $_GET["nome"];
        $cognome = $_GET["cognome"];
        $orario = $_GET["orario"];
        $tipoSpostamento = $_GET["radio"];
        $corso = "";
        if(isset($_GET['check1']) == true) {
            $corso = $_GET['check1'] . ",";
        }
        if(isset($_GET['check2']) == true) {
            $corso = $corso . $_GET['check2'] . ",";
        }
        if(isset($_GET['check3']) == true) {
            $corso = $corso . $_GET['check3'] . ",";
        }
        if(isset($_GET['check1']) == false && isset($_GET['check2']) == false && isset($_GET['check3']) == false) {
            $corso = "Nessuna attività";
        }
        $table = "<table style='border:1px solid black'>
                    <tr>
                        <td>Nome</td>
                        <td>Cognome</td>
                        <td>Orario</td>
                        <td>Tipo di Spostamento</td>
                        <td>Corsi Frequentati</td>
                    </tr>
                    <tr>
                        <td>$nome</td>
                        <td>$cognome</td>
                        <td>$orario</td>
                        <td>$tipoSpostamento</td>
                        <td>$corso</td>
                    </tr>
                </table>";
        echo $table;
    ?>
</body>
</html>