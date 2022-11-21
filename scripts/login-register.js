// LOGIN AND REGISTER FUNCTIONS //

// LOGIN FORM
document.querySelector("#show-login").addEventListener("click", function() {
    document.querySelector(".popup").classList.add("active");
});
document.querySelector(".popup .close-btn").addEventListener("click", function() {
    document.querySelector(".popup").classList.remove("active");
});
 document.querySelector("#doneL").addEventListener("click", function() {
    // document.querySelector(".popup");
     document.querySelector(".popup").classList.remove("active");
 });

//REGISTER
document.querySelector("#show-register").addEventListener("click", function() {
    document.querySelector(".popup1").classList.add("active");
});
document.querySelector(".popup1 .close-btn1").addEventListener("click", function() {
    document.querySelector(".popup1").classList.remove("active");
});
document.querySelector("#doneR").addEventListener("click", function() {
    document.querySelector(".popup").classList.add("active");
    document.querySelector(".popup1").classList.remove("active");
});