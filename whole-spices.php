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
                <h2 class="sub-title"><strong>Sankalp Enterprise Industries – Bringing the True Essence of Indian Spices to the World</strong></h2>
                <p>At Sankalp Enterprise Industries, we take pride in crafting and delivering premium whole spices straight from India. Each spice in our collection is carefully selected and processed to preserve its authentic flavor, aroma, and natural goodness. From Cumin and Fennel to Fenugreek, Coriander, Ajwain, Red Chillies, Kalonji, Bay Leaf, Turmeric, Cinnamon, Stevia Leaves, Chilly Flakes, and Senna Leaves, our range caters to every culinary need.<br />
                    Whether you are a wholesaler, dealer, or distributor, we ensure top-quality consistency in every shipment. Our commitment to excellence extends beyond India, reaching kitchens and businesses across the globe</p>
                <p>Reach out to us today to explore the world of rich, flavorful, and aromatic spices with Sankalp Enterprise.</p>
            </div>
        </div>
    </div>

</section>
<?php include('footer.php') ?>