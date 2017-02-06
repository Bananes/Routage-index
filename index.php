<html>
	<head>
		<title>Hostname Serveur</title>
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
		<style>
			body {
			    background-image: url(https://wallpaperscraft.com/image/glare_background_blur_dark_63553_2560x1440.jpg);
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
			echo $patate;
			
			switch ($patate) {
    case "PC-O":
        echo '<div><img src="images/ins.jpg"/></div>';
        break;
    case "PC-2":
        echo '<div><img src="images/ctu.jpg" height="400" width="560"/></div>';
        break;
    case "PC-3":
    	echo '<div><img src="images/love.jpg"/></div>';
        break;
    case "PC-5":
        echo '<div><img src="images/ark.jpg" height="400" width="711"/></div>';
        break;
    default:
        echo '<div><img src="images/ban.jpg"/></div>';
}
		?> 
		</p>
	</body>
</html>
