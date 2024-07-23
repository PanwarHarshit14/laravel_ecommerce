<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
</head>

<body>
    <header>
        <div class="navbar bg-body-tertiary py-lg-0">
            <div class="container gap-1 align-items-center">
                <span class="navbar-text d-none d-lg-block">
                    <figure>
                        <img src="{{ asset('images/logo.png') }}" height="50" alt="">
                    </figure>
                </span>
                <span class="navbar-text col-12 d-lg-none">
                    <div class="d-flex justify-content-center">
                        <figure>
                            <img src="{{ asset('images/logo.png') }}" height="50" alt="">
                        </figure>
                    </div>
                </span>
                <span class="navbar-text d-flex flex-grow-1 px-3">
                    <div class="input-group">
                        <span class="input-group-text" id="Search"> <i class="bi bi-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                            aria-describedby="basic-addon1">
                    </div>
                </span>
                <span class="navbar-text d-flex gap-md-4 gap-2 align-items-center px-3">
                    <div class="btn-group">
                        <a class="text-decoration-none dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            INR
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">INR</a></li>
                            <li><a class="dropdown-item" href="#">RUS</a></li>
                            <li><a class="dropdown-item" href="#">AUS</a></li>
                        </ul>
                    </div>
                    <div>
                        <a class="text-decoration-none text-dark" href="#">
                            <i class="bi bi-person"></i>
                            Login
                        </a>
                    </div>
                    <div>
                        <a class="text-decoration-none text-dark" href="{{ route('cart') }}">
                            <i class="bi bi-cart"></i>
                            Cart -
                            <small>(2 items)</small>
                        </a>
                    </div>
                </span>
                <span class="navbar-text d-lg-none">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </span>
            </div>
        </div>
    </header>
    <x-main-navbar />
    <main>
        @yield('main_section')
    </main>
    <hr class="my-5">
    <footer>
        <div class="container">
            <div class="row footer_custom">
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <h5>About Tejassvi</h5>
                    <p>Tejassvi.com is best known for providing the rich Royal Indian traditional craftsmanship to all
                        parts of the world.</p>
                    <div class="mb-3">
                        <a class="mx-1 fs-5" href="#"><i class="bi bi-facebook"></i></a>
                        <a class="mx-1 fs-5" href="#"><i class="bi bi-twitter-x"></i></a>
                        <a class="mx-1 fs-5" href="#"><i class="bi bi-instagram"></i></a>
                        <a class="mx-1 fs-5" href="#"><i class="bi bi-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <h5>Connect With Us</h5>
                            <ul>
                                <li><a href="#"><i class="bi bi-chevron-right"></i>About Us</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i>Contact Us</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i>Our Story</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i>Disclaimer</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i>Blog & News</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i>Substainablity</a></li>
                            </ul>
                        </div>
                        <div class="col-5 col-md-4">
                            <h5>Information</h5>
                            <ul>
                                <li><a href="#"><i class="bi bi-chevron-right"></i>FAQs</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i>Shipping Policy</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i>Customise Policy</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i>Return/Refund Policy</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i>Maintain Your Furniture</a>
                                </li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i>Term of Use</a></li>
                            </ul>
                        </div>
                        <div class="col-5 col-md-4">
                            <h5>Navigation</h5>
                            <ul>
                                <li><a href="#"><i class="bi bi-chevron-right"></i>Privacy Policy</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i>Care & Instructions</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i>Franchise</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i>International Shipping</a>
                                </li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i>Deals & Coupons</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center my-5">
                    <small>&copy 2024 Tejassvi</small>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('web/js/script.js') }}"></script>
</body>

</html>
