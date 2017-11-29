<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
//Now it will redirect to my home page where you then can upload stuff and use the links
?>

<!DOCTYPE html>
<html>
<head>
<style>
body{
    background-image: url("https://wallpapertag.com/wallpaper/full/c/5/0/278098-vertical-star-wars-background-1920x1080.jpg");
    font-family: monospace;
    color: white;
}

ul{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: red;
            }

li {
    float: left;
}

li a {
    display: block;
    color: #red;
    text-align: center;
    padding: 25px 25px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
}

li a.active {
    color: white;
    background-color: #4CAF50;
}

<title>My Personal Portal</title>
</style>
</head>

<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="https://elo.rocfriesepoort.nl/#-236">ELO</a></li>
  <li><a href="https://outlook.office365.com/owa/">Outlook</a></li>
  <li><a href="https://www.youtube.com">Youtube</a></li>
</ul>

<h1>Welcome to my personal portal</h1>
<p>On this site i will post my personal stuff like school docs. PHP will be added when the Pi works.</p>

<form action="#" method="post" accept-charset="utf-8" enctype="multipart/form-data">
  <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
  <input type="file" name="inputFile"><br>
  <input type="submit">
</form>

</body>
</html>