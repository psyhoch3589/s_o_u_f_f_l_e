<form action="" class="form_Cards row" id="myForm" method="POST"  enctype="multipart/form-data">
    <div class="form_Cards_first col-xl-12 col-lg-12 col-md-12">
        <h1>Cards</h1>
        <h5>Display</h5>
        <div class="tyy">
            <input type="radio" id="diplay_yes" name="display_cards" value="YES" style="padding:0 !important">
            <label for="diplay_yes">YES</label>
            <input type="radio" id="diplay_no" name="display_cards" value="NO">
            <label for="diplay_no">NO</label>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="tttt input_group_Cards">
                    <label for="user_title">Title1</label>
                    <input  type="text" name="user_title1" id="user_title" >
                </div>
                <div class="tttt input_group_Cards" >
                    <label for="user_description">Description1</label>
                    <input  type="text" name="user_description1" id="user_description" >
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="input_group_Cards">
                    <label for="user_title">Title2</label>
                    <input  type="text" name="user_title2" id="user_title" >
                </div>
                <div class="input_group_Cards" >
                    <label for="user_description">Description2</label>
                    <input  type="text" name="user_description2" id="user_description" >
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="input_group_Cards">
                    <label for="user_title">Title3</label>
                    <input  type="text" name="user_title3" id="user_title" >
                </div>
                <div class="input_group_Cards">
                    <label for="user_description">Description3</label>
                    <input  type="text" name="user_description3" id="user_description" >
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
//il faut inserer une ligne dans le tableau cards pour que le code ca marche sinon y aura pas de update
if(isset($_POST["submit_cards"])){
    try{
        $mydatabase = new PDO("mysql:host=localhost;dbname=souffle","root","");
    }catch(exception $e){
        Die("ERROR".$e->getMessage());
    }
    $t1=$_POST["user_title1"];
    $d1=$_POST["user_description1"];
    $t2=$_POST["user_title2"];
    $d2=$_POST["user_description2"];
    $t3=$_POST["user_title3"];
    $d3=$_POST["user_description3"];
    if($t1!="") $mydatabase->exec("update cards set titre1=\"".$t1."\"");
    if($d1!="") $mydatabase->exec("update cards set desc1=\"".$d1."\"");
    if($t2!="") $mydatabase->exec("update cards set titre2=\"".$t2."\"");
    if($d2!="") $mydatabase->exec("update cards set desc2=\"".$d2."\"");
    if($t3!="") $mydatabase->exec("update cards set titre3=\"".$t3."\"");
    if($d3!="") $mydatabase->exec("update cards set desc3=\"".$d3."\"");
    if(isset($_POST["display_cards"]))
    {
        if($_POST["display_cards"]==="NO") $status="no";
        else $status="yes";
    }
    else $status="yes";
    $mydatabase->exec("update cards set statu=\"".$status."\"");
    }
$mydatabase=null;
?>