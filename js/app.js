const sign_in_btn = document.querySelector("#sign-in-btn");

const sign_up_btn = document.querySelector("#sign-up-btn");

const container = document.querySelector(".container");

sign_up_btn.addEventListener('click', () => {
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener('click', () => {
    container.classList.remove("sign-up-mode");
});


// --- Product Page Spotlight Image Selector

var mainImg = document.getElementsById("main-img");
var smlImg = document.getElementsByClassName("sml-img");

smlImg[0].onclick = function(){
    mainImg.src = smlImg[0].src;
};

smlImg[1].onclick = function(){
    mainImg.src = smlImg[1].src;
};

smlImg[2].onclick = function(){
    mainImg.src = smlImg[2].src;
};

smlImg[2].onclick = function(){
    mainImg.src = smlImg[3].src;
};