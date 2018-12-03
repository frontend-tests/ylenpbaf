/* TOGGLE DISPLAY PRODUCTS */
function displayProducts(id) {
   var e = document.getElementById(id);
   if (e.style.display == 'block') {
     e.style.display = 'none';
   }
   else {
     e.style.display = 'block';
   }
}

/* TOGGLE SIDEBAR COLOR */
function sidebarColor() {
   var e = document.getElementById("sidebar");
   e.classList.toggle("sidebar-colored");
}

/* CHANGE SIDEBAR CONTENT */
function sidebarText() {
  var e = document.getElementById("sidebar");
  var text = "<p class='sidebar-text'>Hola Mundo!</p>";
  if (e.innerHTML === "") {
    e.innerHTML = text;
  } else {
    e.innerHTML = "";
  }
}

/* SUBMENU JS */
window.onload = function jsonMenu() {
  var e = document.getElementById("dropdown-menu");
  var JSON = {
    submenu: [
      {titulo: 'Ropa', url: '/ropa.html'},
      {titulo: 'Electronica', url: '/electronica.html'},
      {titulo: 'Higiene', url: '/higiene.html'},
      {titulo: 'Alimentos', url: '/alimentos.html'},
      {titulo: 'Otros', url: '/otros.html'}
    ]
  }
  e.innerHTML += "<li><small>JSON menu</small></li>";
  for (i in JSON.submenu) {
    e.innerHTML += "<li><a href='"+JSON.submenu[i].url+"'>"+JSON.submenu[i].titulo+"</a></li>";
  }
}
