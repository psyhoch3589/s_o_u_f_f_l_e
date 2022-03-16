<form action="" class="form_about row" id="myForm" method="POST"  enctype="multipart/form-data">
    <div class="col-xl-8 col-lg-8 col-md-8">
        <h1>About</h1>
        <h5>Display</h5>
        <div class="ty">
            <input type="radio" id="dewey" name="drone" value="dewey" style="padding:0 !important">
            <label for="dewey">Dewey</label>
            <input type="radio" id="louie" name="drone" value="louie">
            <label for="louie">Louie</label>
        </div>
        <div class="form_step_text ">
        <!-- <div class="form_step_about col-xl-6 col-lg-6 col-md-6"> -->
            <div class="input_group_about tesst">
                <label for="SLIDE_TITLE">Title1</label>
                <input  type="text" name="user_title" id="user_title" >
            </div>
            <div class="input_group_about" >
                <label for="DESCRIPTION">Description1</label>
                <input  type="text" name="user_description" id="user_description" >
            </div>
        <!-- </div> -->
        <!-- <div class="form_step_about col-xl-6 col-lg-6 col-md-6"> -->
            <div class="input_group_about">
                <label for="SLIDE_TITLE">Title2</label>
                <input  type="text" name="user_titlee" id="user_title" >
            </div>
            <div class="input_group_about" >
                <label for="DESCRIPTION">Description2</label>
                <input  type="text" name="user_descriptionn" id="user_description" >
            </div>
        </div>
    </div>
    <div class="sec_right col-xl-4 col-lg-4 col-md-4">
        <div class="input_group_about_image">
            <img id="output" class="placed_image_about">
            <input type="file" name="slide_image" id="slide_image" class="center_filling" >
        </div>
    </div>
    <div class="last_sec container-fluid row">
        <div class="col-xl-10 col-lg-10 col-md-10"></div>
        <div class="col-xl-2 col-lg-2 col-md-2"><button type="submit"  name="submit_about" class="btn_submit_about">Save changes</button></div>
    </div>
    </form>
    
    <?php
    if(isset($_POST["submit_about"])){
        try
        {
            $mydatabase = new PDO("mysql:host=localhost;dbname=souffle","root","");
        }
        catch(exception $e){
            Die("ERROR".$e->getMessage());
        }

        $picSlide=$_FILES['slide_image']['name'];
        $tmp_dir=$_FILES['slide_image']['tmp_name'];
        $upload_dir="uploads_admin/";
        move_uploaded_file($tmp_dir, $upload_dir.$picSlide);

        $t1=$_POST["user_title"];
        $d1=$_POST["user_description"];
        $t2=$_POST["user_titlee"];
        $d2=$_POST["user_descriptionn"];
        $sql=$mydatabase->prepare("insert into about value(?,?,?,?,?)");
        $sql->execute(array($t1,$d1,$t2,$d2,$upload_dir.$picSlide));
        echo "<script>document.getElementById('about').classList.add('visited');</script>";
    }
    ?>
</form>