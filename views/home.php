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
$psq = $_GET['psq'];
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
              <?php
                include 'navbar.php';
               ?>
            </nav>
        </header>
        <div class="mainBanner">

        </div>
        <div class="containerCursos">
          <div class="tituloCursos">
            <h2>Meus cursos</h2>
          </div>
          <div class="baseCursos">

              <?php

              $cursosobj = new curso();
              $cont=0;
              $where =  "WHERE 1";
              if($psq!=""){
                $where = "where descricao LIKE '%$psq%' ORDER BY id DESC";
                $cursos = $cursosobj->listar("id,titulo,descricao,img,linkurl",$where);
              }else{
                $cursos = $cursosobj->listar("id,titulo,descricao,img,linkurl",$where);
              }
                if($cursosobj->linhas > 0){
                    foreach ($cursos as $curs){
                      $id = $curs['id'];
                      $titulo = $curs['titulo'];
                      $desccur = $curs['descricao'];
                      $link = $curs['linkurl'];
                      $img = $curs['img'];

               ?>

              <div class="cardCurso">
                  <div class="bannerCard" style="background-image:url(<?php echo $img ;?>)!important;background-size:cover;background-repeat:no-repeat"></div>
                  <div class="txtCurso">
                    <h2><?php echo $titulo ?></h2>
                    <p><?php echo $desccur ?></p>
                  </div>
                  <button type="button" name="button" onclick="lnks('?m=login&t=incurso&id=<?php echo $id; ?>')">ver curso</button>
              </div>

              <?php
                 $cont++;
                 }
               }else{
              ?>
              <?php
                  if($psq!=""){
              ?>
                 <div class="feedLine">
                   Não foi encontrado cursos com as palavras: <strong><?php echo $psq ?></strong>
                 </div>
              <?php
                }else{
              ?>
                 <div class="feedLine">
                   Não há cursos.
                 </div>
              <?php
                }
              }
              ?>


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
                  <form id="formCurso" action="?m=crud&t=inCurso" method="post">
                      <input type="text" name="titulo" id="titulo"  value="" class="aparenceForms" placeholder="Titulo do curso"  onkeyup="liberaSubmit()">
                      <textarea name="descricao" rows="8" id="descricao" cols="80" class="aparenceForms" placeholder="Descrição do Curso"  onkeyup="liberaSubmit()"></textarea>
                      <input type="text" name="link" value="" id="link" class="aparenceForms" placeholder="Link do Curso"  onkeyup="liberaSubmit()">
                      <input type="hidden" name="img" id="pathHidden" value="" class="aparenceForms">
                  </form>
                  <div class="frameImg">

                        <form name="imgForm" method="POST" action="?m=arquivos&t=processaImg" enctype="multipart/form-data" target="iFramex">
                        <label for="pic"></label>
                        <input type="file" id="pic" name="pic" accept="image/*" class="fileInput" onchange="javascript:imgForm.submit(),liberaSubmit();">
                         <!-- <button type="submit"  class="btOK">Enviar imagem</button> -->
                        </form>
                        <iframe src="" action="processaImg.php" width="" height="" name="iFramex" id="iframeImg" class="iFrameUpload" frameborder="1"></iframe>
                  </div>
                    <button type="submit" id="btGravar" class="btnCadOff" onclick="save()" disabled name="button">Gravar curso</button>
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
