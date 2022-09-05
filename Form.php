<!DOCTYPE html>
<html>
<head>
   <title> Fill out Form </title>
   <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<style type="text/css">
    body{
        background:url(images/Planet9.jpg);
        font-family:Arial;
        text-align:center;
        color: white;
        height: auto;
    }
    input.int{
        width: 500px;
        height: 50px;
    }
    input.sbmt{
        background-color: black;
        color: white;
        width: 100px;
        height: 40px;
        border-radius: 10px;
        font-size: large;
    }
    input.rst{
        background-color: red;
        color: white;
        width: 100px;
        height: 40px;
        border-radius: 10px;
        font-size: large;
    }
    form{
        font-size: xx-large;
    }
</style>
<body>
   <form action="information.php" method="get">
        <img src="images/EVSU.jpg" width="200px" height="200px">
<h2>PERSONAL INFORMATION</h2>
<p> Fill in the blanks according to your personal information.<br/> If you are finished just click the submission button below the form. Thankyou!</p>
            Name:<br />
           <input type="text" class="int" id="name" name="name" />
       <br>
           Age:<br />
           <input type="text" class="int" id="age" name="age" />
       <br>
           Sex:<br />
           <input type="text" class="int" name="sex" />
       <br>
        <br>
           Date Of Birth:<br />
           <input type="text" class="int" name="bday" />
       <br>
           Address:<br />
           <input type="text" class="int" name="add" />
       <br>
           School Last Attended:<br />
           <input type="text" class="int" name="school" />
       <br>
        <br>
       <h5> Parent's Personal Information </h5>
           Name Of Father:<br />
           <input type="text" class="int" name="father" />
       <br>
           Age:<br />
           <input type="text" class="int" name="fage" />
       <br><br>
           Date Of Birth:<br />
           <input type="text" class="int" name="fbday" />
       <br>
           Occupation:<br />
           <input type="text" class="int" name="fwork" />
       <br>
           Highest Educational Attainment:<br />
           <input type="text" class="int" name="fschool" />
       <br>
        <br>
           Name Of Mother(Maiden):<br />
           <input type="text" class="int" name="mother" />
       <br>
           Age:<br />
           <input type="text" class="int" name="mage" />
       <br>
           Date Of Birth:<br />
           <input type="text" class="int" name="mbday" />
       <br>
           Occupation:<br />
           <input type="text" class="int" name="mwork" />
       <br>
           Highest Educational Attainment:<br />
           <input type="text" class="int" name="mschool" />
       <br>
       <input type="Submit" class="sbmt"/> <input type="Reset" class="rst"/>
   </form>
</body>
</html>