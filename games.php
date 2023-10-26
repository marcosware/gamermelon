<!DOCTYPE php>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Gamermelon: Games</title>
        <link rel="icon" href="media/favicon/favicon.ico">
    </head>
    <style>
        @font-face {
            font-family: retroComputer;
            src: url(retro_computer.ttf);
        }
        body{
            overflow-x: hidden;
            background-color: rgb(39, 8, 8);
        }
        div{
            position: relative;
        }
        .header{
            background-color: #037801;
            overflow: hidden;
            padding: 15px 50px;
            margin: -0.6%;
            top: 0;
            z-index: 25;
        }
        .header button{
            color: white;
            background: none;
            text-align: center;
            line-height: 26px;
            padding: 12px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }
        .title{
            color: white;
            font-size: 32px;
            font-family: retroComputer;
        }
        .btn_l{
            float: left;
        }
        .btn_r{
            font-family: system-ui, -apple-system, BlinkMacSystemFont,
            'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans',
            'Helvetica Neue', sans-serif;
            float: right;
            font-size: 16px;
        }
        .tags-column{
            margin: -0.6%;
            padding-top: 20px;
            font-family: retroComputer;
            background-color: rgba(165, 2, 37, 0.7);
            color: white;
            max-width: 12%;
            max-height: 2400px;
            font-size: 10px;
            float: left;
            z-index: 5;
        }
        input[type='checkbox']:after {
            width: 12px;
            height: 12px;
            top: -2px;
            left: -1px;
            position: relative;
            background-color: white;
            content: '';
            display: inline-block;
            visibility: visible;
            border: 2px solid white;
        }
        input[type='checkbox']:checked:after {
            width: 12px;
            height: 12px;
            top: -2px;
            left: -1px;
            position: relative;
            background-color: rgb(39, 8, 8);
            content: '';
            display: inline-block;
            visibility: visible;
            border: 2px solid white;
        }
        .games-main{
            padding-left: 12.5%;
        }
        .games-main img{
            padding-left: 0.4%;
        }
        .games-main button{
            text-decoration: none;
            background: none;
            cursor: pointer;
            border: none;
        }
        .games-main-title{
            font-family: retroComputer;
            color: white;
            font-size: 48px;
            z-index: 10;
        }
        .basket{
            position: absolute;
            top: 68.25%;
            left: 71.5%;
        }
        #basket_number{
            color: white;
            background-color: rgba(39, 8, 8, 0.5);
            border-radius: 50%;
            float: right;
            height: 22px;
            line-height: 22px;
            width: 22px;
            text-align: center;
            font-family: retroComputer;
        }
        
    </style>
    <body>
        <header>
        <div class="header">
        <button id="index" class="title" class="btn_l"
                onclick="SendCart(id)" type="submit" form="frm_cart"
                style="padding-top: 18px; margin-left: -12%">
                <img src="media/title_icon.svg" height="5%" width="5%" style="padding-right: -10%"/>
                <i><b>GAMERMEL[]N</b></i></a></button>
            <div class="btn_r">
            <button id="games" onclick="SendCart(id)" type="submit" form="frm_cart" style="padding-top: 18px;">Games</button>
                <button id="softwares" onclick="SendCart(id)" type="submit" form="frm_cart" style="padding-top: 18px;">Softwares</button>
                <button id="news" onclick="SendCart(id)" type="submit" form="frm_cart" style="padding-top: 18px;">News</button>
                <button id="community" onclick="SendCart(id)" type="submit" form="frm_cart" style="padding-top: 18px;">Community<br><font color="yellow">Coming Soon!</font></button>
                <button id="login" onclick="SendCart(id)" type="submit" form="frm_cart" style="padding-top: 18px;">Sign In<br><font color="yellow">Coming Soon!</font></button>
                <div style="float:right;">
                    <button id="cart" onclick="SendCart(id)" style=" width: 50px; height: 40px;
                    vertical-align: super">
                    <a href="cart.html" style="text-decoration: none;
                    color: none; "></a><img src="media/cart.png"></button>
                <?php 
                $cart_value = $_POST["hidden_cart"];
                if ($cart_value != 0) {
                print('<div id="basket_number">');
                print($cart_value);
                print("</div>"); }
                else { print '<div id="basket_number">0</div>'; }
                ?>
                </div>
            </div> <!-- btn-r -->
        </div> <!-- header -->
        </header>
        <main>
            <div>
            <div class="tags-column">
                <i> \\ \\ TAGS // // </i><br><br>
                <form name="frm_tags" id="frm_tags">
                <input tabindex="1" type="checkbox" name="tags" id="action" value="action">ACTION<br><br>
                <input tabindex="2" type="checkbox" name="tags" id="adventure" value="adventure">ADVENTURE<br><br>
                <input tabindex="3" type="checkbox" name="tags" id="building" value="building">BUILDING<br><br>
                <input tabindex="4" type="checkbox" name="tags" id="fps" value="fps">FPS<br><br>
                <input tabindex="5" type="checkbox" name="tags" id="horror" value="horror">HORROR<br><br>
                <input tabindex="6" type="checkbox" name="tags" id="management" value="management">MANAGEMENT<br><br>
                <input tabindex="7" type="checkbox" name="tags" id="multiplayer" value="multiplayer">MULTIPLAYER<br><br>
                <div id="coming_soon" style="color: yellow; transform: rotate(-45deg); z-index: 150; font-size: 25px;
                background-color: rgb(165, 2, 37); text-align: center;">
                    COMING SOON!
                </div>
                <input tabindex="8" type="checkbox" name="tags" id="platform" value="platform">PLATFORM<br><br>
                <input tabindex="9" type="checkbox" name="tags" id="puzzle" value="puzzle">PUZZLE<br><br>
                <input tabindex="10" type="checkbox" name="tags" id="racing" value="racing">RACING<br><br>
                <input tabindex="11" type="checkbox" name="tags" id="sci-fi" value="sci-fi">SCI-FI<br><br>
                <input tabindex="12" type="checkbox" name="tags" id="simulation" value="simulation">SIMULATION<br><br>
                <input tabindex="13" type="checkbox" name="tags" id="singleplayer" value="singleplayer">SINGLEPLAYER<br><br>
                <input tabindex="14" type="checkbox" name="tags" id="tps" value="tps">TPS<br><br>
                <input tabindex="15" type="checkbox" name="tags" id="zombies" value="zombies">ZOMBIES<br><br>
                <input tabindex="16" type="button" name="tags" id="apply"
                value="APPLY" style="font-family: retroComputer; color: white;
                background-color: rgb(39, 8, 8); border: none;">
                <input tabindex="17" type="reset" name="tags" id="clear" value="CLEAR"
                style="font-family: retroComputer; color: white;
                background-color: rgb(39, 8, 8); border: none;"><br><br>
            </form>
            </div> <!-- tags-column -->
            <div class="games-main">
                <div class="games-main-title">ALL GAMES</div>
                    <div style="float:left; padding-right: 6px; padding-left: 4px;" id="Disgrace Dungeon">
                        <button class="basket" onclick="AddItem('Disgrace Dungeon')" style="left: 72.15%;">
                        <img src="media/basket.png" alt="basket_icon" class="basket"/></button>
                        <img src="media/disgrace_dungeon.png" alt="disgrace_dungeon_banner"
                        width="220px" height="140px"/>
                    </div>
                    <div style="float:left; padding-right: 6px;" id="Flabbergastator">
                        <button class="basket" onclick="AddItem('Flabbergastator')">
                        <img src="media/basket.png" alt="basket_icon" class="basket"/></button>
                        <img src="media/flabbergastator.png" alt="flabbergastator_banner"
                        width="220px" height="140px"/>
                    </div>
                    <div style="float:left; padding-right: 6px;" id="Gravefoot">
                        <button class="basket" onclick="AddItem('Gravefoot')">
                        <img src="media/basket.png" alt="basket_icon" class="basket"/></button>
                        <img src="media/gravefoot.png" alt="gravefoot_banner"
                        width="220px" height="140px"/>
                    </div>
                    <div style="float:left; padding-right: 6px;" id="Have a Nice Stay">
                        <button class="basket" onclick="AddItem('Have a Nice Stay')">            
                        <img src="media/basket.png" alt="basket_icon" class="basket"/></button>
                        <img src="media/have_a_nice_stay.png" alt="have_a_nice_stay_banner"
                        width="220px" height="140px"/>
                    </div>
                    <div style="float:left; padding-right: 6px;" id="Spy Duck">
                        <button class="basket" onclick="AddItem('Spy Duck')">
                        <img src="media/basket.png" alt="basket_icon" class="basket"/></button>
                        <img src="media/spy_duck.png" alt="spy_duck_banner"
                        width="220px" height="140px"/>
                    </div>
            </div>
        </div>
        <form id="frm_cart" method="POST">  
            <input type="hidden" name="hidden_cart" id="hidden_cart" value=SendCart()>
            <?php
            $cart_list = $_POST["hidden_list"];
            if ($cart_list != "") {
            print('<input type="hidden" name="hidden_list" id="hidden_list" value="'.$cart_list.'">');
            }
            else { print '<input type="hidden" name="hidden_list" id="hidden_list" value="">'; }
            ?>
        </form>
        <form id="price_data" method="POST">
            <input type="hidden" name="Disgrace_Dungeon_price" id="Disgrace_Dungeon_price" value="$39,99">
            <input type="hidden" name="Gravefoot_price" id="Gravefoot_price" value="$36,99">
            <input type="hidden" name="Flabbergastator_price" id="Flabbergastator_price" value="$19,99">
            <input type="hidden" name="Have_a_nice_stay_price" id="Have_a_nice_stay_price" value="$19,99">
            <input type="hidden" name="Paintception_price" id="Paintception_price" value="$27,99">
            <input type="hidden" name="Faural_price" id="Faural_price" value="$16,99">
        </form>
        <div id="div_seed" style="top: 0%; position: absolute; overflow: hidden; z-index: -1;">
        </div>
    </main>
    </body>
    <script>
        var your_cart = document.getElementById("hidden_list").value;
        if (document.getElementById("hidden_list").value == "") {
            your_cart = "Seu carrinho está vazio";
        }
        function AddItem(id) {
            if (your_cart == "Seu carrinho está vazio") {
                your_cart = '';
            }
            your_cart = your_cart
            + document.getElementById(id).id
            + '\n';
            var basket_number =  document.getElementById('basket_number');
            var basket_value = basket_number.innerHTML;
            basket_value ++;
            basket_number.innerHTML = basket_value;
            document.getElementById("hidden_list").value = your_cart;
        }
        function Check() {
            alert(your_cart);
        }
        function SendCart(id) {
            var basket_number = document.getElementById('basket_number');
            var basket_value = basket_number.innerHTML;
            document.getElementById("hidden_cart").value = basket_value;
            document.getElementById("frm_cart").action=id+".php";
            document.getElementById("frm_cart").submit();
        }
        window.onload = function backSeeds() {
            var i = 0;
            for (i = 0; i < 38; i++) {
            document.getElementById("div_seed").innerHTML =
            document.getElementById("div_seed").innerHTML +
            "<img src=\"media/seed.svg\" id=\"seed_" + i + "\"/>";
            };
            i = 0;
            for (i = 0; i < 38; i++) {
                var test_seed = document.getElementById("seed_"+i);
                var rotation_test = document.getElementById("seed_"+i).style.transform = "rotate("+Math.random() * 360+"deg)";
                var top_text = document.getElementById("seed_"+i).style.top = Math.random() * 360 +"px";
                document.getElementById("seed_"+i).style.left = Math.random() * 360 +"px";
                document.getElementById("seed_"+i).style.right = Math.random() * 360 +"px";
                document.getElementById("seed_"+i).style.top = Math.random() * 360 +"px";
                document.getElementById("seed_"+i).style.padding = Math.random() * 100 +"px";
                }
            }
    </script>
</html>
