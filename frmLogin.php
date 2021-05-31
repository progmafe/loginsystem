<?php session_start();?>
<html>
    <body>
        <form action="login.php" method="POST">
            <table border="0">
                <tbody>
                    <tr>
                        <td><label for="txtNome">Nome:</label></td>
                        <td><input type="text" name="txtNome" id="txtNome" /></td>
                    </tr>
                    <tr>
                        <td><label for="txtSenha">Senha:</label></td>
                        <td><input type="password" name="txtSenha" id="txtSenha" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Entrar" /></td>
                        <td><input type="button" value="Cancelar" onclick="window.location='index.php'" /></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>