<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rental - Doli Motor</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="images/tablogo.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="app-assets/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="app-assets/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="app-assets/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="app-assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0-rc.2/themes/smoothness/jquery-ui.css">
    
<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-4) -->
    <header class="ltn__header-area ltn__header-4 ltn__header-6 ltn__header-transparent gradient-color-2">
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black  ltn__logo-right-menu-option plr--9">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="#"><img src="images/tablogo.png" alt="Logo"></a>
                            </div>
                            <div class="get-support clearfix get-support-color-white">
                                <div class="get-support-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="get-support-info">
                                    <h6>Get Support</h6>
                                    <h4><a href="tel:+123456789">0812-6268-356</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column menu-color-white">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li class="menu"><a href="{{ url('/') }}">Beranda</a>
                                        </li>
                                        <li class="menu"><a href="#">Layanan</a>
                                            <ul>
                                                <li><a href="{{ url('rental') }}">Rental Mobil</a></li>
                                                <li><a href="{{ url('service') }}">Auto Service</a></li>
                                                <li><a href="{{ url('doorsmer') }}">Doorsmer</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu"><a href="{{ url('shop') }}">Shop</a>
                                        </li>
                                        <li><a href="{{ url('keranjang') }}">Keranjang</a></li>
                                        <li><a href="{{ url('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="ltn__header-options ltn__header-options-2">                       
                        @if(Auth::check())
                        <!-- Notifications -->
                        <div class="mini-cart-icon">
                            <a href="#ltn__notifikasi-cart-menu" class="ltn__utilize-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                  </svg>
                            </a>
                        </div>
                        @endif
                        <!-- Notifications -->
                        <!-- user-menu -->
                        <div class="ltn__drop-menu user-menu">
                            <ul>
                                <li>
                                    <a href="#"><i class="icon-user"></i></a>
                                    <ul>
                                        @guest
                                        <li><a href="{{ url('register') }}">Register</a></li>
                                        <li><a href="{{ url('login') }}">Login</a></li>
                                        @endguest
                                        @auth
                                        <li><a href="{{ url('akun') }}">Akun</a></li>
                                        <li><a href="{{ url('logout') }}">Logout</a></li>
                                        @endauth
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Utilize Mobile Menu End -->
    <div class="ltn__utilize-overlay"></div>
</header>
    <!-- HEADER AREA END -->

<!-- Notifikasi Cart Menu Start -->
@auth
<div id="ltn__notifikasi-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">Notifikasi</span>            
        </div>
        <div class="mini-cart-product-area ltn__scrollbar" style="height: 3000px;">
            @php
            $notifItems = array_merge($notifrental->toArray(), $notifservice->toArray(), $notifdoorsmeer->toArray(), $notiforder->toArray());
            usort($notifItems, function ($a, $b) {
                return strtotime($b['updated_at']) - strtotime($a['updated_at']);
            });
            @endphp
        
            @foreach ($notifItems as $item)
            @if ($item['status'] == 'Disetujui' || $item['status'] == 'Ditolak' || $item['status'] == '2' || $item['status'] == '3')
                @if (!empty($item['pemberitahuan']))
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-info">          
                            @if($item['pemberitahuan'] == "Booking rental Anda telah diterima" || $item['pemberitahuan'] == "Booking rental Anda ditolak")                                      
                            <form action="{{ route('delete_rentalnotif', $item['id']) }}" method="post" enctype="multipart/form">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn-ltn__utilize-close" style="float: right; margin-right: 7px;">×</button>
                            </form>                            
                            @endif
                            @if($item['pemberitahuan'] == "Booking service Anda telah diterima" || $item['pemberitahuan'] == "Booking service Anda ditolak")                                      
                            <form action="{{ route('delete_servicenotif', $item['id']) }}" method="post" enctype="multipart/form">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn-ltn__utilize-close" style="float: right; margin-right: 7px;">×</button>
                            </form>
                            @endif
                            @if($item['pemberitahuan'] == "Booking doorsmeer Anda telah diterima" || $item['pemberitahuan'] == "Booking doorsmeer Anda ditolak")
                            <form action="{{ route('delete_doorsmeernotif', $item['id']) }}" method="post" enctype="multipart/form">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn-ltn__utilize-close" style="float: right; margin-right: 7px;">×</button>
                            </form>
                            @endif
                            @if($item['pemberitahuan'] == "Pesanan anda Telah Diterima" || $item['pemberitahuan'] == "Pesanan anda Ditolak")
                            <form action="{{ route('delete_ordernotif', $item['id']) }}" method="post" enctype="multipart/form">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn-ltn__utilize-close" style="float: right; margin-right: 7px;">×</button>
                            </form>
                            @endif
                            <h6>
                                <a href="#" style="margin-right: 25px;">{{ $item['pemberitahuan'] }}</a>
                            </h6>
                            <span class="mini-cart-quantity"><?php echo Carbon\Carbon::parse($item['updated_at'])->diffForHumans(); ?></span>
                        </div>
                    </div>
                @endif
            @endif
            @endforeach

    
        </div>
        
        <div class="mini-cart-footer">
            <div class="btn-wrapper">
                <a></a>
                <a href="{{ url('akun') }}" class="theme-btn-2 btn btn-effect-2">Selengkapnya</a>
            </div>
        </div>

    </div>
