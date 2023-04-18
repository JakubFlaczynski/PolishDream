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
