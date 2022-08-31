<!doctype html>
<html lang="zh-TW">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

    <title>PLANTS</title>
</head>

<body>
    <section id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#"><img src="./img/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            植物
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">室內植物</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">室外植物</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">園藝用品</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">肥料</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">交流區</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">購物車</a>
                    </li>
                    <li class="nav-item ml-5">
                        <a class="nav-link" href="#">登入</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">註冊</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">登出</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <section id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block  text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h3>活動資訊</h3>
                                    </button>
                                </h2>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h3>植物</h3>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <table class="table text-center">
                                        <tbody>
                                            <tr>
                                                <td><a href="">室內植物</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="">室外植物</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h3>園藝用品</h3>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <table class="table text-center">
                                        <tbody>
                                            <tr>
                                                <td><a href="#">鋤/耙/五金類</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">園藝鏟子/農用鏟子</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">除草叉/拔草器</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">園藝剪具/修枝剪</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">工具收納袋/包</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <h3>肥料</h3>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    <table class="table text-center">
                                        <tbody>
                                            <tr>
                                                <td><a href="#">有機肥料</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">化學肥料</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">天然介質</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/activity1.jpg" class="d-block" alt="activity1">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/activity2.jpg" class="d-block" alt="activity2">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/activity3.jpg" class="d-block" alt="activity3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                    <div id="diary">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>