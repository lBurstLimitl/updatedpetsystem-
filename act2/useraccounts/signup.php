<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    

    <div class="center">
        <h1>Sign Up</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" id="firstname" name="firstname" required>
                <span></span>
                <label>First Name</label>
            </div>

            <div class="txt_field">
                <input type="text" id="lastname" name="lastname" required>
                <span></span>
                <label>Last Name</label>
            </div>

            <div class="txt_field">
                <input type="email" id="email" name="email" required>
                <span></span>
                <label>Email Address</label>
            </div>

            <div class="txt_field">
                <input type="num" id="contact" name="contact" required>
                <span></span>
                <label>Contact</label>
            </div>

            <div class="txt_field">
                <input type="text" id="username" name="username" required>
                <span></span>
                <label>Username</label>
            </div>

            <div class="txt_field">
                <input type="password" id="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>

            <input type="submit" name="create" id="register"value="Sign in">
            <div class="signup_link">
                Already have an account? <a href="http://localhost/act2/userlogin/userlogin.php">Log in</a>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
        
			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
            var contact       = $('#contact').val();
            var username    = $('#username').val();
			var password 	= $('#password').val();
			
				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email, contact: contact,username: username,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success',
								})
                                
							
					},
					error: function(data){
						Swal.fire({
								'title':'Errors',
								'text' : 'There were errors while saving the data.',
								'type' : 'error'
								})
					}

				});

			}else{	

			}

		});		
        	
	});
	
</script>
</body>
</html>