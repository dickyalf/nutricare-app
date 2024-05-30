@extends('layouts/app')
@section("title", "NutriCare")

@section("body")

  <!-- Preloader -->
  <div id="preloader">
    <div class="ctn-preloader" id="ctn-preloader">
      <div class="round_spinner">
        <div class="spinner"></div>
        <div class="text">
          <img src="image/logos/logo_1.svg" alt="Gainioz">
        </div>
      </div>
      <h2 class="head">DO GOOD FOR OTHERS</h2>
      <p></p>
    </div>
  </div>
  <!-- Preloader End -->
  <!-- Main -->
  <main class="main">
    <!-- Header Style One -->
    <!-- header -->
    <header class="header header--styleOne sticky-on">
      <div id="sticky-placeholder"></div>
      <div class="container container--custom">
        <div class="row">
          <div class="col-12">
            <div class="header__wrapper">
              <!-- logo start -->
              <div class="header__logo">
                <a href="/" class="header__logo__link">
                  <img src="image/logos/logo_1.svg" alt="Gainioz" class="header__logo__image">
                </a>
              </div>
              <!-- logo end -->
              <!-- Main Menu Start -->
              <div class="header__menu">
                <nav class="mainMenu">
                  <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="{{ route('donation') }}">Donations</a></li>
                    <li><a href="#">Blog</a></li>
                    <li class="dropdown"><a href="#">Pages</a>
                      <ul class="dropdown_menu dropdown_menu-2">
                        <li class="dropdown_item-1"><a href="#">Events</a></li>
                        <li class="dropdown_item-2"><a href="#">FAQ`s</a></li>
                        <li class="dropdown_item-3"><a href="#">Shop</a></li>
                        <li class="dropdown_item-4"><a href="#">Services</a></li>
                        <li class="dropdown_item-5"><a href="#">Volunteers</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Contacts</a></li>
                  </ul>
                </nav>
              </div>
              <!-- Main Menu End -->
              <!-- Header Right Buttons Search Cart -->
              <div class="header__right">
                <div class="header__actions">
                  <ul>
                    <li>
                      <a href="products.html">
                        <span>2</span>
                        <svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M24.2344 7H20.9258L14.9102 0.382812C14.6523 0.0820312 14.2227 0.0820312 13.9648 0.339844C13.6641 0.597656 13.6641 1.02734 13.9219 1.28516L19.0781 7H5.62891L10.7852 1.28516C11.043 1.02734 11.043 0.597656 10.7422 0.339844C10.4844 0.0820312 10.0547 0.0820312 9.79688 0.382812L3.78125 7H0.515625C0.214844 7 0 7.25781 0 7.51562V7.85938C0 8.16016 0.214844 8.375 0.515625 8.375H1.20312L2.49219 17.6133C2.62109 18.6445 3.48047 19.375 4.51172 19.375H20.1953C21.2266 19.375 22.0859 18.6445 22.2148 17.6133L23.5039 8.375H24.2344C24.4922 8.375 24.75 8.16016 24.75 7.85938V7.51562C24.75 7.25781 24.4922 7 24.2344 7ZM20.8828 17.4414C20.7969 17.7852 20.5391 18 20.1953 18H4.51172C4.16797 18 3.91016 17.7852 3.82422 17.4414L2.57812 8.375H22.1289L20.8828 17.4414ZM13.0625 10.7812C13.0625 10.4375 12.7188 10.0938 12.375 10.0938C11.9883 10.0938 11.6875 10.4375 11.6875 10.7812V15.5938C11.6875 15.9805 11.9883 16.2812 12.375 16.2812C12.7188 16.2812 13.0625 15.9805 13.0625 15.5938V10.7812ZM17.875 10.7812C17.875 10.4375 17.5312 10.0938 17.1875 10.0938C16.8008 10.0938 16.5 10.4375 16.5 10.7812V15.5938C16.5 15.9805 16.8008 16.2812 17.1875 16.2812C17.5312 16.2812 17.875 15.9805 17.875 15.5938V10.7812ZM8.25 10.7812C8.25 10.4375 7.90625 10.0938 7.5625 10.0938C7.17578 10.0938 6.875 10.4375 6.875 10.7812V15.5938C6.875 15.9805 7.17578 16.2812 7.5625 16.2812C7.90625 16.2812 8.25 15.9805 8.25 15.5938V10.7812Z" fill="#7FB432" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#template-search">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M21.8281 21.4609L16.2852 15.918C16.1992 15.832 16.0703 15.7891 15.9414 15.7891H15.4688C16.9727 14.1562 17.875 12.0508 17.875 9.6875C17.875 4.78906 13.8359 0.75 8.9375 0.75C3.99609 0.75 0 4.78906 0 9.6875C0 14.6289 3.99609 18.625 8.9375 18.625C11.2578 18.625 13.4062 17.7227 14.9961 16.2617V16.6914C14.9961 16.8633 15.0391 16.9922 15.125 17.0781L20.668 22.6211C20.8828 22.8359 21.1836 22.8359 21.3984 22.6211L21.8281 22.1914C22.043 21.9766 22.043 21.6758 21.8281 21.4609ZM8.9375 17.25C4.72656 17.25 1.375 13.8984 1.375 9.6875C1.375 5.51953 4.72656 2.125 8.9375 2.125C13.1055 2.125 16.5 5.51953 16.5 9.6875C16.5 13.8984 13.1055 17.25 8.9375 17.25Z" fill="#7FB432" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="header__button">
                  <a class="btn btn--styleOne btn--secondary it-btn" href="{{ route('donation') }}">
                    <span class="btn__text">donate now</span>
                    <i class="fa-solid fa-heart btn__icon"></i>
                    <span class="it-btn__inner">
                                    <span class="it-btn__blobs">
                                        <span class="it-btn__blob"></span>
                    <span class="it-btn__blob"></span>
                    <span class="it-btn__blob"></span>
                    <span class="it-btn__blob"></span>
                    </span>
                    </span>
                    <svg class="it-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
                      <defs>
                        <filter>
                          <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                          </feGaussianBlur>
                          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                          </feColorMatrix>
                          <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                        </filter>
                      </defs>
                    </svg>
                  </a>
                </div>
              </div>
              <!-- Header Right Buttons Search Cart -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    <!-- Mobile Menu Button Start -->
    <div class="header header--mobile cc-header-menu mean-container position-relative" id="meanmenu">
      <div class="mean-bar headerBurgerMenu">
        <a href="index.html">
          <img class="mean-bar__logo" alt="Techkit" src="image/logos/logo_1.svg" />
        </a>
        <!-- Header Right Buttons Search Cart -->
        <div class="header__right">
          <div class="header__actions">
            <ul>
              <li>
                <a href="products.html">
                  <svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.2344 7H20.9258L14.9102 0.382812C14.6523 0.0820312 14.2227 0.0820312 13.9648 0.339844C13.6641 0.597656 13.6641 1.02734 13.9219 1.28516L19.0781 7H5.62891L10.7852 1.28516C11.043 1.02734 11.043 0.597656 10.7422 0.339844C10.4844 0.0820312 10.0547 0.0820312 9.79688 0.382812L3.78125 7H0.515625C0.214844 7 0 7.25781 0 7.51562V7.85938C0 8.16016 0.214844 8.375 0.515625 8.375H1.20312L2.49219 17.6133C2.62109 18.6445 3.48047 19.375 4.51172 19.375H20.1953C21.2266 19.375 22.0859 18.6445 22.2148 17.6133L23.5039 8.375H24.2344C24.4922 8.375 24.75 8.16016 24.75 7.85938V7.51562C24.75 7.25781 24.4922 7 24.2344 7ZM20.8828 17.4414C20.7969 17.7852 20.5391 18 20.1953 18H4.51172C4.16797 18 3.91016 17.7852 3.82422 17.4414L2.57812 8.375H22.1289L20.8828 17.4414ZM13.0625 10.7812C13.0625 10.4375 12.7188 10.0938 12.375 10.0938C11.9883 10.0938 11.6875 10.4375 11.6875 10.7812V15.5938C11.6875 15.9805 11.9883 16.2812 12.375 16.2812C12.7188 16.2812 13.0625 15.9805 13.0625 15.5938V10.7812ZM17.875 10.7812C17.875 10.4375 17.5312 10.0938 17.1875 10.0938C16.8008 10.0938 16.5 10.4375 16.5 10.7812V15.5938C16.5 15.9805 16.8008 16.2812 17.1875 16.2812C17.5312 16.2812 17.875 15.9805 17.875 15.5938V10.7812ZM8.25 10.7812C8.25 10.4375 7.90625 10.0938 7.5625 10.0938C7.17578 10.0938 6.875 10.4375 6.875 10.7812V15.5938C6.875 15.9805 7.17578 16.2812 7.5625 16.2812C7.90625 16.2812 8.25 15.9805 8.25 15.5938V10.7812Z" fill="#7FB432" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#template-search">
                  <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.8281 21.4609L16.2852 15.918C16.1992 15.832 16.0703 15.7891 15.9414 15.7891H15.4688C16.9727 14.1562 17.875 12.0508 17.875 9.6875C17.875 4.78906 13.8359 0.75 8.9375 0.75C3.99609 0.75 0 4.78906 0 9.6875C0 14.6289 3.99609 18.625 8.9375 18.625C11.2578 18.625 13.4062 17.7227 14.9961 16.2617V16.6914C14.9961 16.8633 15.0391 16.9922 15.125 17.0781L20.668 22.6211C20.8828 22.8359 21.1836 22.8359 21.3984 22.6211L21.8281 22.1914C22.043 21.9766 22.043 21.6758 21.8281 21.4609ZM8.9375 17.25C4.72656 17.25 1.375 13.8984 1.375 9.6875C1.375 5.51953 4.72656 2.125 8.9375 2.125C13.1055 2.125 16.5 5.51953 16.5 9.6875C16.5 13.8984 13.1055 17.25 8.9375 17.25Z" fill="#7FB432" />
                  </svg>
                </a>
              </li>
              <li>
                <button class="headerBurgerMenu__button sidebarBtn" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
                  <svg width="50" height="50" viewBox="0 0 100 100">
                    <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                  </svg>
                </button>
              </li>
            </ul>
          </div>
        </div>
        <!-- Header Right Buttons Search Cart -->
      </div>
    </div>
    <!-- Mobile Menu Button End -->
    <!-- Mobile Menu Navbar -->
    <div class="cc cc--slideNav">
      <div class="cc__logo mb-40">
        <a href="/">
          <img class="mean-bar__logo" alt="Techkit" src="image/logos/logo_1.svg" />
        </a>
      </div>
      <div class="offscreen-navigation mb-40">
        <nav class="menu-main-primary-container">
          <ul class="menu">
            <li class="list menu-item-parent">
              <a class="animation" href="/">Home</a>
            </li>
            <li class="list menu-item-parent">
              <a class="animation" href="#">About</a>
            </li>
            <li class="list menu-item-parent">
              <a class="animation" href="{{ route('donation') }}">Donations</a>
            </li>
            <li class="list menu-item-parent">
              <a class="animation" href="#">Blog</a>
            </li>
            <li class="list menu-item-parent menu-item-has-children">
              <a class="animation" href="#">Pages</a>
              <ul class="main-menu__dropdown sub-menu">
                <li><a href="#">Events</a></li>
                <li>
                  <a href="#">Faq</a>
                </li>
                <li><a href="#">Shop</a></li>
                <li>
                  <a href="#">Service</a>
                </li>
                <li>
                  <a href="#">Volunteers</a>
                </li>
              </ul>
            </li>
            <li class="list menu-item-parent">
              <a class="animation" href="#">Contacts</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="itSocial itSocial--sidebar mb-40">
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
        </ul>
      </div>
      <div class="cc__button">
        <div class="header__button">
          <a class="btn btn--styleOne btn--secondary it-btn" href="{{ route('donation') }}">
            <span class="btn__text">Contact Us</span>
            <i class="fa-solid fa-heart btn__icon"></i>
            <span class="it-btn__inner">
                    <span class="it-btn__blobs">
                        <span class="it-btn__blob"></span>
            <span class="it-btn__blob"></span>
            <span class="it-btn__blob"></span>
            <span class="it-btn__blob"></span>
            </span>
            </span>
            <svg class="it-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
              <defs>
                <filter id="goo">
                  <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                  </feGaussianBlur>
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                  </feColorMatrix>
                  <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                </filter>
              </defs>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <!-- Mobile Menu Navbar End -->
    <!-- Header Style One End -->
    <!-- Hero/Welcome Section Start -->
    <section class="hero hero--style1 overflow-hidden">
      <img src="image/shapes/shapes1.svg" alt="Gainioz" class="hero__shape">
      <img src="image/shapes/love-shape1.svg" alt="Gainioz" class="hero__shape hero__shape--one">
      <img src="image/shapes/love-shape2.svg" alt="Gainioz" class="hero__shape hero__shape--two">
      <div class="container container--custom">
        <div class="row align-items-center justify-content-between">
          <div class="col-xl-5 col-lg-8 mb-30">
            <div class="hero__content">
              <span class="hero__title hero__title--small wow animate__fadeInUp animate__animated"
              data-wow-duration="1200ms" data-wow-delay="200ms"><i class="fa-solid fa-heart btn__icon"></i>We Beleve
              That</span>
              <h1 class="hero__title hero__title--big wow animate__fadeInUp animate__animated" data-wow-duration="1200ms" data-wow-delay="300ms">Do good For Others</h1>
              <p class="hero__text wow animate__fadeInUp animate__animated" data-wow-duration="1200ms" data-wow-delay="400ms">We help nonprofits from Afghanistan to Zimbabwe (and hundreds of places in between)
                access the
                tools, training,</p>
              <a class="btn btn--styleOne btn--primary it-btn wow animate__fadeInUp animate__animated" data-wow-duration="1200ms" data-wow-delay="500ms" href="{{ route('donation') }}">
                <span class="btn__text">join the journey</span>
                <i class="fa-solid fa-heart btn__icon"></i>
                <span class="it-btn__inner">
                <span class="it-btn__blobs">
                  <span class="it-btn__blob"></span>
                <span class="it-btn__blob"></span>
                <span class="it-btn__blob"></span>
                <span class="it-btn__blob"></span>
                </span>
                </span>
                <svg class="it-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
                  <defs>
                    <filter>
                      <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                      </feColorMatrix>
                      <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                    </filter>
                  </defs>
                </svg>
              </a>
            </div>
          </div>
          <div class="col-xl-6 mb-30">
            <figure class="hero__figure wow animate__zoomIn animate__animated" data-wow-duration="1200ms" data-wow-delay="600ms">
              <img src="image/man/man1.jpg" alt="Gainioz Man" class="hero__figure__thumbs">
              <img class="hero__figure__overlay" src="image/shapes/shapes3.svg" alt="Gainioz">
            </figure>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero/Welcome Section End -->
    <!-- About && Features && Donner Section -->
    <section class="about">
      <img class="about__shape about__shape--one" src="image/shapes/love-shape3.svg" alt="Gainioz Shape">
      <img class="about__shape about__shape--two" src="image/shapes/love-shape4.svg" alt="Gainioz Shape">
      <img class="about__shape about__shape--three" src="image/shapes/love-shape5.svg" alt="Gainioz Shape">
      <div class="aboutArea aboutArea--padding position-relative">
        <img class="mask-aboutBack wow animate__fadeInLeft animate__animated" data-wow-duration="1200ms" data-wow-delay="300ms" src="image/shapes/mask-shape3.svg" alt="Gainioz Shape">
        <div class="mask mask--about wow animate__fadeInLeft animate__animated" data-wow-duration="1200ms" data-wow-delay="200ms">
          <img src="image/girls/girls1.jpg" alt="Gainioz Shape" class="mask__thumb">
          <img class="mask__overlay" src="image/shapes/mask-shape2.svg" alt="Gainioz Shape">
        </div>
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-lg-6 mb-30">
              <div class="aboutContent">
                <!-- Section Heading/Title -->
                <div class="sectionTitle mb-20">
                  <span class="sectionTitle__small">
                  <i class="fa-solid fa-heart btn__icon"></i>
                  about foundation
                </span>
                  <h2 class="sectionTitle__big">what have we done with
                    your help</h2>
                </div>
                <!-- Section Heading/Title End -->
                <p class="aboutContent__text">
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in some form,
                  by injected humour, or randomised words which don't look even slightly believable. If you are going to
                  use a passage Lorem of
                  Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle There are many
                  variations of
                  passages
                </p>
                <span class="aboutContent__quote">join our Action and everyone can help</span>
                <a class="btn btn--styleOne btn--secondary it-btn" href="{{ route('donation') }}">
                  <span class="btn__text">donate now</span>
                  <i class="fa-solid fa-heart btn__icon"></i>
                  <span class="it-btn__inner">
                  <span class="it-btn__blobs">
                    <span class="it-btn__blob"></span>
                  <span class="it-btn__blob"></span>
                  <span class="it-btn__blob"></span>
                  <span class="it-btn__blob"></span>
                  </span>
                  </span>
                  <svg class="it-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                      <filter>
                        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                        </feGaussianBlur>
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                        </feColorMatrix>
                        <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                      </filter>
                    </defs>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="featureArea pt-70">
        <div class="featureArea__map">
          <img src="image/shapes/map.png" alt="Gainioz Map">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="keyFeatureBox mb-30">
                <div class="row">
                  <div class="col-lg-4 wow animate__fadeInLeft" data-wow-duration="1200ms" data-wow-delay="200ms">
                    <div class="keyFeatureBlock mb-30">
                      <div class="keyFeatureBlock__left">
                        <span class="keyFeatureBlock__icon">
                        <img src="image/icons/icon1.svg" alt="Gainioz Feature_Icon">
                      </span>
                      </div>
                      <div class="keyFeatureBlock__content">
                        <h3 class="keyFeatureBlock__heading">
                          <a class="keyFeatureBlock__heading__link" href="#">
                            healthy Food
                          </a>
                        </h3>
                        <p class="keyFeatureBlock__text">We help local nonprofits access the funding, tools, training,</p>
                      </div>
                      <div class="keyFeatureBlock__skill skill-bar" data-width="80%">
                        <span class="keyFeatureBlock__skill__bar"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 wow animate__fadeInLeft" data-wow-duration="1200ms" data-wow-delay="300ms">
                    <div class="keyFeatureBlock mb-30">
                      <div class="keyFeatureBlock__left">
                        <span class="keyFeatureBlock__icon">
                        <img src="image/icons/icon2.svg" alt="Gainioz Feature_Icon">
                      </span>
                      </div>
                      <div class="keyFeatureBlock__content">
                        <h3 class="keyFeatureBlock__heading">
                          <a class="keyFeatureBlock__heading__link" href="#">
                            Dedicated
                          </a>
                        </h3>
                        <p class="keyFeatureBlock__text">We help local nonprofits access the funding, tools, training,</p>
                      </div>
                      <div class="keyFeatureBlock__skill skill-bar" data-width="94%">
                        <span class="keyFeatureBlock__skill__bar"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 wow animate__fadeInLeft" data-wow-duration="1200ms" data-wow-delay="400ms">
                    <div class="keyFeatureBlock mb-30">
                      <div class="keyFeatureBlock__left">
                        <span class="keyFeatureBlock__icon">
                        <img src="image/icons/icon3.svg" alt="Gainioz Feature_Icon">
                      </span>
                      </div>
                      <div class="keyFeatureBlock__content">
                        <h3 class="keyFeatureBlock__heading">
                          <a class="keyFeatureBlock__heading__link" href="#">
                            Strong Team
                          </a>
                        </h3>
                        <p class="keyFeatureBlock__text">We help local nonprofits access the funding, tools, training,</p>
                      </div>
                      <div class="keyFeatureBlock__skill skill-bar" data-width="70%">
                        <span class="keyFeatureBlock__skill__bar"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="donnerArea pt-70 pb-95">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="donnerAreaContent text-center mb-30">
                  <h2 class="donnerAreaContent__bigTitle wow animate__fadeInUp" data-wow-duration="1200ms" data-wow-delay="200ms">
                    <span class="donnerAreaContent__bigTitle__number">250</span>
                    <span class="donnerAreaContent__bigTitle__text">mln</span>
                  </h2>
                  <h3 class="donnerAreaContent__heading text-uppercase wow animate__fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">People Live with a disability</h3>
                  <a class="btn btn--styleOne btn--black it-btn wow animate__fadeInUp" data-wow-duration="1200ms" data-wow-delay="400ms" href="{{ route('donation') }}">
                    <span class="btn__text">BECAME A VOLEENTEER</span>
                    <i class="fa-solid fa-heart btn__icon"></i>
                    <span class="it-btn__inner">
                    <span class="it-btn__blobs">
                      <span class="it-btn__blob"></span>
                    <span class="it-btn__blob"></span>
                    <span class="it-btn__blob"></span>
                    <span class="it-btn__blob"></span>
                    </span>
                    </span>
                    <svg class="it-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
                      <defs>
                        <filter>
                          <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                          </feColorMatrix>
                          <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                        </filter>
                      </defs>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="featureArea__main cc-slide-wrap">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <!-- Section Heading/Title -->
                <div class="sectionTitle mb-65">
                  <span class="sectionTitle__small">
                  <i class="fa-solid fa-heart btn__icon"></i>
                  need your help
                </span>
                  <h2 class="sectionTitle__big">Featured Campaigns</h2>
                </div>
                <!-- Section Heading/Title End -->
              </div>
              <div class="col-lg-6">
                <div class="sliderNav sliderNav--style1 mb-65">
                  <span class="sliderNav__btn btn-prev">
                  <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M5.75 9.40625L6.375 8.78125C6.5 8.625 6.5 8.40625 6.34375 8.25L3.84375 5.8125H14.625C14.8125 5.8125 15 5.65625 15 5.4375V4.5625C15 4.375 14.8125 4.1875 14.625 4.1875H3.84375L6.34375 1.78125C6.5 1.625 6.5 1.40625 6.375 1.25L5.75 0.625C5.59375 0.5 5.375 0.5 5.21875 0.625L1.09375 4.75C0.96875 4.90625 0.96875 5.125 1.09375 5.28125L5.21875 9.40625C5.375 9.53125 5.59375 9.53125 5.75 9.40625Z"
                      fill="white" />
                  </svg>
                </span>
                  <span class="sliderNav__btn btn-next">
                  <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M9.21875 0.625L8.59375 1.25C8.46875 1.40625 8.46875 1.625 8.625 1.78125L11.125 4.1875H0.375C0.15625 4.1875 0 4.375 0 4.5625V5.4375C0 5.65625 0.15625 5.8125 0.375 5.8125H11.125L8.625 8.25C8.46875 8.40625 8.46875 8.625 8.59375 8.78125L9.21875 9.40625C9.375 9.53125 9.59375 9.53125 9.75 9.40625L13.875 5.28125C14 5.125 14 4.90625 13.875 4.75L9.75 0.625C9.59375 0.5 9.375 0.5 9.21875 0.625Z"
                      fill="white" />
                  </svg>
                </span>
                </div>
              </div>
            </div>
            <div class="cc-sliderStyle1 swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="featureBlock featureBlock--active">
                    <div class="featureBlock__wrap">
                      <figure class="featureBlock__thumb">
                        <a class="featureBlock__thumb__link" href="#">
                          <img src="image/featured/featuredThumb1.jpg" alt="Gainioz Featured Thumb">
                        </a>
                        <a class="featureBlock__hashLink" href="#">
                          <span class="featureBlock__hashLink__text">#Life</span>
                        </a>
                      </figure>
                      <div class="featureBlock__content">
                        <h3 class="featureBlock__heading">
                          <a class="featureBlock__heading__link" href="#">
                            Help poor people give food & Careing african child
                          </a>
                        </h3>
                        <p class="featureBlock__text">
                          We help local nonprofits access the funding, training, and support they need to become more
                        </p>
                      </div>
                    </div>
                    <div class="featureBlock__donation">
                      <div class="featureBlock__donation__progress">
                        <div class="featureBlock__donation__bar">
                          <span class="featureBlock__donation__text skill-bar" data-width="85%">85%</span>
                          <div class="featureBlock__donation__line">
                            <span class="skill-bars">
                            <span class="skill-bars__line skill-bar" data-width="85%"></span>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="featureBlock__eqn">
                        <div class="featureBlock__eqn__block">
                          <span class="featureBlock__eqn__title">our goal</span>
                          <span class="featureBlock__eqn__price">$28.0000</span>
                        </div>
                        <div class="featureBlock__eqn__block">
                          <span class="featureBlock__eqn__title">Raised</span>
                          <span class="featureBlock__eqn__price">$9,9098</span>
                        </div>
                        <div class="featureBlock__eqn__block">
                          <span class="featureBlock__eqn__title">to go</span>
                          <span class="featureBlock__eqn__price">$34,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="featureBlock">
                    <div class="featureBlock__wrap">
                      <figure class="featureBlock__thumb">
                        <a class="featureBlock__thumb__link" href="#">
                          <img src="image/featured/featuredThumb2.jpg" alt="Gainioz Featured Thumb">
                        </a>
                        <a class="featureBlock__hashLink" href="#">
                          <span class="featureBlock__hashLink__text">#Education</span>
                        </a>
                      </figure>
                      <div class="featureBlock__content">
                        <h3 class="featureBlock__heading">
                          <a class="featureBlock__heading__link" href="#">
                            Contribute for the Make somalians happy- 2022
                          </a>
                        </h3>
                        <p class="featureBlock__text">
                          We help local nonprofits access the funding, training, and support they need to become more
                        </p>
                      </div>
                    </div>
                    <div class="featureBlock__donation">
                      <div class="featureBlock__donation__progress">
                        <div class="featureBlock__donation__bar">
                          <span class="featureBlock__donation__text skill-bar" data-width="75%">75%</span>
                          <div class="featureBlock__donation__line">
                            <span class="skill-bars">
                            <span class="skill-bars__line skill-bar" data-width="75%"></span>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="featureBlock__eqn">
                        <div class="featureBlock__eqn__block">
                          <span class="featureBlock__eqn__title">our goal</span>
                          <span class="featureBlock__eqn__price">$34.0000</span>
                        </div>
                        <div class="featureBlock__eqn__block">
                          <span class="featureBlock__eqn__title">Raised</span>
                          <span class="featureBlock__eqn__price">$11.9098</span>
                        </div>
                        <div class="featureBlock__eqn__block">
                          <span class="featureBlock__eqn__title">to go</span>
                          <span class="featureBlock__eqn__price">$56,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="featureBlock">
                    <div class="featureBlock__wrap">
                      <figure class="featureBlock__thumb">
                        <a class="featureBlock__thumb__link" href="#">
                          <img src="image/featured/featuredThumb3.jpg" alt="Gainioz Featured Thumb">
                        </a>
                        <a class="featureBlock__hashLink" href="#">
                          <span class="featureBlock__hashLink__text">#Health</span>
                        </a>
                      </figure>
                      <div class="featureBlock__content">
                        <h3 class="featureBlock__heading">
                          <a class="featureBlock__heading__link" href="#">
                            Collect Donation for zimbabwe's School & Hospital
                          </a>
                        </h3>
                        <p class="featureBlock__text">
                          We help local nonprofits access the funding, training, and support they need to become more
                        </p>
                      </div>
                    </div>
                    <div class="featureBlock__donation">
                      <div class="featureBlock__donation__progress">
                        <div class="featureBlock__donation__bar">
                          <span class="featureBlock__donation__text skill-bar" data-width="80%">80%</span>
                          <div class="featureBlock__donation__line">
                            <span class="skill-bars">
                            <span class="skill-bars__line skill-bar" data-width="80%"></span>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="featureBlock__eqn">
                        <div class="featureBlock__eqn__block">
                          <span class="featureBlock__eqn__title">our goal</span>
                          <span class="featureBlock__eqn__price">$13.0000</span>
                        </div>
                        <div class="featureBlock__eqn__block">
                          <span class="featureBlock__eqn__title">Raised</span>
                          <span class="featureBlock__eqn__price">$22.9098</span>
                        </div>
                        <div class="featureBlock__eqn__block">
                          <span class="featureBlock__eqn__title">to go</span>
                          <span class="featureBlock__eqn__price">$38,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About && Features && Doner End -->
    <!-- Testimonials -->
    <section class="review pt-110 pb-100 position-relative overflow-hidden cc-slide-wrap3">
      <img src="image/shapes/testi-shape1.svg" alt="Gainioz Shape" class="review__shape review__shape--one">
      <img src="image/shapes/testi-shape2.svg" alt="Gainioz Shape" class="review__shape review__shape--two">
      <div class="mask mask--review position-absolute">
        <img src="image/man/testi-man1.jpg" alt="Gainioz Shape" class="mask__thumb">
        <img class="mask__overlay" src="image/shapes/testi-shape4.svg" alt="Gainioz Shape">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-8 mx-auto">
            <!-- Section Heading/Title -->
            <div class="sectionTitle text-center mb-65">
              <span class="sectionTitle__small justify-content-center">
              <i class="fa-solid fa-heart btn__icon"></i>
              Testimonial
            </span>
              <h2 class="sectionTitle__big">People Say about our foundation</h2>
            </div>
            <!-- Section Heading/Title End -->
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="review__box mb-30">
              <div class="sliderNav sliderNav--style2">
                <span class="sliderNav__btn btn-prev" tabindex="0" role="button">
                <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.75 9.40625L6.375 8.78125C6.5 8.625 6.5 8.40625 6.34375 8.25L3.84375 5.8125H14.625C14.8125 5.8125 15 5.65625 15 5.4375V4.5625C15 4.375 14.8125 4.1875 14.625 4.1875H3.84375L6.34375 1.78125C6.5 1.625 6.5 1.40625 6.375 1.25L5.75 0.625C5.59375 0.5 5.375 0.5 5.21875 0.625L1.09375 4.75C0.96875 4.90625 0.96875 5.125 1.09375 5.28125L5.21875 9.40625C5.375 9.53125 5.59375 9.53125 5.75 9.40625Z"
                    fill="currentColor"></path>
                </svg>
              </span>
                <span class="sliderNav__btn btn-next" tabindex="0" role="button">
                <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M9.21875 0.625L8.59375 1.25C8.46875 1.40625 8.46875 1.625 8.625 1.78125L11.125 4.1875H0.375C0.15625 4.1875 0 4.375 0 4.5625V5.4375C0 5.65625 0.15625 5.8125 0.375 5.8125H11.125L8.625 8.25C8.46875 8.40625 8.46875 8.625 8.59375 8.78125L9.21875 9.40625C9.375 9.53125 9.59375 9.53125 9.75 9.40625L13.875 5.28125C14 5.125 14 4.90625 13.875 4.75L9.75 0.625C9.59375 0.5 9.375 0.5 9.21875 0.625Z"
                    fill="currentColor"></path>
                </svg>
              </span>
              </div>
              <ul class="review__box__images">
                <li><img src="image/auth/reviewAuth2.png" alt="Gainioz Reviewer"></li>
                <li><img src="image/auth/reviewAuth3.png" alt="Gainioz Reviewer"></li>
                <li><img src="image/auth/reviewAuth4.png" alt="Gainioz Reviewer"></li>
                <li><img src="image/auth/reviewAuth5.png" alt="Gainioz Reviewer"></li>
              </ul>
              <div class="reviewblock text-center">
                <span class="reviewblock__quoteIcon__two">
                <svg width="300" height="263" viewBox="0 0 300 263" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M271.875 131.5H225V94C225 73.4922 241.406 56.5 262.5 56.5H267.188C274.805 56.5 281.25 50.6406 281.25 42.4375V14.3125C281.25 6.69531 274.805 0.25 267.188 0.25H262.5C210.352 0.25 168.75 42.4375 168.75 94V234.625C168.75 250.445 181.055 262.75 196.875 262.75H271.875C287.109 262.75 300 250.445 300 234.625V159.625C300 144.391 287.109 131.5 271.875 131.5ZM103.125 131.5H56.25V94C56.25 73.4922 72.6562 56.5 93.75 56.5H98.4375C106.055 56.5 112.5 50.6406 112.5 42.4375V14.3125C112.5 6.69531 106.055 0.25 98.4375 0.25H93.75C41.6016 0.25 0 42.4375 0 94V234.625C0 250.445 12.3047 262.75 28.125 262.75H103.125C118.359 262.75 131.25 250.445 131.25 234.625V159.625C131.25 144.391 118.359 131.5 103.125 131.5Z"
                    fill="#F8F7F7" />
                </svg>
              </span>
                <div class="testi-slider-active1 swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="reviewblock__content">
                        <img class="reviewblock__author__image" src="image/auth/reviewAuth1.png" alt="Gainioz Reviewer">
                        <span class="reviewblock__quoteIcon__one">
                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M21.75 10.9951H18V7.99512C18 6.35449 19.3125 4.99512 21 4.99512H21.375C21.9844 4.99512 22.5 4.52637 22.5 3.87012V1.62012C22.5 1.01074 21.9844 0.495117 21.375 0.495117H21C16.8281 0.495117 13.5 3.87012 13.5 7.99512V19.2451C13.5 20.5107 14.4844 21.4951 15.75 21.4951H21.75C22.9688 21.4951 24 20.5107 24 19.2451V13.2451C24 12.0264 22.9688 10.9951 21.75 10.9951ZM8.25 10.9951H4.5V7.99512C4.5 6.35449 5.8125 4.99512 7.5 4.99512H7.875C8.48438 4.99512 9 4.52637 9 3.87012V1.62012C9 1.01074 8.48438 0.495117 7.875 0.495117H7.5C3.32812 0.495117 0 3.87012 0 7.99512V19.2451C0 20.5107 0.984375 21.4951 2.25 21.4951H8.25C9.46875 21.4951 10.5 20.5107 10.5 19.2451V13.2451C10.5 12.0264 9.46875 10.9951 8.25 10.9951Z"
                            fill="#EB9309" />
                        </svg>
                      </span>
                        <h4 class="reviewblock__qotes">“ I ah4preciate your amazing services and professional staff for
                          all your
                          hard work and
                          creative thinking! It was fun,
                          and I hope to work with you again soon “</h4>
                        <span class="reviewblock__author__name">Rasalina Willams</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mvv pt-100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="mvvTabs">
                <div class="mvvTabs__wrapper d-flex align-items-start">
                  <div class="nav nav-pills mb-30" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="mvvTabs__button nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Our MIssion</button>
                    <button class="mvvTabs__button nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Our Vision</button>
                    <button class="mvvTabs__button nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Our Values</button>
                  </div>
                  <div class="tab-content mb-30" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      <div class="mvvTabs__content">
                        <h2 class="mvvTabs__heading">Listen, Act, Learn, Repeat</h2>
                        <p class="mvvTabs__text mb-25">There are many variations of passages of Lorem Ipsum available, but
                          the
                          majority have suffered
                          alteration in some form,
                          by injected humour, or randomised words which don't look even slightly believable. If you are
                          going to use a passage of
                          Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle There
                          are many variations</p>
                        <div class="mvvTabs__skills">
                          <div class="mvvTabs__skills__block mb-20">
                            <h4 class="mvvTabs__skills__counter"><span class="mvvTabs__skills__counter">45</span>%</h4>
                            <span class="mvvTabs__skills__title color-title">kids need help</span>
                          </div>
                          <div class="mvvTabs__skills__block mb-20">
                            <h4 class="mvvTabs__skills__counter">$<span class="mvvTabs__skills__counter">140</span>k</h4>
                            <span class="mvvTabs__skills__title color-title">raised Now</span>
                          </div>
                          <div class="mvvTabs__skills__block mb-20">
                            <h4 class="mvvTabs__skills__counter"><span class="mvvTabs__skills__counter">189</span>+</h4>
                            <span class="mvvTabs__skills__title color-title">Voleenteer</span>
                          </div>
                        </div>
                        <p class="mvvTabs__text mb-0">There are many variations of passages of Lorem Ipsum available, but
                          the
                          majority have suffered alteration in some form,
                          by injected humour.</p>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                      <div class="mvvTabs__content">
                        <h2 class="mvvTabs__heading">Listen, Act, Learn, Repeat</h2>
                        <p class="mvvTabs__text mb-25">There are many variations of passages of Lorem Ipsum available, but
                          the
                          majority have suffered
                          alteration in some form,
                          by injected humour, or randomised words which don't look even slightly believable. If you are
                          going to use a passage of
                          Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle There
                          are many variations</p>
                        <div class="mvvTabs__skills">
                          <div class="mvvTabs__skills__block mb-20">
                            <h4 class="mvvTabs__skills__counter"><span class="mvvTabs__skills__counter">45</span>%</h4>
                            <span class="mvvTabs__skills__title color-title">kids need help</span>
                          </div>
                          <div class="mvvTabs__skills__block mb-20">
                            <h4 class="mvvTabs__skills__counter">$<span class="mvvTabs__skills__counter">140</span>k</h4>
                            <span class="mvvTabs__skills__title color-title">raised Now</span>
                          </div>
                          <div class="mvvTabs__skills__block mb-20">
                            <h4 class="mvvTabs__skills__counter"><span class="mvvTabs__skills__counter">189</span>+</h4>
                            <span class="mvvTabs__skills__title color-title">Voleenteer</span>
                          </div>
                        </div>
                        <p class="mvvTabs__text mb-0">There are many variations of passages of Lorem Ipsum available, but
                          the
                          majority have suffered alteration in some form,
                          by injected humour.</p>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                      <div class="mvvTabs__content">
                        <h2 class="mvvTabs__heading">Listen, Act, Learn, Repeat</h2>
                        <p class="mvvTabs__text mb-25">There are many variations of passages of Lorem Ipsum available, but
                          the
                          majority have suffered
                          alteration in some form,
                          by injected humour, or randomised words which don't look even slightly believable. If you are
                          going to use a passage of
                          Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle There
                          are many variations</p>
                        <div class="mvvTabs__skills">
                          <div class="mvvTabs__skills__block mb-20">
                            <h4 class="mvvTabs__skills__counter"><span class="mvvTabs__skills__counter">45</span>%</h4>
                            <span class="mvvTabs__skills__title color-title">kids need help</span>
                          </div>
                          <div class="mvvTabs__skills__block mb-20">
                            <h4 class="mvvTabs__skills__counter">$<span class="mvvTabs__skills__counter">140</span>k</h4>
                            <span class="mvvTabs__skills__title color-title">raised Now</span>
                          </div>
                          <div class="mvvTabs__skills__block mb-20">
                            <h4 class="mvvTabs__skills__counter"><span class="mvvTabs__skills__counter">189</span>+</h4>
                            <span class="mvvTabs__skills__title color-title">Voleenteer</span>
                          </div>
                        </div>
                        <p class="mvvTabs__text mb-0">There are many variations of passages of Lorem Ipsum available, but
                          the
                          majority have suffered alteration in some form,
                          by injected humour.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonials End -->
    <!-- Portfolio -->
    <section class="portfolio">
      <div class="container-fluid p-0 overflow-hidden">
        <div class="row g-0">
          <div class="col-lg-4 col-md-6">
            <div class="portfolioBlock position-relative portfolioBlock--active">
              <figure class="portfolioBlock__figure">
                <img class="portfolioBlock__figure__thumb" src="image/portfolio/portfolio-thumb1.jpg" alt="Gainioz Portfolio">
                <div class="portfolioBlock__figure__shape">
                  <img src="image/shapes/portfolio-shape.png" alt="Gainioz">
                </div>
              </figure>
              <div class="portfolioBlock__content">
                <h2 class="portfolioBlock__heading text-uppercase"><a href="#">Homeless People In
                    africa</a></h2>
                <a class="portfolioBlock__hashLink" href="https://instagram.com" target="_blank"><span># Build
                  Home</span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="portfolioBlock position-relative">
              <figure class="portfolioBlock__figure">
                <img class="portfolioBlock__figure__thumb" src="image/portfolio/portfolio-thumb2.jpg" alt="Gainioz Portfolio">
                <div class="portfolioBlock__figure__shape">
                  <img src="image/shapes/portfolio-shape.png" alt="Gainioz">
                </div>
              </figure>
              <div class="portfolioBlock__content">
                <h2 class="portfolioBlock__heading text-uppercase"><a href="#">Homeless People In
                    myanmar</a></h2>
                <a class="portfolioBlock__hashLink" href="https://instagram.com" target="_blank"><span># Build
                  Home</span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="portfolioBlock position-relative">
              <figure class="portfolioBlock__figure">
                <img class="portfolioBlock__figure__thumb" src="image/portfolio/portfolio-thumb3.jpg" alt="Gainioz Portfolio">
                <div class="portfolioBlock__figure__shape">
                  <img src="image/shapes/portfolio-shape.png" alt="Gainioz">
                </div>
              </figure>
              <div class="portfolioBlock__content">
                <h2 class="portfolioBlock__heading text-uppercase"><a href="#">Foodless People In
                    Sudan</a></h2>
                <a class="portfolioBlock__hashLink" href="https://instagram.com" target="_blank"><span># Grow
                  Grain</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio End -->
    <!-- Blog -->
    <section class="blog pt-125 pb-55">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <!-- Section Heading/Title -->
            <div class="sectionTitle text-center mb-60">
              <span class="sectionTitle__small justify-content-center">
              <i class="fa-solid fa-heart btn__icon"></i>
              Newsfeds
            </span>
              <h2 class="sectionTitle__big">Latest News & Article</h2>
            </div>
            <!-- Section Heading/Title End -->
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="blogBlock blogBlock--style1 mb-60">
              <figure class="blogBlock__figure">
                <a href="#" class="blogBlock__figure__link">
                  <img src="image/blog/blog1.jpg" alt="Gainioz Blog" class="blogBlock__figure__image">
                </a>
              </figure>
              <div class="blogBlock__content">
                <div class="blogBlock__header">
                  <span class="blogBlock__tag tag mb-20">Charity</span>
                  <h2 class="blogBlock__heading heading text-uppercase mb-20"><a class="blogBlock__heading__link" href="#">Start a
                      fundraiser for yourself
                      in World
                      Charity
                      Day</a></h2>
                </div>
                <div class="blogBlock__body mb-30">
                  <p class="blogBlock__text text">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words which don't look
                  </p>
                </div>
                <div class="blogBlock__meta">
                  <ul class="blogBlock__meta__list">
                    <li>
                      <a class="blogBlock__metaUser" href="#">
                        <img class="blogBlock__metaUser__thumb" src="image/users/user1.jpg" alt="Gainioz User">
                        <span class="blogBlock__metaUser__name">Kathryn Murphy</span>
                      </a>
                    </li>
                    <li>
                      <button class="blogBlock__reactButton">
                        <span class="blogBlock__reactButton__count">356</span>
                      </button>
                    </li>
                    <li>
                      <div class="blogBlock__date">
                        <span class="blogBlock__date__text">12.January.2021</span>
                        <i class="fa-regular fa-clock"></i>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="blogBlock blogBlock--style2 mb-60">
              <figure class="blogBlock__figure">
                <a href="#" class="blogBlock__figure__link">
                  <img src="image/blog/blog2.jpg" alt="Gainioz Blog" class="blogBlock__figure__image">
                </a>
              </figure>
              <div class="blogBlock__content">
                <div class="blogBlock__header">
                  <span class="blogBlock__tag tag mb-20">Health</span>
                  <h2 class="blogBlock__heading heading text-uppercase mb-20">
                    <a class="blogBlock__heading__link" href="#">
                      do you know why african people year of year waterless?
                    </a>
                  </h2>
                </div>
                <div class="blogBlock__body mb-30">
                  <p class="blogBlock__text text">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words which don't look
                  </p>
                </div>
                <div class="blogBlock__meta">
                  <ul class="blogBlock__meta__list">
                    <li>
                      <a class="blogBlock__metaUser" href="#">
                        <img class="blogBlock__metaUser__thumb" src="image/users/user2.jpg" alt="Gainioz User">
                        <span class="blogBlock__metaUser__name">Savannah Nguyen</span>
                      </a>
                    </li>
                    <li>
                      <button class="blogBlock__reactButton">
                        <span class="blogBlock__reactButton__count">556</span>
                      </button>
                    </li>
                    <li>
                      <div class="blogBlock__date">
                        <span class="blogBlock__date__text">12.January.2021</span>
                        <i class="fa-regular fa-clock"></i>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="blogBlock blogBlock--style2 mb-60">
              <figure class="blogBlock__figure">
                <a href="#" class="blogBlock__figure__link">
                  <img src="image/blog/blog3.jpg" alt="Gainioz Blog" class="blogBlock__figure__image">
                </a>
              </figure>
              <div class="blogBlock__content">
                <div class="blogBlock__header">
                  <span class="blogBlock__tag tag mb-20">Education</span>
                  <h2 class="blogBlock__heading heading text-uppercase mb-20">
                    <a class="blogBlock__heading__link" href="#">
                      Why you should join as a volunteer
                      with us - 2022
                    </a>
                  </h2>
                </div>
                <div class="blogBlock__body mb-30">
                  <p class="blogBlock__text text">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words which don't look
                  </p>
                </div>
                <div class="blogBlock__meta">
                  <ul class="blogBlock__meta__list">
                    <li>
                      <a class="blogBlock__metaUser" href="#">
                        <img class="blogBlock__metaUser__thumb" src="image/users/user3.jpg" alt="Gainioz User">
                        <span class="blogBlock__metaUser__name">Brooklyn Simmons</span>
                      </a>
                    </li>
                    <li>
                      <button class="blogBlock__reactButton">
                        <span class="blogBlock__reactButton__count">556</span>
                      </button>
                    </li>
                    <li>
                      <div class="blogBlock__date">
                        <span class="blogBlock__date__text">15.January.2021</span>
                        <i class="fa-regular fa-clock"></i>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog End -->
    <!-- Sponsors -->
    <section class="sponsors pb-60">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="sponsorsTitle">
              <span class="sponsorsTitle__line"></span>
              <h2 class="sponsorsTitle__heading text-uppercase">“ Become Support Partner ”</h2>
              <span class="sponsorsTitle__line"></span>
            </div>
          </div>
        </div>
        <div class="sponsor-slider-active swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="sponsorsItem mb-40">
                <img src="image/sponsors/sponsors1.png" alt="Gainioz Sponsors">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="sponsorsItem mb-40">
                <img src="image/sponsors/sponsors2.png" alt="Gainioz Sponsors">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="sponsorsItem mb-40">
                <img src="image/sponsors/sponsors3.png" alt="Gainioz Sponsors">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="sponsorsItem mb-40">
                <img src="image/sponsors/sponsors4.png" alt="Gainioz Sponsors">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="sponsorsItem mb-40">
                <img src="image/sponsors/sponsors5.png" alt="Gainioz Sponsors">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="sponsorsItem mb-40">
                <img src="image/sponsors/sponsors6.png" alt="Gainioz Sponsors">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Sponsors End -->
@endsection
