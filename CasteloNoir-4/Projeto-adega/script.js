// script.js
let currentIndex = 0;

const produtos = document.querySelectorAll('.produto');
const totalProdutos = produtos.length;
const carrossel = document.querySelector('.carrossel');

const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

prevBtn.addEventListener('click', () => {
  if (currentIndex > 0) {
    currentIndex--;
  } else {
    currentIndex = totalProdutos - 1;
  }
  atualizarCarrossel();
});

nextBtn.addEventListener('click', () => {
  if (currentIndex < totalProdutos - 1) {
    currentIndex++;
  } else {
    currentIndex = 0;
  }
  atualizarCarrossel();
});

function atualizarCarrossel() {
  const deslocamento = -currentIndex * (produtos[0].offsetWidth + 20); // largura do produto + margem
  carrossel.style.transform = `translateX(${deslocamento}px)`;
}
