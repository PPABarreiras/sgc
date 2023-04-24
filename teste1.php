<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    

    //$dataUser = '2022/11/02';
    
    $hoje = date('Y-m-d H:i:s');
    
    echo 'dsds';

    echo $hoje;

// function agendar_chave($idChave){

//     $dataUser = '2022/11/02';
//     $hoje = date('Y/m/d');

//     if($hoje == $dataUser){
//         //echo 'Chave indisponivel';
//         $stmt = $conexao->prepare("UPDATE chave SET situacao = 1 WHERE idChave = :id_chave");
//                 $stmt->bindParam('id_chave', $idChave);
//                 $stmt->execute();
//     }else{
//         echo 'Chave ainda disponivel';
//     }
// }

// function retirar_chave($idChave){
//     $agora = date('H:i:s');

//     echo $agora . '<br>';
//     $data = date('H:i:s', strtotime('05:35:00', strtotime($agora)));
//     echo $data;
// }

//retirar_chave();
    
?>
</body>
</html>

