const price = document.querySelector('.price');
const chest = document.querySelector('.chest');

chest.addEventListener('click', event => {
  chest.classList.add('active');
  price.classList.add('active');
});
