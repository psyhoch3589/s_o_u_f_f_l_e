<?php
$host = "localhost";
$databaseName = "souffle";
$username= "root";
$password="";

try {
    $conn = new PDO("mysql:host=$host;dbname=$databaseName", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    


    if(isset($_POST["submition"])){
                
// prepare sql and bind parameters
        


        $SLIDE_TITLE= $_POST["SLIDE_TITLE"];
        $DESCRIPTION= $_POST["DESCRIPTION"];

        $stmt = $conn->prepare("INSERT INTO annonce
        VALUES (:ID, :SLIDE_TITLE, :DESCRIPTIONN , :IMAGE_NAME)");

        $stmt->bindParam(':ID', $ID_number);
        $stmt->bindParam(':SLIDE_TITLE', $SLIDE_TITLE);
        $stmt->bindParam(':DESCRIPTIONN', $DESCRIPTION);
        $stmt->bindParam(':IMAGE_NAME', $picSlide);

        // id generation
        $rows = $conn->prepare("Select max(ID) from annonce");
        $rows->execute();
        $count = $rows->fetch();



        $rows = $conn->prepare("SELECT MAX(ID) AS max_id FROM annonce");
        $rows -> execute();
        $count = $rows -> fetch(PDO::FETCH_ASSOC);
        $max_id = $count['max_id'];

        // image upload

        $picSlide=$_FILES['slide_image']['name'];
        $tmp_dir=$_FILES['slide_image']['tmp_name'];
        $imageSize=$_FILES['slide_image']['size'];

        $upload_dir='uploads_admin/';
        // $imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $valid_extensions=array('jpeg','jpg','png','gif','pdf');
        // $picSlide=$images.".".$imgExt;
          
         move_uploaded_file($tmp_dir, $upload_dir.$picSlide);

        $ID_number = $max_id+1;
        $stmt->execute();

        



    // $conn->exec("INSERT INTO annonce VALUES (1,$SLIDE_TITLE,$DESCRIPTION,'test')"); 
// echo "New record created successfully";
    // }

    }
}   
catch(PDOException $e)
{
echo "Error: " . $e->getMessage();
}
$conn = null;
?>



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
  <link rel="stylesheet" href="style/style_admin.css" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    
    
    
</head>
<body>
    <!-- <div class="sidebar_cont">
        <div class="sidebar">
            <ul>
                <li><a href="#"><i class="fas fa-home"></i>Dashboard</a></li>
                <li><a href="#"><i class="fas fa-users"></i>Team</a></li>
                <li class="notification1"><a href="#"><i class="fas fa-calendar-week"></i>Calender</a></li>
                <li class="notification2"><a href="#"><i class="far fa-envelope"></i>Documents</a></li>
                </li>
                <li><a href="#"><i class="fas fa-signal"></i>Reports</a></li>
            </ul>
        </div>
    </div> -->
    <div class="row">
        <div class="col-sm-3 sidebar-contnain">
            
            <nav class="navbar  sidebar_cont">
                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="#first_form">first_form</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#second_form">second_form</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link 3</a>
                    </li>
                </ul>
            </nav>
            <!-- <iframe name="hiddenFrame" class="hide"></iframe> -->
        </div>
        <div class="col-sm-9">
            <form action="#" class="form" id="myForm" method="POST"  enctype="multipart/form-data"> 
                <h1 class="text-center">Add Slide</h1>
                <!-- Progress bar -->
                <div class="progressbar"> <!-- the container and also the static bar -->
                    <div class="progress" id="progress"></div> <!-- Progress line that moves -->
                    <div class="progress-step progress-step-active" data-title="Content" ></div>
                    <div class="progress-step" data-title="Media"></div> <!--the circles -->
                    <!-- <div class="progress-step" data-title="ID"></div> -->
                    <div class="progress-step" data-title="Validation"></div>
                </div>
                <!-- Steps -->
                <div class="form-step form-step-active">
                    <div class="input-group">
                        <label for="SLIDE_TITLE">Slide title</label>
                        <input  type="text" name="user_title" id="user_title" >
                    </div>
                    <div class="input-group">
                        <label for="DESCRIPTION">Description</label>
                        <input  type="text" name="user_description" id="user_description" >
                    </div>
                    <div class="">
                        <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
                        
                    </div>
                </div>
                
                <div class="form-step">
                    <div class="input-group ">
                        
                    <img id="output" class="placed_image"/>
                    <!-- <label for="slide_image">Picture</label> -->
                    
                    
                    <input type="file" name="slide_image" id="slide_image" class="center_filling" accept="*/image" onchange="loadFile(event)">
                    
                    </div>
                    <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <!-- <a href="#" class="btn btn-next">Next</a> -->
                    <button type="submit" onclick="return validat_form()" name="" class="btn btn-next " >Next</button>   
                    </div>
                </div>
                <!-- </form>
                <form action="#" class="form" id="myForm" method="POST"  enctype="multipart/form-data">  -->

                <div class="form-step">

                    <img id="output_second" class="placed_image"/>
                    <div class="edit_image">
                        <a href="#" class="btn-prev ">Edit image</a>
                    </div>
                    <div class="input-group">
                        <label for="SLIDE_TITLE">Slide title</label>
                        <input  type="text" name="SLIDE_TITLE" id="SLIDE_TITLE" >
                    </div>
                    <div class="input-group">
                        <label for="DESCRIPTION">Description</label>
                        <input  type="text" name="DESCRIPTION" id="DESCRIPTION" >
                    </div>
                    <div class="btns-group">
                        <a href="#" class="btn btn-prev">Previous</a>
                        <button type="submit" name="submition" class="btn" >Save changes</button>     
                    </div>
                </div>
            </form>

            <!-- <form action="#" class="form" method="POST" ID="second_form" enctype="multipart/form-data">
            </form> -->

        </div>
    </div>

    

  

    <script src="js/script_admin.js"></script>  



</body>
</html>


</html>
