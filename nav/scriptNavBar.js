const hamb=document.querySelector('.hambMenu');
const closeIcon=document.querySelector('.closeMenu');
const navMenu=document.querySelector('.navMenu');


hamb.addEventListener('click',()=>{
    hamb.classList.add('sparisci');
    navMenu.classList.add('apri');
})

closeIcon.addEventListener('click',()=>{
    hamb.classList.remove('sparisci');
    navMenu.classList.remove('apri');
})