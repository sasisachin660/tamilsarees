<!DOCTYPE html>
<html lang="en">
<?php
// $product_name = "Kanchipuram Soft Silk Saree";
// $product_price = "3599";
// $product_image = "https://yourdomain.com/images/product.jpg";
// $product_url = "https://yourdomain.com/product/kanchipuram-silk";
?>
<!--
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "<?php echo $product_name; ?>",
  "image": "<?php echo $product_image; ?>",
  "description": "Beautiful authentic Kanchipuram silk saree.",
  "sku": "SKU123",
  "brand": {
    "@type": "Brand",
    "name": "Elampillai Sarees"
  },
  "offers": {
    "@type": "Offer",
    "url": "<?php echo $product_url; ?>",
    "priceCurrency": "INR",
    "price": "<?php echo $product_price; ?>",
    "availability": "https://schema.org/InStock",
    "itemCondition": "https://schema.org/NewCondition"
  }
}
</script> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Heritage - Collection</title>
    <!-- web_link -->
    <?php include("website_links.php"); ?>
    <style>
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 3rem;
            gap: 0.5rem;
        }

        .pagination-btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--accent);
            background-color: var(--background);
            color: var(--text);
            cursor: pointer;
            transition: all 0.3s;
        }

        .pagination-btn.active {
            background-color: var(--primary);
            color: var(--background);
            border-color: var(--primary);
        }

        .pagination-btn:hover:not(.active) {
            background-color: var(--hover-tint);
        }
    </style>

</head>

