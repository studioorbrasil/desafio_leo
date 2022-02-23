<?php

 if(isset($_FILES['pic']))
 {
    $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") ."".$ext; //Definindo um novo nome para o arquivo
    $dir = './imagens/cursos/'; //Diretório para uploads

    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    echo '<div align="center">
          <img src="./imagens/cursos/' . $new_name . '" class="img img-responsive img-thumbnail" width="120">';
    echo "<script>parent.document.getElementById('pathHidden').value='imagens/cursos/".$new_name."'</script>";
}else{

    $imgAtual = $_GET["img"];
    echo "<div class='alert alert-success' role='alert' align='center'>
          <img src='../".$imgAtual."' class='img img-responsive img-thumbnail' width='200'>";
}

 ?>
