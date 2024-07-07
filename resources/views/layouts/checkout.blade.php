<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Ogani Template" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PenKu - Pentol Kuah Kendari</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
        rel="stylesheet" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css" />
    <link rel="icon" href="{{ asset('css/penku.png') }}">
</head>

<body>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>

    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container mt-3 mb-0">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="header__logo">
                        <a href="/"><img src="{{ asset('css/penku.png') }}" alt="" width="100px" /></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer spad mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="{{ asset('css/teks.png') }}" alt="" width="1000px" /></a>
                        </div>
                        <p class="text-justify">Selamat datang di PenKu! Di sini, kami memastikan bahwa semua hidangan
                            yang kami sajikan, termasuk pentol kuah kami yang lezat, sepenuhnya halal. Kami sangat
                            memprioritaskan kualitas dan kehalalan bahan-bahan yang digunakan.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Link Terkait</h6>
                        <ul>
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Tentang Toko Kami</a></li>
                            <li><a href="#">Belanja Aman</a></li>
                            <li><a href="#">Informasi Pengiriman</a></li>
                            <li><a href="#">Kebijakan Privasi</a></li>
                            <li><a href="#">Peta Situs Kami</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Siapa Kami</a></li>
                            <li><a href="#">Layanan Kami</a></li>
                            <li><a href="#">Proyek</a></li>
                            <li><a href="#">Kontak</a></li>
                            <li><a href="#">Inovasi</a></li>
                            <li><a href="#">Testimoni</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Masukan & Saran</h6>
                        <p>
                            Kirimkan Masukan & Saran untuk peningkatan kualitas kami
                        </p>
                        <form action="#">
                            <input type="text" placeholder="Masukan & Saran" />
                            <button type="submit" class="site-btn"><i class="fa fa-send"></i></button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                document.write(new Date().getFullYear());
                                </script>
                                All rights reserved | <a href="http://rickyaryansah.infinityfreeapp.com/"
                                    target="_blank">Muhammad Ricky Aryansah</a>
                                </a>
                            </p>
                        </div>
                        <div class="footer__copyright__payment">
                            <img src="img/payment-item.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>