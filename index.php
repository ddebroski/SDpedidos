
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SD - Login</title>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" type="text/css" href="css/login.css"/>
    </head>
    <body>
        <div id="cadastrar"><a href="cadastro.php"title="Cadastre-se e faça parte de nossa equipe!">Cadastre-se &raquo;</a></div>
        <div id="login" class="form bradius">
            <div class="Message"></div>
            <div class="logo"><a href="index.php" title=""><img src="css/images/logo.png" title="" width="250" height="185"></a></div>
            <div class="acomodar">
                <form action="logon.php" method="post">
                    <label for="nome">Login:</label><input id="email" type="text" class="txt bradius" name="login" value=""/>
                    <label for="senha">Senha:</label><input id="senha" type="password" class="txt bradius" name="senha" value=""/>    
                    <input type="submit" class="sd bradius" value="Entrar" name="entrar">
                </form>
            </div>

        </div>
    </body>
</html>
