<!DOCTYPE html>
<html lang="mk">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Stylens Production</title>
  <link rel="stylesheet" href="styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;1,500&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Lora', serif;
      background-color: #0d0d0d;
      color: white;
    }
    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      background-color: black;
      padding: 10px;
      margin: 0;
    }
    nav ul li {
      margin: 0 15px;
    }
    nav ul li a {
      color: #FFD700;
      text-decoration: none;
      font-weight: bold;
    }
    header img.bottom-logo {
      display: block;
      max-width: 300px;
      margin: 20px auto 10px;
    }
    h2 {
      color: #FFD700;
      text-align: center;
      margin-top: 40px;
    }
    section {
      padding: 20px;
      text-align: center;
    }
    .gallery img,
    .insta-grid img {
      width: 100%;
      max-width: 300px;
      margin: 10px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(255,255,255,0.1);
    }
    .insta-grid,
    .gallery {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      padding: 10px 20px;
    }
    footer {
      text-align: center;
      background-color: black;
      color: #ccc;
      padding: 20px;
    }
    footer a {
      color: #FFD700;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <header>
    <img src="images/logo.jpeg" alt="Stylens Logo" class="bottom-logo" />
    <nav>
      <ul>
        <li><a href="#home">Дома</a></li>
        <li><a href="#about">За Нас</a></li>
        <li><a href="#portfolio">Портфолио</a></li>
        <li><a href="#packages">Пакети</a></li>
        <li><a href="#client">Клиентска Зона</a></li>
        <li><a href="#instagram">Инстаграм</a></li>
        <li><a href="#contact">Контакт</a></li>
      </ul>
    </nav>
  </header>

  <section id="home">
    <h2>Your Story, Through Our Lens.</h2>
  </section>

  <section id="about">
    <h2>За Нас</h2>
    <p>Stylens Production – Your Partner for Perfect Memories</p>
    <p>Welcome to Stylens Production, your destination for creative and professional photography in Ohrid, Struga, and the surrounding area.</p>
    <p><strong>We offer:</strong><br>
    Portraits: Personal, family, and corporate portraits.<br>
    Weddings: Magical wedding photos that capture your love.<br>
    Commercial Photography: Professional images for your company or products.<br>
    Creative Projects: Artistic portraits and special events.</p>
    <p>Our team uses the latest equipment for top quality and creativity.</p>
    <p><strong>Why Choose Us?</strong><br>
    Personalized service and attention to detail.<br>
    Fast turnaround and competitive prices.<br>
    Friendly and professional atmosphere.</p>
    <p>Contact us at +389 78 929 990 / +389 78 710 810 or visit our Facebook and Instagram profiles.</p>
  </section>
<section id="portfolio">
  <h2>Портфолио</h2>
  <div class="portfolio-tabs">
    <button onclick="showGallery('wedding')">Wedding</button>
    <button onclick="showGallery('portrait')">Portrait</button>
    <button onclick="showGallery('occasion')">Occasion</button>
  </div>

  <div class="gallery-group" id="wedding" style="display: block;">
    <img src="images/portfolio1.jpg" alt="Wedding 1" onclick="openModal(this)">
    <img src="images/portfolio5.jpg" alt="Wedding 2" onclick="openModal(this)">
  </div>

  <div class="gallery-group" id="portrait" style="display: none;">
    <img src="images/portfolio2.jpg" alt="Portrait 1" onclick="openModal(this)">
    <img src="images/359968145_254302720718969_2354321961745956978_n.jpg" alt="Portrait 2" onclick="openModal(this)">
  </div>

  <div class="gallery-group" id="occasion" style="display: none;">
    <img src="images/portfolio3.png" alt="Occasion 1" onclick="openModal(this)">
    <img src="images/portfolio4.jpg" alt="Occasion 2" onclick="openModal(this)">
  </div>
</section>

<!-- Modal for image popup -->
<div id="modal" class="modal" onclick="closeModal()">
  <span class="close">&times;</span>
  <img class="modal-content" id="modal-img">
</div>

  
  <script>
  function showSlides(className) {
    let slides = document.getElementsByClassName(className);
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(() => showSlides(className), 3000); // Change image every 3 seconds
  }
  
  showSlides("wedding");
  showSlides("portrait");
  showSlides("occasion");
  </script>
  
  <style>
  .slideshow-container {
    max-width: 300px;
    position: relative;
    margin: auto;
  }
  .mySlides {
    display: none;
    width: 100%;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(255,255,255,0.1);
    transition: 0.5s ease-in-out;
  }
  .portfolio-category {
    margin-bottom: 40px;
  }
  </style>
  <section id="gallery"></section>  
    </div>
    <div class="text-center">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
    <p>Погледнете ги нашите најдобри фотографии и уверете се во квалитетот на нашата работа.</p>    
  </section>

  <section id="packages">
    <h2>Пакети</h2>
    <div class="packages">
      <div>
        <h4>Брз Портрет</h4>
        <p>2 обработени фотографии + 1 бонус. <strong>20€</strong></p>
      </div>
      <div>
        <h4>Настан</h4>
        <p>Снимање по час + 30 професионално уредени фотографии. <strong>од 60€/час</strong></p>
      </div>
      <div>
        <h4>Свадбен Пакет</h4>
        <p>Целодневно покривање + галерија + 100 уредени фотографии. <strong>од 250€</strong></p>
      </div>
    </div>
  </section>
  
  
  <section id="client">
    <h2>Клиентска Зона</h2>
    <input type="text" placeholder="Внесете код">
    <button>Отвори Галерија</button>
    <p>Само клиентите со код имаат пристап за преглед и симнување. Сите слики се со автоматски воден жиг (watermark).</p>
  </section>

  <section id="instagram">
    <h2>Instagram</h2>
    <div class="insta-grid">
      <img src="images/post1.jpeg.jpeg" alt="Instagram Post 1">
      <img src="images/post2.jpeg.jpeg" alt="Instagram Post 2">
      <img src="images/post3.jpeg.jpeg" alt="Instagram Post 3">
      <img src="images/post4.jpeg.jpeg" alt="Instagram Post 4">
      <img src="images/post5.jpeg.jpeg" alt="Instagram Post 5">
    </div>
  </section>

  <section id="contact">
    <h2>Контакт</h2>
    <p>Телефон: <strong>+389 78 929 990</strong></p>
    <p>Facebook: <a href="https://www.facebook.com/Stylenss" target="_blank">Stylenss</a></p>
    <p>TikTok: <a href="https://www.tiktok.com/@stylens.production" target="_blank">@stylens.production</a></p>
    <p>Instagram: <a href="https://www.instagram.com/stylens_production/" target="_blank">@stylens_production</a></p>
  </section>

  <footer>
    &copy; 2025 Stylens Production · <a href="https://www.stylenspro.mk" target="_blank">www.stylenspro.mk</a>
  </footer>
  <script>
    let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      const slides = document.getElementsByClassName("mySlides");
      const dots = document.getElementsByClassName("dot");
      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }
      for (let i = 0; i < dots.length; i++) {
        dots[i].classList.remove("active");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].classList.add("active");
      setTimeout(showSlides, 4000);
    }
    </script>
    <script>
      function showGallery(category) {
        // Hide all gallery groups
        const groups = document.querySelectorAll('.gallery-group');
        groups.forEach(group => {
          group.style.display = 'none';
        });
    
        // Show only the selected group
        const selected = document.getElementById(category);
        if (selected) {
          selected.style.display = 'block';
        }
      }
    
      function openModal(img) {
        // Optional: You can build a popup/modal here if you want
        window.open(img.src, '_blank'); // Just opens image in a new tab
      }
    </script>
    <!-- Modal Viewer -->
<div id="imgModal" class="modal">
  <span class="close" onclick="closeModal()">&times;</span>
  <img class="modal-content" id="modalImage">
</div>
<script>
  function openModal(img) {
    document.getElementById("imgModal").style.display = "block";
    document.getElementById("modalImage").src = img.src;
  }

  function closeModal() {
    document.getElementById("imgModal").style.display = "none";
  }

  // Optional: Close modal on outside click
  window.onclick = function(event) {
    const modal = document.getElementById("imgModal");
    if (event.target === modal) {
      modal.style.display = "none";
    }
  }
</script>
</body>
</html>
