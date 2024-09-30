// slider logic
var counter = 0;
const images = [];
images.push(
  "./img/slide4.jpg",
  "./img/slide2.jpg",
  "./img/slide3.jpg",
  "./img/slide1.jpeg",
  "./img/slide5.jpg"
);
const slideshow = document.getElementById("gallery-slideshow");
slideshow.style.backgroundImage = "url('" + images[0] + "')";
function nextImg() {
  console.log(images[counter]);
  console.log(counter);
  slideshow.style.backgroundImage = "url('" + images[counter] + "')";
  counter++;
  console.log(images[counter]);
  console.log(counter);
  reset();
}
function prevImg() {
  slideshow.style.backgroundImage = "url('" + images[counter] + "')";
  counter--;
  reset();
}
function reset() {
  if (counter > 4) {
    counter = 0;
  }
  if (counter < 0) {
    counter = 4;
  }
}

// validate form logic

function validateForm() {
  var formInputs = document.forms["Form"].getElementsByTagName("input");
  for (var i = 0; i < formInputs.length; i++) {
    if (formInputs[i].value == "") {
      alert("Fill in all the fields");
      return false;
    }
  }
  return true;
}
// reservation logic
document
  .getElementById("reservationForm")
  .addEventListener("submit", function (event) {
    const date = this.Date.value;
    const firstName = this.FirstName.value.trim();
    const lastName = this.LastName.value.trim();
    const phoneNumber = this.Number.value.trim();

    // phone number validation
    const phonePattern = /^(06\d{8}|\+\d{1,3}\d{9,12})$/;

    if (!date || !firstName || !lastName || !phoneNumber) {
      event.preventDefault();
      alert("Please fill in all required fields.");
    } else if (!phonePattern.test(phoneNumber)) {
      event.preventDefault();
      alert(
        "Please enter a valid phone number. It should start with '06' or a country code (e.g., '+31')."
      );
    } else {
      alert("Thank you for your reservation!");
    }
  });
