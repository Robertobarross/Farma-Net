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
    #Conteudo{width: 68%; min-height: 430px; border: 1px solid; color: white; float: left; margin-top: 16px;} /* Delimita o tamanho da div conteúdo */   
   .img{width: 31%; min-height: 500px; border: 1px solid; color: white; float: right; border: red;} /* Determina o tamanho da imagem do lado direito */
   .imgTopo{width: 100%; height: 30%;} /* Determina o tamanho da barra do Topo */
   
    </style>
    <!-- Fim da configuração da div global --> 
    
<!-- inicio da div topo --> 
<div id="Topo" align="center">

    <img src="Imagens/Topo.png" class="imgTopo"><!-- Imagem da barra do Topo -->

    <a href="#" class="menu-open">MENU</a><!-- Botão Do menu -->

<div class="menu"><!-- Div com os links do menu -->
    <a href="#" class="menu-close">&times;</a>
    <ul>
    <br><li><a href="#" target="_blank" class="link">Google</a></li></br>
    <br><li><a href="#" target="_blank" class="link">Yahoo</a></li></br>
    <br><li><a href="#" target="_blank" class="link">Facebook</a></li></br>
    <br><li><a href="#" target="_blank" class="link">Flickr</a></li></br>
    <br><li><a href="#" target="_blank" class="link">Instagram</a></li></br>
    </ul>
</div><!-- Fim da div links menu -->

    <!-- Arquivo JS já faz parte da deslizagem da barra de menu -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>

<style type="text/css">/* Arquivo CSS responsável pela configuração da barra de menu */
    /* resetando a fonte */
    body{font-family: 'Roboto', sans-serif;}
 
    /* estilizando o botão abrir menu */
    .menu-open{background: #99ffff; color: gray; font-size: 15px; font-family: Arial black; text-decoration: none; padding: 5px 20px; margin: 10px; border-radius: 10px; display: inline-block;text-transform: uppercase;}
    .menu-open:hover{background-color: green;}


    /* estilizando o botão fechar menu */
    .menu a.menu-close {padding: 8px 0 4px 23px; color: white; display: block; margin: -30px 0 -10px -20px; font-size: 35px; text-decoration: none;}

    /* Estilizando os links */
    .link{float: left; margin-right: 0px;}
    .link:hover{background-color: green;}

    /* estilizando o menu em si */
    .menu {overflow: hidden; background: rgba(0,0,0,.95); padding: 40px 0 0 40px; position: fixed; top: 0; right: -290px; height: 100%; z-index: 2; transition: 0.5s; width: 200px;} 

    /* estilizando o menu + ul */
    .menu ul{list-style: none; padding: 0; margin: 0; overflow-y: auto; width: 500px; height: 95%;}

    /* estilizando o menu + ul li + a */
    .menu ul li a {display: block; border-bottom: 1px solid #131313; padding: 6px 4px 6px 4px; color: white;transition: 0.3s; text-decoration: none;}
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

</div>
<!-- Fim da div topo --> 


<!-- Inicio da div conteúdo -->
<div id="Conteudo">

<?php 
    include "FormBuscar.php";// Arquivo de insere a barra de pesquisa //
?>
        
</div>
<!-- Inicio da div conteúdo -->

<!-- Inicio da div imagem --> 
<div id="Imagem">

    <br><img src="postagens/post/img_farma.png" class="img"><!-- Imagem do lado direito -->

</div>
<!-- Fim da div imagem --> 

<!-- Inicio da div rodapé -->
<div id="Rodape">
    Rodapé
</div>
<!-- Fim da div rodapé -->


</div>
    <!-- Fim da div global -->


    
</body>
</html>