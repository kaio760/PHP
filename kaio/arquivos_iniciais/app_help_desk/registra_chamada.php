<?php
    require_once "validador_acesso.php";

    //Organizando os dados retirando | dos possiveis valores
    $id = str_replace('|','-',$_SESSION['id']);
    $perfil = str_replace('|','-',$_SESSION['perfil']);
    $nome = str_replace('|','-',$_SESSION['nome']);
    $titulo = str_replace('|','-',$_POST['titulo']);
    $categoria = str_replace('|','-',$_POST['categoria']);
    $descricao = str_replace('|','-',$_POST['descricao']);

    //Concatenando os valores de cada parâmetro separar por |
    $dados = $id . ' |' . $perfil . ' |' . $nome . ' |' . $titulo . ' |' . $categoria . ' |' . $descricao . PHP_EOL;

    var_dump($dados);

    //Abrindo o arquivo e armazenando em um variavel
    $arquivo = fopen('../../../../arquivos_seguranca/registros.hd','a');

    //abrindo o arquivo
    fwrite($arquivo, $dados);
    //fechar o arquivo
    fclose($arquivo);

    //redirecionando o arquivo e passando os dados para efetur um arquivo com alert em javascript
    header('location: abrir_chamado.php?cadastro=efetuado');
?>