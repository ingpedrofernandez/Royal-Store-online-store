<html>
	<head>
    	<title>Web App Hub</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
		<script src="js/jquery.js"></script>
        <script src="js/cycle.js"></script>
        <script>
        	$('#slide').cycle('all');
        </script>
    </head>
    
    <body>
    	<?php
			include("inc/function.php"); 
			include("inc/header.php"); 
			include("inc/navbar.php");
		?>
        <div id='bodyleft'>
        	<ul><?php echo offer(); ?></ul>
        </div>
        <?php
			include("inc/bodyright.php");
			echo add_cart();
			echo u_signup();
			echo add_whilist();	 
		?><br clear="all" />
        <?php include("inc/footer.php"); ?>
    </body>
</html>