
  window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.querySelector("nav").classList.add("active");
  } else {
    document.querySelector("nav").classList.remove("active");
  }
}

var images = ["https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80","https://i.pinimg.com/736x/14/31/6f/14316f6fcd04b8edb51719b13d50def2.jpg","https://cdn.concreteplayground.com/content/uploads/2022/12/jezael-melgoza-alY6_OpdwRQ-unsplash.jpg","https://cdn.wallpapersafari.com/10/53/UH4FAw.jpg","https://e0.pxfuel.com/wallpapers/484/378/desktop-wallpaper-beach-mac-beach.jpg"]; // tableau contenant les chemins d'accès des images
var currentImageIndex = 0; // index de l'image actuelle

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
function toggleDropdown() {
  var dropdown = document.querySelector(".dropdown");
  dropdown.classList.toggle("show");
}

function showDropdown() {
  var dropdown = document.querySelector(".dropdown");
  dropdown.classList.add("show");
}
function hideDropdown() {
  var dropdown = document.getElementById("dropdownMenu");
  dropdown.classList.remove("show");
}




