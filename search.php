<html>
	<head>
    	<title>Web App Hub</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
    </head>
    
    <body>
    	<?php
			include("inc/function.php"); 
			include("inc/header.php"); 
			include("inc/navbar.php");
			echo search(); echo add_cart();
			include("inc/bodyright.php");
			include("inc/footer.php"); 
		?>
    </body>
</html>