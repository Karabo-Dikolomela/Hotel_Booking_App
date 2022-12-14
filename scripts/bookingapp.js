//BUTTONS TO OPEN MODALS
const modalBtn1 = document.querySelector('.modal-btn-1');
const modalBtn2 = document.querySelector('.modal-btn-2');
const modalBtn3 = document.querySelector('.modal-btn-3');
const modalBtn4 = document.querySelector('.modal-btn-4');
const modalBtn5 = document.querySelector('.modal-btn-5');
const modalBtn6 = document.querySelector('.modal-btn-6');

//MODAL SELECTORS
const modal1 = document.getElementById('modal-1');
const modal2 = document.getElementById('modal-2');
const modal3 = document.getElementById('modal-3');
const modal4 = document.getElementById('modal-4');
const modal5 = document.getElementById('modal-5');
const modal6 = document.getElementById('modal-6');

//CLOSE BUTTON SELECTORS
const closeBtn1 = document.querySelector('.close-btn-1');
const closeBtn2 = document.querySelector('.close-btn-2');
const closeBtn3 = document.querySelector('.close-btn-3');
const closeBtn4 = document.querySelector('.close-btn-4');
const closeBtn5 = document.querySelector('.close-btn-5');
const closeBtn6 = document.querySelector('.close-btn-6');


//OPEN MODALS
modalBtn1.addEventListener('click', function () {
    modal1.classList.add('open-modal');
    document.body.style.overflow = 'hidden';
    modal1.style.overflow = 'auto';
});

modalBtn2.addEventListener('click', function () {
    modal2.classList.add('open-modal');
    document.body.style.overflow = 'hidden';
    modal2.style.overflow = 'auto';
});

modalBtn3.addEventListener('click', function () {
    modal3.classList.add('open-modal');
    document.body.style.overflow = 'hidden';
    modal3.style.overflow = 'auto';
});

modalBtn4.addEventListener('click', function () {
    modal4.classList.add('open-modal');
    document.body.style.overflow = 'hidden';
    modal4.style.overflow = 'auto';
});

modalBtn5.addEventListener('click', function () {
    modal5.classList.add('open-modal');
    document.body.style.overflow = 'hidden';
    modal5.style.overflow = 'auto';
});

modalBtn6.addEventListener('click', function () {
    modal6.classList.add('open-modal');
    document.body.style.overflow = 'hidden';
    modal6.style.overflow = 'auto';
});

//CLOSE BUTTONS
closeBtn1.addEventListener('click', function () {
    modal1.classList.remove('open-modal');
    document.body.style.overflow = 'auto';
});


closeBtn2.addEventListener('click', function () {
    modal2.classList.remove('open-modal');
    document.body.style.overflow = 'auto';
});

closeBtn3.addEventListener('click', function () {
    modal3.classList.remove('open-modal');
    document.body.style.overflow = 'auto';
});

closeBtn4.addEventListener('click', function () {
    modal4.classList.remove('open-modal');
    document.body.style.overflow = 'auto';
});

closeBtn5.addEventListener('click', function () {
    modal5.classList.remove('open-modal');
    document.body.style.overflow = 'auto';
});

closeBtn6.addEventListener('click', function () {
    modal6.classList.remove('open-modal');
    document.body.style.overflow = 'auto';
});

// DISPLAY BOOKING FORM
// let div = document.getElementById('#booking-form');
// let display = 0;
// function displayBooking(){
//     if(display == 1){
//         div.style.display = "block";
//         display = 0;

// document.getElementById("#doneL").onclick = function () {
//         location.href = "#booking-form";

//     }
// }else{
//         div.style.display = "none";
//         display = 1;
//     }
// }

//  const toggleToForm = document.querySelector("#doneL");
//  const openBookingForm = document.querySelector('.booking-form-container')

//  toggleToForm.addEventListener('click', ()=> {
//     if(openBookingForm.style.display === 'none') {
//         openBookingForm.style.display = 'block';
//     } else {
//         openBookingForm.style.display = 'none';
//     }
//  })