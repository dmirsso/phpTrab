var id = document.getElementById("link");

if (id.attachEvent) {
  id.attachEvent("onclick", function (event) {
    alert("Você clicou no cabeçalho, usuário do IE!");
  });
} else if (id.addEventListener) {
  id.addEventListener("click", function (event) {
    alert("Você clicou no cabeçalho!")
  }, false);
}