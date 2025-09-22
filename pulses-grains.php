<?php include('header.php') ?>
<section class="page-header category-banner">
    <div class=" page-header__bg test12345" style="background-image:url('./assets/images/bred/Pulses-Grains-1.jpg');">
    </div>
    <div class="container">
        <h1 class="woocommerce-products-header__title"> Pulses &amp; Grains </h1>
    </div>
</section>

<section class="product-section bgWhite">
    <div class="container">
        <div class="products-listCvr">
            <div class="row">
                <?php
                $nb_elem_per_page = 50;
                $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
                $data = glob("./assets/images/product/innerProduct/pulses-grains/*.*");
                $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;
                foreach (array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page) as $p) {
                    $fileName = pathinfo($p, PATHINFO_FILENAME);
                    $productName = ucwords(str_replace(['-', '_'], ' ', $fileName));
                    $link = strtolower(str_replace(' ', '-', $productName)) . ".php";
                ?>
                    <div class="col-sm-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <a href="<?php echo $link; ?>">
                            <div class="service-one__box">
                                <img src="<?php echo $p; ?>" alt="<?php echo $productName; ?>">
                                <div class="service-one__box-content">
                                    <h2>
                                        <a href="<?php echo $link; ?>"><?php echo $productName; ?></a>
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
                <!-- <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="service-one__box">
                        <img
                            src="./assets/images/product/innerProduct/pulses-grains/chana-dal.jpg">
                        <div class="service-one__box-content">
                            <h2>
                                <a href="schana-dal.php">Chana dal</a>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="500ms">
                    <div class="service-one__box">
                        <img
                            src="./assets/images/product/innerProduct/pulses-grains/Chickpeas.jpg">
                        <div class="service-one__box-content">
                            <h2>
                                <a href="schickpeas.php">Chickpeas</a>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="service-one__box">
                        <img
                            src="./assets/images/product/innerProduct/pulses-grains/Mung-bean.jpg">
                        <div class="service-one__box-content">
                            <h2>
                                <a href="smung-bean.php">Mung Bean</a>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="service-one__box">
                        <img
                            src="./assets/images/product/innerProduct/pulses-grains/red-lentils.jpg">
                        <div class="service-one__box-content">
                            <h2>
                                <a href="sred-lentils.php">Red Lentils</a>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="service-one__box">
                        <img
                            src="./assets/images/product/innerProduct/pulses-grains/soya-bean.jpg">
                        <div class="service-one__box-content">
                            <h2>
                                <a href="ssoya-bean.php">Soya bean</a>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="service-one__box">
                        <img
                            src="./assets/images/product/innerProduct/pulses-grains/yellow-moong-dal.jpg">
                        <div class="service-one__box-content">
                            <h2>
                                <a href="syellow-moong-dal.php">Yellow Moong Dal</a>
                            </h2>
                        </div>
                    </div>
                </div> -->


            </div>
        </div>
        <div class="category-rubric mb-0">
            <div class="term-description test123">
                <h2 class="sub-title"><strong>Sankalp Enterprise Industries: Your Partner in Premium Pulses &amp; Grains @ Wholesale Price-</strong></h2>
                <p>Sankalp Enterprise Industries proudly stands among the foremost manufacturers, exporters, and suppliers of high-quality pulses and grains in India. Our diverse range includes essential staples such as <a style="color: #6e7673" href="chana-dal.php" target="_blank" rel="noopener"><strong>Chana Dal</strong></a>, <a style="color: #6e7673" href="chickpeas.php" target="_blank" rel="noopener"><strong>Chickpeas</strong></a>, <a style="color: #6e7673" href="mung-bean.php" target="_blank" rel="noopener"><strong>Mung Beans</strong></a>, <a style="color: #6e7673" href="red-lentils.php" target="_blank" rel="noopener"><strong>Red Lentils</strong></a>, <a style="color: #6e7673" href="soya-bean.php" target="_blank" rel="noopener"><strong>Soya Beans</strong></a>, and <a style="color: #6e7673" href="yellow-moong-dal.php" target="_blank" rel="noopener"><strong>Yellow Moong Dal</strong></a>. These products are cultivated with care and processed to preserve their natural nutritional values, ensuring they meet the needs of health-conscious consumers and businesses alike.<br />
                    As a trusted supplier, we cater to wholesalers, dealers, and distributors not only across India but also around the globe, including markets in the USA, Australia, Thailand, Taiwan, Canada, and beyond. Whether you&#8217;re in the food industry, retail sector, or catering services, Sankalp Enterprise Industries offers unparalleled quality and reliability for all your pulses and grain needs.</p>
                <!-- /Enterprise Industries Advantage</strong></h3>
                <p>With years of experience and a commitment to excellence, Sankalp Enterprise Industries is synonymous with quality and customer satisfaction. Our pulses and grains are a perfect blend of tradition and modernity, combining age-old farming techniques with state-of-the-art processing technologies.</p>
                <h3 class="sub-title"><strong>Key Features of Our Pulses &amp; Grains:</strong></h3>
                <ul type="disc">
                    <li><strong>Nutrient-Rich Products</strong>: Packed with essential nutrients, our pulses and grains, such as Mung Beans and Red Lentils, support a balanced diet.</li>
                    <li><strong>Versatile Applications</strong>: Suitable for a wide range of uses, from household cooking to large-scale food production.</li>
                    <li><strong>Global Standards</strong>: Each product is meticulously tested to meet international quality and safety standards.</li>
                    <li><strong>Wide Selection</strong>: We offer a variety of options, such as Soya Beans for protein-rich diets and Chana Dal for traditional culinary needs.</li>
                </ul>
                <h3 class="sub-title"><strong>Elevate Your Offerings with Sankalp Enterprise Industries</strong></h3>
                <p>Sankalp Enterprise Industries is committed to delivering pulses and grains that not only meet but exceed expectations. Our Chickpeas are perfect for creating hummus or salads, while our Yellow Moong Dal is a staple for nutritious soups and curries. Additionally, Soya Beans are ideal for producing plant-based protein products, making them a favorite in the health food industry.</p>
                <p>By choosing Sankalp Enterprise Industries, you gain access to a global leader in pulses and grains, backed by unmatched expertise and a passion for excellence. Join our extensive network of satisfied wholesalers and distributors today and experience the reliability of products that are fresh, nutritious, and ethically sourced. Let us partner with you in bringing the best of nature to the world.</p> -->
            </div>
        </div>
    </div>
</section>
<?php include('footer.php') ?>