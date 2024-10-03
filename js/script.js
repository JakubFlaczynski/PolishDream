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

    // Updated phone number validation pattern
    const phonePattern = /^\+?[1-9]\d{1,14}$/;

    if (!date || !firstName || !lastName || !phoneNumber) {
      event.preventDefault();
      alert("Please fill in all required fields.");
    } else if (!phonePattern.test(phoneNumber)) {
      event.preventDefault();
      alert(
        "Please enter a valid phone number. It can include country codes (e.g., '+123') and must be between 7 and 15 digits."
      );
    } else {
      alert("Thank you for your reservation!");
    }
  });
