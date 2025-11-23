<?php include 'include/header.php'; ?>

<!-- GLightbox CSS CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">    
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Certifications</h1>
        <nav aria-label="breadcrumb"> 
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Certifications</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Certifications Gallery Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1200px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Our Certifications</p>
            <h1 class=" mb-4">Quality & Compliance Certifications</h1>
            <p>We maintain the highest standards of quality and regulatory compliance. Our certifications demonstrate our commitment to excellence and customer satisfaction.</p>
        </div>

        <div class="row g-4 justify-content-center" style="margin-bottom: 60px;">
            <?php
                $certifications = array(
                    array(
                        'file' => 'img/certifications/iso.jpeg',
                        'name' => 'ISO Certification',
                        'description' => 'ISO 9001:2015 Quality Management System Certified'
                    ),
                    array(
                        'file' => 'img/certifications/udyam.jpg',
                        'name' => 'UDYAM Registration',
                        'description' => 'Government of India UDYAM Registration'
                    )
                );
                
                $delay = 0.1;
                foreach ($certifications as $cert) {
                    if (file_exists($cert['file'])) {
                        ?>
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                            <div class="position-relative overflow-hidden rounded shadow-sm gallery-item" style="height: 600px; cursor: pointer;">
                                <a href="<?php echo $cert['file']; ?>" class="glightbox gallery-link w-100 h-200 d-flex align-items-center justify-content-center" data-gallery="certifications" title="<?php echo $cert['name']; ?>">
                                    <img class="img-fluid w-100 h-200" src="<?php echo $cert['file']; ?>" alt="<?php echo $cert['name']; ?>" style="object-fit: contain; padding: 20px; background: #f8f9fa;">
                                </a>
                            </div>
                            <h5 class="text-center mt-3 text-primary"><?php echo $cert['name']; ?></h5>
                            <p class="text-center text-muted"><?php echo $cert['description']; ?></p>
                        </div>
                        <?php
                        $delay += 0.2;
                    }
                }
            ?>
        </div>
    </div>
</div>
<!-- Certifications Gallery End -->

<style>
    .gallery-item {
        transition: all 0.3s ease;
        background: #ffffff;
        border: 1px solid #e0e0e0;
    }
    
    .gallery-item:hover {
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15) !important;
        border-color: #1363DF;
    }
    
    .gallery-link {
        text-decoration: none;
    }
</style>

<!-- CTA Start -->
<div class="container-xxl py-5 bg-primary wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <h1 class="text-white mb-4">Certified for Quality & Excellence</h1>
                <p class="text-white mb-4">Our certifications reflect our dedication to maintaining the highest standards in mineral processing and customer service.</p>
                <a class="btn btn-light py-3 px-5 mt-2" href="contact.php">Get in Touch</a>
            </div>
        </div>
    </div>
</div>
<!-- CTA End -->

<!-- GLightbox JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<script>
    // Initialize GLightbox
    const lightbox = GLightbox({
        selector: '.glightbox',
        openEffect: 'fade',
        closeEffect: 'fade',
        slideEffect: 'slide',
        captions: false,
        titles: false,
    });
</script>

<?php include 'include/footer.php'; ?>
