<form action="" class="form_stati" id="myForm" method="POST"  enctype="multipart/form-data">
    <div class="head">
        <h1>Statistics</h1>
    </div>
    <div class="container-fluid form_step_text_stati">
        <div class="form_step_stati">
        <div class="form_title row">
                <div class="col-md-3 col-lg-3 col-xl-3"><h5>name</h5></div>
                <div class="col-md-3 col-lg-3 col-xl-3"><h5>Statistique</h5></div>
                <div class="col-md-3 col-lg-3 col-xl-3"><h5>Status</h5></div>
                <div class="col-md-3 col-lg-3 col-xl-3"></div>
        </div><hr>
            <?php
            function generate_items($name,$pourcentage,$status,$num){
                if($status=1){
                    if($num==1) {
                        $delete="d1";
                        $btn="t1";
                    }
                    if($num==2) {
                        $delete="d2";
                        $btn="t2";
                    }
                    if($num==3) {
                        $delete="d3";
                        $btn="t3";
                    }
                    if($num==4) {
                        $delete="d4";
                        $btn="t4";
                    }
                }else{
                    if($num==1) {
                        $delete="d1";
                        $btn="m1";
                    }
                    if($num==2) {
                        $delete="d2";
                        $btn="m2";
                    }
                    if($num==3) {
                        $delete="d3";
                        $btn="m3";
                    }
                    if($num==4) {
                        $delete="d4";
                        $btn="m4";
                    }
                }
                echo "<div class='form_stati_item row'>
                    <div class='col-md-3 col-lg-3 col-xl-3'><h5>".$name."</h5></div><hr>
                    <div class='col-md-3 col-lg-3 col-xl-3'><h5>".$pourcentage."</h5></div><hr>";
                    if($status==0) echo "<div class='col-md-3 col-lg-3 col-xl-3'><button type='submit' class='status-btn-disabled' name=".$btn.">disabled</button></div><hr>";
                    else echo "<div class='col-md-3 col-lg-3 col-xl-3'><button type='submit' class='status-btn-enabled' name=".$btn.">enabled</button></div><hr>";
                    echo"<div class='col-md-3 col-lg-3 col-xl-3'><button type='submit' class='status-btn-delete' name=".$delete.">delete</button></div>
                </div>";
            }
            function add_item()
            {
                echo "<div class='form_stati_item row'>
                    <div class='col-md-3 col-lg-3 col-xl-3'><input type='text' placeholder='enter the name of your diagram' name='name'></div><hr>
                    <div class='col-md-3 col-lg-3 col-xl-3'><input type='text' placeholder='enter the pourcentage' name='pourcentage'></div><hr>
                    <div class='col-md-3 col-lg-3 col-xl-3'></div><hr>
                    <div class='col-md-3 col-lg-3 col-xl-3'><button type='submit' class='status-btn-add' name='add_item'>add</button></div>
                </div>";

            }
            try{
                $mydatabase = new PDO("mysql:host=localhost;dbname=souffle","root","");
            }
            catch(exception $e){
                Die("ERROR".$e->getMessage());
            }
            //delete a statistic
            $sql=$mydatabase->prepare("delete from stati where id=?");
            for($i=1;$i<=4;$i++)
            {
                $name="d".$i;
                if(isset($_POST["$name"])){
                    $sql->execute(array($i));
                    break;
                }
            }
            //modify the status of the statistics to enabled
            $sql=$mydatabase->prepare("update stati set statu=0 where id=?");
            for($i=1;$i<=4;$i++)
            {
                $btnn="t".$i;
                if(isset($_POST["$btnn"])){
                    $sql->execute(array($i));
                    break;
                }
            }
            //modify the status of the statistics to disabled
            $sql=$mydatabase->prepare("update stati set statu=1 where id=?");
            for($i=1;$i<=4;$i++)
            {
                $btnn="m".$i;
                if(isset($_POST["$btnn"])){
                    $sql->execute(array($i));
                    break;
                }
            }


            $sql=$mydatabase->query("select * from stati");
            $list_exist=array();
            while($row=$sql->fetch(PDO::FETCH_NUM)){
                generate_items($row[1],$row[2],$row[3],$row[0]);//it generate all statistics that we have in the Database
                array_push($list_exist,$row[0]);
            }
            //those line of codes are to find the next id that i can give to the next input of the administrator
            if(!in_array(1,$list_exist)) $j=1;
            else if(!in_array(2,$list_exist)) $j=2;
            else if(!in_array(3,$list_exist)) $j=3;
            else if(!in_array(4,$list_exist)) $j=4;

            //add a statistic
            if(isset($_POST["add"])){
                add_item();
            }
            if(isset($_POST["add_item"])){//il faut ajouter la contrainte de ne pas avoir deux statistique avec le meme nom
                $sql=$mydatabase->prepare("insert into stati values(?,?,?,?)");
                $sql->execute(array($j,$_POST['name'],$_POST['pourcentage'],1));
                $sqll=$mydatabase->query("select * from stati");
                while($row=$sqll->fetch(PDO::FETCH_NUM)){
                    if($row[2]==0) $status="disabled";
                    else $status="enabled";
                    $result=$row;
                }
                generate_items($result[1],$result[2],$status,$result[0]);
            }
            $mydatabase=null;
            ?>
        </div>
    </div>
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
</form>