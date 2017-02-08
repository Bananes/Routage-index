<html>
	<head>
		<title>Hostname Serveur</title>
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
		<style>
			body {
			    background-image: url("images/back.jpg");
			    background-size: cover;
			    font-family: 'Quicksand', sans-serif, bold;
			    
			    font-size: 40px;
			    color: white;
			    text-align: center;
			}
		</style>
	</head>
	<body>
		<p>
		<?php
			$patate = gethostname();
			
			
			switch ($patate) {
    case "PC-O":
    	echo "Insmouth";
        echo '<div><img src="images/ins.jpg"/></div>';
        break;
    case "PC-2":
    	echo "Cthulhu";
        echo '<div><img src="images/ctu.jpg" height="400" width="560"/></div>';
        break;
    case "PC-3":
    	echo "Lovecraft";
    	echo '<div><img src="images/love.jpg"/></div>';
        break;
    case "PC-5":
    	echo "Arkham";
        echo '<div><img src="images/ark.jpg" height="400" width="711"/></div>';
        break;
    default:
    	echo "Error 404<br> Banane Not Found";
        echo '<div><img src="images/ban.png"/></div>';
}
		?> 
		</p>
	</body>
</html>