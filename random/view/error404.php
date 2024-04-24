<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
            body {


                background: radial-gradient(284.45% 141.16% at 0% 0%, #3D2E1D 12.1%, #1F1F1F 29.04%, #1F1F1F 49.86%, #1F1F1F 72.19%, #422E16 86.1%);
                backdrop-filter: blur(2px);
            }

    .custom {
        padding-top: 65px;
        border-radius: 50px;
        background: rgba(61, 61, 61, 0.25);
        height: 75vh;
        width: 75vw;
    }

    .aze{

        font-weight: 15px;
        font-size: 130px;
        color: #E67D36;
        
    }
p{

    color: white;
}

.btn-custom {
        background: #E67D36;
        color: white;
    }

    .barre {

        width: 150px;
        height: 3px;
        background: #E67D36;
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
</style>
s
<body>


    <div class="container vh-100 position-relative">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="card custom border-0 text-center  ">
                <div class="card-body ">
                  <h1 class="card-title aze mx-auto">404</h1>
                  <div class="barre mx-auto"></div>
                  <p class="card-text pt-5">Page non trouvé</p>
                  <a href="/" class="btn btn-custom rounded-5 py-4 my-4 ">Retourné a la page accueil</a>
                </div>
              </div>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>