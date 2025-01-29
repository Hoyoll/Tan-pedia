<!DOCTYPE html>
<html>
<head>
<title>Tan. Pedia</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>Tan</b> Pedia</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="<?= esc(base_url('collections')) ?>" class="w3-bar-item w3-button">Collections</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="<?= out(base_url("res/img/cristmast.jpg")) ?>" alt="Architecture" width="1500" height="500">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min">
        <b>Tan</b></span> 
        <span class="w3-hide-small w3-white w3-padding w3-text-dark-grey">Pedia</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Products</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">New Phones</div>
        <img src="/w3images/house5.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Brick Phones</div>
        <img src="/w3images/house2.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Retro Phones</div>
        <img src="/w3images/house3.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Trade-Ins</div>
        <img src="/w3images/house4.jpg" alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>We sell hope. Kualitas adalah kunci
    </p>
  </div>

  <div class="w3-row-padding w3-grayscale">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Get in touch!</h3>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="<?= out(base_url("res/img/mash.png")) ?>" alt="John" style="width:100%">
      <h3>Effendi Saputra</h3>
      <p class="w3-opacity">CEO & Founder</p>
      <p>Jangan biarkan hatimu meninggalkanmu, kecuali jika otakmu tumbuh kaki dan mengikutinya</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="<?= out(base_url("res/img/imaginasitomara.jpg")) ?>" alt="Jane" style="width:100%">
      <h3>Tomara Indrajaya</h3>
      <p class="w3-opacity">Architect</p>
      <p>Pee pee</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="<?= out(base_url("res/img/kezia.webp"))?>" alt="Mike" style="width:100%">
      <h3>Tan, kezia</h3>
      <p class="w3-opacity">Architect</p>
      <p>Poo poo</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your next project.</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
  
<!-- Image of location/map -->
<div class="w3-container">
  <img src="/w3images/map.jpg" class="w3-image" style="width:100%">
</div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>
</html>
