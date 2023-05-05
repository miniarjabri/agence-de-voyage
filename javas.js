
  window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.querySelector("nav").classList.add("active");
  } else {
    document.querySelector("nav").classList.remove("active");
  }
}

var images = ["02e63351052beb14ff3a2d457353db87.jpg", "b9eb62ba212da8834249ea92b1a32e24.jpg","b0ac75514152ce936c9b8ffeaae133bc.jpg"]; // tableau contenant les chemins d'accès des images
var currentImageIndex = 0; // index de l'image actuelle
var scroll_main_image_prev=document.getElementsById("b1");
var scroll_main_image_next=document.getElementsById("b2");

function ChangeImage1(){
  var image = document.getElementById("main-image");
  currentImageIndex = (currentImageIndex +images.length - 1) % images.length; // passer à l'image suivante dans le tableau
  image.style.backgroundImage = "url('" + images[currentImageIndex]+"')"; 
  image.style.backgroundPosition="center";
  image.style.backgroundSize = "100% 100%";
  image.style.animation='scroll 10s linear infinite';
  image.style.transition='transform 0.5s ease';
};
function ChangeImage2(){
  var image=document.getElementById("main-image");
  currentImageIndex = (currentImageIndex + 1) % images.length; // passer à l'image suivante dans le tableau
  image.style.backgroundImage = "url('" + images[currentImageIndex]+"')"; 
  image.style.backgroundPosition="center";
  image.style.backgroundSize = "100% 100%";
  image.style.animation='scroll 10s linear infinite';
};




 /* const nextButtons = document.querySelectorAll('.next');
  const columns = document.querySelectorAll('.col-md-4');
/*
  // fonction pour faire défiler les éléments suivants de la classe "col-md-4"
  function scrollNextColumns() {
    const visibleColumns = document.querySelectorAll('.col-md-4:not(.hidden)');
    const firstVisibleColumn = visibleColumns[0];
    const lastVisibleColumn = visibleColumns[visibleColumns.length - 1];
    const nextVisibleColumn = lastVisibleColumn.nextElementSibling;
    const nextNextVisibleColumn = nextVisibleColumn.nextElementSibling;

    if (nextVisibleColumn) {
      firstVisibleColumn.classList.add('hidden');
      nextVisibleColumn.classList.remove('hidden');
    }

    if (!nextNextVisibleColumn) {
      this.classList.add('hidden');
    }
    const container = document.querySelector(".carousel-container");
    container.scroll({
      left: nextSlide.offsetLeft,
      behavior: "smooth"
    });
  }

  const prevBtn = document.querySelector("prev-btn");
  const nextBtn = document.querySelector("next-btn");
  const carouselItems = document.querySelectorAll(".carousel-item");
  let currentIndex = 0;
  
  nextBtn.addEventListener("click", () => {
    const currentSlide = carouselItems[currentIndex];
    currentSlide.classList.remove("is-visible");
    currentSlide.classList.add("hidden");
  
    currentIndex = (currentIndex + 1) % carouselItems.length;
    const nextSlide = carouselItems[currentIndex];
    nextSlide.classList.remove("hidden");
    nextSlide.classList.add("is-visible");
    
  
    
  });
  
  prevBtn.addEventListener("click", () => {
    const currentSlide = carouselItems[currentIndex];
    currentSlide.classList.remove("is-visible");
    currentSlide.classList.add("hidden");
  
    currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
  
    const nextSlide = carouselItems[currentIndex];
    nextSlide.classList.remove("hidden");
    nextSlide.classList.add("is-visible");
  
    const container = document.querySelector(".carousel-container");
    container.scroll({
      left: nextSlide.offsetLeft,
      behavior: "smooth"
       
    });
  });
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const carousel = document.querySelector('.carousel-container');
const carouselItems = document.querySelectorAll('article');
let currentIndex = 0;
const maxIndex = carouselItems.length - 1;



// Fonction pour mettre à jour la visibilité des articles
function updateVisibleItems() {
  for(let i = 0; i <= maxIndex; i++) {
    if(i < currentIndex || i > currentIndex + 3) {
      carouselItems[i].classList.remove('is-visible');
      carouselItems[i].classList.add('hidden');
    } else {
      carouselItems[i].classList.remove('hidden');
      carouselItems[i].classList.add('is-visible');
    }
  }
}

// Fonction pour gérer le clic sur le bouton "Précédent"
prevBtn.addEventListener('click', () => {
  if(currentIndex > 0) {
    currentIndex--;
    updateVisibleItems();
  }
});

// Fonction pour gérer le clic sur le bouton "Suivant"
nextBtn.addEventListener('click', () => {
  if(currentIndex < maxIndex - 3) {
    currentIndex++;
    updateVisibleItems();
  }
});
const carousel = document.querySelector('carousel');
const prevBtn = document.querySelector('prev-btn');
const nextBtn = document.querySelector('next-btn');
const carouselItems = document.querySelector('.carousel-container');
const carouselItem = document.querySelectorAll('.carousel-item');
let currentIndex = 0;

// Set initial state
carouselItems.style.transform = `translateX(-${(carouselItem[0].clientWidth + 20) * 4}px)`;
/*carouselItem[0].classList.add('visible');
carouselItem[1].classList.add('visible');
carouselItem[2].classList.add('visible');
carouselItem[3].classList.add('visible');

// Handle next button click
nextBtn.addEventListener("click", () => {
 if (currentIndex >= carouselItem.length - 4) {
    return;
  }
  currentIndex++;
  carouselItems.style.transform = `translateX(-${(carouselItem[0].clientWidth + 20) * currentIndex}px)`;
  carouselItem[currentIndex + 3].classList.add('visible');
  //carouselItem[currentIndex - 1].style.display= "none";
  
});

// Handle prev button click
prevBtn.addEventListener("click", () => {
  if (currentIndex <= 0) {
    return;
  }
  currentIndex--;
  carouselItems.style.transform = `translateX(-${(carouselItem[0].clientWidth) + currentIndex}px)`;
  carouselItem[currentIndex].classList.add('visible');
  carouselItem[currentIndex + 4].classList.remove('visible');
  });
  // Automatically move to next slide every 5 seconds
  setInterval(() => {
  if (currentIndex >= carouselItem.length - 4) {
  currentIndex = 0;
  } else {
  currentIndex++;
  }
  carouselItems.style.transform =` translateX(-${(carouselItem[0].clientWidth + 20) * currentIndex}px)`;
  carouselItem[currentIndex + 3].classList.add('visible');
  carouselItem[currentIndex - 1].classList.remove('visible');
  }, 5000);*/

  /*$(document).ready(function() {

    // Variables
    var carousel = $(".carousel-container");
    var items = $("#carousel-item");
    var prevBtn = $(".prev-btn");
    var nextBtn = $(".next-btn");
    var itemWidth = items.first().outerWidth();
    var visibleItems = Math.floor(carousel.outerWidth() / itemWidth);
    var currentItem = 0;
    
    // Move carousel to current item
    function goToItem(index) {
      currentItem = index;
      var offset = -1 * currentItem * itemWidth;
      carousel.css("transform", "translateX(" + offset + "px)");
      updateButtons();
    }
    
    // Update button state
    function updateButtons() {
      prevBtn.prop("disabled", currentItem === 0);
      nextBtn.prop("disabled", currentItem === items.length - visibleItems);
    }
    
    // Bind events to buttons
    prevBtn.click(function() {
      if (currentItem > 0) {
        goToItem(currentItem - 1);
      }
    });
    
    nextBtn.click(function() {
      if (currentItem < items.length - visibleItems) {
        goToItem(currentItem + 1);
      }
    });
    
    // Initialize
    updateButtons();
  
  });

  const carousel = document.querySelector('.carousel');
const carouselContainer = document.querySelector('.carousel-container');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const carouselItems = document.querySelectorAll('#carousel-item');

let currentPosition = 0;
const itemWidth = carouselItems[0].offsetWidth;

nextBtn.addEventListener('click', () => {
  currentPosition -= itemWidth;
  if (currentPosition < -((carouselItems.length - 1) * itemWidth)) {
    currentPosition = 0;
  }
  carouselContainer.style.transform = `translateX(${currentPosition}px)`;
});

prevBtn.addEventListener('click', () => {
  currentPosition += itemWidth;
  if (currentPosition > 0) {
    currentPosition = -((carouselItems.length - 1) * itemWidth);
  }
  carouselContainer.style.transform = `translateX(${currentPosition}px)`;
});


var articlesList = document.querySelector(".carousel-container")
var articleWidth = articlesList.children[0].offsetWidth;
var articlesCount = articlesList.children.length;
let currentArticle = 0;

function defiler_article_gauche() {
  currentArticle = Math.max(currentArticle - 1, 0);
  articlesList.style.transform = `translateX(${-currentArticle * articleWidth}px)`;
};

function defiler_article_droite() {
  currentArticle = Math.min(currentArticle + 1, articlesCount - 1);
  articlesList.style.transform = `translateX(${-currentArticle * articleWidth}px)`;
};*/



let currentPosition = 0; // définir la position actuelle à 0
function defiler1(){
  var carouselContainer = document.querySelector(".carsouel-container");
  var articles = document.getElementsByName("carsoul-item");
  var image = document.getElementById("main-image");
  image.style.backgroundImage = "url('02e63351052beb14ff3a2d457353db87.jpg')"; 
  articles[0].style.transform="translateX(-20%)";
  carouselContainer.style.transform="translateX(-20%)";

};





function defiler2(){






}