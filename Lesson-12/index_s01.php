<?php require_once("./connections/conn_db.php"); ?>
<?php (!isset($_SESSION)) ? session_start() : ""; ?>
<?php require_once('php_lib.php'); ?>
<!doctype html>
<html lang="zh-TW">

<head>
    <!-- 引入網頁標頭 -->
    <?php require_once("headfile.php"); ?>
</head>

<body>
    <section id="header">
        <!-- 引入導覽列 -->
        <?php require_once("navbar.php"); ?>
    </section>
    <section id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <!-- 產品類別sidebar -->
                    <?php require_once("sidebar.php"); ?>
                    <!-- 熱銷商品sidebar -->
                    <?php require_once("hot.php"); ?>
                </div>
                <div class="col-md-10">
                    <!-- carousel廣告輪播 -->
                    <?php require_once("carousel.php"); ?>
                    <hr>
                    <!-- product藥粧商品 -->
                    <?php require_once("product_list.php"); ?>
                </div>
            </div>

        </div>
    </section>
    <section id="scontent">
        <!-- 服務說明 -->
        <?php require_once("scontent.php"); ?>
    </section>
    <section id="footer">
        <!-- 聯絡資訊 -->
        <?php require_once("footer.php"); ?>
    </section>
        <!-- javascript -->
    <?php require_once("jsfile.php"); ?>


</body>

</html>