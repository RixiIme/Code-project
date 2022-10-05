<?php 
session_start();

 require_once 'dals/ProductDAL.php';
 require_once 'config.php';
 $productDAL = new ProductDAL();
 if(isset($_GET['action'])){
    $id = $_GET['id'];   
 }
 $list = $productDAL->getList();
?>
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
    <link rel="stylesheet" href="category.css">

    <title>Category</title>
</head>

<body>

    <div class="wrapper ">
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
                    $categoryDAL = new CategoryDAL();
                    $categoryList= $categoryDAL->getList();
                    foreach($categoryList as $category){
                        ?>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="category.php?id=<?php echo $category->id ?>"><?php echo $category->name ?></a>
                        </li>
                        
                        <?php
                    }
                    ?>
                
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


        </nav>
        <div>
            <div class=" ml-30 flex justify-center py-6 gap-2 text-sm bg-slate-200 ">
                <span>Home ›</span>
                <span>Kính Chính Hãng ›</span>
                <span>Kính RayBan Chính Hãng</span>
            </div>
            <div class=" m-auto flex justify-center mt-5 font-black	uppercase text-3xl">
                <h1 class="mb-3">GENUINE RAYBAN GLASSES </h1>
            </div>
        </div>
        <?php
      foreach ($categoryList as $category) :
      ?>    
      <?php $productList = $productDAL->getListByCategoryId($category->id); ?>
      <?php if(count($productList)==8){ ?>
        <h3 class="font-bold text-3xl mt-12"> <?php echo $category->name; ?></h3>
        <div class="container text-center" > 
            <div class="row">
                <div class="col-6 col-sm-3">
                <?php foreach ($productList as $product) : ?>
                    <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/04/4-7-600x600.jpg" alt="">
                    <div class="p-3">
                        <div class="hover:text-blue-600">
                        <?php echo $product->product_name; ?>
                        </div>
                        <div class="font-black	 text-orange-600">
                        <?php echo $product->price; ?>
                        </div>
                        <?php endforeach ?>
                    </div>
                    <?php }?>

                    <?php endforeach; ?>
                   
                </div>
                <!-- <div class="col-6 col-sm-3">
                    <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/04/4-6-600x600.jpg" alt="">
                    <div class="p-3">
                        <div class="hover:text-blue-600">
                            GENUINE RAYBAN GLASS 7123D
                        </div>
                        <div class="font-black	 text-orange-600">
                            2.360.000 Đ
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-3">
                    <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/04/4-5-600x600.jpg" alt="">
                    <div class="p-3">
                        <div class="hover:text-blue-600">
                            GENUINE RAYBAN GLASS 7081D
                        </div>
                        <div class="font-black	 text-orange-600">
                            2.200.000 Đ
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-3">
                    <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/04/2-2-600x600.jpg" alt="">
                    <div class="p-3">
                        <div class="hover:text-blue-600">
                            GENUINE RAYBAN GLASS 5318D
                        </div>
                        <div class="font-black	 text-orange-600">
                            2.200.000 Đ
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-3">
                    <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/04/4-3-600x600.jpg" alt="">
                    <div class="p-3">
                        <div class="hover:text-blue-600">
                            GENUINE RAYBAN GLASS 6281D 2620
                        </div>
                        <div class="font-black	 text-orange-600">
                            2.280.000 Đ
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-3">
                    <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/04/5-1-600x600.jpg" alt="">
                    <div class="p-3">
                        <div class="hover:text-blue-600">
                            GENUINE RAYBAN GLASS 6281D 2503
                        </div>
                        <div class="font-black	 text-orange-600">
                            2.280.000 Đ
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-3">
                    <img src="https://kinhmateyeplus.com/wp-content/uploads/2020/07/DSCF9380-copy.jpg" alt="">
                    <div class="p-3">
                        <div class="hover:text-blue-600">
                            GENUINE RAYBAN GLASS 6349D
                        </div>
                        <div class="font-black	 text-orange-600">
                            3.400.000 Đ
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-3">
                    <img src="	https://kinhmateyeplus.com/wp-content/uploads/2020/07/DSCF9370-copy.jpg" alt="">
                    <div class="p-3">
                        <div class="hover:text-blue-600">
                            GENUINE RAYBAN GLASS RB5372F                   
                          </div>
                        <div class="font-black	 text-orange-600">
                            2.765.000 Đ
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-3">
                    <img src="	https://kinhmateyeplus.com/wp-content/uploads/2020/07/DSCF9377-copy.jpg" alt="">
                    <div class="p-3">
                        <div class="hover:text-blue-600">
                            GENUINE RAYBAN GLASS 6349D
                             </div>
                        <div class="font-black	 text-orange-600">
                           3.400.000 Đ
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-3">
                    <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/06/IMG_2519-nhe-600x600.jpg" alt="">
                    <div class="p-3">
                        <div class="hover:text-blue-600">
                            FASHIONABLE SUNGLASSES RAYBAN RM5113 BLUE EYES
                        </div>
                        <div class="font-black	 text-orange-600">
                            3.500.000 Đ
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-3">
                    <img src="	https://kinhmateyeplus.com/wp-content/uploads/2022/06/IMG_2162-600x600.png" alt="">
                    <div class="p-3">
                        <div class="hover:text-blue-600">
                            FASHIONABLE SUNGLASSES RAYBAN RM5114 SILVER EYES
                        </div>
                        <div class="font-black	 text-orange-600">
                            3.200.000 Đ
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-3">
                    <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/06/IMG_2163-600x600.png" alt="">
                    <div class="p-3">
                        <div class="hover:text-blue-600">
                            FASHIONABLE SUNGLASSES RAYBAN RB5114 BLUE EYES
                        </div>
                        <div class="font-black	 text-orange-600">
                            3.000.000 Đ
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-3">
                    <img src="https://kinhmateyeplus.com/wp-content/uploads/2020/03/5113-1-600x600.jpg" alt="">
                    <div class="p-3">
                        <div class="hover:text-blue-600">
                            FASHIONABLE SUNGLASSES RAYBAN RB5113
                        </div>
                        <div class="font-black	 text-orange-600">
                            2.800.000 Đ
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-3">
                    <img src="	https://kinhmateyeplus.com/wp-content/uploads/2019/11/IMG_2166-600x600.png" alt="">
                    <div class="p-3">
                        <div class="hover:text-blue-600">
                            FASHIONABLE SUNGLASSES RAYBAN RB5114
                        </div>
                        <div class="font-black	 text-orange-600">
                            2.600.000 Đ
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-3">
                    <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/05/IMG_9909-600x600.png  " alt="">
                    <div class="p-3">
                        <div class="hover:text-blue-600">
                            FASHIONABLE SUNGLASSES RAYBAN RB2192
                        </div>
                        <div class="font-black	 text-orange-600">
                            3.500.000 Đ
                        </div>
                    </div>

                </div><div class="col-6 col-sm-3">
                    <img src="https://kinhmateyeplus.com/wp-content/uploads/2022/05/IMG_9918-600x600.png" alt="">
                    <div class="p-3">
                        <div class="hover:text-blue-600">
                            FASHIONABLE SUNGLASSES RAYBAN RB2185
                        </div>
                        <div class="font-black	 text-orange-600">
                            2.185.000 Đ
                        </div>
                    </div>

                </div>  
            </div> -->
            <!--  -->
            
        </div>
        <div class="bg-blue-100 mx-3">
            <div class="container">
                <div class="row mt-5 ">
                    <div class="col-12 col-md-5">
                        <h1 class="mt-3 ">MAP OF EYEPLUS STORE  </h1><br>
                        <iframe
                            class="w-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4493.458056386007!2d105.79945576198185!3d21.018249879753128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab5c87ed1235%3A0x2e3297e6e2ab58c6!2zMzggTmd1eeG7hW4gS2hhbmcsIFnDqm4gSG_DoCwgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1662907056635!5m2!1svi!2s"
                            style="border:0; height: 320px;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
    
                    <div class=" col-12 col-md-4 ">
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
        </div>
        
        <footer class="text-center text-lg-start bg-light text-muted ">
            <section class="">
              <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3 p-4">
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