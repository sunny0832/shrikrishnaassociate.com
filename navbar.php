<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>shrikrishnaassociate.com</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<!-- Required CDNs -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <link href="css/style.css" rel="stylesheet">

    <style>
        .site-title {
            font-size: 26px; /* Desktop view mein thoda bada */
            font-weight: bold;
        }

        @media (max-width: 576px) {
            .site-title {
                font-size: 14px; /* Mobile view mein chhota hi rahe */
                white-space: nowrap;
            }

            .navbar-brand .icon img {
                width: 28px !important;
                height: 28px !important;
            }
        }

        /* Custom CSS for nested dropdown */
        .dropdown-menu .dropdown-toggle::after {
            border-top: 0.3em solid;
            border-right: 0.3em solid transparent;
            border-bottom: 0;
            border-left: 0.3em solid transparent;
            margin-left: auto; /* Align arrow to the right */
        }

        .dropdown-menu .dropdown-submenu {
            position: relative;
        }

        .dropdown-menu .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
            border-radius: 0;
        }

        /* Keep main dropdown visible on hover of nested */
        .dropdown:hover > .dropdown-menu {
            display: block;
        }

        .dropdown-menu .dropdown-toggle:hover + .dropdown-menu {
            display: block;
        }

        /* Hide nested dropdowns by default */
        .dropdown-menu .dropdown-menu {
            display: none;
        }
    </style>
</head>

<body>

<div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-3">
        <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
            <div class="icon p-1 me-2">
                <img class="img-fluid" src="images/SKA1.webp" alt="Logo" style="width: 35px; height: 35px;">
            </div>
            <span class="navbar-text text-primary fw-bold site-title">Shri Krishna Associate</span>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="Latest_Residential_Properties.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Residential</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="affordable-projects.php" class="dropdown-item">Affordable</a>
                        <a href="luxury.php" class="dropdown-item">Luxury Projects</a>
                        <a href="residential-ready-to-move-projects.php" class="dropdown-item">Ready To Move</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="Latest_Residential_Properties.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Commercial</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="affordable-society-shops.php" class="dropdown-item">Affordabl Society Shops</a>
                        <a href="high-street-commercial-mall.php" class="dropdown-item">High Street Commercial Mall</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="all_projects.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">All Projects</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="Latest_Residential_Properties.php" class="dropdown-item">Residential</a>
                        <a href="commercial.php" class="dropdown-item">Commercial</a>
                        <a href="luxury.php" class="dropdown-item">Luxuary</a>
                        <a href="Ongoing_projects.php" class="dropdown-item">Ongoing Projects</a>
                        <a href="upcoming_projects.php" class="dropdown-item">Upcoming projects</a>
                        <a href="plots.php" class="dropdown-item">Plot</a>
                    </div>
                </div>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>