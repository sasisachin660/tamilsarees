<!DOCTYPE html>
<html lang="en">
<!-- <?php
        $product_name = "Kanchipuram Soft Silk Saree";
        $product_price = "3599";
        $product_image = "https://yourdomain.com/images/product.jpg";
        $product_url = "https://yourdomain.com/product/kanchipuram-silk";
        ?>

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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;500&family=Lato&display=swap"
        rel="stylesheet">
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
            <p>Discover our latest collection of premium bridal sarees, featuring exquisite craftsmanship and
                contemporary designs for the modern Indian bride.</p>
        </div>
    </section>

    <!-- Collection Content -->
    <section class="container collection-content">
        <!-- Filters Sidebar -->
        <div class="filters">
            <h2>Filters</h2>

            <div class="filter-groups">
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

                <div class="filter-group">
                    <h3>Price <i class="fas fa-chevron-down"></i></h3>
                    <input type="range" min="50" max="1000" value="500" class="price-range">
                    <div class="price-values">
                        <span>$50</span>
                        <span>$1000</span>
                    </div>
                </div>

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
                    <div class="view-option active">
                        <i class="fas fa-th"></i>
                    </div>
                    <div class="view-option">
                        <i class="fas fa-list"></i>
                    </div>
                </div>
            </div>

            <div class="products">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1571875082329-4daa1ff5b6c3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                            alt="Banarasi Silk Saree">
                        <div class="sale-tag">New</div>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-heart"></i></button>
                            <button class="action-btn"><i class="fas fa-shopping-bag"></i></button>
                            <button class="action-btn"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Banarasi Silk Saree</h3>
                        <p class="product-price">$349.99</p>
                        <a href="#" class="btn">View Details</a>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1631549916768-4119a8066c3d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                            alt="Kanjivaram Silk Saree">
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-heart"></i></button>
                            <button class="action-btn"><i class="fas fa-shopping-bag"></i></button>
                            <button class="action-btn"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Kanjivaram Silk Saree</h3>
                        <p class="product-price">$399.99</p>
                        <a href="#" class="btn">View Details</a>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1618517351616-38aae535edf6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                            alt="Embroidered Georgette Saree">
                        <div class="sale-tag">Popular</div>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-heart"></i></button>
                            <button class="action-btn"><i class="fas fa-shopping-bag"></i></button>
                            <button class="action-btn"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Embroidered Georgette Saree</h3>
                        <p class="product-price">$299.99</p>
                        <a href="#" class="btn">View Details</a>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1585487000160-6ebcfcec0b3e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                            alt="Red Bridal Saree">
                        <div class="sale-tag">Limited</div>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-heart"></i></button>
                            <button class="action-btn"><i class="fas fa-shopping-bag"></i></button>
                            <button class="action-btn"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Red Bridal Saree</h3>
                        <p class="product-price">$459.99</p>
                        <a href="#" class="btn">View Details</a>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1580554530778-ca36943938b2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                            alt="Contemporary Saree">
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-heart"></i></button>
                            <button class="action-btn"><i class="fas fa-shopping-bag"></i></button>
                            <button class="action-btn"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Contemporary Saree</h3>
                        <p class="product-price">$279.99</p>
                        <a href="#" class="btn">View Details</a>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                            alt="Green Silk Saree">
                        <div class="sale-tag">Sale</div>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-heart"></i></button>
                            <button class="action-btn"><i class="fas fa-shopping-bag"></i></button>
                            <button class="action-btn"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Green Silk Saree</h3>
                        <p class="product-price"><s>$399.99</s> $329.99</p>
                        <a href="#" class="btn">View Details</a>
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

    <!-- Newsletter -->
    <?php include("newsletter.php"); ?>

    <!-- Footer -->
      <?php include("footer.php"); ?>

    <script>
        // Simple JavaScript for interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Filter toggle
            const filterHeaders = document.querySelectorAll('.filter-group h3');
            filterHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    const options = this.nextElementSibling;
                    options.style.display = options.style.display === 'none' ? 'block' : 'none';
                    const icon = this.querySelector('i');
                    icon.classList.toggle('fa-chevron-down');
                    icon.classList.toggle('fa-chevron-up');
                });
            });

            // Color option selection
            const colorOptions = document.querySelectorAll('.color-option');
            colorOptions.forEach(option => {
                option.addEventListener('click', function() {
                    colorOptions.forEach(opt => opt.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // View options toggle
            const viewOptions = document.querySelectorAll('.view-option');
            viewOptions.forEach(option => {
                option.addEventListener('click', function() {
                    viewOptions.forEach(opt => opt.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>
</body>

</html>