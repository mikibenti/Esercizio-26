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
        if(isset($_GET['radio'])) {
            $tipoSpostamento = $_GET['radio'];
        } else {
            $tipoSpostamento = "Non Specificato";
        }
        $corso = [];
        if(isset($_GET['check1'])) {
            $corso[] = $_GET['check1'];
        }
        if(isset($_GET['check2'])) {
            $corso[] = $_GET['check2'];
        }
        if(isset($_GET['check3'])) {
            $corso = $_GET['check3'];
        }
        if(count($corso)==0) {
            $corso = "Nessuna attività";
        }
        $table = "<table style='border:1px solid black;width:100%;text-align:center'>
                    <tr>
                        <th>Nome</th>
                        <th>Cognome</th>
                        <th>Orario</th>
                        <th>Tipo di Spostamento</th>
                        <th>Corsi Frequentati</th>
                    </tr>
                    <tr>
                        <td>$nome</td>
                        <td>$cognome</td>
                        <td>$orario</td>
                        <td>$tipoSpostamento</td>
                        <td>".implode(",",$corso)."</td>
                    </tr>
                </table>";
        echo $table;
    ?>
</body>
</html>
