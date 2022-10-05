
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <title>Index</title>
</head>

<body>

    <div class="wrapper ">
            <!--  -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mt-0">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.html"><img src="https://kinhmateyeplus.com/wp-content/uploads/2020/05/logo.png"
                    alt="https://kinhmateyeplus.com"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav m-auto mb-2 mb-lg-0 ">
                    <?php include_once 'dals/CategoryDAL.php';
                    $dal = new CategoryDAL();
                    $list = $dal->getList();
                    foreach($list as $value){
                        ?>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="category.php?id=<?php echo $value->id ?>"><?php echo $value->name ?></a>
                        </li>
                        
                        <?php
                    }
                    ?>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-facebook text-blue-600"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-instagram text-pink-600"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-youtube text-red-600"></i></a>
                      </li>
                    </ul>
                    <div>
                        <ul class="d-flex">
                            <li><a href="" class="search "><i class="bi bi-search"></i></a></li>
                            <li><a href=""><i class="bi bi-cart-fill"></i></a></li>
                        </ul>
                    </div>
                  </div>
                </div>
              </nav>
            <!--  -->
        </nav>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://kinhmateyeplus.com/wp-content/uploads/2021/06/web1.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://kinhmateyeplus.com/wp-content/uploads/2020/05/web2.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

            <div class="sunglasses">
                <div class="ribbon">
                    <h2>SUNGLASSES</h2>
                    <h3>112 PRODUCTS</h3>

                </div>

                <div class="wrap-button">
                    <a>Watch now</a>

                </div>
            </div>





            <div class="glasses">
                <div class="close">
                    <h2>GLASSES</h2>
                    <h3>688 PRODUCTS</h3>
                </div>

                <div class="wrap-button">
                    <a>Watch now</a>

                </div>

            </div>

            <div class="w-full bg-no-repeat bg-cover relative "
                style="background-image: url(../front-end/img/kinhmateyeplus-hot-deal.jpg); height: 16rem; width: 220rem;">
                <div
                    class="absolute top-2/4 mt-2 left-1/2 tranform -translate-x-1/2 -translate-y-1/2 z-10 text-white text-center">
                    <h2 class="text-2xl mb-4 font-bold max-w-2xl md:leading-relaxed md:text-xl">PROMOTION THIS MONTH
                    </h2>
                    <h3 class="text-2xl mb-4 font-bold max-w-2xl md:leading-relaxed md:text-2xl">SALE UPTO 70%</h3>

                </div>
                <div class="promotion-button flex justify-center text-center mt-48	font-black ">
                    <p class="  mb-5 font-light border border-inherit cursor-pointer rounded bg-whit ">
                        <a class="font-semibold  px-10	py-2" >Promotion detail</a></p>
                </div>

            </div>

            <div class="row">
        
                <div class="leading-8 col-12 col-md-7">
                    <h1 class="title-heading-left" style="line-height: 50px;">Eye Plus – Prestigious
                        eyewear store chain in Hà Nội , HCM</h1>
                    <h3 class="title-heading-left" style="line-height: 50px;"><b>THE BEST ASSET OF THE BUSINESS IS
                            CUSTOMERS</b></h3>
                    <p>
                        <i>Eye Plus Eyewear – Experience the quality of eyewear according to international standards</i>
                    </p>
                    <p>With 6 years of experience in the Vietnamese eyewear market, Eye Plus is proud to be a
                        supplier of prestigious eyewear products and services in Vietnam. Products are carefully
                        selected, sophisticated and high quality, aiming for the best experience for customers.</p>


                    </p>



                    <p>As a product about human health, we "do business based on kindness" with customers as the focus,
                        constantly changing and improving products and accompanying services. In addition, a system of
                        experienced technicians, modern equipment and dedicated consulting services help Eye Plus become
                        a reliable address to accompany millions of Vietnamese customers.
                    </p>

                </div>



                <div class="col-12 col-md-5"> 
                    <img src="https://kinhmateyeplus.com/wp-content/uploads/2020/05/chat-luong.png" alt="">
                </div>


            </div>

            <div class="flex text-center leading-6 gap-4 " style="font-size:13px; ">
                <div class="flex flex-column items-center rounded-lg pb-6 product "
                    style="box-shadow: 0px 0px 20px rgb(72 114 250 / 20%)">
                    <img class="mt-3" src="https://kinhmateyeplus.com/wp-content/uploads/2020/05/sunglasses1.png"
                        data-orig-src="https://kinhmateyeplus.com/wp-content/uploads/2020/05/sunglasses1.png" width="48"
                        height="48" alt="">
                    <h2 class="font-normal" style="font-size:16px;line-height:40px;">DIFFERENT SAMPLES</h2>
                    <p>
                        <span class="">
                            Understanding customer tastes, Eye Plus models are diverse, suitable for many different
                            requirements.
                        </span>
                    </p>
                </div>


                <div class="flex flex-column items-center rounded-lg pb-6	 "
                    style="box-shadow: 0px 0px 20px rgb(72 114 250 / 20%)">
                    <img class="mt-3" src="https://kinhmateyeplus.com/wp-content/uploads/2020/05/medal1.png"
                        data-orig-src="https://kinhmateyeplus.com/wp-content/uploads/2020/05/medal1.png" width="48"
                        height="48" alt="">
                    <h2 class="content-box-heading" style="font-size:16px;line-height:40px;">QUALITY FIRST</h2>
                    <p>
                        <span>Products are carefully selected, highly sophisticated with experienced professionals and
                            advanced and modern machines.
                        </span>
                    </p>
                </div>
                <div class="flex flex-column items-center rounded-lg pb-6	 "
                    style="box-shadow: 0px 0px 20px rgb(72 114 250 / 20%)">
                    <img class="mt-3" src="https://kinhmateyeplus.com/wp-content/uploads/2020/05/piggy-bank1.png"
                        data-orig-src="https://kinhmateyeplus.com/wp-content/uploads/2020/05/piggy-bank1.png" width="45"
                        height="45" alt="">
                    <h2 class="content-box-heading" style="font-size:16px;line-height:40px;">GOOD PRICE</h2>
                    <p>
                        <span>Competitive price commensurate with quality, many preferential programs and after-sales
                            warranty.</span>
                    </p>
                </div>
            </div>

            <div class="flex">
                <h2 class="text-2xl">NEW EYEGLASSES MODEL</h2>
            </div>
            <div class="container text-center" >
                <div class="row">
                <?php include_once 'dals/ProductDAL.php';
                    $rs = new ProductDAL();
                    $product = $rs->getListByCategoryId($categoryId);
                    foreach($product as $cat){
                        ?>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="category.php?id=<?php echo $value->id ?>"><?php echo $value->name ?></a>
                        </li>
                        
                        <?php
                    }
                    ?>
                    <div class="col-6 col-sm-3">
                        <img src="<?php echo $cat->id;?>" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                REEMAN 9001 FASHIONABLE SUGGESTIONS BROWN EYES
                            </div>
                            <div class="font-black	 text-orange-600">
                                385.000 Đ
                            </div>
                        </div>
    
                    </div>
                    <div class="col-6 col-sm-3">
                        <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8469-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                REEMAN TITANIUM 20071 FASHIONABLE GLASSES
                            </div>
                            <div class="font-black	 text-orange-600">
                                1.106.000 Đ
                            </div>
                        </div>
    
                    </div>
                    <div class="col-6 col-sm-3">
                        <img src="	https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8457-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                GỌNG KÍNH CẬN REEMAN ACETATE CAO CẤP CẢ VIỀN 36104 C17 XÁM 2LINE
                            </div>
                            <div class="font-black	 text-orange-600">
                                760.000 Đ
                            </div>
                        </div>
    
                    </div>
                    <div class="col-6 col-sm-3">
                        <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8458-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">REEMAN 9001 FASHIONABLE GLASSES 
                            </div>
                            <div class="font-black	 text-orange-600">
                                385.000 Đ
                            </div>
                        </div>
    
                    </div>
                    <div class="col-6 col-sm-3">
                        <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8463-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                REEMAN 5139 C7 FASHIONAL SUNGLASSES
                            </div>
                            <div class="font-black	 text-orange-600">
                                385.000 Đ
                            </div>
                        </div>
    
                    </div>
                    <div class="col-6 col-sm-3">
                        <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8446-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                GS5055 FASHIONABLE GLASSES EYES SMOKE   
                            </div>
                            <div class="font-black	 text-orange-600">
                                455.000 Đ
                            </div>
                        </div>
    
                    </div>
                    <div class="col-6 col-sm-3">
                        <img src="	https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8442-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                GS5055 FASHIONABLE GLASSES FRAME BLACK EYES BLACK
                            </div>
                            <div class="font-black	 text-orange-600">
                                455.000 Đ
                            </div>
                        </div>
    
                    </div>
                    <div class="col-6 col-sm-3">
                        <img src="	https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8434-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                GS5051 FASHIONABLE GLASSES FRAME BLACK EYES BLACK
                            </div>
                            <div class="font-black	 text-orange-600">
                                455.000 Đ
                            </div>
                        </div>
    
                    </div>
                    <div class="col-6 col-sm-3">
                        <img src="	https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8450-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                GS5037 FASHIONABLE GLASSES BLUE
                            </div>
                            <div class="font-black	 text-orange-600">
                                760.000 Đ
                            </div>
                        </div>
    
                    </div>
                    <div class="col-6 col-sm-3">
                        <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8515-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                BLANCY 15001 C1 IN PREMIUM PLASTIC FRAME
                            </div>
                            <div class="font-black	 text-orange-600">
                                385.000 Đ
                            </div>
                        </div>
    
                    </div>
                    <div class="col-6 col-sm-3">
                        <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8543-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                WOMEN'S METAL FRAME EYE PLUS 70606 C6 SILVER GREY
                            </div>
                            <div class="font-black	 text-orange-600">
                                350.000 Đ
                            </div>
                        </div>
    
                    </div>
                    <div class="col-6 col-sm-3">
                        <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8539-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                KHUNG MẮT KIM LOẠI NỮ PLUS 70606 C3 XÁM
                            </div>
                            <div class="font-black	 text-orange-600">
                                350.000 Đ
                            </div>
                        </div>
    
                    </div>
                    <div class="col-6 col-sm-3">
                        <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8427-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                GOLD FRAME TITAN  8169 C1   
                            </div>
                            <div class="font-black	 text-orange-600">
                               944.000 Đ
                            </div>
                        </div>
    
                    </div>
                    <div class="col-6 col-sm-3">
                        <img src="	https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8479-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                BLANCY 16848 C3 GREEN PREMIUM PLASTIC FRAME
                            </div>
                            <div class="font-black	 text-orange-600">
                                385.000 Đ
                            </div>
                        </div>
    
                    </div>
                    <div class="col-6 col-sm-3">
                        <img src="	https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8484-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                BLANCE 20111 C4 PINK PLASTIC FRAME FOR WOMEN 2LINE
                            </div>
                            <div class="font-black	 text-orange-600">
                                385.000 Đ
                            </div>
                        </div>
    
                    </div><div class="col-6 col-sm-3">
                        <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8487-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                FRAME GLASSES REEMAN ACETATE HIGH-CLASS 36105 C17 GREY 2 LINE
                            </div>
                            <div class="font-black	 text-orange-600">
                                720.000 Đ
                            </div>
                        </div>
    
                    </div>  
                </div>

            </div>

            <div class="flex flex-col justify-center	">
                <div class="flex justify-center font-black">
                    <span class="seemore-buttton">SEE MORE</span>
                </div>
                <div class="flex justify-center font-black		">
                    <h2 class="text-2xl">GENUINE PRODUCT</h2>
                </div>
            </div>


              <div class="row">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="border">
                        <img src="	https://kinhmateyeplus.com/wp-content/uploads/2022/09/33-600x600.png" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                REEMAN 9001 FASHIONABLE SUGGESTIONS BROWN EYES

                            </div>
                            <div class="font-black	 text-orange-600">
                                385.000 Đ
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 ">
                    <div class="border">
                        <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8469-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                REEMAN TITANIUM 20071 FASHIONABLE GLASSES

                            </div>
                            <div class="font-black	 text-orange-600">
                                1.106.000 Đ
                            </div>
                        </div>
                    </div>
                </div><div class="col-6 col-md-4 col-lg-3 md:mt-3">
                    <div class="border">
                        <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8457-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                REEMAN 9001 FASHIONABLE GLASSES

                            </div>
                            <div class="font-black	 text-orange-600">
                                385.000 Đ
                            </div>
                        </div>
                    </div>
                </div><div class="col-6 col-md-4 col-lg-3">
                    <div class="border">
                        <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/09/IMG_8458-600x600.jpg" alt="">
                        <div class="p-3">
                            <div class="hover:text-blue-600">
                                REEMAN 9001 FASHIONABLE GLASSES

                            </div>
                            <div class="font-black	 text-orange-600">
                                385.000 Đ
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        
        <div class="">
            <div class="row mt-5 bg-blue-100 mx-3">
                <div class="col-12 col-md-5 ">
                    <h1 class="mt-3">MAP OF EYEPLUS STORE  </h1><br>
                    <iframe
                        class="w-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4493.458056386007!2d105.79945576198185!3d21.018249879753128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab5c87ed1235%3A0x2e3297e6e2ab58c6!2zMzggTmd1eeG7hW4gS2hhbmcsIFnDqm4gSG_DoCwgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1662907056635!5m2!1svi!2s"
                        style="border:0; height: 320px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
    
                <div class=" col-12 col-md-4 text-center ">
                    <h2 class="mt-3">SHOP SYSTEM</h2><br>
                    <ul class="text-blue-500">
    
                        <li><a href="">164 Tôn Đức Thắng – Đống Đa HN</a></li><br>
    
                        <li><a href="">38 Nguyễn Khang – Cầu Giấy HN</a></li><br>
    
                        <li><a href="">298 Nguyễn Trãi – Hà Đông HN</a></li><br>
    
                        <li><a href="">805 Lê Hồng Phong – Q.10 HCM</a></li><br>
    
                        <li><a href="">399 – 401 Lê Văn Sỹ – Q.Tân Bình HCM</a></li><br>
    
                        <li><a href="">83 Xô Viết Nghệ Tĩnh – Q.BT HCM</a></li><br>
    
                        <li><a href="">213 Trần Đại Nghĩa – Q.HBT HN</a></li><br>
    
                        <li><a href="">56 Nguyễn Cư Trinh – Q.1 HCM</a></li><br>
    
                    </ul>
                </div>
    
                <div class="col-12 col-md-3 my-0 md-my-3 leading-8">
                    <h2 class="mt-3">SHOPPING GUIDE</h2><br>
                    <ul>
    
                        <li><a href="">Quick Note</a></li>
    
                        <li><a href="">Choose Glasses By Face</a></li>
    
                        <li><a href="">Refraction Consulting</a></li>
    
                        <li><a href="">How to Buy</a></li>
    
                        <li><a href="">Payment method</a></li>
    
                        <li><a href="">Warranty & Return Policy</a></li>
    
                        <li><a href="">Eye Care Guide</a></li>
    
                        <li class="text-blue-500"><a href="">HOTLINE: <i>0904.915.377</i></a></li><br>
    
                        <li><a href="">OPEN TIME: 09:00 – 21:30</a></li><br>
    
                    </ul>
                </div>
            </div>
        </div>

        <footer class="text-center text-lg-start bg-light text-muted">
            <section class="">
              <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                      <i class="fas fa-gem me-3"></i>Company name
                    </h6>
                    <p>
                      Here you can use rows and columns to organize your footer content. Lorem ipsum
                      dolor sit amet, consectetur adipisicing elit.
                    </p>
                  </div>
                  <!-- Grid column -->
          
                  <!-- Grid column -->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                      Products
                    </h6>
                    <p>
                      <a href="#!" class="text-reset">GENUINE PRODUCT</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">NEW EYEGLASSES MODEL</a>
                    </p>
                  </div>
                  <!-- Grid column -->
          
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Quick link
                    </h6>
                    <p>
                      <a href="#!" class="text-reset">
                        Sunglasses</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">
                        Eyeglass Frames</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">
                        Lenses
                        </a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">
                        Close-up Sunglasses</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">
                            Genuine Glasses
                        </a>
                      </p>
                  </div>
                  <!-- Grid column -->
          
                  <!-- Grid column -->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <a href="contact.html"><h6 class="text-uppercase fw-bold mb-4">Contact</h6></a>
                    <p>
                      <i class="fas fa-envelope me-3"></i>
                      eyeplusglass@gmail.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> 001 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> 01 234 567 89</p>
                  </div>
                  <!-- Grid column -->
                </div>
                <!-- Grid row -->
              </div>
            </section>
            <!-- Section: Links  -->
          
            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
              © 2022 Copyright:
              <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Measure & Cut Myopia Glasses 2022 </a>
            </div>
            <!-- Copyright -->
          </footer>

</body>


</html>