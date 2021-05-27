let menuMobileOpen = false;
let searchOpen = false;
categoriasOpen = false;

function openMenu() {
    let menu = document.getElementsByClassName ("menu-mobile")[0];
    let navlist = document.getElementsByClassName ("nav-list")[0];
    let doc = document.getElementsByTagName("html")[0];

    if (!menuMobileOpen) { //ABRIR PANEL        
        menu.style.color = "#FFA300";
        navlist.style.left = "0";
        menuMobileOpen = true;
        doc.style.overflow = "hidden";
    }else{ //CERRAR PANEL
        menu.style.color = "#F0F0F0";
        navlist.style.left = "-100%";
        menuMobileOpen = false;
        doc.style.overflow = "auto";
    }    
}
function openSearch() {
  let search = document.getElementsByClassName ("search-mobile")[0];
  let searchbar = document.getElementsByClassName ("searchbar")[0];

  if (!searchOpen) { //ABRIR PANEL
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    search.style.color = "#FFA300";
    searchOpen = true;
    searchbar.style.visibility = "visible";
  }else{ //CERRAR PANEL
    search.style.color = "#F0F0F0";
    searchOpen = false;
    searchbar.style.visibility = "hidden";
  }    
}
function openCategorias() {
  let bgCategorias = document.getElementsByClassName("eventos-categorias-bg")[0];
  let textCategorias = document.getElementsByClassName("eventos-categorias-text")[0];
  let masCategorias = document.getElementsByClassName("float-right")[0];
  let categoriasOpciones = document.getElementsByClassName ("eventos-categorias-list")[0];

  if (!categoriasOpen) { //ABRIR PANEL
    bgCategorias.style.margin = "1em auto 0";
    textCategorias.style.color = "#FFA300";
    masCategorias.style.color = "#FFA300";
    categoriasOpen = true;
    categoriasOpciones.style.display = "block";
  }else{ //CERRAR PANEL
    bgCategorias.style.margin = "1em auto";
    textCategorias.style.color = "#F0F0F0";
    masCategorias.style.color = "#F0F0F0";
    categoriasOpen = false;
    categoriasOpciones.style.display = "none";
  }    
}


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementsByClassName("nav")[0].style.background = "#182933";
    document.getElementsByClassName("nav-dropd-categorias-content")[0].style.background = "#182933";
  } else {
    document.getElementsByClassName("nav")[0].style.background = "none";
    document.getElementsByClassName("nav-dropd-categorias-content")[0].style.background = "none";
  }
}