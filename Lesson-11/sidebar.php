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