<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BIMBEL-IN</title>
    <link rel="icon" href="{{ asset('frontemplate') }}/img/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontemplate') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontemplate') }}/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontemplate') }}/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('frontemplate') }}/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('frontemplate') }}/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontemplate') }}/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('frontemplate') }}/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('frontemplate') }}/css/style.css">
    <link href="{{ asset('swal/dist/sweetalert2.min.css') }}" rel="stylesheet">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand"> BIMBEL-IN </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('kelas') }}">Kelas</a>
                                </li>
                                
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('jadwal') }}">Jadwal</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('podcast') }}">Podcast</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">About</a>
                                </li>
                                @guest
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                                </li> -->
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="{{ route('login') }}">Login</a>
                                </li>
                                @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Hi, {{ Auth::user()->nama }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('akun') }}">Akun</a>
                                        <a class="dropdown-item" href="{{ route('transaksi.user') }}">Riwayat Transaksi</a>

                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
    @yield('content')

    <!-- footer part start-->
    <footer class="footer-area mt-4">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        {{-- <a href="">
                            <img src="/frontemplate/img/logo.png" alt="logo">
                        </a> --}}
                        <a href="index.html">
                            <h2>BIMBEL-IN</h2>
                        </a>
                        <p>Platform belajar online nomor 1 di Indonesia</p>
                        <div class="single-footer-widget footer_1">
                            <div class="social_icon">
                                <a href="#"> <i class="ti ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                                <a href="#"> <i class="bi bi-twitter-x"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Kontak Kami</h4>
                        <div class="social_icon">
                            <ul>
                                <li>
                                    <i class="bi bi-telephone-fill"></i> <span class="text-icon"> (022)6518166 </span>
                                </li>
                                <li>
                                    <i class="bi bi-envelope-fill"></i> <span class="text-icon"> officialbimbelin@gmail.com </span>
                                </li>
                                <li>
                                    <i class="bi bi-whatsapp"></i> <span class="text-icon"> +62 856-2469-888 </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Info Lebih Lanjut</h4>
                        <div class="contact_info">
                            <p>Kebijakan Privasi</p>
                            <p>Syarat dan Ketentuan</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy; | <script>
                                        document.write(new Date().getFullYear());
                                    </script> ITATS - Mata Kuliah MPTI | Bimbingan Belajar Bimbel-IN
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{ asset('frontemplate') }}/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="{{ asset('frontemplate') }}/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('frontemplate') }}/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="{{ asset('frontemplate') }}/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('frontemplate') }}/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('frontemplate') }}/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="{{ asset('frontemplate') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontemplate') }}/js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('frontemplate') }}/js/slick.min.js"></script>
    <script src="{{ asset('frontemplate') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('frontemplate') }}/js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="{{ asset('frontemplate') }}/js/custom.js"></script>
    <script src="{{ asset('swal/dist/sweetalert2.min.js') }}"></script>
    @if(session('status'))
    <script type="text/javascript">
        Swal.fire({
            title: 'Sukses...',
            icon: 'success',
            text: '{{ session("status") }}',
            showClass: {
                popup: 'animated bounceInDown slow'
            },
            hideClass: {
                popup: 'animated bounceOutDown slow'
            }
        })
    </script>
    @elseif(session('status_error'))
    <script type="text/javascript">
        Swal.fire({
            title: 'Error...',
            icon: 'error',
            text: '{{ session("status_error") }}',
            showClass: {
                popup: 'animated bounceInDown slow'
            },
            hideClass: {
                popup: 'animated bounceOutDown slow'
            }
        })
    </script>
    @endif
</body>

</html>