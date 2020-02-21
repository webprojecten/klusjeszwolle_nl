// todo wat als js uit staat?
var transFromBottom_1 = document.querySelectorAll('.transparent-from-bottom_1');
var transFromBottom_2 = document.querySelectorAll('.transparent-from-bottom_2');
var transFromBottom_3 = document.querySelectorAll('.transparent-from-bottom_3');
var transFromLeft = document.querySelectorAll('.transparent-from-left');
var transFromRight = document.querySelectorAll('.transparent-from-right');

lastScrollYTop = 0,
lastScrollY = 0,
ticking = false;
height = window.innerHeight

window.onresize = function(){
    height = window.innerHeight;
};

transLength_1 = transFromBottom_1.length;
transLength_2 = transFromBottom_2.length;
transLength_3 = transFromBottom_3.length;
transLeftLength = transFromLeft.length;
transRightLength = transFromRight.length;
const elements = [
    [transFromBottom_1, transLength_1, "bottom_1"],
    [transFromBottom_2, transLength_2, "bottom_2"],
    [transFromBottom_3, transLength_3, "bottom_3"],
    [transFromLeft, transLeftLength, "left"],
    [transFromRight, transRightLength, "right"]
];
const elementsLength = elements.length;

function onScroll() {
    lastScrollYTop = window.scrollY;
    lastScrollY = window.scrollY + height;
    requestTick();
}

function requestTick() {
    if(!ticking) {
        requestAnimationFrame(update);
        ticking = true;
    }
}

function update() {
    for(var i = 0; i < elementsLength; i++) {
        var trans = null,
        transTop  = [];
        for(var t = 0; t < elements[i][1]; t++) {
            trans = elements[i][0][t];
            transTop[t] = trans.offsetTop;
        }

        for(var t = 0; t < elements[i][1]; t++) {
            trans = elements[i][0][t];
            if(lastScrollY - 50 > transTop[t]) {
                trans.classList.add('opaque-from-' + elements[i][2]);
            } 
        }
    }
    ticking = false;
}

window.addEventListener('scroll', onScroll, false); 

// todo kijk of ik dit nodig heb
function toggleNav() {
    var width = document.getElementById("mySidebar").style.width;
    console.log(width);
    if(width === "250px"){
        document.getElementById("mySidebar").style.width = 0;
    } else {
        document.getElementById("mySidebar").style.width = "250px";
    }
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
}


// cirkel animation 
var cta_tekst = document.querySelector('#cta-tekst');
window.onload = function() {
    this.setTimeout(function(){this.cta_tekst.classList.add('opaque-from-left')}, 150);
}

// sidenav
var nav_links = document.querySelector('#nav-links');
var hamburger = document.querySelector('#hamburger-icon');

hamburger.addEventListener('click', function(){
    if(nav_links.style.width == 0){
        nav_links.style.width = '250px';
    } else {
        nav_links.style.width = null;
    }
});

