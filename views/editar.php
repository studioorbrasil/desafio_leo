<?php
$sessao = new sessao();
 include "verifica.php";
 $idc="";
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
$idc = $_GET['id'];
$iduser = $sessao->getValor('idu');
$nomeLoc = $sessao->getValor('nome');
$modal = $sessao->getValor('modal');

$cursosobj = new curso();

  $where = "where id = $idc";
  $cursos = $cursosobj->listar("id,titulo,descricao,img,linkurl",$where);

  if($cursosobj->linhas > 0){
      foreach ($cursos as $curs){
        $titulo = $curs['titulo'];
        $desccur = $curs['descricao'];
        $link = $curs['linkurl'];
        $img = $curs['img'];
      }
}


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

        <div class="containerCursos">
          <div class="tituloCursos">
            <h2><?php echo $titulo ?></h2>
          </div>
          <div class="baseViewCursos">

            <div class="baseFormEdit">
                  <form id="formCurso" action="?m=crud&t=edit" method="post">
                      <input type="text" name="titulo" id="titulo"  value="<?php echo $titulo ?>" class="aparenceForms" placeholder="Titulo do curso"  onkeyup="liberaSubmit()">
                      <textarea name="descricao" rows="8" id="descricao" cols="80" class="aparenceForms" placeholder="Descrição do Curso"  onkeyup="liberaSubmit()"><?php echo $desccur ?></textarea>
                      <input type="text" name="link" value="<?php echo $link ?>" id="link" class="aparenceForms" placeholder="Link do Curso"  onkeyup="liberaSubmit()">
                      <input type="hidden" name="id" id="id" value="<?php echo $idc ?>" class="aparenceForms">
                      <input type="hidden" name="img" id="pathHidden" value="<?php echo $img ?>" class="aparenceForms">
                  </form>
                  <div class="frameImg">

                        <form name="imgForm" method="POST" action="?m=arquivos&t=processaImg" enctype="multipart/form-data" target="iFramex">
                        <label for="pic"></label>
                        <input type="file" id="pic" name="pic" accept="image/*" class="fileInput" onchange="javascript:imgForm.submit(),liberaSubmit();">
                         <!-- <button type="submit"  class="btOK">Enviar imagem</button> -->
                        </form>
                        <iframe src="" action="processaImg.php" width="" height="" name="iFramex" id="iframeImg" class="iFrameUpload" frameborder="1"></iframe>
                  </div>
                    <button type="submit" id="btGravar" class="btnCad" onclick="save()"  name="button">Atualizar curso</button>
            </div>

          </div>

        </div>
        <div class="mask" id="mask">

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
