
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="login.css">

  <title>Login</title>
</head>

<body>

  <div class="wrapper relative">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mt-0">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><img src="https://kinhmateyeplus.com/wp-content/uploads/2020/05/logo.png" alt="https://kinhmateyeplus.com"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="category.html">Sunglasses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active  md:px-3" aria-current="page" href="category.html">Eyeglass Frames</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="category.html">Lenses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active  md:px-3" aria-current="page" href="category.html">Close-up Sunglasses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="category.html">Genuine Glasses</a>
            </li>
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

    </nav>

    <div style="margin-top: 7rem;">

      <div class="w-full max-w-xs m-auto mt-3 ">

        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mt-5" action="login_submit.php" method="POST" enctype="multipart/form-data">
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">email</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" id="email">
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" id="password">
          </div>
          <div class=""><input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Đăng Nhập">
          </div>
        </form>
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
              <a href="contact.html">
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              </a>
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