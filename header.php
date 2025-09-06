<div class="menu-out">
    <div class="header" id="myheader">
        <div class="headin-out">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">

                    <!-- Logo & Brand -->
                    <a class="navbar-brand" href="index.php">
                        <!-- <img src="image/icon/logo.png" alt="Logo" /> -->
                        <h1>Royal<span>Heritage</span></h1>
                    </a>

                    <!-- Nav Icons (Always visible) -->
                    <div class="nav-icons d-flex align-items-center order-lg-3 ms-auto ms-lg-3">
                        <a href="#" class="nav-link" id="searchToggle"><i class="fas fa-search"></i></a>
                        <div id="searchBox" class="search-box">
                            <div class="search-input-wrapper">
                                <input type="text" placeholder="Search here..." class="form-control" />
                                <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                        <a href="#" class="nav-link"><i class="fas fa-user"></i></a>
                        <a href="#" class="nav-link"><i class="fas fa-heart"></i>
                            <div class="wishcount"><span>1</span></div>
                        </a>
                        <a href="#" class="nav-link"><i class="fas fa-shopping-bag"></i>
                            <div class="cartcount"><span>23</span></div>
                        </a>
                    </div>



                    <!-- Offcanvas Menu -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="collection.php">Collections</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Bridal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <!-- Offcanvas Toggler Button -->
                    <button class="navbar-toggler order-lg-2" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fa fa-bars"></span>
                    </button>
                </nav>
            </div>
        </div>
    </div>
</div>
<style>
    /* *{
        border: 1px solid red;
    } */
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchToggle = document.getElementById("searchToggle");
        const searchBox = document.getElementById("searchBox");

        searchToggle.addEventListener("click", function(e) {
            e.preventDefault(); // Prevent link behavior
            searchBox.style.display = searchBox.style.display === "block" ? "none" : "block";
        });

        // Optional: Click outside to close
        document.addEventListener("click", function(event) {
            if (!searchBox.contains(event.target) && !searchToggle.contains(event.target)) {
                searchBox.style.display = "none";
            }
        });
    });
</script>