<!DOCTYPE php>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Gamermelon - Full of games inside!</title>
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
            height: 62.328;
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
            text-decoration: none;
        }
        .slides-full{
            position: relative;
            margin-left: 12.5%;
            margin-top: 2.5%;
            max-width: 642px;
        }
        .slide-single{
            display: none;
        }
        .slide-page{
            padding: 10px;
            font-family: retroComputer;
            font-weight: bold;
            font-size: 16px;
            position: absolute;
            color: white;
        }
        .slide-title{
            color: white;
            font-family: retroComputer;
            font-weight: bold;
            font-size: 16px;
            margin-top: -5%;
            text-align: center;
        }
        .slide-desc{
            color: white;
            font-weight: bold;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI',
            Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: justify;
            position: absolute;
            padding-left: 15px;
            padding-right: 30px;
            top: 0px;
            left: 100%;
            width: 40%;
            height: 102%;
            background-color: rgba(165, 2, 37, 0.7);
        }
        .fade{
            animation-name: fade;
            animation-duration: 1s;
        }
        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }
        .prevpage, .nextpage{
            font-family: retroComputer;
            font-size: 18px;
            padding: 10px;     
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            cursor: pointer; 
            user-select: none;
        }
        .prevpage{
            left: 0;
        }
        .nextpage{
            right: 0;
        }
        .prevpage:hover, .nextpage:hover{
            transition: 1s fade;
            background-color: rgb(165, 2, 37);
        }
        .last-new{
            font-family: system-ui, -apple-system, BlinkMacSystemFont,
            'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans',
            'Helvetica Neue', sans-serif;
            max-width: 20%;
            font-size: 24px;
            color: white;
            font-weight: bold;
            position: absolute;
            display: inline;
            padding-top: 20px;
            margin-left: -23%;
        }
        .btn_ln{
            font-family: retroComputer;
            color: white;
            font-weight: bold;
            font-style: italic;
            font-size: 24px;
            background-color: rgb(165, 2, 37);
            border: 2px solid; 
            border-color: rgb(165, 2, 37)
        }
        .btn_ln:hover{
            background-color: white;
            color: rgb(165, 2, 37);
            text-shadow: -2px -2px black;
            border-color: rgb(165, 2, 37)
        }
        .sections-title{
            color: white;
            font-family: retroComputer;
            font-style: italic;
            font-weight: bold;
            background-color: rgb(165, 2, 37);
            margin-left: 10%;
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
        #soon_comm{
            color: white;
            font-family: system-ui, -apple-system, BlinkMacSystemFont,
            'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans',
            'Helvetica Neue', sans-serif;
            max-width: 40%;
            font-size: 24px;
            color: white;
            font-weight: bold;
            position: absolute;
            display: inline;
            padding-top: 20px;
            margin-left: 16.5%;
        }
    </style>
    <body>
        <div style="z-index: 4;">
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
        <div>
            <div><br><span class="sections-title">\\ \\ FEATURED GAMES // //&nbsp;</span></div>
        <div class="slides-full">
            <div class="slide-single fade">
                <div class="slide-page">1 / 4</div>
                <img src="media/disgrace_dungeon.png">
                <div class="slide-title">Disgrace Dungeon</div>
                <div class="slide-desc">Disgrace Dungeon<br><br>
                    ACTION // FPS //  SINGLEPLAYER<br><br>
                    In this full action game, you'll have to destroy hordes
                    of enemies with your trusty and rusty chainsaw.
                    With over 30 levels, blood will be spread and bones will
                    be broken as you explore the Disgrace Dungeon.
                <img src="media/dd1.png" height="70px" width="110px" style="padding: 5px; padding-top: 15px;">
                <img src="media/disgrace_dungeon.png" height="70px" width="110px" style="padding: 5px; padding-top: 15px"><br><br>
                    Available Now! - $39,99
                </div>
            </div>
            <div class="slide-single fade">
                <div class="slide-page">2 / 4</div>
                <img src="media/gravefoot.png">
                <div class="slide-title">Gravefoot</div>
                <div class="slide-desc">Gravefoot<br><br>
                    ACTION // ZOMBIES // TPS<br><br>
                    A massive infection broke out and now most of humanity
                    transformed in vicious beasts.
                    In the cities of Brazil, survival is uncertain and you must
                    explore and find every resource possible, while deceiving
                    the infecteds.
                <img src="media/gravefoot.png" height="70px" width="110px" style="padding: 5px; padding-top: 15px;">
                <img src="media/gravefoot.png" height="70px" width="110px" style="padding: 5px; padding-top: 15px"><br><br>
                    Available Now! - $36,99
            </div>

            </div>
            <div class="slide-single fade">
                <div class="slide-page">3 / 4</div>
                <img src="media/flabbergastator.png">
                <div class="slide-title">FLABBERGASTATOR</div>
                <div class="slide-desc">FLABBERGASTATOR<br><br>
                    PUZZLE // PLATFORMER // SCI-FI<br><br>
                    Beware the great Flabbergastator!
                    The biggest puzzle facility to test the brightest minds.
                    You may try and cry. But for sure you will be left
                    flabbergasted.<br>
                <img src="media/flabber1.png" height="70px" width="110px" style="padding: 5px; padding-top: 36px;">
                <img src="media/flabber2.png" height="70px" width="110px" style="padding: 5px; padding-top: 36px"><br><br>
                    Available Now! - $19,99
            </div>
            </div>
            <div class="slide-single fade">
                <div class="slide-page">4 / 4</div>
                <img src="media/have_a_nice_stay.png">
                <div class="slide-title">Have a nice stay</div>
                <div class="slide-desc">Have a nice stay<br><br>
                HORROR // MANAGEMENT<br><br>
                In this  game, you control a recepcionist from a hotel.
                Welcoming the customers, you will have weird enconters
                in the late night and it's your job to ensure they will
                all have a nice stay.<br>
            <img src="media/have_a_nice_stay.png" height="70px" width="110px" style="padding: 5px; padding-top: 15px;">
            <img src="media/have_a_nice_stay.png" height="70px" width="110px" style="padding: 5px; padding-top: 15px"><br><br>
                    Available Now! - $19,99
            </div>
            </div>
            <a class="prevpage" onclick="changeSlides(-1)"><</a>
            <a class="nextpage" onclick="changeSlides(1)">></a>
          </div>
          <br><br><div><span class="sections-title" style="float:left;">\\ \\ NEWS & UPDATES // //&nbsp;</span></div>
          <div><span class="sections-title" style="float: right; margin-right: 20%;">\\ \\ COMING SOON! COMMUNITY // //&nbsp;</span></div>
          <div class="last-new">
            LAST NEWS!
            <p>Softwares are now available!<br>
            <br>
            GAMERMELON released it's new Software shop.<br>
            You can visit the category now and check the new<br>exclusives softwares.</p>
            <div><button  class="btn_ln" onclick="location.href = 'news.php';" style="cursor: pointer;">CHECK NEWS ➔</button></div>
          </div>
          
          <div id="soon_comm">
            Explore the Gamermelon Community!<br><br>
            Interacts with friends and interesting<br>people!<br><br>
            Discover more content!<br><br>
            Register NOW!
          </div>
        </div>
        <form id="frm_cart" method="POST">  
            <input type="hidden" name="hidden_cart" id="hidden_cart" value=SendCart()>
            <?php
            $cart_list = $_POST["hidden_list"];
            if ($cart_list != "") {
            print('<input type="hidden" name="hidden_list" id="hidden_list" value="'.$cart_list.'">');
            }
            else { print '<input type="hidden" name="hidden_list" id="hidden_list" value="">  '; }
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
        </div>
        <div id="div_seed" style="top: 0%; position: absolute; overflow: hidden; z-index: -1;">
        </div>
          <script>
            let slideDisplay = 1;
            showSlides(slideDisplay);
            // Change page slides by clicking the arrows
            function changeSlides(n){
                showSlides(slideDisplay += n);
            }
            function showSlides(n){
                let i;
                let slides = document.getElementsByClassName("slide-single");
                // If you go next page in the last page, goes back to the first page
                if (n > slides.length) {
                    slideDisplay = 1
                }
                // If you go previous page in the first page, goes to the last page
                if (n < 1) {
                    slideDisplay = slides.length
                }
                // Maintain every slide hidden
                for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                }
                // Reduce 1 since array starts with 0 and make it appear
                slides[slideDisplay-1].style.display = "block";
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
            document.getElementById("hidden_list") = your_cart;
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
            function validateLogin() {
                user = document.getElementById(username)
            }
          </script>
          </main>
    </body>
</html>