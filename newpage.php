<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Клуб</title>
    <script language="javascript" type="text/javascript"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Окно</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" href="reset.css">

	<style>
		H2 {
			position: absolute;
			width: 159px;
			height: 36px;
			color: white;
			font-family: 'Inter';
			font-style: normal;
			font-weight: 400;
			font-size: 20px;
			line-height: 24px;
		}
		body {
			background: #FFFFFF;
		}
		.foundItemStyle {
			background-color: red;
		}

		#up_rectangle {
			position: absolute;
			width: 100%;
			height: 62px;
			background: #313131;
		}
		#home {
			position: absolute;
			width: 36px;
			height: 15px;
			font-family: sans-serif;
			font-style: normal;
			font-weight: 400;
			font-size: 15px;
			line-height: 15px;
			color: #FFFFFF;
			margin-left: 10px;
		}

		#teams {
			position: absolute;
			width: 36px;
			height: 15px;
			font-family: sans-serif;
			font-style: normal;
			font-weight: 400;
			font-size: 15px;
			line-height: 15px;
			color: #FFFFFF;
			margin-left: 65px;
		}

		#shop {
			position: absolute;
			width: 36px;
			height: 15px;
			font-family: sans-serif;
			font-style: normal;
			font-weight: 400;
			font-size: 15px;
			line-height: 15px;
			color: #FFFFFF;
			margin-left: 130px;
		}

		#circle1 {
			position: absolute;
			width: 20px;
			height: 20px;
			background: #06D01A;
			-moz-border-radius: 50px;
			-webkit-border-radius: 50px;
			border-radius: 50px;
			margin-left: 1780px;
			margin-top: 5px;
		}


		#circle2 {
			position: absolute;
			width: 20px;
			height: 20px;
			background: #E1E600;
			-moz-border-radius: 50px;
			-webkit-border-radius: 50px;
			border-radius: 50px;
			margin-left: 1810px;
			margin-top: 5px;
		}


		#circle3 {
			position: absolute;
			width: 20px;
			height: 20px;
			background: #FF0303;
			-moz-border-radius: 50px;
			-webkit-border-radius: 50px;
			border-radius: 50px;
			margin-left: 1840px;
			margin-top: 5px;
		}

	#decore1 {
			z-index: -2;
  			position: absolute;
			width: 319.49px;
			height: 25.21px;
			background: #FFE600;
			border-radius: 90px;
			transform: rotate(39.63deg);
			margin-top: 130px;
			margin-left: 1350px;
		}

		#decore2 {
			z-index: -2;
  			position: absolute;
			width: 241.52px;
			height: 25.21px;
			background: #070707;
			border-radius: 90px;
			transform: rotate(39.63deg);
			margin-top: 110px;
			margin-left: 1430px;
		}

		#decore3 {
			z-index: -2;
  			position: absolute;
			width: 309.49px;
			height: 25.21px;
			background: #FFE600;
			border-radius: 90px;
			transform: rotate(39.63deg);
			margin-top: 130px;
			margin-left: 1480px;
		}

		#decore4 {
  			position: absolute;
			width: 167px;
			height: 25.21px;
			background: #FFE600;
			border-radius: 90px;
			transform: rotate(39.63deg);
			margin-top: 292px;
			margin-left: 1621px;
		}

		#decore5 {
  			position: absolute;
			width: 221.05px;
			height: 25.21px;
			background: #070707;
			border-radius: 90px;
			transform: rotate(39.63deg);
			margin-top: 265px;
			margin-left: 1627px;
		}

		#decore6 {
			position: absolute;
			width: 102.67px;
			height: 25.21px;
			background: #FFE600;
			border-radius: 90px;
			transform: rotate(-139.8deg);
			margin-top: 268px;
			margin-left: 1750px;
		}
		a {
			margin-top: 20px;
			text-decoration: none;
		}

		* {box-sizing: border-box;}
        form {
        position: relative;
  		width: 300px;
  		margin: 0 auto;
        }
		input {
		position: absolute;
		margin-top: 9px;
		margin-left: -123px;
		width: 100%;
		height: 42px;
		padding-left: 10px;
		border: 2px solid #7BA7AB;
		border-radius: 5px;
		outline: none;
		background: white;
		color: black;
		}
		button {
		font-size: 25px;
		font-family: sans-serif;
		position: absolute;
		margin-top: 9px;
		margin-left: 185px;
		width: 122px;
		height: 42px;
		border: none;
		background: #FFE600;
		border-radius: 5px 5px 5px 5px;
		cursor: pointer;
		}
		
		
		.players_text1{
		position: absolute;
		margin-top: 200px;
		margin-left: 550px;
		font-size: 26px;
		width: 1000px;
		}
		.s1mple_img{
			position: absolute;
			margin-top: 150px;
		}

		.players_title{
			margin-top: 70px;
			color: black;
			width: 1920px;
			text-align: center;
			font-size: 36px;
		}
		.boombl4_img{
			margin-top: 500px;
		}
		.players_text2{
			margin-top: -250px;
			margin-left: 550px;
			font-size: 26px;
			width: 1000px;
		}
		.elec{
			margin-top: 200px;
		}
		.players_text3{
			margin-top: -250px;
			margin-left: 550px;
			font-size: 26px;
			width: 1000px;
		}
		.b1t{
			margin-top: 200px;
		}
		.players_text4{
			margin-top: -250px;
			margin-left: 550px;
			font-size: 26px;
			width: 1000px;
		}
		.perf{
			margin-top: 200px;
		}
		.players_text5{
			margin-top: -250px;
			margin-left: 550px;
			font-size: 26px;
			width: 1000px;
		}
		.button__up{
	    margin-left: 1600px;
		}
	</style>
