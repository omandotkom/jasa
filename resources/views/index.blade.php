<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cari Jasa</title>
    @include('meta::manager', [
    'title' => 'Cari Jasa',
    'description' => 'Cari jasa yang Anda butuhkan dengan mudah dan lengkap',
    'image' => '',
    'keywords' => 'Cari Jasa, Temukan Jasa, Situs Cari Jasa, Daftar Jasa, Cari Jasa Mudah, Cari Jasa Lengkap',
    ])
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('directing/directing/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('directing/directing/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('directing/directing/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('directing/directing/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('directing/directing/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('directing/directing/css/barfiller.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('directing/directing/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('directing/directing/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('directing/directing/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('directing/directing/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('directing/directing/css/style.css')}}" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{url('directing/directing/js/jquery-3.3.1.min.js')}}"></script>
</head>

<body>
    <script>
        $(document).ready(function() {
            $("#provinsi").change(function() {
                var GetKotaUrl = "{{route('carikota')}}".concat("/").concat($(this).val());
                $("#kota").prop("disable",true);
                axios.get(GetKotaUrl)
                    .then(function(response) {
                        // handle success
                        $("#kota").empty();
                        $.each(response.data, function(name,data){
                            $('#kota').append('<option value="foo" selected="selected">Foo</option>');
                            //console.log(data.name);
                        });
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error);
                    })
                    .then(function() {
                        // always executed
                        $("#kota").prop("disable",false);
                    });

            });
        });
    </script>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.html">Rumah</a></li>
                            </ul>
                        </nav>
                        <div class="header__menu__right">
                            <a href="#" class="primary-btn"><i class="fa fa-plus"></i>Daftarkan Jasa</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero set-bg" data-setbg="{{url('directing/directing/img/hero/hero-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <div class="section-title">
                            <h2>Cari Jasa Yang Anda Butuhkan, Gampang!</h2>
                            <p>400.000 orang sudah bergabung dengan CariJasa</p>
                        </div>
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="Jasa Cuci Sepatu">
                                <div class="select__option">
                                    <select id="provinsi" style="display: none;">
                                        <option data-display="Pilih Provinsi">Pilih Provinsi</option>
                                        @foreach($provinsi as $p)
                                        <option value="{{$p->id}}" class="option">{{$p->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="select__option">
                                    <select id="kota" style="display: none;">
                                        <option data-display="Pilih Kota">Pilih Kota</option>
                                    </select>

                                </div>
                                <button type="submit"><i class="fa fa-search"></i> Cari Sekarang</button>
                            </form>
                        </div>
                        <ul class="hero__categories__tags">
                            <li><a href="#"><img src="{{url('directing/directing/img/hero/cat-1.png')}}" alt=""> Restaurent</a></li>
                            <li><a href="#"><img src="{{url('directing/directing/img/hero/cat-2.png')}}" alt=""> Food & Drink</a></li>
                            <li><a href="#"><img src="{{url('directing/directing/img/hero/cat-3.png')}}" alt=""> Shopping</a></li>
                            <li><a href="#"><img src="{{url('directing/directing/img/hero/cat-4.png')}}" alt=""> Beauty</a></li>
                            <li><a href="#"><img src="{{url('directing/directing/img/hero/cat-5.png')}}" alt=""> Hotels</a></li>
                            <li><a href="#"><img src="{{url('directing/directing/img/hero/cat-6.png')}}" alt=""> All Categories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Section Begin -->
    <section class="work spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Cari Jasa</h2>
                        <p>Cari Jasa membantu Anda mencari jasa yang Anda butuhkan semudah mungkin, <strong>cukup cari -> pilih -> hubungi WhatsApp</strong></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="work__item">
                        <div class="work__item__number">1.</div>
                        <img src="{{url('directing/directing/img/work/work-1.png')}}" alt="">
                        <h5>Cari Jasa</h5>
                        <p>Cari Jasa sesuai yang Anda butuhkan, saat ini kami sedang membuka pendaftaran sebesar-besarnya demi memenuhi database.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="work__item">
                        <div class="work__item__number">02.</div>
                        <img src="{{url('directing/directing/img/work/work-2.png')}}" alt="">
                        <h5>Tentukan Kota</h5>
                        <p>Cari jasa yang Anda butuhkan disekitar Anda, supaya dekat dan mudah :)</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="work__item">
                        <div class="work__item__number">03.</div>
                        <img src="{{url('directing/directing/img/work/work-3.png')}}" alt="">
                        <h5>Hubungi WhatsApp</h5>
                        <p>Tidak perlu ribet daftar ini itu, cukup cari lalu hubungi lewat WhatsApp atau nomor telfon.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Membantu pekerja jasa, mempermudah pencari jasa.</p>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <span>Telpon:</span>
                                <p>0813 9355 8430</p>
                            </li>
                            <li>
                                <span>Email:</span>
                                <p>omandotkom@gmail.com</p>
                            </li>
                            <li>
                                <span>Connect Us:</span>
                                <div class="footer__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-skype"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__widget">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">How it work</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="footer__copyright__links">
                            <a href="#">Terms</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Cookie Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->

    <script src="{{url('directing/directing/js/bootstrap.min.js')}}"></script>
    <script src="{{url('directing/directing/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('directing/directing/js/jquery-ui.min.js')}}"></script>
    <script src="{{url('directing/directing/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{url('directing/directing/js/jquery.barfiller.js')}}"></script>
    <script src="{{url('directing/directing/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('directing/directing/js/jquery.slicknav.js')}}"></script>
    <script src="{{url('directing/directing/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('directing/directing/js/main.js')}}"></script>
</body>

</html>