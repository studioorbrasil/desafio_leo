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

              <div class="cardCurso addCard" onclick="openModal('modal2','mask')">
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
        <div class="modalInCurso" id="modal2">
          <div class="closeModal2" onclick="closeModal('modal2','mask')">
            <span class="material-icons-round">close</span>
          </div>
            <div class="tituloInCurso">
                Inclusão de novo Curso
            </div>

            <div class="baseForm">
                  <form action="?m=crud&t=inCurso" method="post">
                      <input type="text" name="titulo" id="titulo"  value="" class="aparenceForms" placeholder="Titulo do curso"  onkeyup="liberaSubmit()">
                      <textarea name="descricao" rows="8" id="descricao" cols="80" class="aparenceForms" placeholder="Descrição do Curso"  onkeyup="liberaSubmit()"></textarea>
                      <input type="text" name="link" value="" id="link" class="aparenceForms" placeholder="Link do Curso"  onkeyup="liberaSubmit()">
                      <input type="text" name="img" id="pathHidden" value="" class="aparenceForms">

                      <button type="submit" class="btnCad" name="button">Gravar curso</button>
                  </form>
                  <div class="frameImg">

                        <form name="imgForm" method="POST" action="?m=arquivos&t=processaImg" enctype="multipart/form-data" target="iFramex">
                        <label for="pic"></label>
                        <input type="file" id="pic" name="pic" accept="image/*" class="fileInput" onchange="javascript:imgForm.submit(),liberaSubmit();">
                         <!-- <button type="submit"  class="btOK">Enviar imagem</button> -->
                        </form>
                        <iframe src="" action="processaImg.php" width="" height="" name="iFramex" class="iFrameUpload" frameborder="1"></iframe>

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

     function liberaSubmit(){

         var bt = document.getElementById('btOK');
         var titulo = document.getElementById("titulo");
         var descricao = document.getElementById("descricao");
         var link = document.getElementById("link");
         var pathHidden = document.getElementById("pathHidden");

         setInterval(function(){
             if(titulo.value != "" && descricao.value != "" && link.value != "" && pathHidden.value != ""){

                 bt.classList.remove("btnCadOff");
                 bt.classList.add("btnCad");
                 bt.disabled=false;
             }else{
                 bt.classList.remove("btnCad");
                 bt.classList.add("btnCadOff");
                 bt.disabled=true;
             }

         },1000);
     }


        var modal = <?php echo $modal ?>;
        if(modal==0){
            openModal('modal1',"mask");
        }

     </script>
  </body>
</html>
