<?php
    $name=$_GET["name"];
    $age=$_GET["age"];
    $sex=$_GET["sex"];
    $bday=$_GET["bday"];
    $add=$_GET["add"];
    $school=$_GET["school"];

    $father=$_GET["father"];
    $fage=$_GET["fage"];
    $fbday=$_GET["fbday"];
    $fwork=$_GET["fwork"];
    $fschool=$_GET["fschool"];
    
    $mother=$_GET["mother"];
    $mage=$_GET["mage"];
    $mbday=$_GET["mbday"];
    $mwork=$_GET["mwork"];
    $mschool=$_GET["mschool"];

    $f=fopen("personalData.txt","a");
    fwrite($f,"Name: ".$name."\n");
    fwrite($f,"Age: ".$age."\n");
    fwrite($f,"Sex: ".$sex."\n");
    fwrite($f,"Date Of Birth: ".$bday."\n");
    fwrite($f,"Address: ".$add."\n");
    fwrite($f,"School Last Attended: ".$school."\n\n");

    fwrite($f,"Parent's Information\n\nName Of Father: ".$father."\n");
    fwrite($f,"Age: ".$fage."\n");
    fwrite($f,"Birthday: ".$fbday."\n");
    fwrite($f,"Occupation: ".$fwork."\n");
    fwrite($f,"Highest Educational Attainment: ".$fschool."\n\n");

    fwrite($f,"Name Of Mother: ".$mother."\n");
    fwrite($f,"Age: ".$mage."\n");
    fwrite($f,"Birthday: ".$mbday."\n");
    fwrite($f,"Occupation: ".$mwork."\n");
    fwrite($f,"Highest Educational Attainment: ".$mschool."\n\n");

    fclose($f);
?>
    <script>
        var r = window.location.search
        alert("Thankyou! Your Information has been submitted.");
    </script>
<p style="font-size: 30px;">Please go back to Homepage. <a href="home.php">Click</a> here.</p>
<audio src='audios/sunmoon.mp3' autoplay>Sorry your browser does not support some audio.</audio>