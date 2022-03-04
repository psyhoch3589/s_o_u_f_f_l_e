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
  <link rel="stylesheet" href="test.css">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    
    
    
</head>
<body>
    <div class="options row">
        <div class="col-xl-3 col-lg-3 col-md-3 option_box Home">
            <div class="option1 row">
                <div class="col-12">
                    <p>HOME</p>
                </div>
                <div class="col-12">
                    <button class="btn_option">Select</button>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 option_box Home">
            <div class="option1 row">
                <div class="col-12">
                    <p>ABOUT</p>
                </div>
                <div class="col-12">
                    <button class="btn_option">Select</button>
                </div>
            </div>
        </div><div class="col-xl-3 col-lg-3 col-md-3 option_box Home">
            <div class="option1 row">
                <div class="col-12">
                    <p>PROJECTS</p>
                </div>
                <div class="col-12">
                    <button class="btn_option">Select</button>
                </div>
            </div>
        </div>
    </div>
    <form action="#" class="form" id="myForm" method="POST"  enctype="multipart/form-data">
        <div class="row  justify-content-center "> 
                    <!-- Steps -->
                    <div class="form-step col-xl-6 col-lg-6 col-md-6">
                        <div class="input-group">
                            <label for="SLIDE_TITLE">Slide title</label>
                            <input  type="text" name="user_title" id="user_title" >
                        </div>
                        <div class="input-group">
                            <label for="DESCRIPTION">Description</label>
                            <input  type="text" name="user_description" id="user_description" >
                        </div>
                    </div>
                    <div class="form-step col-xl-6 col-lg-6 col-md-6">
                        <div class="input-group ">
                            
                        <img id="output" class="placed_image"/>
                        <!-- <label for="slide_image">Picture</label> -->
                        
                        
                        <input type="file" name="slide_image" id="slide_image" class="center_filling" accept="*/image" onchange="loadFile(event)">
                        
                        </div>
                        <div class="btns-group">
                        <!-- <a href="#" class="btn btn-next">Next</a> -->
                        <button type="submit"  name="" class="btn btn-next " >Save changes</button>   
                        </div>
                    </div>
        </div>
    </form>
    <script src="js/script_admin.js"></script>  
</body>
</html>