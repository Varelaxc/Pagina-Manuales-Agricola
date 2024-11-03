<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion Agricola</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg nav-size bg-azul-unam sticky-top" data-bs-theme="dark">
        <div class="container">
            <h1 class="navbar-brand">Agricola</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#principal">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aplicacion">Aplicacion
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#equipo">Equipo</a>
                    </li>
                </ul>
            </div>
            <div>
                <img src="./imagenes/logo.png" height="85">

            </div>
        </div>
    </nav>

    <div class="anchor" id="principal"></div>

    <div class="container mt-4 me-5">
        <div class="row">
            <div class="col-sm-12 col-md-6 text-center align-self-center">
                Ingeniería Agrícola es una profesión con un alto nivel académico y práctico encaminado a solucionar
                problemas en la producción, manejo y comercialización de cultivos agrícolas, cuya orientación integral
                en las ciencias básicas, agrícolas, socioeconómicas y en la investigación permite a sus egresados
                desempeñarse con iniciativa y actitud de servicio.
                Éstos están capacitados para emplear racionalmente los recursos naturales y materiales para la
                producción agrícola, a fin de generar tecnología adecuada a nuestros recursos y cultura, con lo cual se
                pretende eliminar la dependencia tecnológica y económica del país.
            </div>
            <div class="col-sm-12 col-md-6 mt-sm-50">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="4000">
                            <img src="imagenes/slider1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="imagenes/slider2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="imagenes/slider3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>

        <div class="anchor" id="aplicacion"></div>

        <div>
            <h1>Aplicacion</h1>
            <div class="bg-primary bg-gradient text-center text-white">
                ¡REGISTRATE PARA OBTENER NUESTRA APLICACION!


            </div>

            <form class="row g-3 mt-3">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Nombre(s)</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Apellido</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">E-Mail</label>
                  <input type="text" class="form-control" id="inputAddress2">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">No.Cuenta</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Carrera</label>
                  <select id="inputState" class="form-select">
                    <option selected>...</option >
                    <option>Informatica</option>
                    <option>Agricola</option>
                    <option>Veterinaria</option>
                    <option>Administracion</option>
                  </select>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
              </form>
        </div>

        <div class="anchor" id="equipo"></div>

        <div class="mt-5">
            <h1>Equipo</h1>

            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <h3 class="mt-5">&#8226; Desarrollo y Diseño</h3>
                    <ul>
                        <li>
                            <p>Francisco Gabriel Varela Calderon</p>
                        </li>
                        <li>
                            <p>Diego Eduardo Aceved Esparza</p>
                        </li>
                        <li>
                            <p>
                                Jesus Alejandro Palma Lazcano
                            </p>
                        </li>
                        <li>
                            <p>
                                Diego Alejandro Gonzales Nery
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="col-sm-12 col-md-4">
                    <h3 class="mt-5">&#8226; Tecnologias Utilizadas</h3>
                    <ul>
                        <li>
                            <p>HTML
                            </p>
                        </li>
                        <li>
                            <p>CSS
                            </p>
                        </li>
                        <li>
                            <p>JavaScript
                            </p>
                        </li>
                        <li>
                            <p>Bootstrap
                            </p>
                        </li>
                        <li>
                            <p>JQuery
                            </p>
                        </li>
                        <li>
                            <P>SQL</P>
                        </li>
                        <li>
                            <p>Apache Cordova</p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-4">
                    <h3 class="mt-5">&#8226; Hosting</h3>
                    <ul>
                        <li>
                            Hostinger
                        </li>
                    </ul>

                </div>
            </div>


        </div>
    </div>
    <div class="container-fluid bg-azul-unam text-white text-center py-5">
        2024 UNAM. Todos los derechos reservados
    </div>

    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>