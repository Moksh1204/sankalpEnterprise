<?php include('header.php') ?>
<section class="page-header category-banner">
    <div class=" page-header__bg test12345" style="background-image:url('./assets/images/bred/Herbal-Products-1.jpg');">
    </div>
    <div class="container">
        <h1 class="woocommerce-products-header__title"> Snacks Products </h1>
    </div>
</section>

<section class="product-section bgWhite">
    <div class="container">
        <div class="products-listCvr">
            <div class="row">
                <?php
                $nb_elem_per_page = 50;
                $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
                $data = glob("./assets/images/product/innerProduct/snacks/*.*");
                $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;
                foreach (array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page) as $p) {
                    $fileName = pathinfo($p, PATHINFO_FILENAME);
                    $productName = ucwords(str_replace(['-', '_'], ' ', $fileName));
                    $link = strtolower(str_replace(' ', '-', $productName)) . ".php";
                ?>
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="<?php echo $p; ?>" alt="<?php echo $productName; ?>">
                            <div class="service-one__box-content">
                                <h2>
                                    <a href="<?php echo $link; ?>"><?php echo $productName; ?></a>
                                </h2>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="category-rubric mb-0">
            <div class="term-description test123">
                <h2 class="sub-title"><strong>Excellent Herbal Products by Sankalp Enterprise Industries</strong></h2>
                <p>Sankalp Enterprise Industries stands as a pioneer in the domain of herbal products, delivering unmatched quality and natural wellness solutions to customers worldwide. As one of India’s leading manufacturers, exporters, and suppliers of herbal products, we take pride in offering an extensive range of powders, seeds, and leaves sourced from the finest natural ingredients. Each product is crafted with a commitment to purity, ensuring maximum benefits for health-conscious individuals, businesses, and retailers alike.</p>
                <p>From the nutrient-packed <a style="color: #6e7673" href="moringa-powder.php" target="_blank" rel="noopener"><strong>Moringa Powder</strong></a> and rejuvenating <a style="color: #6e7673" href="ashwagandha-powder.php" target="_blank" rel="noopener"><strong>Ashwagandha Powder</strong></a> to the versatile <a style="color: #6e7673" href="amla-powder-without-seed.php" target="_blank" rel="noopener"><strong>Amla Powder</strong></a> (with or without seed), our offerings cater to diverse needs. Whether you’re looking for energy-boosting <a style="color: #6e7673" href="wheat-grass-powder.php" target="_blank" rel="noopener"><strong>Wheatgrass Powder</strong></a>, digestion-enhancing <a style="color: #6e7673" href="triphala-powder.php" target="_blank" rel="noopener"><strong>Triphala Powder</strong></a>, or stress-relieving <a style="color: #6e7673" href="brahmi-bacopa-whole-and-powder.php" target="_blank" rel="noopener"><strong>Brahmi Powder</strong></a>, Sankalp Enterprise Industries has you covered.</p>
                <!-- <h3 class="sub-title"><strong>Why Choose Sankalp Enterprise Industries?</strong></h3>
                <p>At Sankalp Enterprise Industries, quality and customer satisfaction are at the core of everything we do. Our wide range of herbal products is designed to meet the varied demands of wholesalers, dealers, and distributors across the globe, including in countries such as the USA, Australia, Thailand, Taiwan, Canada, and more. Here’s what sets us apart:</p>
                <h3 class="sub-title"><strong>Key Features of Sankalp Enterprise Herbal Products-</strong></h3>
                <ul type="disc">
                    <li><strong>Uncompromised Purity</strong>: Every product is derived from natural, chemical-free sources, ensuring safety and efficacy.</li>
                    <li><strong>Diverse Range</strong>: From superfood powders like <a style="color: #6e7673" href="barley-grass-powder.php" target="_blank" rel="noopener"><strong>Barley Grass Powder</strong></a> and <a style="color: #6e7673" href="spinach-powder.php" target="_blank" rel="noopener"><strong>Spinach Powder</strong></a> to holistic remedies like <a style="color: #6e7673" href="shatavari-root-powder.php" target="_blank" rel="noopener"><strong>Shatavari Root Powder</strong></a>, we offer a solution for every need.</li>
                    <li><strong>Global Reach</strong>: With satisfied clients in all over the world, our reputation is built on trust and quality.</li>
                    <li><strong>Customizable Offerings</strong>: Available in whole, powdered, or leaf form, many products, such as Tulsi, Stevia, and <a style="color: #6e7673" href="basil-seeds.php" target="_blank" rel="noopener"><strong>Basil Seeds</strong></a>, are tailored to suit specific customer requirements.</li>
                </ul>
                <h3 class="sub-title"><strong>Elevate Your Herbal Experience</strong></h3>
                <p>Sankalp Enterprise Industries ensures that every product in its portfolio meets stringent quality standards. Whether you’re a business aiming to source premium herbal ingredients or an individual seeking natural health solutions, our comprehensive product lineup is designed to promote holistic wellness. Incorporate our products like <a style="color: #6e7673" href="beetroot-powder.php" target="_blank" rel="noopener"><strong>Beetroot Powder</strong></a> for natural detoxification, <a style="color: #6e7673" href="stevia-leaves-powder.php" target="_blank" rel="noopener"><strong>Stevia Leaves</strong></a> for a healthy sugar substitute, or <a style="color: #6e7673" href="tribulus-powder.php" target="_blank" rel="noopener"><strong>Tribulus Powder</strong></a> for improved vitality into your offerings or daily routine.</p>
                <p>Partner with Sankalp Enterprise Industries today and experience the pinnacle of herbal excellence. From small-scale distributors to global enterprises, we are dedicated to providing unmatched quality, ensuring your trust and satisfaction with every purchase. Rediscover the power of nature with Sankalp Enterprise Industries – where purity meets perfection.</p> -->
            </div>
        </div>
    </div>
</section>
<?php include('footer.php') ?>