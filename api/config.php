<?php 

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario';
    $obg = '/api/sucesso.php';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    header("location: $obg")

    //if($conexao->connect_errno)
    //{
    //    echo "Erro";
    //}
    //else
    //{
    //    echo "Sucesso";
    //}

?>