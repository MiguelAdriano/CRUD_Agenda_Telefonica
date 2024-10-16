<?php

require_once('conexao.php');
$conexao = conectadb();

$sql = "SELECT * FROM usuarios";
$result = $conexao->query($sql);
if ($result->num_rows > 0) {
    while ($linha = $result->fetch_assoc()) {
        if ($_POST['usuario'] === $linha['user'] && $_POST['senha'] === $linha['senha']) {
            header('Location: menu.php');
            exit();
        }
    }
    header('Location: index.php?msg=1');
} else {
    header('Location: index.php?msg=1');
}

?>