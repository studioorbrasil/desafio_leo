<?php
$sessao = new sessao();
 include "verifica.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Marcos Pinheiro Gomes">
    <title>Desafio Leo</title>
    <link
            href="https://fonts.googleapis.com/css2?family=Material+Icons"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Icons+Round"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone"
            rel="stylesheet">

<?php

$iduser = $sessao->getValor('idu');
$nomeLoc = $sessao->getValor('nome');


loadCSS('style');
 ?>


  </head>
  <body>
        <div class="container">
          <header>
            <nav>
              <div class="navContainer">
                <img src="imagens/logoLeo.png" id="logo" alt="desafio_leo">
                  <ul>
                      <li>
                          <div class="divInput">
                              <div id="inputCx">
                                  <input type="text" placeholder="Pesquisar cursos..." id="psq">
                                  <button class="buttonSrc">
                                      <span class="material-icons">search</span>
                                  </button>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="divUser">
                              <div class="baseUser">
                                  <div class="fotoUser"></div>
                                  <div class="infoUser">
                                      <div id="bemVindo">Seja bem-vindo</div>
                                      <div id="nomeUser"><?php echo $nomeLoc;?></div>
                                  </div>
                                  <div class="openUser">
                                      <span class="material-icons-outlined">
                                          arrow_drop_down
                                      </span>
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>
              </div>
            </nav>
          </header>
          <div class="mainBanner">

            </div>
            <div class="containerCursos">
              <div class="tituloCursos">
                <h2>Meus cursos</h2>
              </div>
              <div class="baseCursos">
                  <div class="cardCurso">
                      <div class="bannerCard" style="background-image:url(imagens/bannerCurso.png)!important;background-size:contain;background-repeat:no-repeat"></div>
                      <div class="txtCurso">
                        <h2>pellentesque malesuada</h2>
                        <p>Curabitur blandit tempus portitor. Nulla vitae elit lebero, a pharetra auge.</p>
                      </div>
                      <button type="button" name="button">ver curso</button>
                  </div>

                  <div class="cardCurso addCard">
                    <div class="bannerCard">

                    </div>
                  </div>
              </div>
            </div>
        </div>
  </body>
</html>
