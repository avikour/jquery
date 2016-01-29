<!-- 
	=============================  Task 1  =============================
      used .eq .on .html.addclass .css
	  changed background and text of selected 'li' and added class to it

	=============================  Task 2  =============================
      used .append .one
	  added one 'li' to and changed background of 2nd 'li' of ul.big

	=============================  Task 3  =============================
      used .length and if
	  add 'li' atmost twice to the selected ul
-->

<html>
	<head>
		<title>Methods Practice</title>	
		
		<script src="jquery-2.2.0.min.js"></script>	
		<script>
			$(document).ready(
				function() {
					$('#btn1').on('click', 
					  	function() {
							$( "li" ).eq( 5 ).css( "background-color", "red" ).html('I have changed').addClass("some-class"); }
					 );
					
					$('#btn2').on('click', 
					  	function() { 
							var x = $( ".big li" ).length;
							if (x < 4) {
								$( ".big" ).append('<li>IJKL</li>');
							}
						    $("ul.big li").eq( 1 ).css( "background-color", "yellow" );
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
				<input type='button' class="btn" id="btn1" value="For Task 1 Click Here" checked><br />
				<input type='button' class="btn" id="btn2" value="For Task 2 Click Here"><br />
				<input type='text' class="text" id="text1" value="Hello"><br />
				<input type='button' class="text" id="text2" value="How are you?"><br />
			</form>
		</div>
	</body>
</html>