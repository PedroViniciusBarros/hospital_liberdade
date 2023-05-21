const menuHamburguer = document.querySelector('.menu-hamburguer');
const botaoHamburguer = document.querySelector('.menu-hamburguer span');
const menuBotoes = document.querySelector('#botoes');

menuHamburguer.addEventListener('click', function() {
  menuHamburguer.classList.toggle('active');
  menuBotoes.classList.toggle('active');
});