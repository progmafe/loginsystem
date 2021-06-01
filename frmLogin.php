<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<?php session_start();?>
<html>
    <body>
        <form action="login.php" method="POST" style="margin-left: 500; margin-top:40"}>
        
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
                        <td><input type="submit" style="background:deeppink" value="Entrar"/></td>
                        <td><input type="button" style="background:mediumorchid" value="Cancelar" onclick="window.location='index.php'" /></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>