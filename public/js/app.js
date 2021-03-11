//Get the button
let goToTop = document.getElementById("goTop");
let infoTop = document.getElementById("info-top");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollTopFunction()
};

function scrollTopFunction() {
    if (document.documentElement.scrollTop > 100) {
        goToTop.style.display = "block";
    } else {
        goToTop.style.display = "none";
    }

    if(document.documentElement.scrollTop > 100) {
        document.getElementById("header").style.top = "-70px";
    }

    if(document.documentElement.scrollTop > 300) {
        document.getElementById("header").style.top = "30px";
    }

    if(document.documentElement.scrollTop <= 100) {
        document.getElementById("header").style.top = "30px";
        document.getElementById("info-top").style.top = "0px";

    }
}

// Go to top
function goTopFunc() {
    let currentYOffset = self.pageYOffset;
    let initYOffset = currentYOffset;

    let intervalId = setInterval(function(){
        currentYOffset -= initYOffset*0.05;
        document.body.scrollTop = currentYOffset ;
        document.documentElement.scrollTop = currentYOffset;

        if(self.pageYOffset === 0){
            clearInterval(intervalId);
        }
    }, 20);
}

if(window.location.pathname === '/about-us' || window.location.pathname === '/home' || window.location.pathname === '/') {
    document.getElementById('menu1').style.borderBottom = '3px solid white';
}
if(window.location.pathname === '/news') {
    document.getElementById('menu2').style.borderBottom = '3px solid white';
}
if(window.location.pathname === '/main_service') {
    document.getElementById('menu3').style.borderBottom = '3px solid white';
}
if(window.location.pathname === '/moving_house') {
    document.getElementById('menu4').style.borderBottom = '3px solid white';
}
if(window.location.pathname === '/break_wall') {
    document.getElementById('menu5').style.borderBottom = '3px solid white';
}
if(window.location.pathname === '/contact') {
    document.getElementById('menu6').style.borderBottom = '3px solid white';
}

