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
    <h2>Agenda Telefonica</h2>
    <div id="container">
        <table align="center">

            <form method="POST" action="login.php">
                <input type="text" name="usuario" value="" size="15" placeholder="usuario">
                <input type="password" name="senha" value="" size="15" placeholder="senha">
                <button>Login</button>
            </form>

        </table>

        <?php if (isset($_GET['msg'])) {
            if ($_GET['msg'] === '1') {
                echo "Usuario ou senha incorretos";
            }
        } ?>
    </div>
    <h4>
        <center>Senai Norte - Joinvile - SC</center>
    </h4>



</body>

</html>