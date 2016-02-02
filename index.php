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
							$('#btn2').val('Dont press me I will pop');
						}
					);
					
					$('#btn2').click(
						function() {
							$(this).fadeOut();
							$(this).fadeIn();
							$(this).css('color','orange');
						}
					);
					
					$('#btn3').click(
						function() {
							$.ajax({
								method : "POST",
								url : 'response.php',
								data : { name: "avneet", last: "kour", action: "set"}
							})
		
							.done( function(res) {
								var obj = JSON.parse(res);
								$('.response').append("<ul>");
								$.each(obj, function(value){
									var show = "<li>" + obj[value] + "</li";
									$('.response').append(show);	
								})									 
								$('.response').append("<ul>");
							});			
						}
					);
					
					$( "#student" ).on('change',
						
						function() {
							var option = $(this).find('option:selected').val();
							$.ajax({
								method : "POST",
								url : 'response.php',
								data : { roll : option, action: "set"}
							})
							
							.done( function(res) {
								var obj = JSON.parse(res);
								var show = "<tr>\
												<th>Name</th>\
												<th>     </th>\
												<th>Email</th>\
												<th>Roll No.</th>\
												<th>Percentage</th>\
												<th>City</th>\
											</tr>\
											<tr>";
								$.each(obj, function(value){
									show += "<td>" + obj[value] + "</td>";
								})
								show += "</tr>";									 
								$('.student').html(show);
							 }
							);
						});	
				}
			);				
			
		</script>
	</head>
	<body>
		<button id= "btn">
		  Press Me
		</button>
		<input type="button" id="btn2" value="Press Me"/>
		<input type="button" id="btn3" value="Press Me Too"/>
		
		<div class="response"> <h2> Ajax Request Here </h2> </div>
	
		<select id="student">
				<option id="1234" value="1234">1234</option>
				<option id="1235" value="1235">1235</option>
				<option id="1236" value="1236">1236</option>
				<option id="1237" value="1237">1237</option>
				<option id="1238" value="1238">1238</option>
				<option id="1239" value="1239">1239</option>
				<option id="1240" value="1240">1240</option>
				<option id="1241" value="1241">1241</option>
				<option id="1242" value="1242">1242</option>
				<option id="1243" value="1243">1243</option>			
			</select>
		
		<div class="student">
		</div>

	</body>
</html>