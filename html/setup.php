<html>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php 
    include($_SERVER['DOCUMENT_ROOT']."/Apotheek/CONSTANTS.php");
    require($_SERVER['DOCUMENT_ROOT']."/Apotheek/assets/include/header.php");
    include($_SERVER['DOCUMENT_ROOT']."/Apotheek/bin/php/db.php");
    ?>
    
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
            <div style="margin-left:30px;" class="setupinput">
                <div class="label4"><label class="label4">Email</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="text" id="username" name="logemail" disabled value="<?php echo $login_session; ?>"></label>
            </div>
            <div style="margin-left:20px;" class="setupinput">
                <div class="label4"><label class="label4">Naam</label></div>
                <input style="margin-right:10px; width:150px;height:30px;" type="text" id="name" name="name" ></label>
            </div>
            <div style="margin-left:20px;" class="setupinput">
                <div class="label4"><label class="label4">Tussenvoegsels</label></div>
                <input style="margin-right:10px; width:150px;height:30px;" type="text" ></label>
            </div>
            <div style="margin-left:20px;" class="setupinput">
                <div class="label4"><label class="label4">Achternaam</label></div>
                <input style="margin-right:10px; width:150px;height:30px;" type="text" id="sirname" name="sirname" ></label>
            </div><br/>
            <div style="margin-left:30px;" class="setupinput">
                <div class="label4"><label class="label4">Geboortedatum</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="date" id="birth" name="birth" ></label>
            </div>
            <div style="margin-left:20px;" class="setupinput">
                <div class="label4"><label class="label4">IBAN</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="text" id="IBAN" name="iban" ></label>
            </div>
            <div style="margin-left:20px;" class="setupinput">
                <div class="label4"><label class="label4">Geslacht</label></div>
                <input style="margin-right:10px; width:20px;height:20px;" type="radio" id="gmale" name="gender" checked vale="Man">Man</label>
                <input style="margin-right:10px; width:20px;height:20px;" type="radio" id="gmale" name="gender" vale="Vrouw">Vrouw</label>
                <input style="margin-right:10px; width:20px;height:20px;" type="radio" id="gmale" name="gender" vale="Anders">Anders</label>
            </div><br/>
            <div style="margin-left:30px;" class="setupinput">
                <div class="label4"><label class="label4">Mobiele Telefoon</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="text" id="mobile" name="mobilephone" ></label>
            </div>
            <div style="margin-left:20px;" class="setupinput">
                <div class="label4"><label class="label4">Telefoon</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="text" id="number" name="phone" ></label>
            </div><br/>
            <div style="margin-left:30px;" class="setupinput">
                <div class="label4"><label class="label4">Adres</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="text" id="adres" name="adres" ></label>
            </div>
            <div style="margin-left:20px;" class="setupinput">
                <div class="label4"><label class="label4">Postcode</label></div>
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