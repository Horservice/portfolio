<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="../logonew.png">


    <meta name="description" content="Portfolio de Helleringer Simon développeur web junior">
    <meta name="keywords"
        content="développeur junior, portfolio, développement web, programmation, projets, Helleringer Simon">
    <meta name="author" content="Helleringer Simon">

    <meta property="og:title" content="Portfolio de Helleringer Simon">
    <meta property="og:description"
        content="Découvrez mes projets en développement web en tant que développeur junior.">
    <meta property="og:image" content="">
    <meta property="og:url" content="URL_de_votre_portfolio">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Portfolio de Développeur Junior">
    <meta name="twitter:description"
        content="Découvrez mes projets en développement web en tant que développeur junior.">
    <meta name="twitter:image" content="url_de_votre_image_de_présentation.jpg">


    <!-- <link rel="stylesheet" href="../public/css/style.css"> -->
    <script src="https://kit.fontawesome.com/962e0fbbfc.js" crossorigin="anonymous"></script>

    <title>Helleringer Simon / Portfolio Développeur Web et Mobile Junior</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

    p {

        font-family: "Inter", sans-serif;

    }

    *::before,
    ::after {

        box-sizing: border-box;


    }

    /* 
    ::-webkit-scrollbar{

        width: 0px;
        } */
    p {

        color: white;
    }


    body {
        /* background-color: hsl(0, 0%, 24%); */

        /* enlever le scrolls natif  */

    }


    #navbar-example2 {

        transition: background-color 0.3s forwards;
        /* Ajoutez une transition de 0.3 seconde avec une courbe d'accélération */
    }


    .bg-body-custom {

        background-color: hsl(0, 0%, 24%);

        backdrop-filter: blur(100px);
        /* background-color: hsla(0, 0%, 24%, 25%);  */
    }


    .nav-link {

        color: white !important;
        transition: all 1s;
    }

    .nav-link:hover {

        color: rgb(255, 255, 255) !important;
        transform: translateY(-5px);

    }

    .active:hover {

        background-color: transparent !important;
        color: #e5884b !important;
        /* border-bottom: 1px solid rgba(255, 166, 0, 0.755); */
    }

    .active {

        background-color: transparent !important;
        color: #E67D36 !important;
        /* border-bottom: 1px solid orange; */
    }

    .navbar-toggler {

        background-color: #E67D36 !important;

    }




    .homepage {
        background: linear-gradient(111deg, #3D2E1D 12.07%, #1F1F1F 28.97%, #1F1F1F 49.73%, #1F1F1F 72%, #422E16 85.87%);
        /* background-color: beige; */

        /* animation: gradient 15s ease infinite; */
        /* background-size: 400% 400%; */
        /* background-size: 100% 100%; */


    }
/* 
    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    } */

    .gauche {

        border-radius: 15px 90px;
        background: rgba(61, 61, 61, 0.25);
        backdrop-filter: blur(5px);
    }

    .droite {

        border-radius: 90px 15px;
        background: rgba(61, 61, 61, 0.25);
        backdrop-filter: blur(5px);
    }

    .barre {

        width: 100%;
        height: 6px;
        background: #E67D36;

    }

    .card-title-custom {
        width: 250px;
        height: 100px;
        border-radius: 15px;
        background: #E67D36;
        box-shadow: -20px -20px 0px 0px #000;

        padding-top: 35px;
        color: white;
    }

    /* .skill {

background-color: #1F1F1F;


} */

    .btn-custom {

        background: #E67D36;
        color: white;

    }

    .btn-custom:hover {

        background: #b9642c;
        color: white;

    }

    .btn-custom:focus {
        color: white !important;

        background: #E67D36 !important;

    }

    .btn-custom:active {
        color: white !important;

        background: #E67D36 !important;

    }

    .title-custom {


        background: #E67D36 !important;
        border-radius: 15px;
        color: white;
        width: 450px;

    }



    .card-img-cusmto {

        height: 250px;
        width: 250px;
    }

    i {

        color: rgb(255, 255, 255) !important;
        transition: color 1s;
    }

    i:hover {

        color: rgb(183, 183, 183) !important;
    }

    .custom-circle {
        width: 100px;
        height: 100px;
        line-height: 85px;
        background: #E67D36 !important;

    }


</style>

<body>


    <nav id="navbar-example2" class="navbar navbar-expand-sm bg-body-custom   py-3  shadow sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="/homepage" aria-label="return for page homepage">
                <svg width="61" height="19" viewBox="0 0 61 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.420455 10.2273V8.86364L11.3977 3.27273V5.45454L2.97727 9.51136L3.04545 9.375V9.71591L2.97727 9.57955L11.3977 13.6364V15.8182L0.420455 10.2273ZM60.2884 10.2273L49.3111 15.8182V13.6364L57.7315 9.57955L57.6634 9.71591V9.375L57.7315 9.51136L49.3111 5.45454V3.27273L60.2884 8.86364V10.2273Z"
                        fill="#E67D36" />
                    <path
                        d="M15.9339 18V0.545454H18.0476V8.31818H27.3544V0.545454H29.468V18H27.3544V10.1932H18.0476V18H15.9339ZM43.245 4.90909C43.1428 4.04545 42.728 3.375 42.0007 2.89773C41.2734 2.42045 40.3814 2.18182 39.3246 2.18182C38.5518 2.18182 37.8757 2.30682 37.2962 2.55682C36.7223 2.80682 36.2734 3.15057 35.9496 3.58807C35.6314 4.02557 35.4723 4.52273 35.4723 5.07954C35.4723 5.54545 35.5831 5.94602 35.8047 6.28125C36.032 6.6108 36.3217 6.88636 36.674 7.10795C37.0263 7.32386 37.3956 7.50284 37.782 7.64489C38.1683 7.78125 38.5234 7.89205 38.8473 7.97727L40.62 8.45455C41.0746 8.57386 41.5803 8.73864 42.1371 8.94886C42.6996 9.15909 43.2365 9.44602 43.7479 9.80966C44.2649 10.1676 44.6911 10.6278 45.0263 11.1903C45.3615 11.7528 45.5291 12.4432 45.5291 13.2614C45.5291 14.2045 45.282 15.0568 44.7876 15.8182C44.299 16.5795 43.5831 17.1847 42.6399 17.6335C41.7024 18.0824 40.5632 18.3068 39.2223 18.3068C37.9723 18.3068 36.8899 18.1051 35.9751 17.7017C35.0661 17.2983 34.3501 16.7358 33.8274 16.0142C33.3104 15.2926 33.0178 14.4545 32.9496 13.5H35.1314C35.1882 14.1591 35.4098 14.7045 35.7962 15.1364C36.1882 15.5625 36.6825 15.8807 37.2791 16.0909C37.8814 16.2955 38.5291 16.3977 39.2223 16.3977C40.0291 16.3977 40.7536 16.267 41.3956 16.0057C42.0376 15.7386 42.5462 15.3693 42.9212 14.8977C43.2962 14.4205 43.4837 13.8636 43.4837 13.2273C43.4837 12.6477 43.3217 12.1761 42.9979 11.8125C42.674 11.4489 42.2479 11.1534 41.7195 10.9261C41.1911 10.6989 40.62 10.5 40.0064 10.3295L37.8587 9.71591C36.495 9.32386 35.4155 8.7642 34.62 8.03693C33.8246 7.30966 33.4268 6.35795 33.4268 5.18182C33.4268 4.20454 33.6911 3.35227 34.2195 2.625C34.7536 1.89205 35.4695 1.32386 36.3672 0.920454C37.2706 0.511363 38.2791 0.306818 39.3928 0.306818C40.5178 0.306818 41.5178 0.508522 42.3928 0.911931C43.2678 1.30966 43.9609 1.85511 44.4723 2.54829C44.9893 3.24148 45.2621 4.02841 45.2905 4.90909H43.245Z"
                        fill="white" />
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading1">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading2">Compétence</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading3">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading4">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>


    <main data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" class="scrollspy-example " tabindex="0">


        <section id="scrollspyHeading1" class="homepage min-vh-100 ">




            <div class="container-fluid py-3">
                <div class="d-flex align-items-center text-center">
                    <div class="barre me-5"></div>
                    <h2 class="title-custom p-2 shadow ">Accueil</h2>
                    <div class="barre ms-5"></div>
                </div>
            </div>

            <div class="container-fluid ">
                <div class="row g-3 ">

                    <div class="col-md-7  ">
                        <div class="card gauche  border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center p-3 text-center ">
                                    <p class="card-title-custom fs-5 ">Qui-je-suis ?</p>
                                    <div class="barre ms-3 mb-2"></div>
                                </div>
                                <p class="card-text">Je m'appelle Helleringer Simon, j'ai 26 ans et je suis
                                    développeur
                                    web junior full stack.<br><br>
                                    Avant d'avoir suivi ma formation, j'étais électricien dans
                                    le bâtiment. J'avais pour projet de me reconvertir dans le domaine du développement
                                    web, un domaine qui m'intéressait depuis un certain temps. J'ai eu l'opportunité de
                                    suivre une formation grâce au campus CCI de Moselle.

                                </p>


                                <div class=" text-end">
                                    <a href="../public/assets/docs/Curriculum vitae Simon Helleringer - Développeur web junior.pdf"
                                        class="btn btn-custom mb-2 me-3 px-5 py-3 rounded-5">Mon CV</a>
                                </div>

                            </div>



                            <style>
                                .caze {

                                    height: 55px;
                                    width: 55px;
                                    background-color: #00FF1A;
                                    -webkit-animation: heartbeat 2s ease-in-out infinite both;
                                    animation: heartbeat 2s ease-in-out infinite both;
                                }

                                @keyframes heartbeat {
                                    from {
                                        transform: scale(1);
                                        transform-origin: center center;
                                        animation-timing-function: ease-out;
                                    }

                                    10% {
                                        transform: scale(0.91);
                                        animation-timing-function: ease-in;
                                    }

                                    17% {
                                        transform: scale(0.98);
                                        animation-timing-function: ease-out;
                                    }

                                    33% {
                                        transform: scale(0.87);
                                        animation-timing-function: ease-in;
                                    }

                                    45% {
                                        transform: scale(1);
                                        animation-timing-function: ease-out;
                                    }
                                }

                                .cbc {

                                    background-color: #E67D36;

                                }
                            </style>

                        </div>

                        <div class="card droite border-0 mt-2">
                            <div class="card-body rounded-4  d-flex align-items-center mx-auto cbc  my-3 ">
                                <div class="rounded-circle caze me-1 shadow"></div>
                                <p class="card-text text-center text-white">
                                    : En recherche de travailler
                                </p>

                            </div>





                        </div>



                    </div>
                    <div class="col-md-5">
                        <div class="card h-100 droite text-center border-0 "> 
                            <img src="../public/img/moiv2.jpg" loading="lazy"
                                class="card-img-cusmto mx-auto rounded-circle mt-5" alt="awesome">
                            <div class="card-body">
                                <h5 class="card-title text-white">
                                    < Helleringer Simon />
                                </h5>
                                <p class="card-text">
                                    < Développeur Web Et Web Mobile Junior />
                                </p>
                                <div class="row  justify-content-center">
                                    <div class="col">
                                        <a href="https://github.com/Horservice"
                                            class="btn btn-custom rounded-circle custom-circle "><i
                                                class="fa-brands fa-github fa-2xl "></i></a>
                                    </div>
                                    <div class="col">
                                        <a href="https://www.linkedin.com/in/simon-helleringer-918981272/"
                                            class="btn btn-custom rounded-circle custom-circle "><i
                                                class="fa-brands fa-linkedin fa-2xl"></i></a>
                                    </div>
                                    <div class="col">
                                        <a href="mailto:helleringer.simon@hotmail.com"
                                            class="btn btn-custom rounded-circle custom-circle "><i
                                                class="fa-solid fa-envelope fa-2xl"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <style>



            </style>

            </div>








        </section>

        <section class="min-vh-100 child skill mb-5 " id="scrollspyHeading2">

            <div class="container-fluid py-3">
                <div class="d-flex align-items-center text-center">
                    <div class="barre me-5"></div>
                    <h2 class="title-custom p-2 ">Compétence</h2>
                    <div class="barre ms-5"></div>
                </div>
            </div>


            <div class="container-fluid py-3 ">
                <style>
                    .shake:hover {

                        -webkit-animation: shake-lr 0.7s cubic-bezier(0.455, 0.030, 0.515, 0.955);
                        animation: shake-lr 0.7s cubic-bezier(0.455, 0.030, 0.515, 0.955);
                    }

                    @-webkit-keyframes shake-lr {

                        0%,
                        100% {
                            -webkit-transform: rotate(0deg);
                            transform: rotate(0deg);
                            -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%;
                        }

                        10% {
                            -webkit-transform: rotate(8deg);
                            transform: rotate(8deg);
                        }

                        20%,
                        40%,
                        60% {
                            -webkit-transform: rotate(-10deg);
                            transform: rotate(-10deg);
                        }

                        30%,
                        50%,
                        70% {
                            -webkit-transform: rotate(10deg);
                            transform: rotate(10deg);
                        }

                        80% {
                            -webkit-transform: rotate(-8deg);
                            transform: rotate(-8deg);
                        }

                        90% {
                            -webkit-transform: rotate(8deg);
                            transform: rotate(8deg);
                        }
                    }

                    @keyframes shake-lr {

                        0%,
                        100% {
                            -webkit-transform: rotate(0deg);
                            transform: rotate(0deg);
                            -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%;
                        }

                        10% {
                            -webkit-transform: rotate(8deg);
                            transform: rotate(8deg);
                        }

                        20%,
                        40%,
                        60% {
                            -webkit-transform: rotate(-10deg);
                            transform: rotate(-10deg);
                        }

                        30%,
                        50%,
                        70% {
                            -webkit-transform: rotate(10deg);
                            transform: rotate(10deg);
                        }

                        80% {
                            -webkit-transform: rotate(-8deg);
                            transform: rotate(-8deg);
                        }

                        90% {
                            -webkit-transform: rotate(8deg);
                            transform: rotate(8deg);
                        }
                    }


                    .skillgauche {
                        border-radius: 68px 15px 65px 15px;
                        background: rgba(61, 61, 61, 0.25);

                    }

                    .skilldroite {
                        border-radius: 15px 68px 15px 65px;
                        background: rgba(61, 61, 61, 0.25);


                    }
                </style>

                <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2 g-2  text-center ">
                    <div class="col ">
                        <div class="card skillgauche h-100 border-0">
                            <div class="card-body">
                                <p class="card-title">Front-end</p>
                                <div class="row row-cols-3 g-3 d-flex align-items-center bg">
                                    <div class="col"><img src="../html-5.png" class="img-fluid shake" alt="" height="150"
                                            width="150"></div>
                                    <div class="col"><img src="../css-3.png"
                                            class="img-fluid shake atk" alt="" height="150" width="150"></div>
                                    <div class="col"><img src="../JavaScript-logo.png" class="img-fluid shake" alt=""
                                            height="150" width="150"></div>
                                    <div class="col"><img src="../Bootstrap_logo.svg.png" class="img-fluid shake" alt=""
                                            height="150" width="150"></div>
                                    <div class="col"><img src="../jquery_vertical_logo_icon_169489.png"
                                            class="img-fluid shake" alt="" height="150" width="150"></div>
                                    <div class="col "><img src="../AJAX_logo_by_gengns.svg.png" class="img-fluid shake" alt="" height="150"
                                            width="150"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 skilldroite border-0">
                            <div class="card-body">
                                <p class="card-title">Back-end</p>
                                <div class="row row-cols-1 g-3">
                                    <div class="col mt-5"><img src="../PHP-logo.svg.png" class="img-fluid shake" alt=""
                                            height="150" width="150"></div>
                                    <div class="col pt-5"><img src="../1200px-MySQL.svg.png" class="img-fluid shake"
                                            alt="" height="150" width="150"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">CMS</h5>
                                <div class="mx-auto">Wordpress</div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>




        </section>

        <!-- <style>
            .card-img-top {


                transition: transform .2s;
                /* Animation */
            }

            .card-img-top:hover {


                transform: scale(0.9);
                /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
            }
        </style> -->

        <section class="min-vh-100 child portfolio position-relative" id="scrollspyHeading3">
            <div class="container-fluid py-3 bg">
                <div class="d-flex align-items-center text-center">
                    <div class="barre me-5"></div>
                    <h2 class="title-custom p-2 ">Portfolio</h2>
                    <div class="barre ms-5"></div>
                </div>
            </div>

            <div class="container-fluid pt-5 ">

                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-2 text-center ">
                    <div class="col">
                        <div class="card projet">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card projet">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card projet">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    1
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                1
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    2
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                2
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </section>


        <section class="min-vh-100 child contact  py-1" id="scrollspyHeading4">

            <div class="container-fluid py-3">
                <div class="d-flex align-items-center text-center">
                    <div class="barre me-5"></div>
                    <h2 class="title-custom p-2 ">Contact</h2>
                    <div class="barre ms-5"></div>
                </div>
            </div>

            <style>
                .form-control {

                    border-bottom: 1px solid #b9642c;

                    color: white !important;

                    border-top-color: transparent;
                    border-left: transparent;
                    border-right: transparent;
                    background: #3D3D3D;

                    border-radius: 0px;
                    box-shadow: transparent !important;
                }

                .form-control:focus {
                    color: white !important;
                    border-top-color: transparent;
                    background: #3D3D3D;


                    box-shadow: none;
                    border-bottom: 1px solid #b9642c;

                }

                label {
                    color: white !important;

                }

                label::after {
                    background-color: transparent !important;
                    color: white !important;

                }

                .bg-body-card {

                    background-color: #E67D36 !important;
                    border-radius: 150px 50px 50px 0px;
                    width: 90%;

                }

                .contGauche {
                    border-radius: 50px;
                    background: rgba(61, 61, 61, 0.25);

                }

                .contactright {

                    border-radius: 50px;
                    background: rgba(61, 61, 61, 0.25);
                }
            </style>

            <div class="container-fluid py-3" style="width: 90%;">

                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 g-3  ">
                    <div class="col">
                        <div class="card p-4 contGauche border-0">
                            <div class="card-body">
                                <form class="" method="post" action="">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="name@example.com" required>
                                        <label for="floatingInput">Nom Prénom</label>
                                    </div>
                                    <div class=" form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com" required>
                                        <label for="floatingInput">Email</label>
                                    </div>
                                    <div class=" form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="name@example.com" required>
                                        <label for="floatingInput">Sujet</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea type="text" class="form-control" id="floatingPassword"
                                            placeholder="Password" required></textarea>
                                        <label for="floatingPassword">Description</label>
                                    </div>
                                    <div class="mb-3 d-flex justify-content-center">
                                        <div class="g-recaptcha" data-sitekey="6Lf4Wf4nAAAAAB2Iy_A2RDYVj1OvD6k0ASIeXGw_
                                            "></div>
                                    </div>
                                    <div class="mb-3 bot text-center">
                                        <button type="submit" value="submit" name="submit"
                                            class="btn btn-custom p-3 px-5 rounded-5">Envoyer</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 contactright h-100  ">

                            <div class="card-body text-center  ">

                            </div>
                        </div>
                    </div>
                </div>



            </div>








        </section>


    </main>

    <footer class="bg-body-custom container-fluid text-center ">
        <div class="container text-center">
            <div class="row row-cols-3 row-cols-md-3 row-cols-lg-3 d-flex align-items-center">
                <div class="col">
                    <a class="text-white" href="/légal">Light link</a>
                </div>
                <div class="col">
                    <img src="../logonew.png" class="img-fluid" height="100" width="100" alt="">
                </div>
                <div class="col">
                    <a class="text-white" href="/politique">Light link</a>
                </div>
            </div>
        </div>


    </footer>


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


    <script>

        //effet fondu scrolls quand descend en dessus de > 80 donc effet blur and co 
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                document.getElementById("navbar-example2").style.backgroundColor = "hsla(0, 0%, 24%, 0.25)";

                console.log('descendue');


            } else {
                document.getElementById("navbar-example2").style.backgroundColor = "hsl(0, 0%, 24%, 100)";
                console.log('remonter a la normale');

            }
        }


    </script>
</body>

</html>