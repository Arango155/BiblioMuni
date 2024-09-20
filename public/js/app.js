
var displayc=0;

var displaya=0;

var displaye =0;



var display2=0;

var display=0;
document.addEventListener("DOMContentLoaded", function() {
    var body = document.getElementById('body');
    var icon = document.getElementById('icon');
    var table = document.getElementById('table');
    var table2 = document.getElementById('table2');
    var display_Dark = localStorage.getItem('darkMode');

    if (display_Dark === '1') {
        // Apply dark mode settings
        body.classList.add('dark');
        icon.classList.remove('bi-moon');
        icon.classList.add('bi-sun');
        table.classList.add("table-dark");
        table2.classList.add("table-dark");
    } else {
        // Apply light mode settings
        body.classList.remove('dark');
        icon.classList.remove('bi-sun');
        icon.classList.add('bi-moon');
        table.classList.remove("table-dark");
        table2.classList.remove("table-dark");
    }
});

function darkMode() {
    var body = document.getElementById('body');
    var icon = document.getElementById('icon');
    var table = document.getElementById('table');
    var table2 = document.getElementById('table2');
    var display_Dark = localStorage.getItem('darkMode');

    if (display_Dark === '1') {
        // Switch to light mode
        localStorage.setItem('darkMode', '0'); // Update localStorage to light mode
        body.classList.remove('dark');
        icon.classList.remove('bi-sun');
        icon.classList.add('bi-moon');
        table.classList.remove("table-dark");
        table2.classList.remove("table-dark");

    } else {
        // Switch to dark mode
        localStorage.setItem('darkMode', '1'); // Update localStorage to dark mode
        body.classList.add('dark');
        icon.classList.remove('bi-moon');
        icon.classList.add('bi-sun');
        table.classList.add("table-dark");
        table2.classList.add("table-dark");

    }
}


// Check localStorage on page load and apply the appropriate theme
window.onload = function() {
    var display_Dark = localStorage.getItem('darkMode');
    var body = document.getElementById('body');
    var icon = document.getElementById('icon');

    if (display_Dark === '1') {
        body.classList.add('dark');
        icon.classList.remove('bi-moon');
        icon.classList.add('bi-sun');
    } else {
        body.classList.remove('dark');
        icon.classList.remove('bi-sun');
        icon.classList.add('bi-moon');
    }
};




function closeMenu() {
    document.getElementById('menu').style.width = '0';
}
function openMenu2() {
    if(display2==0){
        document.getElementById('menu2').style.width = '100%'
        display2=1;
    } else{
        document.getElementById('menu2').style.width = '0';
        display2=0;
    }



}



function closeMenu2() {
    document.getElementById('menu2').style.width = '0';
}

function showC(){
    if(displayc==0){

        document.getElementById('submenu').classList.add('display');
        document.getElementById('arrowc').classList.remove('bi-arrow-right');
        document.getElementById('arrowc').classList.add('bi-arrow-down');
        displayc=1;
    } else if (displayc==1){
        document.getElementById('submenu').classList.remove('display');
        document.getElementById('arrowc').classList.add('bi-arrow-right');
        document.getElementById('arrowc').classList.remove('bi-arrow-down');
        displayc=0;
    }

}

function showA(){
    if(displaya==0){

        document.getElementById('submenu2').classList.add('display');
        document.getElementById('arrowa').classList.remove('bi-arrow-right');
        document.getElementById('arrowa').classList.add('bi-arrow-down');
        displaya=1;

    } else if (displaya==1){
        document.getElementById('submenu2').classList.remove('display');
        document.getElementById('arrowa').classList.add('bi-arrow-right');
        document.getElementById('arrowa').classList.remove('bi-arrow-down');
        displaya=0;
    }

}

function showE(){
    if(displaye==0){

        document.getElementById('submenu3').classList.add('display');
        document.getElementById('arrowe').classList.remove('bi-arrow-right');
        document.getElementById('arrowe').classList.add('bi-arrow-down');
        displaye=1;

    } else if (displaye==1){
        document.getElementById('submenu3').classList.remove('display');
        document.getElementById('arrowe').classList.add('bi-arrow-right');
        document.getElementById('arrowe').classList.remove('bi-arrow-down');
        displaye=0;
    }

}

let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.carousel-images img');
    const totalSlides = slides.length;

    if (index >= totalSlides) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = totalSlides - 1;
    } else {
        currentSlide = index;
    }

    const offset = -currentSlide * 100;
    document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`;
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

setInterval(nextSlide, 3000);

