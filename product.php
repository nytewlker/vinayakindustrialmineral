<?php
include 'include/header.php';
include 'product_data.php';

$product_slug = isset($_GET['product']) ? sanitize_slug($_GET['product']) : null;

// Function to sanitize slug
function sanitize_slug($slug)
{
    return preg_replace('/[^a-z0-9-]/', '', strtolower($slug));
}

// Find product by slug
$product = null;
if ($product_slug) {
    foreach ($products as $prod) {
        if ($prod['slug'] === $product_slug) {
            $product = $prod;
            break;
        }
    }
}
?>
<?php
// Dynamic Page Header
if ($product !== null) {
    $page_title = $product['name'];
    $breadcrumb_second = 'Products';
    $breadcrumb_second_link = 'product.php';
    $breadcrumb_last = $page_title;
} else {
    $page_title = 'Our Products';
    $breadcrumb_second = 'Pages';
    $breadcrumb_second_link = '#';
    $breadcrumb_last = 'Products';
}
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight"><?php echo htmlspecialchars($page_title); ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo htmlspecialchars($breadcrumb_second_link); ?>"><?php echo htmlspecialchars($breadcrumb_second); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($breadcrumb_last); ?></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<style>
    /* Product Container */
    .product-main-container {
        min-height: 600px;
    }

    /* Product Grid */
    .product-grid-section {
        background: #f8f9fa;
        padding: 60px 0;
    }

    .product-grid-title {
        text-align: center;
        margin-bottom: 50px;
        animation: fadeInDown 0.8s ease;
    }

    .product-grid-title h2 {
        font-size: 42px;
        color: #02245B;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .product-grid-title p {
        font-size: 16px;
        color: #5F656F;
        max-width: 600px;
        margin: 0 auto;
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 30px;
    }

    .product-card {
        background: #FFFFFF;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        transition: all 0.4s ease;
        border: 1px solid #E8E8E8;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        border-color: #FF5E14;
    }

    .product-card-image {
        width: 100%;
        height: 400px;
        background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%);
        overflow: hidden;
        position: relative;
    }

    .product-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .product-card:hover .product-card-image img {
        transform: scale(1.08);
    }

    .product-card-image-placeholder {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #999;
        font-size: 14px;
    }

    .product-card-content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .product-card-title {
        font-size: 18px;
        font-weight: 600;
        color: #02245B;
        margin-bottom: 12px;
        line-height: 1.4;
    }

    .product-card-desc {
        font-size: 14px;
        color: #5F656F;
        line-height: 1.6;
        margin-bottom: 15px;
        flex-grow: 1;
    }

    .product-card-variants {
        background: #FFF3CD;
        padding: 8px 12px;
        border-radius: 4px;
        font-size: 12px;
        color: #856404;
        margin-bottom: 15px;
        font-weight: 500;
    }

    .product-card-btn {
        display: inline-block;
        background: #FF5E14;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 4px;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s ease;
        text-align: center;
        border: 2px solid #FF5E14;
    }

    .product-card-btn:hover {
        background: transparent;
        color: #FF5E14;
    }

    /* Product Detail Page */
    .product-detail-section {
        background: #FFFFFF;
        padding: 60px 0;
    }

    .product-back-link {
        display: inline-flex;
        align-items: center;
        color: #FF5E14;
        text-decoration: none;
        font-weight: 600;
        margin-bottom: 30px;
        transition: all 0.3s ease;
    }

    .product-back-link:hover {
        color: #02245B;
        margin-left: -5px;
    }

    .product-back-link i {
        margin-right: 8px;
    }

    .product-detail-container {
        background: #FFFFFF;
    }

    .product-detail-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: start;
        padding: 40px;
    }

    @media (max-width: 992px) {
        .product-detail-row {
            grid-template-columns: 1fr;
            gap: 30px;
        }
    }

    .product-detail-image-wrapper {
        text-align: center;
    }

    .product-detail-image {
        width: 100%;
        max-width: 500px;
        height: 420px;
        background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%);
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .product-detail-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-detail-content h1 {
        font-size: 36px;
        color: #02245B;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .product-detail-content>p {
        font-size: 16px;
        color: #5F656F;
        line-height: 1.8;
        margin-bottom: 25px;
    }

    .product-variants-badge {
        background: linear-gradient(135deg, #FFF3CD 0%, #FFE69C 100%);
        border-left: 4px solid #FFC107;
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 25px;
        color: #856404;
        font-weight: 600;
        font-size: 14px;
    }

    /* Specifications Section */
    .product-specs-section {
        margin-top: 35px;
    }

    .product-section-title {
        font-size: 22px;
        font-weight: 700;
        color: #02245B;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 3px solid #FF5E14;
        display: inline-block;
    }

    .specs-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin-bottom: 35px;
    }

    .spec-card {
        background: linear-gradient(135deg, #F8F9FA 0%, #F0F1F3 100%);
        padding: 20px;
        border-radius: 6px;
        border-left: 4px solid #FF5E14;
        transition: all 0.3s ease;
    }

    .spec-card:hover {
        box-shadow: 0 6px 15px rgba(255, 94, 20, 0.1);
        transform: translateY(-3px);
    }

    .spec-label {
        font-weight: 700;
        color: #02245B;
        font-size: 13px;
        text-transform: uppercase;
        margin-bottom: 8px;
        letter-spacing: 0.5px;
    }

    .spec-value {
        color: #5F656F;
        font-size: 15px;
        line-height: 1.5;
    }

    /* Applications Section */
    .product-applications-section {
        margin-top: 35px;
    }

    .applications-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
    }

    .application-badge {
        background: linear-gradient(135deg, #E7F3FF 0%, #D0E8FF 100%);
        padding: 15px;
        border-radius: 6px;
        color: #0056B3;
        font-weight: 600;
        font-size: 14px;
        text-align: center;
        border: 1px solid #B3D9FF;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .application-badge:hover {
        background: linear-gradient(135deg, #0056B3 0%, #003D82 100%);
        color: white;
        border-color: #0056B3;
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(0, 86, 179, 0.2);
    }

    .application-badge::before {
        content: "✓";
        margin-right: 8px;
        font-weight: bold;
    }

    /* Packaging Section */
    .packaging-section {
        background: linear-gradient(135deg, #F0F1F3 0%, #E8E8E8 100%);
        padding: 25px;
        border-radius: 6px;
        margin-top: 35px;
        border-left: 4px solid #02245B;
    }

    .packaging-section h3 {
        color: #02245B;
        font-weight: 700;
        margin-bottom: 12px;
        font-size: 16px;
    }

    .packaging-section p {
        color: #5F656F;
        font-size: 15px;
        line-height: 1.6;
        margin: 0;
    }

    /* CTA Button */
    .product-cta-btn {
        display: inline-block;
        background: linear-gradient(135deg, #FF5E14 0%, #E85C0F 100%);
        color: white;
        padding: 14px 35px;
        text-decoration: none;
        border-radius: 6px;
        font-weight: 700;
        font-size: 15px;
        margin-top: 25px;
        transition: all 0.4s ease;
        border: 2px solid #FF5E14;
        box-shadow: 0 4px 12px rgba(255, 94, 20, 0.25);
    }

    .product-cta-btn:hover {
        background: transparent;
        color: #FF5E14;
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(255, 94, 20, 0.35);
    }

    /* Animations */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .products-grid {
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
        }

        .product-detail-row {
            padding: 25px;
            gap: 20px;
        }

        .product-detail-content h1 {
            font-size: 28px;
        }

        .product-section-title {
            font-size: 18px;
        }

        .specs-grid {
            grid-template-columns: 1fr;
        }

        .applications-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<div class="product-main-container">
    <?php
    if ($product !== null) {
    ?>
        <div class="product-detail-section">
            <div class="container">
                <a href="product.php" class="product-back-link">
                    <i class="fa fa-chevron-left"></i> Back to All Products
                </a>

                <div class="product-detail-container">
                    <h1><?php echo htmlspecialchars($product['name']); ?></h1>
                    <p><?php echo htmlspecialchars($product['description']); ?></p>
                    <div class="product-detail-row">
                        <!-- Product Image -->
                        <div class="product-detail-image-wrapper wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="product-detail-image">
                                <?php if (file_exists($product['image'])): ?>
                                    <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                                <?php else: ?>
                                    <div class="product-card-image-placeholder">Image not available</div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Product Info -->
                        <div class="product-detail-content wow fadeInRight" data-wow-delay="0.2s">


                            <?php if (isset($product['variants']) && !empty($product['variants'])): ?>
                                <div class="product-variants-badge">
                                    <strong>Available Variants:</strong><br>
                                    <?php echo htmlspecialchars(implode(', ', $product['variants'])); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($product['specs'])): ?>
                                <div class="product-specs-summary" style="margin-top:20px;">
                                    <h3 style="margin-bottom:12px;color:#02245B;font-weight:700;">Quick Specifications</h3>
                                    <div style="overflow:auto;">
                                        <table class="product-specs-table" style="width:100%;border-collapse:collapse;">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:left;padding:10px;border-bottom:2px solid #eee;background:#fafafa;color:#02245B;font-size:14px;">Specification</th>
                                                    <th style="text-align:left;padding:10px;border-bottom:2px solid #eee;background:#fafafa;color:#02245B;font-size:14px;">Value</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($product['specs'] as $label => $value): ?>
                                                    <tr>
                                                        <td style="padding:10px;border-bottom:1px solid #f1f1f1;font-weight:600;"><?php echo htmlspecialchars($label); ?></td>
                                                        <td style="padding:10px;border-bottom:1px solid #f1f1f1;color:#5F656F;"><?php echo nl2br(htmlspecialchars((string)$value)); ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <a href="#enquiry" class="product-cta-btn">
                                Request Quote <i class="fa fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Applications -->
                <div class="product-applications-section wow fadeInUp" data-wow-delay="0.4s">
                    <h2 class="product-section-title">Applications & Usage</h2>
                    <div class="applications-grid">
                        <?php foreach ($product['applications'] as $app): ?>
                            <div class="application-badge">
                                <?php echo htmlspecialchars($app); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-enquiry-section" style="padding:40px 0;">
            <style>
                .enquiry-grid {
                    display: grid;
                    grid-template-columns: 1fr 380px;
                    gap: 30px;
                    align-items: start;
                }

                @media(max-width: 992px) {
                    .enquiry-grid {
                        grid-template-columns: 1fr;
                    }
                }

                .enquiry-card,
                .contact-card {
                    background: #ffffff;
                    border-radius: 8px;
                    padding: 22px;
                    box-shadow: 0 6px 18px rgba(2, 36, 91, 0.06);
                    border: 1px solid #eef2f6;
                }

                .enquiry-card h3,
                .contact-card h3 {
                    margin-top: 0;
                    color: #02245B;
                    font-size: 20px;
                    margin-bottom: 12px;
                }

                .form-row {
                    margin-bottom: 12px;
                }

                .form-row input[type="text"],
                .form-row input[type="email"],
                .form-row input[type="tel"],
                .form-row select,
                .form-row textarea {
                    width: 100%;
                    padding: 10px 12px;
                    border: 1px solid #d9dfe7;
                    border-radius: 6px;
                    font-size: 14px;
                    color: #22303f;
                    box-sizing: border-box;
                }

                .form-row textarea {
                    min-height: 120px;
                    resize: vertical;
                }

                .enquiry-submit {
                    display: inline-block;
                    background: #FF5E14;
                    color: #fff;
                    padding: 12px 18px;
                    border-radius: 6px;
                    border: 2px solid #FF5E14;
                    text-decoration: none;
                    font-weight: 700;
                    cursor: pointer;
                }

                .contact-item {
                    margin-bottom: 14px;
                    font-size: 14px;
                    color: #374151;
                }

                .contact-item strong {
                    display: block;
                    color: #02245B;
                    font-weight: 700;
                    margin-bottom: 6px;
                }

                .contact-badges {
                    display: flex;
                    gap: 8px;
                    flex-wrap: wrap;
                    margin-top: 12px;
                }

                .contact-badge {
                    background: linear-gradient(135deg, #E7F3FF 0%, #D0E8FF 100%);
                    padding: 8px 12px;
                    border-radius: 6px;
                    font-weight: 600;
                    color: #0056B3;
                    border: 1px solid #B3D9FF;
                    font-size: 13px;
                }

                .product-highlights {
                    margin-top: 16px;
                }

                .product-highlights ul {
                    padding-left: 18px;
                    margin: 8px 0;
                    color: #5F656F;
                }

                .spec-list {
                    margin-top: 12px;
                }

                .spec-list li {
                    margin-bottom: 6px;
                    color: #5F656F;
                    font-size: 14px;
                }
            </style>

            <div class="container">
                <div class="enquiry-grid" id="enquiry">
                    <!-- Left: Enquiry Form -->
                    <div class="enquiry-card wow fadeInLeft" data-wow-delay="0.1s">
                        <h3>Product Enquiry</h3>
                        <p style="color:#5F656F;margin-top:0;margin-bottom:18px;">Send us your requirement for <strong><?php echo htmlspecialchars($product['name']); ?></strong>. We'll respond with pricing and lead time.</p>

                        <form method="post" action="contact.php" class="product-enquiry-form" novalidate>
                            <input type="hidden" name="product_slug" value="<?php echo htmlspecialchars($product['slug']); ?>">
                            <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($product['name']); ?>">

                            <div class="form-row">
                                <input type="text" name="name" placeholder="Your Name" required>
                            </div>

                            <div class="form-row">
                                <input type="text" name="company" placeholder="Company / Organisation">
                            </div>

                            <div class="form-row" style="display:grid;grid-template-columns:1fr 1fr;gap:10px;">
                                <input type="email" name="email" placeholder="Email" required>
                                <input type="tel" name="phone" placeholder="Phone / Mobile">
                            </div>

                            <div class="form-row" style="display:grid;grid-template-columns:1fr 140px;gap:10px;">
                                <input type="text" name="quantity" placeholder="Estimated Quantity">
                                <select name="unit">
                                    <option value="kg">Kg</option>
                                    <option value="mt">Metric Ton</option>
                                    <option value="bag">Bag</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="form-row">
                                <textarea name="message" placeholder="Additional details / application (optional)"></textarea>
                            </div>

                            <div class="form-row" style="display:flex;justify-content:flex-start;gap:12px;align-items:center;">
                                <button type="submit" class="enquiry-submit">Request Quote</button>
                                <span style="color:#6b7280;font-size:13px;">Typical response time: 1-2 business days</span>
                            </div>
                        </form>
                    </div>

                    <!-- Right: Contact Details & Product Oriented Content -->
                    <aside class="contact-card wow fadeInRight" data-wow-delay="0.15s">
                        <h3>Contact & Product Details</h3>

                        <div class="contact-item">
                            <strong>Sales Enquiries</strong>
                            <a href="mailto:vinayakindmin@gmail.com" style="color:#FF5E14;text-decoration:none;">vinayakindmin@gmail.com</a>
                        </div>

                        <div class="contact-item">
                            <strong>Phone</strong>
                            <a href="tel:+919784060133" style="color:#02245B;text-decoration:none;">+91 - 9784060133</a>
                        </div>

                        <div class="contact-item">
                            <strong>Factory Address</strong>
                            <div>F-266, RIICO Industrial Area, Gudli, Teh. Mavli, Udaipur – 313024 (Raj). INDIA</div>
                        </div>



                        <div class="contact-badges" aria-hidden="true">
                            <div class="contact-badge">Bulk Supply</div>
                            <div class="contact-badge">Custom Packaging</div>
                            <div class="contact-badge">Quality Assured</div>
                        </div>

                        <div class="product-highlights">
                            <h4 style="margin:12px 0 8px 0;color:#02245B;font-size:16px;">Product Highlights</h4>
                            <ul>
                                <?php
                                // Show variants if available
                                if (!empty($product['variants'])) {
                                    foreach ($product['variants'] as $v) {
                                        echo '<li class="spec-list">Variant: ' . htmlspecialchars($v) . '</li>';
                                    }
                                }

                                // Show up to 4 important specs
                                if (!empty($product['specs'])) {
                                    $count = 0;
                                    foreach ($product['specs'] as $lbl => $val) {
                                        if ($count++ >= 4) break;
                                        $shortVal = is_array($val) ? implode(', ', $val) : (string)$val;
                                        echo '<li class="spec-list">' . htmlspecialchars($lbl) . ': ' . htmlspecialchars($shortVal) . '</li>';
                                    }
                                }

                                // Fallback highlight if nothing present
                                if (empty($product['variants']) && empty($product['specs'])) {
                                    echo '<li class="spec-list">High quality mineral grade suitable for industrial applications.</li>';
                                }
                                ?>
                            </ul>
                        </div>

                        <?php if (isset($product['spec_sheet']) && !empty($product['spec_sheet']) && file_exists($product['spec_sheet'])): ?>
                            <div style="margin-top:14px;">
                                <a href="<?php echo htmlspecialchars($product['spec_sheet']); ?>" class="enquiry-submit" style="background:#02245B;border-color:#02245B;">Download Spec Sheet</a>
                            </div>
                        <?php endif; ?>

                        <div style="margin-top:18px;color:#5F656F;font-size:13px;">
                            <strong>Note:</strong> For custom grades, packaging or large volume inquiries, please use the form to provide estimated quantities and intended application.
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <?php
        // Other Products Slider (renders remaining product cards in a horizontal slider)
        $other_products = array_filter($products, function ($p) use ($product) {
            return $product && $p['slug'] !== $product['slug'];
        });
        if (!empty($other_products)):
            $slider_id = 'otherProductsSlider_' . uniqid();
        ?>
            <style>
                /* Simple horizontal slider for other products */
                .other-products-section {
                    padding: 45px 0;
                    background: #fafafa;
                    border-top: 1px solid #eef2f6;
                }

                .other-products-header {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 18px;
                    gap: 12px;
                }

                .other-products-header h3 {
                    margin: 0;
                    color: #02245B;
                    font-size: 20px;
                    font-weight: 700;
                }

                .other-products-controls {
                    display: flex;
                    gap: 8px;
                }

                .op-btn {
                    background: #fff;
                    border: 1px solid #e6e9ef;
                    padding: 8px 10px;
                    border-radius: 6px;
                    cursor: pointer;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: 700;
                    color: #02245B;
                }

                .op-track-wrap {
                    position: relative;
                }

                .op-track {
                    display: flex;
                    gap: 22px;
                    overflow-x: auto;
                    scroll-behavior: smooth;
                    padding-bottom: 6px;
                }

                .op-track::-webkit-scrollbar {
                    height: 10px;
                }

                .op-card {
                    min-width: 260px;
                    max-width: 260px;
                    background: #fff;
                    border-radius: 8px;
                    border: 1px solid #e8e8e8;
                    box-shadow: 0 6px 18px rgba(2, 36, 91, 0.03);
                    overflow: hidden;
                    flex: 0 0 auto;
                    display: flex;
                    flex-direction: column;
                }

                .op-card-image {
                    height: 160px;
                    background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    overflow: hidden;
                }

                .op-card-image img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }

                .op-card-body {
                    padding: 14px;
                    display: flex;
                    flex-direction: column;
                    gap: 10px;
                    flex: 1 1 auto;
                }

                .op-card-title {
                    font-size: 16px;
                    font-weight: 700;
                    color: #02245B;
                    margin: 0;
                    line-height: 1.2;
                }

                .op-card-desc {
                    color: #5F656F;
                    font-size: 13px;
                    flex: 1 1 auto;
                    margin: 0;
                }

                .op-card-actions {
                    display: flex;
                    gap: 8px;
                    margin-top: 6px;
                }

                .op-link {
                    background: #FF5E14;
                    color: #fff;
                    padding: 8px 10px;
                    border-radius: 6px;
                    text-decoration: none;
                    font-weight: 700;
                    border: 2px solid #FF5E14;
                    font-size: 13px;
                    display: inline-block;
                }

                .op-quote {
                    background: transparent;
                    color: #FF5E14;
                    padding: 8px 10px;
                    border-radius: 6px;
                    text-decoration: none;
                    border: 2px solid #FF5E14;
                    font-weight: 700;
                    font-size: 13px;
                    display: inline-block;
                }

                @media(max-width:780px) {
                    .op-card {
                        min-width: 200px;
                        max-width: 200px;
                    }
                }
            </style>

            <section class="other-products-section">
                <div class="container">
                    <div class="other-products-header">
                        <h3>Other Products You May Like</h3>
                        <div class="other-products-controls" aria-hidden="true">
                            <button class="op-btn" id="<?php echo $slider_id; ?>_prev" type="button" title="Previous">&larr;</button>
                            <button class="op-btn" id="<?php echo $slider_id; ?>_next" type="button" title="Next">&rarr;</button>
                        </div>
                    </div>

                    <div class="op-track-wrap">
                        <div class="op-track" id="<?php echo $slider_id; ?>" tabindex="0">
                            <?php foreach ($other_products as $op): ?>
                                <article class="op-card" aria-labelledby="op-<?php echo htmlspecialchars($op['slug']); ?>-title">
                                    <div class="op-card-image">
                                        <?php if (!empty($op['image']) && file_exists($op['image'])): ?>
                                            <img src="<?php echo htmlspecialchars($op['image']); ?>" alt="<?php echo htmlspecialchars($op['name']); ?>">
                                        <?php else: ?>
                                            <div style="padding:12px;color:#999;font-size:13px;">Image unavailable</div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="op-card-body">
                                        <h4 id="op-<?php echo htmlspecialchars($op['slug']); ?>-title" class="op-card-title"><?php echo htmlspecialchars($op['name']); ?></h4>
                                        <p class="op-card-desc"><?php echo htmlspecialchars(mb_substr($op['description'], 0, 110)); ?><?php echo (mb_strlen($op['description']) > 110) ? '...' : ''; ?></p>

                                        <div class="op-card-actions">
                                            <a class="op-link" href="product.php?product=<?php echo htmlspecialchars($op['slug']); ?>">View Details</a>
                                            <a class="op-quote" href="contact.php?product=<?php echo htmlspecialchars($op['slug']); ?>">Request Quote</a>
                                        </div>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>

            <script>
                (function() {
                    var track = document.getElementById('<?php echo $slider_id; ?>');
                    var prev = document.getElementById('<?php echo $slider_id; ?>_prev');
                    var next = document.getElementById('<?php echo $slider_id; ?>_next');

                    if (!track) return;

                    // Helper: determine scroll amount (approx one card)
                    function getScrollAmount() {
                        var card = track.querySelector('.op-card');
                        var style = window.getComputedStyle(track);
                        var gap = parseInt(style.getPropertyValue('column-gap')) || 22;
                        if (!card) return Math.round(track.clientWidth * 0.8);
                        var mw = card.getBoundingClientRect().width + gap;
                        return Math.round(mw);
                    }

                    function updateButtons() {
                        prev.disabled = track.scrollLeft <= 1;
                        next.disabled = track.scrollLeft + track.clientWidth >= track.scrollWidth - 1;
                        prev.style.opacity = prev.disabled ? 0.45 : 1;
                        next.style.opacity = next.disabled ? 0.45 : 1;
                    }

                    prev.addEventListener('click', function() {
                        track.scrollBy({
                            left: -getScrollAmount(),
                            behavior: 'smooth'
                        });
                    });
                    next.addEventListener('click', function() {
                        track.scrollBy({
                            left: getScrollAmount(),
                            behavior: 'smooth'
                        });
                    });

                    // Update on scroll and resize
                    track.addEventListener('scroll', function() {
                        window.requestAnimationFrame(updateButtons);
                    });
                    window.addEventListener('resize', function() {
                        window.requestAnimationFrame(updateButtons);
                    });

                    // Initialize state
                    window.requestAnimationFrame(updateButtons);
                })();
            </script>
        <?php
        endif;
        ?>

    <?php } else {
        // Display All Products Grid View
        
    ?>
        <div class="product-grid-section">
            <div class="container">
                <div class="product-grid-title wow fadeInDown" data-wow-delay="0.1s">
                    <h2>Our Premium Mineral Products</h2>
                    <p>Explore our complete range of high-quality industrial mineral powders and granules engineered for excellence</p>
                </div>

                <div class="products-grid wow fadeInUp" data-wow-delay="0.2s">
                    <?php foreach ($products as $prod): ?>
                        <div class="product-card">
                            <div class="product-card-image">
                                <?php if (file_exists($prod['image'])): ?>
                                    <img src="<?php echo htmlspecialchars($prod['image']); ?>" alt="<?php echo htmlspecialchars($prod['name']); ?>">
                                <?php else: ?>
                                    <div class="product-card-image-placeholder">Image unavailable</div>
                                <?php endif; ?>
                            </div>

                            <div class="product-card-content">
                                <h3 class="product-card-title"><?php echo htmlspecialchars($prod['name']); ?></h3>
                                <p class="product-card-desc"><?php echo htmlspecialchars(substr($prod['description'], 0, 95)) . '...'; ?></p>

                                <?php if (isset($prod['variants']) && !empty($prod['variants'])): ?>
                                    <div class="product-card-variants">
                                        Variants: <?php echo htmlspecialchars(implode(', ', $prod['variants'])); ?>
                                    </div>
                                <?php endif; ?>

                                <a href="product.php?product=<?php echo htmlspecialchars($prod['slug']); ?>" class="product-card-btn">
                                    View Details
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<?php include 'include/footer.php'; ?>