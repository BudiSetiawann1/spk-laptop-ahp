
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aplikasi SPK Metode AHP</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- prism css -->
    <link rel="stylesheet" href="assets/css/plugins/prism-coy.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    

</head>
<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar theme-horizontal menu-light brand-blue">
        <div class="navbar-wrapper container">
            <div class="navbar-content sidenav-horizontal" id="layout-sidenav">
                <ul class="nav pcoded-inner-navbar sidenav-inner">
                    <li class="nav-item pcoded-menu-caption">
                    	<label>Navigation</label>
                    </li>
                    <li class="nav-item">
                        <a href="./" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="rekomendasi.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Rekomendasi</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="perbandingan.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-airplay"></i></span><span class="pcoded-mtext">Perbandingan</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="alternatif.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-airplay"></i></span><span class="pcoded-mtext">Alternatif</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
        <div class="container">
            <div class="m-header">
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
                <a href="#!" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="assets/ahp.png" alt="" class="logo">
                    <img src="assets/logo-icon.png" alt="" class="logo-thumb">
                </a>
                <a href="#!" class="mob-toggler">
                    <i class="feather icon-more-vertical"></i>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a href="#!" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">

                    <li>
                        <div class="dropdown drp-user">
                            <a href="admin/login.php" class="btn btn-info">
                             LOGIN
                         </a>

                     </div>
                 </li>
             </ul>
         </div>
     </div>
 </header>
 <!-- [ Header ] end -->
 <!-- [ Main Content ] start -->
 <div class="pcoded-main-container">
    <div class="pcoded-wrapper container">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Dashboard</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Page Layout</a></li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ Main Content ] start -->
                        <div class="row">

                            <!-- [ horizontal-layout ] start -->
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <p>Selamat Datang di Aplikasi Sistem Pendukung Keputusan Menggunakan Metode Analytical Hierarchy Process (AHP)</p>
                                        <p>Studi kasus yang digunakan yaitu menentukan laptop terbaik</p>
                                        <p>Pada Prodi Sistem Informasi </p>
                                        <p>Universitas Mercu Buana Yogyakarta</p>
                                        <div class="card-header-right">
                                            <div class="btn-group card-option">


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- [ horizontal-layout ] end -->
                        </div>
                        <!-- [ Main Content ] end -->
                        <!-- [ Main Content ] start -->

                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->

<!-- Warning Section start -->
<!-- Older IE warning message -->
        <!--[if lt IE 11]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade
                   <br/>to any of the following web browsers to access this website.
                </p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="assets/images/browser/chrome.png" alt="Chrome">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="assets/images/browser/firefox.png" alt="Firefox">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="assets/images/browser/opera.png" alt="Opera">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="assets/images/browser/safari.png" alt="Safari">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="assets/images/browser/ie.png" alt="">
                                <div>IE (11 & above)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->
        <!-- Warning Section Ends -->

        <!-- Required Js -->
        <script src="assets/js/vendor-all.min.js"></script>
        <script src="assets/js/plugins/bootstrap.min.js"></script>
        <script src="assets/js/pcoded.min.js"></script>


        <!-- prism Js -->
        <script src="assets/js/plugins/prism.js"></script>





        <script src="assets/js/horizontal-menu.js"></script>
        <script>
            (function() {
                if ($('#layout-sidenav').hasClass('sidenav-horizontal') || window.layoutHelpers.isSmallScreen()) {
                    return;
                }
                try {
                    window.layoutHelpers._getSetting("Rtl")
                    window.layoutHelpers.setCollapsed(
                        localStorage.getItem('layoutCollapsed') === 'true',
                        false
                        );
                } catch (e) {}
            })();
            $(function() {
                $('#layout-sidenav').each(function() {
                    new SideNav(this, {
                        orientation: $(this).hasClass('sidenav-horizontal') ? 'horizontal' : 'vertical'
                    });
                });
                $('body').on('click', '.layout-sidenav-toggle', function(e) {
                    e.preventDefault();
                    window.layoutHelpers.toggleCollapsed();
                    if (!window.layoutHelpers.isSmallScreen()) {
                        try {
                            localStorage.setItem('layoutCollapsed', String(window.layoutHelpers.isCollapsed()));
                        } catch (e) {}
                    }
                });
            });
            $(document).ready(function() {
                $("#pcoded").pcodedmenu({
                    themelayout: 'horizontal',
                    MenuTrigger: 'hover',
                    SubMenuTrigger: 'hover',
                });
            });
        </script>

        <script src="assets/js/analytics.js"></script>

    </body>

    </html>
