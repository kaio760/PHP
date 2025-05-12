<?php
    session_start();

    //usuarios pré-cadastrados
    $usuarios =  array(
        ['id' => '1', 'perfil' => 'admin', 'nome' => 'Kaio', 'email' => 'kaiosantos_lima@hotmail.com', 'senha' => '123456'],
        ['id' => '2', 'perfil' => 'user', 'nome' => 'Andre', 'email' => 'Andre_falcao@hotmail.com', 'senha' => '654321'],
        ['id' => '3', 'perfil' => 'user', 'nome' => 'Maria', 'email' => 'maria_clara@hotmail.com', 'senha' => '123456'],
    );

    $usuarioAutenticado = false;

    //recebendo os dados via metodo GET
    $emailUsuarios = $_GET['email'];
    $senhaUsuarios = $_GET['senha'];

    //autenticando o usuario
    for ($idx = 0; $idx < count($usuarios); $idx++) {
        if ($emailUsuarios == $usuarios[$idx]['email'] && $senhaUsuarios == $usuarios[$idx]['senha']){
            $usuarioAutenticado = true;
            $_SESSION['id'] = $usuarios[$idx]['id'];
            $_SESSION['perfil'] = $usuarios[$idx]['perfil'];
            $_SESSION['nome'] = $usuarios[$idx]['nome'];
            break;
        }

        else{
            $usuarioAutenticado = true;
        }
    }

    if ($usuarioAutenticado){
        //validando sessão
        $_SESSION['autenticado'] = 'sim';
        header('location:home.php');
    }
    else{
        $_SESSION['autenticado'] = 'nao';
        header('location: index.php?login=erro');

    }
?>