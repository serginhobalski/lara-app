<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- META ============================================= -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="SEEC-PA" />

    <!-- OG -->
    <meta property="og:title" content="SEEC-PA" />
    <meta property="og:description" content="SEEC-PA" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no" />

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="<?php echo asset('assets/images/favicon.ico') ?>" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo asset('assets/images/favicon.ico') ?>" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>SEEC-PA | <?php echo $titulo; ?></title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/assets.css') ?>" />

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/typography.css') ?>" />

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/shortcodes/shortcodes.css') ?>" />

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/style.css') ?>" />
    <link class="skin" rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/color/color-1.css') ?>" />

    <!-- REVOLUTION SLIDER CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/vendors/revolution/css/layers.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/vendors/revolution/css/settings.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/vendors/revolution/css/navigation.css') ?>" />
    <!-- REVOLUTION SLIDER END -->

    <!-- Custom Styles -->
    @yield('estilo')

</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        <!-- Header Top ==== -->
        <header class="header rs-nav <?php echo ($titulo === 'Principal' ? 'header-transparent' : '') ?>">
            <div class="top-bar">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="topbar-left">
                            <ul>
                                <li>
                                    <a href="mailto:ead@seecpa.com.br"><i class="fa fa-envelope-o"></i>ead@seecpa.com.br</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-right">
                            <ul>
                                <li><a class="btn" href="/login">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-header navbar-expand-lg">
                <div class="menu-bar clearfix">
                    <div class="container clearfix">
                        <!-- Header Logo ==== -->
                        <div class="menu-logo">
                            <?php if($titulo === 'Principal'): ?>
                            <a href="/"><img src="<?php echo asset('assets/images/logo-white.png') ?>" alt="" /></a>
                            <?php else: ?>
                            <a href="/"><img src="<?php echo asset('assets/images/logo-dark.png') ?>" alt="" /></a>
                            <?php endif; ?>
                        </div>
                        <!-- Mobile Nav Button ==== -->
                        <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- Author Nav ==== -->
                        <div class="secondary-menu">
                            <div class="secondary-inner">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/seecpa" target="_blank" class="btn-link"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/seec.pa/" class="btn-link"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCevn699ArQJQTxl08Nm5NTQ" class="btn-link"><i class="fa fa-youtube-play"></i></a>
                                    </li>
                                    <!-- Search Button ==== -->
                                    <li class="search-btn">
                                        <button id="quik-search-btn" type="button" class="btn-link">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Search Box ==== -->
                        <div class="nav-search-bar">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control" placeholder="Pesquisar" />
                                <span><i class="ti-search"></i></span>
                            </form>
                            <span id="search-remove"><i class="ti-close"></i></span>
                        </div>
                        <!-- Navigation Menu ==== -->
                        <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                            <div class="menu-logo">
                                <a href="/"><img src="<?php echo asset('') ?>assets/images/logo.png" alt="" /></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="javascript:;">Páginas <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="/seec">A SEEC-PA</a></li>
                                        <li><a href="/contato">Contato</a></li>
                                    </ul>
                                </li>
                                <li class="add-mega-menu">
                                    <a href="javascript:;">Cursos <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu add-menu">
                                        <li class="add-menu-left">
                                            <h5 class="menu-adv-title">Cursos EAD</h5>
                                            <ul>
                                                <li><a href="/itq">ITQ </a></li>
                                                <li>
                                                    <a href="/postulantes">Postulantes</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="add-menu-right">
                                            <img src="<?php echo asset('assets/images/adv/adv.jpg') ?>" alt="" />
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-dashboard">
                                    <a href="javascript:;">Dashboard <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="admin//">Dashboard</a></li>
                                        <li><a href="admin/add-listing.html">Add Listing</a></li>
                                        <li><a href="admin/bookmark.html">Bookmark</a></li>
                                        <li><a href="admin/courses.html">Courses</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="nav-social-link">
                                <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                <a href="javascript:;"><i class="fa fa-instagram"></i></a>
                                <a href="javascript:;"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                        <!-- Navigation Menu END ==== -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Top END ==== -->
        <!-- Content -->

        @yield('conteudo')

        <!-- Content END-->
        <!-- Footer ==== -->
        <footer>
            <div class="footer-top">
                <div class="pt-exebar">
                    <div class="container">
                        <div class="d-flex align-items-stretch">
                            <div class="pt-logo mr-auto">
                            <a href="/"><img src="<?php echo asset('assets/images/logo-white.png') ?>" alt="" /></a>
                            </div>
                            <div class="pt-social-link">
                                <ul class="list-inline m-a0">
                                    <li>
                                        <a href="#" class="btn-link"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-link"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-link"><i class="fa fa-youtube-play"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pt-btn-join">
                                <a href="/login" class="btn">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-5 col-md-7 col-sm-12">
                            <div class="row">
                                <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                    <div class="widget footer_widget">
                                        <h5 class="footer-title">SEEC|PA</h5>
                                        <ul>
                                            <li><a href="/seec">Sobre</a></li>
                                            <li><a href="/eventos">Eventos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                    <div class="widget footer_widget">
                                        <h5 class="footer-title">Contato</h5>
                                        <ul>
                                            <li>
                                                <a href="mailto:ead@seecpa.com.br">ead@seecpa.com.br</a>
                                            </li>
                                            <li><a href="tel:91999812198">(91) 99981-2198</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                    <div class="widget footer_widget">
                                        <h5 class="footer-title">Cursos</h5>
                                        <ul>
                                            <li><a href="/itq">ITQ EAD</a></li>
                                            <li><a href="/postulantes">Postulantes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                            <div class="widget widget_gallery gallery-grid-4">
                                <h5 class="footer-title">Galeria</h5>
                                <ul class="magnific-image">
                                    <li>
                                        <a href="<?php echo asset('') ?>assets/images/gallery/pic1.jpg" class="magnific-anchor"><img src="<?php echo asset('') ?>assets/images/gallery/pic1.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo asset('') ?>assets/images/gallery/pic2.jpg" class="magnific-anchor"><img src="<?php echo asset('') ?>assets/images/gallery/pic2.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo asset('') ?>assets/images/gallery/pic3.jpg" class="magnific-anchor"><img src="<?php echo asset('') ?>assets/images/gallery/pic3.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo asset('') ?>assets/images/gallery/pic4.jpg" class="magnific-anchor"><img src="<?php echo asset('') ?>assets/images/gallery/pic4.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo asset('') ?>assets/images/gallery/pic5.jpg" class="magnific-anchor"><img src="<?php echo asset('') ?>assets/images/gallery/pic5.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo asset('') ?>assets/images/gallery/pic6.jpg" class="magnific-anchor"><img src="<?php echo asset('') ?>assets/images/gallery/pic6.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo asset('') ?>assets/images/gallery/pic7.jpg" class="magnific-anchor"><img src="<?php echo asset('') ?>assets/images/gallery/pic7.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo asset('') ?>assets/images/gallery/pic8.jpg" class="magnific-anchor"><img src="<?php echo asset('') ?>assets/images/gallery/pic8.jpg" alt="" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                            <a target="_blank" href=""><?php echo date('Y'); ?> &copy; SEEC|PA</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer END ==== -->
        <button class="back-to-top fa fa-chevron-up"></button>
    </div>

    <!-- External JavaScripts -->
    <script src="<?php echo asset('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/magnific-popup/magnific-popup.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/counter/waypoints-min.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/counter/counterup.min.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/imagesloaded/imagesloaded.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/masonry/masonry.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/masonry/filter.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/owl-carousel/owl.carousel.js') ?>"></script>
    <script src="<?php echo asset('assets/js/functions.js') ?>"></script>
    <script src="<?php echo asset('assets/js/contact.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/switcher/switcher.js') ?>"></script>
    <!-- Revolution JavaScripts Files -->
    <script src="<?php echo asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js') ?>"></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="<?php echo asset('assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') ?>"></script>
    <script src="<?php echo asset('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js') ?>"></script>
    <script>
        jQuery(document).ready(function() {
            var ttrevapi;
            var tpj = jQuery;
            if (tpj("#rev_slider_486_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_486_1");
            } else {
                ttrevapi = tpj("#rev_slider_486_1")
                    .show()
                    .revolution({
                        sliderType: "standard",
                        jsFileLocation: "<?php echo asset('') ?>assets/vendors/revolution/js/",
                        sliderLayout: "fullwidth",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "on",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "on",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false,
                            },
                            arrows: {
                                style: "uranus",
                                enable: true,
                                hide_onmobile: false,
                                hide_onleave: false,
                                tmp: "",
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 10,
                                    v_offset: 0,
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 10,
                                    v_offset: 0,
                                },
                            },
                        },
                        viewPort: {
                            enable: true,
                            outof: "pause",
                            visible_area: "80%",
                            presize: false,
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [768, 600, 600, 600],
                        lazyType: "none",
                        parallax: {
                            type: "scroll",
                            origo: "enterpoint",
                            speed: 400,
                            levels: [
                                5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55,
                            ],
                            type: "scroll",
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        },
                    });
            }
        });
    </script>
    <!-- Custom Scripts -->

    @yield('script')
</body>

</html>
