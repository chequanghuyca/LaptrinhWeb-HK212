<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>ADMIN</title>
    <link href="../../../css/admin/css/bootstrap.css" rel="stylesheet" />
    <link href="../../../css/admin/css/font-awesome.css" rel="stylesheet" />
    <link href="../../../css/admin/css/custom-styles.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../../../project-web/trang-chinh/"><strong style = "margin-left: 40px;">BULL STORE</strong></a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> C??i ?????t</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../../../../project-web/tai-khoan/dang-xuat.php"><i class="fa fa-sign-out fa-fw"></i> ????ng xu???t</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li>
                        <a href="../thong-ke/thong-ke-list.php"><i class="fa fa-dashboard"></i>TRANG CH???</a>
                    </li>
                    <li>
                        <a href="../loai-hang/loai-hang-list.php"><i class="fa fa-list-alt" aria-hidden="true"></i>LO???I H??NG</a>
                    </li>
                    <li>
                        <a href="../hang-hoa/hang-hoa-list.php"><i class="fa fa-qrcode"></i>H??NG H??A</a>
                    </li>
                    <li>
                        <a href="../khach-hang/khach-hang-list.php"><i class="fa fa-user"></i>KH??CH H??NG</a>
                    </li>
                    <li>
                        <a href="../binh-luan/binh-luan-list.php"><i class="fa fa-comment-o" aria-hidden="true"></i>B??NH LU???N</a>
                    </li>
                    <li>
                        <a href="../hoa-don/hoa-don-list.php"><i class="fa fa-edit"></i>????N H??NG</a>
                    </li>       
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
		  <div class="header"> 
                <div class="page-header">
                    <h1>QU???N L?? H??NG H??A</h1>
                    <p>D?????i ????y l?? danh s??ch c??c kh??ch h??ng ???? ???????c th??m v??o: </p>
                    <?php
                        require_once ('../../dao/khach-hang.php');
                        $items = khach_hang_select_all();
                    ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>T??N ????NG NH???P</th>
                                    <th>H??? V?? T??N</th>
                                    <th>M???T KH???U</th>
                                    <th>EMAIL</th>
                                    <th>?????A CH???</th>
                                    <th>VAI TR??</th>
                                    <th>H??NH ?????NG</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($items as $item){ 
                                    extract($item);
                                ?> 
                                    <tr>
                                        <td><?=$ma_kh?></td>
                                        <td><?=$ho_ten?></td>
                                        <td><?=$mat_khau?></td>
                                        <td><?=$email?></td>
                                        <td><?=$dia_chi?></td>
                                        <td><?php if($vai_tro == 0){
                                            echo "Kh??ch h??ng";
                                        }else{
                                            echo "Admin";
                                        } ?></td>
                                        <td> 
                                            <a href="khach-hang-update.php?ma_kh=<?=$ma_kh?>"><button class="btn btn-primary">S???a</button></a>
                                            <a onclick = "return confirm('B???n c?? ch???c ch???n mu???n x??a ?')" href="khach-hang-delete.php?ma_kh=<?=$ma_kh?>"><button class="btn btn-danger">X??a</button></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <a href="../khach-hang/khach-hang-new.php"><button class="btn btn-danger">Th??m m???i</button></a>
                </div>
		    </div>
        </div>
    </div>
    <script src="../../../css/admin/js/jquery-1.10.2.js"></script>  <!-- Bootstrap Js -->
    <script src="../../../css/admin/js/bootstrap.min.js"></script>  <!-- Metis Menu Js -->
    <script src="../../../css/admin/js/jquery.metisMenu.js"></script>   <!-- Custom Js -->
    <script src="../../../css/admin/js/custom-scripts.js"></script>
</body>
</html>
