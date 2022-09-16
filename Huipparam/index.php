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

		<div class="weather">

			<div class="inweather1">
				<div class="ininweather">현재시간</div>
				<div class="ininweather">현재온도</div>
				<div class="ininweather">흐림</div>
				<div class="ininweather">습도</div>
				<div class="ininweather">바람</div>
				<div class="ininweather">강수량</div>
				<div class="ininweather">일출시</div>
				<div class="ininweather">일몰시</div>
				<div class="ininweather">이슬점</div>
			</div>
            
			<div class="inweather2">
				<span class="timew">시간대별 날씨</span>
				<div class="inweather22">
					<div class="ininweather2">현</div>
					<div class="ininweather2">현</div>
					<div class="ininweather2">흐</div>
					<div class="ininweather2">습</div>
					<div class="ininweather2">바</div>
					<div class="ininweather2">강</div>
					<div class="ininweather2">일</div>
					<div class="ininweather2">일</div>
					<div class="ininweather2">이</div>
					<div class="ininweather2">현</div>
					<div class="ininweather2">현</div>
					<div class="ininweather2">흐</div>
					<div class="ininweather2">습</div>
					<div class="ininweather2">바</div>
					<div class="ininweather2">강</div>
					<div class="ininweather2">일</div>
					<div class="ininweather2">일</div>
					<div class="ininweather2">이</div>
					<div class="ininweather2">현</div>
					<div class="ininweather2">현</div>
					<div class="ininweather2">흐</div>
					<div class="ininweather2">습</div>
					<div class="ininweather2">바</div>
					<div class="ininweather2">강</div>
					<div class="ininweather2">일</div>
					<div class="ininweather2">일</div>
					<div class="ininweather2">이</div>
					<div class="ininweather2">현</div>
					<div class="ininweather2">현</div>
					<div class="ininweather2">흐</div>
					<div class="ininweather2">습</div>
					<div class="ininweather2">바</div>
					<div class="ininweather2">강</div>
					<div class="ininweather2">일</div>
					<div class="ininweather2">일</div>
					<div class="ininweather2">이</div>
					<div class="ininweather2">현</div>
					<div class="ininweather2">현</div>
					<div class="ininweather2">흐</div>
					<div class="ininweather2">습</div>
					<div class="ininweather2">바</div>
					<div class="ininweather2">강</div>
					<div class="ininweather2">일</div>
					<div class="ininweather2">일</div>
					<div class="ininweather2">이</div>
					<div class="ininweather2">현</div>
					<div class="ininweather2">현</div>
					<div class="ininweather2">흐</div>
					<div class="ininweather2">습</div>
					<div class="ininweather2">바</div>
					<div class="ininweather2">강</div>
					<div class="ininweather2">일</div>
					<div class="ininweather2">일</div>
					<div class="ininweather2">이</div>
				</div>
			</div>

			<div class="inweather3">
				<span class="weektime">시간대별 날씨</span>
				<div class="inweather33">
					<div class="ininweather3">현</div>
					<div class="ininweather3">현</div>
					<div class="ininweather3">흐</div>
					<div class="ininweather3">습</div>
					<div class="ininweather3">바</div>
					<div class="ininweather3">강</div>
					<div class="ininweather3">현</div>
					<div class="ininweather3">현</div>
					<div class="ininweather3">흐</div>
					<div class="ininweather3">습</div>
					<div class="ininweather3">바</div>
					<div class="ininweather3">강</div>
					<div class="ininweather3">현</div>
					<div class="ininweather3">현</div>
					<div class="ininweather3">흐</div>
					<div class="ininweather3">습</div>
					<div class="ininweather3">바</div>
					<div class="ininweather3">강</div>
					<div class="ininweather3">현</div>
					<div class="ininweather3">현</div>
					<div class="ininweather3">흐</div>
					<div class="ininweather3">습</div>
					<div class="ininweather3">바</div>
					<div class="ininweather3">강</div>
				</div>
			</div>
			
		</div>

		<div class="chart">
			
			<div class="inchart1">

				<div class="chart-wrapper">
		       	 	<canvas id="myChart"></canvas>
		        </div>

		        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		        <script>
		        		
		        	var ctx = $('#myChart');
					var myChart = new Chart(ctx, {
					    type: 'line',
					    data: {
					        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
					        datasets: [{
					            label: '# of Votes',
					            data: [12, 19, 3, 5, 2, 3],
					            backgroundColor: [
					                'rgba(255, 99, 132, 0.2)',
					                'rgba(54, 162, 235, 0.2)',
					                'rgba(255, 206, 86, 0.2)',
					                'rgba(75, 192, 192, 0.2)',
					                'rgba(153, 102, 255, 0.2)',
					                'rgba(255, 159, 64, 0.2)'
					            ],
					            borderColor: [
					                'rgba(255,99,132,1)',
					                'rgba(54, 162, 235, 1)',
					                'rgba(255, 206, 86, 1)',
					                'rgba(75, 192, 192, 1)',
					                'rgba(153, 102, 255, 1)',
					                'rgba(255, 159, 64, 1)'
					            ],
					            borderWidth: 1
					        }]
					    },
					    options: {
					        responsive: true,
					        maintainAspectRatio: false,
					        scales: {
					            yAxes: [{
					                ticks: {
					                    beginAtZero:true
					                }
					            }]
					        }
					    }
					});

		        </script>

			</div>

			<div class="inchart2">

				<div class="ininchart">
					<div class="chartdata">
						<div class="data">
							태양복사
						</div>
						<div class="data">
							온도
						</div>
						<div class="data">
							5W/m2
						</div>
						<div class="data">
							2020 J/cm2
						</div>
					</div>
				</div>

				<div class="ininchart">
					<div class="chartdata2">
						<div class="data">
							수분 요구사항
						</div>
						<div class="data">
							15 m3/ha
						</div>
					</div>
				</div>

				<div class="ininchart">
					<div class="chartdata2">
						<div class="data">
							노균병 알리미
						</div>
						<div class="data">
							Good
						</div>
					</div>
				</div>

			</div>

			<div class="inchart3">
				
				<div class="inininchart">
					
				</div>

				<div class="inininchart">
					
				</div>

				<div class="inininchart">
					
				</div>

				<div class="inininchart">
					
				</div>

				<div class="inininchart">
					
				</div>

			</div>

		</div>
	</div>

</body>
</html>