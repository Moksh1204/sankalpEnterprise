<?php include('header.php') ?>
<section class="page-header category-banner">
    <div class=" page-header__bg test12345" style="background-image:url('./assets/images/bred/Psyllium-Products-1.jpg');">
    </div>
    <div class="container">
        <h1 class="woocommerce-products-header__title"> Psyllium Products </h1>
    </div>
</section>

<section class="product-section bgWhite">
    <div class="container">
        <div class="products-listCvr">
            <div class="row">
                <?php
                $nb_elem_per_page = 50;
                $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
                $data = glob("./assets/images/product/innerProduct/psyllium-products/*.*");
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
                <h2 class="sub-title"><strong>Organic &amp; Conventional Psyllium Products by Sankalp Enterprise Industries</strong></h2>
                <p>Sankalp Enterprise Industries stands as a trusted name in the manufacturing, exporting, and supplying of conventional and <a style="color: #6e7673" href="psyllium-products.php"><strong>organic psyllium products in India</strong></a>. Known for delivering unparalleled quality and value, our diverse product range caters to the needs of wholesalers, dealers, and distributors worldwide. Whether you’re looking for <a style="color: #6e7673" href="psyllium-seeds.php"><strong>Psyllium Seeds</strong></a>, <strong>conventional or <a style="color: #6e7673" href="psyllium-husk.php">organic Psyllium Husk</a></strong>, <a style="color: #6e7673" href="psyllium-husk-powder.php"><strong>Psyllium Husk Powder</strong></a>, or specialized offerings like <a style="color: #6e7673" href="industrial-kha-kha-powder.php"><strong>Industrial Kha Kha Powder</strong></a> and <a style="color: #6e7673" href="orange-flavored-psyllium.php"><strong>Flavored Psyllium</strong></a>, Sankalp Enterprise Industries ensures premium-grade products with optimal health benefits.<br />
                    Psyllium, a natural fiber derived from the seeds of the <em>Plantago ovata</em> plant, has long been celebrated for its dietary and medicinal properties. At Sankalp Enterprise Industries, we take pride in providing top-quality Psyllium products that are meticulously processed and tested to meet international quality standards. Our products are highly valued for their purity, consistency, and health-promoting qualities. With a commitment to customer satisfaction, we extend our services to countries like the USA, Australia, Thailand, Taiwan, Canada, Indonesia, Ireland, Japan, Korea, Malaysia, Turkey, Mexico, Russia, Saudi Arabia, Singapore, Sweden, Italy, France, Germany and more.</p>
                <!-- <h3 class="sub-title"><strong>Key Features of Sankalp Enterprise Psyllium Products</strong></h3>
                <ul type="disc">
                    <li><strong>High-Quality Psyllium Seeds</strong>: Sourced from the finest farms, our Psyllium Seeds are rich in soluble fiber, ideal for digestive health and weight management.</li>
                    <li><strong>Pure Psyllium Husk</strong>: Known for its exceptional swelling capacity, our Psyllium Husk aids in promoting gut health and regulating cholesterol levels.</li>
                    <li><strong>Psyllium Husk Powder</strong>: Finely milled for ease of use, this product is perfect for dietary supplements and food formulations.</li>
                    <li><strong>Industrial Kha Kha Powder</strong>: Tailored for industrial applications, it retains the natural properties of Psyllium with excellent stability. And is also used for Animal Feed</li>
                    <li><strong>Flavored Psyllium</strong>: A delightful twist to conventional Psyllium, this product combines natural fiber with a refreshing orange flavor, making it more palatable.</li>
                </ul>
                <h3 class="sub-title"><strong>Why Choose Sankalp Enterprise Industries?</strong></h3>
                <ol start="1" type="1">
                    <li><strong>Uncompromising Quality</strong>: We adhere to strict quality control processes, ensuring every product meets global standards.</li>
                    <li><strong>Global Reach</strong>: With a robust supply chain, we serve clients across multiple countries, ensuring timely delivery and excellent customer service.</li>
                    <li><strong>Versatile Applications</strong>: From health supplements to industrial uses, our Psyllium products cater to a wide range of requirements.</li>
                </ol>
                <p>Sankalp Enterprise Industries continues to set benchmarks in the Psyllium market by focusing on innovation, quality, and customer-centric approaches. Whether you are a wholesaler seeking bulk supplies or a distributor exploring reliable sourcing, Sankalp Enterprise Industries is your trusted partner for high-quality Psyllium products.</p> -->
            </div>
        </div>
    </div>
</section>
<?php include('footer.php') ?>