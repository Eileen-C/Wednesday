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
                    <p class="card-text">"<?php echo mb_substr($pList01_Rows['p_intro'], 0, 30, "utf-8"); ?></p>
                    <p class="card-text">NT$ <?php echo $pList01_Rows['p_price']; ?></p>
                    <a href="#" class="btn btn-primary">更多資訊</a>
                    <a href="#" class="btn btn-success">放購物車</a>
                </div>
            </div>
        </div>
        <?php if ($i % 4 == 0 || $i == $pList01->rowCount()) { ?>
        </div><?php } ?>


<?php $i++;
} ?>

<div class="row mt-2">
    <div class="col-md-12">
        <?php
        //取得目前的頁數
        if (isset($_GET['totalRows_rs'])) {
            $totalRows_rs = $_GET['totalRows_rs'];
        } else {
            $all_rs = $link->query($queryFirst);
            $totalRows_rs = $all_rs->rowCount();
        }
        $totalPages_rs = ceil($totalRows_rs / $maxRows_rs) - 1;
        //呼叫分頁功能函數
        $prev_rs = "&laquo";
        $next_rs = "&raquo;";
        $separator = "|";
        $max_links = 20;
        $page_rs = buildNavigation($pageNum_rs, $totalPages_rs, $prev_rs, $next_rs, $separator, $max_links, true, 3, "rs");
        ?>
        <nav aria-label="...">
            <ul class="pagination justify-content-center">
                <?php echo $page_rs[0] . $page_rs[1] . $page_rs[2]; ?>
            </ul>
        </nav>
    </div>
</div>