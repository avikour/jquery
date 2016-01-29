<!-- 
	=============================  Task one  =============================
      used .eq .on .html.addclass .css
	  changed background and text of selected 'li' and added class to it
-->


<html>
	<head>
		<title>Methods Practice</title>	
		
		<script src="jquery-2.2.0.min.js"></script>	
		<script>
			$(document).ready(
				function() {
					$('#btn2').on('click', 
					  	function() {
							$( "li" ).eq( -3 ).css( "background-color", "red" );
							console.log( $('li').eq( -3 ).html('I have changed').addClass("some-class") );
						}
					 );
				}
			);
		</script>
		
	</head>
	
	<body>
		<div class="red">
			<ul class="small">
				<li>abcd</li>
				<li>efgh
					<ul>
						<li>e</li>
						<li>f</li>
						<li>g</li>
						<li>h</li>
					</ul>
				</li>
			</ul>
			<ul class="big">
				<li>ABCD</li>
				<li>EFGH</li>
			</ul>
		</div>
		
		<div class="blue">
			<form>
				<input type='button' class="btn" id="btn1" value="Click Here" checked><br />
				<input type='button' class="btn" id="btn2" value="Click Here"><br />
				<input type='text' class="text" id="text1" value="Hello"><br />
				<input type='button' class="text" id="text2" value="How are you?"><br />
			</form>
		</div>
	</body>
</html>