
<?php
session_start();
?>
<?php
	$url = "http://localhost:8080/FleuristeApp/webresources/commande/GetByCode?codeCom=".$_REQUEST['code'];
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
	$response = curl_exec($ch);
	$new = simplexml_load_string($response);
	$con = json_encode($new);
	$com = json_decode($con,true);
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
    <title>Orders Details - Fiorello</title>
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
                                <a href="shoplist.php"  >Shop</a>
                            </li>
							<li class="portfolio">
                                <a href="orders.php" class="selected">Orders</a>
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
                                <a href="card.php"><i class="fas fa-shopping-bag"></i><sup
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
                                <a href="shoplist.php" >Shop</a>
                            </li>
							<li class="portfolio">
                                <a href="orders.php" class="selected">Orders</a>
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
                    <h1>Details Of The Order N° <?php echo $_REQUEST['code'] ?></h1>
                </div>
            </div>
        </section>

        <section id="main_part_basket">
            <div class="container">
                <div class="row">
                    <table class="table table-bordered table-light">
                        <thead>
						
                            <tr>
							  <?php   
							  echo "
									<th>Description Flower</th>
									<th>Category Flower</th>
									<th>Color Flower</th>
									<th>Quantity</th>
							";
							  ?>
                            </tr>
                        </thead>
                        <tbody>
						<?php
						 $arr =[];
						 $arrv = [];
						foreach ( $com['listCommande']['entry'] as $key => $value )
						{
							foreach ( $value as $key => $value ){
								if ($key == "key"){
									array_push($arr, $value);
								}
								else{
									array_push($arrv, $value);
								}
							}
						}
						for($i=0;$i<count($arr); $i++){
							$url = "http://localhost:8080/FleuristeApp/webresources/fleur/GetByCode?code=".$arr[$i];
							$ch = curl_init($url);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
							curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
							$response = curl_exec($ch);
							$new = simplexml_load_string($response);
							$con = json_encode($new);
							$fleur = json_decode($con,true);
						?>
						<tr>
						<?php
						echo "
						<td>".$fleur['lib']."</td>
						<td>".$fleur['categorie']."</td>
						<td>".$fleur['couleur']."</td>
						<td>".$arrv[$i]."</td>
						";
						?>					
						</tr>
						<?php } ?>
                        </tbody>
                    </table>
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
    <script src="js/basket.js"></script>
    <script src="js/script.js"></script>
</body>

</html>