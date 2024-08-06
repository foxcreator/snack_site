@extends('layouts.app')
@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="assets/img/snacks.webp" alt="" data-aos="fade-in">

        <div class="container">

            <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-xl-6 col-lg-8">
                    <h2>Снеки вищої якості<span>.</span></h2>
                    <p>Замовляйте та насолоджуйтесь смаком</p>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="col-xl-2 col-md-4"  data-aos-delay="300">
                    <div class="icon-box">
                        <!--              <i class="bi bi-binoculars"></i>-->
                        <i class="bi bi-1-square"></i>
                        <h3><a href="">Мʼясні снекі</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-box">
                        <i class="bi bi-2-square"></i>
                        <h3><a href="">Рибні снекі</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-box">
                        <i class="bi bi-3-square"></i>
                        <h3><a href="">Ікряники</a></h3>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container"  data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6 order-1 order-lg-2">
                    <!--            <img src="assets/img/about.jpg" class="img-fluid" alt="">-->
                    <iframe style="width: 100%; height: 100%"  class="img-fluid" src="https://www.youtube.com/embed/Xby6Yv3s7Y8" title="goldproduct_factory" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 order-2 order-lg-1 content">
                    <h3>Постачання продукції найвищої якості</h3>
                    <p class="fst-italic">
                        Компанія "GOLDPRODUCT" розпочала свою діяльність з використання складного рецепта для приготування риби,
                        який був адаптований для м'яса. Основою нашого виробництва є процес кристалізації, який дозволяє значно зменшити усушку продукції
                        на вітрині при правильному зберіганні. Завдяки цьому м'ясо не біліє і зберігає свої смакові якості.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> <span>Ми використовуємо тільки найкращі інгредієнти для наших продуктів.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Наші технології дозволяють зберігати свіжість і якість продукції.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Наші клієнти завжди отримують продукцію, яка відповідає найвищим стандартам якості.</span></li>
                    </ul>
                    <p>
                        Ми прагнемо забезпечити найвищу якість і задоволення наших клієнтів. Завдяки нашим передовим технологіям та високим стандартам виробництва,
                        ми можемо гарантувати, що наша продукція завжди свіжа, смачна та безпечна для споживання.
                    </p>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">
        <div class="container"  data-aos-delay="100">
            <h1 class="text-center mt-2 text-uppercase">Наші партнери</h1>

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 600,
                      "autoplay": {
                        "delay": 5000
                      },
                      "slidesPerView": "auto",
                      "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                      },
                      "breakpoints": {
                        "320": {
                          "slidesPerView": 2,
                          "spaceBetween": 40
                        },
                        "480": {
                          "slidesPerView": 3,
                          "spaceBetween": 60
                        },
                        "640": {
                          "slidesPerView": 4,
                          "spaceBetween": 80
                        },
                        "992": {
                          "slidesPerView": 6,
                          "spaceBetween": 120
                        }
                      }
                    }
                </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/clients/belosvet.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/images.jpeg" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/logo_lg.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/more-piva_thumb.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/otzyvy-leprekon.jpg" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/natole.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/unnamed.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/realbeer.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/Altbier_logo.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/dudlyar.jpg" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/freshka.jpeg" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/logo.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/beerteam.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/pivbochka.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/shumer.png" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Clients Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" >
            <h2>Продукція</h2>
            <p>Обирайте улюблене</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6">
                    <div class="services-item position-relative">
                        <div class="product-image">
                            <img class="img-fluid" src="assets/img/meatsnack.webp" alt="">
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Мʼясні снекі</h3>
                        </a>
                        <p>
                            Класичні м'ясні снеки - Ідеальні для перекусу, мають
                            насичений смак та аромат.
                        </p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="services-item position-relative">
                        <div class="product-image">
                            <img class="img-fluid" src="assets/img/fishsnack.webp" alt="">
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Рибні снекі</h3>
                        </a>
                        <p>
                            Снеки з риби - Легкі та
                            корисні, ідеально підходять для тих, хто стежить за своїм
                            здоров'ям.
                        </p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="services-item position-relative">
                        <div class="product-image">
                            <img class="img-fluid" src="assets/img/ikranic.webp" alt="">
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Снекі зі спеціями</h3>
                        </a>
                        <p>
                            Снеки зі спеціями - Для
                            любителів гострих і пікантних смаків, наші снеки зі спеціями стануть чудовим
                            вибором.
                        </p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="assets/img/snack_bg.webp" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Спробуйте наші смачні снеки</h3>
                        <p>Відкрийте для себе широкий асортимент смачних та корисних снеків, створених для справжніх гурманів. Кожен наш продукт виготовлений з натуральних інгредієнтів та з любов'ю до якості. Насолоджуйтесь смаком, який підходить для будь-якого моменту.</p>
                        <a class="cta-btn" href="https://t.me/Ydyrh67792" target="_blank">Дізнатися деталі</a>
                    </div>
                </div>
            </div>
        </div>


    </section><!-- /Call To Action Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" >
            <h2>Контакти</h2>
            <p>Звʼязатся з нами</p>
        </div><!-- End Section Title -->

        <div class="container"  data-aos-delay="100">
            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex"  data-aos-delay="300">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Адреса</h3>
                            <p>вул. Володимира Вернадського, 27, Дніпро</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex"  data-aos-delay="400">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Телефон</h3>
                            <p>+380 (97) 434-52-49</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex"  data-aos-delay="500">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email</h3>
                            <p>goldproduct@ukr.net</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" class="php-email-form"  data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Імʼя" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Ваш Email" required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Тема звернення" required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Повідомлення" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Завантаження</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Ваше повідомлення було відправлено!</div>

                                <button type="submit">Надіслати</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
