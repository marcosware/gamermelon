<!DOCTYPE php>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Gamermelon: News</title>
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
            padding-top: 42px;
            font-family: retroComputer;
            background-color: rgba(165, 2, 37, 0.7);
            color: white;
            max-width: 12%;
            max-height: 2400px;
            font-size: 10px;
            float: left;
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
        #news-main-title{
            font-family: retroComputer;
            color: white;
            font-size: 48px;
        }
        .news-index{
            margin-left: 240px;
            margin-right: 240px;
            align-items: center;
            background-color: rgba(165, 2, 37, 0.7);
            color: white;
            height: 30%;
            font-weight: bold;
            font-family: system-ui, -apple-system, BlinkMacSystemFont,
            'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans',
            'Helvetica Neue', sans-serif;
        }
        .news-index .news-lesser-title{
            font-family: retroComputer;
            color: white;
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
                <div id="news-main-title">NEWS</div>
                <div class="news-index">
                    <div class="news-lesser-title">17/10/2023 - Softwares are now available!</div>
                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GAMERMELON released it's new Software shop.
                    You can visit the category now and check the new exclusives
                    softwares right now. It contains a variety of differents types of
                    softwares which will be easily filtered with our coming Tags options.
                    Create magnum opus with Paintception and beautiful songs with Faural!
                    Enjoy!
                    </p>
                </div><br>
                <div class="news-index">
                <div class="news-lesser-title">03/10/2023 - Creation of Gamermelon.</div>
                <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It's with a lot of pleasure that it's declared the creation of GAMERMELON!
                A digital video game and software distribution/commerce service and community.<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For now, our services include the purchase of games and softwares where
                they will be maintained in the user's virtual library.<br>
                Alongside with that, with a account, the user can access the community and create
                and share posts, chat with friends and participate in events. 
                It's still on development stage and 
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
    </script>
</html>
