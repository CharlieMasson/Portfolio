var burger = document.getElementById("burgerDisplay");
var menu = document.getElementById("mobileMenu");
var flipped = false;

function DisplayMenu(){
    menu.classList.add("animateMenu");
}

function HideMenu(){

    if (menu.classList.contains("animateMenu")){
    
        menu.classList.remove("animateMenu");
        flipped = false;
        burger.classList.add("flipendoLeft");
        burger.classList.remove("flipendoRight");
    }
}

window.addEventListener("resize", function Hide(){
    HideMenu();
}, true);

burger.addEventListener("click", function flip(){
    if (flipped == false){
        DisplayMenu();
        burger.classList.add("flipendoRight");
        burger.classList.remove("flipendoLeft");
        flipped = true;
    }
    else{
        HideMenu();
        burger.classList.add("flipendoLeft");
        burger.classList.remove("flipendoRight");
        flipped = false;
    }
} )