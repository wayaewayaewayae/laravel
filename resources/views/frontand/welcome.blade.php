<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Covido</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="asfrontand/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="asfrontand/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="asfrontand/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="asfrontand/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="asfrontand/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body id="page-top">
    <?php
    $datapositif = file_get_contents('https://api.kawalcorona.com/positif');
    $positif = json_decode($datapositif, true);
    $datasembuh = file_get_contents('https://api.kawalcorona.com/sembuh');
    $sembuh = json_decode($datasembuh, true);
    $datameninggal = file_get_contents('https://api.kawalcorona.com/meninggal');
    $meninggal = json_decode($datameninggal, true);
    $dataid = file_get_contents('https://api.kawalcorona.com/indonesia');
    $id = json_decode($dataid, true);
    $dataidprovinsi = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
    $idprovinsi = json_decode($dataidprovinsi, true);
    $datadunia = file_get_contents('https://api.kawalcorona.com/');
    $dunia = json_decode($datadunia, true);
    ?>

    <body class="main-layout">
        <!-- loader  -->
        <div class="loader_bg">
            <div class="loader"><img src="asfrontand/images/loading.gif" alt="#" /></div>
        </div>
        <!-- end loader -->
        <!-- top -->
        <!-- header -->
        <header class="header-area">
            <div class="left">
                <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
            </div>
            <div class="right">
                <a href="Javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a>
            </div>
            <div class="container">
                <div class="row d_flex">
                    <div class="col-sm-3 logo_sm">
                        <div class="logo">
                            <a href="welcome"></a>
                        </div>
                    </div>
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                        <div class="navbar-area">
                            <nav class="site-navbar">
                                <ul>
                                    <li><a class="active" href="/welcome">Home</a></li>
                                    <li><a href="#data">Data</a></li>
                                    <li><a href="#gejala">Gejala Terinfeksi</a></li>
                                    <li><a href="#welcome" class="logo_midle"></a></li>
                                    <li><a href="#pencegahan">Pencegahan</a></li>
                                    <li><a href="#tentang">Tentang</a></li>
                                    <li><a href="#contact">Contact </a></li>
                                </ul>
                                <button class="nav-toggler">
                                    <span></span>
                                </button>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->
        <div class="full_bg">
            <!-- header inner -->
            <div class="section">
                <!-- carousel code -->
                <div id="" class="carousel slide slider_main">
                    <div class="carousel-inner">
                        <!-- first slide -->
                        <div class="carousel-item active">
                            <div class="carousel-caption cuplle">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="photog">
                                                <h1>Tracking<br>Covid</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- third slide -->
                        <div class="carousel-item">
                            <div class="carousel-caption cuplle">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="photog">
                                                <h1>Care early<br>Coronavirus</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- controls -->
                    <a class="carousel-control-prev" href="" role="button" data-slide="prev">
                        <i class="" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="" role="button" data-slide="next">
                        <i class="" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end banner -->

        <!-- Data Dunia -->
        <select name="data" id="data"></select>
        <div class="about">
            <div class="container_width">
                <h1 class="page-section-heading text-center text-uppercase text-secondary mb-0">Data Virus
                    Corona
                </h1>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">

                                        <h4 class="card-title text-uppercase text-muted mb-0">Total Positif</h4>
                                        <h5>
                                            <p><?php echo $positif['value']; ?>
                                            </p>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title text-uppercase text-muted mb-0">Total Sembuh</h4>
                                        <h5>
                                            <p><?php echo $sembuh['value']; ?>
                                            </p>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title text-uppercase text-muted mb-0">Total Meninggal
                                        </h4>
                                        <h5>
                                            <p><?php echo $meninggal['value']; ?>
                                            </p>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title text-uppercase text-muted mb-0">indonesia</h4>
                                        <h5>
                                            <p class="mb-0 number-font"><?php echo $id[0]['positif']; ?>&nbsp; POSITIF,<?php echo $id[0]['sembuh'];
                                                ?>SEMBUH, <?php echo $id[0]['meninggal'];
                                                ?>MENINGGAL</p>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </select>
        </div>
        </div>
        </div>
        </div>

        <br>
        <br>
        <!-- end data dunia -->
        <!-- data kasus local -->
        {{-- TABLE KASUS LOCAL --}}
        <div class="site-section stats">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-lg-7 text-center mx-auto">
                        <h2 class="section-heading">Data Kasus Indonesia Berdasarkan Provinsi</h2>
                    </div>

                    <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">

                        <table class="table table-bordered table-string mb-0" with="100%">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <center>No</center>
                                    </th>
                                    <th scope="col">
                                        <center>Provinsi</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Positif</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Meninggal</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Sembuh</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp

                                @foreach ($tampil as $data)
                                    <tr>
                                        <th scope="row">
                                            <center>{{ $no++ }}</center>
                                        <td>
                                            <center>{{ $data->nama_provinsi }}</center>
                                        </td>
                                        <td>
                                            <center>{{ number_format($data->Positif) }}</center>
                                        </td>
                                        <td>
                                            <center>{{ number_format($data->Meninggal) }}</center>
                                        </td>
                                        <td>
                                            <center>{{ number_format($data->Sembuh) }}</center>
                                        </td>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end data kasus local -->
                <br>
                <!-- data kasus global -->
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-header">
                                <h5>Kasus Coronavirus Global</h5>
                            </div>
                            <div class="card-body">
                                <div style="height:600px;overflow:auto;margin-right:15px;">
                                    <table class="table table-striped" fixed-header>
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Negara</th>
                                                <th scope="col">Positif</th>
                                                <th scope="col">Sembuh</th>
                                                <th scope="col">Meninggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            <?php for ($i = 0; $i <= 191; $i++) { ?> <tr>
                                                <td> <?php echo $i + 1; ?></td>
                                                <td> <?php echo
                                                    $dunia[$i]['attributes']['Country_Region']; ?></td>
                                                <td> <?php echo
                                                    number_format($dunia[$i]['attributes']['Confirmed']); ?>
                                                </td>
                                                <td><?php echo
                                                    number_format($dunia[$i]['attributes']['Recovered']); ?>
                                                </td>
                                                <td><?php echo
                                                    number_format($dunia[$i]['attributes']['Deaths']); ?>
                                                </td>
                                                </tr>
                                                <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <!-- end data kasus global -->
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <!-- gejala -->
            <section name="gejala" id="gejala">
                <div class="coronata">
                    <div class="container">
                        <div class="row d_flex grid">
                            <div class="col-md-7">
                                <div class="">
                                    <figure><img src="asfrontand/images/corona.png" alt="#" /></figure>
                                </div>
                            </div>
                            <div class="col-md-5 oder1">
                                <div class="titlepage text_align_left">
                                    <h2><b>Berikut Gejala Virus Covid-19</b></h2>
                                    <p>Masing-masing orang memiliki respons yang berbeda terhadap COVID-19. Sebagian
                                        besar orang yang terpapar virus ini akan mengalami gejala ringan hingga sedang,
                                        dan akan pulih tanpa perlu dirawat di rumah sakit.
                                        <br>
                                        <b>Gejala yang paling umum:</b>
                                        <br>
                                        <li>Demam</li>
                                        <br>
                                        <li>Batuk kering</li>
                                        <br>
                                        <li>Batuk kering</li>
                                        <br>
                                        <b>Gejala yang sedikit tidak umum:</b>
                                        <br>
                                        <li>Batuk kering</li>
                                        <br>
                                        <li>Batuk kering</li>
                                        <br>
                                        <li>Batuk kering</li>
                                        <br>
                                        <li>Batuk kering</li>
                                        <br>
                                        <li>Batuk kering</li>
                                        <br>
                                        <li>Batuk kering</li>
                                        <br>
                                        <li>Batuk kering</li>
                                        <br>
                                        <b>Gejala serius:</b>
                                        <br>
                                        <li>Batuk kering</li>
                                        <br>
                                        <li>Batuk kering</li>
                                        <br>
                                        <li>Batuk kering</li>
                                        <br>
                                        Segera cari bantuan medis jika Anda mengalami gejala serius. Selalu hubungi
                                        dokter atau fasilitas kesehatan yang ingin Anda tuju sebelum mengunjunginya.
                                        Orang dengan gejala ringan yang dinyatakan sehat harus melakukan perawatan
                                        mandiri di rumah.
                                        Rata-rata gejala akan muncul 5–6 hari setelah seseorang pertama kali terinfeksi
                                        virus ini, tetapi bisa juga 14 hari setelah terinfeksi.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end gejala -->
            <br>
            <br>
            <!-- pencegahan -->
            <section id="pencegahan" name="pencegahan">
                <div class="col-lg-5 ml-auto">
                    <h2 class="section-heading mb-4">Bagaimana Mencegah Corona virus?</h2>
                    <p>Gunakan masker.Selamatkan nyawa.</p>
                    <p class="mb-4"></p>

                    <ul class="list-check list-unstyled mb-5">
                        <li>Cuci tangan Anda secara rutin. Gunakan sabun dan air, atau cairan pembersih tangan berbahan
                            alkohol.</li>
                        <li>Jika demam, batuk, atau kesulitan bernapas, segera cari bantuan medis.</li>
                        <li>Kenakan masker jika pembatasan fisik tidak dimungkinkan.</li>
                    </ul>
                </div>
        </div>
        </div>
        </div>
        </section>
        <!-- end pencegahan -->
    @endsection
    <!-- end protect -->
    <!-- Tentang -->
    <section id="tentang" name="tentang">
        <div class="col-lg-5 ml-auto">
            <h2 class="section-heading mb-4">Apa itu Corona virus?</h2>
            <p>corona virus adalah penyakit yang berbahaya dan bisa mematikan</p>
        </div>
    </section>
    <!-- end Tentang -->
    <!--  footer -->
    <section name="contact" id="contact">
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="hedingh3 text_align_left">
                                <h3>Resources</h3>
                                <ul class="menu_footer">
                                    <li><a href="#welcome">Home</a>
                                    <li>
                                    <li><a href="javascript:void(0)">What we do</a>
                                    <li>
                                    <li> <a href="javascript:void(0)">Media</a>
                                    <li>
                                    <li> <a href="javascript:void(0)">Travel Advice</a>
                                    <li>
                                    <li><a href="javascript:void(0)">Protection</a>
                                    <li>
                                    <li><a href="javascript:void(0)">Care</a>
                                    <li>
                                </ul>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="hedingh3 text_align_left">
                                <h3>About</h3>
                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                    their
                                    default model text, and a search for 'lorem ipsum' will uncover many web
                                    sites still
                                    in
                                    their infancy. Various</p>
                            </div>
                        </div>



                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="hedingh3  text_align_left">
                                <h3>Contact Us</h3>
                                <ul class="top_infomation">
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        Making this the first true
                                    </li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>
                                        Call : +01 1234567890
                                    </li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                        <a href="Javascript:void(0)">Email : demo@gmail.com</a>
                                    </li>
                                </ul>


                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="hedingh3 text_align_left">
                                <h3>countrys</h3>
                                <div class="map">
                                    <img src="asfrontand/images/map.png" alt="#" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <p>© 2020 All Rights Reserved. Design by <a href="https://html.design/"> Free
                                        html
                                        Templates</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- Javascript files-->
        <script src="asfrontand/js/jquery.min.js"></script>
        <script src="asfrontand/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
        <script src="asfrontand/js/owl.carousel.min.js"></script>
        <script src="asfrontand/js/custom.js"></script>

    </section>
</body>

</html>
