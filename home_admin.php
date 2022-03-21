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

        $sttm = $conn->prepare("DELETE FROM home");
        $sttm->execute();
        


        $user_title= $_POST["user_title"];
        $user_description= $_POST["user_description"];

        $stmt = $conn->prepare("INSERT INTO home
        VALUES (:user_title, :user_descriptionN , :IMAGE_NAME)");


        $stmt->bindParam(':user_title', $user_title);
        $stmt->bindParam(':user_descriptionN', $user_description);
        $stmt->bindParam(':IMAGE_NAME', $picSlide);


        // image upload

        $picSlide=$_FILES['slide_image']['name']; 
        $tmp_dir=$_FILES['slide_image']['tmp_name'];
        $imageSize=$_FILES['slide_image']['size'];

        $upload_dir='uploads_admin/';
        // $imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $valid_extensions=array('jpeg','jpg','png','gif','pdf');
        // $picSlide=$images.".".$imgExt;
          
         move_uploaded_file($tmp_dir, $upload_dir.$picSlide);

   
        $stmt->execute();

        



    // $conn->exec("INSERT INTO home VALUES (1,$user_title,$user_description,'test')"); 
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




        
<form action="#" class="form" id="myForm" method="POST"  enctype="multipart/form-data">
    <h1>title1</h1>
        <!-- Steps -->
    <div class="formm row">
        <div class="form-step col-xl-6 col-lg-6 col-md-6">
            <div class="input-group">
                <label for="user_title">Slide title</label>
                <input  type="text" name="user_title" id="user_title" >
            </div>
            <div class="input-group" style="padding-bottom: 60px;">
                <label for="user_description">user_description</label>
                <input  type="text" name="user_description" id="user_description" >
            </div>
        </div>
        <div class="form-step col-xl-6 col-lg-6 col-md-6">
            <div class="input-group ">
                
            <img id="output" class="placed_image"/>
            <!-- <label for="slide_image">Picture</label> -->
            
            
            <input type="file" name="slide_image" id="slide_image" class="center_filling" accept="*/image" onchange="loadFile(event)">
            
            </div>
        </div>
    </div>
    <div class="btns-group row">
        <!-- <a href="#" class="btn btn-next">Next</a> -->
        <div class="col-md-8 col-lg-8 col-xl-8"></div>
        <div class="col-md-4 col-lg-4 col-xl-4">
            <button type="submit"  name="submition" class="btn-submit">Save changes</button>
        </div> 
    </div>
</form>