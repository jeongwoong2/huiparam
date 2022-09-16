<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to Huipparam Farm!</title>
	<link rel="stylesheet" type="text/css" href="main.css?after">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Step 1) Load D3.js -->
	<script src="https://d3js.org/d3.v5.min.js"></script>

	<!-- Step 2) Load billboard.js with style -->
	<script src="./billboard/billboard.js"></script>

	<!-- Load with base style -->
	<link rel="stylesheet" href="./billboard/billboard.css">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,100,0,0" />

</head>
<body>

	<div class="fullbox">
		<div class="side">
			<div id="menu" class="inside">
				<span class="menu">메뉴</span>
			</div>

			<div class="inside">
				<span id="menu2" class="material-symbols-outlined">
				schedule</span><span >로고랑 시간</span>
			</div>

			<a href="index.php"><div class="inside">
				<span id="menu2" class="material-symbols-outlined">
				home</span><span >메인화면</span>
			</div></a>

			<a href="control.php"><div class="inside">
				<span id="menu2" class="material-symbols-outlined">
				tune</span><span >제어화면</span>
			</div></a>

			<a href="write.php"><div class="inside">
				<span id="menu2" class="material-symbols-outlined">
				edit_note</span><span >일지화면</span>
			</div></a>

			<a href="https://www.nongsaro.go.kr/" target="_blank"><div class="inside">
				<span id="menu2" class="material-symbols-outlined">
				grass</span><span >농업관련사이트</span>
			</div></a>
		</div>
		
		<div>
			control
		</div>
		
	</div>

</body>
</html>