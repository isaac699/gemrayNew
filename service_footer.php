

<!-- footer -->
  <div id="footer">
    <div class="container">
      <div class="row">
        <hr>
        <div class="col-lg-4 col-md-6">
          <h5 class="footer-h6">We are here to help you increase your productivity and derive more sales into your business .Choose Us and you will Never regret.</h5>
        </div>
      <div class="col-lg-4 col-md-6 useful-a">
        <h5 class="useful">Useful Links</h5>
        <a href="/first-sem-final-pro/index.php">Home</a>
        <a href="/first-sem-final-pro/hire-us.php">Hire us</a>
        <a href="/first-sem-final-pro/refreshing.php">Refreshing approach to Digital Marking</a>
        <a href="/first-sem-final-pro/case-studies.php">Case Studies</a>
      </div>
      <div class="col-lg-4 col-md-12">
        <h5 class="useful">Contact Us</h5>
        <h6 class="yhaw">Gemraydigitalagency@gmail.com</h6>
        <h6 class="yhaw ">+233 559 984 234</h6>
        <div class="social-icons">
          <a href="https://web.facebook.com/people/Gemray-Digital-Agency/61554421756650/?mibextid=LQQJ4d"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://www.instagram.com/gemray_digital?igsh=Y3ZlbjdhdWpzYWJ1&utm_source=qr"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.tiktok.com/@gemray_digital"><i class="fa-brands fa-tiktok"></i></a>
        </div>
      </div>
      </div>
    </div>
    <div class="botom">
      <h5>Copyright © 2024. | Gemray Digital Agency</h5>
    </div>
  </div>
  <!-- footer -->



<!-- jquery plugin -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<!-- jquery plugin -->

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Bootstrap Bundle with Popper -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

<script>
// Navbar scroll effect
  const navEl = document.querySelector('.navbar');
    window.addEventListener('scroll', function() {
      if(window.scrollY >= 56 ){
        navEl.classList.add('navbar-scrolled');
      }else if (window.scrollY < 56 ) {
        navEl.classList.remove('navbar-scrolled');
      }
    });
    $(window).scroll(function(){
      if($(document).scrollTop() > 100){
        $('nav').addClass('animate');
      }else{
        $('nav').removeClass('animate');
      }
    });
    // Navbar scroll effect


    // scrollreveal

      // OUR SERVICE ScrollReveal
    window.sr = ScrollReveal();
    sr.reveal('.head-we', {
      duration: 3000,
      origin: 'bottom',
      distance: '300px',
      reset: true
    });

    window.sr = ScrollReveal();
    sr.reveal('.wespan-animate', {
      duration: 3000,
      origin: 'top',
      distance: '200px',
      reset: true
    });
      // OUR SERVICE ScrollReveal
</script>
</body>
</html>
