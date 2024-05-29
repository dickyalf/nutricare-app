</main>
<!-- Main End -->
<!-- footer -->
<footer class="footer footer--bg footer--styleOne pt-70 pb-40">
  <img src="image/shapes/footerShape2.png" alt="Gainioz Shape" class="footer__shape">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <div class="footer__logo">
          <img src="image/logos/logo_2.svg" alt="Gainioz Logo" class="footer__logo__image">
        </div>
      </div>
      <div class="col">
        <div class="footer__social itSocial">
          <ul>
            <li>
              <a class="facebook" href="#" rel="nofollow">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a class="twitter" href="#" rel="nofollow">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a class="instagram" href="#" rel="nofollow">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a class="linkedin" href="#" rel="nofollow">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
            <li>
              <a class="pinterest" href="#" rel="nofollow">
                <i class="fab fa-pinterest-p"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-12">
        <hr class="footer__line" />
      </div>
    </div>
    <div class="row">
      <div class="footer__middle pt-65 pb-35">
        <div class="row justify-content-between">
          <div class="col-lg-2 col-md-4 mb-30">
            <div class="footer__widget">
              <div class="footer__title">
                <h2 class="footer__heading text-uppercase text-white">About us</h2>
              </div>
              <div class="footer__menu">
                <ul>
                  <li><a href="#">Policy Priorities</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Internships</a></li>
                  <li><a href="#">Financial Reports</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 mb-30">
            <div class="footer__widget">
              <div class="footer__title">
                <h2 class="footer__heading text-uppercase text-white">Support us</h2>
              </div>
              <div class="footer__menu">
                <ul>
                  <li><a href="{{ route('donation') }}">Donate Now</a></li>
                  <li><a href="#">Store</a></li>
                  <li><a href="#">Reports</a></li>
                  <li><a href="#">Press Releases</a></li>
                  <li><a href="#">Privacy & Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 mb-30">
            <div class="footer__widget">
              <div class="footer__title">
                <h2 class="footer__heading text-uppercase text-white">Quick LInks</h2>
              </div>
              <div class="footer__menu">
                <ul>
                  <li><a href="/">Home</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Contact us</a></li>
                  <li><a href="{{ route('donation') }}">Donation</a></li>
                  <li><a href="#">Join Volentter</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-5 mb-30">
            <form action="#" method="post" class="footer__newsletter">
              <div class="footer__title">
                <h2 class="footer__heading text-uppercase text-white">News Latter</h2>
              </div>
              <div class="footer__newsletter__formGroup mb-20">
                <input type="text" class="footer__newsletter__input" placeholder="Enter mail">
                <input class="footer__newsletter__button" type="button" value="Subscribe">
              </div>
              <div class="footer__newsletter__formGroup">
                <input id="agree" type="checkbox" class="footer__newsletter__check form-check-input">
                <label class="footer__newsletter__label" for="agree">I agree that my submitted data is
                  being
                  collected and stored.</label>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="footer__bottom">
        <div class="row">
          <div class="col-12">
            <hr class="footer__line">
          </div>
          <div class="col mb-20">
            <div class="footer__copyright pt-20">
              <p class="footer__copyright__text mb-0">Copyright@example 2022 all right receved</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- CURSOR -->
<div class="mouseCursor cursor-outer"></div>
<div class="mouseCursor cursor-inner"></div>
<!-- /CURSOR -->
<div class="progress-wrap">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>
<!-- Template Search -->
<div id="template-search" class="template-search">
  <button type="button" class="close">
    <i class="fa-solid fa-xmark"></i>
  </button>
  <form class="search-form" action ="{{ route('search') }}" method="get">
    <input type="search" value="search" name="search" placeholder="Type your search" />
    <button type="submit" class="search-btn">
      <i class="fas fa-search"></i>
    </button>
  </form>
</div>
<!-- Template Search End -->
<script src="assets/jquery/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/swiper/swiper.min.js"></script>
<script src="assets/nice-select/jquery.nice-select.min.js"></script>
<script src="assets/validator.min.js"></script>
<script src="assets/animation/wow.min.js"></script>
<script src="js/app.js"></script>