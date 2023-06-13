<html>
	<head>
    	<title>Web App Hub</title>
        <link rel="stylesheet" href="css/style.css" />
        <script src="js/jquery.js"></script>
        <script>
        	$(document).ready(function(){
                $('#img_contain img').hover(function(){
					$('#main_img img').attr("src",$(this).attr("src"));
				});
            });
        </script>
    </head>
    
    <body>
    	<?php
			include("inc/function.php"); 
			include("inc/header.php"); 
			include("inc/navbar.php");
			echo pro_details();
			include("inc/footer.php"); 
		?>
    </body>
</html>