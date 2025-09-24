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
            </div>
        </div>
        <div class="category-rubric mb-0">
            <div class="term-description test123">
                <h2 class="sub-title"><strong>Sankalp Enterprise Industries – Premium Psyllium Products from India</strong></h2>
                <p>Sankalp Enterprise Industries is a trusted name in the manufacturing, exporting, and supplying of high-quality psyllium products. Our range includes Psyllium Husk Powder, Psyllium Husk, and Psyllium Seeds, carefully processed to ensure purity, consistency, and maximum health benefits.<br />
                    Derived from the seeds of the Plantago ovata plant, our psyllium products are valued for their natural dietary and medicinal properties. Serving wholesalers, dealers, and distributors worldwide, we provide products that meet international quality standards and bring wellness to kitchens and industries across the globe.</p>
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