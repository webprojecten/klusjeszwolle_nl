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

var nav_links = document.querySelector('#nav');
var hamburger = document.querySelector('#hamburger-icon');

hamburger.addEventListener('click', function(){
    if(nav_links.style.width == 0){
        nav_links.style.width = '300px';
    } else {
        nav_links.style.width = null;
        if (window.getComputedStyle(nav).getPropertyValue('margin-left') == '-250px') {
            let linksLogo = document.querySelector('#nav-links');
            linksLogo.style.opacity = 0;
        }
    }
});


function closeNav() {
    nav_links.style.width = null;
    if (window.getComputedStyle(nav).getPropertyValue('margin-left') == '-250px') {
        let linksLogo = document.querySelector('#nav-links');
        linksLogo.style.opacity = 0;
        setTimeout(function(){
            linksLogo.style.opacity = 1;
        }, 1000)
    }
}

// zorgt ervoor dat de nav weer op de goede plaats terechtkomt
window.onresize = function() {
    if(window.innerWidth > 996) {
        nav.style.marginLeft = "auto";
        nav_links.style.width = null;
    }
}

// fadIn 
var fade_in_1 = document.querySelector('.fadeIn_1');
var fade_in_2 = document.querySelector('.fadeIn_2');
var fade_in_3 = document.querySelector('.fadeIn_3');
window.onload = function() {
    this.setTimeout(function(){this.fade_in_1.classList.add('fade')}, 150);
    this.setTimeout(function(){this.fade_in_2.classList.add('fade')}, 150);
    this.setTimeout(function(){this.fade_in_3.classList.add('fade')}, 150);
}

// nav dropdown js
diensten_nav = document.querySelector('#diensten-nav-item');

dd_diensten = document.querySelector('#dropdown-diensten-item');

diensten_nav.addEventListener('mouseenter', function(){
    if (window.innerWidth > 996) {
        dd_diensten.classList.add('dd-show');
    }
});

diensten_nav.addEventListener('mouseleave', function(){
    if (window.innerWidth > 996) {
        let c = window.getComputedStyle(dd_diensten).getPropertyValue('border-top-style');
        if (c !== 'hidden') {
            dd_diensten.classList.remove('dd-show');
        }
    }
});

dd_diensten.addEventListener('mouseleave', function(){
    if (window.innerWidth > 996) {
        let c = window.getComputedStyle(diensten_nav).getPropertyValue('border-top-style');
        if (c !== 'hidden') {
            dd_diensten.classList.remove('dd-show');
        }
    }
});

// responsive dd nav
var nav = document.querySelector('#nav');
var logo = document.querySelector('#logo');
diensten_nav.addEventListener('click', function(e){
    if (window.innerWidth <= 996) {
        e.preventDefault();
        logo.style.marginLeft = '50px';
        nav.style.marginLeft = "-250px";
        dd_diensten.classList.add('dd-resp-show');
    }
});

var dd_cl_nav = document.querySelectorAll('.close-dd-nav');
for ( let i = 0; i < dd_cl_nav.length; i++ ) {
    dd_cl_nav[i].addEventListener('click', function(){
        nav.style.marginLeft = "0%";
        console.log(dd_cl_nav[i].parentElement);
        dd_cl_nav[i].parentElement.classList.remove('dd-resp-show');
    });
}

