<html>
	<head>
		<title> j query </title>
		<script src= "jquery-2.2.0.min.js"></script>
		<script>
			window.onload = function() {
			  console.log('avneet');
			}
		</script>
		<script>
			$(document).ready( 
				function() {
					$('#btn').click(
						function() {
							$(this).fadeOut().fadeIn().css('color','orange');
							console.log( $('#btn2').val('Dont press me I will pop') );
						}
					);
					
					$('#btn2').click(
						function() {
							$(this).fadeOut();
							$(this).fadeIn();
							$(this).css('color','orange');
						}
					);
				}
			
			);
		</script>
	</head>
	<body>
		<button id= "btn">
		  Press Me
		</button>
		<input type="button" id="btn2" value="Press Me"/>
	</body>
</html>