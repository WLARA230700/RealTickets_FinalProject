let menuMobileOpen = false;

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

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementsByClassName("nav")[0].style.background = "#182933";
  } else {
    document.getElementsByClassName("nav")[0].style.background = "none";
  }
}