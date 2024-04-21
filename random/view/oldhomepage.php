<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>

<style>
    body {

        box-sizing: border-box;
    }

    ::-webkit-scrollbar {
        width: 0px;
    }

    .barre {
        position: relative;
        top: 10%;
        left: 15%;
        height: 15px;
        width: 100px;
        background-color: yellow;
        -webkit-box-shadow: -10px -10px 0px 5px #000000;
        box-shadow: -10px -10px 0px 5px #000000;
    }

    .mt-15 {
        margin-top: 120px;
    }

    .marleft {
        margin-left: 115px;
        width: 175px;
    }

    /* md
    @media (width <= 1250px) {


        
    } */

    .lfr {
        background-color: red;
        width: 150px;
        position: relative;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .un {

        position: relative;
        top: 530px;
        -webkit-transform: skewY(-5deg);
        -moz-transform: skewY(-5deg);
        transform: skewY(-5deg);
        width: auto;
        background-color: red;
        z-index: 1;
        overflow: hidden;

    }


    h1 {
        padding: 20px;
        text-align: center;
        /* animation: scroll 10s linear infinite; */
    }

        @keyframes scroll {
        0% {

            transform: translateX(-100%);
        }
        100% {
            transform: translateX(100%);
        }
    }


    .handsome {
        z-index: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        height: 500px;
        width: 500px;
        transform: translate(-50%, -50%);
    }

    .homepage{

        background-color: yellow;
    }



</style>

<body>
    <main>

        <section class="container-fluid g-0 vh-100 homepage ">




            <div class="moi">
                <img class="handsome" src="../public/img/moiv2.jpg"> 
            </div>

            

            <div class="un">
                <h1>
                    Développeur Web Junior - Helleringer Simon </h1>
            </div>


            <!-- <div class="lfr">
            <ul>
                <li>Linkind</li>
                <li>Git</li>
            </ul>
        </div> -->

            <!-- <h1>Helleringer Simon</h1> -->



        </section>


        <section class="container-fluid vh-100 bg-danger ">



            <!-- <div class="barre ">
            <h2 class="marleft">Qui je suis ?</h2>
        </div> -->

            <!-- <div class="card  border-0 rounded-0">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="../public/img/code-1076536_1280.jpg" class="img-fluid h-100 object-fit-cover w-100 "
                        alt="...">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <p class="card-text">Je m'appelle Helleringer Simon, j'ai 26 ans et je suis développeur web
                            junior full stack. Avant d'avoir suivi ma formation, j'étais électricien dans le bâtiment.
                            J'avais pour projet de me reconvertir dans le domaine du développement web, un domaine qui
                            m'intéressait depuis un certain temps. J'ai eu l'opportunité de suivre une formation grâce
                            au campus CCI de Moselle.
                        </p>
                    </div>
                </div>
            </div>
        </div> -->

            <!-- <div class="container">

            <div class="d-flex justify-content-between">

                <div>1</div>



                <div>2</div>

            </div>




        </div> -->


        </section>

        <section class="container-fluid vh-100 bg-warning">


        </section>


        <section class="container-fluid vh-100 bg-primary">

            <script></script>
        </section>

        <section class="container-fluid vh-100 bg-primary">

            <script></script>
        </section>




        <section class="container-fluid vh-100 bg-success">
            Technologie

            <div class="container text-center">

                <div class="row">

                    <div class="col">
                        Boule
                    </div>

                    <div class="col">
                        Info
                    </div>

                </div>

            </div>

            <script></script>
        </section>

        <section class="container-fluid vh-100 bg-body">


            <style>

            </style>
            <div class="container tea text-center ">
                <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
                    <div class="col">
                        <div class="p-3">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script></script>

        </section>

        <section class="container-fluid vh-100 bg-warning-subtle">
            CV


            <div class="row">
                <div class="col">1</div>
                <div class="col">2</div>
            </div>

            <script></script>

        </section>



        <section class="container-fluid vh-100 bg-info">

            <h5>Contact</h5>


            <div class="container">
                <div class="row g-5">
                    <div class="col-md-8">
                        <div class="card h-100?">
                            <div class="card-body">




                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center">Contact/réseau Sociaux</li>

                                    <li class="list-group-item">Téléphone</li>
                                    <li class="list-group-item">Email</li>
                                    <li class="list-group-item">Linkind</li>
                                    <li class="list-group-item">Git</li>

                                </ul>

                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </section>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </main>
</body>

</html>