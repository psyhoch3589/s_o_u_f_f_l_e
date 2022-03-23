<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style/style_admin.css" />
  <link rel="stylesheet" href="test.css">
  <link rel="stylesheet" href="About_admin.css">
  <link rel="stylesheet" href="stati.css">
  <link rel="stylesheet" href="chat.css">
    
    
    
</head>
<body>
    <div class="row nopadding tttest">
        <div class="bar_option col-md-3 col-lg-3 col-xl-3 nopadding">
            <form  action="" method="POST">
                <div class="bar_option_couche">
                    <a href="home_client.php" style="text-decoration:none">
                        <h1>Souffle<span class="test">.</span></h1>
                    </a>
                </div>
                <div class="input-group bar_notif_admin ">
                    <div class="search_div">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="search-btn"><img src="outline_search_black_24dp.png" class="image_test"></button>
                    </div>
                </div>
                <div class="bar_option_couche_sections">
                    <button class="btn_option" type="submit" name="home"  id="home">Home</button>
                </div>
                <div class="bar_option_couche_sections">
                    <button class="btn_option" type="submit" name="about" id="about">About</button>
                </div>
                <div class="bar_option_couche_sections">
                    <button class="btn_option" type="submit" name="statistics" id="statistics">Statistics</button>
                </div>
                <div class="bar_option_couche_sections">
                    <button class="btn_option" type="submit" name="projects" id="projects">Projects</button>
                </div>
                <div class="bar_option_couche_sections">
                    <button class="btn_option" type="submit" name="Messages" id="chat">Messages</button>
                </div>
                <button class="btn_option_logout" type="submit" name="LogOut" >LogOut</button>
            </form>
        </div>
        <div class="sec_admin col-md-9 col-lg-9 col-xl-9">
            
            <?php
            // $namee="d".$_SESSION["contact"];
            $namee="";
            if(isset($_POST['home'])) 
            {
                $_SESSION["option"]=0;
                include "Home_admin.php";
                echo "<script>document.getElementById('home').classList.add('visited');</script>";
            }
            else if(isset($_POST['about']) || isset($_POST["submit_about"])) 
            {
                $_SESSION["option"]=1;
                include "About_admin.php";
                echo "<script>document.getElementById('about').classList.add('visited');</script>";
            }
            else if(isset($_POST['statistics']) || isset($_POST["add"]) || isset($_POST["add_item"]) || isset($_POST["d1"]) || isset($_POST["d2"]) || isset($_POST["d3"]) || isset($_POST["d4"])) 
            {
                $_SESSION["option"]=2;
                include "statistics.php";
                echo "<script>document.getElementById('statistics').classList.add('visited');</script>";
            }
            else if(isset($_POST['projects']) || isset($_POST["respond"]) || isset($_POST[$namee]))
            {
                $_SESSION["option"]=3;
                include "project_admin.php";
                echo "<script>document.getElementById('projects').classList.add('visited');</script>";
            }
            else if(isset($_POST['Messages']) || isset($_POST["respond"]) || isset($_POST[$namee]))
            {
                $_SESSION["option"]=4;
                include "chat.php";
                echo "<script>document.getElementById('chat').classList.add('visited');</script>";
            }
            else{
                    if($_SESSION["option"]==0) 
                    {
                        $_SESSION["option"]=0;
                        include "Home_admin.php";
                        echo "<script>document.getElementById('home').classList.add('visited');</script>";
                    }
                    else if($_SESSION["option"]==1) 
                    {
                        $_SESSION["option"]=1;
                        include "About_admin.php";
                        echo "<script>document.getElementById('about').classList.add('visited');</script>";
                    }
                    else if($_SESSION["option"]==2) 
                    {
                        $_SESSION["option"]=2;
                        include "statistics.php";
                        echo "<script>document.getElementById('statistics').classList.add('visited');</script>";
                    }
                    else if($_SESSION["option"]==4)
                    {
                        $_SESSION["option"]=4;
                        include "chat.php";
                        echo "<script>document.getElementById('chat').classList.add('visited');</script>";
                    }
                    else 
                    {   
                    $_SESSION["option"]=0;
                        include "Home_admin.php";
                        echo "<script>document.getElementById('home').classList.add('visited');</script>";
                    }
            }
            $mydatabase=null;
            ?>
        </div>
    </div>
    
    <script src="js/script_admin.js"></script>  
</body>
</html>