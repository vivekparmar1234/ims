<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		
		<style>
			.form{
				width : 250px;
				margin : auto;								
				overflow : hidden;
				position : relative;
				border : 2px solid #ccc;
				padding : 15px;
			}
			
			.form-header{
				position : relative;
				font-family : courier;				
				width : 100%;				
				text-align:center;
			}
			
			.form-fields{
				position : relative;				
				overflow : hidden;
			}
			
			label{
				font-size : 18px;
			}
			
			input[type="email"], input[type="password"]{
				display : inline-block;
				border : 1px solid #ccc;
				box-sizing : border-box;			
				width : 100%;
				padding: 12px 20px;
				margin: 8px 0;
				
			}
			.button {
				background-color: #3456ef;
				color: white;
				padding: 14px 20px;
				margin: 8px 0;
				border: none;
				cursor: pointer;
				width: 100%;
				font-size : 14px;
			}
			.button:hover {
				opacity: 0.8;
			}

		</style>
	</head>
	
	<body>
		<div class="form">
			<div class="form-header">
				<h1>LOGIN</h1>
			</div>
			
			<div class="form-fields">
				<form action="P7-2.php" method="post">
					<label>Email Address</label>
					<input type="email" name="email_id" placeholder="Enter your Email ID" /><br />
					<label>Password</label>
					<input  type="password" name="password" placeholder="Enter your password" /><br />
					<input class="button" type="submit" name="submit" value="Login" />
				</form>
			</div>
		</div>
	</body>
</html>


