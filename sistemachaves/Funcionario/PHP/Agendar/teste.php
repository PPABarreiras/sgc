<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
        include_once 'postAgendar.php';
        
        $agendadas = getAgendada();
        var_dump($agendadas);
        foreach($agendadas as $agendar){
            
            echo  '<tr>';
            echo  '<td>'. $agendar->idChave .'</td>';
            echo  '<td>'. $agendar->situacao .'</td>';
            echo  '<td>'. $agendar->agendado .'</td>';
            echo  '<td>'. $agendar->idPredio .'</td>';
            echo  '<td>'. $agendar->descricao .'</td>';
            echo  '</tr>';
        }
    ?>
    </table>
    
</body>
</html>
