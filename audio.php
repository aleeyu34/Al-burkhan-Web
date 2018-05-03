<?php include "header.php"; ?>
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(images/slide1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Audio</li>
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
        <div class="col-md-12">
          <h1>Audio</h1>
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
            <!-- Events Listing -->
            <div class="listing events-listing">
              <header class="listing-header">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <h3>Audio</h3>
                  </div>
                  
                </div>
              </header>
              <section class="listing-cont">
                <ul>
				<?php                     
          
				if(isset($_POST['filter']))
				{
					$result = mysql_query("SELECT * FROM audio where audio like '%$filter%' or audio_detail like '%$filter%''");
                    
				}
				else
				{
					$result = mysql_query("SELECT * FROM audio");
                }
					
									if($result){				
				while($row=mysql_fetch_array($result)){
					
				$audioid = $row["id"];	
					echo '<ul class="col-sm-4">';
					echo '<div class="audio-image-wrapper">
						  <div class="s">
						  <div class="audioinfo text-center">
					
					<h2><a href="audio-detail.php?audioid='.$audioid.'" rel="bookmark" title="'.$row['audio_detail'].'">'.$row['audio_title'].'<p>'.$row['audio_detail'].'</a></h2>
					
				
					
					<a href="audio-detail.php?audioid='.$audioid.'" class="btn btn-default add-to-cart">Listen</a>
					</div>';		
					echo '</ul>';			
				}
				}
				?>

                                                           
             
              </section>
            </div>
          </div>
          <!-- Start Sidebar -->
		  <?php include"side-bar.php"; ?>
  <!-- Start Footer -->
<?php include "footer.php"; ?>