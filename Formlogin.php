<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farma+Net</title>
</head>
<body>

    <style type="text/css">
    body{background-image: url("imagens/web.png");}/* Imagem cor de fundo */
    </style>

<div id="Login"><!-- Inicio da div login -->

    <Form action="logar.php" method="POST" enctype="multipart/form-data">
     
    <br><img src="Imagens/login.png" class="img"></br>
    <input type="email" name="email" class="cad" placeholder="Email" required>
    <input type="password" name="senha" class="cad" placeholder="Senha" require>

    <!-- Botões -->
    <p></p><input type="submit" value="Logar" class="bt">
    <input type="reset" value="Limpar" class="bt"></p>

    </form>

    <style type="text/css">
    #Login{width: 30%; min-height: 350px; margin-left: 450px; margin-top: 100px; border: 1px solid; border-radius: 10px; color: #99ff00; background-color: #336633;}
    .cad{width: 80%; min-height: 20px; margin-left: 35px; margin-top: 20px; border-radius: 5px;}
    .img{width: 60px; margin-left: 165px;}
    .bt{width: 40%; min-height: 25px; margin-left: 120px; margin-top: 10px; border-radius: 5px; color: black; background-color: #99ff00; font-size: 18px;}
    </style>

</div><!-- Fim da div login -->
    
</body>
</html>