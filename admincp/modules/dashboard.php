<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<style>
  /* Style cho slideshow */
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }

  .mySlides {
    display: none;
  }

  /* Style cho nút chuyển slide */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    background-color: rgba(0,0,0,0.5);
  }

  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
  }

  /* Style cho dấu trang */
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: rgba(0,0,0,0.5);
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active, .dot:hover {
    background-color: rgba(0,0,0,0.8);
  }

  /* Style cho tiêu đề và nội dung của slide */
  .slide-content {
    text-align: center;
    position: absolute;
    width: 100%;
    bottom: 15px;
    color: #f2f2f2;
  }

</style>
</head>
<body>

<div class="content" style="text-align: center;">
  <h1>Dashboard</h1>
  <p>Welcome to the Admin Dashboard.</p>
</div>

<!-- Slideshow container -->
<div class="slideshow-container">
  <!-- Full-width images with number and caption text -->
  <div class="mySlides">
    <img src="../images/dashboard1.jpg" style="width:100%">    
  </div>

  <div class="mySlides">
    <img src="../images/dashboard2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="../images/dashboard3.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>