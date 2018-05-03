<?php include"header.php";
?>
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <?php
               $id=$_GET['audioid'];
	$result = $db->prepare("SELECT * FROM audio where id= :post_id");
	$result->bindParam(':post_id', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){                        
?>
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="audio.php">Audio</a></li>
            <li class="active"><?php echo $row['audio_title']; ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header --> 
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-10 col-xs-8">
          <h1><?php echo $row['audio_title']; ?></h1>
        </div>
       
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <nav class="btn-toolbar pull-right"> <a href="#" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Print" ><i class="fa fa-print"></i></a> <a href="#" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Contact us" ><i class="fa fa-envelope"></i></a> <a href="#" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Share event" ><i class="fa fa-location-arrow"></i></a> </nav>
              <h2 class="post-title"><?php echo $row['audio_title']; ?></h2>
            </header>
            <article class="post-content">
              <div class="event-description"> 
                <div class="spacer-20"></div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">Listen or Download Audio</h3>
                      </div>
                      <div class="panel-body">
                        <ul class="info-table">
                          <li><i class="fa fa-folder"></i> <?php echo $row['audio_detail']; ?></li>
                          <li><i class="fa fa-music"></i> <?php echo $row['file']; ?></li>
                          <li><i class="fa fa-calendar"></i> <?php echo $row['date']; ?></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  
                </div>
               
				 <div class="post-meta"> 
				<h5>Share this Audio:</h5>                                    
<div class="addthis_sharing_toolbox"></div>
			  </div>
				</div>
	
           </article>
          </div>
		  <?php } ?>
          <!-- Start Sidebar -->
         <?php include"side-bar.php"; ?>
  <!-- Start Footer -->
  <?php include"footer.php"; ?>