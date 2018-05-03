
  <footer class="site-footer">
    <div class="container">
      <div class="row"> 
          <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">About Al-Burkhan</h4>
          <img src="images/alburkhan.png" alt="Logo" width="250" height="300">
		  <?php
				$result = $db->prepare("SELECT * FROM welcome");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				?>  
          <div class="spacer-20"></div>
        <?php echo strip_tags(substr($row['body'],0,180)) ;?>...  <a href="about.php">Read More</a>
		  <?php } ?>
		</div>
        
		 <?php
                            //include('../connect.php');
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
               ?> 
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">Contact Information</h4>
          <?php echo $row['phone']; ?> </br>
		  <?php echo $row['linkedin']; ?></br>
		 <?php echo $row['email']; ?>
        </div>
		
      </div>
    </div>
  </footer>
  <footer class="site-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="copyrights-col-left col-md-6 col-sm-6">
          <p>&copy; 2018 البرخن. All Rights Reserved</p>
        </div>
             </div>
    </div>
	<?php } ?>
  </footer>
  <!-- End Footer --> 
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 
</div>
<script src="js/jquery-2.0.0.min.js"></script> 
<script src="plugins/prettyphoto/js/prettyphoto.js"></script> 
<script src="js/helper-plugins.js"></script> 
<script src="js/bootstrap.js"></script> 
<script src="js/waypoints.js"></script> 
<script src="plugins/mediaelement/mediaelement-and-player.min.js"></script>  
<script src="js/init.js"></script> 
<script src="plugins/flexslider/js/jquery.flexslider.js"></script> 
<script src="plugins/countdown/js/jquery.countdown.min.js"></script>  
<script src="style-switcher/js/jquery_cookie.js"></script> 
<script src="style-switcher/js/script.js"></script> 

</body>

</html>