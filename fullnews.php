<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проект</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">


</head>
<body>


<?
$link = mysqli_connect('localhost', 'root', '', 'project');
$id=$_GET['id']; 

$req = "SELECT * FROM `news` WHERE `id` = $id";

$result = mysqli_query($link, $req);
$epms = mysqli_fetch_assoc($result);

$news = [];
while ($row = mysqli_fetch_assoc($result))
    $news[] = $row
?>

<a href='../' class='btn'>Назад</a>

<div class="fullProduct">
<?php
// echo "<img src='img/".$epms['img']."'>";

echo "<div class='titlenews'>";
echo "<center><h1>".$epms['title']."</h1>"; 
echo "<p>".$epms['subtitle']."</p>";
echo "</div>";

echo "<h3>".$epms['text']."</h3>";

?>
</div>


</body>
</html>