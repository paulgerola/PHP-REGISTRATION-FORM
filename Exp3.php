<html>
<head>
    <title>Form Elements</title>
    <style type="text/css">
        body{
            margin: 10px 300px;
            background: url('udm.png') no-repeat;
            background-size: cover;
            opacity: 0.8; 
        }
    </style>
</head>
<body>
<?php
if (empty($_GET['Submit']))
{

    print ("Sorry you can't view this page!!! <a href=try.htm> Login First before to proceed!!!</a>");
}
?>
    <div style="background-image: linear-gradient(to right, #01FFFF, #00ECFA, #00CEF1, #00B8EA);">
        
    <fieldset>
        <center><h1>Exp3 Form Elements</h1>
                <h3>Registration</h3>
        </center>
    </fieldset>

    <fieldset>
        <legend>Personal Information</legend>
            <table>
            <tr><td>FirstName<td><?php print $_GET['fname']; ?> </td>
            <tr><td>LastName<td><?php print $_GET['lname'];?></td>
            <tr><td>MiddleInitial<td><?php print $_GET['Mi'];?></td>
            <tr><td>Course<td><?php print $_GET['Course']; ?></td>
            <tr><td>Year and Section<td><?php print $_GET['YaS']; ?></td>
            <tr><td>Age<td><?php print $_GET['Age'];?></td>
            <tr><td>Birthday<td><?php print $_GET['Bday'];?></td>
            <tr><td>Birthplace<td><?php print $_GET['Bplace'];?></td>
            <tr><td>Gender<td><?php print $_GET['Gender'];?></td>
            <tr><td>Address<td><?php print $_GET['address'];?></td>
            <tr><td>Contact No.<td><?php print $_GET['ConNum'];?></td>
            <tr><td>Religion<td><?php print $_GET['Rel'];?></td>
            <tr><td>Civil Status<td><?php print $_GET['CS'];?></td>
            <tr><td>Hobbies<td><?php print $_GET['Hob'];?></td>
            <tr><td>Sport<td><?php print $_GET['Sp'];?></td>
            </table>
    </fieldset>

    <fieldset>
        <legend>Family Information:</legend>
            <table>
                    <tr>
                    <td>Mother's Name<td><?php print $_GET['Moname'];?></td>
                    <td>Age<td><?php print $_GET['MAge'];?></td>
                    <td>Occupation<td><?php print $_GET['MOccu'];?></td>
                    <td>Contact No.<td><?php print $_GET['MNum'];?></td>
                    </tr>

                    <tr>
                    <td>Father's Name<td><?php print $_GET['Faname'];?></td>
                    <td>Age<td><?php print $_GET['FAge'];?></td>
                    <td>Occupation<td><?php print $_GET['FOccu'];?></td>
                    <td>Contact No.<td><?php print $_GET['FNum'];?></td>
                    </tr>     
            </table>
    </fieldset>

    <fieldset>
        <legend>Social And School Information:</legend>
            <table>
    
                    <tr>
                    <td>Facebook:<?php print $_GET['Facebook'];?></td>
                    <td>Twitter:<?php print $_GET['Twitter'];?></td>
                    <tr>
                    <td>Instagram:<?php print $_GET['Instagram'];?></td>
                    <td>Discord:<?php print $_GET['Discord'];?></td>
                    </tr>
                    <tr>
                    <td>Telegram:<?php print $_GET['Telegram'];?></td>
                    <td>WhatsApp:<?php print $_GET['WhatsApp'];?></td>
                    </tr>

                    <tr>
                    <td>Elementary:<?php print $_GET['Elem'];?></td>
                    <td>Highschool:<?php print $_GET['High'];?></td>
                    <td>College:<td><?php print $_GET['Col'];?></td>
                    </tr>
                    <tr>
                    <td>LRN :<td><?php print $_GET['Lrn'];?></td>
                    <td>Student No. :<?php print $_GET['StudNum'];?></td>
                    <td>Gmail :<?php print $_GET['Gmail'];?></td>    
                    </tr>
            </table>
    </fieldset>
</div>
</body>
</html>