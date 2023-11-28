window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
})

window.addEventListener("scroll", function () {
  var header = document.querySelector(".chatbox");
  header.classList.toggle("sticky", window.scrollY > 0);
  if (window.scrollY > 10) {
    header.style.visibility = "visible"
  } else {
    header.style.visibility = "hidden"
  }

  // uncomment out code later
})

window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");
  // document.documentElement.scrollTop = 0;
  setTimeout(() => {
    loader.classList.add("loader--hidden");
    loader.addEventListener("transitionend", () => {
      if (document.querySelector(".loader")) {
        document.body.removeChild(loader);
        document.body.style.overflow = "visible";
      }
    });
  }, 1000);
});

// Form JS
var signupelement = document.querySelector(".signuplink")
var signinelement = document.querySelector(".signinlink")

var signup = document.querySelector(".signup")
var login = document.querySelector(".login")

signupelement.addEventListener('click', () => {
  login.style.display = 'none'
  login.style.visibility = 'hidden'
  signup.style.visibility = 'visible'
  signup.style.margin = '24vh 0 24vh 0'
  signup.style.display = "flex"
})

signinelement.addEventListener('click', () => {
  signup.style.display = 'none'
  signup.style.visibility = 'hidden'
  login.style.visibility = 'visible'
  login.style.margin = '24vh 0 24vh 0'
  login.style.display = "flex"
})

// index.html page to login.html buttons functionality
function signinclick() {
  window.location.href = "/Programming/Template/webpages/login.php"
}

function signupclick() {
  window.location.href = "/Programming/Template/webpages/login.php"
  login.style.display = 'none'
  login.style.visibility = 'hidden'
  signup.style.visibility = 'visible'
  signup.style.margin = '24vh 0 24vh 0'
  signup.style.display = "flex"

  // needs to be fixed


}

// function chatbotbuttonclick() {
//   // var inputbox = document.querySelector(".chatbutton")
//   var inputinput = document.querySelector(".chatinput")
//   if (inputinput.style.display == "none") {
//     inputinput.style.display == "block"
//   }
//   else if (inputinput.style.display == "block") {
//     inputinput.style.display == "none"
//   }
// }