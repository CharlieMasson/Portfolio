var body = document.body;
body.classList.add("noScroll");
var firstPage = document.getElementById("firstPage");
var button = document.getElementById("buttonAccess");
var load = document.getElementById("loading");
var buttonWrap = document.getElementById("buttonWrapper");
var myName = document.getElementById("loadName");
var text = document.getElementById("loadText");
var opacity = 0;
var intervalID = 0;
var closing = false;

buttonWrapper.classList.add("noDisplay");



window.addEventListener("load", function(){
    buttonWrapper.classList.remove("noDisplay");
    load.classList.add("noDisplay");
})

function CloseFirstPage(){
    door.classList.add("fa-door-open");
    closing = true;
    setInterval(hide, 1);
    opacity = Number(window.getComputedStyle(body).getPropertyValue("opacity"));
    button.classList.add("noClick");

    function hide(){
        if(opacity>0){
        opacity = opacity-0.02;
        firstPage.style.opacity=opacity;
        }
        else{
            clearInterval(intervalID);
            firstPage.classList.add("noDisplay");
        }
        body.classList.remove("noScroll");
    }
}

function OpenDoor(){
    door.classList.remove("fa-door-closed");
    door.classList.add("fa-door-open");
}

function CloseDoor(){
    if (closing == false){
        door.classList.remove("fa-door-open");
        door.classList.add("fa-door-closed");
    }
    else{
        door.classList.remove("fa-door-closed");
    door.classList.add("fa-door-open");
    }
}