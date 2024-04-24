<?php

require_once ("model/email.php");

function homepage()
{
    $msg = null;

    if (isset($_POST['submit'])) {
        $recaptchaSecretKey = "6LcQpsUpAAAAAKwaP93hH8ak-Z56t-nwfjHNxAKX";
        $recaptchaResponse = $_POST['g-recaptcha-response'];
        $recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecretKey&response=$recaptchaResponse";
        $recaptchaResult = json_decode(file_get_contents($recaptchaUrl));

        if (!$recaptchaResult->success) {
            $msg = '<div class="alert alert-danger alert-dismissible fade show text-center rounded" role="alert">
                        Veuillez prouver que vous n\'êtes pas un robot.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    header("Location: #contact");

        } else {

            $email = htmlspecialchars($_POST['email']);
            $name = htmlspecialchars($_POST['name']);
            $sujet = htmlspecialchars($_POST['sujet']);
            $description = htmlspecialchars($_POST['description']);

            $succes = sendEmail($email, $name, $sujet, $description);

            if ($succes) {
                $msg = '<div class="alert alert-success alert-dismissible fade show text-center rounded" role="alert">
                        Le mail a été bien envoyé !  
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';

                    header("Location: #contact");

            } else {
                $msg = '<div class="alert alert-danger alert-dismissible fade show text-center rounded" role="alert">
                        Une erreur est survenue lors de l\'envoi du mail ! 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';

                    header("Location: #contact");

            }
        }
    }

    require_once ("view/homepage.php");
}
