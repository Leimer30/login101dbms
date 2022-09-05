<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Please Login</title>
</head>
<style type="text/css">
	body
    {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background:url(images/Planet9.jpg);
    }
h2{
	text-align: center;
	color: black;
	font-family: Times New Roman;
}
form
    {
        width: 500px;
        border: 2px solid #acc;
        padding: 30px;
        background: green;
        border-radius: 15px;
    }
input
    {
        border: 2px solid #acc;
        width: 95%;
        padding: 10px 15px;
        margin: 10px auto;
		color:black;
		background-color: red;
    }
::placeholder{
	color: black;
}
button
    {
        float: right;
        background:brown;
        padding: 10px 15px;
        color: black;
        border-radius: 5px;
        margin-right: 1opx;
    }
button:hover
    {
        opacity: .7;
    }
</style>
<body>
	<form action="login_query.php" method="POST">
  	 	<h2>Admin Login</h2>
        <input type="text" id="user" name="username" placeholder="Username" required/><br><br>
        <input type="password" id="pass" name="password" placeholder="Password" required/><br><br>
        <button type="submit" id="btn" name="login" default>Login</button>
  	</form>
</body>
</html>
