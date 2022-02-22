
function modalCheck() {


    var xmlhttp;

    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState < 4 && xmlhttp.status < 200) {
            // document.getElementById("totMembros").innerHTML = "Aguarde..."
        }
        else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

            valor = xmlhttp.responseText;

              if(valor==1){

              }


        }
        else if (xmlhttp.status == 404 || xmlhttp.status == 500) {
//            alert("Desculpe! houve um problema no processamento da pagina por favor aguarde! ou tente novamente pagina=" + nome);
            xmlhttp.abort()
            return false
        }
    }
    xmlhttp.open("GET", "?m=crud&t=checkmodal");
    xmlhttp.send();
}
