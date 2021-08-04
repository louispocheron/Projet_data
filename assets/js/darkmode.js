const checkbox = document.getElementById('checkbox');
checkbox.addEventListener('change', ()=>{
  document.body.classList.toggle('dark');
  document.querySelector('header').classList.toggle('dark');
  document.querySelector('.menu__box').classList.toggle('dark');
//   document.querySelector('.card1').classList.toggle('dark');
//   document.querySelector('.card2').classList.toggle('dark');
//   document.querySelector('.card3').classList.toggle('dark');


});

console.log('coucou');