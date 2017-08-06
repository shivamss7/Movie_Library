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
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
 <div class = "search">
 <form action = "search.php?search="search" "> <input type="text" name="search" placeholder="Search.." style="position: absolute;top: 5px;right: 20px;"> </form>
  </div>

	<div class="header">
		 <div class="headertop_desc">
			<div class="wrap">
       	      <div class="nav_list">
					   <ul>
					    <li><a href = "add_movie.php">Add Movies</a><li>
					</ul>
					    </div>
					
				<div class="clear"></div>
			</div>
	  	</div>
  	  		<div class="wrap">
				<div class="header_top">
					
						
					</div>
						  <script type="text/javascript">
								function DropDown(el) {
									this.dd = el;
									this.initEvents();
								}
								DropDown.prototype = {
									initEvents : function() {
										var obj = this;
					
										obj.dd.on('click', function(event){
											$(this).toggleClass('active');
											event.stopPropagation();
										});	
									}
								}
					
								$(function() {
					
									var dd = new DropDown( $('#dd') );
					
									$(document).click(function() {
										// all dropdowns
										$('.wrapper-dropdown-2').removeClass('active');
									});
					
								});
					    </script>
			 <div class="clear"></div>
  		</div>     
				<div class="header_bottom">
					<div class="header_bottom_left">				
						<div class="categories">
						   <ul>
						  	   <h3>Genre</h3>
							      <li><a href="genre.php?genre=all">All</a></li>
							      <li><a href="genre.php?genre=action">Action</a></li>
							      <li><a href="genre.php?genre=animation">Animation</a></li>
							      <li><a href="genre.php?genre=biography">Biography</a></li>
							      <li><a href="genre.php?genre=comedy">Comedy</a></li>
							       <li><a href="genre.php?genre=family">Family</a></li>
							       <li><a href="genre.php?genre=musical">Musical</a></li>
							       <li><a href="genre.php?genre=romance">Romance</a></li>
							    
						  	 </ul>
						</div>					
		  	         </div>
						    <div class="header_bottom_right">					 
						 	    <!------ Slider ------------>
								  <div class="slider">
							      	<div class="slider-wrapper theme-default">
							            <div id="slider" class="nivoSlider">
					                <a href="preview.php?id=2"><img src="images/1.jpg" data-thumb="images/1.jpg" alt="" /> </a>
					                <a href="preview.php?id=4"><img src="images/2.jpg" data-thumb="images/2.jpg" alt="" /> </a>
					                <a href="preview.php?id=1"><img src="images/3.jpg" data-thumb="images/3.jpg" alt="" /> </a>
					                <a href="preview.php?id=5"><img src="images/4.jpg" data-thumb="images/4.jpg" alt="" /> </a>
				                    <a href="preview.php?id=3"><img src="images/5.jpg" data-thumb="images/5.jpg" alt="" /> </a>
							            </div>
							        </div>
						   		</div>
						<!------End Slider ------------>
			         </div>
			     <div class="clear"></div>
			</div>
   		</div>
   </div>
   <!------------End Header ------------>
  <div class="main">
  	<div class="wrap">
      <div class="content">
    	<div class="content_top">
    		<div class="heading">
    	<a href="new.php">	<h3>New Movies</h3></a>
    		</div>
    	</div>

	      <div class="section group">
                <?php
         $query = "SELECT * FROM `movie` WHERE `new` = 'yes' LIMIT 4";

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
			<div class="content_bottom">
    		<div class="heading">
      <a href="featured.php"><h3>Featured Movies</h3></a>
    		</div>
    	  </div>
    	  <div class="section group">
    	  <?php
           $query = "SELECT * FROM `movie` WHERE `favorite` = 'yes' LIMIT 4";

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
				<p>Chintu Movie Library © All rights Reseverd</a> </p>
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

