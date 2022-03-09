<!DOCTYPE html>
<html lang="en">
<head>
  <title>profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="style/style_admin.css" />
  <link rel="stylesheet" href="test.css">
  <link rel="stylesheet" href="About_admin.css">
  <link rel="stylesheet" href="stati.css">
    
    
    
</head>
<body>
    <div class="row nopadding">
        <div class="bar_option col-md-2 col-lg-2 col-xl-2 nopadding">
            <form class="couche" action="" method="POST">
                <div class="bar_option_couche">
                    <a href="home_client.php" style="text-decoration:none">
                        <h1>Souffle<span class="test">.</span></h1>
                    </a>
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
                    <button class="btn_option" type="submit" name="projects">Projects</button>
                </div>
                <div class="bar_option_couche_sections">
                    <button class="btn_option" type="submit" name="Messages">Messages</button>
                </div>
            </form>
        </div>
        <div class="sec_admin col-md-10 col-lg-10 col-xl-10 nopadding">
            <div class="bar_notif_admin container-fluid ">
                <input type="text" placeholder="search" class="search_bar">
            </div>
            <?php
            if(isset($_POST['home'])) 
            {

                include "Home_admin.php";
                echo "<script>document.getElementById('home').classList.add('visited');</script>";
            }
            else if(isset($_POST['about'])) 
            {
                include "About_admin.php";
                echo "<script>document.getElementById('about').classList.add('visited');</script>";
            }
            else if(isset($_POST['statistics']) || isset($_POST["add"]) || isset($_POST["add_item"])) 
            {
                include "statistics.php";
                echo "<script>document.getElementById('statistics').classList.add('visited');</script>";
            }
            else{
            
                if(isset($_POST["submit"])){
                    try
                    {
                        $mydatabase = new PDO("mysql:host=localhost;dbname=souffle","root","");
                    }
                    catch(exception $e){
                        Die("ERROR".$e->getMessage());
                    }

                    $picSlide=$_FILES['slide_image']['name'];
                    $tmp_dir=$_FILES['slide_image']['tmp_name'];
                    $upload_dir="ressources/";
                    move_uploaded_file($tmp_dir, $upload_dir.$picSlide);

                    $t1=$_POST["user_title"];
                    $d1=$_POST["user_description"];
                    $t2=$_POST["user_titlee"];
                    $d2=$_POST["user_descriptionn"];
                    $sql=$mydatabase->prepare("insert into about value(?,?,?,?,?)");
                    $sql->execute(array($t1,$d1,$t2,$d2,$upload_dir.$picSlide));
                    include "About_admin.php";
                    echo "<script>document.getElementById('about').classList.add('visited');</script>";
                }
                else 
                {
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