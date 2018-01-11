<?php  
session_start();  
$user=$_SESSION['username'];

if(!$_SESSION['username'])  
{  
    header("Location: homecontact.php");  
}  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<link rel="stylesheet" href="css/homehead.css">
	<link rel="stylesheet" href="css/homeimage.css">
	<link rel="stylesheet" href="css/table.css">
</head>
<body>

<?php include("header.php"); ?>
<?php include("navigator2.php"); ?>
</br>
<div id="images">    
    <img class="mcqlogo" border="0" alt="E-Examination" src="/project/image/e-exam.gif" >
    <img class="mcqlogo" border="0" alt="MCQ" src="/project/image/mcq.jpg" >
</div>
<h2 style = "background-color:#eff; color:black; text-align:center;">Contact</h2>
<table  class="center1">
  <tr>
    <td rowspan="2"><b>Website Administrator</b></td>
    <td>Mir Mursalin Ankur</td>
  </tr>
  <tr>
    <td>Dept. of CSE,</br>Rajshahi Univesity of Engineering & Technology</td>
  </tr>
  <tr>
    <td><b>Email</b></td>
	<td>mir.ankur.ruet13@gmail.com</td>
  </tr>
</table>
</br>
<?php include("footer.php"); ?>

</body>
</html>

