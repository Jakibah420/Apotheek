<html>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php 
    include($_SERVER['DOCUMENT_ROOT']."/Apotheek/CONSTANTS.php");
    require($_SERVER['DOCUMENT_ROOT']."/Apotheek/assets/include/header.php");
    include($_SERVER['DOCUMENT_ROOT']."/Apotheek/bin/php/db.php");
    $user_check = $_SESSION['username'];
    $pagetitle = ucwords(basename(__FILE__, '.php'));
    $set_sql = mysqli_query($serverLink, "SELECT email FROM userInfo WHERE email = '$user_check' ");
    $rowt = mysqli_fetch_array($set_sql,MYSQLI_ASSOC);
    if(isset($_SESSION['username']) && isset($rowt['email'])){header("location:home.php");die();}
    ?>
    <title><?php echo $pagetitle?></title>
    
    <script>
        function CloseForm(){
            document.getElementById("InfoPanel").style.display="none";
        } function Enabled(form){
            if (document.getElementById("voorwaarden").checked == true ) {
                return true;
            } else {
                document.getElementById("Labelacv").style.color = 'red';
                alert("Om uw account the activeren moet u de voorwaarden accepteren");
                return false;
            }
        }
    </script>

    <body style="background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2)), url('/Apotheek/assets/img/login.jpg');background-repeat:no-repeat;background-size: cover;">
    <div class="setupform">
        <div id="setupform" class="setupformmin">
        <form class="setup" method="post" action="setup.php" onsubmit="return Enabled(this)">
        <div style="margin-left:30px;" class="SetupErr" id="LoginErr" <?php if ($showDivFlag===true){?>style="display:inline-block"<?php } ?> class="labelred">Zorg dat u al de benodigde velden heeft ingevult!</div><br/>
            <div style="margin-left:30px;" class="setupinput">
                <div class="label4"><label class="label4">Email</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="text" id="setemail" name="setemail" disabled value="<?php echo $_SESSION['username']; ?>"></label>
            </div>
            <div style="margin-left:20px;" class="setupinput">
                <div class="label4"><label <?php if ($showDivFlag===true){?>style="color: rgb(255, 71, 71)"<?php } ?> class="label4">Naam</label></div>
                <input style="margin-right:10px; width:150px;height:30px;" type="text" id="name" name="name" ></label>
            </div>
            <div style="margin-left:20px;" class="setupinput">
                <div class="label4"><label class="label4">Tussenvoegsels</label></div>
                <input style="margin-right:10px; width:150px;height:30px;" type="text" id="ename" name="ename"></label>
            </div>
            <div style="margin-left:20px;" class="setupinput">
                <div class="label4"><label <?php if ($showDivFlag===true){?>style="color: rgb(255, 71, 71)"<?php } ?> class="label4">Achternaam</label></div>
                <input style="margin-right:10px; width:150px;height:30px;" type="text" id="srname" name="srname" ></label>
            </div><br/>
            <div style="margin-left:30px;" class="setupinput">
                <div class="label4"><label <?php if ($showDivFlag===true){?>style="color: rgb(255, 71, 71)"<?php } ?> class="label4">Geboortedatum</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="date" id="birth" name="birth" ></label>
            </div>
            <div style="margin-left:20px;" class="setupinput">
                <div class="label4"><label <?php if ($showDivFlag===true){?>style="color: rgb(255, 71, 71)"<?php } ?> class="label4">BSN</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="text" id="bsn" name="bsn" ></label>
            </div>
            <div style="margin-left:20px;" class="setupinput">
                <div class="label4"><label <?php if ($showDivFlag===true){?>style="color: rgb(255, 71, 71)"<?php } ?> class="label4">Geslacht</label></div>
                <input style="margin-right:10px; width:20px;height:20px;" type="radio" id="gmale" name="gender" checked value="Man">Man</label>
                <input style="margin-right:10px; width:20px;height:20px;" type="radio" id="gmale" name="gender" value="Vrouw">Vrouw</label>
                <input style="margin-right:10px; width:20px;height:20px;" type="radio" id="gmale" name="gender" value="Anders">Anders</label>
            </div><br/>
            <div style="margin-left:30px;" class="setupinput">
                <div class="label4"><label <?php if ($showDivFlag===true){?>style="color: rgb(255, 71, 71)"<?php } ?> class="label4">Mobiele Telefoon</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="text" id="mobile" name="mobilephone" ></label>
            </div>
            <div style="margin-left:20px;" class="setupinput">
                <div class="label4"><label <?php if ($showDivFlag===true){?>style="color: rgb(255, 71, 71)"<?php } ?> class="label4">Telefoon</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="text" id="number" name="phone" ></label>
            </div><br/>
            <div style="margin-left:30px;" class="setupinput">
                <div class="label4"><label <?php if ($showDivFlag===true){?>style="color: rgb(255, 71, 71)"<?php } ?> class="label4">Adres</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="text" id="adres" name="adres" ></label>
            </div>
            <div style="margin-left:20px;" class="setupinput">
                <div class="label4"><label <?php if ($showDivFlag===true){?>style="color: rgb(255, 71, 71)"<?php } ?> class="label4">Postcode</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="text" id="postal" name="postal" ></label>
            </div>
            <input class="submit2" type="submit" id="setupdone" name="setup_user" value="Klaar"/>
            <br/><br/><div style="margin-left:30px;" class="setupinput">
                <input style="bottom:0; margin-right:10px; width:20;height:20px;" type="checkbox" id="voorwaarden" name="voorwaarden"><label id="Labelacv">Accepteer voorwaarden.</label>
            </div>
        </form>
        <div id="InfoPanel" class="InfoPanel"><button style="border-style:solid;background:darkred;border-color:darkred;left:30;position:absolute;" onclick="CloseForm()">X</button><br/><br/>Vul uw gegevens zo zorgvuldig <br/> mogenlijk in!<br/><br/> U kunt de informatie <br> na invoer nog veranderen!</div>
    </div>

    </body>

</html>