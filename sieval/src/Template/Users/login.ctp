<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!--<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>-->
	<?= $this->Html->css('css/images/icons/favicon.ico') ?>
<!--===============================================================================================-->
	<!--<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">-->
	<?= $this->Html->css('css/vendor/bootstrap/css/bootstrap.min.css') ?>
<!--===============================================================================================-->
	<!--<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">-->
	<?= $this->Html->css('css/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>
<!--===============================================================================================-->
	<!--<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">-->
	<?= $this->Html->css('css/fonts/iconic/css/material-design-iconic-font.min.css') ?>
<!--===============================================================================================-->
	<!--<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">-->
	<?= $this->Html->css('css/vendor/animate/animate.css') ?>
<!--===============================================================================================-->	
	<!--<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">-->
	<?= $this->Html->css('css/vendor/css-hamburgers/hamburgers.min.css') ?>
<!--===============================================================================================-->
	<!--<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">-->
	<?= $this->Html->css('css/vendor/animsition/css/animsition.min.css') ?>
<!--===============================================================================================-->
	<!--<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">-->
	<?= $this->Html->css('css/vendor/select2/select2.min.css') ?>
<!--===============================================================================================-->	
	<!--<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">-->
	<?= $this->Html->css('css/vendor/daterangepicker/daterangepicker.css') ?>
<!--===============================================================================================-->
	<?= $this->Html->css('css/css/util.css') ?>
	<?= $this->Html->css('css/css/main.css') ?>
	<!--<link rel="stylesheet" type="text/css" href="css/util.css">-->
	<!--<link rel="stylesheet" type="text/css" href="css/main.css">-->
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('/~danazcob/sieval/css/css/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<?= $this->Form->create(null,['class'=>'login100-form']) ?>
				<span class="login100-form-title p-b-49">
					Login Sieval
				</span>
					<?= $this->Form->control('users_email', ['class'=>'input100','placeholder' => 'Type your Email','label' => ['class' => 'label-input100'], "type" => "email"], ['templateVars' => ['help' => 'At least 8 characters long.']] ) ?>
					<?= $this->Form->control('users_password', ['class' => 'input100','placeholder' => 'Type your Password', 'label' => ['class' => 'label-input100'], "type" => "password"] ) ?>
					
				<br></br>
				<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Login
							</button>
				</div>	
				<div class="text-right p-t-8 p-b-31">
					<a>
						<?= $this->Html->link('or Register Here', ['controller' => 'users', 'action' => 'register']); ?>
					</a>
				</div>


				<?= $this->Form->end() ?>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<!--<script src="vendor/jquery/jquery-3.2.1.min.js"></script>-->
	<?= $this->Html->script('css/vendor/jquery/jquery-3.2.1.min.js') ?>
<!--===============================================================================================-->
	<!--<script src="vendor/animsition/js/animsition.min.js"></script>-->
	<?= $this->Html->script('css/vendor/animsition/js/animsition.min.js') ?>
<!--===============================================================================================-->
	<!--<script src="vendor/bootstrap/js/popper.js"></script>-->
	<?= $this->Html->script('css/vendor/bootstrap/js/popper.js') ?>
	<!--<script src="vendor/bootstrap/js/bootstrap.min.js"></script>-->
	<?= $this->Html->script('css/vendor/bootstrap/js/bootstrap.min.js') ?>
<!--===============================================================================================-->
	<!--<script src="vendor/select2/select2.min.js"></script>-->
	<?= $this->Html->script('css/vendor/select2/select2.min.js') ?>
<!--===============================================================================================-->
	<!--<script src="vendor/daterangepicker/moment.min.js"></script>-->
	<?= $this->Html->script('css/vendor/daterangepicker/moment.min.js') ?>
	<!--<script src="vendor/daterangepicker/daterangepicker.js"></script>-->
	<?= $this->Html->script('css/vendor/daterangepicker/daterangepicker.js') ?>
<!--===============================================================================================-->
	<!--<script src="vendor/countdowntime/countdowntime.js"></script>-->
	<?= $this->Html->script('css/vendor/countdowntime/countdowntime.js') ?>
<!--===============================================================================================-->
	<!--<script src="js/main.js"></script>-->
	<?= $this->Html->script('css/js/main.js') ?>

</body>
</html>

