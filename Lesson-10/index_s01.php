<!doctype html>
<html lang="zh-TW">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./website_s01.css">

    <title>My電商藥粧</title>
</head>

<body>
    <section id="header">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <a class="navbar-brand" href="#"><img src="./images/logo.jpg" alt="電商藥粧" class="img-fluid rounded-circle"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">會員註冊</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">會員登入</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">會員中心</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">最新活動</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">查訂單</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">折價券</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">購物車</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            企業專區
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">認識企業文化</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">全台門市資訊</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">供應商報價服務</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">加盟專區</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">投資人專區</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <section id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="sidebar">
                        <form name="search" action="" method="get">
                            <div class="input-group">
                                <input type="text" name="search_name" class="form-control" placeholder="Search...">
                                <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fas fa-search fa-lg"></i></button></span>
                            </div>
                        </form>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: x-large;">
                                        <i class="fas fa-desktop fa-lg fa-fw"></i>彩妝專區
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td><em class="fa fa-edit"></em><a href="">隔離/防曬/飾底乳</a></td>
                                            </tr>
                                            <tr>
                                                <td><em class="fa fa-edit"></em><a href="">BB霜/CC霜</a></td>
                                            </tr>
                                            <tr>
                                                <td><em class="fa fa-edit"></em><a href="">粉餅(蕊)/蜜粉/蜜粉/海綿</a></td>
                                            </tr>
                                            <tr>
                                                <td><em class="fa fa-edit"></em><a href="">遮瑕/毛孔/打亮</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: x-large;">
                                        <i class="fas fa-paw fa-lg fa-fw"></i>臉部保養
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td><em class="fa fa-edit"></em><a href="">天然成分調理專區</a></td>
                                            </tr>
                                            <tr>
                                                <td><em class="fa fa-edit"></em><a href="">婦嬰,敏感受損調理</a></td>
                                            </tr>
                                            <tr>
                                                <td><em class="fa fa-edit"></em><a href="">Neogen</a></td>
                                            </tr>
                                            <tr>
                                                <td><em class="fa fa-edit"></em><a href="">萊雅</a></td>
                                            </tr>
                                            <tr>
                                                <td><em class="fa fa-edit"></em><a href="">肌研</a></td>
                                            </tr>
                                            <tr>
                                                <td><em class="fa fa-edit"></em><a href="">露得清</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: x-large;">
                                        <i class="fas fa-user fa-lg fa-fw"></i>美膚保養
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td><em class="fa fa-edit"></em><a href="">按摩油</a></td>
                                            </tr>
                                            <tr>
                                                <td><em class="fa fa-edit"></em><a href="">纖體保養</a></td>
                                            </tr>
                                            <tr>
                                                <td><em class="fa fa-edit"></em><a href="">身體香氛</a></td>
                                            </tr>
                                            <tr>
                                                <td><em class="fa fa-edit"></em><a href="">身體防曬</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./product_img/pic1.jpg" class="d-block w-100" alt="慶祝媽媽節特惠方案">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>慶祝媽媽節特惠方案</h5>
                                    <p>為感恩全天下辛苦的母親節特別推出一系列優惠專案</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./product_img/pic2.jpg" class="d-block w-100" alt="建康養生的好幫手">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>建康養生的好幫手</h5>
                                    <p>華陀扶元堂養生飲品系列3折優惠，歡迎選購</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./product_img/pic3.jpg" class="d-block w-100" alt="頂級保濕面膜，臉部滋養的好幫手">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>頂級保濕面膜，臉部滋養的好幫手</h5>
                                    <p>頂級保濕面膜，臉部滋養的好幫手</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                    <hr>
                    <div class="row text-center">
                        <div class="col-md-3">
                            <div class="card">
                                <img src="product_img/pic0101.jpg" class="card-img-top" alt="台大葉黃素膠囊">
                                <div class="card-body">
                                    <h5 class="card-title">台大葉黃素膠囊</h5>
                                    <p class="card-text">游離型軟膠囊，採用金盞花植物萃取含20﹪葉黃素，調節生理機能，營養補給，健康維持</p>
                                    <p class="card-text">NT3600</p>
                                    <a href="#" class="btn btn-primary">更多資訊</a>
                                    <a href="#" class="btn btn-success">放購物車</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="product_img/pic0102.jpg" class="card-img-top" alt="黃金燕窩生物纖維面膜">
                                <div class="card-body">
                                    <h5 class="card-title">黃金燕窩生物纖維面膜</h5>
                                    <p class="card-text">手術後保養，約會前急救聖品，媲美專櫃等級！網友推薦最新使用，肌膚很水嫩，感覺很透亮。</p>
                                    <p class="card-text">NT1200</p>
                                    <a href="#" class="btn btn-primary">更多資訊</a>
                                    <a href="#" class="btn btn-success">放購物車</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="product_img/pic0103.jpg" class="card-img-top" alt="MIZON 蝸牛全效活膚霜">
                                <div class="card-body">
                                    <h5 class="card-title">MIZON 蝸牛全效活膚霜</h5>
                                    <p class="card-text">無論混合肌、油性肌、痘痘肌、乾性肌、過敏肌等《任何膚質適用》，是修護型保養品！！</p>
                                    <p class="card-text">NT690</p>
                                    <a href="#" class="btn btn-primary">更多資訊</a>
                                    <a href="#" class="btn btn-success">放購物車</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="product_img/pic0104.jpg" class="card-img-top" alt="星期四農莊迷迭香精油">
                                <div class="card-body">
                                    <h5 class="card-title">星期四農莊迷迭香精油</h5>
                                    <p class="card-text">迷迭香精油+薰衣草精油(大自然植物舒眠系列)！！</p>
                                    <p class="card-text">NT1269</p>
                                    <a href="#" class="btn btn-primary">更多資訊</a>
                                    <a href="#" class="btn btn-success">放購物車</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-3">
                            <div class="card">
                                <img src="product_img/pic0201.jpg" class="card-img-top" alt="頂級金貝貝棉柔魔術氈">
                                <div class="card-body">
                                    <h5 class="card-title">頂級金貝貝棉柔魔術氈</h5>
                                    <p class="card-text">金貝貝棉柔魔術氈XXL27+1片【6包/箱】，適用15公斤以上</p>
                                    <p class="card-text">NT1560</p>
                                    <a href="#" class="btn btn-primary">更多資訊</a>
                                    <a href="#" class="btn btn-success">放購物車</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="product_img/pic0202.jpg" class="card-img-top" alt="櫻桃肌粉餅撲角型-3入">
                                <div class="card-body">
                                    <h5 class="card-title">櫻桃肌粉餅撲角型-3入</h5>
                                    <p class="card-text">【IH】櫻桃肌粉餅撲角型-3入 CB-3204，乾濕兩用的粉餅專用粉撲。</p>
                                    <p class="card-text">NT119</p>
                                    <a href="#" class="btn btn-primary">更多資訊</a>
                                    <a href="#" class="btn btn-success">放購物車</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="product_img/pic0203.jpg" class="card-img-top" alt="NOYL化妝刷套裝組">
                                <div class="card-body">
                                    <h5 class="card-title">NOYL化妝刷套裝組</h5>
                                    <p class="card-text">NOYL化妝刷套裝組(附收納袋) NY-369，保存期限：7年</p>
                                    <p class="card-text">NT369</p>
                                    <a href="#" class="btn btn-primary">更多資訊</a>
                                    <a href="#" class="btn btn-success">放購物車</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="product_img/pic0204.jpg" class="card-img-top" alt="3D蘋果光氣墊粉餅">
                                <div class="card-body">
                                    <h5 class="card-title">3D蘋果光氣墊粉餅</h5>
                                    <p class="card-text">【Keep in touch】3D蘋果光氣墊粉餅，15g+15g(買一送一補充蕊)。</p>
                                    <p class="card-text">NT1680</p>
                                    <a href="#" class="btn btn-primary">更多資訊</a>
                                    <a href="#" class="btn btn-success">放購物車</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-3">
                            <div class="card">
                                <img src="product_img/pic0301.jpg" class="card-img-top" alt="EVE'S 魔術性感美唇膏">
                                <div class="card-body">
                                    <h5 class="card-title">EVE'S 魔術性感美唇膏</h5>
                                    <p class="card-text">魔術性感美唇膏，不沾杯超持久唇色，想不到的魔術效果持續久久。</p>
                                    <p class="card-text">NT580</p>
                                    <a href="#" class="btn btn-primary">更多資訊</a>
                                    <a href="#" class="btn btn-success">放購物車</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="product_img/pic0302.jpg" class="card-img-top" alt="DMC三合一精華霜">
                                <div class="card-body">
                                    <h5 class="card-title">DMC三合一精華霜</h5>
                                    <p class="card-text">DMC 欣蘭 水透透三合一凝凍 洗卸/面膜/精華霜 150g。</p>
                                    <p class="card-text">NT850</p>
                                    <a href="#" class="btn btn-primary">更多資訊</a>
                                    <a href="#" class="btn btn-success">放購物車</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="product_img/pic0303.jpg" class="card-img-top" alt="森下仁丹整晚貼眼膜">
                                <div class="card-body">
                                    <h5 class="card-title">森下仁丹整晚貼眼膜</h5>
                                    <p class="card-text">日本森下仁丹整晚貼眼膜 5對/盒，長效整晚貼，慢速釋放保濕因子。</p>
                                    <p class="card-text">NT300</p>
                                    <a href="#" class="btn btn-primary">更多資訊</a>
                                    <a href="#" class="btn btn-success">放購物車</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="product_img/pic0304.jpg" class="card-img-top" alt="【美爽爽】泡泡染">
                                <div class="card-body">
                                    <h5 class="card-title">【美爽爽】泡泡染</h5>
                                    <p class="card-text">【美爽爽】泡泡染BUBBLE COLOR系列，任意顏色，買五送二。</p>
                                    <p class="card-text">NT3250</p>
                                    <a href="#" class="btn btn-primary">更多資訊</a>
                                    <a href="#" class="btn btn-success">放購物車</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <nav aria-label="...">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="scontent">
        <div class="container-fluid">
            <div id="aboutme" class="row text-center">
                <div class="col-md-2"><img src="./images/Qrcode02.png" alt="Qrcode02" class="img-fluid mx-auto"></div>
                <div class="col-md-2">
                    <i class="fas fa-thumbs-up fa-5x"></i>
                    <h3>關於我們</h3>
                    企業官網<br>
                    招商專區<br>
                    人才招募<br>
                </div>
                <div class="col-md-2">
                    <i class="fas fa-truck fa-5x"></i>
                    <h3>特色服務</h3>
                    大宗採購方案<br>
                    直配大陸<br>
                </div>
                <div class="col-md-2">
                    <i class="fas fa-users fa-5x"></i>
                    <h3>客戶服務</h3>
                    訂單/配送進度查詢<br>
                    取消訂單/退貨<br>
                    更改配送地址<br>
                    追蹤清單<br>
                    12H速達服務<br>
                    折價券說明<br>
                </div>
                <div class="col-md-2">
                    <i class="fas fa-comments-dollar fa-5x"></i>
                    <h3>好康大放送</h3>
                    新會員禮包<br>
                    活動得獎名單<br>
                </div>
                <div class="col-md-2">
                    <i class="fas fa-question fa-5x"></i>
                    <h3>FAQ 常見問題</h3>
                    系統使用問題<br>
                    產品問題諮詢<br>
                    大宗採購問題<br>
                    聯絡我們<br>
                </div>
            </div>
        </div>
    </section>
    <section id="footer">
        <div class="container-fluid">
            <div id="last-data" class="row text-center">
                <div class="col-md-12">
                    <h6>中彰投分署科技股份有限公司 40767台中市西屯區工業區一路100號 電話：04-23592181 免付費電話：0800-777888</h6>
                    <h6>企業通過ISO/IEC27001認證，食品業者登錄字號：A-127360000-00000-0</h6>
                    <h6>版權所有 copyright © 2017 WDA.com Inc. All Rights Reserved.</h6>
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