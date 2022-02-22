<?php
$sessao = new sessao();
 include "verifica.php";
 ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
$modal = $sessao->getValor('modal');

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
                            <div class="sanduiche">
                              <span class="material-icons-outlined sandExtra">menu</span>

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
              <div class="cardCurso">
                  <div class="bannerCard" style="background-image:url(imagens/bannerCurso.png)!important;background-size:contain;background-repeat:no-repeat"></div>
                  <div class="txtCurso">
                    <h2>pellentesque malesuada</h2>
                    <p>Curabitur blandit tempus portitor. Nulla vitae elit lebero, a pharetra auge.</p>
                  </div>
                  <button type="button" name="button">ver curso</button>
              </div>
              <div class="cardCurso">
                  <div class="bannerCard" style="background-image:url(imagens/bannerCurso.png)!important;background-size:contain;background-repeat:no-repeat"></div>
                  <div class="txtCurso">
                    <h2>pellentesque malesuada</h2>
                    <p>Curabitur blandit tempus portitor. Nulla vitae elit lebero, a pharetra auge.</p>
                  </div>
                  <button type="button" name="button">ver curso</button>
              </div>
              <div class="cardCurso">
                  <div class="bannerCard" style="background-image:url(imagens/bannerCurso.png)!important;background-size:contain;background-repeat:no-repeat"></div>
                  <div class="txtCurso">
                    <h2>pellentesque malesuada</h2>
                    <p>Curabitur blandit tempus portitor. Nulla vitae elit lebero, a pharetra auge.</p>
                  </div>
                  <button type="button" name="button">ver curso</button>
              </div>
              <div class="cardCurso">
                  <div class="bannerCard" style="background-image:url(imagens/bannerCurso.png)!important;background-size:contain;background-repeat:no-repeat"></div>
                  <div class="txtCurso">
                    <h2>pellentesque malesuada</h2>
                    <p>Curabitur blandit tempus portitor. Nulla vitae elit lebero, a pharetra auge.</p>
                  </div>
                  <button type="button" name="button">ver curso</button>
              </div>
              <div class="cardCurso">
                  <div class="bannerCard" style="background-image:url(imagens/bannerCurso.png)!important;background-size:contain;background-repeat:no-repeat"></div>
                  <div class="txtCurso">
                    <h2>pellentesque malesuada</h2>
                    <p>Curabitur blandit tempus portitor. Nulla vitae elit lebero, a pharetra auge.</p>
                  </div>
                  <button type="button" name="button">ver curso</button>
              </div>
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
        <div class="mask" id="mask">

        </div>
        <div class="modal1" id="modal1">
            <div class="supModal">
                <div class="closeModal" onclick="closeModal('modal1','mask')">
                  <span class="material-icons-round">close</span>
                </div>
            </div>
            <div class="subModal">
              <div class="contentModal">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <button type="button" class="btBlue" name="button">inscreva-se</button>
              </div>
            </div>
        </div>
        <footer>
          <div class="navf">
            <div class="footContainer">
                <div class="logoFoot">
                  <div class="">
                          <img src="imagens/logoLeo.png" id="logof" alt="desafio_leo">
                  </div>
                  <div class="textFoot">
                    <p>Maecenas faucibus molis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                  </div>
                </div>
                <div class="linksFooter">
                    <div class="contato">
                        <table class="tabLinks">
                          <tr>
                            <td class="labelLinks">//Contato</td>
                          </tr>
                          <tr>
                            <td  class="links">(21)98765-3434<br>contato@leolearning.com</td>
                          </tr>
                        </table>
                    </div>
                    <div class="redes">
                      <table  class="tabLinks">
                        <tr>
                          <td class="labelLinks">//Redes Sociais</td>
                        </tr>
                        <tr>
                          <td class="links">
                            <img src="imagens/twitico.png" alt="">
                            <img src="imagens/tubico.png" alt="">
                            <img src="imagens/pintico.png" alt="">
                          </td>
                        </tr>
                      </table>
                    </div>
                </div>
            </div>
          </div>
      </footer>
      <div class="copyDiv">
        <div class="copyText">
          <p>Copyright 2017 - All right reserved.</p>
        </div>
      </div>
    </div>
    <?php
      loadJS("ajaxModalcheck");
      loadJS("funcoes");
      loadJS("TweenMax");
     ?>


     <script type="text/javascript">
        var modal = <?php echo $modal ?>;
        if(modal==0){
            openModal('modal1',"mask");
        }

     </script>
  </body>
</html>
