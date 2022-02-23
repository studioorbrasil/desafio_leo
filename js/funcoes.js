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
