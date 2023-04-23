let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}

let searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
}

var swiper = new Swiper(".home-slider", {
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});



let loadMoreBtn = document.querySelector('.packages .load-more .btn1');
let currentItem = 3;

loadMoreBtn.onclick = () => {
    let boxes = [...document.querySelectorAll('.packages .main-box .box')];
    for(var i = currentItem; i < currentItem + 3; i++){
        boxes[i].style.display = 'inline-block';
    };
    currentItem +=3;
    if(currentItem >= boxes.length){
        loadMoreBtn.style.display = 'none';
    }
}

function openNewPage(){
    window.open("clothes.php", "_blank");
}
function openNewPage1(){
    window.open("sneakers.php", "_blank");
}
function openNewPage2(){
    window.open("equipment.php", "_blank");
}
