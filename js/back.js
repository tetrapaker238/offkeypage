let actualSlide = 0;

window.onload = goInit;



function goInit() {
    document.getElementsByTagName("h1")[0].scrollIntoView();
}

function goArtist() {
    document.getElementById("slider").scrollIntoView();
}

function goForm() {
    document.getElementById("formulario").scrollIntoView();
}

function goContact() {
    document.getElementsByTagName("footer")[0].scrollIntoView();
}

function forwardSlider() {
    const sliderList = document.getElementById("slider").children;
    if (actualSlide < sliderList.length - 3) {
        sliderList[actualSlide].style.visibility = "hidden";
        sliderList[actualSlide].style.opacity = "0";
        sliderList[actualSlide].firstChild.valueOf().src = "";
        actualSlide++;
        sliderList[actualSlide].style.visibility = "visible";
        sliderList[actualSlide].style.opacity = "1";
    }
}

function backSlider() {
    const sliderList = document.getElementById("slider").children;
    if (actualSlide > 0) {
        sliderList[actualSlide].style.visibility = "hidden";
        sliderList[actualSlide].style.opacity = "0";
        sliderList[actualSlide].firstChild.valueOf().src = "";
        actualSlide--;
        sliderList[actualSlide].style.visibility = "visible";
        sliderList[actualSlide].style.opacity = "1";
    }
}