<form action="" class="form_Cards row" id="myForm" method="POST"  enctype="multipart/form-data">
    <div class="form_Cards_first col-xl-12 col-lg-12 col-md-12">
        <h1>Cards</h1>
        <h5>Display</h5>
        <div class="tyy">
            <input type="radio" id="diplay_yes" name="display" value="YES" style="padding:0 !important">
            <label for="diplay_yes">YES</label>
            <input type="radio" id="diplay_no" name="display" value="NO">
            <label for="diplay_no">NO</label>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="tttt input_group_Cards">
                    <label for="user_title">Title1</label>
                    <input  type="text" name="user_title" id="user_title" >
                </div>
                <div class="tttt input_group_Cards" >
                    <label for="user_description">Description1</label>
                    <input  type="text" name="user_description" id="user_description" >
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="input_group_Cards">
                    <label for="user_title">Title2</label>
                    <input  type="text" name="user_title" id="user_title" >
                </div>
                <div class="input_group_Cards" >
                    <label for="user_description">Description2</label>
                    <input  type="text" name="user_description" id="user_description" >
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="input_group_Cards">
                    <label for="user_title">Title3</label>
                    <input  type="text" name="user_title" id="user_title" >
                </div>
                <div class="input_group_Cards">
                    <label for="user_description">Description3</label>
                    <input  type="text" name="user_description" id="user_description" >
                </div>
            </div>
        </div>
    </div>
    <div class="last_sec_Cards container-fluid row">
        <div class="col-xl-10 col-lg-10 col-md-10"></div>
        <div class="col-xl-2 col-lg-2 col-md-2"><button type="submit"  name="submit_cards" class="btn_submit_about">Save changes</button></div>
    </div>
    </form>
    
    <?php
    if(isset($_POST["submit_about"])){
        try{
            $mydatabase=new PDO("mysql:host=localhost;dbname=souffle","root","");
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
        if($_POST["display"]==="NO") $status="no";
        else $status="yes";
        $sql=$mydatabase->prepare("insert into about value(?,?,?,?,?,?)");
        $sql2="delete from about";
        $mydatabase->exec($sql2);
        $sql->execute(array($t1,$d1,$t2,$d2,$upload_dir.$picSlide,$status));
        echo $status;
        echo "<script>document.getElementById('about').classList.add('visited');</script>";
    }
    ?>
</form>