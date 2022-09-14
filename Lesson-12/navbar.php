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