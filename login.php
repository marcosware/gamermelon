<!DOCTYPE php>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Gamermelon: Account</title>
        <link rel="icon" href="media/favicon/favicon.ico">
    </head>
    <style>
        @font-face {
            font-family: retroComputer;
            src: url(retro_computer.ttf);
        }
        body{
            overflow: hidden;
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
        #login_div{
            color: white;
            background-color: rgba(165, 2, 37, 0.7);
            font-size: 24px;
            font-family: retroComputer;
            width: 35%;
            margin-left: 10%;
            height: 500px;
            float: left;
            padding-top: 28px;
        }
        #register_div{
            color: white;
            background-color: rgba(165, 2, 37, 0.7);
            font-size: 24px;
            font-family: retroComputer;
            width: 35%;
            margin-right: 10%;
            height: 500px;
            float: right;
            padding-top: 28px;
        }
        #login_submit{
            color: rgb(165, 2, 37);
            background: white;
            font-family: retroComputer;
            font-size: 24px;
            border: rgb(165, 2, 37);
        }  
        #register_submit{
            color: rgb(165, 2, 37);
            background: white;
            font-family: retroComputer;
            font-size: 24px;
            border: rgb(165, 2, 37);
        }
    </style>
    <body>
        <header>
        <div class="header">
                <button id="index" class="title" class="btn_l"
                onclick="SendCart(id)" type="submit" form="frm_cart"
                style="padding-top: 18px;">
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
            <form id="frm_cart" method="POST">  
            <input type="hidden" name="hidden_cart" id="hidden_cart" value=SendCart()>
            <?php
            $cart_list = $_POST["hidden_list"];
            if ($cart_list != "") {
            print('<input type="hidden" name="hidden_list" id="hidden_list" value="'.$cart_list.'">');
            }
            else { print '<input type="hidden" name="hidden_list" id="hidden_list" value=" ">'; }
            ?>
            </form> 
            <div>
            <div id="login_div">
                <div align="center" style="padding: none; border-collapse: collapse; background-color: rgb(39, 8, 8);
                margin-left: 12%; margin-right: 12%;">LOG-IN</div><br><br>
                <form id="login_system" method="POST">
                <input type="hidden" name="hidden_login" id="hidden_login" value="">
                <label for="userL_input">Username:</label>
                <input type="text" name="userL_input" id="userL_input" style="vertical-align: middle;"><br><br>
                <label for="passL_input">Password:</label>
                <input type="password" name="passL_input" id="passL_input" style="vertical-align: middle;"><br><br><br>
                <div id="coming_soon" style="color: yellow; transform: rotate(-45deg); z-index: 150; font-size: 50px; background-color: rgb(165, 2, 37);">
                    COMING SOON!
                </div>
                <div align="center"><button name="login_submit" id="login_submit" style="cursor: pointer;" onclick="buttonPHP_L()">Enter</button></div><br>
            </form>
            </div>
            <div id="register_div">
                <div align="center" style="padding: none; border-collapse: collapse; background-color: rgb(39, 8, 8);
                margin-left: 12%; margin-right: 12%;">REGISTER</div><br><br>
                <form id="register_system" method="POST" action="/login.php">
                <label for="userR_input">Username:</label>
                <input type="text" name="userR_input" id="userR_input" style="vertical-align: middle;"><br><br>
                <label for="emailR_input">E-mail:</label>
                <input type="email" name="emailR_input" id="emailR_input" style="vertical-align: middle;"><br><br>
                <label for="passR_input">Password:</label>
                <input type="password" name="passR_input" id="passR_input" style="vertical-align: middle;"><br><br><br>
                <div align="center"><button name="register_submit" id="register_submit" style="cursor: pointer;" onclick="buttonPHP_R()">Register</button></div><br>
            </form>  
            &nbsp;&nbsp;&nbsp;<font color="yellow">Save your username now! </font>   
        </div>
        <div id="div_seed" style="top: 0%; position: absolute; overflow: hidden; z-index: -1;">
        </div>
        <?php
            function loginToAccount() {
            $proceed = false;
            $logged_on = false;
            $user_logged = $_POST["userL_input"];
            $pass_logged = $_POST["passL_input"];
            $user_data = fopen("user_data.txt", "r") or die("Data file not found!");
                while(feof($user_data) == false) {
                    $user_check = fgets($user_data);
                    if ($user_logged == $user_check) {
                    $proceed = true;
                    $pass_data = fopen("pass_data.txt", "r") or die("Data file not found!");
                    break;
                        while(feof($pass_data) == false) {
                            $pass_check = fgets($pass_data);
                                if($user_logged.$pass_logged == $user_check.$pass_check) {
                                print("<form id=\"php_to_login\">
                                <input id=\"php_to_loginput\" type=\"hidden\" value=\""
                                .$user_logged.$pass_logged."\"</input>");
                                return true;
                                break;
                                }
                        }
                    } else { return false; }
                }
            }
            function registerData() {
            $error = false;
            $registered = $_POST["userR_input"];
            $user_data = fopen("user_data.txt", "r") or die("Data file not found!");
            while(feof($user_data) == false) {
                $user_check = fgets($user_data);
                if ($registered == $user_check) {    
                    $error = true;
                    break;
                    }
                }
            if ($error == false) {
                fclose($user_data);
                $user_data = fopen("user_data.txt", "a") or die("Data file not found!");
                $data_to_text = $_POST["userR_input"];
                fwrite($user_data, $data_to_text.PHP_EOL);
                fclose($user_data);
                $pass_data = fopen("pass_data.txt", "a") or die("Data file not found!");
                $data_to_text = $_POST["userR_input"];
                fwrite($pass_data, $data_to_text);
                $data_to_text = $_POST["passR_input"];
                fwrite($pass_data, $data_to_text.PHP_EOL);
                $data_to_text = "";
                fclose($pass_data);
                }
            }
            ?>
    </main>
    <script>
        if (button_test_validation == true) {
        var hdlogin = document.getElementById("php_to_login").value;
        if (hdlogin != "") {
        document.getElementById("login_div").style = "display: hidden";
        document.getElementById("register_div").style = "display: hidden";
        }};
        var button_test_validation = false;
        window.onload = function backSeeds() {
            var i = 0;
            for (i = 0; i < 65; i++) {
            document.getElementById("div_seed").innerHTML =
            document.getElementById("div_seed").innerHTML +
            "<img src=\"media/seed.svg\" id=\"seed_" + i + "\"/>";
            };
            i = 0;
            for (i = 0; i < 65; i++) {
                var test_seed = document.getElementById("seed_"+i);
                var rotation_test = document.getElementById("seed_"+i).style.transform = "rotate("+Math.random() * 360+"deg)";
                var top_text = document.getElementById("seed_"+i).style.top = Math.random() * 360 +"px";
                document.getElementById("seed_"+i).style.left = Math.random() * 360 +"px";
                document.getElementById("seed_"+i).style.right = Math.random() * 360 +"px";
                document.getElementById("seed_"+i).style.top = Math.random() * 360 +"px";
                document.getElementById("seed_"+i).style.padding = Math.random() * 100 +"px";
                }
            }
        document.getElementById("register_submit").onkeydown=function(event) {
            if (event.keyCode == 13) {
                return false;
            }
        }
        document.getElementById("login_submit").onkeydown=function(event) {
            if (event.keyCode == 13) {
                return false;
            }
        }
        function buttonPHP_R() {
                var button_test_validation = true;
                document.createTextNode("<?php registerData() ?>");
            }
        function buttonPHP_L() {
            var button_test2_validation = true;
            document.createTextNode("<?php loginToAccount() ?>");
            document.getElementById("hidden_login").value=
            document.getElementById("userL_input").value;
            document.getElementById("login_system").submit();
        }
        document.getElementById("frm_cart").onkeydown=function(event) {
            if (event.keyCode == 13) {
                return false;
            }
        }
        if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
        }
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
            test = document.getElementById("frm_cart");
            document.getElementById("frm_cart").action=id+".php";
            document.getElementById("frm_cart").submit();
        }
    </script>
    </body>
</html>