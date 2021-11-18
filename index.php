<?php  
    // COURSE DATA PHP
    $imgCoursesSaintek = ["mathipa", "fisika", "kimia","biologi","english"];
    $imgCoursesSoshum = ["mathips", "sejarah", "sosiologi","ekonomi","geografi","english2"];
    $imgCoursesEkstra = ["informatika", "kesehatan", "astronomi","engineer","psikologi","filsafat", "hukum", "debate","esport","desaindigital","pendidikan", "senimusik", "senirupa","sastra","bahasa"];
    $namaCoursesSaintek = ["Matematika", "Fisika","Kimia", "Biologi", "English"];
    $namaCoursesSoshum = ["Matematika", "Sejarah","Sosiologi", "Ekonomi","Geografi", "English"];
    $namaCoursesEkstra = ["Informatika", "Kesehatan", "Astronomi","Teknik","Psikologi","Filsafat", "Hukum", "Debate and Public Speaking","E-sport","Desain Digital","Pendidikan", "Seni Musik", "Seni Rupa","Sastra dan kepenulisan","Bahasa"];
    // DATA TESTI PHP
    $imgTesti = [];
    $namaTesti = [];
    $isiTesti = [];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png">
    <link rel="manifest" href="ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- cdnjs theme css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- cdnjs css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Ambis Camp</title>
</head>

