const menu_icon = document.getElementById("menu_icon");
const close_menu = document.getElementById("close_menu");
const mobil_menu = document.getElementById("mobil_menu");
const mobil_menu_products = document.getElementById("mobil_menu_products");
const mobil_menu_submenu = document.getElementById("mobil_menu_submenu");

menu_icon.addEventListener("click", ()=> {
    if (mobil_menu.style.display == "none") {
        mobil_menu.style.display = "block";
    }else{
        mobil_menu.style.display = "none";
    }
})

close_menu.addEventListener("click", ()=> {
    mobil_menu.style.display = "none";
})

mobil_menu_products.addEventListener("click", ()=> {
    if (mobil_menu_submenu.style.display == "none") {
        mobil_menu_submenu.style.display = "block";
        mobil_menu_products.style.backgroundColor = "#606060";
    }else{
        mobil_menu_submenu.style.display = "none";
        mobil_menu_products.style.backgroundColor = "#212121";
    }
})