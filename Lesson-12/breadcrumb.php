<?php
$level1Open = "";
$level2Open = "";
if (isset($_GET['level']) && isset($_GET['classid'])) {
    //選擇第一層類別
    $SQLstring = sprintf("SELECT * FROM pyclass WHERE level = %d AND classid = %d", $_GET['level'], $_GET['classid']);
    $classid_rs = $link->query($SQLstring);
    $data = $classid_rs->fetch();
    $level1Cname = $data['cname'];
    $level1Open = '<li class="breadcrumb-item active" aria-current="page">' . $level1Cname . '</li>';
} elseif (isset($_GET['classid'])) {
    //選擇第二層類別
    $SQLstring = sprintf("SELECT * FROM pyclass WHERE level = 2 AND classid = %d", $_GET['classid']);
    $classid_rs = $link->query($SQLstring);
    $data = $classid_rs->fetch();
    $level2Cname = $data['cname'];
    $level2Uplink = $data['uplink'];
    $level2Open = '<li class="breadcrumb-item active" aria-current = "page">' . $level2Cname . '</li>';
    //需加處理上一層
    $SQLstring = sprintf("SELECT * FROM pyclass WHERE level = 1 AND classid = %d", $level2Uplink);
    $classid_rs = $link->query($SQLstring);
    $data = $classid_rs->fetch();
    $level1Cname = $data['cname'];
    $level1 = $data['level'];
    $level1Open = '<li class="breadcrumb-item"><a href="drugstore.php?classid=' . $level2Uplink . '&level='.$level1.'">' . $level1Cname . '</a></li>';
}
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index_s01.php">首頁</a></li>
        <?php echo $level1Open . $level2Open; ?>
    </ol>
</nav>