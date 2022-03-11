<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ env('description') }}</title>
    <meta content="{{ env('description') }}" name="description">
    <meta content="{{ env('keywords') }}" name="keywords">
    <!-- Favicons -->
    <link href="{{ asset('template/assets') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('template/assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('template/assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('template/assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('template/assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('template/assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{ asset('template/assets') }}/css/variables.css" rel="stylesheet">
<!-- <link href="{{ asset('template/assets') }}/css/variables-blue.css" rel="stylesheet"> -->
<!-- <link href="{{ asset('template/assets') }}/css/variables-green.css" rel="stylesheet"> -->
<!-- <link href="{{ asset('template/assets') }}/css/variables-orange.css" rel="stylesheet"> -->
<!-- <link href="{{ asset('template/assets') }}/css/variables-purple.css" rel="stylesheet"> -->
<!-- <link href="{{ asset('template/assets') }}/css/variables-red.css" rel="stylesheet"> -->
<!-- <link href="{{ asset('template/assets') }}/css/variables-pink.css" rel="stylesheet"> -->
    <!-- Template Main CSS File -->
    <link href="{{ asset('template/assets') }}/css/main.css" rel="stylesheet">
    <!-- =======================================================
    * Template Name: HeroBiz - v2.1.0
    * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('template/assets') }}/img/logo.png" alt=""> -->
            <h1>&#8750;i&#409;r&#233;&#2547;<span>&#x212D;&#651;r&#233;</span></h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="index-3.html#hero-fullscreen">Home</a></li>
                <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
                <li><a class="nav-link scrollto" href="index.html#portfolio">Portfolio</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li class="dropdown megamenu"><a href="#"><span>Mega Menu</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li>
                            <a href="#">Column 1 link 1</a>
                            <a href="#">Column 1 link 2</a>
                            <a href="#">Column 1 link 3</a>
                        </li>
                        <li>
                            <a href="#">Column 2 link 1</a>
                            <a href="#">Column 2 link 2</a>
                            <a href="#">Column 3 link 3</a>
                        </li>
                        <li>
                            <a href="#">Column 3 link 1</a>
                            <a href="#">Column 3 link 2</a>
                            <a href="#">Column 3 link 3</a>
                        </li>
                        <li>
                            <a href="#">Column 4 link 1</a>
                            <a href="#">Column 4 link 2</a>
                            <a href="#">Column 4 link 3</a>
                        </li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->
<section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center position-relative" data-aos="zoom-out">
        <h2>Welcome to <span>my dreams</span></h2>
        <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </div>
