<?php include 'include/header.php'; ?>

<!-- GLightbox CSS CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">    
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Warehouse</h1>
        <nav aria-label="breadcrumb"> 
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Warehouse</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Warehouse Gallery Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Our Warehouse</p>
            <h1 class="display-5 mb-4">Large-Scale Storage & Distribution Facilities</h1>
            <p>Explore our expansive warehouse facilities designed for efficient storage, inventory management, and timely bulk dispatch of mineral products.</p>
        </div>

        <div class="row g-4" style="margin-bottom: 60px;">
            <?php
                $folder = 'img/warehouse/';
                
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
                                    <a href="<?php echo $image_path; ?>" class="glightbox gallery-link w-100 h-100 d-flex align-items-center justify-content-center" data-gallery="warehouse" title="<?php echo $image_name; ?>">
                                        <img class="img-fluid w-100 h-100 gallery-image" src="<?php echo $image_path; ?>" alt="<?php echo $image_name; ?>" style="object-fit: cover;">
                                    </a>
                                </div>
                            </div>
                            <?php
                            $delay += 0.1;
                        }
                    } else {
                        echo '<div class="col-12 text-center"><p style="color: #666; font-size: 16px;">No images found in the warehouse folder. Please add images to img/warehouse/ directory.</p></div>';
                    }
                } else {
                    echo '<div class="col-12 text-center"><p style="color: #666; font-size: 16px;">Warehouse folder not found. Please create img/warehouse/ directory and add images.</p></div>';
                }
            ?>
        </div>
    </div>
</div>
<!-- Warehouse Gallery End -->

<style>
    .gallery-item {
        transition: all 0.3s ease;
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

<!-- Warehouse Features Start -->
<div class="container-xxl py-5 bg-light">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Storage Solutions</p>
            <h1 class="display-5 mb-4">Advanced Warehouse Management</h1>
        </div>

        <div class="row g-4">
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="border rounded h-100 p-4 shadow-sm feature-card">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <i class="fa fa-warehouse text-primary" style="font-size: 40px; margin-right: 15px;"></i>
                        <h5 class="mb-0">Large Storage Capacity</h5>
                    </div>
                    <p>Vast warehousing space equipped to store large quantities of mineral products with proper organization and climate control.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="border rounded h-100 p-4 shadow-sm feature-card">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <i class="fa fa-boxes text-primary" style="font-size: 40px; margin-right: 15px;"></i>
                        <h5 class="mb-0">Organized Inventory</h5>
                    </div>
                    <p>Systematic inventory management with categorized storage zones ensuring quick location and retrieval of products.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="border rounded h-100 p-4 shadow-sm feature-card">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <i class="fa fa-shield-alt text-primary" style="font-size: 40px; margin-right: 15px;"></i>
                        <h5 class="mb-0">Security & Safety</h5>
                    </div>
                    <p>24/7 security surveillance and safety protocols to ensure product integrity and workplace safety standards.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="border rounded h-100 p-4 shadow-sm feature-card">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <i class="fa fa-dolly text-primary" style="font-size: 40px; margin-right: 15px;"></i>
                        <h5 class="mb-0">Quick Loading & Dispatch</h5>
                    </div>
                    <p>Efficient loading systems and logistics coordination for swift bulk orders and timely product shipments.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="border rounded h-100 p-4 shadow-sm feature-card">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <i class="fa fa-thermometer-half text-primary" style="font-size: 40px; margin-right: 15px;"></i>
                        <h5 class="mb-0">Climate Controlled</h5>
                    </div>
                    <p>Optimal temperature and humidity control to maintain product quality and prevent moisture contamination.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="border rounded h-100 p-4 shadow-sm feature-card">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <i class="fa fa-chart-bar text-primary" style="font-size: 40px; margin-right: 15px;"></i>
                        <h5 class="mb-0">Real-Time Tracking</h5>
                    </div>
                    <p>Digital inventory management system with real-time stock tracking and automated reporting capabilities.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Warehouse Features End -->

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
                <h1 class="text-white mb-4">Reliable Warehouse Services</h1>
                <p class="text-white mb-4">Our warehouse facilities ensure safe storage, efficient management, and quick dispatch of your mineral product orders.</p>
                <a class="btn btn-light py-3 px-5 mt-2" href="contact.php">Request Warehouse Services</a>
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
