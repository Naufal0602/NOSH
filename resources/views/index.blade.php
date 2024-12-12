<!DOCTYPE html>
<html>
  <head>
    <title>Cravee - Free Landing Page for Food Products</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="description" content="Bootstrap 5 Landing Page HTML CSS Template">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('../public/template/css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../public/template/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Poller+One&display=swap" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="{{ asset('../public/template/js/modernizr.js') }}"></script>
  </head>
  <body class="bg-body" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
        <path d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="quote" viewBox="0 0 24 24">
        <path fill="currentColor" d="M11.192 15.757c0-.88-.23-1.618-.69-2.217c-.326-.412-.768-.683-1.327-.812c-.55-.128-1.07-.137-1.54-.028c-.16-.95.1-1.956.76-3.022c.66-1.065 1.515-1.867 2.558-2.403L9.372 5c-.8.396-1.56.898-2.26 1.505c-.71.607-1.34 1.305-1.9 2.094s-.98 1.68-1.25 2.69s-.345 2.04-.216 3.1c.168 1.4.62 2.52 1.356 3.35C5.837 18.58 6.754 19 7.85 19c.965 0 1.766-.29 2.4-.878c.628-.576.94-1.365.94-2.368l.002.003zm9.124 0c0-.88-.23-1.618-.69-2.217c-.326-.42-.77-.692-1.327-.817c-.56-.124-1.073-.13-1.54-.022c-.16-.94.09-1.95.752-3.02c.66-1.06 1.513-1.86 2.556-2.4L18.49 5c-.8.396-1.555.898-2.26 1.505a11.29 11.29 0 0 0-1.894 2.094c-.556.79-.97 1.68-1.24 2.69a8.042 8.042 0 0 0-.217 3.1c.166 1.4.616 2.52 1.35 3.35c.733.834 1.647 1.252 2.743 1.252c.967 0 1.768-.29 2.402-.877c.627-.576.942-1.365.942-2.368v.011z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="play" viewBox="0 0 32 32">
        <path fill="currentColor" d="M7 28a1 1 0 0 1-1-1V5a1 1 0 0 1 1.482-.876l20 11a1 1 0 0 1 0 1.752l-20 11A1 1 0 0 1 7 28ZM8 6.69v18.62L24.925 16Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="balloon" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
          <path d="M8 16.607c1.15.86 2.518 1.38 4 1.393c4.142.034 7.594-3.92 7.56-8.196C19.527 5.53 16.142 2.034 12 2c-4.142-.034-7.473 3.404-7.44 7.68A8.88 8.88 0 0 0 5.244 13" />
          <path d="M15.5 9a3.035 3.035 0 0 0-3-3M12 20.35c.321 0 .482 0 .593-.022c.654-.128 1.051-.772.858-1.39c-.033-.105-.109-.242-.261-.515M12 20.35c-.321 0-.482 0-.593-.022c-.654-.128-1.051-.772-.858-1.39c.033-.105.109-.242.261-.515M12 20.35v2.15" />
        </g>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="bag-heart" viewBox="0 0 24 24">
        <g fill="none">
          <path fill="currentColor" d="m12 12.191l-.519.542a.75.75 0 0 0 1.038 0L12 12.191Zm-.957 3.675l-.444.604l.444-.604Zm1.914 0l-.444-.605l.444.605Zm-.957.462v.75v-.75Zm-.514-1.067c-.417-.307-.878-.69-1.227-1.093c-.368-.426-.509-.757-.509-.971h-1.5c0 .77.441 1.45.875 1.952c.453.525 1.014.984 1.474 1.321l.887-1.21ZM9.75 13.197c0-.576.263-.827.492-.907c.25-.088.714-.06 1.24.443l1.037-1.083c-.825-.79-1.861-1.096-2.773-.776c-.934.327-1.496 1.226-1.496 2.323h1.5Zm3.65 3.273c.46-.337 1.022-.796 1.475-1.32c.434-.502.875-1.183.875-1.953h-1.5c0 .214-.141.545-.51.971c-.348.403-.809.786-1.226 1.093l.887 1.21Zm2.35-3.273c0-1.097-.563-1.996-1.496-2.323c-.912-.32-1.948-.014-2.773.776l1.038 1.083c.525-.503.989-.531 1.24-.443c.228.08.491.33.491.907h1.5ZM10.6 16.47c.368.27.782.608 1.4.608v-1.5c-.024 0-.04 0-.094-.03a4 4 0 0 1-.42-.287l-.887 1.21Zm1.914-1.21a4 4 0 0 1-.42.289c-.054.029-.07.029-.094.029v1.5c.618 0 1.032-.337 1.4-.608l-.886-1.21Z" />
          <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M9 6V5a3 3 0 1 1 6 0v1m5.224 6.526c-.586-3.121-.878-4.682-1.99-5.604C17.125 6 15.537 6 12.36 6h-.72c-3.176 0-4.764 0-5.875.922c-1.11.922-1.403 2.483-1.989 5.604c-.823 4.389-1.234 6.583-.034 8.029C4.942 22 7.174 22 11.639 22h.722c4.465 0 6.698 0 7.897-1.445c.696-.84.85-1.93.696-3.555" />
        </g>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="handiplast" viewBox="0 0 24 24">
        <g fill="none">
          <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M13.5 7.642L9.071 3.213a4.142 4.142 0 0 0-5.858 5.858L14.93 20.787a4.142 4.142 0 0 0 5.858-5.858l-4.358-4.358" />
          <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="m12 17.858l-2.929 2.929A4.142 4.142 0 0 1 2.596 20m3.546-8l-2.929 2.929c-.322.322-.58.685-.774 1.071M12 6.142l2.929-2.929a4.142 4.142 0 1 1 5.858 5.858L17.857 12" />
          <path fill="currentColor" d="M15.841 12.871a.788.788 0 1 1-1.114 1.114a.788.788 0 0 1 1.114-1.114Zm-3.712-3.712a.787.787 0 1 0-1.114 1.114a.787.787 0 0 0 1.114-1.114Zm4.641 6.497a.787.787 0 1 1-1.114 1.114a.787.787 0 0 1 1.114-1.114ZM9.345 8.23A.788.788 0 1 0 8.23 9.346A.788.788 0 0 0 9.345 8.23Zm3.712 3.713a.787.787 0 1 1-1.113 1.114a.787.787 0 0 1 1.113-1.114Zm.928 2.785a.788.788 0 1 1-1.114 1.113a.788.788 0 0 1 1.114-1.113Zm-3.712-3.713a.787.787 0 1 0-1.114 1.114a.787.787 0 0 0 1.114-1.114Z" />
        </g>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 24 24">
        <path fill="currentColor" d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 24 24">
        <path fill="currentColor" d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 24 24">
        <path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="linkedin" viewBox="0 0 24 24">
        <path fill="currentColor" d="M6.94 5a2 2 0 1 1-4-.002a2 2 0 0 1 4 .002ZM7 8.48H3V21h4V8.48Zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="youtube" viewBox="0 0 24 24">
        <path fill="currentColor" d="M12.244 4c.534.003 1.87.016 3.29.073l.504.022c1.429.067 2.857.183 3.566.38c.945.266 1.687 1.04 1.938 2.022c.4 1.56.45 4.602.456 5.339l.001.152v.174c-.007.737-.057 3.78-.457 5.339c-.254.985-.997 1.76-1.938 2.022c-.709.197-2.137.313-3.566.38l-.504.023c-1.42.056-2.756.07-3.29.072l-.235.001h-.255c-1.13-.007-5.856-.058-7.36-.476c-.944-.266-1.687-1.04-1.938-2.022c-.4-1.56-.45-4.602-.456-5.339v-.326c.006-.737.056-3.78.456-5.339c.254-.985.997-1.76 1.939-2.021c1.503-.419 6.23-.47 7.36-.476h.489ZM9.999 8.5v7l6-3.5l-6-3.5Z" />
      </symbol>
    </svg>
    <header id="header" class="site-header text-black bg-secondary fixed-top mt-3">
      <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="../public/images/main-logo.png" class="logo">
          </a>
          <button class="navbar-toggler d-flex d-lg-none order-3 p-2 border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="navbar-icon" width="50" height="50">
              <use xlink:href="#navbar-icon"></use>
            </svg>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
            <div class="offcanvas-header px-4 pb-0">
              <a class="navbar-brand" href="index.html">
                <img src="../public/images/main-logo.png" class="logo">
              </a>
              <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
            </div>
            <div class="offcanvas-body heading-font">
              <ul class="navbar-nav justify-content-end flex-grow-1 gap-5 pe-3">
                <li class="nav-item">
                  <a class="nav-link active p-0" href="#intro">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link p-0" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link p-0" href="#featured-products">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link p-0" href="#testimonials">Reviews</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link p-0" href="#overview">Overview</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link p-0" href="#subscribe">Newsletter</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link p-0" href="https://templatesjungle.gumroad.com/l/cravee-food-product-bootstrap-template">GET PRO</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <section id="intro" class="position-relative overflow-hidden" style="background-image: url(../public/images/banner-image1.jpg); background-repeat: no-repeat; background-position: center; width: 100%; height: 1080px;">
      <div class="container-lg">
        <div class="row">
          <div class="col-lg-5 col-md-8 content-box position-absolute d-flex justify-content-center align-items-center mx-auto text-center">
            <div class="banner-content bg-orange p-4 rounded-5">
              <h1 class="display-1 text-white">Best Crunchy & Spicy Chips
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="pattern-overlay position-absolute">
        <img src="../public/images/spiralling pattern.png" alt="pattern">
      </div>
    </section>
    <section id="about" class="py-lg-9">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <blockquote class="text-center mx-auto fs-1">
              <p>Indulge in the delectable flavors and wholesome ingredients of Cravee. Each bite is a burst of taste, carefully crafted to bring joy to your palate. Whether you're seeking a savory snack to satisfy.</p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>
    <section id="featured-products">
      <div class="container-lg">
        <div class="col-lg-6 col-md-8 mx-auto">
          <div class="display-header mt-0 text-center mb-5">
            <h2 class="display-4 text-primary">Discover our products</h2>
            <p class="fs-5">Whether you're seeking a savory snack to satisfy.</p>
          </div>
        </div>
        <div class="row">
          <div class="swiper product-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product-card position-relative mb-5">
                  <div class="image-holder zoom-effect">
                    <a href="#">
                      <img src="../public/images/product-item1.jpg" alt="product-item" class="img-fluid rounded-5">
                    </a>
                    <div class="cart-concern position-absolute w-100 d-flex justify-content-center align-items-center">
                      <div class="cart-button">
                        <button type="button" class="btn btn-primary rounded-5"> Add To Cart </button>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail text-center position-absolute rounded-4 bg-white p-4 border mx-auto">
                    <h3 class="card-title fs-4 mt-0 mx-auto">
                      <a href="single-product.html" class="text-dark">Best Crunchy Paprika onion</a>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder zoom-effect">
                    <a href="#">
                      <img src="../public/images/product-item2.jpg" alt="product-item" class="img-fluid rounded-5">
                    </a>
                    <div class="cart-concern position-absolute w-100 d-flex justify-content-center align-items-center">
                      <div class="cart-button">
                        <button type="button" class="btn btn-primary rounded-5"> Add To Cart </button>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail text-center position-absolute rounded-4 bg-white p-4 border mx-auto">
                    <h3 class="card-title fs-4 mt-0 mx-auto">
                      <a href="single-product.html" class="text-dark">The organic cocoa & Nibs</a>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder zoom-effect">
                    <a href="#">
                      <img src="../public/images/product-item3.jpg" alt="product-item" class="img-fluid rounded-5">
                    </a>
                    <div class="cart-concern position-absolute w-100 d-flex justify-content-center align-items-center">
                      <div class="cart-button">
                        <button type="button" class="btn btn-primary rounded-5"> Add To Cart </button>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail text-center position-absolute rounded-4 bg-white p-4 border mx-auto">
                    <h3 class="card-title fs-4 mt-0 mx-auto">
                      <a href="single-product.html" class="text-dark">Crunchy Chips salt & pepper</a>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder zoom-effect">
                    <a href="#">
                      <img src="../public/images/product-item4.jpg" alt="product-item" class="img-fluid rounded-5">
                    </a>
                    <div class="cart-concern position-absolute w-100 d-flex justify-content-center align-items-center">
                      <div class="cart-button">
                        <button type="button" class="btn btn-primary rounded-5"> Add To Cart </button>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail text-center position-absolute rounded-4 bg-white p-4 border mx-auto">
                    <h3 class="card-title fs-4 mt-0 mx-auto">
                      <a href="single-product.html" class="text-dark">Crunchy Chips salt & pepper</a>
                    </h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section>
    <section id="testimonials" class="position-relative py-lg-11">
      <div class="container">
        <div class="row">
          <div class="review-content position-relative">
            <div class="quotation-mark text-center">
              <svg class="quote svg-gray-2">
                <use xlink:href="#quote" />
              </svg>
            </div>
            <div class="swiper review-swiper d-flex">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="review-item text-center col-lg-12">
                    <blockquote class="fs-1">Cravee has completely revolutionized my snacking experience. The flavors are out of this world, and the quality is top-notch. I can now enjoy guilt-free indulgence with their range of healthy snacks. My personal favorite is the crispy chips they are just amazing!.</blockquote>
                    <div class="author-detail">
                      <div class="name fs-4 pt-2">- Jennifer Peterson</div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="review-item text-center col-lg-12">
                    <blockquote class="fs-1">The world is full of possibilities, but few things compare to the sheer delight of biting into something crispy and hearing that satisfying crunch.</blockquote>
                    <div class="author-detail">
                      <div class="name fs-4 pt-2">- Baptiste Dupont</div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="review-item text-center col-lg-12">
                    <blockquote class="fs-1">Crispy and crunchy foods have a way of making ordinary moments extraordinary, turning a simple snack into a memorable experience.</blockquote>
                    <div class="author-detail">
                      <div class="name fs-4 pt-2">- Robert Stevens</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination text-center position-absolute"></div>
      </div>
    </section>
    <section id="overview" class="py-lg-10 pt-lg-0">
      <div class="container-lg">
        <div class="row g-0">
          <div class="col-lg-6">
            <div class="video-content">
              <div class="video-bg position-relative">
                <img src="../publicimages/video-item.jpg" alt="video" class="img-fluid rounded-start">
                <div class="player position-absolute d-flex justify-content-center align-items-center">
                  <a class='youtube play-btn d-flex justify-content-center align-items-center bg-white rounded-pill' href="https://www.youtube.com/embed/2-iXtcRv5Ts">
                    <svg class="play text-dark" width="32" height="42">
                      <use xlink:href="#play"></use>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 bg-white-trans rounded-end py-lg-6 px-lg-6">
            <div class="display-header mt-0 text-center mb-4">
              <h2 class="display-4 text-primary mb-0">Why Our Food?</h2>
              <p class="fs-5">Whether you're seeking a savory snack to satisfy.</p>
            </div>
            <div class="featured-item mb-4 text-center">
              <div class="featured-title fs-5 fw-bold mb-1">Taste and Quality</div>
              <p class="fs-5">Emphasize the exceptional taste and quality of Cravee products, setting them apart from other food options in the market.</p>
            </div>
            <div class="featured-item mb-4 text-center">
              <div class="featured-title fw-bold fs-5 mb-1">Transparency and Trust</div>
              <p class="fs-5">Communicate the commitment to transparency in ingredients and manufacturing processes, building trust with customers.</p>
            </div>
            <div class="featured-item text-center">
              <div class="featured-title fw-bold fs-5 mb-1">Customer Satisfaction</div>
              <p class="fs-5">Showcase positive reviews and feedback from satisfied customers, highlighting their experiences with Cravee.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="company-services">
      <div class="container-lg">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="icon-box text-center">
              <div class="icon-box-icon mb-3">
                <svg class="balloon svg-primary" width="39" height="39">
                  <use xlink:href="#balloon"></use>
                </svg>
              </div>
              <div class="icon-box-content ps-3">
                <div class="icon-title fs-5 fw-bold text-capitalize">100% high quality product</div>
                <p class="fs-5">We have option of pick up in store</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="icon-box text-center">
              <div class="icon-box-icon mb-3">
                <svg class="bag-heart svg-primary" width="39" height="39">
                  <use xlink:href="#bag-heart"></use>
                </svg>
              </div>
              <div class="icon-box-content ps-3">
                <div class="icon-title fs-5 fw-bold text-capitalize">Free shipping charge</div>
                <p class="fs-5">Inside City delivery within 5 days</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="icon-box text-center">
              <div class="icon-box-icon mb-3">
                <svg class="handiplast svg-primary" width="39" height="39">
                  <use xlink:href="#handiplast"></use>
                </svg>
              </div>
              <div class="icon-box-content ps-3">
                <div class="icon-title fs-5 fw-bold text-capitalize">Money back guarantee</div>
                <p class="fs-5">We will take return in some cases</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="subscribe" class="py-lg-8">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <div class="subscribe-content">
              <div class="subscribe-header text-center">
                <h2 class="display-4 text-uppercase text-primary">Subscribe Us</h2>
                <p class="fs-5">Subscribe to our newsletter for discounts and updates.</p>
              </div>
              <form id="form" class="py-5 position-relative">
                <input type="text" name="email" placeholder="Your email address" class="w-100 p-3 fs-5 border-0 rounded-1">
                <button type="button" class="btn-subscribe text-dark position-absolute border-0 bg-white text-uppercase heading-font">Subscribe</button>
              </form>
              <div class="social-links">
                <ul class="list-unstyled d-flex flex-wrap gap-3 justify-content-center">
                  <li class="p-2">
                    <a href="#">
                      <svg width="25" height="25" viewBox="0 0 24 24" class="svg-link-color">
                        <use xlink:href="#facebook"></use>
                      </svg>
                    </a>
                  </li>
                  <li class="p-2">
                    <a href="#">
                      <svg width="25" height="25" viewBox="0 0 24 24" class="svg-link-color">
                        <use xlink:href="#twitter"></use>
                      </svg>
                    </a>
                  </li>
                  <li class="p-2">
                    <a href="#">
                      <svg width="25" height="25" viewBox="0 0 24 24" class="svg-link-color">
                        <use xlink:href="#youtube"></use>
                      </svg>
                    </a>
                  </li>
                  <li class="p-2">
                    <a href="#">
                      <svg width="25" height="25" viewBox="0 0 24 24" class="svg-link-color">
                        <use xlink:href="#linkedin"></use>
                      </svg>
                    </a>
                  </li>
                  <li class="p-2">
                    <a href="#">
                      <svg width="25" height="25" viewBox="0 0 24 24" class="svg-link-color">
                        <use xlink:href="#instagram"></use>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer id="footer" class="position-relative overflow-hidden" style="background-image: url(images/footer-bg.jpg); background-repeat: no-repeat; background-position: center; width: 100%; height: 680px;">
      <div class="pattern-overlay position-absolute">
        <img src="../public/images/spiralling pattern.png" alt="pattern">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 content-box d-flex flex-wrap justify-content-center align-items-center mx-auto text-center position-absolute">
            <div class="bg-orange p-3 rounded-5">
              <h2 class="display-1 text-white">Hunt Your Hunger With Cravee</h2>
              <a href="#" class="text-uppercase fw-bold text-decoration-underline">Explore Our Products</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="footer-bottom text-center py-3">
      <p>© 2023 Cravee. Designed by <a href="https://templatesjungle.com/" class="text-dark">TemplatesJungle</a>
      </p>
    </div>
   
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script src="{{ asset('../public/template/js/plugins.js') }}"></script>
<script src="{{ asset('../public/template/js/script.js') }}"></script>
<script src="{{ asset('../public/template/js/jquery.min.js') }}"></script>