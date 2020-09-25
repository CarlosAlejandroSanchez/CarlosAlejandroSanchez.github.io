<?php
require_once "header.php";
if (!$loggedin) die("</div></body></html>");

echo'
    

    <script src="../js/jquery-3.4.1.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.js"></script>

</body>

</html>

';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <br>
        <h1 class="center">Decoraciones el Charlie es una empresa que se dedica a la instalación y compostura de tapicería nacida en 1995</h1>
        <br>
        <br>
        <h3 class="center">Nos respaldan más de 10 años de experiencia <br> observe algunos de nuestros trabajos!</h3>

        <div class="center">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 imgajuste" src="images/sofa.jpg" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 imgajuste" src="images/sofa2.jpg"  alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 imgajuste" src="images/carro.jpg"  alt="">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <br>
        <br>

        <h2 class="center">
            Contrate nuestro servicio ya!
        </h2>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Contratar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Contratar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Llame al 9831234567 o mándanos un correo servicios@DecoracionesElCharlie.com
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>