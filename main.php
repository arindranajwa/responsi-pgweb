<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Working Space dan Study</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-sA+oRMKqJdH4J+7EJKcRA/5K5mmtIfiD4bLw9rUm6P4=" crossorigin="" />

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9e3ed;
            color: #ffffff;
            background-image: url('Foto/bg12.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;

            margin: 50px;
            padding: 0px;
            height: 100%;
        }

        /* Navbar */
        nav {
            background-image:
                linear-gradient(rgba(224, 238, 844, 0.3), rgba(203, 5859, 1110, 0.5)),
                /* Lapisan warna transparan */
                url('Foto/bg11.jpg');
            /* Gambar latar belakang */
            background-size: cover;
            /* Mengatur ukuran gambar agar menutupi seluruh area */
            background-position: center;
            /* Mengatur posisi gambar di tengah */
            padding: 10px;
            /* Padding untuk navbar */
            color: #ffffff;
        }

        /* Reset */
        * {
            margin: 0;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        /* Header */
        .header {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(3, 0, 0, 0.5)),
                url('https://source.unsplash.com/1600x900/?workspace,study') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 70px 20px;
        }

        .header h1 {
            font-size: 3.5rem;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .header h4 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        /* Section */
        section {
            padding: 100px 100px;
        }

        /* ukuran tampilan web */
        .container {
            max-width: 1900px;
            margin: 0px;
        }

        /* Recommendation Section */
        .places {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .place h3 {
            margin-bottom: 10px;
            font-size: 1.5rem;
            color: #333;
        }

        .place p {
            color: #666;
        }

        .slide {
            text-align: center;
            height: 450px;
            padding-top: 20px;
            width: 100%;
        }

        /* Map Section */
        #map {
            height: 500px;
            width: 100%;
            border-radius: 8px;
            margin-top: 20px;
        }

        /* Footer */
        footer {
            background-image:
                linear-gradient(rgba(0, 0, 0, 0.5), rgba(3, 0, 0, 0.5)),
                /* Lapisan warna transparan */
                url('Foto/bg12.jpg');
            /* Gambar latar belakang */
            background-size: cover;
            /* Mengatur ukuran gambar agar menutupi seluruh area */
            background-position: center;
            /* Mengatur posisi gambar di tengah */
            padding: 10px;
            /* Padding untuk navbar */
            color: #ffffff;
        }
    </style>

</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Sragen Study Spot</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#rekomendasi">Rekomendasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Peta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#pembuat">Profile Pembuat</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <h1>Rekomendasi Cafe untuk Co-Working dan Study</h1>
            <p>Temukan Spot Nyaman untuk Bekerja dan Belajar di Sekitarmu</p>
        </div>
    </header>

    <!-- Gambar slide -->
    <div class="row">
        <div class="col-6 offset-3">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Foto/bg9.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Foto/Lataruma Coffee & Eatery.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Foto/Omah Mburi Resto & Coffee.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Foto/Lataruma Coffee & Eatery 2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Foto/Koneksi Coffee and Eatery1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Foto/Nyaman Coffe.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Foto/Reunikopi.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Foto/Pranadjaya coffee.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Foto/Omah Lawas Sragen.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Foto/Nittie Coffee.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Foto/Cold 'N Brew Sragen.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Foto/Ragil Corner.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Foto/Rules Coffee and Kitchen.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="text-center">
            <h2 id="deskripsi">Temukan tempat terbaik untuk menyelesaikan tugas dan menikmati suasana nyaman di Sragen!</h2>
        </div>
        <div class="card-body">
            <div class="text-justify">
                <Kafe-kafe>Sragen, yang dikenal sebagai kota kecil di Jawa Tengah, memiliki persebaran kafe yang cukup menarik, terutama di daerah pusat kota dan kawasan strategis lainnya. Sebagian besar kafe di Sragen terkonsentrasi di wilayah yang mudah diakses, seperti di sepanjang jalan utama dan dekat dengan fasilitas umum seperti alun-alun, pusat perbelanjaan, dan kantor pemerintahan.
                    Kafe-kafe di Sragen menawarkan beragam konsep, mulai dari modern minimalis, tradisional dengan nuansa Jawa, hingga tema-tema unik yang menyasar kalangan anak muda. Sebagian besar kafe menyediakan fasilitas internet nirkabel gratis, area parkir yang memadai, serta tempat duduk yang nyaman, sehingga menarik minat pelanggan untuk bersantai atau bekerja.</p>
                    <Adanya>Selain itu, terdapat beberapa kafe yang mulai berkembang di area pinggiran Sragen, khususnya di sekitar kawasan wisata. Lokasi-lokasi ini menarik wisatawan lokal maupun luar daerah yang ingin menikmati suasana alam sambil menikmati sajian khas kafe.
                        Adanya pertumbuhan kafe di Sragen mencerminkan meningkatnya gaya hidup masyarakat yang mencari tempat bersantai atau berkumpul, sekaligus menunjukkan peluang ekonomi yang potensial di sektor kuliner dan pariwisata. Persebaran ini menunjukkan pola yang cenderung terkonsentrasi di pusat aktivitas masyarakat, dengan perkembangan bertahap ke arah pinggiran yang lebih terpencil.</p>
                        <a href="#rekomendasi" class="btn btn-custom">Lihat Rekomendasi</a>
            </div>

            <!-- PETA -->
            <div class="card mt-4">
                <div class="text-center">
                    <h4 id="peta">Peta</h4>
                </div>

                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="1000" height="600" id="gmap_canvas"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d456710.05632025213!2d110.66139551159175!3d-7.387874282718057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a0450aeea6f0f%3A0x3027a76e352bae0!2sKabupaten%20Sragen%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1734221712906!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><a
                            href="https://textcaseconvert.com"></a><br><a
                            href="https://www.alarm-clock.net"></a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: center;
                                height: 0px;
                                padding-top: 20px;

                                padding-bottom: 590px;
                                width: 100%;
                            }
                        </style>
                        <a href="https://www.ongooglemaps.com">google maps embed iframe</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 560px;
                                width: 100%;

                            }
                        </style>

                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div id="rekomendasi" class="carousel slide" data-bs-ride="carousel">
                <h4>Rekomendasi Cafe</h4>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <img src="Foto/Koneksi Coffee and Eatery1.jpg" class="img-fluid" alt="Coto Makassar">
                                    <div class="card-body">
                                        <h5 class="card-title">Koneksi Coffee and Eatery</h5>
                                        <p class="description">Jl. Ks Tubun 56 Kuwungsari, RT.03/RW.20, Sragen Kulon</p>
                                        <div class="button-group">
                                            <a href="https://maps.app.goo.gl/4jmLMu6rp35SNG5b8" class="btn btn-custom">Lihat Detail</a>
                                            <a href="peta.php" class="btn btn-custom">Lokasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">

                                <div class="card">
                                    <img src="Foto/Lubby Cafe & Eatery1.jpg" class="img-fluid" alt="Coto Makassar">
                                    <div class="card-body">
                                        <h5 class="card-title">Lubby Cafe & Eatery</h5>
                                        <p class="description">Jl. Brigjen Katamso No.40, Kebayan 3, Ringin anom, Kec. Sragen</p>
                                        <div class="button-group">
                                            <a href="https://maps.app.goo.gl/XiRwZU5tCHJpmnDw7" class="btn btn-custom">Lihat Detail</a>
                                            <a href="peta.php" class="btn btn-custom">Lokasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <img src="Foto/Lataruma Coffee & Eatery.jpg" class="img-fluid" alt="Coto Makassar">
                                    <div class="card-body">
                                        <h5 class="card-title">Lataruma Coffee & Eatery</h5>
                                        <p class="description">Jl. Veteran No.44, Kroyo, Kec. Karangmalang</p>
                                        <div class="button-group">
                                            <a href="https://maps.app.goo.gl/buzQULkVcJt5kqn56" class="btn btn-custom">Lihat Detail</a>
                                            <a href="peta.php" class="btn btn-custom">Lokasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <img src="Foto/Nyaman Coffe.jpg" class="img-fluid" alt="Coto Makassar">
                                    <div class="card-body">
                                        <h5 class="card-title">Nyaman Coffee And Eatery</h5>
                                        <p class="description">Jl. Letjend Panjaitan, Kebayan 3, Sragen Kulon, Kec. Sragen</p>
                                        <div class="button-group">
                                            <a href="https://maps.app.goo.gl/GjcujCe6Kv7dvCXbA" class="btn btn-custom">Lihat Detail</a>
                                            <a href="peta.php" class="btn btn-custom">Lokasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <img src="Foto/Locomotive Resto & Cafe.jpg" class="img-fluid" alt="Coto Makassar">
                                    <div class="card-body">
                                        <h5 class="card-title">Locomotive Resto & Cafe</h5>
                                        <p class="description">Jl. WR Supratman No.85, Kutorejo, Sragen Tengah, Kec. Sragen</p>
                                        <div class="button-group">
                                            <a href="https://maps.app.goo.gl/vMPPyyxkgF86LJrZ9" class="btn btn-custom">Lihat Detail</a>
                                            <a href="peta.php" class="btn btn-custom">Lokasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <img src="Foto/ENTEN Coffee & Eatery.jpg" class="img-fluid" alt="Coto Makassar">
                                    <div class="card-body">
                                        <h5 class="card-title">ENTEN Coffee & Eatery</h5>
                                        <p class="description">Jl. Letjen Suprapto No.2, Kebayan 2, Sragen Kulon, Kec. Sragen</p>
                                        <div class="button-group">
                                            <a href="https://maps.app.goo.gl/Ksf5znHq64h37Ze37" class="btn btn-custom">Lihat Detail</a>
                                            <a href="peta.php" class="btn btn-custom">Lokasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <img src="Foto/Rules Coffee and Kitchen.jpg" class="img-fluid" alt="Coto Makassar">
                                    <div class="card-body">
                                        <h5 class="card-title">Rules Coffee and Kitchen</h5>
                                        <p class="description">Jl. Urip Sumoharjo Ringinanom No.97, RT.4/RW.17, Kebayan 3, Sragen Kulon, Kec. Sragen</p>
                                        <div class="button-group">
                                            <a href="https://maps.app.goo.gl/k3xCZYcBvqaVEL8X7" class="btn btn-custom">Lihat Detail</a>
                                            <a href="peta.php" class="btn btn-custom">Lokasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <img src="Foto/Nittie Coffee.jpg" class="img-fluid" alt="Coto Makassar">
                                    <div class="card-body">
                                        <h5 class="card-title">Nittie Coffee</h5>
                                        <p class="description">Jl. Imam Bonjol No.RT02, RW.12, Kebayan 1, Sragen Kulon, Kec. Sragen</p>
                                        <div class="button-group">
                                            <a href="https://maps.app.goo.gl/5zAwqa6d5UDai5MN6" class="btn btn-custom">Lihat Detail</a>
                                            <a href="peta.php" class="btn btn-custom">Lokasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <img src="Foto/Cold 'N Brew Sragen.jpg" class="img-fluid" alt="Coto Makassar">
                                    <div class="card-body">
                                        <h5 class="card-title">Cold 'N Brew Sragen</h5>
                                        <p class="description">Jl. Sukowati No.455, Dusun Kebayanan Widodo 2, Nglorog, Kec. Sragen</p>
                                        <div class="button-group">
                                            <a href="https://maps.app.goo.gl/HPjkFxyD78Cf6ziMA" class="btn btn-custom">Lihat Detail</a>
                                            <a href="peta.php" class="btn btn-custom">Lokasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <img src="Foto/Omah Lawas Sragen.jpg" class="img-fluid" alt="Coto Makassar">
                                    <div class="card-body">
                                        <h5 class="card-title">Omah Lawas Sragen</h5>
                                        <p class="description">Kebayan 5, Sragen Kulon, Kec. Sragen</p>
                                        <div class="button-group">
                                            <a href="https://maps.app.goo.gl/UmmTka524UF7wc2y8" class="btn btn-custom">Lihat Detail</a>
                                            <a href="peta.php" class="btn btn-custom">Lokasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <img src="Foto/Rules Coffee and Kitchen.jpg" class="img-fluid" alt="Coto Makassar">
                                    <div class="card-body">
                                        <h5 class="card-title">Rules Coffee and Kitchen</h5>
                                        <p class="description">Jl. Urip Sumoharjo Ringinanom No.97, RT.4/RW.17, Kebayan 3, Sragen Kulon, Kec. Sragen</p>
                                        <div class="button-group">
                                            <a href="https://maps.app.goo.gl/k3xCZYcBvqaVEL8X7" class="btn btn-custom">Lihat Detail</a>
                                            <a href="peta.php" class="btn btn-custom">Lokasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <img src="Foto/Omah Mburi Resto & Coffee.jpg" class="img-fluid" alt="Coto Makassar">
                                    <div class="card-body">
                                        <h5 class="card-title">Omah Mburi Resto & Coffee</h5>
                                        <p class="description">Jl. Letjen Suprapto No.2, Kebayan 2, Sragen Kulon, Kec. Sragen</p>
                                        <div class="button-group">
                                            <a href="https://maps.app.goo.gl/cfCBxBGEMEmwCLn29" class="btn btn-custom">Lihat Detail</a>
                                            <a href="peta.php" class="btn btn-custom">Lokasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <img src="Foto/Reunikopi.jpg" class="img-fluid" alt="Coto Makassar">
                                    <div class="card-body">
                                        <h5 class="card-title">Reunikopi</h5>
                                        <p class="description">Jl. Kaswari, Ngrandu, Nglorog, Kec. Sragen</p>
                                        <div class="button-group">
                                            <a href="https://maps.app.goo.gl/ejDe2VgVX9i7ruzz8" class="btn btn-custom">Lihat Detail</a>
                                            <a href="peta.php" class="btn btn-custom">Lokasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <img src="Foto/Pranadjaya coffee.jpg" class="img-fluid" alt="Coto Makassar">
                                    <div class="card-body">
                                        <h5 class="card-title">Pranadjaya coffee</h5>
                                        <p class="description">Jl. Slamet Riyadi, Kebayan 2, Sragen Kulon, Kec. Sragen</p>
                                        <div class="button-group">
                                            <a href="https://maps.app.goo.gl/kN38KgbqC8SuYof96" class="btn btn-custom">Lihat Detail</a>
                                            <a href="peta.php" class="btn btn-custom">Lokasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card">
                                    <img src="Foto/Ragil Corner.jpg" class="img-fluid" alt="Coto Makassar">
                                    <div class="card-body">
                                        <h5 class="card-title">Ragil Corner</h5>
                                        <p class="description">Ringin Anom, RT006/RW018, Sragen Kulon, Kec. Sragen</p>
                                        <div class="button-group">
                                            <a href="https://maps.app.goo.gl/SS3a5XoFPEEbbKpg6" class="btn btn-custom">Lihat Detail</a>
                                            <a href="peta.php" class="btn btn-custom">Lokasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- menampilkan detail pembuat peta seperti nama, NIM, kelas, dan tautan GitHub -->
                            <div class="modal fade" id="pembuat" tabindex="-1" aria-labelledby="InfoModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="InfoModalLabel">Info Pembuat</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped table-bordered">
                                                <tr>
                                                    <th>Nama</th>
                                                    <td>Arindra Najwa</td>
                                                </tr>
                                                <tr>
                                                    <th>NIM</th>
                                                    <td>23/515591/SV/22582</td>
                                                </tr>
                                                <tr>
                                                    <th>Kelas</th>
                                                    <td>PG-WEB A</td>
                                                </tr>
                                                <tr>
                                                    <th>Github</th>
                                                    <td> <a href="https://github.com/arindranajwa" target="_blank" rel="noopener noreferrer">
                                                            https://github.com/arindranajwa</a> </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Footer -->
                            <footer class="bg-dark text-white text-center py-3">
                                <br>2024 SragenStudySpot | Arindra Najwa </br>
                            </footer>

                            <!-- Bootstrap JS -->
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>