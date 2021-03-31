<?php
include "connect.php"; // Arquivo para conexão com o banco de dados //
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farma+Net</title>
</head>
<body>

<!-- Inicio da div bucar -->
<div id="buscar" align="center">
    <style type="text/css">/* Configuração dos intens da div */
   /* body{background-color: red;} */
    body {background-image: url("imagens/web.png");} /* Imagem cor de fundo */
    #buscar{width: 25%; min-height: 380px; border: 1px solid #99ff00; color: white; margin: 20px 35%; font-size: 12px; font-family: Arial;}
    .img{width: 30%; min-height: 30px;}
    .bt{background-color: green; width: 30%; font-family: Arial; color: white; border-radius: 10px;}
    .bt:hover{background-color: greenyellow;}
    .link{font-size: 10px; font-family: Arial;}
    .link:hover{background-color: greenyellow;}
    </style>

<?php // Arquivo de busca no banco de dados e variavéis da conexão //
    $buscar=$_POST['buscar'];
    $sql = mysqli_query($link, "SELECT * FROM cadprod WHERE produto LIKE '%".$buscar."%'");
    $row = mysqli_num_rows($sql);
    if($row > 0) {
    while($linha = mysqli_fetch_array($sql)) {
    $imagem = $linha['imagem'];
    $valor = $linha['valor'];
    $produto = $linha['produto'];

    echo "<br/><br/>";
    echo "<strong>Produto: </strong>".$produto;
    echo "<br/><br/>";
    echo "<strong>Valor: </strong>".$valor;
    echo "<br/><br/>";       
    }
    }
?>
    <!-- Carrega a imagem da pasta -->
    <br><img src="postagens/<?php echo "post"."/".$imagem;?>"class="img"> 
    <!-- Botões de navegação -->
    <p><input name="entrar" type="button" id="button4" onclick=location.href='Compras.php' value="Comprar" class="bt"/>
    <p><input name="entrar" type="button" id="button4" onclick=location.href='https://web.whatsapp.com/83991243418' value="WhatsApp" class="bt"/>
    <!-- Link para retornar para página inicial -->
    <p><a href="Index.php" class="link">Voltar para página inicial</a></p>

</div>
<!-- Fim da div bucar -->

</body>
</html>