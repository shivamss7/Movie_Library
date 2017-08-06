<!DOCTYPE html>
<html>
<head>
<title> Add Movies </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
</head>
<body>

<?php
if (isset($_POST['submit'])) {
    
$title = $_POST["title"];
$year = $_POST["year"];
$genre = $_POST["genre"];
$imdb = $_POST["imdb"];
$fav = $_POST["fav"];
$new = $_POST["new"];
$photo_path = $_POST["photo_path"];
$movie_path = $_POST["movie_path"];
$description = $_POST["description"];


$conn = mysqli_connect("localhost", "root" , "" ,"films");
if(!$conn)
  die("Connection failed: " . mysqli_connect_error());
 
   $q = "INSERT INTO `movie`( `title`, `genre`, `year`, `imdb`,`favorite`,`new`, `photo_path`, `movie_path`, `description`) VALUES ('$title','$genre','$year','$imdb','$fav','$new','$photo_path','$movie_path','$description');";
 if(mysqli_query($conn,$q))
 {
    echo "<script>";
    echo "alert('Data stored into database')";
    echo "</script>";
 }
 else
{
    echo "<script>";
    echo "alert('Data not stored into database')";
    echo "</script>";
}
}

?>
<div class = "header">
<a href = "index.php">Home</a>
</div>

<div class = "main">
<div class = "container">
<form method="post" action="">

<label for = "Title">Title</label>
<input type = "text" id = "title" name ="title" placeholder="Movie Title.." required>


<label for = "age">Year</label>
<input type = "number" id = "year" name ="year" placeholder="Year .. " required>

<label for = "genre">Genre</label>
<select id = "genre" name = "genre">

<option value = "action">Action</option>
<option value = "animation">Animation</option>
<option value = "biography">Biography</option>
<option value = "comedy">Comedy</option>
<option value = "family">Family</option>
<option value = "musical">Musical</option>
<option value = "romance">Romance</option>

</select>

<label for = "IMDB Rating">IMDB Rating</label>
<input type = "text" id = "imdb" name ="imdb" placeholder="IMDB Rating.." required>

<label for = "favorite">Favorite</label>
<select id = "fav" name = "fav">
<option value = "yes">Yes</option>
<option value = "no">No</option>
</select>

<label for = "New">New</label>
<select id = "new" name = "new">
<option value = "yes">Yes</option>
<option value = "no">No</option>
</select>

<label for = "Photo-path">Photo Path</label>
<input type = "text" id = "photo_path" name ="photo_path" placeholder="Photo Path .. " required>

<label for = "Movie-path">Movie Path</label>
<input type = "text" id = "movie_path" name ="movie_path" placeholder="Movie Path .. " required>

<lable for = "feedback">Description</lable>
<textarea  name="description" id = "description" placeholder="description.." style="height: 100px"></textarea>

<input type = "submit" value = "Submit" name ="submit">
</form>
</div>
</body>

<style>
.header { display: block; size: 20px; background-color: #FC7D01;color: white;text-align: center; height: 30px;padding:10px 15px 9px 15px;letter-spacing: 1px; text-transform: uppercase;line-height: 25px}
.header a {color: white;left: 10;background-color:black;position: absolute;top: 11px; left: 10px;padding:10px 15px 9px 15px;letter-spacing: 1px; text-transform: uppercase;line-height: 25px;text-decoration: none;}
a:hover{background-color: #3d5b99; }
input[type=text], select, textarea, input[type=number],input[type=check] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</html>
