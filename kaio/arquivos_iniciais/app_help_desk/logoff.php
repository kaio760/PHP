<?php

// começa a sessão
session_start();

//destroi a sessão
session_destroy();

//direciona para a página inicial
header('Location: index.php?login=erro3');
exit;

?>