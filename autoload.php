<?php
spl_autoload_register(function (string $nomeCompletoDaClasse){
    echo $nomeCompletoDaClasse;
    exit();
});



spl_autoload_register(function (string $nomeCompletoDaClasse){
    $caminhoArquivo = str_replace('Alura', '', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    echo $caminhoArquivo;

    //if(file_exists($caminhoArquivo)) {
  //      require_once $caminhoArquivo;
 //   }
});