<body>
    <!-- Header -->
    <?php include("header.php"); ?>

    <!-- Collection Header -->
    <section class="collection-header">
        <div class="container">
            <h1>New Arrivals</h1>
            <img src="./image/icon/col.png" alt="">
            <p>Discover our latest collection of premium bridal sarees, featuring exquisite craftsmanship and
                contemporary designs for the modern Indian bride.</p>
        </div>
    </section>

    <!-- Collection Content -->
    <section class="container collection-content">
        <!-- Filters Sidebar -->
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel"><i class="fas fa-sliders-h me-3"></i>Filters</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="filters">
                    <div class="filter-groups">
                        <!-- Category Filter -->
                        <div class="filter-group">
                            <h3>Category <i class="fas fa-chevron-down"></i></h3>
                            <div class="filter-options">
                                <div class="filter-option">
                                    <input type="checkbox" id="bridal">
                                    <label for="bridal">Bridal Sarees</label>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="festive">
                                    <label for="festive">Festive Wear</label>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="designer">
                                    <label for="designer">Designer Sarees</label>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="traditional">
                                    <label for="traditional">Traditional</label>
                                </div>
                            </div>
                        </div>

                        <!-- Custom Price Filter -->
                        <div class="filter-group">
                            <h3>Price <i class="fas fa-chevron-down"></i></h3>
                            <div class="filter">
                                <label class="filter__label">
                                    <input type="text" class="filter__input" id="price-from">
                                </label>

                                <label class="filter__label">
                                    <input type="text" class="filter__input" id="price-to">
                                </label>

                                <div id="sliderPrice" class="filter__slider-price" data-min="50" data-max="1000" data-step="10"></div>
                            </div>
                        </div>


                        <!-- Color Filter -->
                        <div class="filter-group">
                            <h3>Color <i class="fas fa-chevron-down"></i></h3>
                            <div class="color-options">
                                <div class="color-option active" style="background-color: #4B0082;"></div>
                                <div class="color-option" style="background-color: #65000B;"></div>
                                <div class="color-option" style="background-color: #C9B037;"></div>
                                <div class="color-option" style="background-color: #006400;"></div>
                                <div class="color-option" style="background-color: #FDF8F2;"></div>
                                <div class="color-option" style="background-color: #3E2723;"></div>
                            </div>
                        </div>

                        <!-- Fabric Filter -->
                        <div class="filter-group">
                            <h3>Fabric <i class="fas fa-chevron-down"></i></h3>
                            <div class="filter-options">
                                <div class="filter-option">
                                    <input type="checkbox" id="silk">
                                    <label for="silk">Silk</label>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="georgette">
                                    <label for="georgette">Georgette</label>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="organza">
                                    <label for="organza">Organza</label>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="banarasi">
                                    <label for="banarasi">Banarasi</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="products-grid">
            <div class="grid-options">
                <div class="sort-options">
                    <label for="sort">Sort by:</label>
                    <select id="sort">
                        <option value="featured">Featured</option>
                        <option value="newest">Newest</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                    </select>
                </div>
                <div class="view-options">
                    <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                        <i class="fas fa-sliders-h"></i> Filter
                    </button>
                </div>
            </div>

            <div class="products">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="./image/1.jpg" alt="Banarasi Silk Saree">
                        <div class="sale-tag">New</div>
                        <div class="product-actions">
                            <button class="action-btn" title="like"><i class="fas fa-heart"></i></button>
                            <button class="action-btn" title="cart"><i class="fas fa-shopping-bag"></i></button>
                            <button class="action-btn" title="compare"><i class="fas fa-balance-scale"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#">
                            <h3 class="product-title">Banarasi Silk Saree</h3>
                            <p class="product-price">Rs.349.99</p>
                        </a>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="./image/2.jpg" alt="Kanjivaram Silk Saree">
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-heart"></i></button>
                            <button class="action-btn"><i class="fas fa-shopping-bag"></i></button>
                            <button class="action-btn"><i class="fas fa-balance-scale"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#">
                            <h3 class="product-title">Kanjivaram Silk Saree</h3>
                            <p class="product-price">Rs.399.99</p>
                        </a>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="./image/3.jpg" alt="Embroidered Georgette Saree">
                        <div class="sale-tag">Popular</div>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-heart"></i></button>
                            <button class="action-btn"><i class="fas fa-shopping-bag"></i></button>
                            <button class="action-btn"><i class="fas fa-balance-scale"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#">
                            <h3 class="product-title">Embroidered Georgette Saree</h3>
                            <p class="product-price">Rs.299.99</p>
                        </a>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="./image/4.jpg" alt="Red Bridal Saree">
                        <div class="sale-tag">Limited</div>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-heart"></i></button>
                            <button class="action-btn"><i class="fas fa-shopping-bag"></i></button>
                            <button class="action-btn"><i class="fas fa-balance-scale"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#">
                            <h3 class="product-title">Red Bridal Saree</h3>
                            <p class="product-price">Rs.459.99</p>
                        </a>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="./image/1.jpg" alt="Contemporary Saree">
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-heart"></i></button>
                            <button class="action-btn"><i class="fas fa-shopping-bag"></i></button>
                            <button class="action-btn"><i class="fas fa-balance-scale"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#">
                            <h3 class="product-title">Contemporary Saree</h3>
                            <p class="product-price">Rs.279.99</p>
                        </a>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="./image/2.jpg" alt="Green Silk Saree">
                        <div class="sale-tag">Sale</div>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-heart"></i></button>
                            <button class="action-btn"><i class="fas fa-shopping-bag"></i></button>
                            <button class="action-btn"><i class="fas fa-balance-scale"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#">
                            <h3 class="product-title">Green Silk Saree</h3>
                            <p class="product-price"><s>Rs.399.99</s> Rs.329.99</p>
                        </a>
                    </div>
                </div>
                <!-- Product 7 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="./image/3.jpg" alt="Embroidered Georgette Saree">
                        <div class="sale-tag">Popular</div>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-heart"></i></button>
                            <button class="action-btn"><i class="fas fa-shopping-bag"></i></button>
                            <button class="action-btn"><i class="fas fa-balance-scale"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#">
                            <h3 class="product-title">Embroidered Georgette Saree</h3>
                            <p class="product-price">Rs.299.99</p>
                        </a>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="./image/4.jpg" alt="Red Bridal Saree">
                        <div class="sale-tag">Limited</div>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-heart"></i></button>
                            <button class="action-btn"><i class="fas fa-shopping-bag"></i></button>
                            <button class="action-btn"><i class="fas fa-balance-scale"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#">
                            <h3 class="product-title">Red Bridal Saree</h3>
                            <p class="product-price">Rs.459.99</p>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Pagination -->
            <div class="pagination">
                <div class="pagination-btn"><i class="fas fa-chevron-left"></i></div>
                <div class="pagination-btn active">1</div>
                <div class="pagination-btn">2</div>
                <div class="pagination-btn">3</div>
                <div class="pagination-btn">4</div>
                <div class="pagination-btn"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>

    </section>
    <div class="text-center pb-3">
        <img src="./image/icon/col.png" alt="">
    </div>



    <!-- Footer -->
    <?php include("footer.php"); ?>



    <?php include("web_link_js.php"); ?>

</body>

</html>