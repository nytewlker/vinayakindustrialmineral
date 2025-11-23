<?php include 'include/header.php'; ?>  


    <?php
    $slides = array(
        array(
            'image' => 'img/slider/1.jpg',
            'subtitle' => '26 Years of Working Experience',
            'title' => 'Industrial Solution Providing Company',
            'link' => '#about'
        ),
        array(
            'image' => 'img/slider/2.jpg',
            'subtitle' => '26 Years of Excellence in Mineral Manufacturing',
            'title' => 'Powering Progress with Premium Minerals',
            'link' => '#about'
        ),
        array(
            'image' => 'img/slider/3.jpg',
            'subtitle' => 'Vinayak Industrial Mineral — Built on Quality & Trust.',
            'title' => 'Pure Minerals, <br> Powerful Results.',
            'link' => '#about'
        )
    );
    ?>

    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach($slides as $index => $slide): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>" style="height: 80vh;">
                    <img class="w-100" src="<?php echo $slide['image']; ?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight"><?php echo $slide['subtitle']; ?></p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight"><?php echo $slide['title']; ?></h1>
                                    <a href="<?php echo $slide['link']; ?>" class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container" id="about">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/abt-2.jpg">
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/abt-1.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">About Us</p>
                    <h1 class="display-5 mb-4">Your Trusted Partner in Mineral Excellence</h1>
                    <p class="mb-4">For over two decades, Vinayak Industrial Mineral has been a symbol of reliability
                        and quality in the mineral industry. We specialize in processing and supplying high-grade industrial
                        minerals that strengthen foundations, enhance performance, and drive progress across multiple sectors. With a
                        commitment to precision, sustainability, and customer satisfaction, we continue to lead the way in
                        delivering mineral excellence to industries worldwide.
                    </p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 bg-primary p-4">
                            <h1 class="display-2">26</h1>
                            <h5 class="text-white">Years of</h5>
                            <h5 class="text-white">Experience</h5>
                        </div>
                        <div class="ms-4">
                            <p><i class="fa fa-check text-primary me-2"></i>Ceramic & Tile Industry</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Construction & Infrastructure</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Glass & Foundry Applications</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Paints & Coating Industry</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-2"></i>Chemical & Industrial
                                Applications</p>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 p-5">
        <div class="row g-5">
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center border p-5">
                    <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">26</h1>
                    <span class="fs-5 fw-semi-bold text-white">Years Experience</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center border p-5">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">100</h1>
                    <span class="fs-5 fw-semi-bold text-white">Team Members</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="text-center border p-5">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">500</h1>
                    <span class="fs-5 fw-semi-bold text-white">Happy Clients</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="text-center border p-5">
                    <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">750</h1>
                    <span class="fs-5 fw-semi-bold text-white">Projects Done</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="img/why-choose-1.jpg" alt="">
                        <span
                            class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block"
                            style="width: 120px; height: 120px;"></span>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Why Choosing Us!</p>
                    <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4">At Vinayak Industrial Mineral, we believe in more than just supplying minerals — we
                        deliver reliability, quality, and long-term partnerships.
                        <br>Our customers choose us for our consistent product purity, timely delivery, and commitment
                        to innovation. With decades
                        of experience and a customer-first approach, we ensure every order meets global standards and
                        exceeds expectations.
                    </p>
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Experienced Workers</h4>
                                    <span>Our skilled and dedicated team brings years of industry experience, ensuring
                                        top-quality mineral processing and reliable results every time.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Reliable Industrial Services</h4>
                                    <span>We provide dependable industrial mineral solutions with advanced technology,
                                        quality assurance, and on-time delivery for every client’s unique
                                        requirement.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>24/7 Customer Support</h4>
                                    <span>Our support team is always available to assist clients with quick responses,
                                        reliable guidance, and complete service satisfaction anytime, anywhere.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <?php
    $products = [
        ['image' => 'img/product img/quick-lime.jpg', 'title' => 'Quick Lime Powder', 'link' => 'product.php?product=quick-lime-powder'],
        ['image' => 'img/product img/anti-moisture.jpg', 'title' => 'Anti Moisture Powder', 'link' => 'product.php?product=anti-moisture-powder'],
        ['image' => 'img/product img/micronise-calcite.jpg', 'title' => 'Micronised Calcite Powder', 'link' => 'product.php?product=micronised-calcite-powder'],
        ['image' => 'img/product img/micronise-dolomite.jpg', 'title' => 'Micronised Dolomite Powder', 'link' => 'product.php?product=micronised-dolomite-powder'],
        ['image' => 'img/product img/talc.jpg', 'title' => 'Talc Powder', 'link' => 'product.php?product=talc-powder'],
        ['image' => 'img/product img/dolomite-granuls.jpg', 'title' => 'Dolomite Granules', 'link' => 'product.php?product=dolomite-granules'],
        ['image' => 'img/product img/soapstone.jpg', 'title' => 'Soapstone And Talc Powder', 'link' => 'product.php?product=soapstone-talc-powder'],
        ['image' => 'img/product img/pyrophylite.jpg', 'title' => 'Pyrophyllite Powder', 'link' => 'product.php?product=pyrophyllite-powder'],
    ];
    ?>

    <!-- Products -->
    <div class="container-fluid bg-dark pt-5 my-5 px-0">
        <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 1200px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Our Products</p>
            <h1 class="display-6 text-white mb-5">Pure Mineral Products Superior Quality</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
            <?php foreach ($products as $product): ?>
                <a class="project-item" href="<?php echo htmlspecialchars($product['link'], ENT_QUOTES); ?>">
                    <img class="img-fluid" src="<?php echo htmlspecialchars($product['image'], ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($product['title'], ENT_QUOTES); ?>">
                    <div class="project-title">
                        <h5 class="text-primary mb-0"><?php echo htmlspecialchars($product['title'], ENT_QUOTES); ?></h5>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Products End -->


    <!-- Application Cases Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1200px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Application Cases</p>
                <h1 class="display-5 mb-4">We Offer Quality Industrial Solutions</h1>
            </div>

            <div class="row gy-5 gx-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/application img/specialty-chemical.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/application img/specialty-chemical.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Specialty Chemicals</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">High-performance chemicals designed for specific industrial
                                    applications ensuring quality, efficiency, and innovation.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/application img/agriculture.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/application img/agriculture.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Agriculture</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Enhancing crop productivity with superior soil conditioners,
                                    micronutrients, and eco-friendly agricultural solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/application img/ceramic-body.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/application img/ceramic-body.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Ceramic Body</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Providing essential minerals that improve strength,
                                    whiteness, and thermal resistance in ceramic products.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/application img/construction-industry.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/application img/construction-industry.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Construction Industry</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Supplying durable mineral materials improving concrete
                                    strength, surface finish, and long-term performance.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/application img/tyre.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/application img/tyre.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Tyre</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Offering mineral fillers that enhance tire durability, grip,
                                    flexibility, and reduce rolling resistance efficiently.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/application img/thermosetting plastics.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/application img/thermosetting plastics.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Thermosetting Plastics</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Delivering heat-resistant minerals improving rigidity,
                                    dimensional stability, and strength of molded components.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Team Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Our Team</p>
                <h1 class="display-5 mb-5">Dedicated Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Rob Miller</h5>
                                <span class="text-primary">CEO & Founder</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Adam Crew</h5>
                                <span class="text-primary">Project Manager</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Peter Farel</h5>
                                <span class="text-primary">Engineer</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Testimonial</p>
                <h1 class="display-5 mb-5">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-1.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>"Very reliable and professional service. Work was completed on time with excellent quality. Highly recommended!"</p>
                        <h5 class="mb-1">Neha Verma</h5>
                        <span class="fst-italic">Marketing Manager</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-2.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>"Great experience! Smooth process, quick response, and top-notch results. Truly impressed."</p>
                        <h5 class="mb-1">Amit Soni</h5>
                        <span class="fst-italic">Entrepreneur</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-3.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>"Exceptional work with great attention to detail. The process was smooth and professional. I’m very satisfied with the results and highly recommend their services."</p>
                        <h5 class="mb-1">Rohit Sharma</h5>
                        <span class="fst-italic">Business Owner</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

<?php include 'include/footer.php'; ?>