<body id="home">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top p-2 mb-4 nav-transparent">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="ico/favicon-96x96.png" alt="nav-logo-img"> AMBIS CAMP
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href=".">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About-Us/about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Volunteer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm p-2 mb-4 hide-nav">
        <div class="container">
        </div>
    </nav>
    <!-- akhir nav -->
    <!-- awal jumbotron -->
    <section class="jumbotron">
        <div class="text-container row">
            <h1 class="judul">AMBIS CAMP</h1>
            <h1 class="sub-judul">OPEN MEMBER</h1>
            <p>Forum ini cocok banget buat kamu generasi #AmbiezAbiez karena di sini kamu akan ngepush diri bersama
                temen-temen seperjuangan kamu dengan sistem belajar yang menarik, asik, dan gak bikin tertekan tentunya!
            </p>
            <div class="row justify-content-center ms-lg-auto">
                <div class="col">
                    <a href="Landing-Page/form-main.php"><button class="btn btn-success register-btn">Join
                            us</button></a>
                </div>
                <div class="col">
                    <a href="About-Us/about.php"><button class="btn btn-success register-btn">Learn more</button></a>
                </div>
            </div>
        </div>
        <div class="img-container">
            <img src="img/jumbotron-img.png" alt="Illustration" class="img">
        </div>
    </section>
    <!-- akhir jumbotron -->
    <!-- awal timeline -->
    <section id="timeline" class="timeline-container">
        <div class="container">
            <div class="row mb-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="col text-center">
                    <h1 class="pb-2 pt-3 text-dark">Timeline</h1>
                </div>
            </div>
            <!-- section -->
            <div class="row align-items-center how-it-works">
                <div class="col-2 bottom text-center">
                    <div class="circle">1</div>
                </div>
                <div class="col-6" data-aos="fade-in" data-aos-delay="300">
                    <h3>Open Member</h3>
                    <p>17 Oktober - 30 Oktober 2021</p>
                </div>
            </div>
            <div class="row timeline">
                <div class="col-2">
                    <div class="corner top-right"></div>
                </div>
                <div class="col-8">
                    <hr>
                </div>
                <div class="col-2">
                    <div class="corner left-bottom"></div>
                </div>
            </div>
            <div class="row align-items-center justify-content-end how-it-works">
                <div class="col-6 text-end" data-aos="fade-in" data-aos-delay="600">
                    <h3>Seleksi dan Konfirmasi Member</h3>
                    <p>31 Oktober 2021</p>
                </div>
                <div class="col-2 text-center full">
                    <div class="circle">2</div>
                </div>
            </div>
            <div class="row timeline">
                <div class="col-2">
                    <div class="corner right-bottom"></div>
                </div>
                <div class="col-8">
                    <hr>
                </div>
                <div class="col-2">
                    <div class="corner top-left"></div>
                </div>
            </div>
            <div class="row align-items-center how-it-works">
                <div class="col-2 text-center">
                    <div class="circle">3</div>
                </div>
                <div class="col-6" data-aos="fade-in" data-aos-delay="900">
                    <h3>Masa Pembelajaran</h3>
                    <p>1 November - 28 November 2021</p>
                </div>
            </div>
        </div>
        <svg class="akhir-about" data-aos="fade-up" data-aos-duration="1000" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#E4F1FF" fill-opacity="1"
                d="M0,64L48,64C96,64,192,64,288,85.3C384,107,480,149,576,144C672,139,768,85,864,90.7C960,96,1056,160,1152,154.7C1248,149,1344,75,1392,37.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- akhir timeline -->
    <!-- awal course -->
    <section id="course">
        <div class="container">
            <div class="row text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="col">
                    <h1>Available Courses</h1>
                </div>
            </div>
            <div class="course-saintek">
                <h3 class="saintek text-start">Saintek</h3>
                <div class="row justify-content-center slider-card ps-2 mb-4 text-center container-card"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    <?php foreach( array_combine($imgCoursesSaintek, $namaCoursesSaintek) as $imgCoursesSaintek => $namaCoursesSaintek)  : ?>
                    <div class="col-md-2 col-6 mb-4">
                        <div class="card">
                            <img src="img/<?= $imgCoursesSaintek; ?>.png" class="card-img-top" alt="Project 1">
                            <div class="card-body">
                                <p class="card-text"><?= $namaCoursesSaintek; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>

            <div class="course-soshum">
                <h3 class="soshum text-end">Soshum</h3>
                <div class="row justify-content-center slider-card mb-4 text-center container-card"
                    data-aos="zoom-in-right" data-aos-duration="1000">
                    <?php foreach( array_combine($imgCoursesSoshum, $namaCoursesSoshum) as $imgCoursesSoshum => $namaCoursesSoshum)  : ?>
                    <div class="col-md-2 col-6 mb-4">
                        <div class="card">
                            <img src="img/<?= $imgCoursesSoshum; ?>.png" class="card-img-top" alt="Project 1">
                            <div class="card-body">
                                <p class="card-text"><?= $namaCoursesSoshum; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>

            <div class="course-ekstra">
                <h3 class="ekstra text-start">Ekstra Ambis</h3>
                <div class="row justify-content-center mb-4 text-center slider-card container-card"
                    data-aos="zoom-in-right" data-aos-duration="1000">
                    <?php foreach( array_combine($imgCoursesEkstra, $namaCoursesEkstra) as $imgCoursesEkstra => $namaCoursesEkstra)  : ?>
                    <div class="col-md-2 col-6 mb-4">
                        <div class="card">
                            <img src="img/<?= $imgCoursesEkstra; ?>.png" class="card-img-top" alt="Project 1">
                            <div class="card-body">
                                <p class="card-text"><?= $namaCoursesEkstra; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <svg class="akhir-about" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#D2E7FE" fill-opacity="1"
                d="M0,192L48,197.3C96,203,192,213,288,224C384,235,480,245,576,234.7C672,224,768,192,864,186.7C960,181,1056,203,1152,224C1248,245,1344,267,1392,277.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#E4F1FF" fill-opacity="1"
                d="M0,256L48,218.7C96,181,192,107,288,74.7C384,43,480,53,576,69.3C672,85,768,107,864,128C960,149,1056,171,1152,160C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- akhir course -->
    <!-- awal team -->
    <section id="team">
        <div class="container">
            <div class="row text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="col">
                    <h1>Team</h1>
                </div>
            </div>
            <div class="team-container">
                <div class="row justify-content-center slider-card-testi mb-4 text-center container-card"
                    data-aos="zoom-in-right" data-aos-duration="1000">
                    <div class="card col-4 mb-4">
                        <div class="img-testi">
                            <a class="navbar-brand" href="#">
                                <img src="ico/favicon-96x96.png" alt="testi-img"> AMBIS CAMP
                            </a>
                        </div>
                        <div class="isi-testi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate at, modi maiores sint
                                incidunt ut nihil alias fugit culpa fugiat, itaque saepe eos officia consectetur?
                                Veritatis vero dignissimos accusamus, ullam aspernatur beatae a incidunt repellendus?
                            </p>
                        </div>
                    </div>
                    <div class="card col-4 mb-4">
                        <div class="img-testi">
                            <a class="navbar-brand" href="#">
                                <img src="ico/favicon-96x96.png" alt="testi-img"> AMBIS CAMP
                            </a>
                        </div>
                        <div class="isi-testi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate at, modi maiores sint
                                incidunt ut nihil alias fugit culpa fugiat, itaque saepe eos officia consectetur?
                                Veritatis vero dignissimos accusamus, ullam aspernatur beatae a incidunt repellendus?
                            </p>
                        </div>
                    </div>
                    <div class="card col-4 mb-4">
                        <div class="img-testi">
                            <a class="navbar-brand" href="#">
                                <img src="ico/favicon-96x96.png" alt="testi-img"> AMBIS CAMP
                            </a>
                        </div>
                        <div class="isi-testi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate at, modi maiores sint
                                incidunt ut nihil alias fugit culpa fugiat, itaque saepe eos officia consectetur?
                                Veritatis vero dignissimos accusamus, ullam aspernatur beatae a incidunt repellendus?
                            </p>
                        </div>
                    </div>
                    <div class="card col-4 mb-4">
                        <div class="img-testi">
                            <a class="navbar-brand" href="#">
                                <img src="ico/favicon-96x96.png" alt="testi-img"> AMBIS CAMP
                            </a>
                        </div>
                        <div class="isi-testi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate at, modi maiores sint
                                incidunt ut nihil alias fugit culpa fugiat, itaque saepe eos officia consectetur?
                                Veritatis vero dignissimos accusamus, ullam aspernatur beatae a incidunt repellendus?
                            </p>
                        </div>
                    </div>
                    <div class="card col-4 mb-4">
                        <div class="img-testi">
                            <a class="navbar-brand" href="#">
                                <img src="ico/favicon-96x96.png" alt="testi-img"> AMBIS CAMP
                            </a>
                        </div>
                        <div class="isi-testi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate at, modi maiores sint
                                incidunt ut nihil alias fugit culpa fugiat, itaque saepe eos officia consectetur?
                                Veritatis vero dignissimos accusamus, ullam aspernatur beatae a incidunt repellendus?
                            </p>
                        </div>
                    </div>
                    <div class="card col-4 mb-4">
                        <div class="img-testi">
                            <a class="navbar-brand" href="#">
                                <img src="ico/favicon-96x96.png" alt="testi-img"> AMBIS CAMP
                            </a>
                        </div>
                        <div class="isi-testi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate at, modi maiores sint
                                incidunt ut nihil alias fugit culpa fugiat, itaque saepe eos officia consectetur?
                                Veritatis vero dignissimos accusamus, ullam aspernatur beatae a incidunt repellendus?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg class="akhir-about" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#D2E7FE" fill-opacity="1"
                d="M0,192L48,197.3C96,203,192,213,288,224C384,235,480,245,576,234.7C672,224,768,192,864,186.7C960,181,1056,203,1152,224C1248,245,1344,267,1392,277.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#E4F1FF" fill-opacity="1"
                d="M0,256L48,218.7C96,181,192,107,288,74.7C384,43,480,53,576,69.3C672,85,768,107,864,128C960,149,1056,171,1152,160C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- akhir team -->
    <!-- awal testimoni -->
    <section id="testimoni">
        <div class="container">
            <div class="row text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="col">
                    <h1>Apa kata mereka?</h1>
                </div>
            </div>
            <div class="testi-container">
                <div class="row justify-content-center slider-card-testi mb-4 text-center container-card"
                    data-aos="zoom-in-right" data-aos-duration="1000">
                    <div class="card col-4 mb-4">
                        <div class="img-testi">
                            <a class="navbar-brand" href="#">
                                <img src="ico/favicon-96x96.png" alt="testi-img">
                                <p>AMBIS CAMP</p>
                            </a>
                        </div>
                        <div class="isi-testi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate at, modi maiores sint
                                incidunt ut nihil alias fugit culpa fugiat, itaque saepe eos officia consectetur?
                                Veritatis vero dignissimos accusamus, ullam aspernatur beatae a incidunt repellendus?
                            </p>
                        </div>
                    </div>
                    <div class="card col-4 mb-4">
                        <div class="img-testi">
                            <a class="navbar-brand" href="#">
                                <img src="ico/favicon-96x96.png" alt="testi-img">
                                <p>AMBIS CAMP</p>
                            </a>
                        </div>
                        <div class="isi-testi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate at, modi maiores sint
                                incidunt ut nihil alias fugit culpa fugiat, itaque saepe eos officia consectetur?
                                Veritatis vero dignissimos accusamus, ullam aspernatur beatae a incidunt repellendus?
                            </p>
                        </div>
                    </div>
                    <div class="card col-4 mb-4">
                        <div class="img-testi">
                            <a class="navbar-brand" href="#">
                                <img src="ico/favicon-96x96.png" alt="testi-img">
                                <p>AMBIS CAMP</p>
                            </a>
                        </div>
                        <div class="isi-testi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate at, modi maiores sint
                                incidunt ut nihil alias fugit culpa fugiat, itaque saepe eos officia consectetur?
                                Veritatis vero dignissimos accusamus, ullam aspernatur beatae a incidunt repellendus?
                            </p>
                        </div>
                    </div>
                    <div class="card col-4 mb-4">
                        <div class="img-testi">
                            <a class="navbar-brand" href="#">
                                <img src="ico/favicon-96x96.png" alt="testi-img">
                                <p>AMBIS CAMP</p>
                            </a>
                        </div>
                        <div class="isi-testi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate at, modi maiores sint
                                incidunt ut nihil alias fugit culpa fugiat, itaque saepe eos officia consectetur?
                                Veritatis vero dignissimos accusamus, ullam aspernatur beatae a incidunt repellendus?
                            </p>
                        </div>
                    </div>
                    <div class="card col-4 mb-4">
                        <div class="img-testi">
                            <a class="navbar-brand" href="#">
                                <img src="ico/favicon-96x96.png" alt="testi-img">
                                <p>AMBIS CAMP</p>
                            </a>
                        </div>
                        <div class="isi-testi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate at, modi maiores sint
                                incidunt ut nihil alias fugit culpa fugiat, itaque saepe eos officia consectetur?
                                Veritatis vero dignissimos accusamus, ullam aspernatur beatae a incidunt repellendus?
                            </p>
                        </div>
                    </div>
                    <div class="card col-4 mb-4">
                        <div class="img-testi">
                            <a class="navbar-brand" href="#">
                                <img src="ico/favicon-96x96.png" alt="testi-img">
                                <p>AMBIS CAMP</p>
                            </a>
                        </div>
                        <div class="isi-testi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate at, modi maiores sint
                                incidunt ut nihil alias fugit culpa fugiat, itaque saepe eos officia consectetur?
                                Veritatis vero dignissimos accusamus, ullam aspernatur beatae a incidunt repellendus?
                            </p>
                        </div>
                    </div>
                    <div class="card col-4 mb-4">
                        <div class="img-testi">
                            <a class="navbar-brand" href="#">
                                <img src="ico/favicon-96x96.png" alt="testi-img">
                                <p>AMBIS CAMP</p>
                            </a>
                        </div>
                        <div class="isi-testi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate at, modi maiores sint
                                incidunt ut nihil alias fugit culpa fugiat, itaque saepe eos officia consectetur?
                                Veritatis vero dignissimos accusamus, ullam aspernatur beatae a incidunt repellendus?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg class="akhir-about" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#D2E7FE" fill-opacity="1"
                d="M0,192L48,197.3C96,203,192,213,288,224C384,235,480,245,576,234.7C672,224,768,192,864,186.7C960,181,1056,203,1152,224C1248,245,1344,267,1392,277.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#E4F1FF" fill-opacity="1"
                d="M0,256L48,218.7C96,181,192,107,288,74.7C384,43,480,53,576,69.3C672,85,768,107,864,128C960,149,1056,171,1152,160C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- akhir testimoni -->
    <!-- awal volunteer -->
    <section id="volunteer">
        <div class="grid">
            <div class="img-container">
                <img src="Illustration/illustration.jpg" alt="Illustration" class="img">
            </div>
            <div class="text-container">
                <div class="row mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col text-center">
                        <h1>Kesempatan menjadi tim <br> Ambis Camp!</h1>
                        <p>Kamu juga berkesempatan untuk menjadi pengurus Ambis Camp loh! Jangan sia-siakan kesempatan
                            ini, yuk berorganisasi agar mendapatkan banyak pengalaman seru dan bisa bermanfaat bagi
                            banyak orang.</p>
                    </div>
                </div>
            </div>
        </div>

        <svg class="akhir-about" data-aos="fade-up" data-aos-duration="1000" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#E4F1FF" fill-opacity="1"
                d="M0,64L48,64C96,64,192,64,288,85.3C384,107,480,149,576,144C672,139,768,85,864,90.7C960,96,1056,160,1152,154.7C1248,149,1344,75,1392,37.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- akhir volunteer -->
    <!-- awal join -->
    <section id="join">
        <div class="container">
            <div class="row mb-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="col text-center">
                    <h1>Tunggu apa lagi? Ayo bergabung di Forum Ambis Camp!</h1>
                    <a href="Landing-Page/form-main.html"><button class="btn btn-success register-btn">Join Us
                        </button></a>
                </div>
            </div>
        </div>
        <svg class="akhir-about" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#D2E7FE" fill-opacity="1"
                d="M0,192L48,197.3C96,203,192,213,288,224C384,235,480,245,576,234.7C672,224,768,192,864,186.7C960,181,1056,203,1152,224C1248,245,1344,267,1392,277.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#E4F1FF" fill-opacity="1"
                d="M0,256L48,218.7C96,181,192,107,288,74.7C384,43,480,53,576,69.3C672,85,768,107,864,128C960,149,1056,171,1152,160C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- akhir join -->
    <!-- awal chart -->
    <section id="chart">
        <div class="container">
            <div class="row text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="col">
                    <h2>Jenjang pendidikan member kami sejauh ini:</h2>
                </div>
            </div>
            <div class="row mb-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="chart_wrap">
                    <div id="piechart_3d" class="piechart"></div>
                </div>
            </div>
        </div>
        <svg class="akhir-about" data-aos="fade-up" data-aos-duration="1000" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#E4F1FF" fill-opacity="1"
                d="M0,64L48,64C96,64,192,64,288,85.3C384,107,480,149,576,144C672,139,768,85,864,90.7C960,96,1056,160,1152,154.7C1248,149,1344,75,1392,37.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- akhir chart -->
    <!-- awal footer -->
    <footer class="text-black text-center pb-3">
        <div class="row justify-content-evenly container">
            <div class="right-side">
                <a class="navbar-brand" href="#">
                    <img src="ico/favicon-96x96.png" alt="nav-logo-img"> AMBIS CAMP
                </a>
            </div>
            <div class="row left-side justify-content-evenly">
                <div class="contact-us">
                    <h2>Contact Us</h2>
                    <ul>
                        <a href="http://wa.me/62881023795681" target="_blank">
                            <li><img src="ico/Whatsapp.png" alt="nav-logo-img">+62-881-0237-95681 (Ka Cheel)</li>
                        </a>
                        <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJfrKsTngzQBRmfswhPnBrCCjbhsBxHqctXlqPMqnVDcfdkWLpvKxcRmMFJhgqbjMCPfwzg"
                            target="_blank">
                            <li><img src="ico/Gmail.png" alt="nav-logo-img">ambiscamp.ofc@gmail.com</li>
                        </a>
                    </ul>
                </div>
                <div class="visit-us">
                    <h2>Visit Us</h2>
                    <a href="http://instagram.com/ambis_camp" target="_blank"><img src="ico/Instagram.png"
                            alt="nav-logo-img"></a>
                    <a href="http://twitter.com/ambiscamp" target="_blank"><img src="ico/Twitter.png"
                            alt="nav-logo-img"></a>
                    <a href="https://anchor.fm/ambiscamp" target="_blank"><img src="ico/Spotify.png"
                            alt="nav-logo-img"></a>
                </div>
            </div>
        </div>
        <p>Created with <i class="bi bi-heart-fill"></i> by Ambis Camp.<br> © 2021 Ambis Camp. All rights reserved</p>

    </footer>
    <!-- akhir footer -->









    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- js AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
    <!-- jquery script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- cdnjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    AOS.init({
        once: true,
    });
    </script>
    <!-- script slick -->
    <script type="text/javascript"">
    $('.slider-card').slick({
        dots: true,
        infinite: true,
        speed: 1000,
        slidesToShow: 5,
        slidesToScroll: 5,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows:false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
                infinite: true,
                dots: true,
                arrows:false
            }},
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                arrows:false
            }},
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows:false
            }}
        ]
    });
    $('.slider-card-testi').slick({
        dots: true,
        infinite: true,
        speed: 1000,
        slidesToShow: 3,
        slidesToScroll: 3,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows:false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true,
                arrows:false,
            }},
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false
            }},
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false
            }}
        ]
    });
    </script>
    <!-- chart js -->
    <script type=" text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        let data = google.visualization.arrayToDataTable([
            ['Education', 'Many People'],
            ['SMP', 7],
            ['SMA', 18],
            ['Gap year', 11],
            ['Mahasiswa', 13],
        ]);

        let options = {
            is3D: true,
            fontSize: 20,
            fontName: 'Quicksand',
            width: '100%',
            height: 400,
            backgroundColor: 'transparent',
            chartArea: {
                'width': '100%',
                'height': '80%'
            },
            legend: {
                'position': 'bottom'
            },
        };
        let chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }
    </script>
</body>

</html>