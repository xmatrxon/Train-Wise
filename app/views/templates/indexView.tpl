<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="author" content="Mateusz Będkowski">
		<meta name="description" content="Siłownia TrainWise">
		<title>TrainWise</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"/>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
		<script src="https://kit.fontawesome.com/be4ae855ef.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="{$conf->app_url}/css/main.css" />
	</head>
	<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="82">
		<nav id="navbar" class="navbar navbar-expand-lg position-fixed top-0 w-100 py-3 shadow-bg">
			<div class="container">
				<a class="navbar-brand link" href="#"><i class="fa-solid fa-dumbbell"></i> <span class="color-text">trainwise</span></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars"></i></button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav ms-auto">
						<a class="nav-link active link" href="{$conf->app_url}">Home</a>
						<a class="nav-link link" href="{$conf->app_url}#aboutus">o siłowni</a>
						<a class="nav-link link" href="{$conf->app_url}#prices">karnety</a>
						<a class="nav-link link" href="{$conf->app_url}#achievements">osiągnięcia</a>
						<a class="nav-link link" href="{$conf->app_url}#contact">kontakt</a>
{if count($conf->roles)>0}

	<a href="{$conf->action_root}userInfo" class="nav-link link login-btn">Profil</a>
	<a href="{$conf->action_root}logout" class="nav-link link login-btn">Wyloguj</a>
{else}	
	<a href="{$conf->action_root}login" class="nav-link link login-btn">Zaloguj</a>
{/if}
 
					</div>
				</div>
			</div>
		</nav>
{block name=main} {/block}

{block name=messages}

{if $msgs->isMessage()}
<div class="messages bottom-margin">
	<ul>
	{foreach $msgs->getMessages() as $msg}
	{strip}
		<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}



{/block}

{block name=content} {/block}
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script src="{$conf->app_url}/js/aossettings.js"></script>
		<script src="{$conf->app_url}/js/script.js"></script>
	</body>
</html>
