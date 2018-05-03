<?php include "header.php"; ?>
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(images/slide1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Books</li>
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
          <h1>Books</h1>
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
                    <h3>All Books</h3>
                  </div>
                  
               
         
              </header>
              <section class="listing-cont">
                <ul>
				
                                <?php 
							if(isset($_POST['filter']))
				{
					$result = mysql_query("SELECT * FROM books where audio like '%$filter%' or audio_detail like '%$filter%''");
                    
				}
				else
				{
					$result = mysql_query("SELECT * FROM books");
                }
					
									if($result){				
				while($row=mysql_fetch_array($result)){
					
				$bookid = $row["id"];	
					echo '<ul class="col-sm-4">';
					echo '<div class="audio-image-wrapper">
						  <div class="s">
						  <div class="audioinfo text-center">
					<a href="book-details.php?bookid='.$bookid.'" rel="bookmark" title="'.$row['book_title'].'"><img src="books/'.$row['book_pic'].'" width="150" height="300" /></a>
					<h4><a href="book-detail.php?bookid='.$bookid.'" rel="bookmark" title="'.$row['book_title'].'">'.$row['book_title'].'<p></a></h4>
					<a href="book-detail.php?bookid='.$bookid.'" class="btn btn-default add-to-cart">Download</a><p></br><p>
					</div>';		
					echo '</ul>';			
				}
									}
									
			?>
				</div>	
        </div>


                          
          <!-- Start Sidebar -->
		  <?php include"side-bar.php"; ?>
  <!-- Start Footer -->
<?php include "footer.php"; ?>
					