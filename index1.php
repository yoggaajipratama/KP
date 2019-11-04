<?php
ob_start();
session_start();
?>
<html>
<head>
	<title>Tutorial Membuat Form Login dengan PHP MySQL</title>
	<style rel="stylesheet" type="text/css">
		body {
			padding-top:120px;
			background: #e5e5e5;
			font-family: 'Open Sans', sans-serif;
		}
		.login {
			width: 400px;
			margin: 16px auto;
			font-size: 13px;
		}
		.login-header,.login p {
			margin-top: 0;
			margin-bottom: 0;
		}
		.login-header {
			background: #28d;
			padding: 20px;
			font-size: 1.4em;
			font-weight: normal;
			text-align: center;
			color: #fff;
		}
		.login-container {
			background: #f5f5f5;
			padding: 12px;
		}
		.login p {
			padding: 12px;
		}
		.login input {
			box-sizing: border-box;
			display: block;
			width: 100%;
			border-width: 1px;
			border-style: solid;
			padding: 16px;
			outline: 0;
			font-family: inherit;
			font-size: 0.95em;
		}
		.login input[type="email"],.login input[type="password"] {
			background: #fff;
			border-color: #bbb;
			color: #555;
		}
		.login input[type="email"]:focus, .login input[type="password"]:focus {
			border-color: #888;
		}
		.login input[type="submit"] {
			background: #28d;
			border-color: transparent;
			color: #fff;
			cursor: pointer;
		}
		.login input[type="submit"]:hover {
			background: #17c;
		}
		.login input[type="submit"]:focus {
			border-color: #05a;
		}
	</style>
</head>
<body>
<div class="login">
    <h2 class="login-header">Form Login PHP MySQL</h2>
    <form action="login.php?op=in" class="login-container" method="POST">
		<p><input type="text" name="id_user" placeholder="Username"></p>
		<p><input type="password" name="password" placeholder="Password"></p>
		<p><input type="submit" value="Login"></p>
	</form>
</div>
</body>
</html>