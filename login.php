

<!doctype html>
<html style="background-image: url(assets/img/bg-nasa.jpg);">
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex">
<title>Login - TV ni Juan</title>
 <link href="css/style.css" type="text/css" rel="stylesheet">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
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
<div hidden>
<p>
	<a href="#" >  <img src="assets/img/logo.png" width="135" height="135" alt=""/> </a>
</p>
<p style="font-size: 24px">Welcome to TV ni Juan</p>
<p style="font-size: 16px">Please Login to continue</p>
</div>
<form class="form-wrapper">
	<input type="hidden" name="op" value="login" required />
	<div class="form-header">
		<div class="form-banner"><img src="assets/img/logo.png" alt=""/></div>
		<p class="form-title"> Welcome to TV ni Juan</p>
		<p class="form-sub-title"> Please Login to continue</p>
	</div>
	<div class="form-body">
		<div class="input-field">
			<label for="username">Username: </label>
			<input type="text" id="username" name="login" class="" placeholder="Username" autofocus required />
		</div>
		<div class="input-field">
			<label for="password">Password: </label>
			<input type="password" id="password" name="senha" class="" placeholder="Password" required />
		</div>
		<div class="form-btns">
			<button class="form-btn" id="login"> <span class="fa-solid fa-arrow-right-to-bracket"></span> Login</button>
		</div>
	</div>
</form>


<form action="" method="POST" hidden disabled>
<input type="hidden" name="op" value="login">
<div>
   <input type="text" class="form-dados" name="login" placeholder="Username">
  </div>
                          <input type="password" class="form-dados" name="senha" placeholder="Password">
                        </div>
                        <div class="mt-4">
                           <div class="row">
                              <div class="col-12">
                                 <button class="page-link" type="submit">Login</button>
                              </div>
                           </div>
                        </div>
</form>

  </body>
</html>

    
    




