<div class="navContainer">
    <img src="imagens/logoLeo.png" id="logo" style="cursor:pointer" alt="desafio_leo" onclick="lnks('?m=login&t=home')">
    <ul>
        <li>
            <div class="divInput">
                <div id="inputCx">
                    <input type="text" placeholder="Pesquisar cursos..." id="psq"  onkeypress="startBuscaCurso()">
                    <button class="buttonSrc" onclick="startBuscaCurso()">
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
