<html>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php 
    include($_SERVER['DOCUMENT_ROOT']."/Apotheek/CONSTANTS.php");
    require($_SERVER['DOCUMENT_ROOT']."/Apotheek/assets/include/header.php");
    include($_SERVER['DOCUMENT_ROOT']."/Apotheek/bin/php/handlers/session.php");
    ?>
    

    <body style="background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2)), url('/Apotheek/assets/img/login.jpg');background-repeat:no-repeat;background-size: cover;">
    <div class="setupform">
        <div id="setupform" class="setupformmin">
        <form class="setup" method="post" action="setup.php">
            <div style="margin-left:30px;" class="setupinput">
                <div class="label4"><label class="label4">Email</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="text" id="username" name="logemail" disabled value="<?php echo $login_session; ?>"></label>
            </div>
            <div style="margin-left:10px;" class="setupinput">
                <div class="label4"><label class="label4">Naam</label></div>
                <input style="margin-right:10px; width:150px;height:30px;" type="text" id="name" name="logemail" ></label>
            </div>
            <div style="margin-left:10px;" class="setupinput">
                <div class="label4"><label class="label4">Tussenvoegsels</label></div>
                <input style="margin-right:10px; width:150px;height:30px;" type="text" ></label>
            </div>
            <div style="margin-left:10px;" class="setupinput">
                <div class="label4"><label class="label4">Achternaam</label></div>
                <input style="margin-right:10px; width:150px;height:30px;" type="text" id="sirname" name="logemail" ></label>
            </div><br/>
            <div style="margin-left:30px;" class="setupinput">
                <div class="label4"><label class="label4">Geboortedatum</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="date" id="sirname" name="logemail" ></label>
            </div>
            <div style="margin-left:10px;" class="setupinput">
                <div class="label4"><label class="label4">IBAN</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="text" id="sirname" name="logemail" ></label>
            </div>
            <div style="margin-left:10px;" class="setupinput">
                <div class="label4"><label class="label4">Geslacht</label></div>
                <input style="margin-right:10px; width:20px;height:20px;" type="radio" id="gmale" name="gmale" checked vale="Man">Man</label>
                <input style="margin-right:10px; width:20px;height:20px;" type="radio" id="gmale" name="gfemale" vale="Vrouw">Vrouw</label>
                <input style="margin-right:10px; width:20px;height:20px;" type="radio" id="gmale" name="gother" vale="Anders">Anders</label>
            </div><br/>
            <div style="margin-left:30px;" class="setupinput">
                <div class="label4"><label class="label4">Mobiele Telefoon</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="text" id="sirname" name="logemail" ></label>
            </div>
            <div style="margin-left:10px;" class="setupinput">
                <div class="label4"><label class="label4">Telefoon</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="text" id="sirname" name="logemail" ></label>
            </div><br/>
            <div style="margin-left:30px;" class="setupinput">
                <div class="label4"><label class="label4">Adres</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="text" id="sirname" name="logemail" ></label>
            </div>
            <div style="margin-left:10px;" class="setupinput">
                <div class="label4"><label class="label4">Postcode</label></div>
                <input style="margin-right:10px; width:200px;height:30px;" type="text" id="sirname" name="logemail" ></label>
            </div>
            <input class="submit2" type="submit" name="setup_user" value="Klaar"/>
        </form>
    </div>

    </body>

</html>