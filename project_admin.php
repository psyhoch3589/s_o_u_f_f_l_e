







<form action="" class="form_stati" id="myForm" method="POST"  enctype="multipart/form-data">
    <div class="head">
        <h1>Project</h1>
    </div>
    <div class="container-fluid form_step_text_stati">
        <div class="form_step_stati">
        <div class="form_title row">
                <div class="col-md-3 col-lg-3 col-xl-3"><h5>Title</h5></div>
                <div class="col-md-3 col-lg-3 col-xl-3"><h5>Description</h5></div>
                <div class="col-md-3 col-lg-3 col-xl-3"><h5>Image title</h5></div>
                <div class="col-md-3 col-lg-3 col-xl-3"></div>
        </div><hr>



       



           
        <div class="btns-group_about row">
            <div class="col-md-2 col-lg-2 col-xl-2"></div>
            <div class="ttt col-md-8 col-lg-8 col-xl-8">
                <button type="submit" name="add" class="add_btn">add</button>
                <button type="submit"  name="submit_changes" class="btn_submit_about">Save changes</button>
            </div>
            <?php
                if(isset($_POST["submit_changes"])){
                echo "<script>alert('your changes has been saved successfully');</script>";
                }
            ?>
            <div class="col-md-2 col-lg-2 col-xl-2"></div>
        </div>
    </div>
</form>