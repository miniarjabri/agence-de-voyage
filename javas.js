
  window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.querySelector("nav").classList.add("active");
  } else {
    document.querySelector("nav").classList.remove("active");
  }
}

var images = ["https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80", "b9eb62ba212da8834249ea92b1a32e24.jpg","b0ac75514152ce936c9b8ffeaae133bc.jpg"]; // tableau contenant les chemins d'accès des images
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





