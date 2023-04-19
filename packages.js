const cards = document.querySelectorAll('.card');
const loadMoreBtn = document.getElementById('load-more-btn');
let visibleCards = 0;

function showNextCards() {
  for (let i = visibleCards; i < visibleCards + 3; i++) {
    if (cards[i]) {
      cards[i].style.display = 'block';
    }
  }
  visibleCards += 3;
  if (visibleCards >= cards.length) {
    loadMoreBtn.style.display = 'none';
  }
}

loadMoreBtn.addEventListener('click', showNextCards);

function showInitialCards() {
  for (let i = 0; i < 3; i++) {
    cards[i].style.display = 'block';
  }
  if (visibleCards >= cards.length) {
    loadMoreBtn.style.display = 'none';
  }
}


showInitialCards();

/*let currentItem = 3; 
const loadMoreBtn = document.querySelector(' .load-more ');

loadMoreBtn.onclick = () =>{ 

let boxes = [ ...document.querySelectorAl1('.container .card mb-4')]; 

for (var i = currentItem; i < currentItem + 3; i++){ 
boxes [i].style.display = 'inline-block';
}; 

currentItem += 3; 

if(currentItem >= boxes. length) {
loadMoreBtn.style.display = 'inline-block'; 
} 
}*/