</section>
<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="{{ asset('template/assets') }}/img/about.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <h5 class="pt-0 pt-lg-5">Yazılım dünyasına meslek lisesi dönemimde C ile embeded yazarak girdim.Ardından önlisans dönemimde C# ve Java kullanmaya çalışarak deskop üzerine karalamalarda bulundum.
                        Iot projelerinin cloud 'unu ayağa kaldırmak için Php 'yi tercih ettim o zamanlar daha popülerdi tabi.Rakiplerimiz artıyor bizde hamle yapmaya çalışıyoruz okuduğun için teşekkürler  :)</h5>
                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Saepe fuga</a></li>
                        <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a></li>
                        <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a></li>
                    </ul><!-- End Tabs -->
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                            </div>
                            <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi
                                dolorum non eveniet magni quaerat nemo et.</p>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>Incidunt non veritatis illum ea ut nisi</h4>
                            </div>
                            <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta
                                tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at.
                                Dolorem quo tempora. Quia et perferendis.</p>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                            </div>
                            <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam
                                officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam
                                odit enim quaerat. Vero error error voluptatem eum.</p>
                        </div><!-- End Tab 1 Content -->
                        <div class="tab-pane fade show" id="tab2">
                            <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos
                                doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo
                                suscipit voluptatem.</p>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                            </div>
                            <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi
                                dolorum non eveniet magni quaerat nemo et.</p>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>Incidunt non veritatis illum ea ut nisi</h4>
                            </div>
                            <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta
                                tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at.
                                Dolorem quo tempora. Quia et perferendis.</p>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                            </div>
                            <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam
                                officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam
                                odit enim quaerat. Vero error error voluptatem eum.</p>
                        </div><!-- End Tab 2 Content -->
                        <div class="tab-pane fade show" id="tab3">
                            <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos
                                doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo
                                suscipit voluptatem.</p>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                            </div>
                            <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi
                                dolorum non eveniet magni quaerat nemo et.</p>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>Incidunt non veritatis illum ea ut nisi</h4>
                            </div>
                            <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta
                                tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at.
                                Dolorem quo tempora. Quia et perferendis.</p>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                            </div>
                            <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam
                                officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam
                                odit enim quaerat. Vero error error voluptatem eum.</p>
                        </div><!-- End Tab 3 Content -->
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" data-aos="fade-up">
        <div class="container">
            <div class="section-header">
                <h2>Portfolio</h2>
            </div>
        </div>
        <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">
            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                 data-portfolio-sort="original-order">
                <ul class="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-product">Product</li>
                    <li data-filter=".filter-branding">Branding</li>
                    <li data-filter=".filter-books">Books</li>
                </ul><!-- End Portfolio Filters -->
                <div class="row g-0 portfolio-container">
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('template/assets') }}/img/portfolio/app-1.jpg" class="img-fluid"
                             alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <a href="{{ asset('template/assets') }}/img/portfolio/app-1.jpg" title="App 1"
                               data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
                        <img src="{{ asset('template/assets') }}/img/portfolio/product-1.jpg"
                             class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 1</h4>
                            <a href="{{ asset('template/assets') }}/img/portfolio/product-1.jpg" title="Product 1"
                               data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
                        <img src="{{ asset('template/assets') }}/img/portfolio/branding-1.jpg"
                             class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 1</h4>
                            <a href="{{ asset('template/assets') }}/img/portfolio/branding-1.jpg"
                               title="Branding 1" data-gallery="portfolio-gallery"
                               class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
                        <img src="{{ asset('template/assets') }}/img/portfolio/books-1.jpg" class="img-fluid"
                             alt="">
                        <div class="portfolio-info">
                            <h4>Books 1</h4>
                            <a href="{{ asset('template/assets') }}/img/portfolio/books-1.jpg" title="Branding 1"
                               data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('template/assets') }}/img/portfolio/app-2.jpg" class="img-fluid"
                             alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <a href="{{ asset('template/assets') }}/img/portfolio/app-2.jpg" title="App 2"
                               data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
                        <img src="{{ asset('template/assets') }}/img/portfolio/product-2.jpg"
                             class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 2</h4>
                            <a href="{{ asset('template/assets') }}/img/portfolio/product-2.jpg" title="Product 2"
                               data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
                        <img src="{{ asset('template/assets') }}/img/portfolio/branding-2.jpg"
                             class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 2</h4>
                            <a href="{{ asset('template/assets') }}/img/portfolio/branding-2.jpg"
                               title="Branding 2" data-gallery="portfolio-gallery"
                               class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
                        <img src="{{ asset('template/assets') }}/img/portfolio/books-2.jpg" class="img-fluid"
                             alt="">
                        <div class="portfolio-info">
                            <h4>Books 2</h4>
                            <a href="{{ asset('template/assets') }}/img/portfolio/books-2.jpg" title="Branding 2"
                               data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('template/assets') }}/img/portfolio/app-3.jpg" class="img-fluid"
                             alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <a href="{{ asset('template/assets') }}/img/portfolio/app-3.jpg" title="App 3"
                               data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
                        <img src="{{ asset('template/assets') }}/img/portfolio/product-3.jpg"
                             class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 3</h4>
                            <a href="{{ asset('template/assets') }}/img/portfolio/product-3.jpg" title="Product 3"
                               data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
                        <img src="{{ asset('template/assets') }}/img/portfolio/branding-3.jpg"
                             class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 3</h4>
                            <a href="{{ asset('template/assets') }}/img/portfolio/branding-3.jpg"
                               title="Branding 2" data-gallery="portfolio-gallery"
                               class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
                        <img src="{{ asset('template/assets') }}/img/portfolio/books-3.jpg" class="img-fluid"
                             alt="">
                        <div class="portfolio-info">
                            <h4>Books 3</h4>
                            <a href="{{ asset('template/assets') }}/img/portfolio/books-3.jpg" title="Branding 3"
                               data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
                </div><!-- End Portfolio Container -->
            </div>
        </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Blog</h2>
                <p>Recent posts form our Blog</p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('template/assets') }}/img/blog/blog-1.jpg"
                                                   class="img-fluid" alt=""></div>
                        <div class="meta">
                            <span class="post-date">Tue, December 12</span>
                            <span class="post-author"> / Julia Parker</span>
                        </div>
                        <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem
                            consequuntur sit</h3>
                        <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium.
                            Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...</p>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('template/assets') }}/img/blog/blog-2.jpg"
                                                   class="img-fluid" alt=""></div>
                        <div class="meta">
                            <span class="post-date">Fri, September 05</span>
                            <span class="post-author"> / Mario Douglas</span>
                        </div>
                        <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam
                        </h3>
                        <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum
                            assumenda. Quisquam omnis aliquid necessitatibus tempora consectetur doloribus...</p>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('template/assets') }}/img/blog/blog-3.jpg"
                                                   class="img-fluid" alt=""></div>
                        <div class="meta">
                            <span class="post-date">Tue, July 27</span>
                            <span class="post-author"> / Lisa Hunter</span>
                        </div>
                        <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
                        <p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis
                            repellat sed quae consectetur magnam veritatis dicta nihil...</p>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Recent Blog Posts Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Contact Us</h2>
                <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad
                    dolores adipisci aliquam.</p>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->
        <div class="container">
            <div class="row gy-5 gx-lg-5">
                <div class="col-lg-4">
                    <div class="info">
                        <h3>Get in touch</h3>
                        <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia
                            commodi minus.</p>
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                       placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                   placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                                <textarea class="form-control" name="message" placeholder="Message"
                                          required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div><!-- End Contact Form -->
            </div>
        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>HeroBiz</h3>
                        <p>
                            A108 Adam Street <br>
                            NY 535022, USA<br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-legal text-center">
        <div
            class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
            <div class="d-flex flex-column align-items-center align-items-lg-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>HeroBiz</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>
<!-- Vendor JS Files -->
<script src="{{ asset('template/assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('template/assets') }}/vendor/aos/aos.js"></script>
<script src="{{ asset('template/assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{ asset('template/assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{ asset('template/assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('template/assets') }}/vendor/php-email-form/validate.js"></script>
<!-- Template Main JS File -->
<script src="{{ asset('template/assets') }}/js/main.js"></script>
</body>

</html>
