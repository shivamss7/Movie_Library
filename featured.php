<?php
require_once('config.php');
?>

<!DOCTYPE HTML>
<head>
<title>My Movies Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
</head>
<body>
<a class = "home" href = "index.php" style="color: white;position:absolute; top: 22px;left: 20px"> Home </a>
  <div class="header">
     <div class="headertop_desc">
      <div class="wrap">
              <div class="nav_list">
             <ul>
              <li><a>New Movies</a><li>
          </ul>
              </div>
          
        <div class="clear"></div>
      </div>
      </div>
         <div class="clear"></div>
      </div>

   <!------------End Header ------------>

  <div class="main">
    <div class="wrap">
      <div class="content">
     

        <div class="section group">
                <?php
          
            
         $query = "SELECT * FROM `movie` WHERE `favorite` = 'yes'";

          $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

           while($row = mysqli_fetch_assoc($result)){

                ?>
       <div class="grid_1_of_5 images_1_of_5">
        <div class = "info">
           <a href="preview.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $row['photo_path'] ?>" alt="" /></a>
           <h2><a href="preview.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></h2>
           </div>
           <div class = "rate">
           <a href="preview.php?id=<?php echo $row['id'] ?>"><?php echo $row['imdb'] ?></a>
           <a href="preview.php?id=<?php echo $row['id'] ?>"><?php echo $row['genre'] ?></a>
           </div>
          </div>  
          <?php
        }
        ?>
        
      </div>
     </div>
  </div>
</div>
   <div class="footer">
      <div class="wrap">  
      
       <div class="copy_right">
        <p>Company Name © All rights Reseverd</a> </p>
       </div>     
        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {      
      $().UItoTop({ easingType: 'easeOutQuart' });
      
    });
  </script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

