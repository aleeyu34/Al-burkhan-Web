<?php include "header.php"; ?>  

<section id="main-slider" class="no-margin">
<div class="carousel slide">
<ol class="carousel-indicators">
<li data-target="#main-slider" data-slide-to="0" class="active"></li>
<li data-target="#main-slider" data-slide-to="1"></li>
<li data-target="#main-slider" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="item active" style="background-image:url(images/bg1.jpg)">
<div class="container">
<div class="row slide-margin">
<div class="col-sm-6">
<div class="carousel-content">
<h1 class="animation animated-item-1">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</h1>
<h2 class="animation animated-item-2">As-Salam Alaykoum, welcome to البرخان.</h2>

</div>
</div>
<div class="col-sm-6 hidden-xs animation animated-item-4">
<div class="slider-img">
<img src="images/img1.png" class="img-responsive">
</div>
</div>
</div>
</div>
</div>
<div class="item" style="background-image:url(images/bg2.jpg)">
<div class="container">
<div class="row slide-margin">
<div class="col-sm-6">
<div class="carousel-content">
<h1 class="animation animated-item-1"></h1>
<h2 class="animation animated-item-2"></h2>

</div>
</div>
<div class="col-sm-6 hidden-xs animation animated-item-4">
<div class="slider-img">
<img src="images/img2.png" class="img-responsive">
</div>
</div>
</div>
</div>
</div>
<div class="item" style="background-image:url(images/bg3.jpg)">
<div class="container">
<div class="row slide-margin">
<div class="col-sm-6">
<div class="carousel-content">
<h1 class="animation animated-item-1"></h1>
<h2 class="animation animated-item-2"></h2>
</div>
</div>
<div class="col-sm-6 hidden-xs animation animated-item-4">
<div class="slider-img">
<img src="images/img3.png" class="img-responsive">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
  <!-- End Hero Slider --> 
  <!-- Start Notice Bar -->
 <div class="notice-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Next</span> <strong>Upcoming Event/Lecture</strong> </div>
        <?php
				$result = $db->prepare("SELECT * FROM events ORDER BY id DESC Limit 1");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){   
               ?> 
		<div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
          <h5><a href="events.php"><?php echo $row['title']; ?></a></h5>
          <span class="meta-data"><?php echo $row['venue']; ?></span> </div>
        <div id="counter" class="col-md-4 col-sm-6 col-xs-12 counter" data-date="July 13, 2016">
          <div class=""> <span ><?php echo $row['date']; ?></span> </div>
          
        
		</div>
		<?php } ?>
        <div class="col-md-2 col-sm-6 hidden-xs"> <a href="events.php" class="btn btn-primary btn-lg btn-block">More</a> </div>
      </div>
    </div>
 
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row"> 
          
        </div>
        <div class="row">
          <div class="col-md-8 col-sm-6"> 
         
            <div class="listing events-listing">
              <header class="listing-header">
                <h3 class=" titles">Message From Al-Burkhan</h3>
              </header>
			  <?php
				$result = $db->prepare("SELECT * FROM welcome");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				?>  
<?php echo $row['body']; ?>             
			  <?php } ?>
            </div>
            <div class="spacer-30"></div>
            <!-- Latest News -->
            <div class="listing post-listing">
              <header class="listing-header">
                <h3 class="titles">Latest News</h3></header>
              <section class="listing-cont">
                <ul>
				<script id="salahtimes" type="text/javascript" src="http://www.islamicfinder.us/index.php/widgets/prayer_times.js" async></script>
				<li class="item post">
                    <div class="row">
                      <div class="col-md-12">
					  <?php
				$result = $db->prepare("SELECT * FROM news ORDER BY id DESC Limit 3");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){   
               ?> 
                        <div class="post-title">
                          <h2 class=" titles"><a href="news_post.php?id=<?php echo $row['id'];?>"><?php echo $row['news_title']; ?></a></h2>
                          <span class="meta-data"><i class="fa fa-calendar"></i> on <?php echo $row['date']; ?></span>
						 <p><?php echo strip_tags(substr($row['news_detail'],0,180)) ;?>...</p>
						 </div>
						<?php } ?>
                      </div>
                    </div>
					 <center> -- <a href="#">All News</a> --</center>
                  </li>
                </ul>
              </section>
			 </div>
          </div>
        
          <div class="col-md-4 col-sm-6">
            
            <div class="listing sermons-listing">
              <header class="listing-header">
              </header>
              <section class="listing-cont">
			  			  <iframe id="iframe" style="width: 330px; height: 358px; border: 1px solid #ddd;" frameborder="0" scrolling="no" src="https://www.islamicfinder.org/prayer-widget/2332459/shafi/2/0/19.5/17.5"> </iframe>
			  <iframe id="iframe1" style="width: 330px; height: 114px; border: 1px solid #ddd;" frameborder="0" scrolling="no" src="https://www.islamicfinder.org/prayertimesforlocations"> </iframe>
                <ul>
                  <li class="item sermon featured-sermon"> <span class="date"></span>
                    <h4><a href="#">Like Us on Facebook</a></h4>
					<?php
                            //include('../connect.php');
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
               ?> 
                    <div class="featured-sermon-video">
                      <!--Facebook Page-->
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F<?php echo $row['facebook'];?>%2F&tabs=timeline&width=20025&height=215&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=403202216515066" 
        width="100%" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" 
                                allowTransparency="true"></iframe>
								</div> <?php } ?>
                  </li>
                  
                 </ul>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="featured-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <h4>Updates from Books</h4>
          <a href="books.php" class="btn btn-default btn-lg">More Books</a> </div>
		  <?php
				$result = $db->prepare("SELECT * FROM books ORDER BY id DESC Limit 3");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){   
               ?> 
        <div class="col-md-3 col-sm-3 post format-image"> <a href="books/<?php echo $row['book_pic'];?>" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="books/<?php echo $row['book_pic'];?>" alt=""> </a> </div>
        <?php } ?>
		</div>
    </div>
  </div>
  
  <?php include "footer.php"; ?>
  