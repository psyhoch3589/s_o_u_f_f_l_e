<?php
    try{
        $mydatabase = new PDO("mysql:host=localhost;dbname=souffle","root","");
    }catch(exception $e){
        Die("ERROR".$e->getMessage());
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="home_client.css">
    <link rel="stylesheet" href="dynamic_home.css">
    <link rel="stylesheet" href="style_contact_client.css">
    
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="home_client.js"></script>
    <script src="app_contact_client.js"></script>
    <link rel="stylesheet" href="projects_client.css">
    <link rel="stylesheet" href="donate.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>


    <title>test</title>
</head>
<body>
    <!--bar d'enhaut pour Desktop-->
    <div class="headerr container-fluid" id="testt">
        <div class="headerr2 row">
            <div class="head col-md-6 col-lg-7 col-xl-8">
                <img src="localisation.png" class="image">
                <h5>Orlando, FL 32830, united States</h5>
                <div class="info_head">
                    <img src="phone.png" class="image">
                    <p style="font-size:16px;font-weight:bold">+212 707184109</p>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 col-xl-3">
                <div class="head2">
                    <a href="#"><h4>DONATION</h4></a>
                </div>
            </div>
            <div class="head3 col-md-1 col-lg-1 col-xl-1">
                <a href="admin_blueprint.php">I'm a member</a>
            </div>
        </div>
    </div>
    <!--barre d'en haut pour Desktop-->
    <div class="container-fluid px-0 bar" id="barre_test">
        <div class="barr row nopadding">
            <div class="col-md-2 col-lg-5 col-xl-6">
                <h2 class="logo" id="mylogo">Souffle<span class="test">.</span></h2>
            </div>
            <div class=" navbar navbar-expand-sm col-lg-7 col-md-10 col-xl-5 nopadding">
                <ul class="bar1 navbar-nav" id="items-links">
                    <li class="nav-item">
                        <a class="nav-link link" href="#home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="#section1">PROJECTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="#section2">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="#section2">DONATE</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--bar d'enhaut pour mobile-->
    <div class="sec2 container-fluid px-0">
      <nav class="navbar navbar-expand-md bg-light">
        <h2 class="logoo">Souffle<span class="test">.</span></h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border:1px solid gray">
            <img src="home_src_client/menu.png" width="30px" height= "30px">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link " href="#">HOME</a></li>
            <li class="nav-item"><a class="nav-link" href="#">ABOUT</a></li>
            <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
            <li class="nav-item"><a class="nav-link" href="#">DONATE</a></li>
          </ul>
              </div>
            </nav>
        </div>
    <!--home_Desktop-->
    <div class="home_test container-fluid nopadding" >
        <div class="home_image container-fluid nopadding">
            <div class="testo">
                <div class="testooo">
                    <h1 id="tt"><span class="donate">DONATORS</span> FOR A <br>GOOD CAUSES</h1><hr style="background-color:#F75E61;width:90%">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Maecenas eget leo suscipit.Maecenas eget leo suscipit</p>
                    <button class="donate-btn">Donate now</button>
                    <button class="raise-btn">Raise Refund</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--home mobile-->
    <div class="home_testo row px-0 nopadding">
        <div class="home_test_mobile col-12 col-sm-12 col-xs-12 nopadding">
            <div class="testoo">
                <h1>Make the world<br>a better place</h1>
            </div>
        </div>
    </div>

    <!-- dynamic bar -->
    
    <div class="first_container">
        <div class="second_container">
                <div id="cards" class="cards">
                    <div class="card">
                        <div class="box">
                            <div class="content">
                            <img src="home_src_client/healthcare1.png">
                                <div class="header_center">
                                    <h2 id="header_h2">Card</h2>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <img src="home_src_client/healthcare2.png">
                                <div class="header_center">
                                    <h2 id="header_h2">Card</h2>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <img src="home_src_client/healthcare3.png">
                                <div class="header_center">
                                        <h2 id="header_h2">Card</h2>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <img src="home_src_client/healthcare4.png">
                                <div class="header_center">
                                        <h2 id="header_h2">Card</h2>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <img src="home_src_client/healthcare1.png">
                                <div class="header_center">
                                        <h2 id="header_h2">Card</h2>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <img src="home_src_client/healthcare2.png">
                                <div class="header_center">
                                    <h2 id="header_h2">Card</h2>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <img src="home_src_client/healthcare3.png">
                                <div class="header_center">
                                        <h2 id="header_h2">Card</h2>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>


                </div>
        </div>
        

    </div>




    
    

<!-- About section ------------------------------------------------>

    <div class="section">

		<div class="container_prime">

			<div class="title">
				<h1>About Us</h1>
			</div>
	
			<div class="content_prime">
				<div class="title_prime">
					<h3>Lorem ipsum dolor sit amet, consectetur adipisicing</h3>
				</div>
				<div class="text_prime">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
				</div>

				<div class="button_division">
					<div class="button">
						<a href="">Read More</a>
					</div>
					<div class="button">
						<a href="">Read More</a>
					</div>

				</div>
				
			</div>

		</div>

		<div class="container">
			
			<div class="image-section">
				<img src="home_src_client/img_one.jpg">				
			</div>
			
			<div class="content-section">

				<div class="content">
					<div class="title_second">
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing</h3>
					</div>
					<div class="sub_title_second">
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing</h3>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
					<div class="button">
						<a href="">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- statistic counter--------------------->

    <div class="counter-up" >
		<div class="content">
		  <div class="box">
			<div class="icon"><i class="fas fa-history"></i></div>
			<div class="counter">724</div>
			<div class="text">Working Hours</div>
		  </div>
		  <div class="box">
			<div class="icon"><i class="fas fa-gift"></i></div>
			<div class="counter">508</div>
			<div class="text">Completed Projects</div>
		  </div>
		  <div class="box">
			<div class="icon"><i class="fas fa-users"></i></div>
			<div class="counter">436</div>
			<div class="text">Happy Clients</div>
		  </div>
		  <div class="box">
			<div class="icon"><i class="fas fa-award"></i></div>
			<div class="counter">120</div>
			<div class="text">Awards Received</div>
		  </div>
		</div>
    </div>
    <script>
    $(document).ready(function(){
    $('.counter').counterUp({
        delay: 30,
        time: 1500   /*1200*/
    });
    });
    </script>
    <!----------------------------Project--------------------------------->
    <?php
    
    $info=$mydatabase->query("select * from Projects");
    $row=$info->fetch(PDO::FETCH_NUM);
    $mydatabase=null;
    ?>
    <div class="cont container-fluid nopadding">
        <div class="Proj_title">
            <h1><?php echo $row[0];?></h1>
            <?php //<p><?php echo $row[1];</p>?>
        </div>
        <div class="cont_step row">
            <div class="test_proj col-lg-3 col-xl-3 nopadding">
                <img src=<?php echo $row[2];?> class="cont_step_left">
                <h4><?php echo $row[3];?></h4>
                <p><?php echo $row[4];?></p>
                <button class="button_more">learn more</button>
            </div>
            <div style="width:2%"></div>
            <div class="test_proj col-lg-3 col-xl-3 nopadding">
                <img src=<?php echo $row[5];?> class="cont_step_center">
                <h4><?php echo $row[6];?></h4>
                <p><?php echo $row[7];?></p>
                <button class="button_more">learn more</button>
            </div>
            <div style="width:2%"></div>
            <div class="test_proj tt col-lg-3 col-xl-3 nopadding">
                <img src=<?php echo $row[8];?> class="cont_step_right">
                <h4><?php echo $row[9];?></h4>
                <p><?php echo $row[10];?></p>
                <button class="button_more">learn more</button>
            </div>
        </div>
    </div>

<!-- contact form ---------------------------------------------------->

<div class="big_container_contact" >
    <div class="container_contact">
      
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <div>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>
          </div>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>92 Cherry Drive Uniondale, NY 11553</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>lorem@ipsum.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">

          <form class="second_form" action="index.html" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container_contact">
              <input type="text" name="name" class="input" placeholder="Username" />
            </div>
            <div class="input-container_contact">
              <input type="email" name="email" class="input" placeholder="Email"/>
            </div>
            <div class="input-container_contact">
              <input type="tel" name="phone" class="input" placeholder="Phone"/>
            </div>
            <div class="input-container_contact textarea">
              <textarea name="message" class="input" placeholder="Message"></textarea>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>
    </div>






<!-- end contact form ---------------------------------------------------->
    <div class="container_donation">
        <div class="container_donation_couche row">
            <div class="cont1 col-md-7 col-lg-7 col-xl-7">
                <h1>Your Help Can<br>Change The<br>World</h1>
            </div>
            <div class="cont2 col-12 col-sm-12 col-xs-12 col-md-4 col-lg-4 col-xl-4 justify-content-right">
                <form action="" method="POST" class="cont2_form">
                    <div class="donate_cont">
                        <div class="donate_cont1">
                            <h3>Donate Now</h3>
                        </div>
                        <div class="donate_cont2">
                            <input type="text" name="Amount" class="Amount" placeholder="Enter the Amount">
                            <input type="text" name="Name_donation" class="Name_donation" placeholder="Name">
                            <input type="text" name="Adress_donation" class="Adress_donation" placeholder="Adresse">
                            <button type="submit" class="donate-btnn">Donate Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>