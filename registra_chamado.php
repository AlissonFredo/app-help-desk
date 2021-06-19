<?php
    session_start();

    $arquivo = fopen('log/arquivo.hd', 'a');

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] .'#'. $titulo .'#'. $categoria .'#'. $descricao . PHP_EOL;   

    fwrite($arquivo, $texto);
    fclose($arquivo);

    header('Location: abrir_chamado.php');
?>