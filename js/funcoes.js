function openModal(obj, mask) {
  console.log("open");
  var obj = document.getElementById(obj);
  var mask = document.getElementById(mask);

  obj.style.visibility = "visible";
  mask.style.visibility = "visible";
  TweenMax.to(mask, 0, {
    autoAlpha: 0
  });
  TweenMax.to(mask, 0.7, {
    autoAlpha: 1
  });
  TweenMax.to(obj, 0, {
    scale: 0
  });
  TweenMax.to(obj, 0.7, {
    scale: 1,
    ease: Elastic.easeOut.config(0.75, 0.75)

  });
  modalCheck();
}

function closeModal(obj, mask) {
  var campos = document.querySelectorAll('.aparenceForms');
  console.log(campos);
  var obj = document.getElementById(obj);
  var mask = document.getElementById(mask);
  setTimeout(function() {
    TweenMax.to(mask, 0, {
      autoAlpha: 1
    });
    TweenMax.to(mask, 0.7, {
      autoAlpha: 0
    });
    TweenMax.to(obj, 0, {
      scale: 1
    });
    TweenMax.to(obj, 0.4, {
      scale: 0,
      ease: Elastic.easeIn.config(0.75, 0.75)
    });

    for (var i = 0; i < campos.length; i++) {
      campos[i].value = "";
    }

  }, 500);
}

function lnks(lnk) {
  window.location = lnk;
}
function liberaSubmit(){

    var bt = document.getElementById('btGravar');
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

function save(){
   var formCurso = document.getElementById('formCurso');
   formCurso.submit();
}
function startBuscaCurso(e) {
    var psq = document.getElementById('psq').value;
    if (window.event.type == "keypress") {
        e = e || window.event;
        var key = e.keyCode

        if (key == 13) {
            window.location = "?m=login&t=home&psq=" + psq;
        }
    } else {
        if (psq != "") {
            window.location = "?m=login&t=home&psq=" + psq;
        }
    }
}
