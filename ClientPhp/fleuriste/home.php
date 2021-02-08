<?php
   include "HashMap.php";
session_start();
$_SESSION['nb'] = 0;
$_SESSION['list']= new HashMap("integer","integer");
$_SESSION['client'] ="";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="shortcut icon" type="image/x-icon" href="images/flower.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Home - Fiorello</title>
</head>

<body>
    <header class="main">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="logo">
                        <div class="img">
                            <a href="home.php">
                                <img src="img/h2-logo-1.png" alt="Fiorello">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-9 d-none">
                    <div class="navbar_click_icon">
                        <div class="icon">
                            <i class="fas fa-bars openSidebar"></i>
                        </div>
                    </div>
                    <div class="sidebar">
                        <div class="close">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="sidebar_list">
                            <ul>
                                <li class="home">
                                    <a href="home.php">Home</a><i class="fas fa-caret-right"></i>                                
                                </li>                              
                                <li class="shop">
                                    <a href="shoplist.php">Shop</a><i class="fas fa-caret-right"></i>
                                </li>
								<li class="portfolio">
                                    <a href="orders.php">Orders</a><i class="fas fa-caret-right"></i>
                                </li>
								<li class="portfolio">
                                    <a href="registration.php">Registration</a><i class="fas fa-caret-right"></i>
                                </li>								
								<li class="portfolio">
                                    <a href="login.php">Login</a><i class="fas fa-caret-right"></i>
                                </li>
								<li class="portfolio">
                                    <a href="logout.php">Logout</a><i class="fas fa-caret-right"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <nav>
                        <ul class="d-flex p-0 m-0 justify-content-around">
                            <li class="home">
                                <a href="home.php" class="selected">Home</a>
                            </li>
                            <li class="shop">
                                <a href="shoplist.php">Shop</a>
                            </li>
							<li class="portfolio">
                                <a href="orders.php">Orders</a>
                            </li>
							<li class="portfolio">
                                <a href="registration.php">Registration</a>
                            </li>
							<li class="portfolio">
                                <a href="login.php">Login</a>
                            </li>
							<li class="portfolio">
                                <a href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2">
                    <div class="search_and_basket">
                        <div class="row justify-content-around">
                            <div class="search">
                                <i class="fas fa-search"></i>
                                <div class="search_panel">
                                    <form action="#" class="d-flex">
                                        <input type="text" placeholder="Search" autocomplete="off" name="search_panel">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="basket">
                                <a href="card.php" ><i class="fas fa-shopping-bag"></i><sup
                                        id="productCount"><?php echo $_SESSION['nb'] ?></sup></a>
                                <span class="cart">Cart</span>                        
                            </div>							                     
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <header id="skiny" class="skiny_header w-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="logo">
                        <div class="img">
                            <a href="home.php">
                                <img src="img/h2-logo-1.png" alt="Fiorello">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                   <nav>
                        <ul class="d-flex p-0 m-0 justify-content-around">
                            <li class="home">
                                <a href="home.php" class="selected">Home</a>
                            </li>
                            <li class="shop">
                                <a href="shoplist.php">Shop</a>
                            </li>
							<li class="portfolio">
                                <a href="orders.php">Orders</a>
                            </li>
							<li class="portfolio">
                                <a href="registration.php">Registration</a>
                            </li>
							<li class="portfolio">
                                <a href="login.php">Login</a>
                            </li>
							<li class="portfolio">
                                <a href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <a class="off scroll text-center" href="#top">
        <span>
            <i class="fa fa-angle-up"></i>
        </span>
    </a>

    <main>
        <section id="slider">
            <div class="images multiple-items d-flex">
                <div class="image">
                    <img src="img/h3-slider-background.jpg" alt="Slide image">
                </div>
                <div class="image">
                    <img src="img/h3-slider-background-2.jpg" alt="Slide image">
                </div>
                <div class="image">
                    <img src="img/h3-slider-background-3.jpg" alt="Slide image">
                </div>
            </div>
            <div class="title">
                <h2>Send <span>flowers</span> like you mean it. </h2>
                <p>Where flowers are our inspiration to create lasting memories. Whatever the occasion, our flowers will
                    make it special cursus a sit amet mauris. </p>
                <img src="img/h2-sign-img.png" alt="Sign image">
            </div>
        </section>


        <section id="all_products">
            <div class="container p-0">
                <div class="row w-100 m-0 p-0">
                    <div class="all_product same_product">
                        <div class="row">
                            <?php
							$url = "http://localhost:8080/FleuristeApp/webresources/fleur";
							$ch = curl_init($url);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
							curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
							$response = curl_exec($ch);
							$new = simplexml_load_string($response);
							$con = json_encode($new);
							$fleurs = json_decode($con,true);
							for($i=0;$i<8; $i++){	
                            ?>
							<div class='col-lg-3 col-md-6 col-xs-12'>
                                <div class='card'>
                                    <div class='image'>
                                        <img class='second_img' src='img/shop-<?php echo $i+1 ?>-img.jpg' title='Foxglove Flower'
                                            alt='Product 2'>
                                    </div>
                                    <div class='title text-center'>
                                        <?php $code =$fleurs['Fleur'][$i]['code']; 
									echo "<h6><a style='color:gray' href='productlist.php?code=".$code."&ind=".$i."'>".
									$fleurs['Fleur'][$i]['lib']."
                                     </a></h6> " ?>
                                        <div class='add_to_cart'>
										    <?php 
										   $qte = 1;
											echo "<a class='addBasket' style='color:gray' href='addtocart.php?code=".$code."&qte=".$qte."'>Add to cart</a>" ?>
                                        </div>
                                        <div class='price'>
                                            <span>Stock : </span>
                                            <span class='productTotalPrice'><?php echo $fleurs['Fleur'][$i]['qte'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<?php } ?>
                        </div>
                    </div>
        </section>
        <!-- Video part end -->


        <!-- Join to us start -->
        <section id="join_to_us">
            <div class="container">
                <div class="main text-center">
                    <div class="title mb-4">
                        <h3>Join The Colorful Bunch!</h3>
                    </div>
                    <div class="search d-flex justify-content-center">
                        <div class="search_input">
                            <input id="emailAddress" type="email" name="email_address" placeholder="Email Address">
                        </div>
                        <div class="search_button">
                            <button id="emailSubmit" class="submit" type="submit">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Join to us end -->

        <!-- From our blog start -->
        <section id="from_our_blog">
            <div class="container">
                <div class="title text-center">
                    <div class="col-lg-6 col-12 m-auto">
                        <h2 class="mb-4">From our Blog</h2>
                        <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange a
                            smile for you.</p>
                    </div>
                </div>

                <div class="about_flowers">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="about_flower">
                                <div class="img">
                                    <a href="#"><img src="img/blog-feature-img-1.jpg" alt="Flower Power"></a>
                                    <div class="date">
                                        <a href="#">27.04.2020</a>
                                    </div>
                                </div>
                                <div class="content text-center p-4">
                                    <h5><a href="#">
                                            Flower Power
                                        </a></h5>
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="about_flower">
                                <div class="img">
                                    <a href="#"><img src="img/blog-feature-img-3.jpg" alt="Local Florists"></a>
                                    <div class="date">
                                        <a href="#">03.05.2020</a>
                                    </div>
                                </div>
                                <div class="content text-center p-4">
                                    <h5><a href="#">
                                            Local Florists
                                        </a></h5>
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="about_flower">
                                <div class="img">
                                    <a href="#"><img src="img/blog-feature-img-4.jpg" alt="Flower Beauty"></a>
                                    <div class="date">
                                        <a href="#">03.05.2020</a>
                                    </div>
                                </div>
                                <div class="content text-center p-4">
                                    <h5><a href="#">
                                            Flower Beauty
                                        </a></h5>
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="third_slider">
            <div class="container p-0">
                <div class="row">
                    <div class="cards d-flex multiple-items">

                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
     
    </footer>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/544d51816e.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/script.js"></script>
</body>

</html>