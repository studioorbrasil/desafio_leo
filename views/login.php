<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Desafio LEO</title>
    <?php
        loadCSS('style');

     ?>
  </head>
  <body>
<div class="loginBox">
    <div class="logoBox">

    </div>

    <form action="?m=login&t=entrar" method="post">
      <div class="controles">
          <?php
          if(isset($_GET['fail'])){
            echo "<div class='msgErro'>Dados de acesso inválidos</div>";
          }
           ?>
          <input type="text" class="campos" name="txtEmail" placeholder="Email">
          <input type="password"  class="campos" name="txtSenha" placeholder="Senha">
          <button type="submit" name="button" class="btn">Entrar</button>
      </div>

    </form>
</div>
  </body>
</html>
