<?php include 'include/header.php'; ?>

<!-- GLightbox CSS CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">    
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Applications</h1>
        <nav aria-label="breadcrumb"> 
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Applications</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Applications Gallery Start -->
<div class="container- py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Our Applications</p>
            <h1 class="display-5 mb-4">Industrial Applications of Our Minerals</h1>
            <p>Explore the diverse applications of our high-quality minerals across various industries and sectors.</p>
        </div>

        <div class="row g-4" style="margin-bottom: 60px;">
            <?php
                $folder = 'img/applications/';
                
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
                                    <a href="<?php echo $image_path; ?>" class="glightbox gallery-link w-100 h-100 d-flex align-items-center justify-content-center" data-gallery="applications" title="<?php echo $image_name; ?>">
                                        <img class="img-fluid w-100 h-100 gallery-image" src="<?php echo $image_path; ?>" alt="<?php echo $image_name; ?>" style="object-fit: cover;">
                                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(19, 99, 223, 0.7); display: flex; align-items: flex-end; justify-content: center; padding: 20px;">
                                            <div style="text-align: center; color: white;">
                                                <h5 style="margin: 0 0 10px 0; font-weight: 600;"><?php echo $image_name; ?></h5>
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
                        echo '<div class="col-12 text-center"><p style="color: #666; font-size: 16px;">No images found in the applications folder. Please add images to img/applications/ directory.</p></div>';
                    }
                } else {
                    echo '<div class="col-12 text-center"><p style="color: #666; font-size: 16px;">Applications folder not found. Please create img/applications/ directory and add images.</p></div>';
                }
            ?>
        </div>
    </div>
</div>
<!-- Applications Gallery End -->

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

<!-- CTA Start -->
<div class="container-xxl py-5 bg-primary wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <h1 class="text-white mb-4">Need Custom Mineral Solutions?</h1>
                <p class="text-white mb-4">Contact us today to discuss how our minerals can enhance your products and processes.</p>
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
        slideEffect: 'slide'
    });
</script>

<?php include 'include/footer.php'; ?>
