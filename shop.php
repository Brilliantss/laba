<!DOCTYPE html>
<html lang="en">
<head>
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
			margin-top: 20px;
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
			margin-top: 20px;
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
			margin-top: 20px;
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
		#rectangle {
			z-index: -1;
			position: absolute;
			width: 672px;
			height: 760px;
			background: #595959;
			opacity: 0.5;
			margin-top: 61px;
			margin-left: 550px;
		}

		#cash {
			width: 200px;
			height: 100px;
			background: url('data:image/png;base64,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');
			margin-left: 1680px;
		}

		#photo1 {
		width: 188px;
		height: 233px;
		background: url("1.png");
		margin-left: 580px;
		z-index: 3;
		}
		#photo2 {
		position: absolute;
		width: 188px;
		height: 233px;
		background: url(1.png);
		z-index: 3;
		margin-left: 790px;
		margin-top: -234px;
		}
		#photo3 {
		width: 188px;
		height: 233px;
		background: url("1.png");
		margin-left: 260px;
		z-index: 3;
		margin-left: 1000px;
		margin-top: -234px;
		}
		#photo4 {
		width: 188px;
		height: 233px;
		background: url("1.png");
		margin-left: 580px;
		margin-top: 10px;
		z-index: 3;
		}
		#photo5 {
		width: 188px;
		height: 233px;
		background: url("1.png");
		margin-left: 790px;
		margin-top: -234px;
		z-index: 3;
		}
		#photo6 {
		width: 188px;
		height: 233px;
		background: url("1.png");
		margin-left: 1000px;
		margin-top: -234px;
		z-index: 3;
		}
		#photo7 {
		width: 188px;
		height: 233px;
		background: url("1.png");
		margin-top: 10px;
		margin-left: 580px;
		z-index: 3;
		}
		#photo8 {
		width: 188px;
		height: 233px;
		background: url("1.png");
		margin-left: 790px;
		margin-top: -234px;
		z-index: 3;
		}
		#photo9 {
		width: 188px;
		height: 233px;
		background: url("1.png");
		margin-left: 1000px;
		margin-top: -234px;
		z-index: 3;
		}
		* {box-sizing: border-box;}
        form {
        position: relative;
  		width: 300px;
  		margin: 0 auto;
        }
		input {
		position: absolute;
		margin-top: -805px;
		margin-left: -130px;
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
		margin-top: -805px;
		margin-left: 350px;
		top: 0;
		right: 0px;
		width: 122px;
		height: 42px;
		border: none;
		background: #FFE600;
		border-radius: 5px 5px 5px 5px;
		cursor: pointer;
		}

	</style>
</head>
<body>
	
	<div id="decore1"></div>
	<div id="decore2"></div>
	<div id="decore3"></div>
	<div id="decore4"></div>
	<div id="decore5"></div>
	<div id="decore6"></div>
	<div id="up_rectangle"></div>
	<a href="index.php" id="home" class="navbarText">Home</a>
	<a href="#" id="shop" class="navbarText">Shop</a>
	<a href="teams.php" id="teams" class="navbarText">Teams</a>
	<div id="circle1"></div>
	<div id="circle2"></div>
	<div id="circle3"></div>
	<div id="rectangle"></div>
	<div id="cash"></div>
	<div id="photo1"></div>
	<div id="photo2"></div>
	<div id="photo3"></div>
	<div id="photo4"></div>
	<div id="photo5"></div>
	<div id="photo6"></div>
	<div id="photo7"></div>
	<div id="photo8"></div>
	<div id="photo9"></div>
	
	<form>
	<script src="find.js"></script>
    <input type="text" id="searchField" placeholder="Искать здесь...">
    <button onclick="FindOnPage();return false">Поиск</button>
	</form>
    

	<script src="script.js"></script>
</body>
</html>