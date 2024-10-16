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
    
    <div class="agenda">
    <h2>Nome e Sobrenome em Ordem Alfabética:</h2>
    <table class="tabela" align="center" border="1">
        <tr>
            <th class="elemento1">Nome</th>
            <th class="elemento2">Sobre-nome</th>
        </tr>

        <?php

        require_once("conexao.php");
        $conexao = conectadb();
        $conexao->set_charset("utf8");
        $sql = "SELECT primeiro_nome,sobrenome FROM agenda_telefonica ORDER BY primeiro_nome ASC";

        $result = $conexao->query($sql);
        if ($result->num_rows > 0) {
            while ($linha = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $linha["primeiro_nome"] . "</td>";
                echo "<td>" . $linha["sobrenome"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td> Não há resultados..</td></tr>";
        }
        $conexao->close();

        ?>
    </table>



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
</div>
    <h4>
        <center>Senai Norte - Joinvile - SC</center>
    </h4>

</body>

</html>