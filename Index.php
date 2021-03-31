<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farma+Net</title>
</head>
<body>


<!-- Inicio da div global -->
<div id="Global">

    <!-- Configuração da div global com css -->
    <style type="text/css">
    #Global{height: auto;}/* Autura automático */
    body {background-image: url("imagens/web.png");} /* Imagem cor de fundo */ 
    </style>
    <!-- Fim da configuração da div global --> 


    
<!-- inicio da div topo --> 
<div id="Topo" align="center">

    <img src="Imagens/Topo.png" class="imgTopo"><!-- Imagem da barra do Topo -->

<?php 
    include "FormBuscar.php";// Arquivo de insere a barra de pesquisa //
?>
    <style type="text/css">
    .imgTopo{width: 100%; height: 30%;} /* Determina o tamanho da barra do Topo */
    </style>

</div><!-- Fima da div topo -->



<div id="Menu"><!-- Inicio da div menu --> 

<!-- Aqui começam os códigos que definem o Menu -->
<div class="menu"><!-- Div com os links do menu -->
    <a href="#" class="menu-close">&times;</a>
    <ul>
    <br><li><a href="Formlogin.php" target="_blank" class="link">Login</a></li></br>
    <br><li><a href="#" target="_blank" class="link">Medicamentos</a></li></br>
    <br><li><a href="#" target="_blank" class="link">Perfumária</a></li></br>
    <br><li><a href="#" target="_blank" class="link">Beleza</a></li></br>
    <br><li><a href="#" target="_blank" class="link">Cosméticos</a></li></br>
    <br><li><a href="#" target="_blank" class="link">Infantil</a></li></br>
    </ul>
</div><!-- Fim da div links menu -->

    <!-- Arquivo JS já faz parte da deslizagem da barra de menu -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>

<style type="text/css">/* Arquivo CSS responsável pela configuração da barra de menu */
    /* resetando a fonte */
    body{font-family: 'Roboto', sans-serif;}
 
    /* estilizando o botão abrir menu */
    .menu-open{background: #99ffff; color: gray; font-size: 15px; font-family: Arial black; text-decoration: none; padding: 5px 20px; margin: 10px; margin-top: -5px; display: inline-block;text-transform: uppercase;}
    .menu-open:hover{background-color: green;}


    /* estilizando o botão fechar menu */
    .menu a.menu-close {padding: 8px 0 4px 23px; color: white; display: block; margin: -30px 0 -10px -20px; font-size: 35px; text-decoration: none;}

    /* Estilizando os links */
    .link{float: left; margin-right: 0px;}
    .link:hover{background-color: green;}

    /* estilizando o menu em si */
    .menu {overflow: hidden; background: rgba(0,0,0,.95); padding: 40px 0 0 40px; position: fixed; top: 0; right: -290px; height: 100%; z-index: 2; transition: 0.5s; width: 200px; background-color: #99cc66;} 

    /* estilizando o menu + ul */
    .menu ul{list-style: none; padding: 0; margin: 0; overflow-y: auto; width: 500px; height: 95%;}

    /* estilizando o menu + ul li + a */
    .menu ul li a {display: block; border-bottom: 1px solid white; padding: 6px 4px 6px 4px; color: white;transition: 0.3s; text-decoration: none;}
</style>

<!-- Arquivo responsável por fazer deslizar a barra de menu -->
<script type="text/javascript">
$(function () {
    var menu_width = 290;
    var menu = $(".menu");
    var menu_open = $(".menu-open");
    var menu_close = $(".menu-close");
    var overlay = $(".overlay");

    menu_open.click(function (e) {
    e.preventDefault();
    menu.css({"right": "0px"});
    overlay.css({"opacity": "1", "width": "100%"});
 });
 
    menu_close.click(function (e) {
    e.preventDefault();
    menu.css({"right": "-" + menu_width + "px"});
    overlay.css({"opacity": "0", "width": "0"});
 });
});
</script>
<!-- Fim do arquivo responsável por fazer deslizar a barra de menu -->
<!-- Finaliza também os códigos que definem o Menu -->

</div>
<!-- Fim da div menu --> 



<!-- Inicio da div conteúdo -->
<div id="Conteudo">

    <br><a href="#" class="menu-open">MENU</a></br><!-- Botão Do menu -->
    <br><img src="Imagens/logo.jpeg" class="imglogo"></br><!-- Imagem logomarca --> 

    <style type="text/css">
    #Conteudo{width: 50%; min-height: 430px; border-radius: 10px; border: 1px solid; color: #99ff00; float: left; margin-top: 16px;} /* Delimita o tamanho da div conteúdo */  
    .imglogo{width: 55%; height: 330px; margin-left: 150px; box-shadow: 10px 10px 10px gray; border-radius: 10px;}/* Define o estilo da imagem logomarca */
    </style>
        
</div>
<!-- Inicio da div conteúdo -->



<!-- Inicio da div texto --> 
<div id="Texto">

    <h1 class="texto1" align="center">Ofertas e descontos especiais!</h1><!-- texto 1 --> 
    <h2 class="texto2" align="center">50% de desconto</h2><!-- texto 2 --> 
    <h3 class="texto3" align="center">Na linha de medicamentos genéricos! Confira outras ofertas no nosso menu.</h3><!-- texto --> 

    <style type="text/css">
    #Texto{width: 48%; min-height: 430px; border-radius: 10px; border: 1px solid; color: #99ff00; float: left; margin-left: 18px; margin-top: 16px;} /* Estilo da div texto */
    .Texto1{font-size: 150px; font-family: Impact;} /* Estilo do texto 1 */
    .texto2{font-size: 80px;} /* Estilo do texto 2 */
    .texto3{font-size: 15px; font-family: Arial;} /* Estilo do texto 3 */
    </style>

</div>
<!-- Fim da div texto -->



<!-- Inicio da div rodapé -->
<div id="Rodape">
    
    <h1 class="R_Sociais">Visite nossas redes sociais:</h1>

    <!-- Links redes sociais -->
    <a href="https://pt-br.facebook.com/"><img src="Imagens/facebook.png" alt="#" class="Redes_S"/></a>
    <a href="https://www.instagram.com/"><img src="Imagens/instagram.png" alt="#" class="Redes_S"/></a>
    <a href="https://br.linkedin.com/"><img src="Imagens/linkedin.png" alt="#" class="Redes_S"/></a>
    <a href="https://web.whatsapp.com/"><img src="Imagens/whatsapp.png" alt="#" class="Redes_S"/></a>
    <a href="Index.php"><img src="Imagens/site.png" alt="#" class="Redes_S"/></a>

    <!-- Data atual -->
    <br><span class="data">Hoje: <?php echo date('d/m/y');?></span></br>
    <!-- Direitos -->
    <br><h2 class="R_Sociais">&COPY; Copyright | 2021 | Farma+Net </h2></br>

    <style type="text/css"> 
    #Rodape{width: 100%; min-height: 50px; float: left; margin-top: 35px; border: 1px solid; color: #006600; background-color: #006600;} /* Estilo da div Rodapé */
    .R_Sociais{font-size: 12px; font-family: Arial; color: #99ffff; margin: 10px;} /* Estilo do texto */
    .Redes_S{width: 30px; margin: 10px;} /* Estilo das imagens das redes sociais */
    .data{font-size: 12px; font-family: Arial; color: #99ffff; margin: 10px;} /* Estilo da data */
    </style>

</div>
<!-- Fim da div rodapé -->

</div>
    <!-- Fim da div global -->


    
</body>
</html>