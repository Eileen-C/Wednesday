<?php require_once("./connections/conn_db.php"); ?>
<?php (!isset($_SESSION)) ? session_start() : ""; ?>
<?php require_once('php_lib.php'); ?>
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
            <?php
            //列出產品類別第一層
            $SQLstring = "SELECT * FROM pyclass WHERE level = 1 ORDER BY sort";
            $pyclass01 = $link->query($SQLstring);
            ?>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a href="#" id="menu" data-toggle="dropdown" class="nav-link dropdown-toggle">產品資訊</a>
                        <ul class="dropdown-menu">
                            <?php while ($pyclass01_Rows = $pyclass01->fetch()) { ?>
                                <li class="dropdown-item dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa <?php echo $pyclass01_Rows['fonticon']; ?> fa-fw"></i><?php echo $pyclass01_Rows['cname']; ?></a>
                                    <?php
                                    //列出產品類別第二層
                                    $SQLstring = sprintf("SELECT * FROM pyclass WHERE level=2 AND uplink=%d ORDER BY sort", $pyclass01_Rows['classid']);
                                    $pyclass02 = $link->query($SQLstring);
                                    ?>
                                    <ul class="dropdown-menu">
                                        <?php while ($pyclass02_Rows = $pyclass02->fetch()) { ?>
                                            <li class="dropdown-item"><em class="fa <?php echo $pyclass02_Rows['fonticon']; ?> pr-2"></em><a href="#"><?php echo $pyclass02_Rows['cname']; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
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
                    <?php
                    //列出產品類別第一層
                    $SQLstring = "SELECT * FROM pyclass WHERE level = 1 ORDER BY sort";
                    $pyclass01 = $link->query($SQLstring);
                    $i = 1; //控制編號順序的變數
                    ?>
                    <div class="accordion" id="accordionExample">
                        <?php while ($pyclass01_Rows = $pyclass01->fetch()) { ?>
                            <div class="card">
                                <div class="card-header" id="headingOne<?php echo $i; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $i; ?>" style="font-size: x-large;">
                                            <i class="fas <?php echo $pyclass01_Rows['fonticon']; ?> fa-lg fa-fw"></i><?php echo $pyclass01_Rows['cname']; ?>
                                        </button>
                                    </h2>
                                </div>

                                <?php
                                //列出產品類別第二層
                                $SQLstring = sprintf("SELECT * FROM pyclass WHERE level=2 AND uplink=%d ORDER BY sort", $pyclass01_Rows['classid']);
                                $pyclass02 = $link->query($SQLstring);
                                ?>

                                <div id="collapseOne<?php echo $i; ?>" class="collapse<?php echo ($i == 1) ? 'show' : ''; ?>" aria-labelledby="headingOne<?php echo $i; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <table class="table">
                                            <tbody>
                                                <?php while ($pyclass02_Rows = $pyclass02->fetch()) { ?>
                                                    <tr>
                                                        <td><em class="fa <?php echo $pyclass02_Rows['fonticon']; ?> fa-fw pr-2"></em><a href="#"><?php echo $pyclass02_Rows['cname']; ?></a></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php $i++;
                        } ?>

                        <?php while ($pyclass01_Rows = $pyclass01->fetch()) { ?>
                            <div class="card">
                                <div class="card-header" id="headingTwo<?php echo $i; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo<?php echo $i; ?>" aria-expanded="false" aria-controls="collapseTwo<?php echo $i; ?>" style="font-size: x-large;">
                                            <i class="fas <?php echo $pyclass01_Rows['fonticon']; ?> fa-lg fa-fw"></i><?php echo $pyclass01_Rows['cname']; ?>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo<?php echo $i; ?>" class="collapse<?php echo ($i == 2) ? 'show' : ''; ?>" aria-labelledby="headingTwo<?php echo $i; ?>" data-parent="#accordionExample">
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
                        <?php $i++;
                        } ?>

                        <?php while ($pyclass01_Rows = $pyclass01->fetch()) { ?>
                            <div class="card">
                                <div class="card-header" id="headingThree<?php echo $i; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree<?php echo $i; ?>" aria-expanded="false" aria-controls="collapseThree<?php echo $i; ?>" style="font-size: x-large;">
                                            <i class="fas <?php echo $pyclass01_Rows['fonticon']; ?> fa-lg fa-fw"></i><?php echo $pyclass01_Rows['cname']; ?>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree<?php echo $i; ?>" class="collapse<?php echo ($i == 3) ? 'show' : ''; ?>" aria-labelledby="headingThree<?php echo $i; ?>" data-parent="#accordionExample">
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
                        <?php $i++;
                        } ?>
                    </div>
                    <?php
                    //建立熱銷商品查詢
                    $SQLstring = "SELECT * FROM hot, product, product_img WHERE hot.p_id = product_img.p_id AND hot.p_id = product.p_id AND product_img.sort=1 ORDER BY h_sort";
                    $hot = $link->query($SQLstring);
                    ?>
                    <div class="card text-center mt-3" style="border: none;">
                        <div class="card-body">
                            <h3 class="card-title"><i class="fas fa-bomb"></i>站長推薦，熱銷商品</h3>
                        </div>
                        <?php while ($data = $hot->fetch()) { ?>
                            <img src="./product_img/<?php echo $data['img_file'] ?>" class="card-img-top" alt="HOT<?php echo $data['h_sort']; ?>" title="<?php echo $data['p_name']; ?>">
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-10">
                    <?php
                    //建立 carousel廣告輪播查詢
                    $SQLstring = "SELECT * FROM carousel WHERE caro_online=1 ORDER BY caro_sort";
                    $carousel = $link->query($SQLstring);
                    $i = 0; //控制active啟動順序
                    ?>
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php for ($i = 0; $i < $carousel->rowCount(); $i++) { ?>
                                <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $i; ?>" class="<?php echo activeShow($i, 0) ?>"></li>
                            <?php } ?>

                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <?php
                            $i = 0;
                            while ($data = $carousel->fetch()) { ?>

                                <div class="carousel-item <?php echo activeShow($i, 0) ?>">
                                    <img src="./product_img/<?php echo $data['caro_pic']; ?>" class="d-block w-100" alt="<?php echo $data['caro_title']; ?>">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><?php echo $data['caro_title']; ?></h5>
                                        <p><?php echo $data['caro_content']; ?></p>
                                    </div>
                                </div>
                            <?php $i++;
                            } ?>
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
                    <?php
                    //建立product藥粧商品查詢
                    $maxRows_rs = 12; //分頁設定筆數
                    $pageNum_rs = 0; //起始頁為第0頁
                    if (isset($_GET['pageNum_rs'])) {
                        $pageNum_rs = $_GET['pageNum_rs'];
                    }
                    $startRows_rs = $pageNum_rs * $maxRows_rs;

                    //列出產品product資料查詢
                    $queryFirst = sprintf("SELECT * FROM product, product_img WHERE p_open = 1 AND product_img.sort=1 AND product.p_id = product_img.p_id ORDER BY product.p_id DESC");
                    $query = sprintf("%s LIMIT %d, %d", $queryFirst, $startRows_rs, $maxRows_rs);
                    $pList01 = $link->query($query);

                    $i = 1; //控制每列row產生
                    ?>
                    <?php while ($pList01_Rows = $pList01->fetch()) { ?>
                        <?php if ($i % 4 == 1) { ?><div class="row text-center"><?php } ?>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="product_img/<?php echo $pList01_Rows['img_file']; ?>" class="card-img-top" alt="<?php echo $pList01_Rows['p_name']; ?>" title="<?php echo $pList01_Rows['p_name']; ?>">
                                    <div class="card-body">
                                        <h5 class="card-title">"<?php echo $pList01_Rows['p_name']; ?></h5>
                                        <p class="card-text">"<?php echo mb_substr($pList01_Rows['p_intro'],0 ,30, "utf-8"); ?></p>
                                        <p class="card-text">NT$ <?php echo $pList01_Rows['p_price']; ?></p>
                                        <a href="#" class="btn btn-primary">更多資訊</a>
                                        <a href="#" class="btn btn-success">放購物車</a>
                                    </div>
                                </div>
                            </div>
                            <?php if($i % 4 == 0 || $i == $pList01 -> rowCount()) {?></div><?php } ?>
                            
                        
                        <?php $i++; } ?>

<div class="row mt-2">
    <div class="col-md-12">
        <?php 
        //取得目前的頁數
        if(isset($_GET['totalRows_rs'])){
            $totalRows_rs = $_GET['totalRows_rs'];
        }else{
            $all_rs = $link -> query($queryFirst);
            $totalRows_rs = $all_rs -> rowCount();
        }
        $totalPages_rs = ceil($totalRows_rs/$maxRows_rs)-1;
        //呼叫分頁功能函數
        $prev_rs = "&laquo"; $next_rs = "&raquo;"; $separator = "|";
        $max_links = 20;
        $page_rs = buildNavigation($pageNum_rs,$totalPages_rs,$prev_rs, $next_rs, $separator, $max_links, true, 3, "rs");
        ?>
        <nav aria-label="...">
            <ul class="pagination justify-content-center">
                <?php echo $page_rs[0] . $page_rs[1] . $page_rs[2] ; ?>
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
    <script type="text/javascript">
        $(function() {
            $('.dropdown-submenu > a').on("click", function(e) {
                var submenu = $(this);
                $('.dropdown-submenu .dropdown-menu').removeClass('show');
                submenu.next('.dropdown-menu').addClass('show');
                e.stopPropagation();
            });
            $('.dropdown').on("hidden.bs.dropdown", function() {
                //hide any open menus when parent closes
                $('.dropdown-menu.show').removeClass('show');
            });
        });
    </script>

</body>

</html>
<?php
function activeShow($num, $chkPoint)
{
    return (($num == $chkPoint) ? "active" : "");
}
?>