<form action="" class="form_about" id="myForm" method="POST"  enctype="multipart/form-data">
    <h1>About</h1>
    <div class="row form_step_text">
        <div class="form_step_about col-xl-6 col-lg-6 col-md-6">
            <div class="input_group_about tesst">
                <label for="SLIDE_TITLE">Title1</label>
                <input  type="text" name="user_title" id="user_title" >
            </div>
            <div class="input_group_about" style="padding-bottom: 60px;">
                <label for="DESCRIPTION">Description1</label>
                <input  type="text" name="user_description" id="user_description" >
            </div>
        </div>
        <div class="form_step_about col-xl-6 col-lg-6 col-md-6">
            <div class="input_group_about tesst">
                <label for="SLIDE_TITLE">Title2</label>
                <input  type="text" name="user_titlee" id="user_title" >
            </div>
            <div class="input_group_about" style="padding-bottom: 60px;">
                <label for="DESCRIPTION">Description2</label>
                <input  type="text" name="user_descriptionn" id="user_description" >
            </div>
        </div>
    </div>
    <div class="row form_step_image">
        <div class="form_step_about col-xl-12 col-lg-12 col-md-12">
            <div class="input_group_about_image">
                <img id="output" class="placed_image_about">
                <input type="file" name="slide_image" id="slide_image" class="center_filling" >
            </div>
        </div>
    </div>
    <div class="btns-group_about row">
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
        <div class="ttt col-md-7 col-lg-7 col-xl-7">
            <button type="submit"  name="submit" class="btn_submit_about">Save changes</button>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2"></div>
    </div>
</form>