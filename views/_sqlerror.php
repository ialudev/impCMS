<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Whoops!</title>
			<link rel="stylesheet" type="text/css" href="library/style.css">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
	</head>

	<body id="sqlerror">
		<div class="page">
			<div class="image"></div>
			<div class="message"><?php echo $e->getMessage(); ?></div>
			<div class="message-down">
				<b>Do not FREAK OUT</b><br>
				everything is going to be AA-OK<br>
				<br>
				The website can not connect to the database.<br>
				If you are the administrator of this site, please check the configuration file.<br>

			</div>

			<a href="/"><div class="refresh">Refresh this page</div></a>
		
		</div>
	</body>


</html>