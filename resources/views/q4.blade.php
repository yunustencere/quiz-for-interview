<!DOCTYPE html>
	<html>
	<head>
		<title>q4</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		
	</head>

	<body id="body" style="
	  background: url(img/background-image.png) no-repeat center center fixed; 
  	-webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;">

		<div class="container">
		  <div class="row">
		    <div class="col d-flex justify-content-center text-center">
		    	<div class="" style="margin-top:10vh;">

						<select id="citySelect" class="custom-select">
							<option value=""></option>
							@for ($i = 0; $i < 5; $i++)
			        	<option value="{{ $cityResults[$i]['id'] }}">{{ $cityResults[$i]['name'] }}
			        	</option>
			    		@endfor
						</select>
						<div>
							<img id="weatherIcon" src="">
						</div>
						<div>
							<span id="temperature" style="font-size:20px;"></span>
						</div>
						<div>
							<span id="description"></span>
						</div>
						

		    </div>
		  </div>
		</div>

		<div class="">
			
				
		</div>

	</body>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="{{ URL::asset('js/weather.js') }}"></script>

</html>