var id = document.getElementById("link");

if (id.attachEvent) {
  id.attachEvent("onclick", function (event) {
    alert("Voc� clicou no cabe�alho, usu�rio do IE!");
  });
} else if (id.addEventListener) {
  id.addEventListener("click", function (event) {
    alert("Voc� clicou no cabe�alho!")
  }, false);
}