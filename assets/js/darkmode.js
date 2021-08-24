const checkbox = document.getElementById('checkbox');
let select = [];
select = document.querySelectorAll('.menu__item');
console.log(select);

checkbox.addEventListener('change', ()=>{
  document.body.classList.toggle('dark');
  document.querySelector('header').classList.toggle('dark');
  document.querySelector('.menu__box').classList.toggle('dark');

for (let i = 0; i < count(select) ; i++) {
  select.item(i).classList.toggle('dark');
}
//   document.querySelector('.card1').classList.toggle('dark');
//   document.querySelector('.card2').classList.toggle('dark');
//   document.querySelector('.card3').classList.toggle('dark');
});

console.log('test');