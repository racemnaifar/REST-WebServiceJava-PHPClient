<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
			<link rel="shortcut icon" type="image/x-icon" href="images/flower.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Product List - Fiorello</title>
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
                                <a href="home.php">Home</a>
                            </li>
                            <li class="shop">
                                <a href="shoplist.php"  class="selected">Shop</a>
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
							<span class="cart"><?php echo $_SESSION['client'] ?></span> 
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
                            <a href="#">
                                <img src="img/h2-logo-1.png" alt="Fiorello">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                   <nav>
                        <ul class="d-flex p-0 m-0 justify-content-around">
                            <li class="home">
                                <a href="home.php" >Home</a>
                            </li>
                            <li class="shop">
                                <a href="shoplist.php" class="selected">Shop</a>
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
        <section id="title_wrapper">
            <div class="container px-3">
                <div class="title">
                    <h1>Flower Details</h1>
                    <p>Where flowers are our inspiration</p>
                </div>
            </div>
        </section>


        <section id="orange_amaryllis">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product_image d-flex">
                            <div class="first_image">
                                <div class="image">
                                    <img src="img/shop-<?php echo $_REQUEST['ind']+1 ?>-img.jpg" alt="Product image">
                                </div>
                                <div class="image">
                                    <img src="img/shop-<?php echo $_REQUEST['ind']+1 ?>-img.jpg" alt="Product image">
                                </div>
                                <div class="image">
                                    <img src="img/shop-<?php echo $_REQUEST['ind']+1 ?>-img.jpg" alt="Product image">
                                </div>
                                <div class="image">
                                    <img src="img/shop-<?php echo $_REQUEST['ind']+1 ?>-img.jpg" alt="Product image">
                                </div>
                            </div>
                            <div class="second_image">
                                <div class="image">
                                    <img src="img/shop-<?php echo $_REQUEST['ind']+1 ?>-img.jpg" alt="Product image">
                                </div>
                            </div>
                        </div>
                    </div>
					 <?php
							$url = "http://localhost:8080/FleuristeApp/webresources/fleur/GetByCode?code=".$_REQUEST['code'];
							$ch = curl_init($url);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
							curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
							$response = curl_exec($ch);
							$new = simplexml_load_string($response);
							$con = json_encode($new);
							$fleur = json_decode($con,true);
                            ?>
                    <div class="col-lg-6 col-md-12 col-12">
                     <div class="content">
                            <h2 class="m-0"><?php echo $fleur['lib'] ?></h2>
                             <div class="product_info">
                            <p>Color: <span><?php echo $fleur['couleur'] ?></span></p>
                            <p>Category: <span><?php echo $fleur['categorie'] ?></span></p>
                            <p>Quantity in stock: <span><?php echo $fleur['qte'] ?></span></p>
                        </div>
						<form action='addtocart.php' method='post' >
                        <div class="quantity_add d-flex" >
                               <div class="col-lg-7 col-md-12 col-sm-7 p-0">
                                    <div class="quantity d-flex justify-content-between"  style="width:80%">
                                        <span>Quantity</span>
                                        <div class="quantity_number" >
											<input type="hidden" id="code" name="code" value="<?php echo $fleur['code'] ?>" />
											<input style="width:70%" type="number" id="qte" name="qte" class="form-control"/>
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-5 p-0">
								<button type="submit"  class='add-to-cart addBasket2'>
                                  Add to cart
                                </button>
                            </div>
                        </div>
                       	</form>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>
        <!-- Orange Amaryllis end -->

        <!-- Tab Menu start -->
        <section id="p_tab_menu">
            <div class="container">
                <div class="row px-3">
                    <div class="col-12">
                        <div class="menus d-flex">
                            <div class="menu selected" data-id="1">
                                Description
                            </div>
                            <div class="menu" data-id="2">
                                Additional information
                            </div>
                            <div class="menu" data-id="3">
                                Reviews (2)
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contents">
                            <div class="content" data-id="1">
                                <h3>The power of flowers</h3>
                                <p class="m-0">
                                    Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                                    nulla
                                    ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel
                                    augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas
                                    tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
                                    sem
                                    neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                                    Maecenas nec odio et ante
                                </p>
                            </div>
                            <div class="content d-none" data-id="2">
                                <p class="m-0"><strong>Weight:</strong> <span>1 kg</span></p>
                                <p class="m-0"><strong>Dimensions:</strong> <span>30 x 30 x 50 cm</span></p>
                            </div>
                            <div class="content d-none" data-id="3">
                                <div class="reviews">
                                    <h2>Reviews</h2>
                                    <div class="comments">
                                        <div class="comment_area mb-3 d-flex">
                                            <div class="col-lg-1 col-md-2 col-3 px-2">
                                                <div class="image">
                                                    <img src="img/h3-team-img-2.png" alt="Commenter">
                                                </div>
                                            </div>
                                            <div class="col-lg-11 col-md-10 col-9">
                                                <div class="comment">
                                                    <p class="mb-2">
                                                        <strong>Joshua Garcia </strong>
                                                        <span>27.04.2018</span>
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                        commodo ligula eget dolor. Aenean massa. Cum sociis Theme
                                                        natoque
                                                        penatibus et magnis dis parturient montes, nascetur ridiculus
                                                        mus.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_area d-flex">
                                            <div class="col-lg-1 col-md-2 col-3 px-2">
                                                <div class="image">
                                                    <img src="img/h3-team-img-3.png" alt="Commenter">
                                                </div>
                                            </div>
                                            <div class="col-lg-11 col-md-10 col-9">
                                                <div class="comment">
                                                    <p class="mb-2">
                                                        <strong>Joan Stanley</strong>
                                                        <span>27.04.2018</span>
                                                    </p>
                                                    <p>
                                                        Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus,
                                                        sem
                                                        quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam
                                                        quam nunc, blandit vel, luctus pulvinar, hendrerit
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add_reviews">
                                    <h2>Add a review</h2>
                                    <div class="review">
                                        <p>Your email address will not be published. Required fields are marked
                                            <sup>*</sup>
                                        </p>
                                        <form action="#" class="form-group">
                                            <div>
                                                <label>Your review <sup>*</sup></label><br>
                                                <textarea name="your_review" id="your_review" cols="45" rows="8"
                                                    aria-required="true" required></textarea>
                                            </div>
                                            <div>
                                                <label>Name<sup>*</sup></label>
                                                <input class="form-control" type="text" id="author" name="author"
                                                    size="30" aria-required="true" required>
                                            </div>
                                            <div>
                                                <label>Email<sup>*</sup></label>
                                                <input class="form-control" type="email" id="email" name="email"
                                                    size="30" aria-required="true" required>
                                            </div>
                                            <div>
                                                <input type="checkbox" value="yes" id="" name="">
                                            </div>
                                            <p>Save my name, email, and website in this browser for the next time I
                                                comment.</p>
                                            <input class="button" type="submit" name="submit" id="submit"
                                                value="submit">
                                        </form>
                                    </div>
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
    <script src="js/productListcounter.js"></script>
    <script src="js/basketScript.js"></script>
    <script src="js/script.js"></script>
</body>

</html>