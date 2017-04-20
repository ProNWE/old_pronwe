<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Авторизация | Votepad</title>
		<meta charset="UTF-8">
		<meta name="description" content="Страница авторизации для зарегистрированных пользователей">
		<meta name="keywords"  content="pronwe,вход,регистрация,авторизация" />
		<meta name="Resource-type" content="Document" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <link type="image/x-icon" rel="shortcut icon" href="//votepad.ru/assets/img/favicon.png" />

		<!-- CSS -->
		<? foreach($css as $styles): ?>
			<link rel="stylesheet" href="<?=$assets;?><?=$styles;?>">
		<? endforeach;?>


		<!-- JS -->
		<? foreach($js as $scripts): ?>
			<script src="<?=$assets.$scripts; ?>"></script>
		<? endforeach ; ?>
	</head>
 
<body>
    <div class="central-box">
    	<div class="panel">

    		<!--  AUTHTERIZATION -->
    		<div class="panel-body animated fadeIn" id="signin">
    			<h2 class="text-center pv">Авторизация</h2>
				<form action="<?=URL::site('auth/signin'); ?>" method="POST">
					<div class="form-group">
						<input type="email" id="email" required name="email" axlength="100">
						<div class="label-box">
							<label>Email</label>
						</div>
						<span class="fa fa-envelope form-icon icon-color"></span>
					
					</div>
					<div class="form-group">
						<input type="password" class="password" id="pass" name="password" maxlength="20" required>
						<div class="label-box">
							<label>Пароль</label>
						</div>
						<span class="fa fa-lock form-icon icon-color"></span>
					</div>
					

					<button type="submit" id="sigin-button" type="submit" class="btn btn-primary col-xs-12 btn_area1">Войти</button>
				</form>    			
    		</div>
    	</div>
	</div>
</body>

</html>