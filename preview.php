<?php

require_once('config.php');

$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<link href="http://vjs.zencdn.net/6.2.0/video-js.css" rel="stylesheet">
	<link href="css/preview_style.css" rel="stylesheet" type="text/css" media="all"/>
  <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
</head>
<body>

<?php

 $query = "SELECT * FROM `movie` WHERE `id` = '$id'";

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

$row = mysqli_fetch_assoc($result)


?>
<a href = "index.php" style="color: white;position:absolute; top: 35px;left: 20px"> Home </a>
<div class = "top_bar"> <div class = " wrap">

<div style = "font-size: 40px;color: white;text-align: center;"><?php echo $row['title'] ?></div> 
</div></div>


<div class = "header">
<div class = "photo_container">
<img src = "<?php echo $row['photo_path'] ?>">
</div>

 <div class = "main">
  <video class = "video-js vjs-big-play-centered" width="400" controls data-setup = "{}">
   <source src="<?php echo $row['movie_path'] ?>" type="video/mp4">
 <track src="Movies/A Street Cat Named Bob (2016) [YTS.AG]/A.Street.Cat.Named.Bob.2016.BRRip.XviD.AC3-EVO.srt" kind="captions" srclang="en" label="English">
  <source src="mov_bbb.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video>
 <script src="http://vjs.zencdn.net/6.2.0/video.js"></script>
 </div></div>


 <div class = "footer">

     <div class = "content_bottom">
<div class = "heading" style="text-align: center;">
<div class= "info" style="display: inline;">Year : <?php echo $row['year'] ?> </div>
<div class= "info" style="display: inline;">Genre : <?php echo $row['genre'] ?></div>
<div class= "info" style="display: inline;">IMDB : <?php echo $row['imdb'] ?> </div>
</div> </div>

         
        <div class = "content_bottom"> 
        <div class = "heading"> Description </div> </div><br>
        <div class = "desc">
        <p><?php echo $row['description'] ?>    </p>
        </div><br>
        
 	     <hr>
 	        <div class="copy_right">
				<p>Company Name © All rights Reseverd</a> </p>
		     </div>	<br>		
 </div>
  <script type="text/javascript">
    $(document).ready(function() {      
      $().UItoTop({ easingType: 'easeOutQuart' });
      
    });
  </script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>