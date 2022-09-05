<?php session_start();
if(empty($_SESSION['id'])):
    header('Location:login.php');
endif;
?>

<!DOCTYPE html>
<html>
<head>
    <title>RemsPage</title>
    <link rel = "stylesheet" type = "text/css" href ="css/homestyle.css" />
</head>
<body style="background:url(images/Planet9.jpg);">
<a href="logout_query.php"><div style="float:right;"><button class="logout_btn">LOGOUT</button></div></a>
    <div style="background-color: teal; width: 10%; height: auto; margin: 10px;">
        <nav style="height:68px;">
            <ul style="size: 20px; color:green;">
                <a href="home.php">[ Homepage ]</a>
                <br><br>
                <a href="Form.php">[ Register ]</a>
                <br><br>
            </ul>
        </nav>
    </div>
        <center><img src="images/EVSU.jpg" width="250px" height="250px"></center>
        <font face="chiller" color="blue" size="50px"><center><h1><b></b>HELLO THERE! WELCOME TO MY PAGE!</h1></center></font></div>
        <center>
		<div style="width:240px; height:320px; background-color: grey;"><img src="images/mypic.jpg" width="240px" height="270px"><center><h3><b>Rems<span style="color:blue">Page</span></b></h3></center></div>
        </center>
</body>
<audio src='audios/thenights.mp3' autoplay>Sorry your browser does not support some audio.</audio>
</html>
