<!DOCTYPE html>

<html lang="en" style="background-image: url(assets/img/bg-nasa.jpg);">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

	<link rel="icon" type="image/png" href="assets/img/favicon.png">

	<link rel="stylesheet" type="text/css" href="css/style.css" />

	<script src="js/jquery-3.3.1.min.js"></script>

	<script src="js/smart.js"></script>

	<script src="js/tvnijuan.js"></script>

	<title>TV ni Juan</title>

</head>



<body>

<div class="menu">

	<div class="banner">

		<img src="assets/img/logo.png" alt="">

	</div>

			<div class="btns">

			<button id="0" link="homenijuan" onClick="UrlGO('?p=homenijuan');" type="button" onclick="" class=""><span class="fa-solid fa-home"></span> Home</button>

			<button id="1" link="tv" onClick="UrlGO('?p=tv');" type="button" onclick="" class="">Products</button>

			<button id="2" link="vod" onClick="UrlGO('?p=vod');" type="button" onclick="" class="">Services</button>

			<div class="logout-btn-wrapper">

				<button id="3" link="login" onClick="location.href='login.php'" type="button" onclick="" class="login-btn">Sign in</button>

			</div>

		</div>

	</div>

<div class="bg-video">

	<video src="assets/vid/tvnijuan.mp4" fullscreen oncontextmenu="false" autoplay muted loop></video>

</div>



</body>

</html>

