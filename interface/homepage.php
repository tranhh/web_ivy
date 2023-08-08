<?php 
include('connect.php');
// include('./admin/class/brand_class.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/edca0d087e.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/logo1.png" alt="">
        </div>
        <d  iv class="menu">
            <?php
                $select_category = "SELECT * FROM `tbl_category`";
                $result_category = mysqli_query($con,$select_category);
                while($row_data = mysqli_fetch_assoc($result_category)){
                    $category_name = $row_data['category_name'];
                    $category_id = $row_data['category_id'];
            ?>
                    <ul> <a href='' style='font-weight: bold; font-size: 19px; text-shadow: 4px 4px 12px #f7f1f5; padding-top: 8px;'><?php echo $category_name ?></a>
                        <?php
                            $select_brand = "SELECT * FROM `tbl_brand`";
                            $result_brand = mysqli_query($con,$select_brand);
                            while($row_data2 = mysqli_fetch_assoc($result_brand)){
                                $brand_name = $row_data2['brand_name'];
                                $category_id2 = $row_data2['category_id'];

                        ?>
                        <li class ="sub-menu"><a href=""><?php echo $brand_name ?></a></li>
                        <?php
                            }
                        ?>
                    </ul> 
            <?php
                }
            ?>




        <div class="others">
            <li><input placeholder="Tìm kiếm" type="text"><i class="fas fa-search"></i></li>
            <li><a class="fa fa-paw"></a></li>
            <li><a class="fa fa-user"></a></li>
            <li><a class ="fa fa-shopping-bag"></a></li>
        </div>
    </header>

        <!-------------- Slider --------------> 

    <section id="slider">
        <div class="aspect-ratio-169">
            <img src="images/slide1.jpg" alt="">
            <img src="images/slide2.jpg" alt="">
            <img src="images/slide3.jpg" alt="">
            <img src="images/slide4.jpg" alt="">
            <img src="images/slide5.jpg" alt="">
        </div>
        <div class="dot-container">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </section>

    <!-------------- Footer --------------> 

    <section class="site-bottom">
        <div class="container">
            <div class="main-footer d-flex">
                <div class="left-footer">
                    <div class="top-left">
                        <div class="logo-footer">
                            <a href="http://127.0.0.1:5500/project/interface/index.html">
                                <img src="images/logo1.png" alt="logo-footer">
                            </a>
                        </div>
                        <div class="logo-conthuong">
                            <a target="_blank" href="http://online.gov.vn/Home/WebDetails/36596">
                                <img src="images/img-congthuong.png" alt="img-congthuong">
                            </a>
                        </div>
                    </div>
                    <div class="content-left-ft content-ft">
                        <div class="info-left-ft">
                            <p>Công ty Cổ phần gì gì đó</p>
                            <p><strong>Địa chỉ đăng ký: </strong>Tổ dân phố Đố Tìm Được, Q.Hà Đông, Hà Nội, Việt Nam</p>						<p><strong>Số điện thoại: </strong>01234556789</p>						<p><strong>Email: </strong> tranhnguyen8a1@gmail.com</p>					</div>
                        <ul class="list-social">
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100074948054820" target="_blank">
                                    <img src="images/ic_fb.svg" alt="ic_fb">
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <img src="images/ic_gg.svg" alt="ic_instagram" style="height: 30px;">
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <img src="images/ic_instagram.svg" alt="ic_pinterest" style="height: 27px">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" target="_blank">
                                    <img src="images/ic_ytb.svg" alt="ic_ytb">
                                </a>
                            </li>
                        </ul>
                        <div class="hotline">
                            <a href="">Hotline: 012345678</a>
                        </div>
                    </div>
                </div>
                <div class="center-footer d-flex">
                    <div class="left-center-ft item-center-ft">
                        <p class="title-footer">Giới thiệu</p>
                        <ul>
                            <li>
                                <a href="">Về IVY moda</a>
                            </li>
                            <li>
                                <a href="">Tuyển dụng</a>
                            </li>
                            <li>
                                <a href="">Hệ thống cửa hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="main-center-ft item-center-ft">
                        <p class="title-footer">Dịch vụ khách hàng</p>
                        <ul>
                            <li>
                                <a href="">Chính sách điều khoản</a>
                            </li>
                            <li>
                                <a href="">Hướng dẫn mua hàng</a>
                            </li>
                            <li>
                                <a href="">Chính sách thanh toán</a>
                            </li>
                            <li>
                                <a href="">Chính sách đổi trả</a>
                            </li>
                            <li>
                                <a href="">Chính sách bảo hành</a>
                            </li>
                            <li>
                                <a href="">Chính sách giao nhận vận chuyển</a>
                            </li>
                            <li>
                                <a href="">Chính sách thẻ thành viên</a>
                            </li>
                            <li>
                                <a href="">Hệ thống cửa hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-center-ft item-center-ft">
                        <p class="title-footer">Liên hệ</p>
                        <ul>
                            <li>
                                <a href="">Hotline</a>
                            </li>
                            <li>
                                <a href="">Email</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100074948054820">Live Chat</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100074948054820" >Messenger</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100074948054820">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="right-footer">
                    <div class="register-form">
                        <p class="title-footer">Nhận thông tin các chương trình của IVY moda</p>
                        <form id="frm_subscribe">
                            <input id="email_subscribe" type="text" name="email" placeholder="Nhập địa chỉ email" required="required">
                            <div class="btn-submit">
                                <input id="btn-submit" class="form-submit" value="Đăng ký" type="submit">
                            </div>
                        </form>
                    </div>
                    <div class="info-right-ft">
                        <p class="title-footer">Download App</p>
                        <ul>
                            <li>
                                <a id="app_ios" href="" class="link-white" target="_blank" title="Tải App IVYmoda trên App Store"> <img src="images/appstore.png" class="img-fluid" alt=""> </a>
                            </li>
                            <li>
                                <a id="app_android" href="" class="link-white" target="_blank" title="Tải App IVYmoda trên Google Play"> <img src="images/googleplay.png" class="img-fluid" alt=""> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="./js/script.js"></script>
<script src="./js/slider.js"></script>

</html>