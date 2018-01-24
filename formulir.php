<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="assets/css/Vendor/Bootstrap/css/bootstrap.css" rel="stylesheet"  />
		<link href="assets/css/Vendor/Form-Validation/formValidation.css" rel="stylesheet"   />
		<link href="assets/css/formstyle.css" rel="stylesheet" />
		<script src="assets/js/vendor/Jquery/jquery.min.js"></script>
		<script src="assets/js/vendor/Bootstrap/bootstrap-min.js"></script>
		<script src="assets/js/vendor/FormValidation/formValidation.js" type="text/javascript"></script>
		<script src="assets/js/vendor/FormValidation/bootstrap.js"></script>
		<title>REGISTRATION - 2 VHS DIGITAL LIBRARY</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="page-header">
						<img class="logo" src="assets/images/logo1.png" />
						<h2 class="formulirheader">2 VHS DIGITAL LIBRARY - REGISTRATION</h2>
					</div>
					<div class="border">
						<form id="defaultForm" method="post" class="form-horizontal" action="act/act_formulir.php">
							<div class="form-group">
								<label class="col-sm-3 control-label">Full name</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="firstName" placeholder="First name" />
								</div>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="lastName" placeholder="Last name" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Username</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="username" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Email address</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="email" />
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Re-type Email address</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="email" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Address</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="address" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Password</label>
								<div class="col-sm-5">
									<input type="password" class="form-control" name="password" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Re-type Password</label>
								<div class="col-sm-5">
									<input type="password" class="form-control" name="password" />
								</div>
							</div>
							
							<div class="form-group">
								<b>*Secure Question</b>
								<label class="col-sm-3 control-label">When You Born ?</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="sec_que1" />
								</div>
							</div>
							<div class="form-group">
								<b>*Secure Question</b>
								<label class="col-sm-3 control-label">What Your Pet Name ?</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="sec_que2" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Class </label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="class" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Gender</label>
								<div class="col-sm-6">
									<div class="radio">
										<label>
											<input type="radio" name="gender" value="male" /> Male
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="gender" value="female" /> Female
										</label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label" id="captchaOperation"></label>
								<div class="col-sm-2">
									<input type="text" class="form-control" name="captcha" />
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-6 col-sm-offset-3">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="agree" value="agree" /> Agree with the terms and conditions
										</label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-9 col-sm-offset-3">
									<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
								</div>
							</div>
						</div>	
					</form>
					<div class="navigator">
							<a href="index.php"><img src="assets/icon/back.png"/>BACK</a>
					<div/>		
				</div>
			</div>
		</div>
		<script type="text/javascript">
		$(document).ready(function() {
			// Generate a simple captcha
			function randomNumber(min, max) {
				return Math.floor(Math.random() * (max - min + 1) + min);
			};
			$('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

			$('#defaultForm').formValidation({
				message: 'This value is not valid',
				icon: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					firstName: {
						row: '.col-sm-4',
						validators: {
							notEmpty: {
								message: 'The first name is required'
							}
						}
					},
					lastName: {
						row: '.col-sm-4',
						validators: {
							notEmpty: {
								message: 'The last name is required'
							}
						}
					},
					username: {
						message: 'The username is not valid',
						validators: {
							notEmpty: {
								message: 'The username is required'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'The username must be more than 6 and less than 30 characters long'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_\.]+$/,
								message: 'The username can only consist of alphabetical, number, dot and underscore'
							}
						}
					},
					email: {
						validators: {
							notEmpty: {
								message: 'The email address is required'
							},
							emailAddress: {
								message: 'The input is not a valid email address'
							}
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: 'The password is required'
							},
							different: {
								field: 'username',
								message: 'The password cannot be the same as username'
							}
						}
					},
					gender: {
						validators: {
							notEmpty: {
								message: 'The gender is required'
							}
						}
					},
					captcha: {
						validators: {
							callback: {
								message: 'Wrong answer',
								callback: function(value, validator, $field) {
									var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
									return value == sum;
								}
							}
						}
					},
					agree: {
						validators: {
							notEmpty: {
								message: 'You must agree with the terms and conditions'
							}
						}
					}
				}
			});
		});
		</script>
	</body>
</html>