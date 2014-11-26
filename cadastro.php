<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
	<!--Teste comit-->
        <meta charset="UTF-8">
        <title>SD - Cadastro</title>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" type="text/css" href="css/login.css"/>
    </head>
    <body>
        <div id="cadastrar"><a href="index.php"title="Faça Login">Login &raquo;</a></div>
        <div id="login" class="form bradius" style="top:150px;">
            <div class="Message"></div>
           <div class="logo"><a href="index.php" title=""><img src="css/images/logo.png" title="" width="250" height="185"></a></div>
            <div class="acomodar">
                <form action="cadastro_usuario.php" method="post">
                    <label for="email">Login:</label><input id="email" type="text" class="txt bradius" name="login"/>
                    <label for="senha">Senha:</label><input id="senha" type="password" class="txt bradius" name="senha"/>    
                    <input type="submit" class="sd bradius" value="Cadastrar">
                </form>
            </div>

        </div>
    </body>
</html>
