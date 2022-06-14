<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../project-web/css/chi-tiet-sp/products.css">
    <link rel="stylesheet" href="../../project-web/css/tin-tuc/tintuc.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../project-web/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../project-web/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Tin tức</title>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../../project-web/css/chi-tiet-sp/plugin/js/owl.carousel.min.js"></script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <div class="login">
                    <!-- CODE CHECK ĐĂNG NHẬP -->
                    <?php 
                        session_start();
                        if(!isset($_SESSION['user'])){
                    ?>
                        <a href="../../project-web/tai-khoan/dang-nhap.php"><p><strong>ĐĂNG NHẬP / ĐĂNG KÍ</strong></p></a> 
                            <?php }else{ ?>
                        <a href="../../project-web/tai-khoan/thong-tin-tk.php"><p><strong>XIN CHÀO <?=$_SESSION['user']['ho_ten']?></strong></p></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <div class="logo">
                    <a href="index.php">
                        <img src="../../project-web/css/trang-chu/img/logo.png " alt="logo BULL STORE">
                    </a>
                </div>
            </div>
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <div class="giohang" style = "position: reletive;">
                    <?php
                        $sll = 0;
                        if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $item){
                                extract($item);
                                $sll+= $sl;
                            }
                        }
                    ?>
                    <span style = "position: absolute;padding:3px 8px;background-color:#fff;border-radius:50px;left:295px;top:25px;" ><?=$sll?></span>
                    <ul style= "list-style: none;">
                        <li>
                            <i class="fa fa-search" style="font-size:20px;color:rgb(226, 226, 226)"></i>
                        </li>
                        <li>
                            <p style="color: rgb(212, 212, 212);font-size: 14px;">GIỎ HÀNG</p>
                        </li>
                        <a href="danh-sach-gio-hang.php">
                            <li><i class="fa fa-shopping-basket" style="font-size:28px;color:rgb(255, 255, 255)"></i></li>
                        </a> 
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background-color: Tomato;">
                <div class="nav" style="background-color: Tomato; ">
                    <ul>
                        <li><a href="index.php"><h5 style="color:White;">TRANG CHỦ</h5></a></li>
                        <li><a href="danh-sach-sp.php"><h5 style="color:White;">SẢN PHẨM</h5></a></li>
                        <li><a href="gioi-thieu.php"><h5 style="color:White;">GIỚI THIỆU</h5></a></li>
                        <li><a href="tin-tuc.php"><h5 style="color:White;">TIN TỨC</h5></a></li>
                        <li><a href="lien-he.php"><h5 style="color:White;">LIÊN HỆ </h5></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="serch">
                        <input type="text" placeholder="Tìm kiếm...">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="row" style="margin-top: 50px;">
                    <div class="baiviet">
                        <h5>BÀI VIẾT MỚI</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="out">
                        <table>
                            <tr>
                                <td>
                                    <a href="https://authentic-shoes.com/blogs/news/review-chi-tiet-dr-martens-king-nerd-doi-giay-cua-nhung-vi-vua" target="blank">
                                        <img src="https://file.hstatic.net/1000282067/article/thiet_ke_chua_co_ten__7__2a289f9372534ed496bb7deacfe9efb1_large.png" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="https://authentic-shoes.com/blogs/news/review-chi-tiet-dr-martens-king-nerd-doi-giay-cua-nhung-vi-vua" target="blank">
                                        <p style="color:Black;">Nike Air Max làm từ tảo biển tuy xấu nhưng vẫn rất bán hết sạch </p>
                                    </a>
                                </td> 
                            </tr>
                            <tr>
                                <td>
                                    <a href="https://authentic-shoes.com/blogs/news/nguon-goc-cua-giay-tennis-va-huong-dan-cach-chon-giay-tennis-phu-hop-nhat" target="blank">
                                        <img src="https://file.hstatic.net/1000282067/article/rafael-nadal-us-open_54e6cdbecfea44569fad64fc8f0dffa2_large.jpg" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="https://authentic-shoes.com/blogs/news/nguon-goc-cua-giay-tennis-va-huong-dan-cach-chon-giay-tennis-phu-hop-nhat" target="blank">
                                        <p style="color:Black;">Nguồn gốc của giày tennis và hướng dẫn cách chọn giày tennis phù hợp nhất</p>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="https://authentic-shoes.com/blogs/news/12-phoi-mau-new-balance-550-dep-nhat-hien-nay-phan-2" target="blank">
                                        <img src="https://file.hstatic.net/1000282067/article/logo__4__0926abc96432409096883cb1b3fad6b3_large.png" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="https://authentic-shoes.com/blogs/news/12-phoi-mau-new-balance-550-dep-nhat-hien-nay-phan-2" target="blank">
                                        <p style="color:Black;">12 phối màu New Balance 550 đẹp nhất hiện nay (Phần 2)</p>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="https://authentic-shoes.com/blogs/news/12-phoi-mau-new-balance-550-dep-nhat-hien-nay-phan-1" target="blank">
                                        <img src="https://file.hstatic.net/1000282067/article/logo__3__614d2ba03110485e857cbf9f5781a168_large.png" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="https://authentic-shoes.com/blogs/news/12-phoi-mau-new-balance-550-dep-nhat-hien-nay-phan-1" target="blank">
                                        <p style="color:Black;">12 phối màu New Balance 550 đẹp nhất hiện nay (Phần 1)</p>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="https://authentic-shoes.com/blogs/news/nhung-doi-giay-co-cong-nghe-zoom-tot-nhat-hien-nay" target="blank">
                                        <img src="https://file.hstatic.net/1000282067/article/thiet_ke_khong_ten_da40816c8a4f484ea0516de9d154902a_large.png" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="https://authentic-shoes.com/blogs/news/nhung-doi-giay-co-cong-nghe-zoom-tot-nhat-hien-nay" target="blank">
                                        <p style="color:Black;">Những đôi giày có công nghệ Zoom tốt nhất hiện nay</p>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row">
                    <div class="card" style="width: 14rem;">
                        <a href="https://authentic-shoes.com/blogs/news/khong-ngung-phan-xet-ngoc-trinh-dao-nhai-lieu-ban-da-phan-biet-duoc-fake-va-bootleg" target="blank">
                            <img src="https://file.hstatic.net/1000282067/file/ngoc-trinh-bi-vo-thang-mat-03-16_c1923c66dd6c479bb4e0db5f9ae98031_2048x2048.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body" style=" padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 10px; ">
                            <a href="https://authentic-shoes.com/blogs/news/khong-ngung-phan-xet-ngoc-trinh-dao-nhai-lieu-ban-da-phan-biet-duoc-fake-va-bootleg" target="blank">
                                <p class="card-text" style="color:Black;">Không ngừng phán xét Ngọc Trinh dùng hàng Fake, liệu bạn đã phân biệt được Fake và Bootleg?</p>
                            </a>
                                <p class="gach"></p>
                                <p class="nho" style="color:Black;">Chắc hẳn các bạn không xa lạ gì câu chuyện chiếc váy tím của Ngọc Trinh được cho là đạo nhái thiết kế của thương hiệu REN cho BST mới mang tên Kendall x Kylie Collection.</p>  
                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <a href="https://authentic-shoes.com/blogs/news/10-dieu-thu-vi-co-the-ban-chua-biet-ve-thuong-hieu-goyard-phan-2" target="blank">
                            <img src="https://file.hstatic.net/1000282067/article/logo__2__5a4a0369b88c442aa8c734cdddd15d8f_large.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body" style=" padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 10px; ">
                            <a href="https://authentic-shoes.com/blogs/news/10-dieu-thu-vi-co-the-ban-chua-biet-ve-thuong-hieu-goyard-phan-2" target="blank">
                                <p class="card-text" style="color:Black;">10 điều thú vị có thể bạn chưa biết về thương hiệu Goyard (Phần 2)</p>
                            </a>
                                <p class="gach"></p>
                                <p class="nho" style="color:Black;">Tiếp tục với blog mười điều thú vị có thể bạn chưa biết về thương hiệu Goyard. Hôm nay, bọn mình sẽ kể tiếp cho các bạn những chi tiết đầy đặc biệt về thương hiệu đặc biệt đến từ Pháp này nhé.</p>  
                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <a href="https://authentic-shoes.com/blogs/news/10-dieu-thu-vi-co-the-ban-chua-biet-ve-thuong-hieu-goyard-phan-1" target="blank">
                            <img src="https://file.hstatic.net/1000282067/article/logo__1__36096fc3ceae465db9009fcb2a7ba468_large.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body" style=" padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 10px; ">
                            <a href="https://authentic-shoes.com/blogs/news/10-dieu-thu-vi-co-the-ban-chua-biet-ve-thuong-hieu-goyard-phan-1" target="blank">
                                <p class="card-text" style="color:Black;">10 điều thú vị có thể bạn chưa biết về thương hiệu Goyard (Phần 1)</p>
                            </a>
                                <p class="gach"></p>
                                <p class="nho" style="color:Black;">Tất cả các thương hiệu xa xỉ đều rao giảng về sự quý hiếm và độc quyền của họ, nhưng rất ít trong số họ có đủ can đảm để trở nên khó nắm bắt và kín đáo theo bất kỳ cách nào trong vô số cách mà Goyard đã có trong nhiều thế kỷ.</p>  
                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <a href="https://authentic-shoes.com/blogs/news/8-doi-giay-gia-ca-phai-chang-va-khong-bao-gio-loi-mot" target="blank">
                            <img src="https://file.hstatic.net/1000282067/article/logo_b4643df35b7142e5b55b60112a929145_large.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body" style=" padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 10px; ">
                            <a href="https://authentic-shoes.com/blogs/news/8-doi-giay-gia-ca-phai-chang-va-khong-bao-gio-loi-mot" target="blank">
                                <p class="card-text" style="color:Black;">8 đôi giày giá cả phải chăng và không bao giờ lỗi mốt</p>
                            </a>
                                <p class="gach"></p>
                                <p class="nho" style="color:Black;">Việc sưu tập giày sneaker hiện đang phổ biến hơn bao giờ hết, nhưng điều đó không hề thay đổi một thực tế rằng nó là một thú vui tốn kém, đặc biệt là khi bạn nhìn vào những mức giá bán lại vô lý của một đôi số giày thể thao.</p>  
                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <a href="https://authentic-shoes.com/blogs/news/17-cong-nghe-dem-tien-bo-nhat-tung-khynh-dao-thi-truong-sneaker" target="blank">
                            <img src="https://file.hstatic.net/1000282067/article/thiet_ke_khong_ten__3__6c3b17d2c28f4bc29078c3d0a160d426_large.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body" style=" padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 10px; ">
                            <a href="https://authentic-shoes.com/blogs/news/17-cong-nghe-dem-tien-bo-nhat-tung-khynh-dao-thi-truong-sneaker" target="blank">
                                <p class="card-text" style="color:Black;">17 công nghệ đệm tiến bộ nhất từng khuynh đảo thị trường sneaker</p>
                            </a>
                                <p class="gach"></p>
                                <p class="nho" style="color:Black;">Kể từ những năm 1970 - khi chạy bộ lần đầu tiên được coi là một trò tiêu khiển chính thống - ngành công nghiệp giày thể thao đã trải qua một loạt các bước chuyển đổi triệt để.</p>  
                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <a href="https://authentic-shoes.com/blogs/news/nike-co-duoc-tieng-tam-nhu-hien-tai-la-do-logo-swoosh-hay-nguoc-lai" target="blank">
                            <img src="https://file.hstatic.net/1000282067/article/thiet_ke_khong_ten_-_2021-09-06t092100.634_08312a3790de460584aa31603b381517_large.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body" style=" padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 10px; ">
                            <a href="https://authentic-shoes.com/blogs/news/nike-co-duoc-tieng-tam-nhu-hien-tai-la-do-logo-swoosh-hay-nguoc-lai" target="blank">
                                <p class="card-text" style="color:Black;">Nike có được tiếng tăm như hiện tại là do logo swoosh hay ngược lại?</p>
                            </a>
                                <p class="gach"></p>
                                <p class="nho" style="color:Black;">Như chúng ta đã biết, mỗi thương hiệu  để tồn tại được thì logo là một thứ không thể thiếu. Ví dụ adidas có logo ba lá hay ba sọc,</p>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid now2" style="margin-top: 70px;">
        <div class="row">
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fo">
                        <img src="../../project-web/css/trang-chu/img/logo.png " alt="BULL STORE" style ="width:60px;">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <h5>Shop</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5>Hỗ trợ</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Tin khuyến mãi</h5>
                    </div>
                </div>

                <div class="row" style="margin-top: 0px;">
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>
                                <li>
                                    <p>
                                    Nhiệm vụ của chúng tôi là mang đến những sản phẩm chất lượng với giá cả tốt nhất cho khách hàng. 
                                    Được hỗ trợ khách hàng là niềm vinh dự của chúng tôi . <br><br>
                                    Xin cám ơn!                                    
                                </p>
                                </li>
                                <li><i class="fa fa-facebook "></i>
                                    <i class="fa fa-firefox"></i>
                                    <i class="fa fa-pinterest-p"></i>
                                    <i class="fa fa-youtube"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>
                                <li>
                                    <p>Trang chủ</p>
                                </li>
                                <li>
                                    <p>Cửa hàng</p>
                                </li>
                                <li>
                                    <p>Giới thiệu</p>
                                </li>
                                <li>
                                    <p>Liên hệ</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>
                                <li>
                                    <p>Ưu đãi</p>
                                </li>
                                <li>
                                    <p>Giao nhận</p>
                                </li>
                                <li>
                                    <p>Đổi trả</p>
                                </li>
                                <li>
                                    <p>Bảo mật</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>
                                <li>
                                    <p>Nhập vào email của bạn để đăng ký nhận tin khuyến mãi...</p>
                                </li>
                                <li>
                                    <input type="text" placeholder="you@gmail.com">
                                    <a href="#">Đăng ký</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        const nextIcon = ' <i class="fa fa-chevron-left" style="font-size:36px;color:black"></i>';
        const preIcon = ' <i class="fa fa-chevron-right" style="font-size:36px;color:black"></i>';
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            navText: [
                nextIcon,
                preIcon
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1200: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>

    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>

</body>

</html>