</head>
<body>
	<script src="main.js"></script>
	<div id="decore1"></div>
	<div id="decore2"></div>
	<div id="decore3"></div>
	<div id="decore4"></div>
	<div id="decore5"></div>
	<div id="decore6"></div>
	<div id="up_rectangle"></div>
	<a href="index.php" id="home" class="navbarText">Home</a>
	<a href="shop.php" id="shop" class="navbarText">Shop</a>
	<a href="teams.php" id="teams" class="navbarText">Teams</a>
	<div id="circle1"></div>
	<div id="circle2"></div>
	<div id="circle3"></div>
	<div id="rectangle"></div>
	<a href="newpage.php" ><div id="photo6"></div></a>
	<form>
	<script src="find.js"></script>
    <input type="text" id="searchField" placeholder="Искать здесь...">
    <button onclick="FindOnPage();return false">Поиск</button>
	</form>

	<h2 class="players_title" id="fuck">

                    Игроки клуба
                </h2>

    <div id="playercard">
    	<div class="img1"><img src="2.png" alt="s1mple" class="s1mple_img">
    	<div class="players_text1">
                                <?php
                                $f = fopen("s1mple.txt", "r");
                                echo fgets($f);
                                fclose($f);
                                ?>
                            </div>	

    <div id="playercard2">
    	<div class="img2"><img src="3.png" alt="boombl4" class="boombl4_img">
    	<div class="players_text2">
                                <?php
                                $f = fopen("boombl4.txt", "r");
                                echo fgets($f);
                                fclose($f);
                                ?>
                            </div>	
    <div id="playercard3">
    	<div class="img3"><img src="4.png" alt="elec" class="elec">
    	<div class="players_text3">
                                <?php
                                $f = fopen("elec.txt", "r");
                                echo fgets($f);
                                fclose($f);
                                ?>
                            </div>
    <div id="playercard4">
    	<div class="img4"><img src="5.png" alt="b1t" class="b1t">
    	<div class="players_text4">
                                <?php
                                $f = fopen("b1t.txt", "r");
                                echo fgets($f);
                                fclose($f);
                                ?>
                            </div>
     <div id="playercard5">
    	<div class="img5"><img src="6.png" alt="perf" class="perf">
    	<div class="players_text5">
                                <?php
                                $f = fopen("perf.txt", "r");
                                echo fgets($f);
                                fclose($f);
                                ?>
                            </div>      

    </div>
	


	</div>
	<script src="script.js"></script>
    <a href="#fuck" class="button__up js-scroll"js-scroll>
    <img src="17002.png" alt="НАВЕРХ">
    </a>
    	<script src="main.js"></script>
</body>
</html>