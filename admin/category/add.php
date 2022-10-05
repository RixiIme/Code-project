<?php
session_start();

require_once '../../dals/CategoryDAL.php';
$dal = new CategoryDAL();
if (isset($_POST['name'])) {
    $checked = $dal->addOne($_POST);
    if ($checked) {

        $_SESSION['add-status'] = [
            'success' => 1,
            'message' => 'Add Successfully'
        ];
    } else {
        $_SESSION['add-status'] = [
            'success' => 0,
            'message' => 'Add failed'
        ];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    </title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <!--Totally optional :) -->

</head>

<body class="font-sans leading-normal tracking-normal">

    <header>
        <!--Nav-->
        <nav aria-label="menu nav" class="bg-zinc-100	  h-auto w-full">

            <div class="flex flex-wrap items-center">
                <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">

                </div>

                <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="px-2 py-0 rounded bg-green-400" type="submit">Search</button>
                    </form>
                </div>

                <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
                    <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                        <li class="flex-1 md:flex-none md:mr-3">
                            <?php if (isset($_SESSION['admin'])) { ?>
                                <div class="relative inline-block">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="pr-2"><i class="fa-solid fa-user"></i></i></span> Hi,<?php echo $_SESSION['admin']; ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-fw"></i> Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-cog fa-fw"></i> Settings</a></li>

                                <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</li>
                            </ul>
                        </li>

                </div>
            <?php
                            } else { ?>
                <div class="relative inline-block">
                    <button onclick="toggleDD('myDropdown')" class="drop-button text-green-600	 py-2 px-2"> <span class="pr-2"><i class="fa-solid fa-user"></i></i></span> <a href="loginadmin.php">Login</a> <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg></button>

                </div>
            <?php
                            }
            ?>

        </nav>
    </header>

    <div class="row">
        <div class="col-12 col-md-3 col-lg-2 p-0 border-end h-screen position-relative">
            <div id="slidebars">
                <ul class="mt-1">
                    <li style="border-top-left-radius:10px;border-top-right-radius:10px ;" class="p-3 border-bottom bg-green-400 text-white">
                        <a class="text-1xl hover:text-white font-bold" href="/Project/admin/admin.php">
                            <i class=" text-blue-800 fa-sharp fa-solid fa-house"></i> Home
                        </a>
                    </li>

                    <li class="p-3 border-bottom hover:bg-green-400 hover:text-white">
                        <a class="text-1xl hover:text-white " href=" /Project/admin/user/list.php">
                            <i class="text-green-800 fa-solid fa-user"></i> User
                        </a>
                    </li>

                    <li class="p-3 border-bottom hover:bg-green-400 hover:text-white">
                        <a class="text-1 hover:text-white " href=" /Project/admin/category/list.php">
                            <i class="text-purple-800 fa-solid fa-list-ul"></i> Category
                        </a>
                    </li>

                    <li class="p-3 border-bottom hover:bg-green-400 hover:text-white">
                        <a class="text-1xl hover:text-white " href="/Project/admin/products/list.php">
                            <i class=" text-pink-800 fa-solid fa-box"></i> Products
                        </a>
                    </li>


                    <li class="p-3 border-bottom hover:bg-green-400 hover:text-white">
                        <a class="text-1xl hover:text-white " href="./cart/list.php">
                            <i class="text-green-800 fa-solid fa-feather"></i> Order
                        </a>
                    </li>
                    <li class="p-3 border-bottom hover:bg-green-400 hover:text-white">
                        <a class="text-1xl hover:text-white " href="./cart/list.php">
                            <i class="text-teal-800	 fa-solid fa-feather-pointed"></i> Order Detail
                        </a>
                    </li>

                </ul>


            </div>


        </div>
        <div class="col-12 col-md-9 col-lg-10 p-2 flex  text-center  ">
            <?php
            if (isset($_SESSION['add-status'])) {
                if ($_SESSION['add-status']['success'] == 1) {
                    echo '<div class="alert alert-success" role="alert">
                    ' . $_SESSION['add-status']['message'] . '
                  </div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">
                    ' . $_SESSION['add-status']['message'] . '
                  </div>';
                }
                unset($_SESSION['add-status']);
            }
            ?>
            <form method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="name" class="form-label">Add Category Name</label>
                    <input type="text" required class="form-control" name="name" id="name">
                </div>


                <div>
                    <button class="btn btn-success">Add</button>
                </div>
            </form>
        </div>


    </div>
</body>

</html>