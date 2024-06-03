@extends('layouts.app')
@section('title', 'Donation Detail')

@section('body')
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
        <header class="header header--styleFour sticky-on">
            <div>
                <div class="container container--custom">
                    <div class="row">
                        <div class="col-12">
                            <div class="header__wrapper">
                                <!-- logo start -->
                                <div class="header__logo">
                                    <a href="index.html" class="header__logo__link">
                                        <img src="{{ asset('image/logos/logo_1.svg') }}" alt="Gainioz"
                                            class="header__logo__image">
                                    </a>
                                </div>
                                <!-- logo end -->
                                <!-- Main Menu Start -->
                                <div class="header__menu">
                                    <nav class="mainMenu">
                                        <ul>
                                            <li><a href="/">Home</a></li>
                                            <li><a href="#">Tentang</a></li>
                                            <li><a href="{{ route('donation') }}">Donasi</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Kontak</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Main Menu End -->
                                <!-- Header Right Buttons Search Cart -->
                                <div class="header__right">
                                    <div class="header__actions header__actions--style2">
                                        <ul>
                                            <li>
                                                <a href="#template-search">
                                                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M21.8281 21.4609L16.2852 15.918C16.1992 15.832 16.0703 15.7891 15.9414 15.7891H15.4688C16.9727 14.1562 17.875 12.0508 17.875 9.6875C17.875 4.78906 13.8359 0.75 8.9375 0.75C3.99609 0.75 0 4.78906 0 9.6875C0 14.6289 3.99609 18.625 8.9375 18.625C11.2578 18.625 13.4062 17.7227 14.9961 16.2617V16.6914C14.9961 16.8633 15.0391 16.9922 15.125 17.0781L20.668 22.6211C20.8828 22.8359 21.1836 22.8359 21.3984 22.6211L21.8281 22.1914C22.043 21.9766 22.043 21.6758 21.8281 21.4609ZM8.9375 17.25C4.72656 17.25 1.375 13.8984 1.375 9.6875C1.375 5.51953 4.72656 2.125 8.9375 2.125C13.1055 2.125 16.5 5.51953 16.5 9.6875C16.5 13.8984 13.1055 17.25 8.9375 17.25Z"
                                                            fill="#7FB432" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="products.html">
                                                    <span>2</span>
                                                    <svg width="25" height="20" viewBox="0 0 25 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M24.2344 7H20.9258L14.9102 0.382812C14.6523 0.0820312 14.2227 0.0820312 13.9648 0.339844C13.6641 0.597656 13.6641 1.02734 13.9219 1.28516L19.0781 7H5.62891L10.7852 1.28516C11.043 1.02734 11.043 0.597656 10.7422 0.339844C10.4844 0.0820312 10.0547 0.0820312 9.79688 0.382812L3.78125 7H0.515625C0.214844 7 0 7.25781 0 7.51562V7.85938C0 8.16016 0.214844 8.375 0.515625 8.375H1.20312L2.49219 17.6133C2.62109 18.6445 3.48047 19.375 4.51172 19.375H20.1953C21.2266 19.375 22.0859 18.6445 22.2148 17.6133L23.5039 8.375H24.2344C24.4922 8.375 24.75 8.16016 24.75 7.85938V7.51562C24.75 7.25781 24.4922 7 24.2344 7ZM20.8828 17.4414C20.7969 17.7852 20.5391 18 20.1953 18H4.51172C4.16797 18 3.91016 17.7852 3.82422 17.4414L2.57812 8.375H22.1289L20.8828 17.4414ZM13.0625 10.7812C13.0625 10.4375 12.7188 10.0938 12.375 10.0938C11.9883 10.0938 11.6875 10.4375 11.6875 10.7812V15.5938C11.6875 15.9805 11.9883 16.2812 12.375 16.2812C12.7188 16.2812 13.0625 15.9805 13.0625 15.5938V10.7812ZM17.875 10.7812C17.875 10.4375 17.5312 10.0938 17.1875 10.0938C16.8008 10.0938 16.5 10.4375 16.5 10.7812V15.5938C16.5 15.9805 16.8008 16.2812 17.1875 16.2812C17.5312 16.2812 17.875 15.9805 17.875 15.5938V10.7812ZM8.25 10.7812C8.25 10.4375 7.90625 10.0938 7.5625 10.0938C7.17578 10.0938 6.875 10.4375 6.875 10.7812V15.5938C6.875 15.9805 7.17578 16.2812 7.5625 16.2812C7.90625 16.2812 8.25 15.9805 8.25 15.5938V10.7812Z"
                                                            fill="#7FB432" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header__button">
                                        <a class="btn btn--styleOne btn--secondary it-btn" href="donation-listing.html">
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
                                            <svg class="it-btn__animation" xmlns="http://www.w3.org/2000/svg"
                                                version="1.1">
                                                <defs>
                                                    <filter>
                                                        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                                                        </feGaussianBlur>
                                                        <feColorMatrix in="blur" mode="matrix"
                                                            values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7"
                                                            result="goo">
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
                                    <svg width="25" height="20" viewBox="0 0 25 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M24.2344 7H20.9258L14.9102 0.382812C14.6523 0.0820312 14.2227 0.0820312 13.9648 0.339844C13.6641 0.597656 13.6641 1.02734 13.9219 1.28516L19.0781 7H5.62891L10.7852 1.28516C11.043 1.02734 11.043 0.597656 10.7422 0.339844C10.4844 0.0820312 10.0547 0.0820312 9.79688 0.382812L3.78125 7H0.515625C0.214844 7 0 7.25781 0 7.51562V7.85938C0 8.16016 0.214844 8.375 0.515625 8.375H1.20312L2.49219 17.6133C2.62109 18.6445 3.48047 19.375 4.51172 19.375H20.1953C21.2266 19.375 22.0859 18.6445 22.2148 17.6133L23.5039 8.375H24.2344C24.4922 8.375 24.75 8.16016 24.75 7.85938V7.51562C24.75 7.25781 24.4922 7 24.2344 7ZM20.8828 17.4414C20.7969 17.7852 20.5391 18 20.1953 18H4.51172C4.16797 18 3.91016 17.7852 3.82422 17.4414L2.57812 8.375H22.1289L20.8828 17.4414ZM13.0625 10.7812C13.0625 10.4375 12.7188 10.0938 12.375 10.0938C11.9883 10.0938 11.6875 10.4375 11.6875 10.7812V15.5938C11.6875 15.9805 11.9883 16.2812 12.375 16.2812C12.7188 16.2812 13.0625 15.9805 13.0625 15.5938V10.7812ZM17.875 10.7812C17.875 10.4375 17.5312 10.0938 17.1875 10.0938C16.8008 10.0938 16.5 10.4375 16.5 10.7812V15.5938C16.5 15.9805 16.8008 16.2812 17.1875 16.2812C17.5312 16.2812 17.875 15.9805 17.875 15.5938V10.7812ZM8.25 10.7812C8.25 10.4375 7.90625 10.0938 7.5625 10.0938C7.17578 10.0938 6.875 10.4375 6.875 10.7812V15.5938C6.875 15.9805 7.17578 16.2812 7.5625 16.2812C7.90625 16.2812 8.25 15.9805 8.25 15.5938V10.7812Z"
                                            fill="#7FB432" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.8281 21.4609L16.2852 15.918C16.1992 15.832 16.0703 15.7891 15.9414 15.7891H15.4688C16.9727 14.1562 17.875 12.0508 17.875 9.6875C17.875 4.78906 13.8359 0.75 8.9375 0.75C3.99609 0.75 0 4.78906 0 9.6875C0 14.6289 3.99609 18.625 8.9375 18.625C11.2578 18.625 13.4062 17.7227 14.9961 16.2617V16.6914C14.9961 16.8633 15.0391 16.9922 15.125 17.0781L20.668 22.6211C20.8828 22.8359 21.1836 22.8359 21.3984 22.6211L21.8281 22.1914C22.043 21.9766 22.043 21.6758 21.8281 21.4609ZM8.9375 17.25C4.72656 17.25 1.375 13.8984 1.375 9.6875C1.375 5.51953 4.72656 2.125 8.9375 2.125C13.1055 2.125 16.5 5.51953 16.5 9.6875C16.5 13.8984 13.1055 17.25 8.9375 17.25Z"
                                            fill="#7FB432" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <button class="headerBurgerMenu__button sidebarBtn"
                                    onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
                                    aria-label="Main Menu">
                                    <svg width="50" height="50" viewBox="0 0 100 100">
                                        <path class="line line1"
                                            d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                                        <path class="line line2" d="M 20,50 H 80" />
                                        <path class="line line3"
                                            d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
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
                <a href="index.html">
                    <img class="mean-bar__logo" alt="Techkit" src="image/logos/logo_1.svg" />
                </a>
            </div>
            <div class="offscreen-navigation mb-40">
                <nav class="menu-main-primary-container">
                    <ul class="menu">
                        <li class="list menu-item-parent menu-item-has-children">
                            <a class="animation" href="index.html">Home</a>
                            <ul class="main-menu__dropdown sub-menu">
                                <li><a href="index.html">Home One</a></li>
                                <li>
                                    <a href="index-2.html">Home Two</a>
                                </li>
                                <li><a href="index-3.html">Home Three</a></li>
                                <li>
                                    <a href="index-4.html">Home Four</a>
                                </li>
                                <!-- <li class="list menu-item-has-children">
                              <a href="vertical-slider.html">Home Dummy</a>
                              <ul class="main-menu__dropdown sub-menu">
                                  <li><a href="single-post1.html">Home Demo 1</a></li>
                                  <li><a href="single-post2.html">Home Demo 2</a></li>
                                  <li><a href="single-post3.html">Home Demo 3</a></li>
                              </ul>
                          </li> -->
                            </ul>
                        </li>
                        <li class="list menu-item-parent">
                            <a class="animation" href="about.html">About</a>
                        </li>
                        <li class="list menu-item-parent">
                            <a class="animation" href="donation-listing.html">Donations</a>
                        </li>
                        <li class="list menu-item-parent">
                            <a class="animation" href="blog.html">Blog</a>
                        </li>
                        <li class="list menu-item-parent menu-item-has-children">
                            <a class="animation" href="index.html">Pages</a>
                            <ul class="main-menu__dropdown sub-menu">
                                <li><a href="events.html">Events</a></li>
                                <li>
                                    <a href="faq.html">Faq</a>
                                </li>
                                <li><a href="products.html">Shop</a></li>
                                <li>
                                    <a href="service.html">Service</a>
                                </li>
                                <li>
                                    <a href="volunteers.html">Volunteers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list menu-item-parent">
                            <a class="animation" href="contact.html">Contacts</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="itSocial itSocial--sidebar mb-40">
                <ul>
                    <li>
                        <a class="facebook" href="https://codercredit.com/" rel="nofollow">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a class="twitter" href="https://codercredit.com/" rel="nofollow">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a class="instagram" href="https://codercredit.com/" rel="nofollow">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a class="linkedin" href="https://codercredit.com/" rel="nofollow">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </ul>
                </div>
                <div class="cc__button">
                    <div class="header__button">
                        <a class="btn btn--styleOne btn--secondary it-btn" href="donation-listing.html">
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
                                        <feColorMatrix in="blur" mode="matrix"
                                            values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
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
            <!-- Page Breadcumb -->
            <section class="pageBreadcumb pageBreadcumb--style1 position-relative"
                data-bg-image="{{ asset('image/bg/pageBreadcumbBg1.jpg') }}">
                <div class="pageBreadcumbTopDown">
                    <a class="btn btn--styleOne btn--icon btn--icon2 it-btn" href="donation-listing.html">
                        <svg class="btn__icon" width="10" height="14" viewBox="0 0 10 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.869141 8.70508L1.45508 8.11914C1.60156 8.00195 1.80664 8.00195 1.95312 8.14844L4.23828 10.4922V0.414062C4.23828 0.208984 4.38477 0.0625 4.58984 0.0625H5.41016C5.58594 0.0625 5.76172 0.208984 5.76172 0.414062V10.4922L8.01758 8.14844C8.16406 8.00195 8.36914 8.00195 8.51562 8.11914L9.10156 8.70508C9.21875 8.85156 9.21875 9.05664 9.10156 9.20312L5.23438 13.0703C5.08789 13.1875 4.88281 13.1875 4.73633 13.0703L0.869141 9.20312C0.751953 9.05664 0.751953 8.85156 0.869141 8.70508Z"
                                fill="#60646B" />
                        </svg>
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
                                    <feColorMatrix in="blur" mode="matrix"
                                        values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                                    </feColorMatrix>
                                    <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                                </filter>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="sectionShape sectionShape--top">
                    <img src="{{ asset('image/shapes/pagebreadcumbShapeTop.svg') }}" alt="Gainioz">
                </div>
                <div class="sectionShape sectionShape--bottom">
                    <img src="{{ asset('image/about/99.jpg') }}" alt="Gainioz">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="pageTitle text-center">
                                <h2 class="pageTitle__heading text-white text-uppercase mb-25">Detail Donasi</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Detail Donasi</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Breadcumb End -->
            <!-- Donation Details -->
            <section class="donation pt-130 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mb-30">
                            <div class="innerWrapper">
                                <div class="donationDetails">
                                    <div class="donationDetails__header mb-45">
                                        <figure class="thumb mb-45">
                                            <!-- melakukan pengecekan apakah terdapat gambar banner kampanye menuggnakan fitur dari blade -->
                                            @if ($dataDetilKampanye->gambar == '')
                                                <img src="{{ asset('$dataDetilKampanye->gambar') }}" alt="Gambar Kampanye">
                                            @endif
                                        </figure>
                                        <h3 class="donationDetails__title text-uppercase">{{ $dataDetilKampanye->nama }}</h3>
                                    </div>
                                    <div class="featureBlock__donation featureBlock__donation--style2 mb-50">
                                        <div class="featureBlock__donation__progress">
                                            <div class="featureBlock__donation__bar">
                                                <span class="featureBlock__donation__text skill-bar"
                                                    data-width="{{ $persentaseProgress }}%"
                                                    style="width: {{ $persentaseProgress }}%;">{{ $persentaseProgress }}%</span>
                                                <div class="featureBlock__donation__line">
                                                    <span class="skill-bars">
                                                        <span class="skill-bars__line skill-bar"
                                                            data-width="{{ $persentaseProgress }}%"
                                                            style="width: {{ $persentaseProgress }}%;"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="featureBlock__eqn">
                                            <div class="featureBlock__eqn__block">
                                                <span class="featureBlock__eqn__title">our goal</span>
                                                <span
                                                    class="featureBlock__eqn__price">Rp{{ number_format($dataDetilKampanye->targetDonasi) }}</span>
                                            </div>
                                            <div class="featureBlock__eqn__block text-center">
                                                <span class="featureBlock__eqn__title">Raised</span>
                                                <span
                                                    class="featureBlock__eqn__price">Rp{{ number_format($uangTerkumpul) }}</span>
                                            </div>
                                            <div class="featureBlock__eqn__block text-end">
                                                <span class="featureBlock__eqn__title">to go</span>
                                                <span
                                                    class="featureBlock__eqn__price">Rp{{ number_format($uangKurang) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="donationDetails__warning">
                                        <p>
                                            <span
                                                    class="featureBlock__eqn__price">Harga per porsi : Rp.{{ number_format($dataDetilKampanye->makanan->harga) }}</span>
                                        </p>
                                    </div>
                                    <!-- gunakan livewire untuk mendapatkan estimasi harga total donasi secara langsung -->
                                    @livewire('input-porsi', ['makanan' => $dataDetilKampanye->makanan])
                                    
                                    <h4 class="donationDetails__heading mb-25">{{ $dataDetilKampanye->makanan->nama }}</h4>
                                    <p class="donationDetails__text mb-30">{{ $dataDetilKampanye->makanan->deskripsi }}</p>
                                    <h4 class="donationDetails__heading mb-25">Our challenge & Goal</h4>
                                    <p class="donationDetails__text mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Curabitur
                                        vulputate vestibulum Phasellus rhoncus, dolor eget
                                        viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus.
                                        Vestibulum non justo
                                        consectetur, cursus
                                        ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim.
                                        Vivamus
                                        faucibus ex sed nibh
                                        egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus</p>
                                    <p class="donationDetails__text mb-30">We have covered many special events such as
                                        fireworks, fairs,
                                        parades, races, walks, awards ceremonies,
                                        fashion shows,
                                        sporting events, and even a memorial service.</p>
                                    <p class="donationDetails__text mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Curabitur
                                        vulputate vestibulum Phasellus rhoncus, dolor eget
                                        viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus.
                                        Vestibulum non justo
                                        consectetur, cursus
                                        ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim.
                                        Vivamus
                                        faucibus ex sed nibh
                                        egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus. Suspendisse
                                        consectetur
                                        tristique tortor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-30">
                            <div class="innerWrapperSidebar">
                                <div id="donation-details" class="sidebarWidget">
                                    <div class="sidebarTitle">
                                        <h5 class="sidebarTitle__heading text-uppercase mb-30">DETAIL DONASI</h5>
                                    </div>
                                    <div class="sidebarContacts">
                                        <input type="text" id="donor-name" class="sidebarContacts__input" placeholder="Enter name*" required>
                                        <input type="email" id="donor-email" class="sidebarContacts__input" placeholder="Enter your mail*" required>
                                        <input type="hidden" id="kampanye-id" class="sidebarContacts__input" value="{{$dataDetilKampanye->id}}">
                                        <p>or Login <a href="">here</a></p>
                                        <button id="pay-button" class="btn btn--styleOne btn--secondary it-btn">
                                            <span  class="btn__text">Donasi Sekarang</span>
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
                                                        <feColorMatrix in="blur" mode="matrix"
                                                            values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7"
                                                            result="goo">
                                                        </feColorMatrix>
                                                        <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3" style="width: 100%" id="snap-container"></div>
                          </div>
                    </div>
                </div>
            </section>
            <!-- Donation Details End -->
        </main>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript">
            document.getElementById('pay-button').addEventListener('click', function () {
                const donorName = document.getElementById('donor-name').value;
                const donorEmail = document.getElementById('donor-email').value;
                const donationAmount = document.getElementById('donation-amount').value;
                const foodAmount = document.getElementById('porsi').value;
        
                fetch('/konfirmasi-donasi', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        name: donorName,
                        email: donorEmail,
                        amount: donationAmount,
                        food: foodAmount
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.snapToken) {
                        document.getElementById('donation-details').style.display = 'none'; // Hide donation details
                        window.snap.embed(data.snapToken, {
                            embedId: 'snap-container',
                            onSuccess: function (result) {
                                Swal.fire('Success', 'Payment successful!', 'success').then(() => {
                                    location.reload();
                                });
                                console.log(result);
                                updateTransactionStatus(result.gross_amount, foodAmount);
                            },
                            onPending: function (result) {
                                Swal.fire('Closed', 'Transaction Cancelled!', 'error').then(() => {
                                    location.reload();
                                });
                                console.log(result);
                            },
                            onError: function (result) {
                                Swal.fire('Error', 'Payment failed!', 'error').then(() => {
                                    location.reload();
                                });
                                console.log(result);
                            },
                            onClose: function () {
                                Swal.fire('Closed', 'You closed the popup without finishing the payment', 'warning').then(() => {
                                    location.reload();
                                });
                            }
                        });
                    } else {
                        console.error('Error:', data.error);
                    }
                })
                .catch(error => console.error('Error:', error));
            });
        
            function updateTransactionStatus(amount, food) {
                const id = document.getElementById('kampanye-id').value;
                fetch('/buat-transaksi', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        id: id,
                        amount: amount,
                        food: food
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (!data.success) {
                        console.error('Error updating status:', data.error);
                    }
                })
                .catch(error => console.error('Error:', error));
            }
        </script>
               
        
        <!-- Main End -->
    @endsection
