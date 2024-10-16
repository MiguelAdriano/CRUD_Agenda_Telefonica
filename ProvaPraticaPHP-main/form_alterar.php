<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Telefonica SENAI Norte</title>
    <link rel="stylesheet" href="css/agenda.css" />
</head>

<body>
    <h1>
        <center>MIGUEL ADRIANO</center>
    </h1>
    <hr width="100%" align="center" color="blue" size="3">
    <div class="agenda" border="3" style="background-color:#FFEAA7;">
        <h2>Agenda Telefonica Completa</h2>

        <?php

        if (isset($_GET['id'])) {
            $id = $_GET["id"];
            require_once("conexao.php");
            $conexao = conectadb();
            $conexao->set_charset("utf8");
            $sql = "SELECT * FROM agenda_telefonica WHERE id=$id";
            $result = $conexao->query($sql);
            if ($result->num_rows > 0) {
                while ($linha = $result->fetch_assoc()) {
                    $nome = $linha["primeiro_nome"];
                    $sobrenome = $linha["sobrenome"];
                    $email = $linha["email"];
                    $telefone = $linha["telefone"];

                }
                ?>
                <form action="alterar.php" method="POST">
                    <table align="center">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <tr>
                            <td align="right">
                                <label>
                                    * Nome:
                                </label>
                            </td>
                            <td>
                                <input type="text" name="nome" value="<?= $nome ?>" placeholder="Qual seu nome?">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <label>
                                    * Sobrenome:
                                </label>
                            </td>
                            <td>
                                <input type="text" name="sobrenome" value="<?= $sobrenome ?>" placeholder="Qual seu sobre-nome?">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <label>
                                    * Email:
                                </label>
                            </td>
                            <td>
                                <input type="email" name="email" value="<?= $email ?>" placeholder="Qual seu email?">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <label>
                                    * Telefone:
                                </label>
                            </td>
                            <td>
                                <input type="text" name="telefone" value="<?= $telefone ?>" placeholder="Qual seu telefone?"
                                    maxlenght="14" onkeydown="javascript::fMasc(this,mTel);">
                            </td>
                        </tr>

                    </table>
                    <button type="submit">Alterar</button>
                </form>

                <?php
            } else {
                echo "<tr> Sem Resultados</tr>";
            }
            $conexao->close();
        } else {
            echo "ID não localizado.";
        }
        ?>
    </div>
    <hr widt="100%" align="center" size="3" color="blue">
    <div class="agenda1">
        <hr widt="100%" align="center" size="3" color="blue">

        <div id="container">
            <table align="center">
                <tr>

                    <td>
                        <form method="POST" action="form.php">
                            <center align="right">
                                <input type="submit" value="Novo Cadastro">
                            </center>
                        </form>
                    </td>

                    <td>
                        <form method="POST" action="mostrar_nome.php">
                            <center align="left">
                                <input type="submit" value="Listar Nome">
                            </center>
                        </form>
                    </td>

                    <td>
                        <form method="POST" action="mostrar_nome_sobrenome.php">
                            <center align="left">
                                <input type="submit" value="Listar Nome e Sobrenome">
                            </center>
                        </form>
                    </td>

                    <td>
                        <form method="POST" action="listar_agenda_completa.php">
                            <center align="right">
                                <input type="submit" value="Listar Agenda Telefone">
                            </center>
                        </form>
                    </td>

                    <td>
                        <form method="POST" action="mostrar_nome.php">
                            <center align="left">
                                <input type="submit" value="Consultar Nome">
                            </center>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
        <hr widt="100%" align="center" size="3" color="blue">
        <div id="container">
            <table align="center">
                <tr>
                    <td>
                        <form method="POST" action="menu.php">
                            <center align="right">
                                <input type="submit" value="Home">
                            </center>
                        </form>
                    </td>

                    <td>
                        <form method="POST" action="alterar_contato.php">
                            <center align="right">
                                <input type="submit" value="Alterar Contato">
                            </center>
                        </form>
                    </td>

                    <td>
                        <form method="POST" action="procura_deletar.php">
                            <center align="right">
                                <input type="submit" value="Excluir Contato">
                            </center>
                        </form>
                    </td>
                </tr>

            </table>
        </div>
    </div>
    </div>
    <h4>
        <center>Senai Norte - Joinvile - SC</center>
    </h4>

</body>

</html>