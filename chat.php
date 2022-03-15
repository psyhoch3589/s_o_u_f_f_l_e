<?php
try
{
    $mydatabase = new PDO("mysql:host=localhost;dbname=souffle","root","");
}
catch(exception $e){
    Die("ERROR".$e->getMessage());
}
function generate_contact_item($first_name,$last_name,$num){
    $name="d".$num;
    echo "<button href='#' style='color:black;text-decoration:none' name=".$name." class='select_contact'><div class='cont1_chat_user'>
        <img src='anas.jpg' class='rounded-circle'>
        <h3>".$first_name." ".$last_name."</h3>
    </div></button>";
    }
function messg_box1($u)
    {
        echo "
        <div class='cont_messg'>
        <p>".$u."<p>
        </div>
        ";
    }
function messg_box2($u)
    {
        echo "
        <div class='cont_messg2'>
            <p>".$u."<p>
        </div>
        ";
    }
?>
<form method="POST" action="" class="chat_container">
        <div class="container-fluid row nopadding">
            <div class="cont1_chat col-md-4 col-lg-4 col-xl-4 nopadding">
                <div class="cont1_chat_contact">
                    <h1>Messagerie</h1>
                </div>
                <?php
                $i=0;
                $sql=$mydatabase->query("select * from chat");
                while($row=$sql->fetch(PDO::FETCH_NUM)){
                    generate_contact_item($row[1],$row[0],$i);
                    $i++;
                }
                ?>
            </div>
            <div class="cont2_chat col-md-8 col-lg-8 col-xl-8 nopadding">
                <div class="cont_right">
                <div class="cont2_chat_head nopadding">
                    <!-- <h1>user1</h1> -->
                    <?php
                    $test=0;
                    $sql=$mydatabase->query("select * from chat");
                    for($j=0;$j<$i;$j++){
                        $name="d".$j;
                        $row=$sql->fetch(PDO::FETCH_NUM);
                        if(isset($_POST[$name])){
                            $_SESSION["contact"]=$j;
                            echo "<h1>".$row[1]." ".$row[0]."</h1>";
                            $test=1;
                            break;
                        }
                    }
                    //ce script pour que je reste sur la meme page de messagerie lors du rafrishissement
                    if($test==0)
                    {
                        $sql=$mydatabase->query("select * from chat");
                        for($k=0;$k<$_SESSION["contact"];$k++){
                            $row=$sql->fetch(PDO::FETCH_NUM);
                        }
                        $row=$sql->fetch(PDO::FETCH_NUM);
                        echo "<h1>".$row[1]." ".$row[0];
                    }
                    ?>
                </div>
                <div class="cont2_chat_body nopadding"><?php //if the administrator respond the visitor this message will be sent from the email of the association automatically ?>
                    <?php
                        $myfile=fopen("$row[3]","a+");
                        while(!feof($myfile)){
                            $stt="";
                            $message=fgets($myfile);
                            $n=strlen($message);
                            $m=str_split($message);
                            for($k=2;$k<$n;$k++){
                                $stt=$stt.$m[$k];
                            }
                            if($m[0]==1) messg_box1($stt);
                            else if($m[0]==2) messg_box2($stt);
                        }
                        fclose($myfile);
                        if(isset($_POST["respond"])){
                            $message = $_POST["input_respond"];
                            if(!empty($message)) {
                                $messg="2/".$message."\n";
                                //here the script for sending the message of the administrator to the user in the email
                                $myfile2=fopen("$row[3]","a+");
                                fwrite($myfile2,$messg);
                                fclose($myfile2);
                            }
                            messg_box2($message);
                        }
                    ?>
                </div>
                </div>
                <div class="cont_chat_respond container-fluid row nopaddingg">
                    <div class="col-md-10 col-lg-10 col-xl-10">
                        <input type="text" placeholder="your respond" name="input_respond" class="tt">
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2">
                        <button type="submit" class="respond" name="respond">Replay</button>
                    </div>
                </div>
            </div> 
        </div>
    </form>
    <?php
    $mydatabase = null;
    ?>