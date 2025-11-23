<?php include 'include/header.php'; ?>

<!-- GLightbox CSS CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">    
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Infrastructure</h1>
        <nav aria-label="breadcrumb"> 
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Infrastructure</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Infrastructure Gallery Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1200px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Our Infrastructure</p>
            <h1 class="display-5 mb-4">State-of-the-Art Production Facilities</h1>
            <p>Explore our modern manufacturing setup designed with advanced technology and automated machinery for consistent quality and high productivity.</p>
        </div>

        <div class="row g-4" style="margin-bottom: 60px;">
            <?php
                $folder = 'img/infra/';
                
                // Check if folder exists
                if (is_dir($folder)) {
                    $files = scandir($folder);
                    $images = array();
                    $allowed_extensions = array('jpg', 'jpeg', 'png', 'webp', 'gif');
                    
                    // Filter only image files
                    foreach ($files as $file) {
                        if ($file !== '.' && $file !== '..') {
                            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                            if (in_array($ext, $allowed_extensions)) {
                                $images[] = $file;
                            }
                        }
                    }
                    
                    // Sort images
                    sort($images);
                    
                    // Display only first 12 images
                    $images = array_slice($images, 0, 12);
                    
                    // Display images
                    if (count($images) > 0) {
                        $delay = 0.1;
                        foreach ($images as $index => $image) {
                            $image_name = pathinfo($image, PATHINFO_FILENAME);
                            $image_name = ucwords(str_replace(array('-', '_'), ' ', $image_name));
                            $image_path = $folder . $image;
                            ?>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                                <div class="position-relative overflow-hidden rounded shadow-sm gallery-item" style="height: 300px; cursor: pointer;">
                                    <a href="<?php echo $image_path; ?>" class="glightbox gallery-link w-100 h-100 d-flex align-items-center justify-content-center" data-gallery="infrastructure" title="<?php echo $image_name; ?>">
                                        <img class="img-fluid w-100 h-100 gallery-image" src="<?php echo $image_path; ?>" alt="<?php echo $image_name; ?>" style="object-fit: cover;">
                                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(19, 99, 223, 0.7); display: flex; align-items: flex-end; justify-content: center; padding: 20px;">
                                            <div style="text-align: center; color: white;">
                                                <p style="margin: 0; font-size: 0.9rem;"><i class="fa fa-search-plus"></i> Click to view</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                            $delay += 0.1;
                        }
                    } else {
                        echo '<div class="col-12 text-center"><p style="color: #666; font-size: 16px;">No images found in the infrastructure folder. Please add images to img/infrastructure/ directory.</p></div>';
                    }
                } else {
                    echo '<div class="col-12 text-center"><p style="color: #666; font-size: 16px;">Infrastructure folder not found. Please create img/infrastructure/ directory and add images.</p></div>';
                }
            ?>
        </div>
    </div>
</div>
<!-- Infrastructure Gallery End -->

<style>
    .gallery-item {
        transition: all 0.3s ease;
    }
    
    .gallery-item:hover .gallery-image {
        transform: scale(1.1);
    }
    
    .gallery-item:hover .gallery-overlay {
        opacity: 1 !important;
    }
    
    .gallery-overlay {
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .gallery-link {
        text-decoration: none;
    }
</style>

<!-- Infrastructure Features Start -->
<div class="container-xxl py-5 bg-light">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Our Capabilities</p>
            <h1 class="display-5 mb-4">Advanced Processing & Manufacturing Capabilities</h1>
        </div>

        <div class="row g-4">
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="border rounded h-100 p-4 shadow-sm feature-card">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <i class="fa fa-cog text-primary" style="font-size: 40px; margin-right: 15px;"></i>
                        <h5 class="mb-0">High-Tech Grinding Units</h5>
                    </div>
                    <p>Advanced grinding and micropulverizer units that ensure precise particle size distribution and consistent quality across all mineral products.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="border rounded h-100 p-4 shadow-sm feature-card">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <i class="fa fa-filter text-primary" style="font-size: 40px; margin-right: 15px;"></i>
                        <h5 class="mb-0">Automated Screening & Sizing</h5>
                    </div>
                    <p>Fully automated screening and sizing systems that deliver uniform mesh sizes with minimal human intervention and maximum efficiency.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="border rounded h-100 p-4 shadow-sm feature-card">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <i class="fa fa-warehouse text-primary" style="font-size: 40px; margin-right: 15px;"></i>
                        <h5 class="mb-0">Large-Scale Storage</h5>
                    </div>
                    <p>Comprehensive warehousing facilities with large-scale storage capacity ensuring quick availability and timely bulk dispatch.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="border rounded h-100 p-4 shadow-sm feature-card">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <i class="fa fa-flask text-primary" style="font-size: 40px; margin-right: 15px;"></i>
                        <h5 class="mb-0">Quality Testing Lab</h5>
                    </div>
                    <p>In-house laboratory equipped for comprehensive chemical and physical testing to ensure every batch meets stringent quality standards.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="border rounded h-100 p-4 shadow-sm feature-card">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <i class="fa fa-box text-primary" style="font-size: 40px; margin-right: 15px;"></i>
                        <h5 class="mb-0">Efficient Packing System</h5>
                    </div>
                    <p>Modern packing facility with various packaging options for bulk and retail dispatch ensuring product integrity during transit.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="border rounded h-100 p-4 shadow-sm feature-card">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <i class="fa fa-truck text-primary" style="font-size: 40px; margin-right: 15px;"></i>
                        <h5 class="mb-0">Logistics Support</h5>
                    </div>
                    <p>Professional logistics network ensuring smooth and timely delivery of minerals to clients across multiple locations efficiently.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Infrastructure Features End -->

<style>
    .feature-card {
        transition: all 0.3s ease;
        background: #ffffff;
    }

    .feature-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
        border-color: #1363DF;
    }
</style>

<!-- CTA Start -->
<div class="container-xxl py-5 bg-primary wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <h1 class="text-white mb-4">Experience Our World-Class Facilities</h1>
                <p class="text-white mb-4">Visit our state-of-the-art manufacturing facilities to witness our commitment to quality and innovation.</p>
                <a class="btn btn-light py-3 px-5 mt-2" href="contact.php">Schedule a Visit</a>
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
