function openModal(obj,mask){
      var obj = document.getElementById(obj);
      var mask = document.getElementById(mask);

      setTimeout(function(){
          TweenMax.from(mask,0.5,{autoAlpha:0});
      },400);
      setTimeout(function(){
          obj.style.visibility="visible";
          TweenMax.from(obj,1.2,{scale:0, ease: Elastic.easeOut.config(1, 0.75)});
          modalCheck()//marca a modal como lida
      },1200);

}
function closeModal(obj,mask){
  console.log(obj);
  var obj = document.getElementById(obj);
  var mask = document.getElementById(mask);
  setTimeout(function(){
      TweenMax.to(obj,0,{scale:1});
      TweenMax.to(obj,0.6,{scale:0, ease: Elastic.easeIn.config(1, 0.75)});
      obj.style.visibility="hidden";
  },500);
  setTimeout(function(){
      TweenMax.to(mask,0.5,{autoAlpha:0});
  },1000);

}
function lnks(lnk){
    window.location=lnk;
}
