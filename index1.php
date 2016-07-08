<?php

?>

<html>
	<head>
		<title>Javascript/Confirm</title>
		  <script language = "Javascript">
		  <!--<script src = "javascript.js" type ="text/javascript">-->
			function openWindow(){
 				msgWindow = open( "array.html" )
			//	msgWindow = open ( "Function.html");
			}
			window.alert("Hello, world!");
			window.alert("Hello,motherFucker,World!!!\n");  

			if ( window.confirm( "Press Ok or Cancel" ) ){
				window.alert( "OK" );
				
			}else {
				window.alert( "Cancel");
			}	
		</script>
	</head>
	<body>
		<form>
		<script>
			if ( windows.confirm( "Press Ok or Cancel ") )
			{
				window.alert( "Ok" );
			}	else 
			{
				window.alert( "Cancel" )
			}

				</script>
			
			<input type = "button" value = "Open main page"
				onclick = "openWindow()">
		</form>
	</body>
</html>
