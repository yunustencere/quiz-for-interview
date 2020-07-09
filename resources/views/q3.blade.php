<!DOCTYPE html>
	<html>
	<head>
		<title>q3</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>

	<body id="body">
		<div class="d-flex justify-content-center" style="margin-top:45vh;">
			<button class="btn btn-primary" 
				onmousedown="mouseDown()" 
				onmouseup="mouseUp()">Click & Hold</button>
		</div>
	</body>

	<script>		
		let colors = [
			['blue', 1200],
			['green', 1100],
			['yellow', 1100],
			['orange', 1100],
			['red', 1100]
		];

		myTimeouts = [];
		i = 0;

		function mouseDown() {
			if (i < colors.length) {
				if (i > 0) {
					document.getElementById("body").style.backgroundColor = colors[i-1][0];
				}				
				myTimeouts[i] = setTimeout(mouseDown, colors[i][1]);
				i++;
			}
		}

		function mouseUp() {
			for (var j = 0; j < i; j++) {
				clearTimeout(myTimeouts[j]);				
			}
			i = 0;
			document.getElementById("body").style.backgroundColor = "white";
		}
	</script>


</html>