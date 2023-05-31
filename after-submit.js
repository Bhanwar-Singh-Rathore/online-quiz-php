'use strict';


  const modal = document.querySelector('.modal');
  const overlay = document.querySelector('.overlay');
  const btnCloseModal = document.querySelector('.close-modal');
  const btnsOpenModal = document.querySelectorAll('.submit ,.js');
  const signup = document.querySelector('.button').addEventListener('click',function(){
    signup.classList.remove('modal');
  });
//   const hard=document.querySelector('.color1');
//   const hard1=document.querySelector('.btn');
  
// // hard.addEventListener('click',function(){

// // hard.classList.add('qut')

// // })
// if(hard=hard1){
//   hard.addEventListener('click',function(){

//     .classList.add('hidden');
//   })
// };

















  const openModal = function () {
    modal.classList.remove('hidden');
    overlay.classList.remove('hidden');
  };
  const signupbtn = function (){
    modal.classList.remove('hidden');

  }
  
  const closeModal = function () {
    modal.classList.add('hidden');
    overlay.classList.add('hidden');
  };
//   btnCloseModal.addEventListener('click',function(){
// btnCloseModal.classList.add('navbarmain');

//   })
  
  for (let i = 0; i < btnsOpenModal.length; i++)
    btnsOpenModal[i].addEventListener('click', openModal);
  console.log();
  btnCloseModal.addEventListener('click', closeModal);
  overlay.addEventListener('click', closeModal);
  
  document.addEventListener('keydown', function (e) {
    // console.log(e.key);
    if(modal=closeModal){
        signup.classList.remove('modal');
    }
  
    if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
      closeModal();
    }
  });
  
  document.querySelector