<html>
	<head>
    	<title>Admin Panel</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
        <script src="../js/jquery.js"></script>
        <script>
			$(document).ready(function(){
                $('#bodyright table tr:even').css("background","#400040");
            });
        </script>
    </head>
    
    <body>
    	<?php  
			include("inc/header.php");
			include("inc/bodyleft.php");
			include("inc/bodyright.php");
		?>
    </body>
</html>