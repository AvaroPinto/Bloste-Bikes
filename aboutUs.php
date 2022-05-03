<?php
session_start();
$_SESSION['errorCode'] = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./images/titleBarImage.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Quienes Somos</title>
    <style>
        body {
            margin-top: 20px;
        }

        .text-custom {
            color: #0062ff !important;
        }

        body {
            margin-top: 20px;
        }

        .section_padding_130 {
            padding-top: 130px;
            padding-bottom: 130px;
        }

        .faq_area {
            position: relative;
            z-index: 1;
            background-color: #f5f5ff;
        }

        .faq-accordian {
            position: relative;
            z-index: 1;
        }

        .faq-accordian .card {
            position: relative;
            z-index: 1;
            margin-bottom: 1.5rem;
        }

        .faq-accordian .card:last-child {
            margin-bottom: 0;
        }

        .faq-accordian .card .card-header {
            background-color: #ffffff;
            padding: 0;
            border-bottom-color: #ebebeb;
        }

        .faq-accordian .card .card-header h6 {
            cursor: pointer;
            padding: 1.75rem 2rem;
            color: #3f43fd;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-grid-row-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .faq-accordian .card .card-header h6 span {
            font-size: 1.5rem;
        }

        .faq-accordian .card .card-header h6.collapsed {
            color: #070a57;
        }

        .faq-accordian .card .card-header h6.collapsed span {
            -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }

        .faq-accordian .card .card-body {
            padding: 1.75rem 2rem;
        }

        .faq-accordian .card .card-body p:last-child {
            margin-bottom: 0;
        }

        @media only screen and (max-width: 575px) {
            .support-button p {
                font-size: 14px;
            }
        }

        .support-button i {
            color: #3f43fd;
            font-size: 1.25rem;
        }

        @media only screen and (max-width: 575px) {
            .support-button i {
                font-size: 1rem;
            }
        }

        .support-button a {
            text-transform: capitalize;
            color: #2ecc71;
        }

        @media only screen and (max-width: 575px) {
            .support-button a {
                font-size: 13px;
            }
        }
    </style>
</head>

<body>
    <?php echo "<p style='color: white;'>p</p>";  ?>

    <?php include './elementosVisuales/header.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <div class="container pt-3 pb-5" style="background-color: #eee;">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                    <img src="./images/machote.jpg" class="img-fluid" alt="Image" />
                                    <div class="img-overlay bg-dark"></div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6 col-md-6 col-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                    <img src="./images/meAran.jpg" class="img-fluid" alt="Image" />
                                    <div class="img-overlay bg-dark"></div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                    <img src="./images/compisBike.jpg" class="img-fluid" alt="Image" />
                                    <div class="img-overlay bg-dark"></div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->

            <div class="col-lg-6 col-md-6 col-12 order-1 order-md-2">
                <div class="section-title ml-lg-5">
                    <h5 class="text-custom font-weight-normal mb-3">Quienes somos</h5>
                    <h4 class="title mb-4">
                        Nuestro concepto es <br />
                        llegar a todo ciclista que nos necesite.
                    </h4>
                    <p class="text-muted mb-0">Somos una empresa joven fundada en 2020 durante la pandemia. Nacimos como una idea de llegar a toda persona que quiera empezar en este amado deporte. Gracias al ciclismo encontramos el camino mi socio y yo de un nuevo estilo de vida, porque eso es el ciclismo. Un estado de ánimo.</p>

                    <div class="row">
                        <div class="col-lg-6 mt-4 pt-2">
                            <div class="media align-items-center rounded shadow p-3">
                                <i class="	fas fa-bicycle h4 mb-0 text-custom"></i>
                                <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Profesionales</a></h6>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 pt-2">
                            <div class="media align-items-center rounded shadow p-3">
                                <i class="fa fa-hand-peace-o h4 mb-0 text-custom"></i>
                                <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Transparencia</a></h6>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 pt-2">
                            <div class="media align-items-center rounded shadow p-3">
                                <i class="	fa fa-truck h4 mb-0 text-custom"></i>
                                <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Entrega Península</a></h6>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 pt-2">
                            <div class="media align-items-center rounded shadow p-3">
                                <i class="fa fa-image h4 mb-0 text-custom"></i>
                                <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Lifestyle</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--enr row-->
        <br>
        <hr>
    </div>
    <!--tarjetitas-->
    <div class="container pt-2 pb-5" style="background-color: #eee;">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
                <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3><span>Preguntas </span> Frecuentes</h3>
                    <p>Hemos creado esta sección para responder vuestras preguntas más solicitadas por la comunidad y de esta manera que no tengais dudas de nuestra parte.</p>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- FAQ Area-->
            <div class="col-12 col-sm-10 col-lg-8">
                <div class="accordion faq-accordian" id="faqAccordion">
                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">¿Dónde nos encontramos?<span class="lni-chevron-up"></span></h6>
                        </div>
                        <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>Nuestra empresa se encuentra entre Pinto y Valdemoro como aquel que dice. Estamos en un almacén de pinto desde donde distribuimos nuestros pedidos.</p>
                                <p>Somos como se diría pequeños pero matones.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="card-header" id="headingTwo">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">¿Teneis garantía?<span class="lni-chevron-up"></span></h6>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>Nosotros ofrecemos garantía de 2 años para cualquiera de nuestros productos vendidos.</p>
                                <p>A excepción de los componentes de las bicis los cuales tienen garantía de por vida, la cual podréis tramitar en nuestra tienda física.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="card-header" id="headingThree">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">¿Contactar con nosostros?<span class="lni-chevron-up"></span></h6>
                        </div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>Podeis contactar con nostros vía telefónica en la cual te daremos especial atención a tus dudas o bien puedes acercarte a nuestra tienda física en la calle <b> Avenida del Bloste, local 45</b> en la que encontrarás a los mejores profesionales del mundo del ciclismo.</p>
                                <p>Alberto, te seguimos de cerca. Estás Advertido.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <hr>
    </div>
    <div class="container ml-4" style="background-color: #eee;">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
                <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3><span>Puedes </span> encontrarnos</h3>
                    <p>Avenida del Bloste, local 45, Pinto, Madrid</p>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <br>
        <div id="map-container-google-1" class="z-depth-1-half map-container rounded" style="height: 500px;" align="center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3045.6276967421504!2d-3.701949383738727!3d40.23957937938616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd421f777d302fc9%3A0x22ff0ec055398b44!2sAv.%20de%20Espa%C3%B1a%2C%205%2C%2028320%20Pinto%2C%20Madrid!5e0!3m2!1ses!2ses!4v1651582937322!5m2!1ses!2ses" width="80%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <?php include './elementosVisuales/footer.php'; ?>
</body>

</html>