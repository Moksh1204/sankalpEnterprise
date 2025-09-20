<?php include('header.php') ?>
<section class="page-header category-banner">
    <div class=" page-header__bg test12345" style="background-image:url('./assets/images/bred/Whole-Spices-2.jpg');">
    </div>
    <div class="container">
        <h1 class="woocommerce-products-header__title"> Whole Spices </h1>
    </div>
</section>

<section class="product-section bgWhite">
    <div class="container">
        <div class="products-listCvr">
            <div class="row">
                <?php
                $nb_elem_per_page = 50;
                $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
                $data = glob("./assets/images/product/innerProduct/whole-spices/*.*");
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
                <h2 class="sub-title"><strong>Sankalp Enterprise Industries: A Trusted Name in Whole Spices</strong></h2>
                <p>Sankalp Enterprise Industries is synonymous with excellence in the manufacturing, exporting, and supplying of premium whole spices from India. With a wide array of carefully sourced and processed spices, we bring the authentic taste and aroma of Indian spices to global markets. Our product range includes <a style="color: #6e7673" href="cumin-seed.php" target="_blank" rel="noopener"><strong>Cumin Seed</strong></a>, <a style="color: #6e7673" href="fennel-seed.php" target="_blank" rel="noopener"><strong>Fennel Seed</strong></a>, <a style="color: #6e7673" href="fenugreek-seed.php" target="_blank" rel="noopener"><strong>Fenugreek Seed</strong></a>, <a style="color: #6e7673" href="coriander-seed.php" target="_blank" rel="noopener"><strong>Coriander Seed</strong></a>, <a style="color: #6e7673" href="dill-seed.php" target="_blank" rel="noopener"><strong>Dill Seed</strong></a>, <a style="color: #6e7673" href="bishops-seed.php" target="_blank" rel="noopener"><strong>Bishop’s Seed (Ajwain)</strong></a>, <a style="color: #6e7673" href="red-chillies.php" target="_blank" rel="noopener"><strong>Red Chillies</strong></a>, <a style="color: #6e7673" href="nigella-seed-kalonji.php" target="_blank" rel="noopener"><strong>Nigella Seed (Kalonji)</strong></a>, <a style="color: #6e7673" href="bay-leaf.php" target="_blank" rel="noopener"><strong>Bay Leaf</strong></a>, <a style="color: #6e7673" href="turmeric.php" target="_blank" rel="noopener"><strong>Turmeric</strong></a>, <a style="color: #6e7673" href="stevia-leaves.php" target="_blank" rel="noopener"><strong>Stevia Leaves</strong></a>, <a style="color: #6e7673" href="chilly-flakes.php" target="_blank" rel="noopener"><strong>Chilly Flakes</strong></a>, <a style="color: #6e7673" href="cinnamon.php" target="_blank" rel="noopener"><strong>Cinnamon</strong></a>, and <a style="color: #6e7673" href="senna-leaves.php" target="_blank" rel="noopener"><strong>Senna Leaves</strong></a>.<br />
                    Whether you are a wholesaler, dealer, or distributor, Sankalp Enterprise Industries ensures unmatched quality and consistency in every product we deliver. Our spices are processed with utmost care, preserving their natural flavor, aroma, and nutritional value. With a commitment to customer satisfaction, we cater to clients in India and internationally, including markets in the USA, Australia, Thailand, Taiwan, Canada, Indonesia, Ireland, Japan, Korea, Malaysia, Turkey, Mexico, Russia, Saudi Arabia, Singapore, Sweden, and more.</p>
                <p>Reach out to us today to explore the world of rich, flavorful, and aromatic spices with Sankalp Enterprise Industries.</p>
            </div>
        </div>
    </div>

</section>
<?php include('footer.php') ?>