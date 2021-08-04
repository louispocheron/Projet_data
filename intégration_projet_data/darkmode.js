const checkbox = document.getElementById('checkbox');

checkbox.addEventListener('change', ()=>{
  document.body.classList.toggle('dark');
  document.querySelector('header').classList.toggle('dark');
  document.querySelector('.card1').classList.toggle('dark');
  document.querySelector('.card2').classList.toggle('dark');
  document.querySelector('.card3').classList.toggle('dark');

  
});

// const checkbox1 = document.getElementById('checkbox');
// checkbox1.addEventListener('change', ()=>{
//   document.header.classList.toggle('dark');
// })
