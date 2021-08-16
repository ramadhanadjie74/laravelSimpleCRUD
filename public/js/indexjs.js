const slides = document.querySelectorAll('.slide');
const kanan = document.querySelector('.kanan');
const kiri = document.querySelector('.kiri');
const dot1 = document.querySelector('.dot1');
const dot2 = document.querySelector('.dot2');
const about = document.querySelector('.about');
const aboutItem = document.querySelector('.about-item');
const outAbout = document.querySelector('.show-about');
let counter = 0;


slides.forEach(function(slide, index){
    slide.style.left =`${index * 100}%`
});


kanan.addEventListener('click',function(){
    counter++;
    perpindahan();
});

kiri.addEventListener('click',function(){
    counter--;
    perpindahan();
});

dot1.addEventListener('click',function(){
    counter++;
    perpindahan();
});

dot2.addEventListener('click',function(){
    counter--;
    perpindahan();
});

function perpindahan(){

if(counter === slides.length){
    counter = 0;
}
if(counter < 0) {
    counter = slides.length -1;
}
if(counter == 1 ) {
    dot1.style.background = 'grey';
    dot2.style.background = 'white';
}
if(counter == 0 ) {
    dot2.style.background = 'grey';
    dot1.style.background = 'white';
}


    slides.forEach(function(slide){
        slide.style.transform = `translateX(-${counter * 100}%)`;
    });
}