</div>
@endauth
<!-- Notifikasi Cart Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- SLIDER AREA START (slider-4) -->
    <div class="ltn__slider-area ltn__slider-4 ">
        <div class="ltn__slide-one-active----- slick-slide-arrow-1----- slick-slide-dots-1----- arrow-white----- ltn__slide-animation-active">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-4 text-color-white bg-image bg-overlay-theme-black-80" data-bs-bg="app-assets/images/home/2.jpg">
                <div class="ltn__slide-item-inner text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="ltn__slide-animation">
                                    <h1 class="slide-title animated ">Rental Mobil</h1>
                                    <div class="slide-item-img">
                                        <a><img src="app-assets/images/rental/1.png" alt="#"></a>
                                    </div>
                                </div>
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="btn-wrapper animated">
                                            <a href="#booking" class="theme-btn-1 btn btn-effect-1">BOOKING</a>
                                            <a href="#footer" class="btn btn-transparent btn-effect-2 white-color">SELENGKAPNYA</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER AREA END -->
    <div class="ltn__car-dealer-form-area pt-50 pb-50">
    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="about-us-img-wrap ltn__img-shape-left  about-img-left">
                        <img src="app-assets/images/rental/4.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  Rental Mobil</h6>
                            <h1 class="section-title">Rental Mobil Terbaik <br>  Tarutung & Sekitarnya<span>.</span></h1>
                            <p>Solusi tepat untuk perjalanan keluarga Anda, karena kami kini menyediakan unit kendaraan mobil baru dengan Type yang beragam</p>
                        </div>
                        <div class="about-us-info-wrap-inner about-us-info-devide">
                            <div class="list-item-with-icon">
                                <ul>
                                    <li><a>Jemput Dalam dan luar Kota</a></li>
                                    <li><a>Sewa Kendaraan Pakai Supir</a></li>
                                    <li><a>Sewa Kendaraan Lepas Kunci</a></li>
                                    <li><a>Antar - jemput bandara</a></li>
                                    <li><a>Persyaratan Sewa hanya KTP atau ID Card</a></li>
                                </ul>
                            </div>
                            <div class="list-item-with-icon">
                                <ul>
                                    <li><a>Exellent Service</a></li>
                                    <li><a>Driver Profesional</a></li>
                                    <li><a>Kondisi Mobil terawat</a></li>
                                    <li><a  >Harga Terjangkau</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ltn__service-list-menu text-uppercase mt-50">
                <ul>
                    <li><i class=""></i> Rute Lepas Kunci <span class="service-price"> <span>Bebas</span></span> </li>
                    <li><i class=""></i> Jangka Waktu <span class="service-price">FullDay - Weekly - Monthly<span></span></span> </li>
                    <li><i class=""></i> Catatan <span class="service-price">Harga diluar BBM, Parkir, dan biaya masuk Tol<span></span></span> </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->


    <!-- PRODUCT TAB AREA START (product-item-3) -->
    <div class="ltn__product-tab-area ltn__product-gutter pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// Mobil</h6>
                        <h1 class="section-title">Variasi Mobil Rental</h1>
                    </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_2_1">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a><img src="app-assets/images/rental/avanzalama.png" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a>Avanza Lama</a></h2>
                                                <div class="product-price">
                                                    <span>Rp 250.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a><img src="app-assets/images/rental/avanzabaru.png" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a>Avanza Baru</a></h2>
                                                <div class="product-price">
                                                    <span>Rp 300.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a><img src="app-assets/images/rental/inovareborn.png" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a>Inova Reborn</a></h2>
                                                <div class="product-price">
                                                    <span>Rp 500.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a><img src="app-assets/images/rental/terios.png" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a>Terios AT</a></h2>
                                                <div class="product-price">
                                                    <span>Rp 300.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a><img src="app-assets/images/rental/hyundai.png" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a>Hyundai H-1</a></h2>
                                                <div class="product-price">
                                                    <span>Rp 750.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a><img src="app-assets/images/rental/fortuner.png" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a>Fortuner VRZ</a></h2>
                                                <div class="product-price">
                                                    <span>Rp 750.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB AREA END -->

    <!-- CAR DEALER FORM AREA START -->
    @if(Auth::check())
    <div class="ltn__car-dealer-form-area pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__car-dealer-form-tab">
                        <div class="ltn__tab-menu  text-uppercase">
                            <div class="nav">
                                <a class="active show" id="booking" data-bs-toggle ="tab" href="#ltn__form_tab_1_1"><i class="fas fa-car"></i>Booking</a>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                                <div class="car-dealer-form-inner">
                                    <form action="{{ route('addrental.action') }}" class="ltn__car-dealer-form-box row" method="POST">
                                        @csrf
                                        <div class="col-lg-4 col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input class="form-control @error('namalengkap') is-invalid @enderror" type="text" value="{{ Auth::user()->name }}" name="namalengkap" placeholder="Nama Lengkap" autocomplete="off" readonly>
                                            </div>
                                        </div> 
                                        <div class="col-lg-4 col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input class="form-control @error('alamat') is-invalid @enderror" type="text" name="alamat" placeholder="Alamat" autocomplete="off">
                                            </div>
                                        </div> 
                                        <div class="col-lg-4 col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input class="form-control  @error('nomortelepon') is-invalid @enderror" type="text" name="nomortelepon" placeholder="Nomor Telepon" value="{{ Auth::user()->nomortelepon }}" readonly>
                                            </div>
                                        </div>  
                                        <div class="ltn__car-dealer-form-item col-lg-4 col-md-6">
                                            <div class="input-group date">
                                                <input class="form-control  @error('tanggalrental') is-invalid @enderror" id="datepicker-start" type="text" name="tanggalrental" placeholder="Tanggal Rental" autocomplete="off" data-date-format="dd/mm/yyyy">

                                            </div>
                                        </div>
                                        <div class="ltn__car-dealer-form-item col-lg-4 col-md-6">
                                            <div class="input-group date">
                                                <input class="form-control @error('tanggalpengembalian') is-invalid @enderror" id="datepicker-end" type="text" name="tanggalpengembalian" placeholder="Tanggal Pengembalian" autocomplete="off" data-date-format="dd/mm/yyyy">
                                            </div>
                                        </div>  
                                        <div class="ltn__car-dealer-form-item ltn__custom-icon col-lg-4 col-md-6">
                                            <select class="form-control @error('type') is-invalid @enderror" name="type" placeholder="Mobil">
                                                <option value="" disabled selected>Mobil</option>
                                                <option>Avanza Lama</option>
                                                <option>Avanza Baru</option>
                                                <option>Inova Reborn</option>
                                                <option>Terios AT</option>
                                                <option>Hyundai H-1</option>
                                                <option>Fortuner VRZ</option>
                                            </select>
                                        </div>

                                        <!-- <div class="ltn__car-dealer-form-item col-lg-3 col-md-6">
                                            <div class="input-item input-item-date mb-0">
                                                <input type="date" name="date" placeholder="DATE">
                                            </div>
                                        </div>  -->
                                        <div class="car-price-filter-range col-lg-12">
                                            <div class="btn-wrapper text-center mt-0">
                                                <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Booking</button>
                                                <!-- <a href="shop-car-right-sidebar.html" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Inventory</a> -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- CAR DEALER FORM AREA END -->

    <!-- FOOTER AREA START (ltn__footer-2 ltn__footer-color-1) -->
    <footer id = "footer" class="ltn__footer-area ltn__footer-2 ltn__footer-color-1">
        <div class="footer-top-area  section-bg-2">
            <div class="container">
                <div class="row">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4273.512469444017!2d98.97380259573357!3d2.024513102901373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e6e8bb68902c3%3A0xe62c3e5496d04234!2sDoli%20Motor%20Workshop%20%26%20Rental%20Tarutung!5e0!3m2!1sid!2sid!4v1677573583950!5m2!1sid!2sid" width="100%" height="85%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="col-xl-4 col-md-5">
                        <div class="footer-widget ltn__footer-timeline-widget ltn__footer-timeline-widget-1 bg-image bg-overlay-theme-black-90" data-bs-bg="img/bg/4.jpg">
                            <h6 class="ltn__secondary-color text-uppercase">// Jadwal</h6>
                            <h4 class="footer-title">Jam Buka Bengkel</h4>
                            <ul>
                                <li>Senin <span>07:30AM - 18:00PM</span></li>
                                <li>Selasa <span>07:30AM - 18:00PM</span></li>
                                <li>Rabu <span>07:30AM - 18:00PM</span></li>
                                <li>Kamis <span>07:30AM - 18:00PM</span></li>
                                <li>Jumat <span>07:30AM - 18:00PM</span></li>
                                <li>Sabtu <span>07:30AM - 18:00PM</span></li>
                                <li>Minggu <span>Tutup</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-7">
                        <div class="footer-widget footer-menu-widget footer-menu-widget-2-column clearfix">
                            <h4 class="footer-title">Auto Service</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li>General Repair</li>
                                    <li>Ganti Oli</li>
                                    <li>Alarm & Central Locks</li>
                                    <li>Immobilizer Programming</li>
                                    <li>Scanning ECU</li>
                                    <li>Air Conditioning (AC)</li>
                                </ul>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li>Service Rem</li>
                                    <li>AR/MT Transmission</li>
                                    <li>GPS Tracker</li>
                                    <li>Tune Up</li>
                                    <li>ABS & Brake System</li>
                                    <li>Electrical Repair</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget footer-blog-widget">
                            <h4 class="footer-title">Rental</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li>Toyota Grand New Avanza</li>
                                    <li>Toyota Kijang Innova Reborn</li>
                                    <li>Toyota Fortuner VRZ</li>
                                    <li>Daihatsuz Grand New Xenia</li>
                                    <li>VW Safari Wedding Car</li>
                                    <li>Hyundai H-1</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="index.html"><img src="images/tablogo.png" alt="Logo"></a>
                            </div>
                            <div class="get-support ltn__copyright-design clearfix">
                                <div class="get-support-info">
                                    <h6>Copyright & Design By</h6>
                                    <h4>Group 2 PA II - <span class="current-year">2023</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->

</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    {{-- <script src="app-assets/js/plugins.js"></script> --}}
    <!-- Main JS -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script src="app-assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0-rc.2/jquery-ui.min.js"></script>
    <script>
        @if(session()->has('success'))
        toastr.options = {
            "closeButton": true
        }
        toastr.success("{{ session()->get('success') }}")
        @endif
        
        $(document).ready(function(){
            var today = new Date();
            var minDate = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 1);
            var minDateEnd = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 2);
			$("#datepicker-start").datepicker({
                minDate: minDate,
                dateFormat: 'yy-mm-dd'
            });
			$("#datepicker-end").datepicker({
                minDate: minDateEnd,
                dateFormat: 'yy-mm-dd'
            });
		});
    </script>
  
</body>
</html>

