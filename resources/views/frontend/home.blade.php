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
                        <img src="{{ asset('template/assets') }}/img/about.jpeg?{{now()}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <h5 class="pt-0 pt-lg-5">Yazılım dünyasına meslek lisesi dönemimde C ile embeded yazarak
                        girdim.Ardından önlisans dönemimde C# ve Java kullanmaya çalışarak deskop üzerine karalamalarda
                        bulundum.
                        Iot projelerinin cloud 'unu ayağa kaldırmak için Php 'yi tercih ettim o zamanlar daha popülerdi
                        tabi.Rakiplerimiz artmakla beraber teknolojiler de gelişiyor, bizde hamle yapmaya
                        çalışıyoruz.Okuduğun için teşekkürler :)</h5>
                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Experiences</a></li>
                        <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Education</a></li>
                    </ul><!-- End Tabs -->
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4><a href="https://www.ubit.com.tr/">Uğur Bilgi Teknolojileri</a> 02/2022 - ~</h4>
                            </div>
                            <p>Eğitim kurumlarına hizmet verme adına,katmanlı mimarı kullanarak laravel ile
                                okul/öğrenci/veli bilgi yönetim sistemi
                                geliştiren ekibin parçasıyım.
                                Agile Metodoloji kullanıyoruz.
                                <br><br>
                                #POSTRESQL #DOCKER #LARAVEL 9 #JIRA #RESTAPI</p>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4><a href="https://www.gruparge.com/">GRUP ARGE ENERJİ VE KONTROL SİSTEMLERİ </a>
                                    09/2020 - 02/2022</h4>
                            </div>
                            <p>Şirketimiz bünyesinde bulunan üretim birimi için Laravel ile Erp sistemi geliştirdim.
                                Üretim ,Stok , Modül , Kullanıcı Yönetimleri gibi ana modüller ve bunlara ait alt
                                modülleri geliştirdim.
                                <br><br>#MYSQL #XAMPP #LARAVEL 7.6 #TRELLO #RESTAPI</p>

                        </div><!-- End Tab 1 Content -->
                        <div class="tab-pane fade show" id="tab2">
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>Kariyer Mimarı - Kurs && 2019</h4>
                            </div>
                            <p>Java Oop</p>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>Abant İzzet Baysal
                                    Üniversitesi - Önlisans && 2014 - 2017
                                </h4>
                            </div>
                            <p> Teknik Bilimler Meslek
                                Yüksekokulu Elektrik / Elektronik
                            </p>
                        </div><!-- End Tab 2 Content -->
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
                <div class="row g-0 portfolio-container">
                    @foreach ($repo as $item)
                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="{{ asset('template/assets') }}/img/portfolio/{{ $item["name"] }}.jpg?{{now()}}"
                                 class="img-fluid"
                                 alt="">
                            <div class="portfolio-info">
                                <h4>{{ $item["name"] }}</h4>
                                <a href="https://github.com/fikretcure/{{ $item["name"] }}" title="More Github Repo"
                                   class="details-link"><i
                                        class="bi bi-github"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach
                </div><!-- End Portfolio Container -->
            </div>
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Contact Us</h2>
            </div>
        </div>

        <div class="container">
            <div class="row gy-5 gx-lg-5">
                <div class="col-lg-4">
                    <div class="info">
                        <h3>Get in touch</h3>
                        <p>Cevap almak istiyorsan geçerli bir mail girmelisin !</p>
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>Istanbul , TURKEY</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>fikretcure@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>+90 505 068 7161</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="api/sendmessage" method="post" role="form" class="php-email-form">
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
                        <h3>৳ℭ</h3>
                        <p>
                            Istanbul<br>
                            TURKEY<br><br>
                            <strong>Phone:</strong> +90 505 068 7161<br>
                            <strong>Email:</strong> fikretcure@gmail.com<br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#hero-fullscreen">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#about">About</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Portfolio</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Other</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="https://www.linkedin.com/in/fikretcure/">Linkedin</a>
                        </li>
                        <li><i class="bi bi-chevron-right"></i> <a href="https://github.com/fikretcure">Github</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="#" method="post">
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
                    &copy; Copyright 03/2022 <strong><span>fikretcure</span></strong>. All Rights Reserved
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
                <a href="https://github.com/fikretcure" class="github"><i class="bi bi-github"></i></a>
                <a href="https://www.youtube.com/channel/UC_Cqwomu8Pfgzb7qjBE0leQ" class="youtube"><i class="bi bi-youtube"></i></a>
                <a href="https://www.linkedin.com/in/fikretcure/" class="linkedin"><i class="bi bi-linkedin"></i></a>
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

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    const request = async (method, v, url, data) => {
        let resp = null;
        resp = await axios({
            method: method,
            url: "{{ route('home') }}" + '/api/' + v + '/' + url,
            data: data,
            headers: {
                'x-refresh-token': localStorage.getItem("x-refresh-token"),
                'x-access-token': localStorage.getItem("x-access-token"),
            }
        });
        return new Promise(function(resolve, reject) {
            localStorage.setItem('x-access-token', resp.headers["x-access-token"]);
            switch (resp.status) {
                case 200:
                    resolve(resp);
                    break;
                default:
                    reject(reject);
                    break;
            }
        });
    };

</script>
</body>

</html>
